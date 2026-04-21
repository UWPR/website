---
title: "Proteomics"
permalink: /methods/protocols01/
classes: no_sidebar
author_profile: false
toc: true
toc_label: "On this page"
toc_sticky: true
---

*Protein identification and quantification*

Proteomics using mass spectrometry (LC-MS) allows system-wide identification and quantification of proteins for both discovery-based (untargeted) proteomics applications and targeted proteomics applications.

In bottom-up proteomics protein digestion and labeling technologies, when coupled to liquid chromatography-mass spectrometry (LC-MS), offer powerful methods for identifying and quantifying peptides, proteins, and posttranslational modifications (PTMs).

The strategy is to denature, reduce alkylate and digest the proteins and then separate the peptides using liquid chromatography (LC), and finally identify the peptides by MS. The resulting sequence data are used to determine the original protein components of the sample.

For PTM analyses additional enrichment strategies may be necessary, like metal affinity chromatography for selective phosphopeptide enrichment.

Quantitative proteomics using mass spectrometry (LC-MS) allows system-wide identification and quantification of proteins. Both discovery-based (untargeted) and targeted proteomics approaches are available. The two main quantitation strategies include protein/peptide labelling with stable isotopes and label-free quantitation (LFQ).

## Protein Identification {#identification}

A typical bottom-up or shotgun proteomics workflow (Figure below) consists of several major steps:

- starting with the isolation of the protein mixture from biological samples and determining the concentrations of isolated proteins
- proteins can be fractionated by gel electrophoresis, liquid chromatography methods or immunoprecipitation (IP)
- in the next step the proteins are proteolytically cleaved by enzymes (trypsin, LysC, ArgC etc.)
- the peptides can then be further fractionated or enriched by affinity chromatography, and finally cleaned up to remove any contaminants that would interfere with the downstream analyses
- the resulting peptides are then separated and analyzed by liquid chromatography coupled with mass spectrometry (LC-MS)
- the final step is to analyze the acquired data by database search to identify peptide matches to spectra and further data processing validation, modeling and protein interference  
  at UWPR we generally use Comet and the TPP (trans proteomic pipeline) software tools

![]({{ site.baseurl }}/images/MSworkflow_02.png)

## Protein quantification {#quantification}

**Discovery proteomics based quantification - identify and quantify**

Discovery proteomics experiments are intended to identify as many proteins as possible across a broad dynamic range, while at the same time measuring the relative protein abundance changes of these proteins across multiple set of samples. Discovery based quantification requires very low LC-MS method development and delivers very good reproducibility.  
Several discovery based techniques have been developed, including

- Label-free quantitation (LFQ) by either data-dependent acquisition [(DDA)](#DDA) or data-independent acquisition [(DIA)](#DIA)
- Chemical labeling with isobaric mass tags including [TMT](#TMT) and [iTRAQ](#itraq)
- Stable isotope labeling by amino acids in cell culture [(SILAC)](#SILAC)

| Feature | LFQ (DDA) | LFQ (DIA) | SILAC | TMT | iTRAQ |
|:--:|:--:|:--:|:--:|:--:|:--:|
| Multiplexing | low | low | medium | highest | high |
| Number of samples per LC-MS | 1 | 1 | 1-3 | 1-16 | 1-8 |
| Precision (%CV) | \<15-20 | \<10-15 | \<10-15 | \<5-10 | \<5-10 |
| Accuracy | Good | Good | Good | very good | very good |
| Coverage | Medium | Medium | Medium | High | High |
| Applicable to any sample type | yes | yes | no | yes | yes |
| Cost-efficient sample preparation | yes | yes | no | no | no |
| Minimal sample handling | yes | yes | no | no | no |
| Susceptible to inter-sample variations | low | low | lowest | medium | medium |
| LC reproducibility requirement | high | high | low | low | low |
| Technical replicates | multiple | multiple | few | few | few |
| Spectral library needed | no | yes | no | no | no |
| MS spectral complexity increased | no | no | yes | no | no |
| Method development | low | low | low | low | low |
| Quantification relative or absolute | yes / no | yes / no | yes / no | yes / no | yes / no |
| Quantification based on MS level | MS1 | MS1 / MS2 | MS1 | MS2 | MS2 |

**Targeted proteomics based quantification**

Targeted proteomics strategies limit the number of proteins that will be monitored and optimizes the instrument method for throughput of hundreds or thousands of samples. This translates to high quantitative precision and accuracy with very little errors in the estimation of the protein abundances  
Several targeted quantitative techniques have been developed, including:

- selected reaction monitoring (SRM) performed on triple-quadrupole instruments
- Selected ion monitoring (SIM) performed on high-resolution accurate-mass instruments
- Parallel reaction monitoring (PRM) using high-resolution MS
- Absolute quantification (AQUA) of proteins with internal heavy labelled peptides
- SureQuant internal standard (IS) targeted protein quantitation

| Feature | SRM | SIM | PRM | AQUA | SureQuant |
|:--:|:--:|:--:|:--:|:--:|:--:|
| Multiplexing | low | low | low | low | low |
| Number of samples per LC-MS | 1 | 1 | 1 | 1 | 1 |
| Precision (%CV) | \<5-10 | \<5-10 | \<5-10 | \<5-10 | \<5-10 |
| Accuracy | very good | very good | very good | very good | very good |
| Sensitivity | high | 5-50x vs full scan | high | high | high |
| Applicable to any sample type | yes | yes | yes | yes | yes |
| Cost-efficient sample preparation | yes | yes | yes | no | no |
| Minimal sample handling | yes | yes | yes | yes | yes |
| susceptible to inter-sample variations | medium | medium | medium | medium | medium |
| LC reproducibility requirement | high | high | high | low | low |
| technical replicates | multiple | multiple | multiple | few | few |
| Dynamic range | high |  |  |  |  |
| Confidence in peptide identity | medium | low | high | high | high |
| Method development | high | low | low | high | medium |
| Quantification relative or absolute | yes / yes | yes / yes | yes / yes | yes / yes | yes / yes |
| Quantification based on MS level | MS2 | MS1 | MS1 / MS2 | MS1 / MS2 | MS1 / MS2 |

## Label-free Quantification DDA {#DDA}

Label-free quantification is extremely sensitive to external factors such as differences in sample preparation, chromatography, and instrument configuration Therefore, samples should be processed in parallel with randomization and analyzed on the same column at a similar period in time. In data-dependent acquisition (DDA) workflows the sampling nature of the mass spectrometer is stochastic. This can make consistent pre-cursor and thereby protein quantitation challenging. Software algorithms minimize missing data points and maximize quantitative insights by extracting LC-MS peaks in the raw data files and mapping them to identified spectra.

Experimental considerations:

- 2 to 3 biological replicates of the controls as well as the perturbation (samples)
- Samples should be processed in parallel
- Replicate LC-MS analyses (three or more per sample) greatly increases the sensitivity of the protein quantification
- All the samples should be processed randomized with the same LC-MS setup
- Identification based on stochastic acquired fragmentation (MSMS) spectra
- Quantification based on extracted precursor m/z

Software tools for Label-free Quantification from DDA data

- Skyline for DDA quantification. \[Ref 1\]  
  [Skyline DDA Search for MS1 Filtering](https://skyline.ms/wiki/home/software/Skyline/page.view?name=tutorial_dda_search)  
  [Skyline MS1 Full-Scan Filtering](https://skyline.ms/wiki/home/software/Skyline/page.view?name=tutorial_ms1_filtering)  
  J. Meyer put together a nice protocol: Fast Proteome Identification and Quantification from Data-Dependent Acquisition--Tandem Mass Spectrometry (DDA MS/MS) Using Free Software Tools, see [Ref 1](https://pubmed.ncbi.nlm.nih.gov/31008411/)

- MaxQuant  
  [MaxQuant quantitative proteomics software package](https://www.maxquant.org/)
- Perseus  
  [for interpreting protein quantification, interaction and post-translational modification data](https://www.maxquant.org/perseus/)

- SpectroMine: DIA, DDA and PRM Searchable and Differential Abundance Analysis (limited free trial)  
  [SpectroMine from BIOGNOSYS](https://biognosys.com/software/spectromine/)

## Label-free Quantification DIA {#DIA}

Data-independent acquisition (DIA) offers several advantages over data-dependent acquisition (DDA) schemes for characterizing complex protein digests analyzed by LC-MS/MS. DIA systematically parallelizes the fragmentation of all detectable ions within a wide m/z range regardless of intensity, thereby providing broader dynamic range of detected signals, improved reproducibility for identification, better sensitivity, and accuracy for quantification. However, the composite or multiplexed fragment ion spectra generated by DIA require more elaborate processing algorithms compared to DDA.  
Lisacek et al put together a nice review of Processing strategies and software solutions for data-independent acquisition in mass spectrometry, see [Ref 2](https://pubmed.ncbi.nlm.nih.gov/31008411/)

UWPR DIA overview [page]({{ site.baseurl }}/protocols05/DIA/)

Experimental considerations:

- 2 to 3 biological replicates of the controls as well as the perturbation (samples)
- Samples should be processed in parallel
- Replicate LC-MS analyses (three or more per sample) greatly increases the sensitivity of the protein quantification
- All the samples should be processed randomized with the same LC-MS setup
- Select precursor mass range to cover the masses of most enzymatic peptides
- Select isolation window width to acquire the chimeric MSMS data
- Generate spectral libraries to identify the peptides of interest
- Chromatographic peak areas are integrated for the precursor ion in the MS1 scan or the fragment ions in the MSMS scan.

Software tools for Label-free Quantification from DIA data

- Skyline for DIA quantification. \[Ref 1\]  
  [Analysis of DIA/SWATH Data](https://skyline.ms/wiki/home/software/Skyline/page.view?name=tutorial_dia_swath)  
  [Analysis of diaPASEF Data, data independent acquisition (DIA) parallel accumulation serial fragmentation (PASEF) data, from a Bruker timsTOF instrument](https://skyline.ms/wiki/home/software/Skyline/page.view?name=tutorial_dia_pasef)

- OpenSWATH  
  [The OpenSWATH Workflow enables targeted data analysis of data-independent acquisition (DIA) or SWATH-MS proteomic data](https://openswath.org/en/latest/)

- MaxQuant  
  [MaxQuant quantitative proteomics software package](https://www.maxquant.org/)
- Perseus  
  [for interpreting protein quantification, interaction and post-translational modification data](https://www.maxquant.org/perseus/)

- Spectronaut: DIA proteomics analysis (limited free trial)  
  [Spectronaut from BIOGNOSYS](https://biognosys.com/software/spectronaut/)

## Stable isotope labeling SILAC {#SILAC}

Stable isotope labeling using amino acids in cell culture (SILAC) is a powerful method to identify and quantify relative differential changes in complex protein samples. The SILAC method uses in vivo metabolic incorporation of "heavy" 13C- or 15N-labeled amino acids into proteins followed by mass spectrometry (MS) analysis for accelerated comprehensive identification, characterization and quantitation of proteins. NeuCode amino acids enable up to four samples to be multiplexed simultaneously.  
UWPR stable isotope labeling overview [SILAC page]({{ site.baseurl }}/protocols03/isotopic_labeling/#silac)

Experimental information:

- Pino et al combined SILAC with DIA quantification workflows, see [Ref 3](https://pubmed.ncbi.nlm.nih.gov/31008411/)
- Protocols from ShaoEn Ong and Matthias Mann [A practical recipe for stable isotope labeling by amino acids in cell culture (SILAC)](https://www.researchgate.net/publication/6414471_A_practical_recipe_for_stable_isotope_labeling_by_amino_acids_in_cell_culture_SILAC) Ref 4

There are multiple different kits from different vendors available:

- [SILAC systems](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/protein-quantitation-mass-spectrometry/silac-metabolic-labeling-systems.html) from Thermo
- [search SILAC to find related products](https://www.sigmaaldrich.com/US/en) from Sigma
- [SILAC Kits and Reagents](http://shop.isotope.com/category.aspx?id=10032092) from Cambridge Isotope Laboratories  
  there are likely other I missed, so do your homework..

Software tools for SILAC quantification

- The [Trans-Proteomic Pipeline (TPP)](http://www.tppms.org/) is a complete and mature suite of free and open-source software tools for MS data representation, MS data visualization, peptide identification and validation, protein identification, quantification, and annotation, data storage and mining, and biological inference. The [Automated Statistical Analysis on Protein Ratio (ASAPRatio)](http://tools.proteomecenter.org/wiki/index.php?title=Software:ASAPRatio) and [XPRESS](http://tools.proteomecenter.org/wiki/index.php?title=Software:XPRESS) software tools are part of the TPP calculates the relative abundance of proteins, such as those obtained from stable isotope labeled precursors, by reconstructing the light and heavy elution profiles of the precursor ions and determining the elution areas of each peak

- [Skyline](https://skyline.ms/project/home/software/Skyline/begin.view) is also being used to integrate SILAC data.  
  Check [Skyline Webinar 12: Isotope Labeled Standards in Skyline](https://skyline.ms/project/home/software/Skyline/events/2015%20Webinars/Webinar%2012/begin.view?) for more information  
  You may need to define a new Isotope Label Type: Click the "Isotope label type" dropdown list in the Peptide Settings - Modifications tab, and click the \<Edit list\...\> element. Then specify your isotope label types in a line separated list in the form that appears. Once you have your two label types, you need to make sure that Arg10, Lys8 are checked when you have "heavy" selected in the list, and Arg6, Lys4 are checked when you have "medium" selected. All of these modifications will need to be added to the "Isotope modifications" list. The "Internal standard type" list will change to a check list (from a dropdown list), which allows you to specify multiple internal standard types. You would just make sure nothing is checked in this list for a SILAC experiment, which is the equivalent to "None" in the dropdown list. For targeted proteomics experiments for sample preparations involving both AQUA labeled peptides and 15N labeled proteins, both get checked as internal standard types.

- MaxQuant  
  MaxQuant is a quantitative proteomics software package designed for analyzing large mass-spectrometric data sets. It is specifically aimed at high-resolution MS data. Several labeling techniques as well as label-free quantification are supported. MaxQuant is freely available and can be downloaded from this site.  
  [MaxQuant quantitative proteomics software package](https://www.maxquant.org/)
- Perseus  
  [for interpreting protein quantification, interaction and post-translational modification data](https://www.maxquant.org/perseus/)

- PEAKS Q (limited free trial)  
  [PEAKS Q SILAC Quantification Algorithms](https://www.bioinfor.com/silac-quantification/)

## Stable isotope labeling TMT {#TMT}

Isobaric chemical tags are a more universal alternative to SILAC for simultaneous identification and quantitation of proteins in multiple sample sets. They can facilitate relative quantitation of a wide variety of samples including cells, tissues, and biological fluids.

In relative quantitation experiments, different isobaric tags are used to label different systemic conditions. Once labeled, all samples are mixed and analyzed in a single liquid chromatography-mass spectrometry (LC-MS) experiment. Because the isobaric tags possess the same chemical properties, all peptides from different TMT-labeled samples co-elute during LC separation. Once the peptides enter the mass spectrometer, they are detected simultaneously as a single and indistinguishable precursor ion peak.

Following fragmentation, the tags from each individual systemic condition generate a unique signature reporter ion in the low m/z area of the MS/MS spectrum. Peptide identification is achieved by matching the resulting ion peaks to those provided in fragment databases. Peptide quantitation is accomplished by comparing the intensities of the reporter ions.

UWPR stable isotope labeling overview [TMT page]({{ site.baseurl }}/protocols03/isotopic_labeling/#tmt) for more detailed information

Thermo [TMT Quantitation Overview](https://www.thermofisher.com/us/en/home/industrial/mass-spectrometry/proteomics-mass-spectrometry/quantitative-proteomics-mass-spectrometry/tmt-quantitation.html).

There are multiple different kits available (2-plex, 6-plex, 10-plex, 16-plex and 18-plex), including bulk, so you can adjust your order to your specific experimental needs: [TMT kits from Thermo](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/protein-quantitation-mass-spectrometry/tandem-mass-tag-systems.html)

## Stable isotope labeling iTRAQ {#itraq}

The iTRAQ reagents are multiplexed, amine-specific, stable-isotope reagents that can label all peptides in up to eight different biological samples enabling simultaneous identification and quantitation, both relative and absolute, while retaining important PTM information. There are two types of iTRAQ reagent kits, 4plex and 8plex.

UWPR stable isotope labeling overview [iTRAQ page]({{ site.baseurl }}/protocols03/isotopic_labeling/#itraq) for more detailed information

Sciex [iTRAQ Quantitation Overview](https://sciex.com/br/products/consumables/itraq-reagent)

## Targeted Quantification SRM {#SRM}

Targeted quantitation using selected reaction monitoring (SRM) with a triple quadrupole mass spectrometer has been used for a long time. In SRM, a peptide/peptides unique to the protein of interest are selected for targeted quantitation. Specific fragment ions from the target peptide along with its parent mass (referred to as transitions) and retention time are used to monitor the peptide across multiple sample sets. By using very narrow isolation windows to select the fragments, chemical interferences can be reduced to increase both selectivity and sensitivity for transitions of interest. Quantitation is performed by integrating the peak area of the transitions over the chromatographic time scale and comparing them over multiple samples. SRM quantitation is extremely sensitive, reliable, and suitable for analyzing large numbers of samples. SRM can also be used to perform absolute quantitation of targeted proteins by incorporation of appropriate stable isotope-labeled peptides as internal standards. Method development to determine the best transitions can be very extensive.

UWPR targeted proteomics by [SRM page]({{ site.baseurl }}/protocols05/MRM/) for more detailed information

## Targeted Quantification SIM {#SIM}

Selected ion monitoring (SIM) performed on high-resolution accurate-mass instruments such as an Orbitrap mass spectrometer provides the simplest method set up and the most selective and sensitive quantification. It is most suitable for quantifying tens of proteins in samples of medium complexity. SIM also provides higher sensitivity for quantification of labile peptides which do not fragment efficiently. The SIM methodology uses the quadrupole of the MS to isolate the precursor of the target peptide ion. Only the selected target ion is transferred to the mass analyzer for detection. There is no fragmentation. SIM experiments can also be multiplexed (msxSIM). In such experiments up to ten targets can be isolated sequentially, accumulated, and then transferred to the mass analyzer for detection in a single spectrum. Confirmation of the targeted peptide is accomplished using accurate-mass measurements in combination with elution-time information.

## Targeted Quantification PRM {#PRM}

Parallel reaction monitoring (PRM), also performed on high-resolution accurate-mass instruments, provides high selectivity, high sensitivity, and high-throughput quantification with confident targeted peptide confirmation. It is most suitable for quantifying tens to hundreds of targeted proteins in complex matrices. PRM methodology uses the quadrupole of the mass spectrometer to isolate a target precursor ion, fragments the targeted precursor ion in the collision cell, and then detects the resulting product ions in the mass analyzer. Quantification is carried out by extracting one or more fragment ions' area with a 5--10 ppm mass window and then comparing the information across multiple sample sets. PRM offers several advantages for targeted quantitation. It eliminates most interferences, providing high accuracy and attomole-level limits of detection and quantification. Since PRM generates a fragmentation spectrum for the target peptide, confident confirmation of the peptide identity can be obtained with spectral library matching. Furthermore, it reduces assay development time since target transitions don't need to be preselected.

UWPR targeted proteomics by [PRM page]({{ site.baseurl }}/protocols05/PRM/) for more detailed information

## Targeted Quantification AQUA {#AQUA}

AQUA strategy is for the absolute quantification (AQUA) of proteins and their modification states. Peptides are synthesized with incorporated stable isotopes as internal standards to mimic native peptides formed by proteolysis. These synthetic peptides can also be prepared with covalent modifications (e. g. , phosphorylation, methylation, acetylation, etc.) that are chemically identical to naturally occurring posttranslational modifications. Such AQUA internal standard peptides are then used to precisely and quantitatively measure the absolute levels of proteins and post-translationally modified proteins after proteolysis by using a SRM or PRM analysis in a tandem mass spectrometer.

UWPR stable isotope labeling overview [AQUA page]({{ site.baseurl }}/protocols03/isotopic_labeling/#aqua) for more detailed information

## Targeted Quantification SureQuant IS {#surequant}

SureQuant IS targeted protein quantitation workflow builds upon the PRM, SRM and AQUA approach by using spiked-in internal standards to dynamically control MS acquisition parameters and optimize instrument duty cycle, thereby maximizing the number of productive MS scans and improving sensitivity of target detection. This enhanced efficiency enables targeted quantitation of far more targets than PRM while still maintaining high quantitative performance.  
The overall SureQuant IS targeted protein quantitation workflow is comprised of two steps. First, a survey is run to verify the detectability of the reference internal standards (i.e. isotopically labeled AQUA peptides). The internal standards are standards of the peptides that the user of the SureQuant method wants to target and quantify. This analysis verifies the optimal precursor ion of each internal standard peptide and the optimal associated fragment ions that can be detected. The signal intensity of the internal standard and corresponding triggering intensity threshold is also determined from the survey run. This is followed by the SureQuant analysis, targeting the peptides of interest. Here, using the SureQuant method, the mass spectrometer is programmed to monitor the reference internal standard in the sample using low fill times and resolution. As soon as the internal standard is detected, the instrument switches to using longer fill times and higher resolution to acquire PRM data for the internal standard and the endogenous peptide. The real-time management of acquisition time maximizes the time devoted to analyte quantitation allowing a greater number of targets to be reliably detected and quantified for targeted proteomics experiments. Furthermore, the constant on-the-fly monitoring of the internal standard removes the need for retention time scheduling, allowing for a far more robust and reproducible analytical method The built-in positive internal standard control provides a definitive limit of detection (LOD) measure for the presence or absence of proteins in the sample addressing the common need to assess protein copy number expression in many molecular biology experiments. Validated instrument method templates for both Survey Run and SureQuant IS targeted protein quantitation workflow analysis are provided, preset for various Thermo SureQuant targeted assay kits, like the AKT/mTOR pathway kit. Generic SureQuant method templates are also available to simplify the development of custom protein panel assays.

## Tools for downstream analysis of proteomics data {#surequant}

[The Gene Ontology resource](http://geneontology.org/) is a comprehensive, computational model of biological systems, ranging from the molecular to the organism level, across the multiplicity of species in the tree of life.  
The Gene Ontology (GO) knowledgebase is the world's largest source of information on the functions of genes. This knowledge is both human-readable and machine-readable, and is a foundation for computational analysis of large-scale molecular biology and genetics experiments in biomedical research.

[The PANTHER (Protein ANalysis THrough Evolutionary Relationships) Classification System](https://pantherdb.org/) was designed to classify proteins (and their genes) in order to facilitate high-throughput analysis.

[Gene Ontology enRIchment anaLysis and visuaLizAtion tool GOrilla](http://cbl-gorilla.cs.technion.ac.il/)  
GOrilla is a web-based application that identifies enriched GO terms in ranked lists of genes, without requiring the user to provide explicit target and background sets. The output of the enrichment analysis is visualized as a hierarchical structure, providing a clear view of the relations between enriched GO terms.

[MSstatsTMT at Bioconductor](https://www.bioconductor.org/packages/release/bioc/html/MSstatsTMT.html) provides statistical tools for detecting differentially abundant proteins in shotgun mass spectrometry-based proteomic experiments with tandem mass tag (TMT) labeling. It provides multiple functionalities, including data visualization, protein quantification and normalization, and statistical modeling and inference. Furthermore, it is inter-operable with other data processing tools, such as Proteome Discoverer, MaxQuant, OpenMS and SpectroMine.  
[MSstatsTMT : A package for protein significance analysis in shotgun mass spectrometry-based proteomic experiments with tandem mass tag (TMT) labeling](https://msstats.org/wp-content/uploads/2018/12/MSstatsTMT.html)  
Ref 5

[WEB-based GEne SeT AnaLysis Toolkit](http://www.webgestalt.org/) is one of the first web tools for functional enrichment analysis.

[Cytoscape](https://cytoscape.org/) is an open source software platform for visualizing complex networks and integrating these with any type of attribute data.

[STRING](https://string-db.org/cgi/about) is a database of known and predicted protein-protein interactions. The interactions include direct (physical) and indirect (functional) associations; they stem from computational prediction, from knowledge transfer between organisms, and from interactions aggregated from other (primary) databases.

[Normalyzer](http://quantitativeproteomics.org/normalyzerde) normalizes the uploaded data using twelve different well known normalization methods and compares the resulting data based on quantitative and qualitative parameters.

[Venny](https://bioinfogp.cnb.csic.es/tools/venny/) allows you to create Venn diagrams.

## References

1.  Fast Proteome Identification and Quantification from Data-Dependent Acquisition-Tandem Mass Spectrometry (DDA MS/MS) Using Free Software Tools Jesse G Meyer *Methods Protoc* 2019 Mar;2(1):8. doi: 10.3390/mps2010008. Epub 2019 Jan 17. [PubMed link](https://pubmed.ncbi.nlm.nih.gov/31008411/)
2.  Processing strategies and software solutions for data-independent acquisition in mass spectrometry Aivett Bilbao, Emmanuel Varesio, Jeremy Luban, Caterina Strambio-De-Castillia, Gérard Hopfgartner, Markus Müller, Frédérique Lisacek *Proteomics* 2015 Mar;15(5-6):964-80. doi: 10.1002/pmic.201400323. Epub 2015 Feb 2. [PubMed link](https://pubmed.ncbi.nlm.nih.gov/25430050/)
3.  Improved SILAC quantification with data independent acquisition to investigate bortezomib-induced protein degradation Pino LK, Baeza J, Lauman R, Schilling B, Garcia BA. *J Proteome Res.* 2021 Apr 2;20(4):1918-1927. doi: 10.1021/acs.jproteome.0c00938. Epub 2021 Mar 25. [PubMed link](https://www.ncbi.nlm.nih.gov/labs/pmc/articles/PMC8256668/)
4.  A practical recipe for stable isotope labeling by amino acids in cell culture (SILAC) Shao-En Ong , Matthias Mann *Nat Protoc.* 2006;1(6):2650-60. doi: 10.1038/nprot.2006.427. [PubMed link](https://pubmed.ncbi.nlm.nih.gov/17406521/)
5.  MSstatsTMT: Statistical Detection of Differentially Abundant Proteins in Experiments with Isobaric Labeling and Multiple Mixtures Huang T, Choi M, Tzouros M, Golling S, Pandya NJ, Banfai B, Dunkley T, Vitek O. *Mol Cell Proteomics* 2020 Oct;19(10):1706-1723. doi: 10.1074/mcp.RA120.002105. Epub 2020 Jul 17. [PubMed link](https://pubmed.ncbi.nlm.nih.gov/32680918/)

------------------------------------------------------------------------

## UWPR pages

- [SRM page]({{ site.baseurl }}/protocols05/MRM/)
- [PRM page]({{ site.baseurl }}/protocols05/PRM/)
- [DIA page]({{ site.baseurl }}/protocols05/DIA/)
- [Isotopic Labeling page]({{ site.baseurl }}/protocols03/isotopic_labeling/)
-
