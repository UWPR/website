---
title: "FASP Protocol"
permalink: /methods/protocols03/FASPprotocols/
layout: single
toc: true
toc_sticky: true
classes: no_sidebar
author_profile: false
---

*Filter Aided Spample Preparation*

Use the [Filter Aided Sample Preparation (FASP) Method](https://pubmed.ncbi.nlm.nih.gov/19377485/) from Matthias Mann's lab to generate tryptic peptides from crude lysates for LC-MS analysis. Or use FASP (filter aided sample preparation: digestion and cleanup) kit for [complex proteins samples](https://www.abcam.com/fasp-protein-digestion-kit-ab270519.html) and [formalin fixed tissue](https://www.abcam.com/fasp-protein-digestion-kit-ffpe-ab270543.html) from Abcam (former Expedeon). The FASP Protein Digestion Kit is intended to solubilize whole or fractionated protein samples in SDS, digest the protein with trypsin, and analyze the resulting peptides by mass spectrometry. Those Kits area also compatible with their [Protein Extraction Kit](https://www.abcam.com/protein-extraction-kit-ab270054.html).

The protocols below are similar to the one described by Ostasiewicz, Xielinska, Mann, and Wisniewskii.

**Materials**  
All solvents should be HPLC grade, NEVER use pipette tips when transferring acids \>2% in concentration!  
[Avoid Contaminations (pdf)]({{ site.baseurl }}/docs/protocols05/Avoid%20Contaminations.pdf)

1.  EMD Millipore Amicon Ultra-0.5 Centrifugal Filter Units (FisherScientific UFC501024)
2.  50 mM Ammonium bicarbonate pH 7.8 (Fisher, part \# A643-500) in H~2~O (79.1g/mol): 3.955g/100ml)(pH 7.8) (make fresh)
3.  1% SDS in 50 mM Ammonium bicarbonate (make fresh)
4.  8 M Urea in 50 mM ammonium bicarbonate (0.4805 g/ml) (make fresh)
5.  500 mM Dithiothreitol DTT (Fisher, part \# PI20291) in H~2~O
6.  Or 500 mM TCEP (Fisher, part \# PI77720) in H~2~O
7.  500 mM Iodoacetamide IAA (Fisher, part \# AC12227-0050) in H~2~O (0.0185g/ml; always prepare fresh, light sensitive)
8.  400 ng / μg/μL Trypsin in 0.01% acetic acid (modified, sequencing grade, Promega, part \# V5111, 5 x 20μg/μg)
9.  Water (Fisher, part \# W6-4 optima LCMS grade)
10. Eppendorf LoBind Microcentrifuge Tubes: Protein (Fisher, part \# 13-698-794)

**Avoid contamination from plasticizers**

To avoid contamination from plasticizers, use all fresh solvents. Never use any plastic pipettes to transfer solvents from the original bottles, instead poor the solvent into a beaker. Repeated exposure of solvents to plastics will contaminate the stock solvents with plasticizers. Never use plastic pipettes when handling concentrated (\>2%) acids, use glass pipettes or Hamilton syringes (rinse the syringe with water after using it for concentrated acids to avoid corrosion of the metal needle). If you don't know whether your stock solvents already are contaminated, buy new solvents and make sure no one is contaminating them! Keep your solvents in glass bottles, preferably with Teflon lined lids. Never use bottle lids that have foil backed cardboard liners!

**Method**

1.  Lyse pellet (50 μl HeLa cell pellet (one 15 cm dish)or 25 mg mouse liver or cerebellum) in 150 μl of 1% SDS, 0.1M DTT and 50 mM Ammonium bicarbonate
2.  Heat at 95^o^C for 5 min.
3.  Sonicate (pulse #3 for 20 seconds) to shear the DNA to reduce the viscosity of the sample.
4.  Spin at 16,000 x g for 5 min to clarify the lysate
5.  Determine protein concentration. Note:DTT interferes with BCA protein assay, use reducing agent compatible BCA Protein Assay Kits (ThermoPierce 23250 and 23252) instead or use a lysis buffer w/o DTT
6.  Combine 100 (- 250) μg sample lysis buffer with 200 μl 8M urea, 50 mM ammonium bicarbonate in the filter unit
7.  Vortex and spin at 14000 rcf for 20 minutes
8.  Add 200 μl 8M urea, 50 mM ammonium bicarbonate to filter, vortex and spin at 14000 rcf for 20 minutes  
    Discard flow through
9.  Note if you used a lysis protocols without DDT, you can add 100 μl 5 mM TCEP in 8M urea, 50 mM ammonium bicarbonate  
    Vortex and incubate at room temperature for 20 minutes  
    Then add 3 ul 500mM IAA (15 mM final)
10. Otherwise add 100 μl 15 mM IAA in 8M urea, 50 mM ammonium bicarbonate to filter
11. Vortex and incubate in dark at room temperature for 20 minutes
12. Spin 14000 rcf for 20 minutes
13. Add 100 μl 8M urea, 50 mM ammonium bicarbonate to filter
14. Vortex and spin at 14000 rcf for 20 minutes
15. Repeat 100 μl 8M urea, 50 mM ammonium bicarbonate, vortex and spin again
16. Add 100 μl of 50 mM ammonium bicarbonate
17. Vortex and spin at 14000 rcf for 20 minutes
18. Repeat 100 μl 50 mM ammonium bicarbonate, vortex and spin again
19. Transfer the filter unit to a new collection tube
20. Add 120 μl of 50 mM ammonium bicarbonate and 5 μl of 400 ng/μl trypsin to filter (enzyme to protein ratio 1:50) and vortex
21. Digest 4 - 18 hrs at 37^o^C, covered and shaking gently.
22. Collect filtrate by spinning at 14000 rcf for 20 minutes
23. Add 50 μl water to filter
24. Vortex and spin at 14000 rcf for 20 minutes
25. Speed vacuum to reduce volume
26. Prior to LCMS analysis adjust volume with 0.1% formic acid to a final concentration of 1 μg/μl

**Resources**

1.  [Filter Aided Sample Preparation (FASP) Method](https://pubmed.ncbi.nlm.nih.gov/19377485/) from Matthias Mann's lab
2.  FASP (filter aided sample preparation: digestion and cleanup) protocol for [complex proteins samples and formalin fixed tissue](http://shop.expedeon.com/products/25-Protein-Digestion-for-MS/) from Expedeon.

**References**

1.  Proteome, phosphoproteome, and N-glycoproteome are quantitatively preserved in formalin-fixed paraffin embedded tissue and analyzable by high-resolution mass spectrometry. Ostasiewicz P, Zielinska DF, Mann M, Wisniewski JR. J Proteome Res. 2010 Jul 2; 9(7): 3688-700.
