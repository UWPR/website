---
title: "Plasma and Serum"
permalink: /resources/protocols/plasma/
redirect_from:
  - /methods/protocols02/plasma/
  - /resources/sample-preparation/plasma/
classes: no_sidebar
author_profile: false
toc: true
toc_label: "On this page"
toc_sticky: true
---

*Plasma and serum sample preparation*

## Plasma vs Serum {#plasmavsserum}

Blood from a single donation or sample can be separated into different components: proteins, red blood cells, white blood cells, clotting factors, and so on. Plasma and serum are both obtained from blood by centrifugation.

Plasma is produced when whole blood is collected in tubes treated with an anticoagulant, so the blood does not clot. The cells are removed by centrifugation and the supernatant is designated plasma.

Serum is the liquid fraction of whole blood collected after the blood is allowed to clot. The clot is removed by centrifugation and the resulting supernatant is designated serum.

## Immunodepletion {#immunodepletion}

The wide dynamic range of protein concentrations in serum and plasma is a major challenge for proteome analysis. Plasma protein concentrations span at least ten orders of magnitude, from low-abundance cytokines (pg/mL) to albumin (30-45 mg/mL). Analysis of low-abundance proteins benefits greatly from removing the high-abundance proteins that interfere with their detection. Immunodepletion strategies specifically remove the most abundant proteins from plasma or serum, enabling deeper penetration into the plasma proteome. Some examples:

| Product | Vendor |
|:--|:--|
| [ENRICH-iST kit](https://www.preomics.com/products/enrich-ist), enriches low-abundance proteins onto paramagnetic beads | PreOmics |
| [Seppro depletion](https://www.sigmaaldrich.com/US/en/product/sigma/sep020) (high-abundance proteins) and [Seppro supermix](https://www.sigmaaldrich.com/US/en/product/sigma/sep050) (medium-abundance) | Sigma |
| [ProteoPrep immunoaffinity albumin and IgG depletion kit](https://www.sigmaaldrich.com/US/en/product/sigma/protia) and [ProteoPrep Blue](https://www.sigmaaldrich.com/US/en/product/sigma/protba) | Sigma |
| [Proteome Purify 12 human serum protein immunodepletion resin](https://www.rndsystems.com/Products/IDR012) | R&D Systems |
| [High Select HSA/immunoglobulin depletion columns](https://www.thermofisher.com/order/catalog/product/A36365) and [High Select Top14 abundant protein depletion columns](https://www.thermofisher.com/order/catalog/product/A36369) | Thermo Fisher |
| [Pierce albumin depletion kit](https://www.thermofisher.com/order/catalog/product/85160) and [Pierce Top 2 abundant protein depletion spin columns](https://www.thermofisher.com/order/catalog/product/85161) | Thermo Fisher |

![]({{ site.baseurl }}/assets/images/plasma01.png)

Figure adapted from Reference 2.

## Immunodepletion of High Abundance Serum Proteins

Adapted from Chapter 12, "Employing TMT Quantification in a Shotgun-MS Platform" by Darragh P. O'Brien and John F. Timms, in *Shotgun Proteomics: Methods and Protocols* (see Reference 1). [Chapter link](https://link.springer.com/protocol/10.1007/978-1-4939-0685-7_12).

### Materials

1.  Bradford microtiter plate assay (Pierce) and plate reader.
2.  Bovine serum albumin (BSA) standards.
3.  Proteome Purify 12 Immunodepletion Resin (R&D Systems). A 50 % slurry of a proprietary absorption gel in Phosphate Buffered Saline (PBS) with 0.02 % sodium azide (pH 7.4).
4.  Spin-X Filter Units (Corning Costar). Centrifuge tube filters with a 0.22 μm pore cellulose acetate membrane.
5.  5,000 Da MWCO filters (Sigma).
6.  Rotary shaker or mixer.
7.  Vortex.
8.  Centrifuge.

### Method

1.  Determine protein concentration using the Bradford microtiter plate assay. Make a 5 mg/mL stock of BSA in HPLC grade water and prepare serial dilutions of 0, 0.25, 0.5, 1.0, 2.5, and 5.0 mg/mL to make a standard curve. Use a 96-well flat bottomed assay plate and make triplicate measurements for the BSA standards and four replicates for the experimental samples. For this, add 2 μL of sample per well and 200 μL of assay reagent and mix without introducing bubbles. Use a plate reader at a wavelength of 595 nm and calculate protein concentrations using the standard curve (It is recommended that at least three replicate assays are performed for each sample for accurate protein determination).
2.  For each sample group, add 30 μL of serum to a test tube.
3.  Add 3.0 mL of the suspended Immunodepletion Resin to each serum sample (It is essential that the Immunodepletion Resin be a homogeneous suspension prior to pipetting).
4.  Incubate on a rotary shaker with end-over-end mixing for 30 min. The mixing speed should be adequate to keep the Immunodepletion Resin in suspension.
5.  After the incubation period, pipette equal volumes of the Immunodepletion Resin slurry into the upper chamber of six Spin-X Filter Units.
6.  Centrifuge for 2 min at 2,000 x g and collect immunodepleted serum in a microcentrifuge tube. The combined volume of the depleted serum filtrates will be approximately 1,000-1,500 μL.
7.  Dispose of the used Immunodepletion Resin (The Spin-X Filter Units may be cleaned with deionized water followed by 20 % ethanol and saved for reuse).
8.  Aliquot equal volumes of each immunodepleted serum sample into 3 x 5 kDa MWCO filtration devices. Concentrate each by centrifugation at 13,000 x g for 20 min.
9.  Combine concentrated triplicate samples of the same sample group. The volume of the combined filtrates should be approximately 150 μL.
10. Determine protein concentration of each immunodepleted serum sample using the Bradford microtiter plate assay, as described in step 1 above (Depletion of the serum or plasma will result in the removal of greater than 90 % of the twelve most abundant proteins. If higher levels of depletion are required, the sample should be concentrated (5,000 Da MWCO spin concentrator) and depleted a second time. The depleted sample will be in a buffer of PBS with 0.02 % sodium azide. Spin concentrators are recommended if desalting is required).

## Lectin Affinity Chromatography {#lectin}

Adapted from the same source: Chapter 12, O'Brien and Timms, *Shotgun Proteomics: Methods and Protocols* (see Reference 1). [Chapter link](https://link.springer.com/protocol/10.1007/978-1-4939-0685-7_12).

The most common application of lectin affinity chromatography is to separate glycoproteins from non-glycosylated proteins, or one glycoform from another glycoform.

### Materials

1.  Concanavalin A (ConA) lectin resin (Thermo Fisher Scientific); 1.1 mL of settled resin supplied as a 50 % slurry.
2.  Wheat Germ Agglutinin (WGA) lectin resin (Thermo Fisher Scientific); 1.1 mL of settled resin supplied as a 50 % slurry.
3.  Jacalin lectin resin (Vector Laboratories); 2.0 mL of settled resin supplied as a 50 % slurry.
4.  Glycoprotein Isolation Kit Binding/Wash Buffer (Thermo Fisher Scientific). A total volume of 6.5 mL of a 5x stock solution.
5.  Elution Buffer; 2 % formic acid in HPLC grade water.
6.  Column Accessory Pack (Thermo Fisher Scientific). Spin columns (10x) with bottom caps and collection tubes (20x).
7.  Rotary shaker or mixer.
8.  Vortex.
9.  Centrifuge.

### Method

1.  Equilibrate all buffers to room temperature.
2.  Dilute immunodepleted serum samples 4:1 with 5x Binding/Wash Buffer stock solution. The total volume after dilution must not exceed 800 μL.
3.  From the 5x stock solution, prepare 1x Binding/Wash Buffer with HPLC grade water.
4.  Gently swirl the bottle of ConA lectin resin to obtain a homogeneous suspension. Use a wide-bore or cut pipette tip to transfer 100 μL of 50 % resin slurry to a 1 mL Eppendorf tube.
5.  Repeat step 4 for WGA and Jacalin lectin resins, adding all three resins to the same Eppendorf tube. Gently vortex the multi-lectin resin mixture to obtain a homogeneous suspension.
6.  Insert a column into a collection tube. Pipette 200 μL of the multi-lectin resin solution into this.
7.  Centrifuge for 1 min at 1,000 x g and discard the storage buffer. Reuse the collection tube through to step 18.
8.  Place column in collection tube. Wash the multi-lectin resin solution with 200 μL of the 1x Binding/Wash Buffer by centrifugation for 1 min at 1,000 x g. Discard the flow-through. Repeat this step two times.
9.  Place bottom cap on column and add immunodepleted serum sample to the resin. Close the top cap.
10. Incubate for 10 min at room temperature with end-over-end mixing.
11. Remove top cap and then bottom cap from column. Place column in the collection tube and replace top cap.
12. Centrifuge for 1 min at 1,000 x g. Collect the flow-through containing unbound/non-glycosylated proteins. Store on ice.
13. Reinsert column and add 400 μL 1x Binding/Wash Buffer to the resin. Cap column and centrifuge for 1 min at 1,000 x g. Collect the flow-through and combine with that of step 12. Repeat this step.
14. Place bottom cap on column and add 400 μL 1x Binding/Wash Buffer to the resin. Cap column and incubate for 5 min at room temperature with end-over-end mixing.
15. Remove top cap and then bottom cap from column. Place column in the collection tube, and replace top cap. Centrifuge column for 1 min at 1,000 x g. Discard the flow-through.
16. Repeat steps 14 and 15.
17. Replace bottom cap on column. Add 200 μL Elution Buffer to resin and cap column. Incubate column for 5 min at room temperature with end-over-end mixing.
18. Remove top cap and then bottom cap from column. Place column in a new collection tube. Replace top cap and centrifuge column for 1 min at 1,000 x g.
19. Carefully set aside the collection tube and remove top cap.
20. Repeat steps 17-19. Collect eluate in the same collection tube containing eluate from the first elution. Store eluted glycoprotein fraction on ice for immediate use or freeze for later analysis.
21. Determine protein concentration of both glycoprotein and non-glycoprotein fractions using the Bradford microtiter plate assay, step 1 above.

## Trypsin Digestion and TMT Labeling {#trypsin}

Adapted from the same source: Chapter 12, O'Brien and Timms, *Shotgun Proteomics: Methods and Protocols* (see Reference 1). [Chapter link](https://link.springer.com/protocol/10.1007/978-1-4939-0685-7_12).

Isobaric labeling with stable isotopes is one of the preferred quantification strategies; with TMT multiplexing, many samples can be analyzed in a single run, saving instrument time. Reagents and protocol are provided in the TMTsixplex Isobaric Mass Tagging Kit. Carry out all steps from this point forward using low retention Eppendorf tubes.

### Materials

1.  Low retention Eppendorf tubes.
2.  Dissolution buffer: 100 mM triethyl ammonium bicarbonate (TEAB) (pH 8.0), 0.5 % (w/v) SDS. Aliquot and store at -20 °C.
3.  Reducing solution: 200 mM tris(2-carboxyethyl) phosphine in 200 mM triethyl ammonium bicarbonate (pH 8.0). Prepare fresh.
4.  Alkylation solution: 375 mM iodoacetamide in 100 mM TEAB (pH 8.0). Prepare fresh.
5.  Trypsin solution: 500 ng/μL sequencing-grade modified trypsin (Promega) in 5 mM acetic acid. Store at -20 °C.
6.  SpeedVac.
7.  Acetonitrile (ACN): 100 % HPLC grade.
8.  TMTsixplex Isobaric Mass Tagging Kit (Thermo Fisher Scientific).
9.  Quenching solution: 5 % hydroxylamine in 200 mM TEAB (pH 8.0).

### Method

1.  Dry down 100 μg of protein from each of the fractions in a SpeedVac and resuspend the protein pellets in 100 μL of dissolution buffer (100 mM TEAB) (pH 8.0), 0.5 % (w/v) SDS.
2.  Add 5 μL of reducing solution (9.5 mM final concentration of tris(2-carboxyethyl) phosphine) and incubate for 1 h at 55 °C.
3.  Add 5 μL of freshly prepared alkylation solution (17 mM final concentration of iodoacetamide) and incubate for 30 min at room temperature in the dark.
4.  Add 5 μL of trypsin solution (2.5 μg/100 μg protein) and incubate overnight at 37 °C.
5.  Reconstitute a tube of each TMT label in 41 μL of 100 % ACN and carefully add to the appropriate sample tube.
6.  Allow labeling reactions to proceed for 1 h at room temperature.
7.  Quench reactions by adding 8 μL of quenching solution and incubate for 15 min at room temperature.
8.  Combine samples at equal amounts and dry down in a SpeedVac.

Either proceed to a C18 cleanup step to remove excess TMT and SDS, or continue with a peptide separation protocol such as SCX or high pH reversed phase chromatography, which separates the peptides in addition to the cleanup.

## Plasma Peptidome {#peptidome}

The low-molecular-weight fraction of plasma (the peptidome) can be enriched by ultrafiltration with molecular weight cutoff filters, such as Amicon Ultra centrifugal filters.

- Characterization of the Low-Molecular-Weight Human Plasma Peptidome. Greening DW, Simpson RJ. [Chapter link](https://link.springer.com/protocol/10.1007/978-1-4939-7057-5_6)

## References

<div class="references" markdown="1">
1. Employing TMT Quantification in a Shotgun-MS Platform. O'Brien DP, Timms JF. Chapter 12 in: Shotgun Proteomics: Methods and Protocols, Martins-de-Souza D (ed). *Methods in Molecular Biology* 1156, 187-99, Humana Press (2014). [chapter](https://link.springer.com/protocol/10.1007/978-1-4939-0685-7_12) · [PubMed](https://pubmed.ncbi.nlm.nih.gov/24791989/)
2. Proteomics of human plasma: A critical comparison of analytical workflows in terms of effort, throughput and outcome. Dayon L, Kussmann M. *EuPA Open Proteomics* 1, 8-16 (2013). [link](http://www.sciencedirect.com/science/article/pii/S2212968513000044)
</div>
