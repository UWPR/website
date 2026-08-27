---
title: "In-Gel Digestion"
permalink: /resources/sample-preparation/ingeldigestion/
redirect_from:
  - /methods/protocols03/ingeldigestion/
  - /resources/protocols/ingeldigestion/
layout: single
toc: true
toc_sticky: true
classes: no_sidebar
author_profile: false
---

*In-gel digestion of proteins for LC-MS*

Proteins separated by SDS-PAGE can be digested directly in the excised gel band and the resulting peptides extracted for LC-MS analysis. Use the [In-Gel Tryptic Digestion Kit](https://www.thermofisher.com/order/catalog/product/89871) from Pierce (Thermo Fisher), or follow the protocol below.

## Trypsin In-Gel Digestion

This protocol is for colloidal coomassie stained polyacrylamide gel slices and follows the classic Shevchenko method (see References 1 and 2).

**Downloadable Document**: [Trypsin in-gel digestion of proteins (pdf)]({{ site.baseurl }}/assets/docs/protocols03/UWPR_Protocols_In_Gel_Digest.pdf)

### Materials

All solvents should be HPLC grade. NEVER use pipette tips when transferring acids above 2% in concentration.  
[Avoid Contaminations (pdf)]({{ site.baseurl }}/assets/docs/protocols05/Avoid%20Contaminations.pdf)

1.  Dithiothreitol DTT (Fisher, part # PI-20291); stock solution: 1 M in H₂O
2.  Iodoacetamide IAA (Fisher, part # AC12227-0050); stock solution: 100 mM in H₂O (0.0185 g/mL; always prepare fresh, light sensitive)
3.  Urea (Fisher, part # AC14075-0010)
4.  Water (Fisher, part # W6-4 Optima LC/MS grade)
5.  Ammonium bicarbonate (Fisher, part # A643-500); stock solution: 500 mM in H₂O (NH₄HCO₃ (79.1 g/mol): 3.955 g/100 mL)
6.  Acetonitrile (Fisher, part # A955-4 Optima LC/MS grade)
7.  1 μg/μL trypsin in 0.01% acetic acid (modified, sequencing grade, Promega, part # V5111, 5 x 20 μg)
8.  Gel-loading pipet tips (VWR, part # 53509-015)
9.  Eppendorf LoBind microcentrifuge tubes: protein (Fisher, part # 13-698-794)

### Contamination Precautions

**Avoid keratin contamination.** When handling the gel and gel band(s) use extreme caution to avoid keratin contamination (from your skin and hair). Wear gloves at all times and use clean equipment (wipe all surfaces and tools with methanol/water and if possible use new unused razor blades). Keep the gel at a reasonable distance from your body, and do not talk or sneeze over the gel.

**Avoid contamination from plasticizers.** Use all fresh solvents. Never use any plastic pipettes to transfer solvents from the original bottles; instead pour the solvent into a beaker. Repeated exposure of solvents to plastics will contaminate the stock solvents with plasticizers. Never use plastic pipettes when handling concentrated (>2%) acids; use glass pipettes or Hamilton syringes (rinse the syringe with water after using it for concentrated acids to avoid corrosion of the metal needle). If you don't know whether your stock solvents are already contaminated, buy new solvents and make sure no one contaminates them. Keep your solvents in glass bottles, preferably with Teflon lined lids. Never use bottle lids that have foil backed cardboard liners.

### Method

Use coomassie stained polyacrylamide gels of 1 mm thickness.  
Note: The excised band can be stored in de-ionized water for a few days at 4 °C if necessary. Protein amounts should be in the hundreds of femtomole to 1 pmol range. A band that can be visualized by Coomassie blue stain usually contains sufficient protein for identification.

This method involves reduction and alkylation of cysteine-containing peptides. This is useful for low level protein (below 1 pmol) and typically results in higher sequence coverage of the protein, as it improves the recovery of cysteine containing peptides and minimizes the appearance of unknown masses in MS analysis from disulfide bond formation and side chain modification.  
Note: Alkylation with iodoacetamide increases the mass of a peptide by 57.02 for each cysteine present. Acrylamide modification of cysteine results in a peptide mass increase of 71.04.

For protein bands stained with mass spectrometry-compatible silver stains (e.g. Pierce Silver Stain Kit for Mass Spectrometry, 24600) or reversible zinc staining (Pierce Zinc Reversible Stain Kit, 24582), alternative destaining procedures will be required.

1.  Excise protein spot/band, cut into small pieces (~1 mm³) and dehydrate in acetonitrile for approx. 10 min; repeat this step twice. Remove acetonitrile and SpeedVac until dry. Note: use gel loading pipette tips to remove solvents, and be careful not to lose the gel pieces.
2.  Add 50-100 μL 10 mM DTT in H₂O (or in 25 mM ammonium bicarbonate), just enough to cover the gel pieces; vortex and spin down.
3.  Incubate at 56 °C for 45 min to 1 hr.
4.  Spin down, pull off supernatant, and allow to cool to room temperature.
5.  Alkylate with iodoacetamide (184.96 g/mol: 18.5 mg/mL) 100 mM in 25 mM ammonium bicarbonate (5 to 10 fold excess over DTT); incubate for 30 min in the dark at room temperature.
6.  Spin down, pull off supernatant, wash with H₂O (or 25 mM ammonium bicarbonate) and pull off wash.
7.  Dehydrate in acetonitrile for approx. 10 min. Remove acetonitrile and SpeedVac until dry.
8.  Rehydrate gel pieces at 4 °C for 45 min in buffer containing trypsin and 50 mM ammonium bicarbonate (approx. 5 μL/mm² gel). The gel pieces should just be covered.  
    Suggested amount of trypsin is 12.5 ng/μL of buffer for proteins that have been silver stained.  
    (1 μg/μL trypsin solution = 1 μL/80 μL 50 mM ammonium bicarbonate)  
    Do not use more than 1 μg trypsin per sample for MS analysis.
9.  Cover gel pieces with 50 mM ammonium bicarbonate. Digest overnight at 37 °C (or at least for 3 hrs).
10. Centrifuge gel pieces (4 min) and collect (keep) supernatant. Use gel loading pipette tips to remove solvents, and be careful not to transfer the gel pieces as they could interfere with downstream MS analysis.
11. Further extract peptides by one change of H₂O and three changes of 5% formic acid in 50% acetonitrile; incubate 20 min for each of the changes, centrifuge, then collect at room temperature.
12. Reduce sample volume in SpeedVac to about 5 μL; do not let the sample dry completely. Store at -20 °C.
13. Prior to LC-MS analysis add 0.1-0.2% formic acid in water to about 10-12 μL and inject 4-8 μL.

Do not discard extracted gel pieces: if, for any reason, the digestion failed, it can be repeated with the same gel pieces using the same enzyme (trypsin) or using another enzyme. Note that, in the latter case, strong peptide background may be encountered because of the digestion of residual intact trypsin.

## Additional Resources

- [In-gel digest (pdf)]({{ site.baseurl }}/assets/docs/protocols03/UWPR_Protocols_In_Gel_Digest.pdf): in-gel digestion protocols
- [Thermo In-Gel Tryptic Digestion Kit (89871)](https://www.thermofisher.com/order/catalog/product/89871), with kit instructions available on the product page

### Mass Spec Compatible Stains

| Stain | Vendor | Notes |
|:--|:--|:--|
| [Colloidal Blue Staining (LC6025)](https://www.thermofisher.com/order/catalog/product/LC6025) | Thermo Fisher | |
| [SYPRO Ruby Protein Gel Stain (S12000)](https://www.thermofisher.com/order/catalog/product/S12000) | Thermo Fisher | Noncovalent interaction, generally removed during sample preparation for MS |
| [SYPRO Tangerine Protein Gel Stain (S12010)](https://www.thermofisher.com/order/catalog/product/S12010) | Thermo Fisher | Does not alter protein structure or interfere with MS analysis |
| [Flamingo Fluorescent Protein Gel Stain (1610490)](http://www.bio-rad.com/en-us/sku/1610490-flamingo-fluorescent-protein-gel-stain-20-ml) | Bio-Rad | |
| [SilverQuest Silver Staining (LC6070)](https://www.thermofisher.com/order/catalog/product/LC6070) | Thermo Fisher | |
| [Pierce Silver Stain for Mass Spectrometry (24600)](https://www.thermofisher.com/order/catalog/product/24600) | Thermo Fisher | |
| [ProteoSilver Silver Stain (PROTSIL1-1KT)](https://www.sigmaaldrich.com/US/en/product/sigma/protsil1) | Sigma | |
| [Negative Stain Solutions](http://www.bio-rad.com/en-us/product/negative-stain-solutions) | Bio-Rad | |
| [Pierce Zinc Reversible Stain (24582)](https://www.thermofisher.com/order/catalog/product/24582) | Thermo Fisher | Reversible; requires alternative destaining before digestion |
| [Pro-Q Diamond Phosphoprotein Gel Stain (P33300)](https://www.thermofisher.com/order/catalog/product/P33300) | Thermo Fisher | In-gel detection of phosphate groups on Tyr, Ser, or Thr; MS compatible |
| [Pro-Q Emerald 300 Glycoprotein Gel Stain (P21855)](https://www.thermofisher.com/order/catalog/product/P21855) | Thermo Fisher | Binds only carbohydrate groups at glycosylation sites |
| [InVision His-Tag In-Gel Stain (LC6030)](https://www.thermofisher.com/order/catalog/product/LC6030) | Thermo Fisher | Directly detects His-tagged fusion proteins in the gel |

## References

<div class="references" markdown="1">
1. In-gel digestion for mass spectrometric characterization of proteins and proteomes. Shevchenko A, Tomas H, Havliš J, Olsen JV, Mann M. *Nat Protoc* 1, 2856-60 (2006). [link](https://pubmed.ncbi.nlm.nih.gov/17406544/)
2. Mass spectrometric sequencing of proteins from silver-stained polyacrylamide gels. Shevchenko A, Wilm M, Vorm O, Mann M. *Anal Chem* 68, 850-8 (1996). [link](https://pubmed.ncbi.nlm.nih.gov/8779443/)
</div>
