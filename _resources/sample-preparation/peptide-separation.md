---
title: "Peptide Separation"
permalink: /resources/sample-preparation/peptide-separation/
redirect_from:
  - /methods/protocols04/
  - /methods/protocols04/peptideseparation/
layout: single
toc: true
toc_sticky: true
classes: no_sidebar
author_profile: false
---

*Divide and conquer*

After digestion, peptide-level fractionation reduces sample complexity before LC-MS, and enrichment isolates peptide classes of interest such as phosphopeptides or glycopeptides. Cleanup removes the salts and detergents that would otherwise interfere with the analysis.

**UWPR protocol**: [Peptide fractionation and cleanup (pdf)]({{ site.baseurl }}/assets/docs/protocols04/UWPR_Protocols_Peptide_Fractionation_and_Cleanup.pdf), containing several peptide cleanup and separation protocols including C18, SCX, and avidin

## Strong cation-exchange (SCX) chromatography {#scx}

SCX has been used extensively for the fractionation of proteins and peptides based on charge. The SCX stationary phase usually contains aliphatic sulfonic acid groups that are negatively charged in aqueous solution, therefore tightly binding any strongly basic analytes. To recover the analyte, the resin is then washed with a solvent neutralizing this ionic interaction. Most tryptic peptides in acidic pH are characterized by a net charge of +2 and above, and they can therefore be separated by SCX from peptides possessing a net charge of +1, such as trypsin-generated phosphopeptides, C-terminal peptides, or peptides with blocked N-termini (for instance by N-acetylation), as well as from peptides containing higher charges, including ones containing missed cleavages and therefore more arginine and lysine residues. SCX fractionation can also be performed in a solid-phase extraction cartridge format for a rapid but lower resolution fractionation, or in microscale solid-phase extraction format (for example after IMAC) by utilizing a stage tip packed with an SCX disk.

<div class="references" markdown="1">
**References**

1. Fractionation of peptides by strong cation-exchange liquid chromatography. Chan KC, Issaq HJ. *Methods Mol Biol* 1002, 311-5 (2013). [link](https://pubmed.ncbi.nlm.nih.gov/23625412/)
2. Strong cation exchange chromatography in analysis of posttranslational modifications: innovations and perspectives. Edelmann MJ. *J Biomed Biotechnol* 2011, 936508 (2011). [link](https://pubmed.ncbi.nlm.nih.gov/22174558/)
3. A solid phase extraction-based platform for rapid phosphoproteomic analysis. Dephoure N, Gygi SP. *Methods* 54, 379-86 (2011). [link](https://pubmed.ncbi.nlm.nih.gov/21440633/)
4. Protocol for micro-purification, enrichment, pre-fractionation and storage of peptides for proteomics using StageTips. Rappsilber J, Mann M, Ishihama Y. *Nat Protoc* 2, 1896-906 (2007). [link](https://pubmed.ncbi.nlm.nih.gov/17703201/)
</div>

## Avidin {#avidin}

Biotin-labeled peptides and proteins are isolated on avidin or streptavidin supports, either after chemical biotinylation or after spatial in-vivo biotinylation strategies such as APEX2 proximity labeling (References 1-3).

**Third-party guide**: Thermo's [biotinylation methods overview](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-biology-learning-center/protein-biology-resource-library/pierce-protein-methods/biotinylation.html)

| Product | Vendor |
|:--|:--|
| [Pierce cell surface biotinylation and isolation kit](https://www.thermofisher.com/order/catalog/product/A44390) | Thermo Fisher |

<div class="references" markdown="1">
**References**

1. Spatially resolved proteomic mapping in living cells with the engineered peroxidase APEX2. Hung V et al. *Nat Protoc* 11, 456-75 (2016). [link](https://pubmed.ncbi.nlm.nih.gov/26866790/)
2. Biotinylation by antibody recognition: a method for proximity labeling. Bar DZ et al. *Nat Methods* 15, 127-133 (2018). [link](https://pubmed.ncbi.nlm.nih.gov/29256494/)
3. Direct detection of biotinylated proteins by mass spectrometry. Schiapparelli LM et al. *J Proteome Res* 13, 3966-78 (2014). [link](https://pubmed.ncbi.nlm.nih.gov/25117199/)
</div>

## Phosphopeptide enrichment with IMAC (Immobilized Metal Affinity Chromatography) {#phospho}

To achieve robust MS results, enrichment of phosphopeptide samples is essential because of their low abundance and poor ionization relative to non-phosphorylated peptides. Phosphopeptide enrichment reduces sample complexity and enables effective identification and characterization of phosphorylated peptides by MS. For a practical recipe to survey phosphoproteomes from the Villén lab, see Reference 1.

| Product | Vendor |
|:--|:--|
| [Pierce Fe-NTA phosphopeptide enrichment kit](https://www.thermofisher.com/order/catalog/product/A32992) | Thermo Fisher |
| [Pierce TiO2 phosphopeptide enrichment and cleanup kit](https://www.thermofisher.com/order/catalog/product/A32993), complements the Fe-NTA kit | Thermo Fisher |
| [Pierce graphite spin columns](https://www.thermofisher.com/order/catalog/product/88302), bind hydrophilic peptides (such as phosphopeptides) that C18 resins capture poorly | Thermo Fisher |
| [PHOS-Select iron affinity gel](https://www.sigmaaldrich.com/US/en/product/sigma/p9740) | Sigma |
| [PHOS-Select gallium silica spin column kit](https://www.sigmaaldrich.com/US/en/product/supelco/55416u) | Sigma |

<div class="references" markdown="1">
**References**

1. A practical recipe to survey phosphoproteomes. Edelman WC, Haas KM, Hsu JI, Lawrence RT, Villén J. *Methods Mol Biol* 1156, 389-405 (2014). [link](https://pubmed.ncbi.nlm.nih.gov/24792003/)
</div>

## Glycopeptide {#glyco}

Glycopeptides can be enriched by hydrazide chemistry, lectin affinity, or HILIC-based approaches; see the review in Reference 1 and the hydrazide-tip protocol in Reference 2.

| Product | Vendor |
|:--|:--|
| [aminoxyTMTsixplex label reagents](https://www.thermofisher.com/order/catalog/product/90401), carbonyl-reactive tags for multiplexed characterization of carbohydrates and other carbonyl-containing biomolecules | Thermo Fisher |

<div class="references" markdown="1">
**References**

1. Quantitative mass spectrometric analysis of glycoproteins combined with enrichment methods. Ahn YH, Kim JY, Yoo JS. *Mass Spectrom Rev* 34, 148-65 (2015). [link](https://pubmed.ncbi.nlm.nih.gov/24889823/)
2. Solid phase extraction of N-linked glycopeptides using hydrazide tip. Chen J, Shah P, Zhang H. *Anal Chem* 85, 10670-4 (2013). [link](https://pubmed.ncbi.nlm.nih.gov/24079330/)
</div>

## Peptide cleanup protocols for LC-MS {#cleanup}

[C18 columns and peptide desalting for mass spectrometry](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/sample-prep-mass-spectrometry/c18-columns-peptide-clean-up-mass-spectrometry.html)  
After isolation of peptides, salts and buffers can be removed using reversed phase (RP) resins, of which the C18 matrix is the most ideal for the capture of hydrophobic peptides. The peptides bind to reverse-phase columns in high-aqueous mobile phase, salts and buffers are washed off, and the peptides are eluted using a high-organic mobile phase.

[ZipTip pipette tips](https://www.emdmillipore.com/US/en/product/ZipTip-Pipette-Tips,MM_NF-C5737)  
ZipTip is a 10 µL pipette tip with a 0.6 or 0.2 µL bed of chromatography media fixed at its end with no dead volume. It is ideal for concentrating and purifying samples for sensitive downstream analyses.

[OMIX tips](https://www.agilent.com/en/product/sample-preparation/solid-phase-extraction-spe/omix-tips)  
Bond Elut OMIX pipette tips reliably purify and enrich femtomole and picomole levels of peptides and proteins prior to MALDI-TOF or LC-MS/MS.

[Proteomics sample prep: S-Trap](https://protifi.com/s-trap-solution-1/)  
S-Trap sample processing begins with sample lysis and solubilization in 5% SDS. Proteins are further denatured by acidification to pH < 1 and subsequent exposure to a high concentration of methanol. Reduction, alkylation, and digestion are performed within the physical confinement of the submicron pores of the trap. The trap does not have affinity for peptides, which elute after digestion.

[Proteomics sample prep: ProTrap XG](https://proteoform.com/products/protrapxg/)  
The ProTrap XG is a dual-stage, disposable filtration and extraction cartridge that removes a high level of SDS and performs filtration, precipitation, and digestion in a single device.

[Nestgroup desalting C18 RP MicroSpin column protocol (pdf)](https://www.nestgrp.com/pdf/Ap2/minispinRPC.pdf)  
These [spin columns (pdf)]({{ site.baseurl }}/assets/docs/protocols03/Nestgroup_minispinRPC.pdf) will retain non-polar solutes such as peptides (C18), proteins (C4), and detergents. Salts and polar solutes like DNA will not be retained.  
SUM SS18V 2-100 μL or 3-30 μg · SEM SS18V 5-200 μL or 5-60 μg · SMM SS18V 50-450 μL or 30-300 μg

[Nestgroup desalting C18 RP MicroSpin (Targa) column protocol (pdf)](https://www.nestgrp.com/pdf/Ap2/minispinRP_sm.pdf)  
These [spin columns (pdf)]({{ site.baseurl }}/assets/docs/protocols03/Nestgroup_minispinRP_sm.pdf) of water wettable TARGA C18 will retain polar and non-polar solutes such as carbohydrates, nucleotides, polar peptides, metabolites, and pharmaceutical compounds. Salts will not be retained, which permits the removal of salt from samples prior to mass spectrometry.  
SUM SS18R 2-25 μL or 3-30 μg · SEM SS18R 5-50 μL or 6-60 μg · SMM SS18R 50-150 μL or 30-300 μg

Waters Sep-Pak C18 Vac cartridges (WAT054955) for peptide desalting contain a hydrophobic, reverse-phase, silica-based bonded phase that adsorbs analytes of even weak hydrophobicity from aqueous solutions.

[Detergent removal from peptides](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/sample-prep-mass-spectrometry/detergent-removal-peptides.html)  
The Pierce detergent removal resins come in spin-column or plate formats that remove ionic, nonionic, and zwitterionic detergents from protein or peptide samples.

[ThermoTechTip19 for detergent removal (pdf)]({{ site.baseurl }}/assets/docs/protocols03/Thermo_TechTip19_Detergent_Removal.pdf)

[ThermoPierce detergent removal for low-concentration samples (pdf)]({{ site.baseurl }}/assets/docs/protocols03/ThermoPierce_DetergentRemoval.pdf)

[ThermoPierce detergent removal for samples with proteins or peptides above 100 μg/mL (pdf)]({{ site.baseurl }}/assets/docs/protocols03/ThermoPierce_DetergentRemoval_highConc.pdf)

[Nestgroup hydrophilic interaction and detergent removal (pdf)](https://www.nestgrp.com/pdf/Ap2/minispinHILIC.pdf)  
HILIC [spin columns (pdf)]({{ site.baseurl }}/assets/docs/protocols03/Nestgroup_minispinHILIC.pdf) will retain polar solutes such as peptides, proteins, and polar metabolites. Salts, detergents, and non-polar solutes will not be retained, which permits the removal of nonvolatile components from samples prior to mass spectrometry.  
SUM HIL 2-25 μL or 3-30 μg · SEM HIL 5-50 μL or 6-60 μg · SMM HIL 50-150 μL or 30-300 μg

[Nestgroup strong cation exchange cleanup (pdf)](https://www.nestgrp.com/pdf/Ap2/minispinSCX.pdf)  
These [spin columns (pdf)]({{ site.baseurl }}/assets/docs/protocols03/Nestgroup_minispinSCX.pdf) will retain cationic solutes such as peptides, protein digests, or simple organic amines. Desalt samples prior to mass spectrometry.  
SUM HIL-SCX 2-25 μL or 5-50 μg · SEM HIL-SCX 5-50 μL or 10-100 μg · SMM HIL-SCX 50-150 μL or 50-500 μg
