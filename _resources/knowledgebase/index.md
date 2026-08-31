---
title: "Knowledgebase: Shotgun Proteomics"
permalink: /resources/knowledgebase/
redirect_from:
  - /methods/protocols01/
classes: no_sidebar
author_profile: false
toc: true
toc_label: "On this page"
toc_sticky: true
---

*Protein identification and quantification*

Proteomics using liquid chromatography-mass spectrometry (LC-MS) allows system-wide identification and quantification of proteins, for both discovery-based (untargeted) and targeted applications.

In bottom-up proteomics, protein digestion and labeling technologies coupled to LC-MS offer powerful methods for identifying and quantifying peptides, proteins, and posttranslational modifications (PTMs).

The strategy is to denature, reduce, alkylate, and digest the proteins, separate the resulting peptides by liquid chromatography (LC), and identify the peptides by mass spectrometry. The resulting sequence data are used to determine the original protein components of the sample.

PTM analyses may require additional enrichment strategies, such as immobilized metal affinity chromatography for selective phosphopeptide enrichment.

The two main quantitation strategies are protein or peptide labeling with stable isotopes and label-free quantitation (LFQ).

## Protein Identification {#identification}

A typical bottom-up or shotgun proteomics workflow (Figure below) consists of several major steps:

- Starting with the isolation of the protein mixture from biological samples and determining the concentrations of isolated proteins
- Proteins can be fractionated by gel electrophoresis, liquid chromatography methods or immunoprecipitation (IP)
- In the next step the proteins are proteolytically cleaved by enzymes (trypsin, LysC, ArgC etc.)
- The peptides can then be further fractionated or enriched by affinity chromatography, and finally cleaned up to remove any contaminants that would interfere with the downstream analyses
- The resulting peptides are then separated and analyzed by liquid chromatography coupled with mass spectrometry (LC-MS)
- The final step is to analyze the acquired data by database search to identify peptide matches to spectra, followed by further data processing: validation, modeling, and protein inference  
  At UWPR we generally use Comet and the TPP (Trans-Proteomic Pipeline) software tools

![]({{ site.baseurl }}/assets/images/MSworkflow_02.png)

## Protein quantification {#quantification}

**Discovery proteomics-based quantification: identify and quantify**

Discovery proteomics experiments are intended to identify as many proteins as possible across a broad dynamic range, while at the same time measuring the relative protein abundance changes of these proteins across multiple sets of samples. Discovery-based quantification requires very little LC-MS method development and delivers very good reproducibility.

Several discovery-based techniques have been developed, including:

- Label-free quantitation (LFQ) by either data-dependent acquisition [(DDA)](#DDA) or data-independent acquisition [(DIA)](#DIA)
- Chemical labeling with isobaric mass tags including [TMT](#TMT)
- Stable isotope labeling by amino acids in cell culture [(SILAC)](#SILAC)

| Feature | LFQ (DDA) | LFQ (DIA) | SILAC | TMT |
|:--:|:--:|:--:|:--:|:--:|
| Multiplexing | low | low | medium | highest |
| Number of samples per LC-MS | 1 | 1 | 1-3 | 1-16 |
| Precision (%CV) | \<15-20 | \<10-15 | \<10-15 | \<5-10 |
| Accuracy | Good | Good | Good | very good |
| Coverage | Medium | Medium | Medium | High |
| Applicable to any sample type | yes | yes | no | yes |
| Cost-efficient sample preparation | yes | yes | no | no |
| Minimal sample handling | yes | yes | no | no |
| Susceptible to inter-sample variations | low | low | lowest | medium |
| LC reproducibility requirement | high | high | low | low |
| Technical replicates | multiple | multiple | few | few |
| Spectral library needed | no | yes | no | no |
| MS spectral complexity increased | no | no | yes | no |
| Method development | low | low | low | low |
| Quantification relative or absolute | yes / no | yes / no | yes / no | yes / no |
| Quantification based on MS level | MS1 | MS1 / MS2 | MS1 | MS2 |

**Targeted proteomics-based quantification**

Targeted proteomics strategies limit the number of proteins that will be monitored and optimize the instrument method for throughput of hundreds or thousands of samples. This translates to high quantitative precision and accuracy, with very few errors in the estimation of the protein abundances.

Several targeted quantitative techniques have been developed, including:

- Selected reaction monitoring (SRM) performed on triple-quadrupole instruments
- Selected ion monitoring (SIM) performed on high-resolution accurate-mass instruments
- Parallel reaction monitoring (PRM) using high-resolution MS
- Absolute quantification (AQUA) of proteins with internal heavy-labeled peptides
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
| Susceptible to inter-sample variations | medium | medium | medium | medium | medium |
| LC reproducibility requirement | high | high | high | low | low |
| Technical replicates | multiple | multiple | multiple | few | few |
| Dynamic range | high |  |  |  |  |
| Confidence in peptide identity | medium | low | high | high | high |
| Method development | high | low | low | high | medium |
| Quantification relative or absolute | yes / yes | yes / yes | yes / yes | yes / yes | yes / yes |
| Quantification based on MS level | MS2 | MS1 | MS1 / MS2 | MS1 / MS2 | MS1 / MS2 |

## Label-free Quantification DDA {#DDA}

![]({{ site.baseurl }}/assets/images/protein_quant_01.png)

Label-free quantification is extremely sensitive to external factors such as differences in sample preparation, chromatography, and instrument configuration. Therefore, samples should be processed in parallel with randomization and analyzed on the same column within a similar period of time. In data-dependent acquisition (DDA) workflows the sampling nature of the mass spectrometer is stochastic. This can make consistent precursor quantitation, and thereby protein quantitation, challenging. Software algorithms minimize missing data points and maximize quantitative insights by extracting LC-MS peaks in the raw data files and mapping them to identified spectra.

Experimental considerations:

- 2 to 3 biological replicates of the controls as well as the perturbations (samples)
- Samples should be processed in parallel
- Replicate LC-MS analyses (three or more per sample) greatly increase the sensitivity of the protein quantification
- All samples should be processed in randomized order with the same LC-MS setup
- Identification is based on stochastically acquired fragmentation (MS/MS) spectra
- Quantification is based on extracted precursor m/z

## Label-free Quantification DIA {#DIA}

Data-independent acquisition (DIA) offers several advantages over data-dependent acquisition (DDA) schemes for characterizing complex protein digests analyzed by LC-MS/MS. DIA systematically parallelizes the fragmentation of all detectable ions within a wide m/z range regardless of intensity, thereby providing a broader dynamic range of detected signals, improved reproducibility for identification, and better sensitivity and accuracy for quantification. However, the composite or multiplexed fragment ion spectra generated by DIA require more elaborate processing algorithms compared to DDA.

Lisacek et al. put together a nice review of processing strategies and software solutions for data-independent acquisition in mass spectrometry; see [Ref 1](#ref1).

See the UWPR [DIA overview page]({{ site.baseurl }}/resources/knowledgebase/DIA/) for more detailed information.

Experimental considerations:

- 2 to 3 biological replicates of the controls as well as the perturbations (samples)
- Samples should be processed in parallel
- Replicate LC-MS analyses (three or more per sample) greatly increase the sensitivity of the protein quantification
- All samples should be processed in randomized order with the same LC-MS setup
- Select precursor mass range to cover the masses of most enzymatic peptides
- Select isolation window width to acquire the chimeric MS/MS data
- Generate spectral libraries to identify the peptides of interest
- Chromatographic peak areas are integrated for the precursor ion in the MS1 scan or the fragment ions in the MS/MS scan

## Stable isotope labeling SILAC {#SILAC}

![]({{ site.baseurl }}/assets/images/protein_quant_02.png)

Stable isotope labeling using amino acids in cell culture (SILAC) is a powerful method to identify and quantify relative differential changes in complex protein samples. The SILAC method uses in vivo metabolic incorporation of "heavy" 13C- or 15N-labeled amino acids into proteins followed by mass spectrometry (MS) analysis for accelerated comprehensive identification, characterization and quantitation of proteins. NeuCode amino acids enable up to four samples to be multiplexed simultaneously.

See the UWPR stable isotope labeling overview [SILAC page]({{ site.baseurl }}/resources/knowledgebase/isotopic_labeling/#silac) for more detailed information.

Experimental information:

- Pino et al. combined SILAC with DIA quantification workflows, see [Ref 2](#ref2)
- Protocols from Shao-En Ong and Matthias Mann: [A practical recipe for stable isotope labeling by amino acids in cell culture (SILAC)](https://www.researchgate.net/publication/6414471_A_practical_recipe_for_stable_isotope_labeling_by_amino_acids_in_cell_culture_SILAC) [Ref 3](#ref3)

There are multiple different kits from different vendors available:

- [search SILAC to find related products](https://www.sigmaaldrich.com/US/en) from Sigma
- [SILAC Kits and Reagents](http://shop.isotope.com/category.aspx?id=10032092) from Cambridge Isotope Laboratories

There are likely others I missed, so do your homework.

## Stable isotope labeling TMT {#TMT}

![]({{ site.baseurl }}/assets/images/protein_quant_04.png)

Isobaric chemical tags are a more universal alternative to SILAC for simultaneous identification and quantitation of proteins in multiple sample sets. They can facilitate relative quantitation of a wide variety of samples including cells, tissues, and biological fluids.

In relative quantitation experiments, different isobaric tags are used to label different systemic conditions. Once labeled, all samples are mixed and analyzed in a single liquid chromatography-mass spectrometry (LC-MS) experiment. Because the isobaric tags possess the same chemical properties, all peptides from different TMT-labeled samples co-elute during LC separation. Once the peptides enter the mass spectrometer, they are detected simultaneously as a single and indistinguishable precursor ion peak.

Following fragmentation, the tags from each individual systemic condition generate a unique signature reporter ion in the low m/z area of the MS/MS spectrum. Peptide identification is achieved by matching the resulting ion peaks to those provided in fragment databases. Peptide quantitation is accomplished by comparing the intensities of the reporter ions.

See the UWPR stable isotope labeling overview [TMT page]({{ site.baseurl }}/resources/knowledgebase/isotopic_labeling/#tmt) for more detailed information.

There are multiple different kits available (2-plex, 6-plex, 10-plex, 16-plex and 18-plex), including bulk.

## Targeted Quantification SRM {#SRM}

Targeted quantitation using selected reaction monitoring (SRM) with a triple quadrupole mass spectrometer has been used for a long time. In SRM, one or more peptides unique to the protein of interest are selected for targeted quantitation. Specific fragment ions from the target peptide along with its parent mass (referred to as transitions) and retention time are used to monitor the peptide across multiple sample sets. By using very narrow isolation windows to select the fragments, chemical interferences can be reduced to increase both selectivity and sensitivity for transitions of interest. Quantitation is performed by integrating the peak area of the transitions over the chromatographic time scale and comparing them over multiple samples.

SRM quantitation is extremely sensitive, reliable, and suitable for analyzing large numbers of samples. SRM can also be used to perform absolute quantitation of targeted proteins by incorporation of appropriate stable isotope-labeled peptides as internal standards. Method development to determine the best transitions can be very extensive.

See the UWPR targeted proteomics [SRM page]({{ site.baseurl }}/resources/knowledgebase/SRM/) for more detailed information.

## Targeted Quantification SIM {#SIM}

Selected ion monitoring (SIM) performed on high-resolution accurate-mass instruments such as an Orbitrap mass spectrometer provides the simplest method setup and the most selective and sensitive quantification. It is most suitable for quantifying tens of proteins in samples of medium complexity. SIM also provides higher sensitivity for quantification of labile peptides which do not fragment efficiently. The SIM methodology uses the quadrupole of the MS to isolate the precursor of the target peptide ion. Only the selected target ion is transferred to the mass analyzer for detection. There is no fragmentation.

SIM experiments can also be multiplexed (msxSIM). In such experiments up to ten targets can be isolated sequentially, accumulated, and then transferred to the mass analyzer for detection in a single spectrum. Confirmation of the targeted peptide is accomplished using accurate-mass measurements in combination with elution-time information.

## Targeted Quantification PRM {#PRM}

Parallel reaction monitoring (PRM), also performed on high-resolution accurate-mass instruments, provides high selectivity, high sensitivity, and high-throughput quantification with confident targeted peptide confirmation. It is most suitable for quantifying tens to hundreds of targeted proteins in complex matrices. PRM methodology uses the quadrupole of the mass spectrometer to isolate a target precursor ion, fragments the targeted precursor ion in the collision cell, and then detects the resulting product ions in the mass analyzer. Quantification is carried out by extracting one or more fragment ions' area with a 5--10 ppm mass window and then comparing the information across multiple sample sets.

PRM offers several advantages for targeted quantitation. It eliminates most interferences, providing high accuracy and attomole-level limits of detection and quantification. Since PRM generates a fragmentation spectrum for the target peptide, confident confirmation of the peptide identity can be obtained with spectral library matching. Furthermore, it reduces assay development time since target transitions do not need to be preselected.

See the UWPR targeted proteomics [PRM page]({{ site.baseurl }}/resources/knowledgebase/PRM/) for more detailed information.

## Targeted Quantification AQUA {#AQUA}

![]({{ site.baseurl }}/assets/images/protein_quant_05.png)

The AQUA strategy provides absolute quantification (AQUA) of proteins and their modification states. Peptides are synthesized with incorporated stable isotopes as internal standards to mimic native peptides formed by proteolysis. These synthetic peptides can also be prepared with covalent modifications (e.g., phosphorylation, methylation, acetylation) that are chemically identical to naturally occurring posttranslational modifications. Such AQUA internal standard peptides are then used to precisely and quantitatively measure the absolute levels of proteins and post-translationally modified proteins after proteolysis by using an SRM or PRM analysis in a tandem mass spectrometer.

See the UWPR stable isotope labeling overview [AQUA page]({{ site.baseurl }}/resources/knowledgebase/isotopic_labeling/#aqua) for more detailed information.

## Targeted Quantification SureQuant IS {#surequant}

The SureQuant IS targeted protein quantitation workflow builds upon the PRM, SRM and AQUA approach by using spiked-in internal standards to dynamically control MS acquisition parameters and optimize instrument duty cycle, thereby maximizing the number of productive MS scans and improving sensitivity of target detection. This enhanced efficiency enables targeted quantitation of far more targets than PRM while still maintaining high quantitative performance.

The overall SureQuant IS workflow comprises two steps. First, a survey is run to verify the detectability of the reference internal standards (i.e. isotopically labeled AQUA peptides). The internal standards are standards of the peptides that the user of the SureQuant method wants to target and quantify. This analysis verifies the optimal precursor ion of each internal standard peptide and the optimal associated fragment ions that can be detected. The signal intensity of the internal standard and corresponding triggering intensity threshold is also determined from the survey run.

This is followed by the SureQuant analysis, targeting the peptides of interest. Here, using the SureQuant method, the mass spectrometer is programmed to monitor the reference internal standard in the sample using low fill times and resolution. As soon as the internal standard is detected, the instrument switches to using longer fill times and higher resolution to acquire PRM data for the internal standard and the endogenous peptide.

The real-time management of acquisition time maximizes the time devoted to analyte quantitation allowing a greater number of targets to be reliably detected and quantified for targeted proteomics experiments. Furthermore, the constant on-the-fly monitoring of the internal standard removes the need for retention time scheduling, allowing for a far more robust and reproducible analytical method. The built-in positive internal standard control provides a definitive limit of detection (LOD) measure for the presence or absence of proteins in the sample, addressing the common need to assess protein copy number expression in many molecular biology experiments.

Validated instrument method templates for both Survey Run and SureQuant IS targeted protein quantitation workflow analysis are provided, preset for various Thermo SureQuant targeted assay kits, like the AKT/mTOR pathway kit. Generic SureQuant method templates are also available to simplify the development of custom protein panel assays.

## References

1.  <a id="ref1"></a>Processing strategies and software solutions for data-independent acquisition in mass spectrometry Aivett Bilbao, Emmanuel Varesio, Jeremy Luban, Caterina Strambio-De-Castillia, Gérard Hopfgartner, Markus Müller, Frédérique Lisacek *Proteomics* 2015 Mar;15(5-6):964-80. doi: 10.1002/pmic.201400323. Epub 2015 Feb 2. [PubMed link](https://pubmed.ncbi.nlm.nih.gov/25430050/)
2.  <a id="ref2"></a>Improved SILAC quantification with data independent acquisition to investigate bortezomib-induced protein degradation Pino LK, Baeza J, Lauman R, Schilling B, Garcia BA. *J Proteome Res.* 2021 Apr 2;20(4):1918-1927. doi: 10.1021/acs.jproteome.0c00938. Epub 2021 Mar 25. [PubMed link](https://www.ncbi.nlm.nih.gov/labs/pmc/articles/PMC8256668/)
3.  <a id="ref3"></a>A practical recipe for stable isotope labeling by amino acids in cell culture (SILAC) Shao-En Ong , Matthias Mann *Nat Protoc.* 2006;1(6):2650-60. doi: 10.1038/nprot.2006.427. [PubMed link](https://pubmed.ncbi.nlm.nih.gov/17406521/)
