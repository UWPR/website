---
title: "EASY-nLC™ 1200 System"
permalink: /resources//instruments/EASYnLC/
classes: no_sidebar
layout: single
toc: true
toc_label: "On this page"
toc_sticky: true
author_profile: false
---

*A compact nano-flow UHPLC system*

The EASY-nLC combines simplicity and high-throughput capacity in a nano-flow UHPLC with a pressure rating of 1200 bar, here is a link to Thermo's website if you wish to learn more: [EASY-nLC™ 1200 System](https://www.thermofisher.com/order/catalog/product/LC140)

![]({{ site.baseurl }}/instruments/images/TSQAltis.jpg)

- EASY-nLC 1 (LC-030755 / UW tag 2033411), Installed 10/16/2018  
  MasterKey: d01ZhUfrREe9XOaH
- EASY-nLC 2 (LC-030757 / UW tag 2033412), Installed 10/19/2018  
  MasterKey: M0yI2sgti5yDw6vI
- EASY-nLC 3 (LC-030758 / UW tag 2033413), Installed 10/19/2018  
  MasterKey: zBh7kbe82Wl8IQEU
- EASY-nLC 4 (LC-031111 / UW tag 2033416), Installed 12/15/2020  
  MasterKey: KZSF7nwD2Q30KCl+
- EASY-nLC 5 (LC-031112 / UW tag 2033417), Installed 12/15/2020  
  MasterKey: REEkEDaHVr6P2WiP
- EASY-nLC 6 (LC-031113 / UW tag 2033418), Installed 12/15/2020  
  MasterKey: Eh0p+iwjW5reU6Iz
- EASY-nLC 7 (LC-031114 / UW tag 2033419), Installed 12/15/2020  
  MasterKey: Z8CaplMxt0ImZkfm

## Virtual Display {#virtualdisplay}

The EASY-nLC can be controlled directly via the-built in touchscreen. You can also setup the virtual display on the pc so it can be controlled from the pc, this is particularly useful if you wish to remotely control the system.

**How to restart the virtual display (e.g. after rebooting the PC):**  
[Detailed guide how to restart the virtual display (pdf)]({{ site.baseurl }}/docs/instruments/EASYnLC_reconnect_virtual_display.pdf)

- Open "Instrument Configuration," select the EASYnLC and Configure
- Test Connection and select the plate installed and click ok and done.

  ![]({{ site.baseurl }}/instruments/images/EASYnLC_01.png)

- Open Putty by double clicking on "putty.exe" located on the desktop
- Under Sessions/Saved Sessions select "EASYnLC" and click "Load" and then "Open"
- login as: hplc
- Password: hplchplc
- use the up arrow to reload the last command or type: **x11vnc -q -display :0**  
  after hitting enter you should see this:

  ![]({{ site.baseurl }}/instruments/images/EASYnLC_02a.png)

- If you don't see that type this alternate command (EASY-nLC 7 (LC-031114)): **x11vnc -env FD_XDM=1 -auth guess**

- Open "TightVNC Viewer" located on the desktop
- In the "TightVNC Server" field type: **localhost::5901**
- then hit "connect" to open the virtual display of the EASY-nLC touchscreen

  ![]({{ site.baseurl }}/instruments/images/EASYnLC_03a.png)

  **Initial setup of Putty and the virtual display (e.g. on a new PC):**  
  [Guide how to initially setup the virtual display (pdf)]({{ site.baseurl }}/docs/instruments/EASYnLC_setup_virtual_display.pdf)

## Switch between Trapping and No-trapping mode {#trapping}

Detailed guide how to switch between trapping and no-trapping mode [see pdf]({{ site.baseurl }}/docs/instruments/EASYnLC_SwitchBetweenTrappingAndNoTrap.pdf)

- Looking at the EASY-nLC home page you can see if the system is in trapping or no-trapping mode. It either displays the trap before the analytical column or not.
- To switch the trapping mode, click on the Maintenance/Devices/EAY-nLC \[HPLC\]/Properties
- To select no-trap mode check the box next to "One column setup"
- To select trapping mode, uncheck the next to "One column setup"
- Hit "Apply" and accept the popup confirmation window

  ![]({{ site.baseurl }}/instruments/images/EASYnLC_04.png)

- **Now make sure the plumbing is setup correctly**
- In trap mode put a trap column in front of the analytical column
- In no-trap mode replace the trap column with an empty fused silica

- **Now make sure the sample loading in the method is setup correctly**
- For no-trap mode we recommend loading at lower flowrates e.g. 0.3 µl/min, or set the max pressure instead e.g. 150-200 bar
- the loading volume should be: 2 x sample volume + 2µl
- But always use a minimum of 6 µl (1-2 µl of sample volume)
- e.g. if you load 4 µl of sample: 2 x 4 µl + 2 µl = 10 µl

- For trap mode you can load at higher flowrates e.g. 2.5 µl, or set the max pressure instead e.g. 150-200 bar
- the loading volume should be: 2 x sample volume + 2µl
- But always use a minimum of 6 µl (1-2 µl of sample volume)
- e.g. if you load 4 µl of sample: 2 x 4 µl + 2 µl = 10 µl

## Changing the plate configuration {#plateconfiguration}

Detailed guide how to change the plate configuration [see pdf]({{ site.baseurl }}/docs/instruments/EASYnLC_ChangingPlateConfiguration.pdf)

- Close Xcalibur, methods, qual browser etc.
- You can leave the virtual display and Tune window open
- Open instrument configuration (should be pinned to the start menu)
- Select the EASYnLC and hit configure
- Click on "Test configuration" wait for the "connection OK" turn green
- Under Autosampler Configuration, go to the plate installed and select the plate format you want to use
- Note our systems are only calibrated for 6x8 vials and 96 well plate
- You can click on Edit to see the layout or change the row/number layout if you wish
- Hit "OK" and then "Done" to close the instrument configuration window

  ![]({{ site.baseurl }}/instruments/images/EASYnLC_01.png)

- **Now you have to change the plate on the HPLC itself:**
- On the EASYnLC home screen click on the plate
- Click on Goto Calibration
- Alternatively, you can go to Maintenance/Devices/Cooled Autosampler/Tools
- Select the plate you want to use from the pull-down menu
- Hit "Use" and acknowledge the pop up

  ![]({{ site.baseurl }}/instruments/images/EASYnLC_05.png)

- Now re-open Xcalibur and you should be able to select the sample positions that correspond to your plate
- 6x8: A1-A8, B1-B8, ... F1-F8
- 8x12: A1-A12, B1-B12, .... H1-H12
- Note the vial position for the 6 vials on the right side is 1-V1 through 1-V6

## LogViewer

the following document describes how to use the LogViewer to view the EASYnLC pressure trace.

- [Log Viewer usage(pdf)]({{ site.baseurl }}/docs/instruments/EASYnLC_LogViewer.pdf)

You can download the zip file containing the log viewer.

- [EASY_nLC Log Viewer 2.18 (zip)](https://proteomicsresource.washington.edu/docs/instruments/LogViewer218.zip)

## Consumables

the following document includes part numbers for AS vials, columns trap cartridges etc needed to use the VanquishNeo

- [LC-MS commonly used consumables for EASYnLC (xlsx)]({{ site.baseurl }}/docs/instruments/LC_MS_Consumables_EASYnLC.xlsx)
- [Simple peptide standards for LC-MS (xlsx)]({{ site.baseurl }}/docs/protocols05/AngioNeuroStandard.xlsx)

## HPLC setup {#hplcsetup}

the following document includes guidelines to setup the capillary trap/column on our LC-MS systems, this is intended as a supplement to the hands-on training required to use the UWPR instruments.

- [LC-MS setup procedure EASYnLC(pdf)]({{ site.baseurl }}/docs/instruments/UWPR_LC_MS_setup_EASYnLC.pdf)
- [Simple peptide standards for LC-MS (xlsx)]({{ site.baseurl }}/docs/protocols05/AngioNeuroStandard.xlsx)

## Instrument Method setup guidelines {#methodsetup}

Detailed guide how to setup the EASY-nLC method [see pdf]({{ site.baseurl }}/docs/instruments/EASYnLC_MethodSetup.pdf)

- Note: the injection volume in the Xcalibur sequence overwrites the Sample pickup volume in the method
- You need to make sure the at the Sample loading Volume in the method is sufficient to load the entire sample onto the column
- Always set the Sample loading Volume = 2 x injection volume + 2 µl
- But always use a minimum of 6 µl (1-2 µl of sample volume)
- e.g. if you load 4 µl of sample: 2 x 4 µl + 2 µl = 10 µl
- The basic method provided by UWPR will have a loading volume of 20 µl to allow for 1-8 µl sample injection volumes (set in Xcalibur sequence list)

**Setup the Gradient** 

- Note the buffer composition used on the EASY-nLC:
- Buffer A: 0.1 % Formic Acid in Water (Fisher Water with 0.1% Formic Acid (v/v), Optima™ LC/MS Grade, LS118)
- Buffer B: 0.1 % Formic Acid, 80% Acetonitrile in Water (Fisher Water with 0.1% Formic Acid (v/v), Optima™ LC/MS Grade, LS122500)
- Formula 100% ACN to 80% conversion: % B \[80%ACN\] = 1.25 \* % B \[100%ACN\]

Application Note: [Improving Retention Time Precision and Chromatography of Early Eluting Peptides with Acetonitrile/Water Blends as Solvent B](https://assets.thermofisher.com/TFS-Assets/CMD/Application-Notes/AN-637-LC-EASY-nLC-1200-Peptides-Solvent-B-Blends-AN64627-EN.pdf)

| %B \[100% ACN\] | %B \[80% ACN\] |     | %B \[100% ACN\] | %B \[80% ACN\] |
|:---------------:|:--------------:|:---:|:---------------:|:--------------:|
|        1        |      1.25      |     |       10        |      12.5      |
|        2        |      2.5       |     |       20        |       25       |
|        3        |      3.75      |     |       30        |      37.5      |
|        4        |       5        |     |       40        |       50       |
|        5        |      6.25      |     |       50        |      62.5      |
|        6        |      7.5       |     |       60        |       75       |
|        7        |      8.75      |     |       70        |      87.5      |
|        8        |       10       |     |       80        |      100       |
|        9        |     11.25      |     |       90        |       na       |
|       10        |      12.5      |     |       100       |       na       |

## Solvent filters {#solventfilters}

We noticed air leaks originating from the original solvent filter cartridges. So we decided to replace them with a different setup:  
Guide how to setup alternate EASY-nLC solvent filters [see pdf]({{ site.baseurl }}/docs/instruments/EASYnLC_SolventBottleFilters.pdf)

## Upgrading Software/Firmware on the EASYnLC 1200 {#softwareupgrade}

This document describes how to upgrade software on an EASYnLC from SW 4.1 to SW 4.2: [see pdf]({{ site.baseurl }}/docs/instruments/EASYnLC_SoftwareUpgrade.pdf)  
Note it also describes how to change the password in Putty (in case you don't like the Master Key)

## Troubleshooting

This guide from Thermo describes the maintenance and troubleshooting procedures required to maintain the EASY-nLC™ instrument in optimal working condition. [Thermo Troubleshooting and Maintenance Guide pdf](https://assets.thermofisher.com/TFS-Assets/CMD/manuals/Man-60053-97274-EASY-nLC-1200-Troubleshoot-Man6005397274-EN.pdf)

This document contains tips to manually troubleshoot air leaks in the checkvalve: [Easy nLC 1000 Check Valve Evaluation pdf]({{ site.baseurl }}/docs/instruments/EasynLC_CheckValveEvaluation_07_15_2020_Rev%202.pdf)

Easy nLC 1200 Key Changes over the 1000 Series: [Easy nLC 1200 Key Changes over the 1000 Series pdf]({{ site.baseurl }}/docs/instruments/EasynLC1200_%20KeyChangesOverThe1000series_Rev%202.pdf)

## Convert bar to psi {#bartopsi}

Formula for bar to psi conversion: 1 bar = 14.5038 psi or (bar x 14.5038 = psi) or 0.0689475729 bars in 1 psi.

To convert bar to psi follow this link: [UnitConverters.net: Convert bar to psi](https://www.unitconverters.net/pressure/bar-to-psi.htm)

| Convert Bar to |   Psi   |     | Convert Psi to |  Bar   |
|:--------------:|:-------:|:---:|:--------------:|:------:|
|       1        |  14.5   |     |       10       |  0.7   |
|       10       |  145.0  |     |      100       |  6.9   |
|       50       |  725.2  |     |      500       |  34.5  |
|      100       | 1450.4  |     |      1000      |  68.9  |
|      150       | 2175.6  |     |      1500      | 103.4  |
|      200       | 2900.8  |     |      2000      | 137.9  |
|      250       | 3626.0  |     |      2500      | 172.4  |
|      300       | 4351.1  |     |      3000      | 206.8  |
|      350       | 5076.3  |     |      3500      | 241.3  |
|      400       | 5801.5  |     |      4000      | 275.8  |
|      450       | 6526.7  |     |      4500      | 310.3  |
|      500       | 7251.9  |     |      5000      | 344.7  |
|      550       | 7977.1  |     |      5500      | 379.2  |
|      600       | 8702.3  |     |      6000      | 413.7  |
|      650       | 9427.5  |     |      7000      | 482.6  |
|      700       | 10152.7 |     |      8000      | 551.6  |
|      750       | 10877.9 |     |      9000      | 620.5  |
|      800       | 11603.0 |     |     10000      | 689.5  |
|      850       | 12328.2 |     |     11000      | 758.4  |
|      900       | 13053.4 |     |     12000      | 827.4  |
|      950       | 13778.6 |     |     13000      | 896.3  |
|      1000      | 14503.8 |     |     14000      | 965.3  |
|      1050      | 15229.0 |     |     15000      | 1034.2 |
|      1100      | 15954.2 |     |     16000      | 1103.2 |
|      1150      | 16679.4 |     |     17000      | 1172.1 |
|      1200      | 17404.6 |     |     18000      | 1241.1 |

------------------------------------------------------------------------

## Quick Links

- [Virtual Display](#virtualdisplay)
- [Switch trapping mode](#trapping)
- [Plate Configuration](#plateconfiguration)
- [Log Viewer](#logviewer)
- [Solvent Filters](#solventfilters)
- [Software Upgrade](#softwareupgrade)
- [Troubleshooting](#troubleshooting)
- [Consumables](#consumables)
- [HPLC column setup](#hplcsetup)
- [Method setup](#methodsetup)
- [Gradient](#gradient)
- [Convert Bar to PSI](#bartopsi)

## Guides

- [Restart the virtual display (pdf)]({{ site.baseurl }}/docs/instruments/EASYnLC_reconnect_virtual_display.pdf)
- [Initial setup of the virtual display (pdf)]({{ site.baseurl }}/docs/instruments/EASYnLC_setup_virtual_display.pdf)
- [Switch between trapping and no-trapping mode (pdf)]({{ site.baseurl }}/docs/instruments/EASYnLC_SwitchBetweenTrappingAndNoTrap.pdf)
- [Change the plate configuration (pdf)]({{ site.baseurl }}/docs/instruments/EASYnLC_ChangingPlateConfiguration.pdf)
- [LC-MS column setup EASYnLC (pdf)]({{ site.baseurl }}/docs/instruments/UWPR_LC_MS_setup_EASYnLC.pdf)
- [EASY-nLC method setup (pdf)]({{ site.baseurl }}/docs/instruments/EASYnLC_MethodSetup.pdf)
- [Simple peptide standards for LC-MS (xlsx)]({{ site.baseurl }}/docs/protocols05/AngioNeuroStandard.xlsx)
- [How to use the LogViewer (pdf)]({{ site.baseurl }}/docs/instruments/EASYnLC_LogViewer.pdf)
- [Alternate EASY-nLC solvent filters (pdf)]({{ site.baseurl }}/docs/instruments/EASYnLC_SolventBottleFilters.pdf)
- [EASYnLC_SoftwareUpgrade (pdf)]({{ site.baseurl }}/docs/instruments/EASYnLC_SoftwareUpgrade.pdf)
- [Thermo Guide Working with 80% ACN Solvent B](https://assets.thermofisher.com/TFS-Assets/CMD/Application-Notes/AN-637-LC-EASY-nLC-1200-Peptides-Solvent-B-Blends-AN64627-EN.pdf)
- [Thermo Troubleshooting and Maintenance Guide pdf](https://assets.thermofisher.com/TFS-Assets/CMD/manuals/Man-60053-97274-EASY-nLC-1200-Troubleshoot-Man6005397274-EN.pdf)
