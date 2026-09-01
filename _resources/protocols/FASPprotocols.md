---
title: "FASP Protocol"
permalink: /resources/protocols/FASPprotocols/
redirect_from:
  - /methods/protocols03/FASPprotocols/
layout: single
toc: true
toc_sticky: true
classes: no_sidebar
author_profile: false
---

*Filter Aided Sample Preparation*

Use the filter aided sample preparation (FASP) method from Matthias Mann's lab (see Reference 1) to generate tryptic peptides from crude lysates for LC-MS analysis. Alternatively, use the FASP digestion and cleanup kits from Abcam (formerly Expedeon) for [complex protein samples](https://www.abcam.com/fasp-protein-digestion-kit-ab270519.html) and [formalin fixed tissue](https://www.abcam.com/fasp-protein-digestion-kit-ffpe-ab270543.html). The FASP Protein Digestion Kit is intended to solubilize whole or fractionated protein samples in SDS, digest the protein with trypsin, and analyze the resulting peptides by mass spectrometry. The kits are also compatible with the Abcam [Protein Extraction Kit](https://www.abcam.com/protein-extraction-kit-ab270054.html).

## FASP Digestion

The protocol below is similar to the one described by Ostasiewicz, Zielinska, Mann, and Wiśniewski (see Reference 2).

### Materials

All solvents should be HPLC grade. NEVER use pipette tips when transferring acids above 2% in concentration.  
[Avoid Contaminations (pdf)]({{ site.baseurl }}/assets/docs/protocols05/Avoid%20Contaminations.pdf)

1.  EMD Millipore Amicon Ultra-0.5 centrifugal filter units (Fisher, part # UFC501024)
2.  Ammonium bicarbonate (Fisher, part # A643-500); stock solution: 500 mM in H₂O (NH₄HCO₃ (79.1 g/mol): 3.955 g/100 mL); prepare the 50 mM, pH 7.8, working solution fresh
3.  1% SDS in 50 mM ammonium bicarbonate (make fresh)
4.  8 M urea in 50 mM ammonium bicarbonate (0.4805 g/mL) (make fresh)
5.  500 mM dithiothreitol DTT (Fisher, part # PI-20291) in H₂O, or 500 mM TCEP (Fisher, part # PI-77720) in H₂O
6.  500 mM iodoacetamide IAA (Fisher, part # AC12227-0050) in H₂O (0.0925 g/mL; always prepare fresh, light sensitive)
7.  400 ng/μL trypsin in 0.01% acetic acid (modified, sequencing grade, Promega, part # V5111, 5 x 20 μg)
8.  Water (Fisher, part # W6-4 Optima LC/MS grade)
9.  Eppendorf LoBind microcentrifuge tubes: protein (Fisher, part # 13-698-794)

### Contamination Precautions

**Avoid contamination from plasticizers.** Use all fresh solvents. Never use any plastic pipettes to transfer solvents from the original bottles; instead pour the solvent into a beaker. Repeated exposure of solvents to plastics will contaminate the stock solvents with plasticizers. Never use plastic pipettes when handling concentrated (>2%) acids; use glass pipettes or Hamilton syringes (rinse the syringe with water after using it for concentrated acids to avoid corrosion of the metal needle). If you don't know whether your stock solvents are already contaminated, buy new solvents and make sure no one contaminates them. Keep your solvents in glass bottles, preferably with Teflon lined lids. Never use bottle lids that have foil backed cardboard liners.

### Method

1.  Lyse the pellet (50 μL HeLa cell pellet (one 15 cm dish) or 25 mg mouse liver or cerebellum) in 150 μL of 1% SDS, 0.1 M DTT, 50 mM ammonium bicarbonate.
2.  Heat at 95 °C for 5 min.
3.  Sonicate (pulse #3 for 20 seconds) to shear the DNA and reduce the viscosity of the sample.
4.  Spin at 16,000 x g for 5 min to clarify the lysate.
5.  Determine the protein concentration. Note: DTT interferes with the BCA protein assay; use a reducing agent compatible BCA protein assay kit (Thermo Pierce 23250 or 23252) instead, or use a lysis buffer without DTT.
6.  Combine 100-250 μg of sample in lysis buffer with 200 μL 8 M urea, 50 mM ammonium bicarbonate in the filter unit.
7.  Vortex and spin at 14,000 rcf for 20 minutes.
8.  Add 200 μL 8 M urea, 50 mM ammonium bicarbonate to the filter, vortex, and spin at 14,000 rcf for 20 minutes. Discard the flow through.
9.  If you used a lysis protocol without DTT, add 100 μL 5 mM TCEP in 8 M urea, 50 mM ammonium bicarbonate, vortex, and incubate at room temperature for 20 minutes; then add 3 μL 500 mM IAA (15 mM final). Otherwise, add 100 μL 15 mM IAA in 8 M urea, 50 mM ammonium bicarbonate to the filter.
10. Vortex and incubate in the dark at room temperature for 20 minutes.
11. Spin at 14,000 rcf for 20 minutes.
12. Add 100 μL 8 M urea, 50 mM ammonium bicarbonate to the filter.
13. Vortex and spin at 14,000 rcf for 20 minutes.
14. Repeat with 100 μL 8 M urea, 50 mM ammonium bicarbonate; vortex and spin again.
15. Add 100 μL of 50 mM ammonium bicarbonate.
16. Vortex and spin at 14,000 rcf for 20 minutes.
17. Repeat with 100 μL 50 mM ammonium bicarbonate; vortex and spin again.
18. Transfer the filter unit to a new collection tube.
19. Add 120 μL of 50 mM ammonium bicarbonate and 5 μL of 400 ng/μL trypsin to the filter (enzyme to protein ratio 1:50) and vortex.
20. Digest 4-18 hrs at 37 °C, covered and shaking gently.
21. Collect the filtrate by spinning at 14,000 rcf for 20 minutes.
22. Add 50 μL water to the filter.
23. Vortex and spin at 14,000 rcf for 20 minutes.
24. SpeedVac to reduce the volume.
25. Prior to LC-MS analysis, adjust the volume with 0.1% formic acid to a final concentration of 1 μg/μL.

## Additional Resources

- [Filter aided sample preparation (FASP) method](https://pubmed.ncbi.nlm.nih.gov/19377485/) from Matthias Mann's lab

## References

<div class="references" markdown="1">
1. Universal sample preparation method for proteome analysis. Wiśniewski JR, Zougman A, Nagaraj N, Mann M. *Nat Methods* 6, 359-62 (2009). [link](https://pubmed.ncbi.nlm.nih.gov/19377485/)
2. Proteome, phosphoproteome, and N-glycoproteome are quantitatively preserved in formalin-fixed paraffin-embedded tissue and analyzable by high-resolution mass spectrometry. Ostasiewicz P, Zielinska DF, Mann M, Wiśniewski JR. *J Proteome Res* 9, 3688-700 (2010). [link](https://pubmed.ncbi.nlm.nih.gov/20469934/)
</div>
