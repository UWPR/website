---
title: "SRM"
permalink: /protocols05/MRM/
---

*Targeted Proteomics by Selected Reaction Monitoring*

Selected reaction monitoring (SRM) is a highly sensitive and selective method for the targeted quantitation of peptides and, by inference, the corresponding proteins in complex biological samples.

Most mass spectrometry based proteomics experiments aim at detecting all proteins in a biological sample in an unfocused fashion. SRM however, is a targeted approach to specifically look for peptides of interest and their corresponding fragments, allowing for greater specificity and sensitivity for quantification. The application of SRM to multiple product ions is referred to as multiple reaction monitoring (MRM). The specific pairs of mass to charge (m/z) values associated to the peptide precursor and fragment ions are referred to as transitions.

Various types of instruments capable of two stages of mass filtering can be used for MRM assays. Commonly triple quadrupole mass spectrometers are used, where a quadrupole mass analyzer (Q1) is used in a first stage to isolate the precursor (peptide) ion of interest. The precursor ion population is then fragmented in the collision cell (Q2) to yield product ions. In the second stage a small number of sequence specific fragment ions are analyzed in the second quadrupole mass analyzer (Q3). This two-stage mass filtering combined with the fast scan rate result in unmatched sensitivity and selectivity for quantitative analyses. SRM enhances the lower detection limit for peptides by up to 100 fold as compared to untargeted full scan - ms/ms analyses. ![]({{ site.baseurl }}/images/MRM_01.png)

## SRM/MRM assay development

**Proteins/peptides of interest can be derived from a variety of sources:**

- Shotgun proteomics data
- Other data, e.g. genomics
- Proteomics data repositories
- Literature

**1. Selection of signature or proteotypic peptide(s):**

- Peptide(s) should be unique to the protein of interest
- Peptide(s) should be easily detectable by LC-MS analysis
- Peptide length about 5-25 amino acids
- Both ends of the peptide match enzymatic cleavage sites, e.g. if you plan to use Trypsin the peptide should have tryptic ends
- Avoid missed cleavage sites
- Avoid ragged ends: two enzymatic sites sequential to each other
- For heavy labeled peptides check with vendor for restrictions
- Avoid frequently modified amino acids (Met oxidation, deamidation, alkylation, phosphorylation, glycosylation sites, proteolysis, etc)
  some chemically induced modifications:
  - Met and Trp: oxidation
  - N-term Glu: pyroglutamic acid under acidic conditions
  - Asn and Gln: deamidation to Asp and Glu, particularly if followed in sequence by Gly and Pro
- Check for known protein modifications (signal peptide, isoforms, cleavage sites etc)

**2. Peptide fragment selection:**

- Specific to the peptide of interest
- Select y-ions with higher m/z (there are various contaminant ions (solvent ions, polysiloxanes etc. in the low m/z range)
- b-ions are often of low abundance or absent in triple quadrupole fragment spectra
- MS/MS signal intensity (Note, the intensities of individual fragments derived from one precursor ion differ substantially. To obtain a high-sensitivity assay, it is therefore essential to select transitions specific for the most intense fragments.)

**3. Optimization for each transition to maximize signal response/sensitivity**

- collision energy: optimizing collision energy for each transition may increase overall sensitivity however, is only really needed if sensitivity is very low or below the limit of detection (LOD)

  Base Collision Energy (CE) Equations TSQ Altis (based on template method from Thermo):

  - TSQ Altis (1.5 mTorr) 2 + peptide: CE = 0.034 x m/z + 2.2835
  - TSQ Altis (1.5 mTorr) 3 + peptide: CE = 0.0295 x m/z + 1.4831

  Base Collision Energy (CE) Equations TSQ Quantiva (based on Skyline):

  - TSQ Quantiva 2 + peptide: CE = 0.0339 x m/z + 2.3597
  - TSQ Quantiva 3 + peptide: CE = 0.0295 x m/z + 1.5123

  Base Collision Energy (CE) Equations (Ref\[1\]):

  - TSQ Vantage (1.0 mTorr) 2 + peptide: CE = 0.041 x m/z - 3.442
  - TSQ Vantage (1.0 mTorr) 3 + peptide: CE = 0.040 x m/z + 0.773
  - TSQ Vantage (1.5 mTorr) 2 + peptide: CE = 0.030 x m/z + 2.905
  - TSQ Vantage (1.5 mTorr) 3 + peptide: CE = 0.038 x m/z + 2.281
  - TSQ Access (1.0 mTorr) 2 + peptide: CE = 0.049 x m/z - 5.750
  - TSQ Access (1.0 mTorr) 3 + peptide: CE = 0.039 x m/z + 3.314

**4. Validation of the MRM assay**

- to confirm peptide identity, e.g. by acquiring a full MS2 spectrum of the peptide in the triple quadrupole instrument used for MRM

**5. Extraction of the final coordinates of the MRM assay, including**

- Selected peptide and charge state
- Peptide fragments
- Corresponding m/z ratios
- Fragment intensity ratios
- Collision energy for each transition
- Chromatographic elution time to be optionally used in scheduled MRM analyses

Although, this is a lengthy and iterative process, it has to be established only once for each peptide/protein for a given type of mass spectrometer and fragmentation mechanism (e.g. collision induced-dissociation).

**How many transitions can I monitor?**

During the method development phase typically retention times are unknown and all the transitions are monitored continuously throughout the entire LC-MS run. Approximately 100 peptides / hour can be monitored or \> 250 proteins / day (with 5 peptides / protein). Synthetic peptides are often used to establish the assay coordinates.

Figure 2 shows an overview on how to calculate the number of transitions.

![]({{ site.baseurl }}/images/MRM_02.png)

1.  Sampling rate across the chromatographic peak: ideally for quantifications 10-15 point across the chromatographic peak should be acquired. If the average peak elutes in 30 seconds a duty cycle of 2-3 sec should be targeted.
2.  Dwell (fragment ion scan) time. On a triple quadrupole instrument longer scan times yield better signal to noise ratios. On the UWPR instrument we usually use a min of 20 ms, with a range of 20-100 ms.
3.  So the number of transitions is basically the duty cycle divided by the dwell time.

Once the SRM assay is established, we typically monitor 3-4 fragments per peptide, and use timed windows for each peptide (scheduling) reducing the number of transitions monitored at any given moment during the gradient. Using scheduled methods more peptides / transitions can be monitored per LC-MS analysis, while maintaining a duty cycle to produce a fast enough sampling rate across the chromatographic peak. With scheduled SRM an analyte measurement rate of 1,000 transitions/hour and \~600 protein measurements / day can be achieved.

**Skyline a free software tool to build and analyze SRM, PRM and DIA assays**

Skyline is a freely-available Windows client application for building Selected Reaction Monitoring (SRM) / Multiple Reaction Monitoring (MRM), Parallel Reaction Monitoring (PRM - Targeted MS/MS and DIA/SWATH) and targeted DDA with MS1 quantitative methods and analyzing the resulting mass spectrometer data. It aims to employ cutting-edge technologies for creating and iteratively refining targeted methods for large-scale proteomics studies.

![skyline]({{ site.baseurl }}/images/Skyline.png)
[Click here](https://skyline.gs.washington.edu/labkey/project/home/software/Skyline/begin.view) to go to the skyline website to download the latest version.

## Analytical characteristics of SRM assays

**Sensitivity (limit of quantification (LOQ))**

- \~ 50 copies / cell in yeast whole cell extracts w/o fractionation (Ref. \[2\])
- \~ 0.3-1 ug/mL in undepleted human plasma w/o fractionation (Ref. \[3-5\])
- \< 10 copies/cell (theoretical) in yeast cell with peptide OGE (Ref. \[2\])
- \~ 1,200 copies /cell in mammalian cells with Nuclei/cytoplasm separation (Ref. \[6\])
- 1-10 ng/mL in human body fluids with depletion = strong or mixedmode cation exchange , SISCAPA , Glycocapture(Ref. \[7-12\])
- 0.1-1 ng/mL in human body fluids with Immunoprecipitation, Glycoprotein isolation+SISCAPA(Ref. \[13, 14\])

**Precision**

Is mostly below 15-20% with or without fractionation (Ref. \[2, 5, 7, 10, 13, 15\])

**Specificity**

Isoforms and single amino acid mutations can easily be distinguished (Ref. \[16-19\])

## Glossary

- **SRM**
  Selected Reaction Monitoring
  Method used in tandem mass spectrometry in which an ion of a particular mass is selected in the first stage of a tandem mass spectrometer and an ion product of a fragmentation reaction of the precursor ion is selected in the second mass spectrometer stage for detection
- **MRM**
  Multiple Reaction Monitoring
  The application of SRM to multiple product ions from one or more precursor ions
- **Transition**
  Precursor/product ion pair
- **Specificity**
  Ability to discriminate and quantify a particular protein sequence in a mixture without interferences from other components (Ref. \[20\])
- **Accuracy**
  Refers to how close the average results are to the true quantity value. It is affected by systematic biases that consistently affect the measurement in the same direction (Ref. \[20\]).
- **Precision**
  Degree to which repeated measurements of the target protein(s) under unchanged conditions (instrument settings, operator, apparatus and laboratory) show the same results, within a short interval of time. Precision is affected by random errors, and unpredictable fluctuations around the true value. Precision can be expressed as coefficient of variation (CV) which corresponds to the standard deviation of repeated measurements divided by the mean, with results typically expressed as per cent (%CV). The CV represents therefore a standardization of the standard deviation that allows to compare the variability of the measurement regardless of the magnitude of analyte concentration, in the working range of the assay (Ref. \[20\]).
- **Limit of quantification (LOQ)**
  Minimal concentration or amount of a protein that can be confidently quantified
- **Limit of Detection (LOD)**
  Smallest concentration or amount of a protein that can be confidently detected

**References**

1.  Maclean, B., et al., Effect of collision energy optimization on the measurement of peptides by selected reaction monitoring (SRM) mass spectrometry. Anal Chem, 2010. 82(24): p. 10116-24.
2.  SPicotti, P., et al., Full dynamic range proteome analysis of S. cerevisiae by targeted proteomics. Cell, 2009. 138(4): p. 795-806.
3.  Anderson, L. and C.L. Hunter, Quantitative mass spectrometric multiple reaction monitoring assays for major plasma proteins. Mol Cell Proteomics, 2006. 5(4): p. 573-88.
4.  Kuzyk, M.A., et al., Multiple reaction monitoring-based, multiplexed, absolute quantitation of 45 proteins in human plasma. Mol Cell Proteomics, 2009. 8(8): p. 1860-77.
5.  Addona, T.A., et al., Multi-site assessment of the precision and reproducibility of multiple reaction monitoring-based measurements of proteins in plasma. Nat Biotechnol, 2009. 27(7): p. 633-41.
6.  Hewel, J.A., et al., Synthetic peptide arrays for pathway-level protein monitoring by liquid chromatography-tandem mass spectrometry. Mol Cell Proteomics, 2010. 9(11): p. 2460-73.
7.  Stahl-Zeng, J., et al., High sensitivity detection of plasma proteins by multiple reaction monitoring of N-glycosites. Mol Cell Proteomics, 2007. 6(10): p. 1809-17.
8.  Keshishian, H., et al., Quantitative, multiplexed assays for low abundance proteins in plasma by targeted mass spectrometry and stable isotope dilution. Mol Cell Proteomics, 2007. 6(12): p. 2212-29.
9.  Fortin, T., et al., Clinical quantitation of prostate-specific antigen biomarker in the low nanogram/milliliter range by conventional bore liquid chromatography-tandem mass spectrometry (multiple reaction monitoring) coupling and correlation with ELISA tests. Mol Cell Proteomics, 2009. 8(5): p. 1006-15.
10. Hoofnagle, A.N., et al., Quantification of thyroglobulin, a low-abundance serum protein, by immunoaffinity peptide enrichment and tandem mass spectrometry. Clin Chem, 2008. 54(11): p. 1796-804.
11. Kuhn, E., et al., Developing multiplexed assays for troponin I and interleukin-33 in plasma by peptide immunoaffinity enrichment and targeted mass spectrometry. Clin Chem, 2009. 55(6): p. 1108-17.
12. Cima, I., et al., Cancer genetics-guided discovery of serum biomarker signatures for diagnosis and prognosis of prostate cancer. Proc Natl Acad Sci U S A, 2011. 108(8): p. 3342-7.
13. Nicol, G.R., et al., Use of an immunoaffinity-mass spectrometry-based approach for the quantification of protein biomarkers from serum samples of lung cancer patients. Mol Cell Proteomics, 2008. 7(10): p. 1974-82.
14. Berna, M. and B. Ackermann, Increased throughput for low-abundance protein biomarker verification by liquid chromatography/tandem mass spectrometry. Anal Chem, 2009. 81(10): p. 3950-6.
15. Whiteaker, J.R., et al., An automated and multiplexed method for high throughput peptide immunoaffinity enrichment and multiple reaction monitoring mass spectrometry-based quantification of protein biomarkers. Mol Cell Proteomics, 2010. 9(1): p. 184-96.
16. Zulak, K.G., et al., Targeted proteomics using selected reaction monitoring reveals the induction of specific terpene synthases in a multi-level study of methyl jasmonate-treated Norway spruce (Picea abies). Plant J, 2009. 60(6): p. 1015-30.
17. Costenoble, R., et al., Comprehensive quantitative analysis of central carbon and amino-acid metabolism in Saccharomyces cerevisiae under multiple conditions by targeted proteomics. Mol Syst Biol, 2011. 7: p. 464.
18. Wang, Q., et al., Mutant proteins as cancer-specific biomarkers. Proc Natl Acad Sci U S A, 2011. 108(6): p. 2444-9.
19. Zhang, F., M.J. Bartels, and W.T. Stott, Quantitation of human glutathione S-transferases in complex matrices by liquid chromatography/tandem mass spectrometry with signature peptides. Rapid Commun Mass Spectrom, 2004. 18(4): p. 491-8.
20. Picotti, P. and R. Aebersold, Selected reaction monitoring-based proteomics: workflows, potential, pitfalls and future directions. Nat Methods, 2012. 9(6): p. 555-66.
