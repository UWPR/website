---
title: "Q Exactive Plus (Q)"
permalink: /instruments/qexactiveplus/
toc: true
toc_label: "On this page"
toc_sticky: true
---

*Hybrid quadrupole-Orbitrap mass spectrometer*

![]({{ site.baseurl }}/instruments/images/qexactive_05b.png)

The Thermo Scientific Q Exactive Plus benchtop LC-MS/MS combines high-performance quadrupole precursor selection with high resolution, accurate-mass (HR/AM) Orbitrap detection to deliver high performance and tremendous versatility. With a fast scan speed and multiplexing capabilities, the Q Exactive Plus mass spectrometer is an outstanding detector for fast chromatography separation techniques. The superior quality of Q Exactive Plus MS/MS data enables identification and quantitation of more compounds with greater confidence. The Q Exactive Plus LC-MS/MS system not only offers broad screening capabilities but also excels at targeted quantitation experiments.

Visit the [Planet Orbitrap website](http://planetorbitrap.com/q-exactive-plus) for more information

11/19/2013 QE Plus (SN03039L / UW tag 2019655) Installed  
6/6/2012 QE (SN01284L) Installed, 11/14/2013 retired

## Specifications 

**Scan Rate**

- Up to 12 Hz at resolution setting of 17,500 at m/z 200
- Multiplexity: up to 10 precursors/scan

**Resolution**

- 280 000 at m/z 200 option on the QE Plus
- 140 000 at m/z 200 at a scan repetition rate of 1 Hz

**Mass accuracy**

- \< 3 ppm RMS error with external calibration
- \< 1 ppm RMS error with internal calibration

**Sensitivity**

- Intra-scan dynamic range \> 5000:1
- Full MS: 500fg Buspirone on column S/N 100:1
- SIM: 50fg Buspirone on column S/N 100:1

**Features**

- Higher Energy Collisional Dissociation (HCD)
- S-Lens ion source for increased sensitivity
- Quadrupole mass filter
- Orbitrap mass analyzer
- Spectral multiplexing for enhanced duty cycle

## Instrument control software 

- [Instrument control software (.xls)]({{ site.baseurl }}/docs/InstrumentSoftwareVersions.xls)
- [Tips for upgrading to Win10 LTSB 2016 on TNG instruments (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_Win10LTSB2016_upgrade.pdf)

## Instrument calibrations 

- This file summarizes calibration solutions and calibration tips [Calibrations (.xlsx)]({{ site.baseurl }}/docs/Calibrations.xlsx)

## Method parameters 

**Method parameters for peptide identification on the QEplus**  
Check out this Technical Guide on Thermo's Planet Orbitrap website  
[How to best utilize your QE/QE Plus for maximum peptide IDs and for peptide quantitation](http://planetorbitrap.com/library?t=QTE0OTBlODg0OWE1NWYzYw%3D%3D&keywords=A1490#tab:keywords) for more information

For bottom-up proteomics method (DDA) use the Full MS followed by ddMS2 mode

**Method Parameter \| Recommended Setting \| Properties \| QE classic 120 min TMT 11plex \| QE classic 120 min TMT 16plex \| QE plus 120 min TMT 11plex \| QE plus 120 min TMT 16plex \| Res. at m/z 200 \| Res. at m/z 400 \| Transient length \[ms\] \| Approx. scan speed \[Hz\] \| "Free" fill time \[ms\] \| Q Exactive plus**

| Best Result (100%) | Tested Values (X%) |
|:---|:---|
| **Software Version** | **QE 2.3** |
| Include: 2-5 charge (MS1 35k) | Include: unassigned & 2-5(89%), 2-5 (100%), unassigned (71%) |
| Include: 2-5 charge (MS1 35k) | Only 2 plus (65%), 3 plus(43%), 4 plus (7%) |
| MS1 resolution 70k | MS1 resolution 35k (97%), 140k (98%) |
| Isolation width 1.6 | Isolation width 2 (97%) |
| Complex mix DDA | Blank following complex mix (0.6%) |
| DDA: Top 30 | DDA: Top 10 (99%), Top 20 (98%), Top 30 (100%), Top 40 (97%) |
| DDA: Top 30 | 4GPF windows (80%), MS1 scan split in 4 mz windows (84%); windows for both were 400-610, 600-810, 800-1000, 1010-2000 |
| **Software Version** | **QE 2.5** |
| NCE 25 | NCE 25 (100%), 28(94.9%), 30 (90.0%), 32 (78.7%) |
| MS1 m/z 400-2000 | 400-2000 (100%), 400-1500 (97.1%) |
| Iso Width 1.6 | Iso Width 0.7 (80.2%), 1.2 (94.8%), 1.6 (100%) |
| Fusion vs Lumos vs QEplus (OTMS2) | Fusion (SW1.2) 15900 (89.8%), Lumos (SW2.0 beta) 17700 (100%), QE (SW2.5) 15760 (89.0%) |
| **Software Version** | **QE 2.8 SP1** |
| minAGC (50ms IT) 5e2 100% | 1e2 (99.5%), 2.5e2 (99.2%), 5e2 (100%), 1e3 (99.6%), 5e3 (98.1%), 1e4 (97.1%), 5e4 (74.8%) |
| = IntThreshold 1e4 (100%) | 2e3 (99.5%), 5e3 (99.2%), 1e4 (100%), 2e4 (99.6%), 1e5 (98.1%), 2e5 (97.1%), 1e6 (74.8%) |

The table below lists some of the instrument method settings we tested on our QE (before the QEplus upgrade)  
Same setup except the sample is a yeast whole cell tryptic digest (Thanks to Dr. Judit Villen, UW), 100 ng on column injection. We typically get \~10000 unique peptides with sequest search and PeptideProphet p\>0.9,  
The results below are based on the number of unique peptides with Sequest search and PeptideProphet p\>0.9.

**Q Exactive**

| Best Result (100%) | Tested Values (X%) |
|:---|:---|
| Isolation width 2 | Isolation width 1 (95%) |
| Excl.IsoOn | All off (99%), Apex trigger (91%), PepMatchOn (88%), PepMatchPref (62%) |
| Only Excl.IsoOn | Exl.IsoOn and PepMatchOn (95%), Exl.IsoOn and PepMatchPref (97%) |
| DDA top 20 | DDA top 30 (97%) |
| Signal Threshold 10k | 2k (96%), 5k (94%), 10k (100%), 20k (93%) |
| MS2 target value 5e4 | 5e4 (99%), 1e5 (98%), 2e5 (98%), 5e5 (97%), 1e6 (100%) |
| MS1 target value 1e6 | 1e5 (90%), 5e5 (94%), 1e6 (100%) |
| iTRAQ NCE | peptide ID's:NCE 20 (80%), NCE 25 (100%), NCE 30 (90%), SNCE 20/25/30 (83%) |
| Missing ITRAQ reporter (% of total ID's) | all channels   113     114     115     116     117     118     119     121 |
| NCE 20 |     2.8               10.4     10.2     11.6     16     11.7     9.1     20.6     7.5 |
| NCE 25 |     0.3                 1.3       1.1       1.5       2.4     1.6     1.1     3.5       0.7 |
| NCE 30 |     0.0                 0.1       0.2       0.2     0.4     0.3     0.1     0.8     0.0 |
| SNCE 20/25/30 |     0.5                 2.5       2.3       2.8     4.2     2.8     1.9     5.7       1.7 |
| Loading amount on column | 1000 ng (96.2%), 500 ng (100%), 250 ng (96.7%), 100 ng (96.8%) |

## Hela digest concentration curve 

Different concentrations of Pierce HeLa Protein Digest Standard (50, 100, 200, 500, 800, 1000 ng) were injected and separated with a 90 min 5-35% acetonitrile gradient over 90 min. Peptides were identified with our standard DDA method and search tools.  
![]({{ site.baseurl }}/instruments/images/qexactive_Hela.png)

TIC (total ion chromatogram) of the different concentrations overlay, normalized to 1000 ng chromatogram.

![]({{ site.baseurl }}/instruments/images/qexactive_Hela_02.png)

## Useful resources 

- 

- [Q Exactive Tutorial videos by Ben Orsburn](http://proteomicsnews.blogspot.com/p/q-exactive-tutorial-videos.html)
- [Q Exactive Calibration & Maintenance](https://documents.thermofisher.com/TFS-Assets/CMD/Reference-Materials/WS-MS-Q-Exactive-Calibration-Maintenance-iQuan2016-EN.pdf)

------------------------------------------------------------------------

## Quick links

- [Specifications](#specs)
- [Software](#software)
- [Calibrations](#calis)
- [Method parameters](#parameters)
- [HPLC setup](#hplc)
- [Instrument settings](#settings)
- [TMT instrument settings](#TMTsettings)
- [Resolution/Transient](#resolution)
- [Hela reference data](#hela)
- [Useful resources](#resources)

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
