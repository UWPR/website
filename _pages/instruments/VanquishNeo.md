---
title: "Vanquish Neo UHPLC System"
permalink: /instruments/VanquishNeo/
# TODO: define sidebar nav in _data/navigation.yml
# sidebar:
#   nav: "SIDEBAR_NAME"
---

*A compact nano-flow UHPLC system*

The Vanquish Neo UHPLC system delivers maximum performance 24/7 for reproducible nano-, capillary-, and micro-flow LC-MS with a pressure rating of 1500 bar, here is a link to Thermo's website if you wish to learn more: [Vanquish Neo UHPLC System](https://www.thermofisher.com/us/en/home/industrial/chromatography/liquid-chromatography-lc/hplc-uhplc-systems/vanquish-neo-uhplc-system.html)

![]({{ site.baseurl }}/instruments/images/VanquishNeo_01.png)

- Neo 1 (SYS830520 (SN 8346660 and SN 8347102)/ UW tag 2045623), Installed January/2023
- Neo 2 (SYS831576/ UW tag 2045624), Installed 8/7/2024

## System specifications 

[Back to Top](#top)

- **System pressure**
- up to 1500 bar (21,750 psi)

<!-- -->

- **Flow range**
- 1 nL/min -- 100 μL/min, in 1 nL increments
- 100 nL/min -- 100 μL/min, recommended

<!-- -->

- **Injection volume range**
- 0.01--25 μL

<!-- -->

- **Injection volume precision**
- From 0.05 to 0.20 µL: ≤5.0% RSD
- From 0.20 to 0.50 µL: ≤1.5% RSD
- From 0.50 to 2.00 µL: ≤0.5% RSD
- Above 2 µL: ≤0.25% RSD

## Plate configuration 

[Back to Top](#top)
Sample capacity (standard): 4 racks of 54 vials (≤ 1.5 mL) each
96-well plates with optional orientation barcoding to ensure the correct position in the autosampler and charger unit when loading and running the analytical sequence. Plates cannot be accepted in the wrong orientation.
Barcoded 96-well plate, V shaped well, 10-190 µl, 10pk 60180-217B (Fisher 03-255-015)
Barcoded 96-well plate, V shaped well, 10-190 µl, 100pk 60180-207B (Fisher 03-251-447)
Barcoded 96-well plate, U shaped well, 10-250 µl, 10pk 60180-216B (Fisher 03-255-014)
Barcoded 96-well plate, U shaped well, 10-250 µl, 100pk 60180-206B (Fisher 03-255-010)

You can also print/label the well plates yourself. Here are a couple of documents you can check out to start with:

- [VanquishNeo_Barcode_96well_plates (docx)]({{ site.baseurl }}/docs/instruments/VanquishNeo_Barcode_96well_plates.docx)
- [VanquishNeo_Barcode_A_96well_plates for ToughTag labels 1.28 x 0.5 in (e.g. TTLW-2016) (docx)]({{ site.baseurl }}/docs/instruments/VanquishNeo_BarcodeA_96well_ToughTag1.28x0.5in.docx)
- [VanquishNeo_Barcode_Z_96well_plates for ToughTag labels 1.28 x 0.5 in (e.g. TTLW-2016) (docx)]({{ site.baseurl }}/docs/instruments/VanquishNeo_BarcodeZ_96well_ToughTag1.28x0.5in.docx)
- [VanquishNeo_Barcode_A_96well_plates for Avery labels 1.75 x 0.5 in (e.g. Waterproof Rectangle Labels with Sure Feed, .5" x 1.75" 80 White Labels per sheet (36545 or 36547)) (docx)]({{ site.baseurl }}/docs/instruments/VanquishNeo_BarcodeA_96well_Avery0.5x1.75in.docx)
- [VanquishNeo_Barcode_Z_96well_plates for Avery labels 1.75 x 0.5 in (e.g. Waterproof Rectangle Labels with Sure Feed, .5" x 1.75" 80 White Labels per sheet (36545 or 36547)) (docx)]({{ site.baseurl }}/docs/instruments/VanquishNeo_BarcodeZ_96well_Avery0.5x1.75in.docx)

## Consumables

[Back to Top](#top)

the following document includes part numbers for AS vials, columns trap cartridges etc needed to use the VanquishNeo

- [Consumables needed to setup the VanquishNeo (xlsx)]({{ site.baseurl }}/docs/instruments/LC_MS_Consumables_VanquishNeo.xlsx)
- [Simple peptide standards for LC-MS (xlsx)]({{ site.baseurl }}/docs/protocols05/AngioNeuroStandard.xlsx)

## HPLC setup 

[Back to Top](#top)

the following document includes guidelines to setup the capillary trap/column on our LC-MS systems, this is intended as a supplement to the hands-on training required to use the UWPR instruments.

- [LC-MS setup procedure VanquishNeo (pdf)]({{ site.baseurl }}/docs/instruments/UWPR_LC_MS_setup_VanquishNeo.pdf)
- [Simple peptide standards for LC-MS (xlsx)]({{ site.baseurl }}/docs/protocols05/AngioNeuroStandard.xlsx)

## Instrument Method setup guidelines 

[Back to Top](#top)

Detailed guide how to setup the VanquishNeo method [see pdf]({{ site.baseurl }}/docs/instruments/VanquishNeo_MethodSetup.pdf)

Thermo Video: [Simple and Intelligent Method Creation](https://www.thermofisher.com/us/en/home/industrial/chromatography/liquid-chromatography-lc/hplc-uhplc-resources.html?item=Simple%20and%20Intelligent%20Method%20Creation)

**Setup the Gradient** [Back to Top](#top)

- Note the buffer composition used on the VanquishNeo:
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

## Installing SII for xcalibur and VanquishNeo software 

[Back to Top](#top)

- [Installing and configuring VanquishNeo software (pdf)]({{ site.baseurl }}/docs/instruments/VanquishNeo_install_software.pdf)

## Troubleshooting

[Back to Top](#top)

This video from Thermo describes how to Replace the Sample Loop, Needle Unit, and Needle Seat [Vanquish HPLC/UHPLC Maintenance Videos: How to Replace the Sample Loop, Needle Unit, and Needle Seat](https://www.thermofisher.com/us/en/home/industrial/chromatography/liquid-chromatography-lc/hplc-uhplc-resources.html?item=Vanquish%20HPLC%2FUHPLC%20Maintenance%20Videos%3A%20How%20to%20Replace%20the%20Sample%20Loop%2C%20Needle%20Unit%2C%20and%20Needle%20Seat)

This video from Thermo describes how to Replace the Pump Head [Vanquish HPLC/UHPLC Maintenance Videos: How to Replace the Pump Head](https://www.thermofisher.com/us/en/home/industrial/chromatography/liquid-chromatography-lc/hplc-uhplc-resources.html?item=Vanquish%20HPLC%2FUHPLC%20Maintenance%20Videos%3A%20How%20to%20Replace%20the%20Pump%20Head)

This video from Thermo describes how to Replace the Piston Seals and Support Ring [Vanquish HPLC/UHPLC Maintenance Videos: How to Replace the Piston Seals and Support Ring](https://www.thermofisher.com/us/en/home/industrial/chromatography/liquid-chromatography-lc/hplc-uhplc-resources.html?item=Vanquish%20HPLC%2FUHPLC%20Maintenance%20Videos%3A%20How%20to%20Replace%20the%20Piston%20Seals%20and%20Support%20Ring)

This video from Thermo describes how to Replace the Check Valves [Vanquish HPLC/UHPLC Maintenance Videos: How to Replace the Check Valves](https://www.thermofisher.com/us/en/home/industrial/chromatography/liquid-chromatography-lc/hplc-uhplc-resources.html?item=Vanquish%20HPLC%2FUHPLC%20Maintenance%20Videos%3A%20How%20to%20Replace%20the%20Check%20Valves)

TIPS AND TRICKS: ISSUE 1: [How to avoid and recover from autosampler blockages (pdf)](https://www.thermofisher.com/us/en/home/industrial/chromatography/liquid-chromatography-lc/hplc-uhplc-resources.html?item=vanquishneotripsandtricksissue1)

## Convert bar to psi 

[Back to Top](#top)

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

## Quick Links

- [System specifications](#specifications)
- [Plate Configuration](#plateconfiguration)
- [Software Install](#softwareupgrade)
- [Troubleshooting](#troubleshooting)

- [HPLC consumables](#consumables)
- [HPLC column setup](#hplcsetup)
- [Method setup](#methodsetup)
- [Gradient](#gradient)
- [Convert Bar to PSI](#bartopsi)

## Guides

- [LC-MS setup procedure VanquishNeo (pdf)]({{ site.baseurl }}/docs/instruments/UWPR_LC_MS_setup_VanquishNeo.pdf)
- [VanquishNeo method setup (pdf)]({{ site.baseurl }}/docs/instruments/VanquishNeo_MethodSetup.pdf)
- [Thermo Video Method Creation](https://www.thermofisher.com/us/en/home/industrial/chromatography/liquid-chromatography-lc/hplc-uhplc-resources.html?item=Simple%20and%20Intelligent%20Method%20Creation)
- [Simple peptide standards for LC-MS (xlsx)]({{ site.baseurl }}/docs/protocols05/AngioNeuroStandard.xlsx)
- [Barcode 96well plates (docx)]({{ site.baseurl }}/docs/instruments/VanquishNeo_Barcode_96well_plates.docx)
- [Barcode A 96well ToughTag TTLW-2016(docx)]({{ site.baseurl }}/docs/instruments/VanquishNeo_BarcodeA_96well_ToughTag1.28x0.5in.docx)
- [Barcode Z 96well ToughTag TTLW-2016(docx)]({{ site.baseurl }}/docs/instruments/VanquishNeo_BarcodeZ_96well_ToughTag1.28x0.5in.docx)
- [Barcode A 96well Avery 36545 or 36547(docx)]({{ site.baseurl }}/docs/instruments/VanquishNeo_BarcodeA_96well_Avery0.5x1.75in.docx)
- [Barcode Z 96well Avery 36545 or 36547(docx)]({{ site.baseurl }}/docs/instruments/VanquishNeo_BarcodeZ_96well_Avery0.5x1.75in.docx)
- [Video: Replace the Sample Loop, Needle Unit, and Needle Seat](https://www.thermofisher.com/us/en/home/industrial/chromatography/liquid-chromatography-lc/hplc-uhplc-resources.html?item=Vanquish%20HPLC%2FUHPLC%20Maintenance%20Videos%3A%20How%20to%20Replace%20the%20Sample%20Loop%2C%20Needle%20Unit%2C%20and%20Needle%20Seat)
- [Video: Replace the Pump Head](https://www.thermofisher.com/us/en/home/industrial/chromatography/liquid-chromatography-lc/hplc-uhplc-resources.html?item=Vanquish%20HPLC%2FUHPLC%20Maintenance%20Videos%3A%20How%20to%20Replace%20the%20Pump%20Head)
- [Video: Replace the Piston Seals and Support Ring](https://www.thermofisher.com/us/en/home/industrial/chromatography/liquid-chromatography-lc/hplc-uhplc-resources.html?item=Vanquish%20HPLC%2FUHPLC%20Maintenance%20Videos%3A%20How%20to%20Replace%20the%20Piston%20Seals%20and%20Support%20Ring)
- [Video: Replace the Check Valves](https://www.thermofisher.com/us/en/home/industrial/chromatography/liquid-chromatography-lc/hplc-uhplc-resources.html?item=Vanquish%20HPLC%2FUHPLC%20Maintenance%20Videos%3A%20How%20to%20Replace%20the%20Check%20Valves)
