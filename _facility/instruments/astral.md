---
title: "Orbitrap Astral"
permalink: /facility/instruments/astral/
redirect_from:
  - /resources/instruments/astral/
classes: no_sidebar
layout: single
toc: true
toc_label: "On this page"
toc_sticky: true
author_profile: false
---

*Hybrid quadrupole-Orbitrap-Astral mass spectrometer*

![]({{ site.baseurl }}/assets/images/instruments/Astral_01.png)

The Thermo Fisher Scientific Orbitrap Astral mass spectrometer contains three mass analyzers: a quadrupole for precursor ion selection,
an Orbitrap analyzer for high dynamic range HRAM spectra, and the Astral analyzer for high-sensitivity HRAM spectra at rates up to 200 Hz.
Astral and Orbitrap acquisition are synchronized, supporting high resolution data-independent acquisition (HR-DIA), data-dependent
acquisition (DDA) for identification and label-free quantitation, and TMTpro™ 18-plex multiplexed quantification.

UWPR install date: 8/15/2024

## Specifications {#specs}

| Specification | Value |
|:--|:--|
| MS/MS scan rate, Astral analyzer | up to 200 Hz at 80,000 resolution (m/z 524), max injection time 3 ms |
| MS/MS scan rate, Orbitrap analyzer | up to 40 Hz at 7,500 resolution (m/z 200) |
| Resolution, Astral analyzer | up to 80,000 FWHM at m/z 524 (resolves TMTpro™ 18-plex reporter ions) |
| Resolution, Orbitrap analyzer | up to 480,000 FWHM at m/z 200 |
| Mass accuracy, Astral | < 5 ppm RMS drift over 24 h, external calibration |
| Mass accuracy, Orbitrap | < 3 ppm RMS drift over 24 h external; < 1 ppm internal calibration |
| Dynamic range, Orbitrap | > 5,000 within a single spectrum |
| Dynamic range, Astral | > 1,000 within a single microscan spectrum |

**Features**

- Higher Energy Collisional Dissociation (HCD)
- EASY-IC™ (internal calibration) source
- Quadrupole mass filter
- Ion Routing Multipole (IRM) trapping, focuses and routes ions more effectively
- Orbitrap mass analyzer
- Astral (Asymmetric Track Lossless) mass analyzer
- Extensive pre-built method templates for data-dependent acquisition (DDA), data-independent acquisition (DIA), TMT, and SureQuant for multiple application areas including plasma and single cell proteomics


## Resolving Power and Transient Length {#resolution}

Here is a full table of the available resolution settings. Note: higher resolution does not always result in better mass accuracy. It increases
your ability to distinguish between m/z ions, and always trades against scan time. On the Astral's Orbitrap analyzer the settings range from
7,500 (about 40 Hz) up to 480,000 (about 0.7 Hz). To take full advantage of parallel fill and detect, balance the maximum fill times against
the transient length.

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


## HeLa Digest Concentration Curve {#hela}

Different concentrations of Pierce HeLa Protein Digest Standard (10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 200, 300, 400, 500 ng) were 
injected and separated with a 6-35% Buffer B (80% ACN) gradient over 60 min Peptides were identified with our standard DDA method and 
search tools.

![]({{ site.baseurl }}/assets/images/instruments/Astral_Hela_01.png)
