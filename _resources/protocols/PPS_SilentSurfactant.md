---
title: "PPS Silent Surfactant Protocol"
permalink: /resources/protocols/PPS_SilentSurfactant/
redirect_from:
  - /methods/protocols03/PPS_SilentSurfactant/
layout: single
toc: true
toc_sticky: true
classes: no_sidebar
author_profile: false
---

*In-solution digestion with the PPS Silent Surfactant acid-cleavable detergent*

PPS Silent Surfactant is an acid-cleavable detergent used to extract and solubilize hydrophobic proteins and improve in-solution enzymatic digestion of proteins, designed to have minimal negative impact on mass spectrometry. Simply lowering the pH of the digest buffer cleaves the reagent, allowing LC-MS analysis.

PPS Silent Surfactant is no longer available from Agilent or Abcam (formerly Expedeon), but Creative Proteomics sells a variety of [acid-cleavable surfactants for MS sample preparation](https://mspro.creative-proteomics.com/ms-protein-sample-preparation-list-108.htm).

## PPS Digestion

### Materials

All solvents should be HPLC grade. NEVER use pipette tips when transferring acids above 2% in concentration.  
[Avoid Contaminations (pdf)]({{ site.baseurl }}/assets/docs/protocols05/Avoid%20Contaminations.pdf)

1.  PPS Silent Surfactant (Expedeon, part # 21011, 1 mg vial, or part # 21010, 10 mg vial; Agilent, part # 400500, 1 mg vials, or part # 400501, 10 mg vial)
2.  Ammonium bicarbonate (Fisher, part # A643-500); stock solution: 500 mM in H₂O (NH₄HCO₃ (79.1 g/mol): 3.955 g/100 mL); prepare the 50 mM, pH 7.8, working solution fresh
3.  500 mM dithiothreitol DTT (Fisher, part # PI-20291) in H₂O
4.  500 mM iodoacetamide IAA (Fisher, part # AC12227-0050) in H₂O (0.0925 g/mL; always prepare fresh, light sensitive)
5.  100 mM CaCl₂
6.  500 mM HCl
7.  250 ng/μL trypsin in 0.01% acetic acid (modified, sequencing grade, Promega, part # V5111, 5 x 20 μg)
8.  Water (Fisher, part # W6-4 Optima LC/MS grade)
9.  Eppendorf LoBind microcentrifuge tubes: protein (Fisher, part # 13-698-794)

### Contamination Precautions

**Avoid contamination from plasticizers.** Use all fresh solvents. Never use any plastic pipettes to transfer solvents from the original bottles; instead pour the solvent into a beaker. Repeated exposure of solvents to plastics will contaminate the stock solvents with plasticizers. Never use plastic pipettes when handling concentrated (>2%) acids; use glass pipettes or Hamilton syringes (rinse the syringe with water after using it for concentrated acids to avoid corrosion of the metal needle). If you don't know whether your stock solvents are already contaminated, buy new solvents and make sure no one contaminates them. Keep your solvents in glass bottles, preferably with Teflon lined lids. Never use bottle lids that have foil backed cardboard liners.

### Method

1.  Make 0.2% PPS diluted in 50 mM ammonium bicarbonate, pH 7.8 (1 mg surfactant per 500 μL 50 mM ammonium bicarbonate).
2.  Using low adhesion microcentrifuge tubes, add 100 μL 0.2% PPS per 100 μL protein mixture (1:1); the final concentration of PPS should be 0.1% (w/v). If the protein is in a pellet, add 25-50 μL of 0.1% PPS.
3.  Vortex the sample.
4.  Add DTT to a final concentration of 5 mM.
5.  Incubate the sample at 50 °C for 30 minutes.
6.  Cool the sample to room temperature.
7.  Add IAA to a final concentration of 15 mM.
8.  Place the sample in the dark at room temperature for 30 minutes.
9.  Add CaCl₂ to a final concentration of 1 mM.
10. Add trypsin for a final ratio of 1:50 enzyme:protein. If the total amount of protein is very low, just add 1-2 μg of trypsin.
11. Incubate 4 hrs with shaking at 37 °C.
12. Prior to the mass spectrometry run, add HCl to a final concentration of 250 mM.
13. Allow the cleavage reaction to proceed for one hour at room temperature.
14. Spin the sample and separate the supernatant from the pellet into a fresh Eppendorf tube if necessary (e.g. approximately 16,000 x g for 10 minutes).
15. Proceed with LC-MS analysis of the supernatant.

## References

<div class="references" markdown="1">
1. Comparisons of mass spectrometry compatible surfactants for global analysis of the mammalian brain proteome. Chen EI, McClatchy D, Park SK, Yates JR 3rd. *Anal Chem* 80, 8694-701 (2008). [link](https://pubmed.ncbi.nlm.nih.gov/18937422/)
2. Strategies for shotgun identification of integral membrane proteins by tandem mass spectrometry. Lu B, McClatchy DB, Kim JY, Yates JR 3rd. *Proteomics* 8, 3947-55 (2008). [link](https://pubmed.ncbi.nlm.nih.gov/18780349/)
3. Optimization of mass spectrometry-compatible surfactants for shotgun proteomics. Chen EI, Cociorva D, Norris JL, Yates JR 3rd. *J Proteome Res* 6, 2529-38 (2007). [link](https://pubmed.ncbi.nlm.nih.gov/17530876/)
</div>
