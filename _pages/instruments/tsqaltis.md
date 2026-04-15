---
title: "TSQ Altis"
permalink: /instruments/tsqaltis/
toc: true
toc_label: "On this page"
toc_sticky: true
---

*Triple Quadrupole Mass Spectrometer*

![]({{ site.baseurl }}/instruments/images/TSQAltis01b.png)

The TSQ Altis, a triple quadrupole mass spectrometer, offers improved Active Ion Management (AIM™) technology, segmented quadrupoles, novel electron multipliers, and enhanced ion transmission tubes.

Visit the [Thermo TSQ Altis website](https://www.thermofisher.com/order/catalog/product/TSQ02-10002) for more information and for some nice animations

TSQ Altis (TSQ-A-10306 / UW tag 2033410), Installed 10/16/2018

## Specifications 

- **Mass range**
- m/z 5 to 2000 Da
- 600 SRMs/sec
- Selectivity 0.2 Da FWHM for high resolutions SRM
- Sensitivity 500 000 : 1

<!-- -->

- **Available scan functions**
- Collision induced dissociation (CID)
- 3000 times SRMs (T-SRMs)
- QED-MS/MS - Simultaneous quantitation and structural confirmation
- iSRM - intelligent SRM

## Instrument control software 

- [see spreadsheet (.xls format)]({{ site.baseurl }}/docs/InstrumentSoftwareVersions.xls)
- [Tips for upgrading to Win10 LTSB 2016 on TNG instruments (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_Win10LTSB2016_upgrade.pdf)

## Instrument calibrations 

- This file summarizes calibration solutions and calibration tips [Calibrations (.xlsx)]({{ site.baseurl }}/docs/Calibrations.xlsx)

## Collision Energy Calculation 

For collision energy calculation check out our MRM/SRM overview [page]({{ site.baseurl }}/protocols05/MRM/).

Base Collision Energy (CE) Equations TSQ Altis (based on template method from Thermo):

- TSQ Altis (1.5 mTorr) 2 + peptide: CE = 0.0339 x m/z + 2.3398
- TSQ Altis (1.5 mTorr) 3 + peptide: CE = 0.0295 x m/z + 1.4831

## HPLC setup 

the following documents are guidelines to setup the capillary trap/column on our LC-MS systems, this is intended as a supplement to the hands on training required to use the UWPR instruments.

- [LC-MS setup procedure EASYnLC(pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_LC_MS_setup_EASYnLC.pdf)

## Peptide Standards 

- [Simple peptide standards for LC-MS (xlsx)]({{ site.baseurl }}/docs/protocols05/AngioNeuroStandard.xlsx)

- [Skyline AngioNeuro_QQQ_SRM (zip)](https://proteomicsresource.washington.edu/docs/protocols05/AngioNeuro_QQQ_SRM.sky.zip)
- [Skyline Promega 6x5_LCMS_Standard_Hela_QQQ_SRM (zip)](https://proteomicsresource.washington.edu/docs/protocols05/Promega_6x5_LCMS_Standard_Hela_QQQ_SRM.sky.zip)
- [Skyline for TSQ Altis method template "PRTC Hela" SRM (zip)](https://proteomicsresource.washington.edu/docs/protocols05/AltisMethodTemplate_PRTC_Hela.sky.zip)
- [Skyline for TSQ Altis method template "PRTC heavy" SRM (zip)](https://proteomicsresource.washington.edu/docs/protocols05/AltisMethodTemplate_PRTCheavy.sky.zip)

- [Skyline AngioNeuro_Orbitrap_PRM (zip)](https://proteomicsresource.washington.edu/docs/protocols05/AngioNeuro_Orbitrap_PRM.sky.zip)
- [Skyline Promega 6x5_LCMS_Standard_Orbitrap_PRM (zip)](https://proteomicsresource.washington.edu/docs/protocols05/Promega_6x5_LCMS_Standard_Orbitrap_PRM.sky.zip)
- [Skyline Promega 6x5_LCMS_Standard_Hela_Orbitrap_PRM (zip)](https://proteomicsresource.washington.edu/docs/protocols05/Promega_6x5_LCMS_Standard_Hela_Orbitrap_PRM.sky.zip)
- [Skyline Sigma MSQC1_Orbitrap_PRM (zip)](https://proteomicsresource.washington.edu/docs/protocols05/Sigma_MSQC1_Orbitrap_PRM.sky.zip)
- [Skyline Hela_Orbitrap_PRM (zip)](https://proteomicsresource.washington.edu/docs/protocols05/Hela_Orbitrap_PRM.sky.zip)

------------------------------------------------------------------------

## Quick links

- [Specifications](#specs)
- [Software](#software)
- [Calibrations](#calis)

- [Collision Energy](#collisionenergy)
- [HPLC setup](#hplc)
- [Peptide Standards](#standards)

## UWPR documents and pages

- [Instrument control software (.xls)]({{ site.baseurl }}/docs/InstrumentSoftwareVersions.xls)
- [Tips for upgrading to Win10 LTSB 2016 (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_Win10LTSB2016_upgrade.pdf)
- [Calibrations (.xlsx)]({{ site.baseurl }}/docs/Calibrations.xlsx)
- [Simple peptide standards for LC-MS (xlsx)]({{ site.baseurl }}/docs/protocols05/AngioNeuroStandard.xlsx)
- [LC-MS setup procedure EASYnLC(pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_LC_MS_setup_EASYnLC.pdf)
- [EASYnLC page]({{ site.baseurl }}/instruments/EASYnLC/)
- [MRM/SRM page]({{ site.baseurl }}/protocols05/MRM/)
- [PRM page]({{ site.baseurl }}/protocols05/PRM/)
- [DIA page]({{ site.baseurl }}/protocols05/DIA/)
