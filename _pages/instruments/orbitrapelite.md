---
title: "Orbitrap Elite"
permalink: /instruments/orbitrapelite.php
# TODO: define sidebar nav in _data/navigation.yml
# sidebar:
#   nav: "SIDEBAR_NAME"
---

![](/images/OTElite_02.png)\

The Thermo Scientific^™^ Orbitrap Elite^™^ mass spectrometer combines a dual linear ion trap (VelosPro) with a high-field orbitrap mass analyzer. The Velos Pro ion trap contributes enhanced ion optics that increase sensitivity and reliability, a greater dynamic range for better precursor detection, and the power of MSn identification. The high-field Orbitrap mass analyzer geometry and advanced signal processing technologies enable resolution of \>240,000, superior spectral quality, and higher scan speed. The superior resolution and spectral quality, as well as the higher scan speed, increase proteome coverage in complex samples even with very low sample amounts.

Visit the [Planet Orbitrap website](http://planetorbitrap.com/orbitrap-elite) for more information and for some nice animations

2011 Velos Orbitrap (SN03313B) Installed\
2012 Elite upgrade

## Specifications {#specs}

- **Scan Rate**
- Orbitrap MSn 4 Hz at 60,000 resolution
- Ion trap MSn up to 10 Hz

<!-- -->

- **Resolution**
- 15,000-240,000 (FWHM) at m/z 400

<!-- -->

- **Mass accuracy**
- \< 3 ppm RMS using external calibration
- \< 1 ppm RMS using internal calibration

<!-- -->

- **Features**
- High Field Orbitrap mass analyzer with resolving power up to 240,000 FWHM
- Advanced Signal processing
- S-Lens ion source for increased sensitivity
- CID/PQD and HCD Fragmentation
- Parallel MS and MSn analysis for enhanced duty cycle
- Velos Pro ion trap generation II ion optics with neutral blocking technology increase robustness

## Instrument control software {#software}

- [Instrument control software (.xls)](/docs/InstrumentSoftwareVersions.xls)

## Instrument calibrations {#calis}

- This file summarizes calibration solutions and calibration tips [Calibrations (.xlsx)](/docs/Calibrations.xlsx)

## Resolving Power and Transient Length {#resolution}

Here is a full table of the available resolution settings. Note: higher resolution does not always result in better mass accuracy. The higher the resolution increases your ability to distinguish between m/z ions. As you can see in this table, there is always a trade of higher resolution with time. 15k is the lowest resolution setting, with the fastest scan speed of \~7.7 Hz. The highest resolution setting is 240K that is \~1.2 Hz.\

   OT Res. at m/z 200   OT Elite Res. at m/z 200   Transient length \[ms\]   Approx. scan speed \[Hz\]
  -------------------- -------------------------- ------------------------- ---------------------------
                                 15,000                      48                         7.7
         7,500                   30,000                      96                         6.9
         15,000                  60,000                      192                        4.0
         30,000                 120,000                      384                        2.3
         60,000                 240,000                      768                        1.2
        100,000                                                             

## HPLC setup {#hplc}

the following documents are guidelines to setup the capillary trap/column on our LC-MS systems, this is intended as a supplement to the hands on training required to use the UWPR instruments.

- [LC-MS setup procedure nanoAcquity (pdf)](/docs/protocols05/UWPR_LC_MS_setup.pdf)

## Instrument Settings {#settings}

The table below lists some of the instrument method settings we tested on our Elite.\
We use a nanoAcquity UPLC with home made columns (30cm x 75μm, Dr Maisch C18AQ 100Å 5μm) and trap column (3cm x 100μm, Dr Maisch C18AQ 100Å 5μm), with 5-30% B (ACN, 0.1%FA) in 90min gradient. The sample is a HeLa cell whole cell tryptic digest (ThermoPierce), 100 ng on column injection.\
The results below are based on the number of unique peptides with Comet search and peptide prophet p\>0.9.\

Best Result (100%)

Tested Values (x%)

**Software Version**

**Orbitrap Elite 2.7 SP2**

MS1 resolution 60k

MS1 res. 60k(100%), 120k (97.2%), 240k (91%)

Preview Off

FT Master Scan Preview Off (100%) On (96.9%)

IT MS2

OT MS2 ( %)

## Precursor m/z and charge state distribution {#m/z}

The chart below shows the charge state and precursor m/z distribution for all the peptides identified with a peptide prophet cutoff 0.9 The average of four LCMS runs with 90 min gradients, two replicates using a HeLa tryptic digest (Pierce, 100 ng on column) and two replicates of a tryptic digest from a Ramos cell whole cell lysate 100ng on column. The combined total number of peptide identifications p\>= 0.9 is 38574; the total number of unique peptide identifications p\>= 0.9 is 19218. ![](/images/fusion_mz_charge.png)\
m/z and charge state distribution

## Quick links

- [Specifications](#specs)
- [Software](#software)
- [Calibrations](#calis)

- [HPLC setup](#hplc)
- [Instrument settings](#settings)
- [Resolution/Transient](#resolution)
- [Precursor m/z](#m/z)

## UWPR documents and pages

- [Instrument control software (.xls)](/docs/InstrumentSoftwareVersions.xls)
- [Calibrations (.xlsx)](/docs/Calibrations.xlsx)
- [LC-MS setup procedure nanoAcquity (pdf)](/docs/protocols05/UWPR_LC_MS_setup.pdf)
- [PRM page](/protocols05/PRM.php)
- [DIA page](/protocols05/DIA.php)
- [MRM/SRM page](/protocols05/MRM.php)
