<!--
STAGING: NOT PUBLISHED.
This folder is intentionally absent from _config.yml's `include:` list, so Jekyll
ignores it. Content parked here is waiting for its final home.

Origin: _facility/instruments/VanquishNeo.md (removed 2026-08-26)
Destination: the future Methods & Protocols area under Resources
             (item 3 of the top-menu plan). Move it there and delete this file.
-->

# Vanquish Neo: method/protocol content parked from the instrument page

## Plate configuration {#plateconfiguration}

Sample capacity (standard): 4 racks of 54 vials (≤ 1.5 mL) each  
96-well plates with optional orientation barcoding to ensure the correct position in the autosampler and charger unit when loading and running the analytical sequence. Plates cannot be accepted in the wrong orientation.  
Barcoded 96-well plate, V shaped well, 10-190 µl, 10pk 60180-217B (Fisher 03-255-015)  
Barcoded 96-well plate, V shaped well, 10-190 µl, 100pk 60180-207B (Fisher 03-251-447)  
Barcoded 96-well plate, U shaped well, 10-250 µl, 10pk 60180-216B (Fisher 03-255-014)  
Barcoded 96-well plate, U shaped well, 10-250 µl, 100pk 60180-206B (Fisher 03-255-010)

You can also print/label the well plates yourself. Here are a couple of documents you can check out to start with:

- [VanquishNeo_Barcode_96well_plates (docx)]({{ site.baseurl }}/assets/docs/instruments/VanquishNeo_Barcode_96well_plates.docx)
- [VanquishNeo_Barcode_A_96well_plates for ToughTag labels 1.28 x 0.5 in (e.g. TTLW-2016) (docx)]({{ site.baseurl }}/assets/docs/instruments/VanquishNeo_BarcodeA_96well_ToughTag1.28x0.5in.docx)
- [VanquishNeo_Barcode_Z_96well_plates for ToughTag labels 1.28 x 0.5 in (e.g. TTLW-2016) (docx)]({{ site.baseurl }}/assets/docs/instruments/VanquishNeo_BarcodeZ_96well_ToughTag1.28x0.5in.docx)
- [VanquishNeo_Barcode_A_96well_plates for Avery labels 1.75 x 0.5 in (e.g. Waterproof Rectangle Labels with Sure Feed, .5" x 1.75" 80 White Labels per sheet (36545 or 36547)) (docx)]({{ site.baseurl }}/assets/docs/instruments/VanquishNeo_BarcodeA_96well_Avery0.5x1.75in.docx)
- [VanquishNeo_Barcode_Z_96well_plates for Avery labels 1.75 x 0.5 in (e.g. Waterproof Rectangle Labels with Sure Feed, .5" x 1.75" 80 White Labels per sheet (36545 or 36547)) (docx)]({{ site.baseurl }}/assets/docs/instruments/VanquishNeo_BarcodeZ_96well_Avery0.5x1.75in.docx)

## Consumables

the following document includes part numbers for AS vials, columns trap cartridges etc needed to use the VanquishNeo

- [Consumables needed to setup the VanquishNeo (xlsx)]({{ site.baseurl }}/assets/docs/instruments/LC_MS_Consumables_VanquishNeo.xlsx)

## Instrument Method setup guidelines {#methodsetup}

Detailed guide how to setup the VanquishNeo method [see pdf]({{ site.baseurl }}/assets/docs/instruments/VanquishNeo_MethodSetup.pdf)

Thermo Video: [Simple and Intelligent Method Creation](https://www.thermofisher.com/us/en/home/industrial/chromatography/liquid-chromatography-lc/hplc-uhplc-resources.html?item=Simple%20and%20Intelligent%20Method%20Creation)

**Setup the Gradient**

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
