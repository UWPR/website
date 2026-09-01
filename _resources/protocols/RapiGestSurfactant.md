---
title: "RapiGest SF Surfactant Protocol"
permalink: /resources/protocols/RapiGestSurfactant/
redirect_from:
  - /methods/protocols03/RapiGestSurfactant/
layout: single
toc: true
toc_sticky: true
classes: no_sidebar
author_profile: false
---

*In-solution digestion with the RapiGest SF acid-labile surfactant*

Use RapiGest SF surfactant [from Waters](https://www.waters.com/nextgen/us/en/products/standards-and-reagents/rapigest-sf-surfactant.html) to extract and solubilize hydrophobic proteins and improve in-solution enzymatic digestion of proteins.

RapiGest SF is a reagent used to enhance enzymatic digestion of proteins, both in-gel and in-solution. It helps solubilize proteins, making them more susceptible to enzymatic cleavage, without inhibiting enzyme activity. Unlike other commonly used denaturants such as SDS or urea, RapiGest SF does not modify peptides or suppress protease activity. It is compatible with enzymes such as trypsin, Lys-C, Asp-N, Glu-C, and PNGase F.

## RapiGest Digestion

### Materials

All solvents should be HPLC grade. NEVER use pipette tips when transferring acids above 2% in concentration.  
[Avoid Contaminations (pdf)]({{ site.baseurl }}/assets/docs/resources/protocols/Avoid%20Contaminations.pdf)

1.  RapiGest SF powder (Waters, part # 186001860, 5 pack of 1 mg vials)
2.  Ammonium bicarbonate (Fisher, part # A643-500); stock solution: 500 mM in H₂O (NH₄HCO₃ (79.1 g/mol): 3.955 g/100 mL); prepare the 50 mM, pH 7.8, working solution fresh
3.  500 mM dithiothreitol DTT (Fisher, part # PI-20291) in H₂O
4.  500 mM iodoacetamide IAA (Fisher, part # AC12227-0050) in H₂O (0.0925 g/mL; always prepare fresh, light sensitive)
5.  500 mM HCl
6.  250 ng/μL trypsin in 0.01% acetic acid (modified, sequencing grade, Promega, part # V5111, 5 x 20 μg)
7.  Water (Fisher, part # W6-4 Optima LC/MS grade)
8.  Eppendorf LoBind microcentrifuge tubes: protein (Fisher, part # 13-698-794)

### Contamination Precautions

**Avoid contamination from plasticizers.** Use all fresh solvents. Never use any plastic pipettes to transfer solvents from the original bottles; instead pour the solvent into a beaker. Repeated exposure of solvents to plastics will contaminate the stock solvents with plasticizers. Never use plastic pipettes when handling concentrated (>2%) acids; use glass pipettes or Hamilton syringes (rinse the syringe with water after using it for concentrated acids to avoid corrosion of the metal needle). If you don't know whether your stock solvents are already contaminated, buy new solvents and make sure no one contaminates them. Keep your solvents in glass bottles, preferably with Teflon lined lids. Never use bottle lids that have foil backed cardboard liners.

### Method

1.  Make 0.2% RapiGest diluted in 50 mM ammonium bicarbonate, pH 7.8 (1 mg RapiGest per 500 μL 50 mM ammonium bicarbonate).
2.  Using low adhesion microcentrifuge tubes, add 100 μL 0.2% RapiGest per 100 μL protein mixture (1:1); the final concentration of RapiGest should be 0.1% (w/v). If the protein is in a pellet, add 25-50 μL of 0.1% RapiGest.
3.  Vortex the sample.
4.  Add DTT to a final concentration of 5 mM.
5.  Incubate the sample at 50 °C for 30 minutes.
6.  Cool the sample to room temperature.
7.  Add IAA to a final concentration of 15 mM.
8.  Place the sample in the dark at room temperature for 30 minutes.
9.  Add trypsin for a final ratio of 1:50 enzyme:protein. If the total amount of protein is very low, just add 1-2 μg of trypsin.
10. Incubate 4 hrs with shaking at 37 °C.
11. Prior to the mass spectrometry run, add HCl to a final concentration of 200 mM.
12. Allow the cleavage reaction to proceed at 37 °C for 45 minutes. A cloudy pellet should appear.
13. Spin the sample and separate the supernatant from the pellet into a fresh Eppendorf tube (e.g. approximately 16,000 x g for 10 minutes).
14. Spin again if needed to make sure the cloudy material is completely removed.
15. Optionally, add 5% acetonitrile or buffer A (2-5% acetonitrile, 0.1% formic acid in water) to dilute the sample.
16. Proceed with LC-MS analysis of the supernatant.

## Additional Resources

- [RapiGest SF surfactant from Waters](https://www.waters.com/nextgen/us/en/products/standards-and-reagents/rapigest-sf-surfactant.html)

## References

<div class="references" markdown="1">
1. Acid-labile surfactant improves in-sodium dodecyl sulfate polyacrylamide gel protein digestion for matrix-assisted laser desorption/ionization mass spectrometric peptide mapping. Nomura E, et al. *J Mass Spectrom* 39, 202-7 (2004). [link](https://pubmed.ncbi.nlm.nih.gov/14991690/)
2. Enzyme-friendly, mass spectrometry-compatible surfactant for in-solution enzymatic digestion of proteins. Yu YQ, Gilar M, Lee PJ, Bouvier ES, Gebler JC. *Anal Chem* 75, 6023-8 (2003). [link](https://pubmed.ncbi.nlm.nih.gov/14588046/)
3. A complete peptide mapping of membrane proteins: a novel surfactant aiding the enzymatic digestion of bacteriorhodopsin. Yu YQ, et al. *Rapid Commun Mass Spectrom* 18, 711-5 (2004). [link](https://pubmed.ncbi.nlm.nih.gov/15052583/)
4. Acid-labile surfactant assists in-solution digestion of proteins resistant to enzymatic attack. Suder P, et al. *Rapid Commun Mass Spectrom* 18, 822-4 (2004). [link](https://pubmed.ncbi.nlm.nih.gov/15052566/)
5. Fast proteolytic digestion coupled with organelle enrichment for proteomic analysis of rat liver. Arnold RJ, et al. *J Proteome Res* 3, 653-7 (2004). [link](https://pubmed.ncbi.nlm.nih.gov/15253449/)
6. Rapid preparation of released N-glycans for HILIC analysis using a labeling reagent that facilitates sensitive fluorescence and ESI-MS detection. Lauber MA, et al. *Anal Chem* 87, 5401-9 (2015). [link](https://pubmed.ncbi.nlm.nih.gov/25927596/)
</div>
