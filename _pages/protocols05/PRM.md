---
title: "Parallel Reaction Monitoring (PRM)"
permalink: /protocols05/PRM.php
---

Parallel reaction monitoring (PRM)-based targeted mass spectrometry is comparable in performance to selected reaction monitoring (SRM) but requires much less investment in assay development for targeted proteomics applications.

PRM methodology uses the quadrupole of the Q Exactive or Fusion mass spectrometer to isolate a target precursor ion, then fragments the targeted precursor ion in the collision cell, and then detects the resulting product ions in the Orbitrap mass analyzer. Quantification is carried out after data acquisition by extracting several fragment ions with narrow (5 to 10 ppm) mass windows. Optionally a full scan can be acquired as well. The precursor mass can then be extracted as well to complement quantification.

PRM provides high selectivity, high sensitivity, and high-throughput quantification with confident targeted peptide confirmation. It is most suitable for quantifying tens to hundreds of targeted proteins in complex matrices with attomole-level limits of detection.

![](/images/PRM_01.png)

## PRM assay development

There are several excellent webinars and tutorials provided by the Skyline Team.

- [Webinars](https://skyline.ms/wiki/home/software/Skyline/page.view?name=webinars) #3, #9 and #17 cover PRM method development and analysis
- Here's a link to all the Skyline [Tutorials](https://skyline.ms/wiki/home/software/Skyline/page.view?name=tutorials), including the Targeted MS/MS (PRM) tutorial.
- And a great PRM tutorial/workshop presented by Lindsey Pino [May Institute 2020 Online - Lindsay Pino: Targeted analysis with Skyline, a PRM perspective](https://youtu.be/F_YE7cRqfAY)

**Proteins/peptides of interest can be derived from a variety of sources:**

- Shotgun proteomics data

- Other data, e.g. genomics

- Proteomics data repositories

  - For Phosphopeptides check out the [Phosphopedia Website](https://phosphopedia.gs.washington.edu/PhosphoproteomicsAssay/)
  - [PeptideAtlas](http://www.peptideatlas.org/)
  - [Pride](https://www.ebi.ac.uk/pride/archive/)
  - PRM calculator for quantitative cross-linking analysis at [XLinkDB](http://xlinkdb.gs.washington.edu/xlinkdb/prmTransitionForm.php)
  - Literature

  **1. Selection of signature or proteotypic peptide(s):**

  - Peptide(s) should be unique to the protein of interest
  - Peptide(s) should be easily detectable by LC-MS analysis
  - Peptide length about 5-25 amino acids
  - Both ends of the peptide match enzymatic cleavage sites, e.g. if you plan to use Trypsin the peptide should have tryptic ends
  - Avoid missed cleavage sites
  - Avoid ragged ends: two enzymatic sites sequential to each other
  - For heavy labeled peptides check with vendor for restrictions
  - Avoid frequently modified amino acids (Met oxidation, deamidation, alkylation, phosphorylation, glycosylation sites, proteolysis, etc)\
    some chemically induced modifications:\
    - Met and Trp: oxidation\
    - N-term Glu: pyroglutamic acid under acidic conditions\
    - Asn and Gln: deamidation to Asp and Glu, particularly if followed in sequence by Gly and Pro
  - Check for known protein modifications (signal peptide, isoforms, cleavage sites etc)

  **2. Peptide fragment selection:**

  - Assay development is greatly reduced since no target fragment ions need to be preselected, the entire MS/MS spectrum will be acquired for every precursor

  **3. Optimize the cycle time**

  - The total cycle time is defined by the time it takes to cycle through your entire target list. Ultimately, this cycle time determines how many scans across the peak are obtained.
  - The number of targets and the chromatographic peak widths will dictate the ideal cycle time.
  - For about 30 sec wide chromatographic peaks, if you want 10 scans across the peak, the total cycle time should not exceed 3 sec.

  Figure 2 shows how to estimate total cycle time based on the orbitrap resolving power (for the Fusion and QExactive) and the number of targets. To obtain the fastest cycle time for any given resolution, the maximum allowed fill time should not exceed the detection time, because the instrument fills the HCD cell while the orbitrap mass analyzer is acquiring the MS2 scan. It is important to understand that higher resolution does not always result in better mass accuracy. Higher resolution increases your ability to distinguish between m/z ions. As you can see in the table below, there is a trade of higher resolution with time. On the QE 17,500 is the lowest resolution setting, with the fastest scan speed of \~13 Hz, the highest resolution setting is 140K, on the QE plus with enhanced resolution mode its 280K.

  ![](/images/PRM_02.png)

  **Fusion**

**Transient**

**Q Exactive**

Res. at m/z 200

"Free" fill time \[ms\]

Approx. scan speed \[Hz\]

length \[ms\]

Res. at m/z 200

"Free" fill time \[ms\]

Approx. scan speed \[Hz\]

15,000

22

32

30,000

54

15

64

17,500

50

13

60,000

118

7.5

128

35,000

110

7

120,000

246

4

256

70,000

240

3

240,000

502

2

512

140,000

500

1.5

1064

280,000

1000

\<1

450,000

1014

\<1

1024

1.  Sampling rate across the chromatographic peak: ideally for quantifications 10-15 point across the chromatographic peak should be acquired. If the average peak width is 30 seconds a duty cycle of 2-3 sec should be targeted.
2.  Ion fill time should be kept below the scan time to maximize cycle time (see table above). On the Fusion the ion time can be customized for every precursor (i.e. for very low abundant precursors the max ion times can be set higher to ensure the specified AGC target is reached.
3.  So the maximum number of targeted precursors is basically the duty cycle divided by the scan time.
4.  If the retention times are known scheduling may be an option as well.

QE plus: Resolution of 17500, max IT 50 ms, we get a scan speed of \~ 12 Hz.\
Fusion/Lumos: Resolution of 15000, max IT 22 ms, we get a scan speed of \~ 18 Hz.

**Cycle Time**

**QE plus**

**Fusion/Lumos**

sec

\# of scans

\# of scans

1

12

18

2

24

36

3

36

54

4

48

72

5

60

90

6

72

108

7

84

126

8

96

144

9

108

162

10

120

180

UWPR Guide to setup PRM method on QE plus: [PRM_QExactive (pdf)](/docs/protocols05/PRM_QExactive.pdf)

UWPR Guide to setup PRM method on Fusion/Lumos: [PRM_FusionLumos_SW3_1 (pdf)](/docs/protocols05/PRM_FusionLumos_SW3_1.pdf)

For additional resources search the Planet Orbitrap library: [Planet Orbitrap](https://planetorbitrap.com/)\

Check out this Technical Guide on Thermo's Planet Orbitrap website\
[How to best utilize your QE/QE Plus for maximum peptide IDs and for peptide quantitation](http://planetorbitrap.com/library?t=QTE0OTBlODg0OWE1NWYzYw%3D%3D&keywords=A1490#tab:keywords) for more information

**Skyline a free software tool to build and analyze SRM, PRM and DIA assays**

Skyline is a freely-available Windows client application for building Selected Reaction Monitoring (SRM) / Multiple Reaction Monitoring (MRM), Parallel Reaction Monitoring (PRM - Targeted MS/MS and DIA/SWATH) and targeted DDA with MS1 quantitative methods and analyzing the resulting mass spectrometer data. It aims to employ cutting-edge technologies for creating and iteratively refining targeted methods for large-scale proteomics studies.

[![skyline](/images/Skyline.png)Click here](https://skyline.gs.washington.edu/labkey/project/home/software/Skyline/begin.view) to go to the skyline website to download the latest version.\

## Glossary

- **SRM**\
  Selected Reaction Monitoring\
  Method used in tandem mass spectrometry in which an ion of a particular mass is selected in the first stage of a tandem mass spectrometer and an ion product of a fragmentation reaction of the precursor ion is selected in the second mass spectrometer stage for detection
- **MRM**\
  Multiple Reaction Monitoring\
  The application of SRM to multiple product ions from one or more precursor ions
- **PRM**\
  Parallel Reaction Monitoring\
  targeted MS/MS analyses, in which full fragment ion spectrum of each precursors in a target list is recorded continuously throughout the entire LC separation
- **Transition**\
  Precursor/product ion pair
- **Specificity**\
  Ability to discriminate and quantify a particular protein sequence in a mixture without interferences from other components (Ref. \[20\])
- **Accuracy**\
  Refers to how close the average results are to the true quantity value. It is affected by systematic biases that consistently affect the measurement in the same direction (Ref. \[20\]).
- **Precision**\
  Degree to which repeated measurements of the target protein(s) under unchanged conditions (instrument settings, operator, apparatus and laboratory) show the same results, within a short interval of time. Precision is affected by random errors, and unpredictable fluctuations around the true value. Precision can be expressed as coefficient of variation (CV) which corresponds to the standard deviation of repeated measurements divided by the mean, with results typically expressed as per cent (%CV). The CV represents therefore a standardization of the standard deviation that allows to compare the variability of the measurement regardless of the magnitude of analyte concentration, in the working range of the assay (Ref. \[20\]).
- **Limit of quantification (LOQ)**\
  Minimal concentration or amount of a protein that can be confidently quantified
- **Limit of Detection (LOD)**\
  Smallest concentration or amount of a protein that can be confidently detected

**References**

1.  Domon, B. et al. Options and considerations when selecting a quantitative proteomics strategy. Nature Biotechnology 28, 710 - 721 (2010) [link](http://www.ncbi.nlm.nih.gov/pubmed/20622845)
2.  Gallien, S. et al. Targeted Proteomic Quantification on Quadrupole-Orbitrap Mass Spectrometer. Molecular & Cellular Proteomics 11, 1709 - 1723, (2012) [link](http://www.ncbi.nlm.nih.gov/pubmed/22962056)
3.  Peterson, A.C. et al. Parallel reaction monitoring for high resolution and high mass accuracy quantitative, targeted proteomics. Mol. Cell. Proteomics published online (3 August 2012). [link](http://www.ncbi.nlm.nih.gov/pubmed/22865924)
4.  Ronsein GE. et al. Parallel reaction monitoring (PRM) and selected reaction monitoring (SRM) exhibit comparable linearity, dynamic range and precision for targeted quantitative HDL proteomics. J Proteomics. 2015 Jan 15;113:388-99 [link](http://www.ncbi.nlm.nih.gov/pubmed/25449833)
5.  Villen, J. et al. Plug-and-play analysis of the human phosphoproteome by targeted high-resolution mass spectrometry. Nat Methods. 2016 May;13(5):431-4 [link](http://www.ncbi.nlm.nih.gov/pubmed/27018578)
6.  Bourmaud A. et al. Parallel reaction monitoring using quadrupole-orbitrap mass spectrometer: Principle and applications. Proteomics. 2016 May 4. [link](http://www.ncbi.nlm.nih.gov/pubmed/27145088)
