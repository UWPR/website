---
title: "Abacus"
permalink: /resources/data-analysis/Abacus/
redirect_from:
  - /tools/Abacus/
  - /tools/adjnsaf/
layout: single
toc: true
toc_sticky: true
classes: no_sidebar
author_profile: false
---

*Instructions for running Abacus on UWPR systems*

[Abacus](http://abacustpp.sourceforge.net) is a TPP-compatible spectral counting tool developed by the Nesvizhskii lab at the University of Michigan. Here are instructions for running it on the command line on our Linux systems.

## Running Abacus

1.  Generate individual interact-\*.pep.xml and interact-\*.prot.xml files for each of your input groups.

    **For a separate output column per search run**, the easiest way is:

    ```
    runCometQ --wocomet --single *.mzXML
    ```

    or, if you are using decoys in the search:

    ```
    runCometQ --wocomet --single --decoy DECOY_ *.mzXML
    ```

    Otherwise, run a command like the following for each of your files:

    ```
    xinteract -OAp -Nfile1 file1.pep.xml
    xinteract -OAp -Nfile2 file2.pep.xml
    xinteract -OAp -Nfile3 file3.pep.xml
    xinteract -OAp -Nfile4 file4.pep.xml
    ```

    **To group runs** so that each spectral count column covers two or more runs, generate the interact files for the groups, giving the groups meaningful names (e.g. "group1" and "group2"):

    ```
    xinteract -OAp -Ngroup1 file1.pep.xml file2.pep.xml
    xinteract -OAp -Ngroup2 file3.pep.xml file4.pep.xml
    ```

2.  Generate a combined ProteinProphet file using all of the interact-\*.pep.xml files as input:

    ```
    ProteinProphet interact*.pep.xml interact-COMBINED.prot.xml
    ```

3.  You should now have a set of interact-\*.pep.xml and interact-\*.prot.xml files plus interact-COMBINED.prot.xml. Abacus attempts to load every file in the directory, including the base search files (e.g. file1.pep.xml above). Temporarily move those into a "bak" subdirectory; this keeps them out of the analysis and shortens the run time. Leave the interact-\*.pep.xml files where they are.

    ```
    mkdir bak
    mv file1.pep.xml file2.pep.xml file3.pep.xml file4.pep.xml bak/
    ```

4.  Grab a copy of the Abacus parameters file:

    ```
    cp /net/pr/vol3/www/html/protocols06/Abacus/Abacus_parameters.txt .
    ```

    This parameters file is set to run Abacus with default settings using NSAF. If you need help understanding the settings, see the [Abacus support forum](https://groups.google.com/forum/#!forum/abacus-support). You will need to edit these entries:

    - combinedFile: the full path to the interact-COMBINED.prot.xml file from step 2
    - srcDir: the directory that contains your files
    - outputFile: where you want the Abacus output to go
    - fasta: the fasta file
    - decoyTag: currently set to "DECOY_"; change as needed

5.  Run Abacus:

    ```
    java -Xmx32g -jar /net/pr/vol1/ProteomicsResource/bin/abacus.jar -p Abacus_parameters.txt
    ```

6.  Undo step 3:

    ```
    mv bak/* .
    rmdir bak
    ```

7.  That's it. You should now have an ABACUS_output.tsv (or whatever you named the output file in step 4) in your search directory.

## ADJNSAF

Abacus exports **ADJNSAF** (adjusted normalized spectral abundance factor), a label-free, spectral-count-based metric used in shotgun proteomics to estimate **relative** (not absolute) protein abundance. It extends the normalized spectral abundance factor (NSAF) with adjustments that improve comparability across samples, particularly in affinity-purification mass spectrometry (AP-MS) and interactomics experiments. The description below is ChatGPT's.

**Why it is needed.** Raw spectral counts are biased: longer proteins generate more tryptic peptides and therefore more spectra, the total number of MS/MS spectra differs between runs, and highly abundant proteins can dominate the signal and obscure lower-abundance proteins. NSAF corrects for protein length and total spectral depth. ADJNSAF further corrects for run-to-run compositional effects and background dominance.

**The NSAF calculation.** For each protein *i*, count the number of MS/MS spectra assigned to that protein, typically including unique and shared peptides and filtered at a fixed false discovery rate (e.g. 1% FDR):

SC<sub>i</sub> = number of spectra matched to protein *i*
{: .equation}

Correct for the protein length L<sub>i</sub> (in amino acids):

SAF<sub>i</sub> = SC<sub>i</sub> / L<sub>i</sub>
{: .equation}

Normalize across all proteins in the run, so that the values sum to 1 and proteins can be compared within the same sample:

NSAF<sub>i</sub> = SAF<sub>i</sub> / Σ SAF<sub>j</sub>
{: .equation}

**The adjustment step.** Abacus improves spectral count quantitation by explicitly accounting for shared peptides. Instead of assigning the full spectral count of a shared peptide to every protein it maps to, Abacus distributes those spectra across proteins based on the amount of unique spectral evidence supporting each protein:

1. Count the unique spectral evidence for each protein *i*:

   s<sub>i</sub> = number of spectra from peptides unique to protein *i*
   {: .equation}

2. For a peptide *p* shared among *N* proteins, compute an adjustment factor representing the proportion of the shared peptide's spectral evidence attributed to protein *i*. Proteins with little or no unique evidence receive little or no contribution:

   a<sub>p,i</sub> = s<sub>i</sub> / Σ s<sub>j</sub> &nbsp;&nbsp; (j = 1...N)
   {: .equation}

3. Sum the unique spectra and the weighted contributions from shared peptides:

   AdjustedSC<sub>i</sub> = Σ unique spectra + Σ (shared spectra × a<sub>p,i</sub>)
   {: .equation}

4. Compute NSAF using the adjusted spectral counts:

   NSAF<sub>i</sub> = (AdjustedSC<sub>i</sub> / L<sub>i</sub>) / Σ (AdjustedSC<sub>j</sub> / L<sub>j</sub>)
   {: .equation}

When NSAF is calculated using adjusted spectral counts, it is commonly referred to as ADJNSAF. This produces a more realistic estimate of protein abundance, especially for homologous proteins and protein families.

**Interpretation.** Higher ADJNSAF indicates higher relative protein abundance. Values are meaningful for comparisons within and across samples, but do not represent absolute protein concentration.

**Strengths.** No isotope labeling required, robust to missing MS1 intensity values, and well suited for interactomics and large protein complexes.

**Limitations.** Lower dynamic range than MS1 intensity-based methods, reduced accuracy for very low spectral counts, and dependent on digestion efficiency and peptide detectability.

**Common applications.** Affinity-purification mass spectrometry (AP-MS), protein-protein interaction studies, and semi-quantitative analysis of large proteomics datasets.
