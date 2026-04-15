---
title: "Orbitrap Astral"
permalink: /instruments/astral/
toc: true
toc_label: "On this page"
toc_sticky: true
---

*Hybrid quadrupole-Orbitrap-Astral mass spectrometer*

![]({{ site.baseurl }}/instruments/images/Astral_01.png)

The Thermo Scientific The Orbitrap Astral mass spectrometer contains three mass analyzers: a quadrupole mass analyzer for precursor ion selection, the Orbitrap mass analyzer to acquire high dynamic range HRAM spectra, and the novel Astral mass analyzer to acquire high sensitivity, high dynamic range HRAM spectra at a rate of up to 200 Hz. Together, the analyzers' unique strengths maximize performance and usability. The front end---ion source to quadrupole---maximizes instrument sensitivity and robustness. The Orbitrap mass analyzer enables the collection of panoramic full scan data at high resolution. The Astral mass analyzer adds fast (up to 200 Hz), sensitive, high dynamic range HRAM capabilities that are fully synchronized with the Orbitrap analyzer acquisition. Due to this synchronization the Orbitrap Astral mass spectrometer excels at many data acquisition strategies including high resolution data-independent acquisition (HR-DIA), and data-dependent acquisition (DDA) for identification and label-free quantitation (LFQ), as well as tandem mass tag (TMT™)-based multiplexed quantification using TMTpro™ 18-plex reagents.

Visit the [Astral site](https://www.thermofisher.com/us/en/home/industrial/mass-spectrometry/liquid-chromatography-mass-spectrometry-lc-ms/lc-ms-systems/orbitrap-lc-ms/orbitrap-astral-mass-spectrometer.html) for more information

8/15/2024 Astral (SN# OA10191, UW tag 2045625) Installed

## Specifications 

- **Scan Rate**
- MS/MS acquisition rates of up to 200 Hz in the Astral mass analyzer with 80,000 resolution at m/z 524 with a maximum injection time of 3 ms
- MS/MS acquisition rates of up to 40 Hz with 7,500 resolution at m/z 200 for the Orbitrap mass analyzer

<!-- -->

- **Resolution**
- Maximum Astral mass analyzer resolution up to 80,000 FWHM at m/z 524 enabling resolution of TMTpro™ 18-plex reporter ions
- Maximum Orbitrap mass analyzer resolution of up to 480,000 FWHM at m/z 200

<!-- -->

- **Mass accuracy**
- Astral \< 5 ppm RMS drift over 24 hours using external calibration
- Orbitrap \< 3 ppm RMS drift over 24 hours using external calibration
- Orbitrap \< 1 ppm RMS drift over 24 hours using internal calibration

<!-- -->

- **Sensitivity**
- Orbitrap dynamic range \> 5000 within a single Orbitrap mass analyzer spectrum
- Astral dynamic range \>1,000 within a single microscan Astral mass spectrum

<!-- -->

- **Features**
- Higher Energy Collisional Dissociation (HCD)
- EASY-IC™ (internal calibration) source
- Quadrupole mass filter
- Ion Routing Multipole (IRM) trapping, focuses and routes ions more effectively
- Orbitrap mass analyzer
- Astral (Asymmetric Track Lossless) mass analyzer
- Extensive pre-built method templates for data-dependent acquisition (DDA), data-independent acquisition (DIA), TMT, and SureQuant for multiple application areas including plasma and single cell proteomics

## Instrument control software 

- [Instrument control software (.xls)]({{ site.baseurl }}/docs/InstrumentSoftwareVersions.xls)
- [Tips for upgrading to Win10 LTSB 2016 on TNG instruments (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_Win10LTSB2016_upgrade.pdf)

## Instrument calibrations 

- This file summarizes calibration solutions and calibration tips [Calibrations (.xlsx)]({{ site.baseurl }}/docs/Calibrations.xlsx)

## PC configuration 

- [Tips for upgrading to Win10 LTSC 2019 on TNG instruments (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_Win10LTSC_upgrade.pdf)
- [Tips configuring Win10 LTSC 2019 on Thermo instrument PC (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_Win10LTSC_PC_configuration.pdf)

## Resolving Power and Transient Length 

Here is a full table of the available resolution settings. Note: higher resolution does not always result in better mass accuracy. The higher the resolution increases your ability to distinguish between m/z ions. As you can see in this table, there is always a trade of higher resolution with time. 15k is the lowest resolution setting, with the fastest scan speed of \~15 Hz. On the Fusion, the highest resolution setting is 450K that is \<1 Hz.
To fully take advantage of the parallel fill and detect capabilities of the Fusion, we need to balance the max fill times with the transient length. For resolving power 30,000, detection time is about 64 ms. There is always a small amount of inter-scan delay. Up to 54 ms can be used to fill the C-trap with ions- and without increasing cycle time.
In SW version 2.1 50k resolution OT scans for TMT 10plex experiments shows a \~10% improvement over 60k resolution. We successfully used 30k resolution as well.

**Orbitrap Analyzer**

| Res. at m/z 200 | Transient length \[ms\] | Scan speed \[Hz\] |
|:---------------:|:-----------------------:|:-----------------:|
|      7,500      |           16            |        40         |
|     15,000      |           32            |        22         |
|     30,000      |           64            |        12         |
|     45,000      |           96            |        10         |
|     60,000      |           128           |         7         |
|     120,000     |           256           |         3         |
|     240,000     |           512           |        1.5        |
|     480,000     |          1024           |        0.7        |

**Astral Mass Analyzer**

| Res. at m/z 524 | Max. Inject. Time \[ms\] | Scan speed \[Hz\] |
|:---------------:|:------------------------:|:-----------------:|
|  Up to 80,000   |           2.5            |        200        |
|  Up to 80,000   |            20            |        25         |
|  Up to 80,000   |            40            |       12.5        |

## HPLC setup 

the following documents are guidelines to setup the capillary trap/column on our LC-MS systems, this is intended as a supplement to the hands on training required to use the UWPR instruments.

- [LC-MS setup procedure EASYnLC(pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_LC_MS_setup_EASYnLC.pdf)
- [LC-MS setup procedure VanquishNeo (pdf)]({{ site.baseurl }}/docs/instruments/UWPR_LC_MS_setup_VanquishNeo.pdf)
- [LC-MS setup procedure nanoAcquity (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_LC_MS_setup.pdf)

## Method Templates 

The following pdf documents summarize some of parameters from the method templates provided by Thermo in their method editor:

- [MethodTemplates_DDA_Astral_SW1.1 (pdf)]({{ site.baseurl }}/docs/instruments/MethodTemplates_DDA_Astral_SW1.1.pdf)
- [MethodTemplates_DIA_Astral_SW1.1 (pdf)]({{ site.baseurl }}/docs/instruments/MethodTemplates_DIA_Astral_SW1.1.pdf)

**Low Level DIA methods**

| Concentration | Isolation width \[Th\] | Injection Time \[ms\] |
|:-------------:|:----------------------:|:---------------------:|
|   \<250 pg    |           20           |          60           |
|  250-500 pg   |           20           |          40           |
|    1-2 ng     |           10           |          20           |
|    2-5 ng     |           8            |          14           |
|    5-10 ng    |           5            |          10           |

## Instrument Settings 

The table below lists some of the instrument method settings we tested on our Astral.
We use a EASYnLC UPLC or VanquishNeo with home made columns (35cm x 75μm, Reprosil Pur C18AQ 120Å 5μm) and trap column (EASYnLC: 3cm x 100μm, Reprosil Purc C18AQ 120Å 5μm, VanquishNeo: Thermo trap cartridge ), with 6-45% B (80% ACN, 0.1%FA) in 90min linear gradient. The sample is a Hela cell whole cell tryptic digest (ThermoFisher), 100 ng on column injection. Using the Astral for MS2, we typically get \~30000 unique peptide ID's and 70000 PSM's with Comet search and peptide prophet p\>0.9.
The results below are based on the number of unique peptide ID's with Comet search and peptide prophet p\>0.9.

| **Tested Setting** | **Best Result (100%)** |
|:---|:---|
| **Software Version** | **Astral 1.1** |
| MS2 ion time, 10ng Hela, unique ID's | 3 (48%), 5 (63%), 10 (84%), 15 (95%),**20 (100%)** |
| MS2 ion time, 10ng Hela, PSM's | 3 (47%), 5 (64%), 10 (87%), 15 (97.5%),**20 (100%)** |
| MS2 ion time, 10ng Hela, protein ID's | 3 (73%), 5 (83%), 10 (96%), 15 (99%),**20 (100%)** |
| MS2 ion time, 100ng Hela, unique ID's | 3 (97%), 5 (99%), **10 (100%)**, 15 (98%),20 (94%) |
| MS2 ion time, 100ng Hela, PSM's | 3 (94%), **5 (100%)**, 10 (92%), 15 (83%),20 (75%) |
| MS2 ion time, 100ng Hela, protein ID's | 3 (98%), **5 (100%)**, 10 (99%), 15 (97%),20 (94%) |
| RF lens voltage, unique ID's | 40 (97.4%), **45 (100%)**, 50 (98.1%), 55 (99.4%), 60 (95.6%), 65 (97.1%) |
| RF lens voltage, PSM's | 40 (97.0%), **45 (100%)**, 50 (98.6%), 55 (99.3%), 60 (94.5%), 65 (95.5%) |
| **Software Version** | **Astral 1.0 SP3** |
| AGC (MS2), unique ID's | AGC 75 (94%), **100 (100%)**, 200 (99%), 300 (98%), 400 (96%), 500 (95%) |
| AGC (MS2), PSM's | AGC 75 (93%), **100 (100%)**, 200 (95%), 300 (88%), 400 (83%), 500 (80%) |
| Isolation width, unique ID's | IsoWidth 0.7 (92.9%), **1.2 (100%)**, 1.6 (98.6%), 2 (98.9%) |
| Isolation width, PSM's | IsoWidth0.7 (60.3%), 1.2 (80.7%), 1.6 (87.4%), **2 (100%)** |
| Collision energy, unique ID's | NCE 25 (99.9%), **30 (100%)**, 35 (90.3%) |
| Collision energy, PSM's | **NCE 25 (100%)**, 30 (97.9%), 35 (88%) |
| MS2 Orbitrap vs Astral, unique ID's | **Astral MS2 (100%)**, Orbitrap MS2 (69%) |
| MS2 Orbitrap vs Astral, PSM's | **Astral MS2 (100%)**, Orbitrap MS2 (37%)\> |
| Gradient (6-45%B) length , unique ID's | **120 min (100%)**, 90 min (94.6%),60 min (81.6%), 30 min (63.3%) |
| Gradient (6-45%B) length , PSM's | **120 min (100%)**, 90 min (88.4%), 60 min (69.2%), 30 min (47.6%) |
| Exploris 480 90 min (100%), unique ID's | Astral 120 min (144%), **90 min (136%)**, 60 min (118%), 30 min (91%) |
| Exploris 480 90 min (100%), unique PSM's | Astral 120 min (279%), **90 min (246%)**, 60 min (193%), 30 min (133%) |

## Hela digest concentration curve 

Different concentrations of Pierce HeLa Protein Digest Standard (10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 200, 300, 400, 500 ng) were injected and separated with a 6-35% Buffer B (80% ACN) gradient over 60 min Peptides were identified with our standard DDA method and search tools. ![]({{ site.baseurl }}/instruments/images/Astral_Hela_01.png)

## Quick links

- [Specifications](#specs)
- [Software](#software)
- [Calibrations](#calis)
- [Resolution/Transient](#resolution)

- [PC configuration](#pcconfig)
- [HPLC setup](#hplc)
- [Method Templates](#templates)
- [Instrument settings](#settings)

## UWPR documents and pages

- [Instrument control software (.xls)]({{ site.baseurl }}/docs/InstrumentSoftwareVersions.xls)
- [Tips for upgrading to Win10 LTSB 2016 (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_Win10LTSB2016_upgrade.pdf)
- [Calibrations (.xlsx)]({{ site.baseurl }}/docs/Calibrations.xlsx)
- [LC-MS setup procedure EASYnLC(pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_LC_MS_setup_EASYnLC.pdf)
- [EASYnLC page]({{ site.baseurl }}/instruments/EASYnLC/)
- [PRM page]({{ site.baseurl }}/protocols05/PRM/)
- [DIA page]({{ site.baseurl }}/protocols05/DIA/)
- [Isotopic Labeling page]({{ site.baseurl }}/protocols03/isotopic_labeling/)
- [MRM/SRM page]({{ site.baseurl }}/protocols05/MRM/)
