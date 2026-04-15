---
title: "TSQ Vantage"
permalink: /instruments/tsqvantage/
toc: true
toc_label: "On this page"
toc_sticky: true
---

*Triple Quadrupole Mass Spectrometer*

![]({{ site.baseurl }}/instruments/images/tsqvantage01a.png)

The TSQ Vantage, a triple quadrupole mass spectrometer, includes a Qualitative Enhanced Data scanning function (QED). This proprietary scan function allows the instrument to make data-dependent decisions in response to the sample signals and produce qualitative information in addition to the precise and sensitive quantitative information. The specificity provided by H-SRM followed by QED MS/MS provides uncompromised quantitation performance at low levels followed by a fast, highly-specific full MS/MS scan for confirmation. The patented G2 ion optics (S-lens) provides better transfer (less loss) of more ions to the detector giving better sensitivity, bigger peaks, and better reproducibility in the low end. Additionally, the standard hyperbolic (HyperQuad™ ) quadrupole mass filters reduce chemical noise (H-SRM).

10/8/2009 TSQ Vantage (TQU02360) Installed

## Specifications {#specs}

**Mass range**

- m/z 10 to 1 500 Da

**Resolution**

- 7500 (FWHM) at m/z 508 of polytyrosine, resolution is continuously adjustable to better than 0.1 Da peak width (FWHM) across the entire mass range

**Scan speed**

- 5,000 amu/sec

**Available activation**

- Collision induced dissociation (CID)
- 3000 times SRMs (T-SRMs)
- QED-MS/MS - Simultaneous quantitation and structural confirmation
- iSRM - Intelligent SRM
- H-SRM - Highly Selective Reaction Monitoring

## Instrument control software {#software}

- [see spreadsheet (.xls format)]({{ site.baseurl }}/docs/InstrumentSoftwareVersions.xls)

## Instrument calibrations {#calis}

- This file summarizes calibration solutions and calibration tips [Calibrations (.xlsx)]({{ site.baseurl }}/docs/Calibrations.xlsx)

## Collision Energy Calculation {#collisionenergy}

For collision energy calculation check out our MRM/SRM overview [page]({{ site.baseurl }}/protocols05/MRM/).

Base Collision Energy (CE) Equations (Ref\[1\]):

- TSQ Vantage (1.0 mTorr) 2 + peptide: CE = 0.041 x m/z - 3.442
- TSQ Vantage (1.0 mTorr) 3 + peptide: CE = 0.040 x m/z + 0.773
- TSQ Vantage (1.5 mTorr) 2 + peptide: CE = 0.030 x m/z + 2.905
- TSQ Vantage (1.5 mTorr) 3 + peptide: CE = 0.038 x m/z + 2.281

## HPLC setup {#hplc}

the following documents are guidelines to setup the capillary trap/column on our LC-MS systems, this is intended as a supplement to the hands on training required to use the UWPR instruments.

- [LC-MS setup procedure EASYnLC(pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_LC_MS_setup_EASYnLC.pdf)
- [LC-MS setup procedure nanoAcquity (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_LC_MS_setup.pdf)

## Peptide Standards {#standards}

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

- [LC-MS setup procedure EASYnLC(pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_LC_MS_setup_EASYnLC.pdf)
- [Instrument control software (.xls)]({{ site.baseurl }}/docs/InstrumentSoftwareVersions.xls)
- [Calibrations (.xlsx)]({{ site.baseurl }}/docs/Calibrations.xlsx)
- [Simple peptide standards for LC-MS (xlsx)]({{ site.baseurl }}/docs/protocols05/AngioNeuroStandard.xlsx)
- [MRM/SRM page]({{ site.baseurl }}/protocols05/MRM/)
- [PRM page]({{ site.baseurl }}/protocols05/PRM/)
- [DIA page]({{ site.baseurl }}/protocols05/DIA/)
