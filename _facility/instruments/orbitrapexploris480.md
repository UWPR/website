---
title: "Orbitrap Exploris 480"
permalink: /facility/instruments/orbitrapexploris480/
redirect_from:
  - /resources/instruments/orbitrapexploris480/
classes: no_sidebar
layout: single
toc: true
toc_label: "On this page"
toc_sticky: true
author_profile: false
---

*Hybrid quadrupole-Orbitrap mass spectrometer*

![]({{ site.baseurl }}/assets/images/instruments/Exploris480_02.png)

The Thermo Scientific Orbitrap Exploris 480 is a hybrid quadrupole-Orbitrap mass spectrometer with resolution up to 480,000 at m/z 200
and MS/MS scan rates up to 40 Hz. Its instrument control software is shared with the Tribrid and TSQ series, so methods transfer easily
between the UWPR's instruments.

Installation dates: \
12/1/2020 Exploris480 system 1 \
3/23/2023 Exploris480 system 2 

## Specifications {#specs}

| Specification | Value |
|:--|:--|
| MS/MS scan rate | up to 40 Hz at 7,500 resolution (m/z 200) |
| Multiplexing | up to 20 precursors per scan |
| Resolution | up to 480,000 at m/z 200 |
| Mass accuracy | < 3 ppm RMS drift over 24 h external; < 1 ppm internal calibration |
| Dynamic range | > 5,000 within a single Orbitrap spectrum |
| Sensitivity, MS/MS | 50 fg reserpine on column, S/N 100:1 |
| Sensitivity, SIM | 50 fg reserpine on column, S/N 150:1 |

**Features**

- Higher Energy Collisional Dissociation (HCD)
- EASY-IC™ (internal calibration) source
- Quadrupole mass filter
- Ion Routing Multipole (IRM) trapping, focuses and routes ions more effectively
- Orbitrap mass analyzer
- Broader range of experiments with multiple scan modes: data-dependent acquisition (DDA), data-independent acquisition (DIA), spectral multiplexing (MSX), TopN and new TopSpeed (TopS), BoxCar DIA and DDA experiments, tSIM, tSIM MSX, ddMS/MS, targeted MS/MS


## Resolving Power and Transient Length {#resolution}

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
