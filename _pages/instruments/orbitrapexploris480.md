---
title: "Orbitrap Exploris 480"
permalink: /instruments/orbitrapexploris480/
toc: true
toc_label: "On this page"
toc_sticky: true
---

*Hybrid quadrupole-Orbitrap mass spectrometer*

![]({{ site.baseurl }}/instruments/images/Exploris480_02.png)

The Thermo Scientific Orbitrap Exploris 480 is an advanced, intelligence-driven instrument, built for ultimate performance and ease of use. The hardware has been designed to address laboratory requirements for maximum uptime and easy serviceability. The instrument control software is shared with next generation Thermo Scientific™ Tribrid™ and Thermo Scientific™ TSQ triple quadrupole mass spectrometers for simplicity of operation, reduced training needs, and easy transfer of methods and results from one research stage to the next. The Orbitrap Exploris 480 mass spectrometer has unique capabilities which impart extra speed, depth, and certainty to enable you to run more experiments or to gain deeper insights into your research.

Visit the [Planet Orbitrap website](https://planetorbitrap.com/orbitrap-exploris-480) for more information

12/1/2020 Exploris480 system 1 (SN MA10302C, UW tag 2033415) Installed  
3/23/2023 Exploris480 system 2 (SN MA10852C, UW tag 2033420) Installed

## Specifications 

- **Scan Rate**
- Up to 40 Hz at resolution setting 7500 at m/z 200
- Multiplexity: up to 20 precursors/scan

<!-- -->

- **Resolution**
- up to 480 000 at m/z 200

<!-- -->

- **Mass accuracy**
- \< 3 ppm RMS drift over 24 hours using external calibration
- \< 1 ppm RMS drift over 24 hours using internal calibration

<!-- -->

- **Sensitivity**
- Dynamic range \> 5000 within a single Orbitrap mass analyzer spectrum
- MS/MS: 50 fg reserpine on column S/N 100:1
- SIM: 50 fg reserpine on column S/N 150:1

<!-- -->

- **Features**
- Higher Energy Collisional Dissociation (HCD)
- EASY-IC™ (internal calibration) source
- Quadrupole mass filter
- Ion Routing Multipole (IRM) trapping, focuses and routes ions more effectively
- Orbitrap mass analyzer
- Broader range of experiments with multiple scan modes: data-dependent acquisition (DDA), data-independent acquisition (DIA), spectral multiplexing (MSX), TopN and new TopSpeed (TopS), BoxCar DIA and DDA experiments, tSIM, tSIM MSX, ddMS/MS, targeted MS/MS

## Instrument control software 

- [Instrument control software (.xls)]({{ site.baseurl }}/docs/InstrumentSoftwareVersions.xls)
- [Tips for upgrading to Win10 LTSB 2016 on TNG instruments (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_Win10LTSB2016_upgrade.pdf)

## Instrument calibrations 

- This file summarizes calibration solutions and calibration tips [Calibrations (.xlsx)]({{ site.baseurl }}/docs/Calibrations.xlsx)

## Resolving Power and Transient Length 

Here is a full table of the available resolution settings. Note: higher resolution does not always result in better mass accuracy. The higher the resolution increases your ability to distinguish between m/z ions. As you can see in this table, there is always a trade of higher resolution with time. The Exploris480 allows acquisition of transients at resolution settings ranging from 7500 to 480,000 at m/z 200 (16 and 1024 ms transients, respectively).  
To fully take advantage of the parallel fill and detect capabilities of the Exploris480, we need to balance the max fill times with the transient length. For resolving power 15,000, detection time is about 32 ms. There is always a small amount of inter-scan delay. Up to 22 ms can be used to fill the C-trap with ions- and without increasing cycle time.

| Res. at m/z 200 | Transient length \[ms\] | Approx. scan speed \[Hz\] | "Free" fill time \[ms\] |
|:--:|:--:|:--:|:--:|
| 7500 | 16 | 40 |  |
| 15,000 | 32 | 22 | 22 |
| 30,000 | 64 | 12 | 54 |
| 45,000 |  | 10 |  |
| 60,000 | 128 | 7 | 118 |
| 120,000 | 256 | 3 | 246 |
| 180,000 |  | 2 |  |
| 240,000 | 512 | 1.5 | 502 |
| 480,000 | 1024 | 0.7 | 1014 |

## TMT instrument Orbitrap Exploris480 (Tune1.1) 

The table below lists instrument method settings recommended by Thermo for the Lumos with Tune 3.3.  
with APD (Advanced Peak Detection) on  
based on this document: [TMT/TMTpro Instrument Acquisition Parameter Settings](https://assets.thermofisher.com/TFS-Assets/BID/Reference-Materials/tmt-tmtpro-instrument-acquisition.pdf)

| Properties               | MS2 120 min TMT 11plex | MS2 120 min TMT 16plex |
|:-------------------------|:----------------------:|:----------------------:|
| Resolution Full MS       |        120,000         |        120,000         |
| AGC target Full MS       |       100% (4e5)       |       100% (4e5)       |
| MS max IT, ms            |           50           |           50           |
| Scan range, m/z          |       400 - 1400       |       400 - 1400       |
| Top Speed, s             |           3            |           3            |
| MS2 max IT, ms           |          105           |          120           |
| MS2 Isolation window, Th |    0.7(2-3)-0.5(4+)    |          0.7           |
| MS2 NCE, %               |         38-40          |           32           |
| MS2 Intensity threshold  |          5e4           |          5e4           |
| Dynamic exclusion, s     |   60, single charge    |   60, single charge    |
| MS2 Resolution           |         50,000         |         50,000         |
| MS2 AGC target           |      200% ( 1e5 )      |      200% ( 1e5 )      |
| First mass               |        m/z 110         |        m/z 110         |

## HPLC setup 

the following documents are guidelines to setup the capillary trap/column on our LC-MS systems, this is intended as a supplement to the hands on training required to use the UWPR instruments.

- [LC-MS setup procedure EASYnLC(pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_LC_MS_setup_EASYnLC.pdf)
- [LC-MS setup procedure VanquishNeo (pdf)]({{ site.baseurl }}/docs/instruments/UWPR_LC_MS_setup_VanquishNeo.pdf)
- [LC-MS setup procedure nanoAcquity (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_LC_MS_setup.pdf)

## Instrument Settings 

The table below lists some of the instrument method settings we tested on our Exploris480.  
We use a EASYnLC UPLC with home made columns (35cm x 75μm, Reprosil Pur C18AQ 120Å 5μm) and trap column (3cm x 100μm, Reprosil Purc C18AQ 120Å 5μm), with 6-36% B (80% ACN, 0.1%FA) in 90min gradient. The sample is a Hela cell whole cell tryptic digest (ThermoFisher), 100 ng on column injection. We typically get \~22000 unique peptide ID's and 30000 PSM's with Comet search and PeptideProphet p\>0.9,  
The results below are based on the number of unique peptide ID's with Comet search and PeptideProphet p\>0.9.

| **Tested Setting** | **Best Result (100%)** |
|:---|:---|
| **Software Version** | **Exploris 4.4** |
| Gradient (6-45%B), unique ID's | **120min (100%)**, 90min (88.5%),60min (74.1%), 30min (46.8%) |
| Gradient (6-45%B), PSM's | **120min (100%)**, 90min (83.5%), 60min (67.6%), 30min (41.1%) |
| **Software Version** | **Exploris 4.2 SP1** |
| MS2 res unique ID's | MS2 7.5k (89%), 11.5k (96%), 15k (98%), **22.5k (100%)**, 30k (89%), 45k (71%) |
| MS2 res PSM's | MS2 7.5k (88%), 11.5k (95%), 15k (98%), **22.5k (100%)**, 30k (89%), 45k (69%) |
| **Software Version** | **Exploris 4.0** |
| 10 plex TMT unique ID's MS2 res | **45k (100%)**, turbo 15k (60%), turbo 30k (98%) |
| 10 plex TMT PSM's MS2 res | 45k (99%), turbo 15k (64%), **turbo 30k (100%)** |
| \% PSM's with signal in all TMT channels | 45k (99.5%), turbo 15k (92.9%), **turbo 30k (99.6%)** |
| MS2 res unique ID's | MS2 7.5k (89%), **15k (100%)**, 30k (92%), 45k (72%), 60k (59%) |
| MS2 res PSM's | MS2 7.5k (87%), **15k (100%)**, 30k (92%), 45k (70%), 60k (57%) |
| . | . |
| **Software Version** | **Exploris 2.0** |
| S-lens setting, unique ID's | 30 (93%), 40 (97%), **50(100%)**, 60 (92%) |
| S-lens setting, PSM's | 30 (87%), 40 (94%), **50(100%)**, 60 (91%) |
| Gradient type, unique ID's | **3-19-29%B (100%)**, 6-35%B (99.9%) |
| Gradient type, PSM's | 3-19-29%B (94%), **6-35%B (100%)** |

------------------------------------------------------------------------

## Quick links

- [Specifications](#specs)
- [Software](#software)
- [Calibrations](#calis)
- [Resolution/Transient](#resolution)

- [TMT instrument settings](#TMTsettings)
- [HPLC setup](#hplc)
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
