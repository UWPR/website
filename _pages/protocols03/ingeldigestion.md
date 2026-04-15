---
title: "In-Gel digestion"
permalink: /protocols03/ingeldigestion/
---

*In-Gel digestion protocols*

Use the [In-Gel Tryptic Digestion Kit](https://www.thermofisher.com/order/catalog/product/89871) from Pierce, ThermoFisher or follow the protocol below

Here is a YouTube video preparing protein samples from [SDS-polyacrylamide gels for mass spectrometry](https://youtu.be/hr9kIW0jnXM) provided by the Proteomics core facility of Shared Resources, Fred Hutchinson Cancer Research Center

And here are a couple of YouTube videos showing how to do in-gel digenstion [Part 1](https://youtu.be/4XVhWMLIAS8) and [Part 2](https://youtu.be/dqsfzCxDveM) provided by the University of California, Davis Proteomics Core Facility.

**Trypsin in-gel digestion of proteins** [(pdf)]({{ site.baseurl }}/docs/protocols03/UWPR_Protocols_In_Gel_Digest.pdf) for collodial coomassie stained polyacrylamide gel slices

**Materials**  
All solvents should be HPLC grade, NEVER use pipette tips when transferring acids \>2% in concentration!  
[Avoid Contaminations (pdf)]({{ site.baseurl }}/docs/protocols05/Avoid%20Contaminations.pdf)

1.  Dithiothreitol DTT (Fisher, part \# PI-20291); Stock solution: 1 M in H~2~O
2.  Iodoacetamide IAA (Fisher, part \# AC12227-0050); Stock solution: 100 mM in H~2~O (0.0185g/ml; always prepare fresh, light sensitive)
3.  Urea (Fisher, part \# AC14075-0010 )
4.  Water (Fisher, part \# W6-4 optima LCMS grade)
5.  Ammonium bicarbonate (Fisher, part \# A643-500) Stock solution: 500 mM in H~2~O (NH~4~HCO~3~ (79.1g/mol): 3.955g/100ml)
6.  Acetonitrile (Fisher, part \# A955-4 optima LCMS grade)
7.  1 μg/μL Trypsin in 0.01% acetic acid (modified, sequencing grade, Promega, part \# V5111, 5 x 20μg/μg)
8.  Gel-Loading Pipet Tips (VWR, part \# 53509-015)
9.  Eppendorf LoBind Microcentrifuge Tubes: Protein (Fisher, part \# 13-698-794)

**Avoid Keratin contamination**

When handling the gel and gel band(s) use extreme caution to avoid keratin contamination (from your skin and hair etc.). Wear gloves at all times and use clean equipment (wipe all surfaces and tools with methanol/water and if possible use new unused razor blades). Keep the gel at a reasonable distance from your body, don't talk, sneeze etc over the gel\.....

**Avoid contamination from plasticizers**

To avoid contamination from plasticizers, use all fresh solvents. Never use any plastic pipettes to transfer solvents from the original bottles, instead poor the solvent into a beaker. Repeated exposure of solvents to plastics will contaminate the stock solvents with plasticizers. Never use plastic pipettes when handling concentrated (\>2%) acids, use glass pipettes or Hamilton syringes (rinse the syringe with water after using it for concentrated acids to avoid corrosion of the metal needle). If you don't know whether your stock solvents already are contaminated, buy new solvents and make sure no one is contaminating them! Keep your solvents in glass bottles, preferably with Teflon lined lids. Never use bottle lids that have foil backed cardboard liners!

**Method**

Use coomassie stained polyacrylamide gels of 1mm thickness.  
Note: The excised band can be stored in de-ionized water for a few days at 4^o^C if necessary. Protein amounts should be in the hundreds of femtomole to 1 pmol range. A band that can be visualized by Coomassie blue stain, usually contains sufficient protein for identification.

This method involves reduction and alkylation of cysteine-containing peptides, this is useful for low level protein \<1pmol and typically results in higher sequence coverage of the protein, as it improves the recovery of cysteine containing peptides and minimizes the appearance of unknown masses in MS analysis from disulfide bond formation and side chain modification  
Note: Alkylation with iodoacetamide increases the mass of a peptide by 57.02 for each cystine present. Acrylamide modification of cystine results in a peptide mass increase of 71.04.

For protein bands stained with mass spectrometry-compatible silver stains (e.g. Pierce Silver Stain Kit for Mass Spectrometry (24600)) or reversible zinc staining (Pierce Zinc Reversible Stain Kit (24582)), alternative destaining procedures will be required.

1.  Excise protein spot/band, cut into small pieces (\~1 mm^3^) and dehydrate in acetonitrile for approx. 10 min, repeat this step twice. Remove acetonitrile and SpeedVac until dry. Note use gel loading pipette tips to remove solvents, and be careful not to lose the gel pieces.
2.  Add 50-100 μL 10mM DTT in H~2~O (or in 25mM ammonium bicarbonate) just enough to cover the gel pieces, vortex and spin down
3.  Incubate at 56 ^o^C for 45 min to 1hr.
4.  Spin down, and pull off supernatant, allow to cool to room temperature.
5.  Alkylate with iodoacetamide (184.96g/mol: 18.5mg/ml)) 100mM in 25mM ammonium bicarbonate (5 to 10 fold excess over DTT), incubate for 30min in the dark at room temperature.
6.  Spind down, pull off supernatant, wash with H~2~O (or 25mM ammonium bicarbonate) and pull off wash.
7.  Dehydrate in acetonitrile for approx. 10min. Remove acetonitrile and SpeedVac until dry.
8.  Rehydrate gel pieces at 4 ^o^C for 45 min in buffer containing trypsin and 50 mM ammonium bicarbonate. (Approx. 5 μL/mm2 gel). The gel pieces should just be covered:  
    Suggested amount of trypsin is 12.5 ng/uL of buffer for proteins that have been silver stained.  
    (1μg/μL trypsin solution === 1μL/80μL 50 mM ammonium bicarbonate)  
    Don't use more than 1 μg trypsin per sample for MS analysis.
9.  Cover gel pieces with 50 mM ammonium bicarbonate. Digest overnight at 37 ^o^C (or at least for 3 hrs).
10. Centrifuge gel pieces (4min) and collect (keep) supernatant. Use gel loading pipette tips to remove solvents, and be careful not to transfer the gel pieces as they could interfere with downstream MS analysis.
11. Further extract peptides by one change of H~2~O and three changes of 5% formic acid in 50% acetonitrile incubate 20 min for each of the changes, centrifuge then collect at room temp.
12. Reduce sample volume in speedvac to about 5μL, don't let the sample dry completely. Store at -20 ^o^C
13. Prior to LC-MS analysis add 0.1-0.2% formic acid in water to about 10-12 μL and inject 4-8 μL

Do not discard extracted gel pieces: if, for any reason, the digestion failed, it can be repeated with the same gel pieces using the same enzyme (trypsin) or using another enzyme. Note that, in the latter case, strong peptide background may be encountered because of the digestion of residual intact trypsin.

**Resources**

- [In-gel digest (pdf)]({{ site.baseurl }}/docs/protocols03/UWPR_Protocols_In_Gel_Digest.pdf)  
  In-gel-digestion protocols (if you don't like this one, there are lots of protocols out there on the web)
- [In-gel digest Tech tip (Thermo)](https://tools.thermofisher.com/content/sfs/brochures/TR0050-Stained-gels-for-MS.pdf)  
  Includes a list of compatible staining reagents
- [Thermo: In-Gel Tryptic Digestion Kit (Cat: Nr 89871)](https://www.thermofisher.com/order/catalog/product/89871)
- [Thermo: In-Gel Tryptic Digestion Kit instructions](https://tools.thermofisher.com/content/sfs/manuals/MAN0011497_InGel_Tryptic_Digest_UG.pdf)
- [Nature Protocols: In-gel digestion for mass spectrometric characterization of proteins and proteomes](http://www.nature.com/nprot/journal/v1/n6/full/nprot.2006.468.html)  
  Nature Protocols 1, - 2856 - 2860 (2007) Published online: 25 January 2007 \| doi:10.1038/nprot.2006.468

  **Mass spec compatible stains**
- [Thermo: Colloidal Blue Staining (Cat: Nr LC6025)](http://www.thermofisher.com/order/catalog/product/LC6025)
- [Thermo: SYPRO Ruby Protein Gel Stain (Cat: Nr S12000)](http://www.thermofisher.com/order/catalog/product/S12000)  
  SYPRO Ruby stain involves a noncovalent interaction and will generally be removed during preparation of the sample for mass spectrometry
- [Thermo: SYPRO Tangerine Protein Gel Stain (Cat: Nr S12010)](https://www.thermofisher.com/order/catalog/product/S12010)  
  SYPRO Tangerine stain does not alter protein structure and so does not interfere with analysis by mass spectrometry.
- [BioRad: Flamingo™ Fluorescent Protein Gel Stain (Cat: Nr 1610490)](http://www.bio-rad.com/en-us/sku/1610490-flamingo-fluorescent-protein-gel-stain-20-ml)
- [Thermo: SilverQuest Silver Staining (Cat: Nr LC6070)](http://www.thermofisher.com/order/catalog/product/LC6070)
- [Thermo: Pierce Silver Stain for Mass Spectrometry (Cat: Nr 24600)](https://www.thermofisher.com/order/catalog/product/24600)
- [Sigma: ProteoSilver Silver Stain (Cat: Nr PROTSIL1-1KT)](http://www.sigmaaldrich.com/catalog/product/sigma/protsil1?lang=en&region=US)
- [BioRad: Negative Stain Solutions](http://www.bio-rad.com/en-us/product/negative-stain-solutions)
- [Thermo: Pierce Zinc Reversible Stain (Cat: Nr 24582)](https://www.thermofisher.com/order/catalog/product/24582)
- [Thermo: Pro-Q Diamond Phosphoprotein Gel Stain (Cat: Nr 33300)](https://www.thermofisher.com/order/catalog/product/P33300)  
  Pro-Q Diamond Phosphoprotein Gel Stain allows direct, in-gel detection of phosphate groups attached to tyrosine, serine, or threonine residues and is fully compatible with mass spectrometry.
- [Thermo: Pro-Q Emerald 300 Glycoprotein Gel Stain (Cat: Nr P21855)](https://www.thermofisher.com/order/catalog/product/P21855)  
  Pro-Q Emerald 300 stain only binds to carbohydrate groups at glycosylation sites. After trypsin digestion, the unglycosylated peptides, which are not stained, can be directly identified. The glycosylated peptides are difficult to identify, even under standard conditions. If necessary, they can be deglycosylated for identification by mass spectrometry.
- [Thermo: InVision™ His-Tag In-Gel Stain (Cat: Nr LC6030)](https://www.thermofisher.com/order/catalog/product/LC6030)  
  Directly detect His-tagged fusion proteins in the gel.

**References**

1.  In-gel digestion for mass spectrometric characterization of proteins and proteomes. Andrej Shevchenko, Henrik Tomas, Jan Havlis breve, Jesper V Olsen and Matthias Mann*Nat Protoc.* 2006;1(6):2856-60. [link](http://www.ncbi.nlm.nih.gov/pubmed/17406544)
2.  Mass spectrometric sequencing of proteins silver-stained polyacrylamide gels. Shevchenko A1, Wilm M, Vorm O, Mann M.*Anal Chem.* 1996 Mar 1;68(5):850-8. [link](http://www.ncbi.nlm.nih.gov/pubmed/8779443)
