---
title: "Fusion"
permalink: /instruments/orbitrapfusion/
# TODO: define sidebar nav in _data/navigation.yml
# sidebar:
#   nav: "SIDEBAR_NAME"
---

*Orbitrap Fusion Tribrid MS*

![]({{ site.baseurl }}/instruments/images/fusion_05c.png)

The Thermo Scientific^™^ Orbitrap Fusion^™^ Tribrid^™^ mass spectrometer combines the best of quadrupole, Orbitrap, and ion trap mass analysis in a revolutionary Tribrid architecture that delivers unprecedented depth of analysis. It enables life scientists analyzing even the most challenging low-abundance, high-complexity, or difficult samples to identify more compounds more quickly, quantify more accurately, and elucidate structures more thoroughly.

Visit the [Planet Orbitrap website](http://planetorbitrap.com/orbitrap-fusion) for more information
and the [Fusion intro site](http://event1.thermoscientific.com/content/CMD_Transform2013_Fusion) for some nice animations.

12/5/2013 Fusion (FSN10134 / UW tag 2019653) Installed

## Specifications 

- **Scan Rate**
- Orbitrap MSn up to 15 Hz (18 Hz max for OT MS2 with sw v1.1)
- Ion trap MSn up to 20 Hz

<!-- -->

- **Resolution**
- 15,000-450,000 (FWHM) at m/z 200

<!-- -->

- **Mass accuracy**
- \< 3 ppm RMS using external calibration
- \< 1 ppm RMS using internal calibration

<!-- -->

- **Features**
- CID/HCD/ETD(/EThcD with sw v1.1) detected by the Ion Trap or Orbitrap at any level of MSn for maximum experimental flexibility
- ETD for fragmentation and internal calibrant
- S-Lens ion source for increased sensitivity
- Quadrupole mass filter (1200 amu wide Quadrupole Isolation with improved signal to noise with sw v1.1)
- Orbitrap mass analyzer
- Spectral multiplexing for enhanced duty cycle
- Synchronous Precursor Selection Up to 15 precursors per MS2 scan, for MS3 analysis only

## Instrument control software 

- [Instrument control software (.xls)]({{ site.baseurl }}/docs/InstrumentSoftwareVersions.xls)
- [Tips for upgrading to Win10 LTSC 2019 on TNG instruments (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_Win10LTSC_upgrade.pdf)
- [Tips for upgrading to Win10 LTSB 2016 on TNG instruments (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_Win10LTSB2016_upgrade.pdf)

## Instrument calibrations 

- This file summarizes calibration solutions and calibration tips [Calibrations (.xlsx)]({{ site.baseurl }}/docs/Calibrations.xlsx)

## Parallelization on the Orbitrap Fusion 

To improve the spectral acquisition rate the acquisition process on the Fusion is extensively parallelized. The figure below shows a schematic of parallel execution and event pipelining: Precursors identified in the Orbitrap full scan (top row) are fragmented and accumulated in the IRM (middle row) concurrent with LT acquisition of the previous MS/MS (bottom row). (The use of parallelizable time was further improved in sw v1.1.) ![]({{ site.baseurl }}/instruments/images/fusion_04a.png)
Senko MW et al. Novel parallelized quadrupole/linear ion trap/Orbitrap tribrid mass spectrometer improving proteome coverage and peptide identification rates. Anal Chem 85(24), 11710 - 4 (2013)

## AGC control on Orbitrap Fusion Series Instruments 

Ion population control is an important concept for all trapping instruments. To ensure proper functioning of the Orbitrap and Linear Ion trap analyzers, the ion populations are regulated at a given target level, in a process referred to as automatic gain control (AGC). The mechanism for the regulation is a fast ion trap full scan referred to as the "prescan". This scan is "hidden", and is not recorded in the raw file. The prescan makes a measurement of the ion flux, and from this information, the injection time for subsequent scans can be set to deliver the target number of ions.
For **data dependent experiments**, the prescan uses the same settings as the MS master scan. The prescan is executed immediately before the master scan, and the total ion current (TIC) from the prescan is used to set the injection time for the master scan. The identities (m/z and charge) of the precursors for the dependent scans are extracted from the previous master scan, but the injection times for these dependent scans are calculated from the intensities in the prescan.
For **targeted experiments**, the prescan analyzes the mass range spanning the smallest target up to the largest target, and the injection times for each target are calculated from intensities in the prescan. In the context of LC-MS, analyte intensity varies considerably as each compound elutes from the column, making the length of time between prescan and subsequent scans an important factor to consider. When the list of targeted scans is large, the time between execution of the prescan and execution of the later targeted scans could become significant, negatively affecting the accuracy of the ion population regulation. For this reason, the Loop Control mechanism was added to the targeted experiment methods. For example, when Loop Control is set to Time, the prescan will be executed at a period less than or equal to the specified time period, ensuring a certain proximity between prescan and targeted scans, which in turn can improve the accuracy of the calculated injection times, and hence the quality of the acquired data.

## Resolving Power and Transient Length 

Here is a full table of the available resolution settings. Note: higher resolution does not always result in better mass accuracy. The higher the resolution increases your ability to distinguish between m/z ions. As you can see in this table, there is always a trade of higher resolution with time. 15k is the lowest resolution setting, with the fastest scan speed of \~15 Hz. On the Fusion, the highest resolution setting is 450K that is \<1 Hz.
To fully take advantage of the parallel fill and detect capabilities of the Fusion, we need to balance the max fill times with the transient length. For resolving power 30,000, detection time is about 64 ms. There is always a small amount of inter-scan delay. Up to 54 ms can be used to fill the C-trap with ions- and without increasing cycle time.
In SW version 2.1 50k resolution OT scans for TMT 10plex experiments shows a \~10% improvement over 60k resolution. We successfully used 30k resolution as well.

| Res. at m/z 200 | Transient length \[ms\] | Approx. scan speed \[Hz\] | "Free" ion time \[ms\] |
|:--:|:--:|:--:|:--:|
| 15,000 | 32 | na | 22 |
| 30,000 | 64 | 15 | 54 |
| 50,000 | 96 | na | 86 |
| 60,000 | 128 | 7.5 | 118 |
| 120,000 | 256 | 4 | 246 |
| 240,000 | 512 | 2 | 502 |
| 450,000 | 1024 | \<1 | 1014 |

## HPLC setup 

the following documents are guidelines to setup the capillary trap/column on our LC-MS systems, this is intended as a supplement to the hands on training required to use the UWPR instruments.

- [LC-MS setup procedure EASYnLC(pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_LC_MS_setup_EASYnLC.pdf)
- [LC-MS setup procedure nanoAcquity (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_LC_MS_setup.pdf)

## Instrument Settings 

The table below lists some of the instrument method settings we tested on our Fusion.
We use a nanoAcquity UPLC with home made columns (30cm x 75μm, Magic C18AQ 100Å 5μm) and trap column (3cm x 100μm, Magic C18AQ 200Å 5μm), with 5-30% B (ACN, 0.1%FA) in 90min gradient. The sample is a Ramos cell whole cell tryptic digest (Thanks to Dr. Richard G. James, Seattle Children's), 100 ng on column injection. We typically get \~19000 unique peptides with Comet search and PeptideProphet p\>0.9,
The results below are based on the number of unique peptides with Comet search and PeptideProphet p\>0.9.

Best Result (100%)

Tested Values (x%)

**Software Version**

**Fusion 1.0**

Gradient 5-30%B 150 min

Gradient 5-30%B in 90 min(87%), 120 min (94%), 150 min (100%)

Q isolation

IT isolation (60%)

IT MS2

OT MS2 (86%)

HCD NCE 25

HCD NCE 20 (93%), 25 (100%), 30 (99%)

HCD (NCE25)

CID (NCE35) (88%)

Target: HCD IT MS2, 10k

5k (98%), 10k (100%), 50k (96%), 100k (95%)

Target: CID IT MS2, 10k

5k (99%), 10k (100%), 50k (98%), 100k (96%)

IT scan rate rapid

Turbo (98%), rapid (100%), normal (96%)

Iso width 1.6

Iso width 1.6 (100%) and 2 (99%)

Top speed 3sec

vs Top 20 (99%)

Include: 2-5 charge

Include: unassigned & 2-5(100%), 2-5 (100%), unassigned (0%)

Signal threshold 10k

500 (98%), 1k (99%), 10k (100%), 50k (97%), 100k (93%)

Pick all charge states

vs Only pick single Charge state per precursor (94%)

Auto Target off

Auto Target on (98%)

DDA start with most intense ion

Least intense (96%)

DDA

GPF: full MS1 but allow to pick from small GPF windows only (93%), GPF MS1 windows (95%)

Fusion DDA

QEplus DDA(80%)

100ng Ramos cell digest

100ng HeLa digest (Pierce #88328) (97%)

Carryover

100 ng Ramos cell digest (100%), blank following (0.4%)

Top 30

Top 10 (90%), Top 20 (91%), Top 30 (100%), Top 40 (92%)

Top 30

Top speed 1 sec (98%)

Top speed 1 sec

Top speed 1 sec (100%), 2 sec (97%), 3 sec (94%), 4 sec (95%)

MS1 m/z 300-1500

MS1 m/z 300-1500 (100%), 300-2000 (99%), 400-1500 (99%), 400-2000 (97%)

**Software Version**

**Fusion 1.1**

Q full (MS1) scan isolation

"regular" full scan (99.4%)

IT MS2

IT MS2 (100%), OT MS2 15k resolution (75.9%), OT MS2 30k resolution (75.4%)

IT MS2

MS1 11491 ± 2; MS2 91422 ± 139; peptides total 44062 ± 76; unique 19476 ± 21

OT MS2 15k

MS1 13317 ± 67; MS2 77717 ± 267; peptides total 28943 ± 30; unique 14774 ± 80

OT MS2 30k

MS1 11213 ± 38; MS2 51990 ± 39; peptides total 28642 ± 66; unique 14680 ± 122

OT MS1 120k

OT MS1 120k (100%), 240k (97%), 60k (94.7%)

**Software Version**

**Fusion 1.2**

IT MS2 (HCD)

ITMS2 (100%), OTMS2 (87.7%)

HCD ITMS2

OT MS1 120k (100%), 240k (97%), 60k (94.7%)

Fusion vs Lumos vs QEplus (OTMS2)

Fusion (SW1.2) 15900 (89.8%), Lumos (SW2.0 beta) 17700 (100%), QE (SW2.5) 15760 (89.0%)

Fusion vs Lumos (ITMS2)

Fusion (SW1.2) 18100 (100%), Lumos (SW2.0 beta) 18000 (99.4%)

ITMS2 dyn. Excl. DE15s

ITMS2: DE15s (100%), DE60s (99.9%), OTMS2: DE15s (82.8%), DE60s (86.7%)

unique peptide ID's

ITMS2: DE15s 18222, DE60s 18200, OTMS2: DE15s 15091, DE60s 15801

PSMs (total peptide ID's)

ITMS2 DE15s: 32122, ITMS2 DE60s: 25942, OTMS2 DE15s: 24308, OTMS2 DE60s: 20622

5-30 %B in 180 min unique ID's

5-30% B in 60 mins (72%), 90 mins (83.9%), 120 mins (90.6%), 180 mins (100%)

5-30 %B in 180 min PSM's

5-30% B in 60 mins 51.0%), 90 mins (65.5%), 120 mins (77.1%), 180 mins (100%)

**Software Version**

**Fusion 2.1**

IT vs OT MS2

unique ID's ITMS2 18254 (100%), OTMS2 18145 (99.4%)

PSM's ITMS2 25302 (100%), 22372 (88.4%)

**Software Version**

**Fusion 3.5**

APD advanced peak detection

unique ID's: ITMS2 APD(100%), ITMS2(85.3%), OTMS2 APD(91.1%), OTMS2(69.2%)

PSM's: ITMS2 APD(99.4%), ITMS2(100%), OTMS2 APD(83.8%), OTMS2(68.2%)

## TMT instrument Orbitrap Fusion settings (Tune3.3) 

The table below lists instrument method settings recommended by Thermo for the Lumos with Tune 3.3.
with APD (Advanced Peak Detection) on
based on this document: [TMT/TMTpro Instrument Acquisition Parameter Settings](https://assets.thermofisher.com/TFS-Assets/BID/Reference-Materials/tmt-tmtpro-instrument-acquisition.pdf)

<table data-border="0" data-cellpadding="4" style="background-color:#EBEBF5">
<colgroup>
<col style="width: 20%" />
<col style="width: 20%" />
<col style="width: 20%" />
<col style="width: 20%" />
<col style="width: 20%" />
</colgroup>
<thead>
<tr>
<th style="text-align: left; background-color: #9999CC;">Properties</th>
<th style="text-align: center; background-color: #9999CC;">SPS 120 min TMT 11plex</th>
<th style="text-align: center; background-color: #9999CC;">SPS 120 min TMT 16plex</th>
<th style="text-align: center; background-color: #9999CC;">MS2 120 min TMT 11plex</th>
<th style="text-align: center; background-color: #9999CC;">MS2 120 min TMT 16plex</th>
</tr>
</thead>
<tbody>
<tr>
<td style="text-align: left;">Resolution Full MS</td>
<td style="text-align: center;">120,000</td>
<td style="text-align: center;">120,000</td>
<td style="text-align: center;">120,000</td>
<td style="text-align: center;">120,000</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">AGC target Full MS</td>
<td style="text-align: center; background-color: #D6D6EB;">100% (4e5)</td>
<td style="text-align: center; background-color: #D6D6EB;">100% (4e5)</td>
<td style="text-align: center; background-color: #D6D6EB;">100% (4e5)</td>
<td style="text-align: center; background-color: #D6D6EB;">100% (4e5)</td>
</tr>
<tr>
<td style="text-align: left;">MS max IT, ms</td>
<td style="text-align: center;">50</td>
<td style="text-align: center;">50</td>
<td style="text-align: center;">50</td>
<td style="text-align: center;">50</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">Scan range, m/z</td>
<td style="text-align: center; background-color: #D6D6EB;">400 - 1400</td>
<td style="text-align: center; background-color: #D6D6EB;">400 - 1400</td>
<td style="text-align: center; background-color: #D6D6EB;">400 - 1400</td>
<td style="text-align: center; background-color: #D6D6EB;">400 - 1400</td>
</tr>
<tr>
<td style="text-align: left;">Top Speed, s</td>
<td style="text-align: center;">3</td>
<td style="text-align: center;">3</td>
<td style="text-align: center;">3</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">MS2 max IT, ms</td>
<td style="text-align: center; background-color: #D6D6EB;">50</td>
<td style="text-align: center; background-color: #D6D6EB;">50 (custom)</td>
<td style="text-align: center; background-color: #D6D6EB;">105</td>
<td style="text-align: center; background-color: #D6D6EB;">120</td>
</tr>
<tr>
<td style="text-align: left;">MS2 Isolation window, Th</td>
<td style="text-align: center;">1.2(2)-0.7(3)-0.5(4+)</td>
<td style="text-align: center;">0.7</td>
<td style="text-align: center;">0.7(2-3)-0.5(4+)</td>
<td style="text-align: center;">0.7</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">MS2 NCE, %</td>
<td style="text-align: center; background-color: #D6D6EB;">35</td>
<td style="text-align: center; background-color: #D6D6EB;">30</td>
<td style="text-align: center; background-color: #D6D6EB;">38-40</td>
<td style="text-align: center; background-color: #D6D6EB;">35</td>
</tr>
<tr>
<td style="text-align: left;">MS2 Intensity threshold</td>
<td style="text-align: center;">5e3</td>
<td style="text-align: center;">5e3</td>
<td style="text-align: center;">5e4</td>
<td style="text-align: center;">5e4</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">Dynamic exclusion, s</td>
<td style="text-align: center; background-color: #D6D6EB;">60, single charge</td>
<td style="text-align: center; background-color: #D6D6EB;">60, single charge</td>
<td style="text-align: center; background-color: #D6D6EB;">60, single charge</td>
<td style="text-align: center; background-color: #D6D6EB;">60, single charge</td>
</tr>
<tr>
<td style="text-align: left;">MS2 Resolution</td>
<td style="text-align: center;">turbo</td>
<td style="text-align: center;">rapid</td>
<td style="text-align: center;">50,000</td>
<td style="text-align: center;">50,000</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">MS2 AGC target</td>
<td style="text-align: center; background-color: #D6D6EB;">100% ( 1e4 )</td>
<td style="text-align: center; background-color: #D6D6EB;">100% ( 1e4 )</td>
<td style="text-align: center; background-color: #D6D6EB;">200% ( 1e5 )</td>
<td style="text-align: center; background-color: #D6D6EB;">200% ( 1e5 )</td>
</tr>
<tr>
<td style="text-align: left;">MS3 AGC target</td>
<td style="text-align: center;">200% ( 1e5 )</td>
<td style="text-align: center;">200% ( 1e5 )</td>
<td style="text-align: center;"></td>
<td style="text-align: center;"></td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">SPS Isolation window, Th</td>
<td style="text-align: center; background-color: #D6D6EB;">1.3(2)-0.7(3)-0.5(4+)</td>
<td style="text-align: center; background-color: #D6D6EB;">0.7</td>
<td style="text-align: center; background-color: #D6D6EB;"></td>
<td style="text-align: center; background-color: #D6D6EB;"></td>
</tr>
<tr>
<td style="text-align: left;">SPS NCE, %</td>
<td style="text-align: center;">65</td>
<td style="text-align: center;">55</td>
<td style="text-align: center;"></td>
<td style="text-align: center;"></td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">SPS max IT, ms</td>
<td style="text-align: center; background-color: #D6D6EB;">105 (custom)</td>
<td style="text-align: center; background-color: #D6D6EB;">120 (custom)</td>
<td style="text-align: center; background-color: #D6D6EB;"></td>
<td style="text-align: center; background-color: #D6D6EB;"></td>
</tr>
<tr>
<td style="text-align: left;">SPS settings: # notches, mass range, Tag Exclusion</td>
<td style="text-align: center;">5 - 10 - 10<br />
m/z 110-500, TMT</td>
<td style="text-align: center;">10 m/z 110-500, TMT pro</td>
<td style="text-align: center;">m/z 110</td>
<td style="text-align: center;">m/z 110</td>
</tr>
</tbody>
</table>

## Precursor m/z and charge state distribution 

The chart below shows the charge state and precursor m/z distribution for all the peptides identified with a PeptideProphet cutoff 0.9 The average of four LCMS runs with 90 min gradients, two replicates using a HeLa tryptic digest (Pierce, 100 ng on column) and two replicates of a tryptic digest from a Ramos cell whole cell lysate 100ng on column. The combined total number of peptide identifications p\>= 0.9 is 38574; the total number of unique peptide identifications p\>= 0.9 is 19218. ![]({{ site.baseurl }}/instruments/images/fusion_mz_charge.png)
m/z and charge state distribution

## Quick links

- [Specifications](#specs)
- [Software](#software)
- [Calibrations](#calis)
- [Parallelization](#parallelization)
- [AGC control](#agc)

- [Resolution/Transient](#resolution)
- [HPLC setup](#hplc)
- [Instrument settings](#settings)
- [TMT instrument settings](#TMTsettings)
- [Precursor m/z](#m/z)

## UWPR documents and pages

- [Instrument control software (.xls)]({{ site.baseurl }}/docs/InstrumentSoftwareVersions.xls)
- [Tips for upgrading to Win10 LTSB 2016 (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_Win10LTSB2016_upgrade.pdf)
- [Calibrations (.xlsx)]({{ site.baseurl }}/docs/Calibrations.xlsx)
- [LC-MS setup procedure EASYnLC(pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_LC_MS_setup_EASYnLC.pdf)
- [PRM page]({{ site.baseurl }}/protocols05/PRM/)
- [DIA page]({{ site.baseurl }}/protocols05/DIA/)
- [Isotopic Labeling page]({{ site.baseurl }}/protocols03/isotopic_labeling/)
- [MRM/SRM page]({{ site.baseurl }}/protocols05/MRM/)
