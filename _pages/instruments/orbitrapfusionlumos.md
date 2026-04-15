---
title: "Lumos"
permalink: /instruments/orbitrapfusionlumos/
toc: true
toc_label: "On this page"
toc_sticky: true
---

*Orbitrap Fusion Lumos Tribrid MS*

![]({{ site.baseurl }}/instruments/images/lumos02c.png)

The Thermo Scientific^™^ Orbitrap Fusion Lumos^™^ Tribrid^™^ mass spectrometer allows systems biology researchers to test new limits of quantitation and protein characterization. It incorporates the brightest ion source, a segmented quadrupole mass filter with improved selectivity and ion transmission, Advanced Vacuum Technology for improved ion transmission to the Orbitrap mass analyzer. Combined, these hardware improvements enable the new tribrid instrument to excel in the most challenging applications, including analysis of low level PTMs, multiplexed relative quantitation using isobaric tags, intact protein characterization, as well as MSn analysis of small molecules.

Visit the [Planet Orbitrap website](http://planetorbitrap.com/orbitrap-fusion-lumos) for more information

1/8/2016 Fusion (CA2-MP25 / UW tag 2019657) Installed

## Specifications 

- **Scan Rate**
- Orbitrap MSn up to 20 Hz
- Ion trap MSn up to 20 Hz

<!-- -->

- **Resolution**
- 15,000-500,000 (FWHM) at m/z 200

<!-- -->

- **Mass accuracy**
- \< 3 ppm RMS using external calibration
- \< 1 ppm RMS using internal calibration

<!-- -->

- **Features**
- CID/HCD Fragmentation
- High Capacity Transfer Tube (HCTT) and Electrodynamic Ion Funnel (EIDF) for increased ion flux and lower limits of detection
- Segmented quadrupole mass filter allows for 0.4 u to 1200 u precursor isolation
- Ultra high field Orbitrap mass analyzer
- Spectral multiplexing for enhanced duty cycle
- Synchronous Precursor Selection Up to 15 precursors per MS2 scan, for MS3 analysis only

## Instrument control software 

- [Instrument control software (.xls)]({{ site.baseurl }}/docs/InstrumentSoftwareVersions.xls)
- [Tips for upgrading to Win10 LTSC 2019 on TNG instruments (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_Win10LTSC_upgrade.pdf)
- [Tips for upgrading to Win10 LTSB 2016 on TNG instruments (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_Win10LTSB2016_upgrade.pdf)

## Instrument calibrations 

- This file summarizes calibration solutions and calibration tips [Calibrations (.xlsx)]({{ site.baseurl }}/docs/Calibrations.xlsx)

## Parallelization on the Orbitrap Fusion 

To improve the spectral acquisition rate the acquisition process on the Fusion Series is extensively parallelized. The figure below shows a schematic of parallel execution and event pipelining: Precursors identified in the Orbitrap full scan (top row) are fragmented and accumulated in the IRM (middle row) concurrent with LT acquisition of the previous MS/MS (bottom row). ![]({{ site.baseurl }}/instruments/images/lumos03a.png)  
Senko MW et al. Novel parallelized quadrupole/linear ion trap/Orbitrap tribrid mass spectrometer improving proteome coverage and peptide identification rates. Anal Chem 85(24), 11710 - 4 (2013)

## AGC control on Orbitrap Fusion Series Instruments 

Ion population control is an important concept for all trapping instruments. To ensure proper functioning of the Orbitrap and Linear Ion trap analyzers, the ion populations are regulated at a given target level, in a process referred to as automatic gain control (AGC). The mechanism for the regulation is a fast ion trap full scan referred to as the prescan. This scan is hidden and is not recorded in the raw file. The prescan makes a measurement of the ion flux, and from this information, the injection time for subsequent scans can be set to deliver the target number of ions.  
For **data dependent experiments**, the prescan uses the same settings as the MS master scan. The prescan is executed immediately before the master scan, and the total ion current (TIC) from the prescan is used to set the injection time for the master scan. The identities (m/z and charge) of the precursors for the dependent scans are extracted from the previous master scan, but the injection times for these dependent scans are calculated from the intensities in the prescan.  
For **targeted experiments**, the prescan analyzes the mass range spanning the smallest target up to the largest target, and the injection times for each target are calculated from intensities in the prescan. In the context of LC-MS, analyte intensity varies considerably as each compound elutes from the column, making the length of time between prescan and subsequent scans an important factor to consider. When the list of targeted scans is large, the time between execution of the prescan and execution of the later targeted scans could become significant, negatively affecting the accuracy of the ion population regulation. For this reason, the Loop Control mechanism was added to the targeted experiment methods. For example, when Loop Control is set to Time, the prescan will be executed at a period less than or equal to the specified time period, ensuring a certain proximity between prescan and targeted scans, which in turn can improve the accuracy of the calculated injection times, and hence the quality of the acquired data.

## Resolving Power and Transient Length 

Here is a full table of the available resolution settings. Note: higher resolution does not always result in better mass accuracy. The higher the resolution increases your ability to distinguish between m/z ions. As you can see in this table, there is always a trade of higher resolution with time. 15k is the lowest resolution setting, with the fastest scan speed of \~15 Hz. On the Fusion, the highest resolution setting is 450K that is \<1 Hz.  
To fully take advantage of the parallel fill and detect capabilities of the Fusion, we need to balance the max fill times with the transient length. For resolving power 30,000, detection time is about 64 ms. There is always a small amount of inter-scan delay. Up to 54 ms can be used to fill the C-trap with ions- and without increasing cycle time.  
In SW version 2.1 50k resolution OT scans for TMT 10plex experiments shows a \~10% improvement over 60k resolution. We successfully used 30k resolution as well.

| Res. at m/z 200 | Transient length \[ms\] | Approx. scan speed \[Hz\] | "Free" fill time \[ms\] |
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
- [LC-MS setup procedure VanquishNeo (pdf)]({{ site.baseurl }}/docs/instruments/UWPR_LC_MS_setup_VanquishNeo.pdf)
- [LC-MS setup procedure nanoAcquity (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_LC_MS_setup.pdf)

## Instrument Settings 

The table below lists some of the instrument method settings we tested on our Lumos.  
We use a nanoAcquity UPLC with home made columns (35cm x 75μm, Reprosil Pur C18AQ 120Å 5μm) and trap column (3cm x 100μm, Reprosil Purc C18AQ 120Å 5μm), with 5-30% B (ACN, 0.1%FA) in 90min gradient. The sample is a Hela cell whole cell tryptic digest (ThermoFisher), 100 ng on column injection. We typically get \~17000 unique peptides with Comet search and PeptideProphet p\>0.9,  
The results below are based on the number of unique peptide ID's with Comet search and PeptideProphet p\>0.9.

<table data-border="0" data-cellpadding="4" style="background-color:#EBEBF5">
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<thead>
<tr>
<th style="text-align: left; background-color: #9999CC;">Best Result (100%)</th>
<th style="text-align: left; background-color: #9999CC;">Tested Values (x%)</th>
</tr>
</thead>
<tbody>
<tr>
<td style="text-align: left; background-color: #D6D6EB;"><strong>Software Version</strong></td>
<td style="text-align: left; background-color: #D6D6EB;"><strong>Fusion 2.0</strong></td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;"><strong>OTMS2 comparisons</strong></td>
<td style="text-align: left; background-color: #D6D6EB;"></td>
</tr>
<tr>
<td style="text-align: left;">MS1 resolution 60k</td>
<td style="text-align: left;">MS1 resolution 60k (100%), 120k (99.6%), 240k (90%)</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">MS1 AGC target 7e5</td>
<td style="text-align: left; background-color: #D6D6EB;">MS1 AGC target 5e5 (98.2%), 6e5 (98.8%), 7e5 (100%)</td>
</tr>
<tr>
<td style="text-align: left;">5-30 %B in 150 min</td>
<td style="text-align: left;">5-30 %B in 90 min (84.3%), in 120min (92.2%), in 150 min (100%)</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">5-30 %B in 90 min curve 6</td>
<td style="text-align: left; background-color: #D6D6EB;">5-30 %B in 90 min curve 6 (100%), curve 7 (89.2%), curve 8 (77.1%)</td>
</tr>
<tr>
<td style="text-align: left;">Isolation Width 1.6</td>
<td style="text-align: left;">Isolation Width 0.4 (90.1%), 0.7 (95.6%), 1.2 (95.1%), 1.6 (100%)</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">HCD NCE 25</td>
<td style="text-align: left; background-color: #D6D6EB;">HCD NCE 25 (100%), 29 (99.5%), 30 (98.9%), 31 (98.1%), 32 (99.8%), 33 (99.7%), 35 (99.7%)</td>
</tr>
<tr>
<td style="text-align: left;">OTMS2 Resolution 30k</td>
<td style="text-align: left;">OTMS2 Resolution 15k (98.1%), 30k (100%)</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">OTMS2 AGC 5e3 (IT 100ms)</td>
<td style="text-align: left; background-color: #D6D6EB;">OTMS2 AGC 5e3 IT100ms (100%), 1e4 (97.9%), 2e4 (95.9%), 3e4 (93.4%), 4e4 (93.2%), 5e4 (92.4%), 2e4 IT300ms (87.3%)</td>
</tr>
<tr>
<td style="text-align: left;">OTMS2: Dynamic Excl 60 sec</td>
<td style="text-align: left;">Dynamic Excl 15 sec (97.0%), 60 sec (100%)</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">OTMS2</td>
<td style="text-align: left; background-color: #D6D6EB;">OTMS2 (100%), ITMS2 (91%)</td>
</tr>
<tr>
<td style="text-align: left;"></td>
<td style="text-align: left;">OTMS2 (DE15s) 18933 unique and 32227 total peptide ID's</td>
</tr>
<tr>
<td style="text-align: left;"></td>
<td style="text-align: left;">ITMS2 (DE15s) 17227 unique and 31621 total peptide ID's</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">OTMS2 cycle time 2 sec</td>
<td style="text-align: left; background-color: #D6D6EB;">OTMS2 cycle time 1 s (90.7%), 2 s (100%), 3 s (99.0%)</td>
</tr>
<tr>
<td style="text-align: left;">Fusion vs Lumos vs QEplus (OTMS2)</td>
<td style="text-align: left;">Fusion 15900(89.8%), Lumos 17700 (100%), QE 15760 (89.0%)</td>
</tr>
<tr>
<td style="text-align: left;">Fusion vs Lumos (ITMS2)</td>
<td style="text-align: left;">Fusion 18100 (100%), Lumos 18000 (99.4%)</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;"></td>
<td style="text-align: left; background-color: #D6D6EB;"></td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;"><strong>ITMS2 comparisons</strong></td>
<td style="text-align: left; background-color: #D6D6EB;"></td>
</tr>
<tr>
<td style="text-align: left;">ITMS2 AGC target 2e3</td>
<td style="text-align: left;">ITMS2 AGC target 2e3 (100%), 3e3 (99.1%), 4e3 (98.5%), 5e3 (97.1%), 2e4 (91.0%), 3e4 (85.5%), 4e4 (85.3%)</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">HCD</td>
<td style="text-align: left; background-color: #D6D6EB;">HCD (100%) CID (96.8%)</td>
</tr>
<tr>
<td style="text-align: left;">Dynamic Exclusion DE15 sec</td>
<td style="text-align: left;">unique peptide ID's: ITMS2 DE 15 s (100%), 30 s (97.7%), 60 s (94.6%)<br />
PSM's: ITMS2 DE 15 s (100%), 30 s (76.27%), 60 s (67.1%)</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">ITMS2 cycle time</td>
<td style="text-align: left; background-color: #D6D6EB;">ITMS2 cycle time 1 s (99.9%), 2 s (100%), 3 s (99.9%)</td>
</tr>
<tr>
<td style="text-align: left;">Fusion vs Lumos vs QEplus (OTMS2)</td>
<td style="text-align: left;">Fusion (SW1.2) 15900 (89.8%), Lumos (SW2.0 beta) 17700 (100%), QE (SW2.5) 15760 (89.0%)</td>
</tr>
<tr>
<td style="text-align: left;">Fusion vs Lumos (ITMS2)</td>
<td style="text-align: left;">Fusion (SW1.2) 18100 (100%), Lumos (SW2.0 beta) 18000 (99.4%)</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">5-30 %B in 180 min unique ID's</td>
<td style="text-align: left; background-color: #D6D6EB;">5-30% B in 60 mins (77.8%), 90 mins (88.2%), 120 mins (93.7%), 180 mins 100%)</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">5-30 %B in 180 min PSM's</td>
<td style="text-align: left; background-color: #D6D6EB;">5-30% B in 60 mins (45.3%), 90 mins (62.9%), 120 mins (76.5%), 180 mins (100%)</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;"><strong>Software Version</strong></td>
<td style="text-align: left; background-color: #D6D6EB;"><strong>Fusion 2.1</strong></td>
</tr>
<tr>
<td style="text-align: left;">OTMS2 AGC 5e3</td>
<td style="text-align: left;">OTMS2 AGC 5e3 (100%), 1e4 (96.5%), 5e4 (79.4%)</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">OTMS2 signThreshold 3e4</td>
<td style="text-align: left; background-color: #D6D6EB;">OTMS2 signThreshold 3e4 (100%), 2e4 ( 88.4%)</td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;"><strong>Software Version</strong></td>
<td style="text-align: left; background-color: #D6D6EB;"><strong>Fusion 3.5</strong></td>
</tr>
<tr>
<td style="text-align: left;">APD advanced peak detection</td>
<td style="text-align: left;">unique ID's: ITMS2 APD(77.1%), ITMS2(68.2%), OTMS2 APD(100%), OTMS2(66.1%)</td>
</tr>
<tr>
<td style="text-align: left;"></td>
<td style="text-align: left;">PSM's: ITMS2 APD(84.1%), ITMS2(90%), OTMS2 APD(100%), OTMS2(79.5%)</td>
</tr>
<tr>
<td style="text-align: left;"></td>
<td style="text-align: left;"></td>
</tr>
</tbody>
</table>

## TMT instrument Orbitrap Fusion Lumos settings (Tune3.3) 

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
<th style="text-align: center; background-color: #9999CC;">SPS MS3 120 min TMT 11plex</th>
<th style="text-align: center; background-color: #9999CC;">SPS MS3 120 min TMT 16plex</th>
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
<td style="text-align: center; background-color: #D6D6EB;">50</td>
<td style="text-align: center; background-color: #D6D6EB;">120</td>
<td style="text-align: center; background-color: #D6D6EB;">120</td>
</tr>
<tr>
<td style="text-align: left;">MS2 Isolation window, Th</td>
<td style="text-align: center;">1.2(2)-0.7(3)-0.5(4+)</td>
<td style="text-align: center;">1.2(2)-0.7(3)-0.5(4+)</td>
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
<td style="text-align: center; background-color: #D6D6EB;">240% ( 1.2e5 )</td>
</tr>
<tr>
<td style="text-align: left;">MS3 AGC target</td>
<td style="text-align: center;">200% ( 1e5 )</td>
<td style="text-align: center;">240% ( 1.2e5 )</td>
<td style="text-align: center;"></td>
<td style="text-align: center;"></td>
</tr>
<tr>
<td style="text-align: left; background-color: #D6D6EB;">SPS Isolation window, Th</td>
<td style="text-align: center; background-color: #D6D6EB;">1.3(2)-0.7(3)-0.5(4+)</td>
<td style="text-align: center; background-color: #D6D6EB;">1.3(2)-0.7(3)-0.5(4+)</td>
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
<td style="text-align: center; background-color: #D6D6EB;">120</td>
<td style="text-align: center; background-color: #D6D6EB;">120</td>
<td style="text-align: center; background-color: #D6D6EB;"></td>
<td style="text-align: center; background-color: #D6D6EB;"></td>
</tr>
<tr>
<td style="text-align: left;">SPS settings: # notches, mass range, Tag Exclusion</td>
<td style="text-align: center;">5 - 10 - 10<br />
m/z 110-500, TMT</td>
<td style="text-align: center;">5 - 10 - 10<br />
m/z 110-500, TMT pro</td>
<td style="text-align: center;">m/z 110</td>
<td style="text-align: center;">m/z 110</td>
</tr>
</tbody>
</table>

## Precursor m/z and charge state distribution 

The chart below shows the charge state and precursor m/z distribution for all the peptides identified with a PeptideProphet cutoff 0.9 The average of four LCMS runs with 90 min gradients, two replicates using a HeLa tryptic digest (Pierce, 100 ng on column) and two replicates of a tryptic digest from a Ramos cell whole cell lysate 100ng on column. The combined total number of peptide identifications p\>= 0.9 is 38574; the total number of unique peptide identifications p\>= 0.9 is 19218. ![]({{ site.baseurl }}/instruments/images/fusion_mz_charge.png)  
m/z and charge state distribution

## Hela digest concentration curve 

Different concentrations of Pierce HeLa Protein Digest Standard (50, 100, 200, 500, 800, 1000 ng) were injected and separated with a 5-35% acetonitrile gradient over 90 min. Peptides were identified with our standard DDA method and search tools. ![]({{ site.baseurl }}/instruments/images/lumos_Hela_OTMS2_01.png)

TIC (total ion chromatogram) of the different concentrations overlay, normalized to 1000 ng chromatogram.

![]({{ site.baseurl }}/instruments/images/lumos_Hela_OTMS2_02.png)

![]({{ site.baseurl }}/instruments/images/lumos_Hela_ITMS2_01.png)

TIC (total ion chromatogram) of the different concentrations overlay, normalized to 1000 ng chromatogram.

![]({{ site.baseurl }}/instruments/images/lumos_Hela_ITMS2_02.png)

------------------------------------------------------------------------

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
- [Hela reference data](#hela)

## UWPR documents and pages

- [Instrument control software (.xls)]({{ site.baseurl }}/docs/InstrumentSoftwareVersions.xls)
- [Tips for upgrading to Win10 LTSB 2016 (pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_Win10LTSB2016_upgrade.pdf)
- [Calibrations (.xlsx)]({{ site.baseurl }}/docs/Calibrations.xlsx)
- [LC-MS setup procedure EASYnLC(pdf)]({{ site.baseurl }}/docs/protocols05/UWPR_LC_MS_setup_EASYnLC.pdf)
- [PRM page]({{ site.baseurl }}/protocols05/PRM/)
- [DIA page]({{ site.baseurl }}/protocols05/DIA/)
- [Isotopic Labeling page]({{ site.baseurl }}/protocols03/isotopic_labeling/)
- [MRM/SRM page]({{ site.baseurl }}/protocols05/MRM/)
