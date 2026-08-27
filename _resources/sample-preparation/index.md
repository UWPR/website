---
title: "Sample Preparation"
permalink: /resources/sample-preparation/
redirect_from:
  - /methods/protocols02/
  - /methods/protocols01/indexProteinIsoSep/
  - /methods/protocols02/index_proteinSeparation/
classes: no_sidebar
author_profile: false
toc: true
toc_label: "On this page"
toc_sticky: true
---

*Protein extraction, enrichment, and separation for bottom-up proteomics*

Protein extraction is an important step in any proteomics experiment. It usually starts with cell lysis, optionally followed by subcellular fractionation, enrichment of a protein of interest (affinity purification), or removal of interfering substances (immunodepletion).

Many techniques are available for disrupting cells, including physical and detergent-based methods. Historically, physical lysis was the method of choice, but it often requires expensive equipment (French press, homogenizer, cryogrinding). Detergent-based lysis is now more popular because it is simple, inexpensive, and efficient. Note that many detergents interfere with downstream LC-MS analysis; a list of MS-compatible detergents is on our [protein digestion page]({{ site.baseurl }}/resources/sample-preparation/digestion/).

The sections below follow the order of a typical preparation: extract the proteins from your sample, reduce complexity by fractionation or depletion, enrich the proteins of interest, separate, and (if your experiment calls for it) label or crosslink. Protein digestion then follows as the final step, producing the peptides that are analyzed by LC-MS.

*Third-party tutorials and products appear on this page as suggestions only; they do not constitute an endorsement by the UWPR.*

## Overviews and Tutorials {#sampleprep}

General introductions to sample preparation for protein mass spectrometry, from third-party sources:

**Thermo Fisher**: [Protein MS workflow](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/workflow-protein-mass-spectrometry.html) ·
[Sample preparation for MS](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-biology-learning-center/protein-biology-resource-library/pierce-protein-methods/sample-preparation-mass-spectrometry.html) ·
[MS sample preparation handbook](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-biology-learning-center/protein-biology-resource-library/pierce-protein-methods/overview-mass-spectrometry.html) ·
[Protein purification support center](https://www.thermofisher.com/us/en/home/technical-resources/technical-reference-library/protein-purification-isolation-support-center.html) ·
[Physical cell lysis](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-biology-learning-center/protein-biology-resource-library/pierce-protein-methods/traditional-methods-cell-lysis.html) ·
[Detergent-based cell lysis](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-biology-learning-center/protein-biology-resource-library/pierce-protein-methods/detergents-cell-lysis-protein-extraction.html)  
**Broad Institute**: [Proteomics tutorials and workshops](https://www.broadinstitute.org/proteomics/tutorials-and-workshops)

## Protein Extraction: Cultured Cells {#cellculture}

Cultured cells are the most common starting material. Choose the lysis buffer with the downstream steps in mind: harsh detergents extract more protein but must be removed or be MS-compatible before digestion and LC-MS.

**UWPR protocol**: [Cell lysis and subcellular fractionation]({{ site.baseurl }}/resources/sample-preparation/cellfractionation/)

**Third-party guide**: Thermo's [protein extraction for MS](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/sample-prep-mass-spectrometry/protein-extraction-mass-spectrometry.html) overview of total and fraction-specific extraction kits.

| Product | Vendor |
|:--|:--|
| EasyPep MS sample prep kits: [Mini](https://www.thermofisher.com/order/catalog/product/A40006), [Maxi](https://www.thermofisher.com/order/catalog/product/A45734), [96-well](https://www.thermofisher.com/order/catalog/product/A45733) (cell pellet or tissue to MS-ready peptides) | Thermo Fisher |
| [Cell line and primary cell proteomics kits](https://www.preomics.com/sample-types/cell-lines) | PreOmics |

## Protein Extraction: Tissues and Plants {#tissueplants}

Tissue samples need mechanical disruption before or during lysis, and formalin-fixed (FFPE) tissue requires dedicated de-crosslinking protocols. Plant material brings its own challenges (cell walls, phenolics, proteases).

| Product | Vendor |
|:--|:--|
| [EasyPep MS sample prep kit (Mini)](https://www.thermofisher.com/order/catalog/product/A40006), also suited to tissue | Thermo Fisher |
| [Tissue and FFPE proteomics kits](https://www.preomics.com/sample-types/ffpe) | PreOmics |
| [Plant proteomics kits](https://www.preomics.com/sample-types/plants) | PreOmics |
| [FASP protein digestion kit](https://www.abcam.com/en-us/products/sample-preparation-kits/fasp-protein-digestion-kit-ab270519) (filter-aided sample preparation) | Abcam |

## Protein Extraction: Serum, Plasma, and Biofluids {#biofluids}

Biofluids span an enormous dynamic range of protein concentrations, so depletion of the most abundant proteins (see [Immunodepletion](#immunodepletion)) or dedicated enrichment chemistry is usually needed to see beyond the top of the proteome. For a critical comparison of plasma workflows see Reference 1.

**UWPR protocol**: [Plasma and serum protein preparation]({{ site.baseurl }}/resources/sample-preparation/plasma/)

**Third-party guide**: Vivaproducts' [urine protein concentration with concentrators (pdf)](https://www.vivaproducts.com/downloads/urine-protein-concentration-w-concentrators.pdf).

| Product | Vendor |
|:--|:--|
| [Biological fluids proteomics kits](https://www.preomics.com/sample-types/biological-fluids) | PreOmics |
| [ENRICH-iST kit](https://www.preomics.com/products/enrich-ist) for the dynamic-range challenge of plasma and serum | PreOmics |

<div class="references" markdown="1">
**References**

1. Proteomics of human plasma: A critical comparison of analytical workflows in terms of effort, throughput and outcome. Dayon L, Kussmann M. *EuPA Open Proteomics* 1, 8-16 (2013). [link](http://www.sciencedirect.com/science/article/pii/S2212968513000044)
</div>

## Cell Fractionation (Organellar Proteomics) {#cellfractionation}

Fractionating by cellular localization reduces sample complexity and focuses the analysis on the subproteome of an organelle. Take all possible precautions to isolate the desired organelle: contamination from the cytosol or other organelles should be expected, repeated analyses with strong statistical tests are often needed to tell contaminants from true organellar proteins, and another (undesired) organelle can serve as a good negative control.

**UWPR protocol**: [Cell lysis and subcellular fractionation]({{ site.baseurl }}/resources/sample-preparation/cellfractionation/)

| Product | Vendor |
|:--|:--|
| [Subcellular protein fractionation kit for cultured cells](https://www.thermofisher.com/order/catalog/product/78840) | Thermo Fisher |
| [Subcellular protein fractionation kit for tissue](https://www.thermofisher.com/order/catalog/product/87790) | Thermo Fisher |
| [ProteoExtract subcellular proteome extraction kit](https://www.sigmaaldrich.com/US/en/product/mm/539790) | Sigma |

## Immunodepletion {#immunodepletion}

Plasma protein concentrations span at least ten orders of magnitude, from cytokines (pg/mL) to albumin (30-45 mg/mL). Immunodepletion removes the most abundant proteins from plasma or serum before analysis, enabling deeper penetration into the proteome. See also our [plasma and serum preparation page]({{ site.baseurl }}/resources/sample-preparation/plasma/).

| Product | Vendor |
|:--|:--|
| [ENRICH-iST kit](https://www.preomics.com/products/enrich-ist), enriches low-abundance proteins onto paramagnetic beads | PreOmics |
| [Seppro depletion](https://www.sigmaaldrich.com/US/en/product/sigma/sep020) (high-abundance proteins) and [Seppro supermix](https://www.sigmaaldrich.com/US/en/product/sigma/sep050) (medium-abundance) | Sigma |
| [ProteoPrep immunoaffinity albumin and IgG depletion kit](https://www.sigmaaldrich.com/US/en/product/sigma/protia) and [ProteoPrep Blue](https://www.sigmaaldrich.com/US/en/product/sigma/protba) | Sigma |
| [Proteome Purify 12 human serum protein immunodepletion resin](https://www.rndsystems.com/Products/IDR012) | R&D Systems |
| [High Select HSA/immunoglobulin depletion columns](https://www.thermofisher.com/order/catalog/product/A36365) and [High Select Top14 abundant protein depletion columns](https://www.thermofisher.com/order/catalog/product/A36369) | Thermo Fisher |
| [Pierce albumin depletion kit](https://www.thermofisher.com/order/catalog/product/85160) and [Pierce Top 2 abundant protein depletion spin columns](https://www.thermofisher.com/order/catalog/product/85161) | Thermo Fisher |

## Immunoprecipitation (IP) {#immunoprecipitation}

Immunoprecipitation is the most commonly used affinity purification: a specific antibody captures the antigen (and, in co-IP, its interaction partners). For LC-MS work, three practical tips:

- Immobilize the antibody (by covalent crosslinking to the support) to keep antibody contamination out of the final sample
- Avoid detergents as much as possible
- Elute in a buffer compatible with downstream analysis; for LC-MS use a urea buffer (4-6 M, pH 7.5) so reduction, alkylation, and tryptic digestion can follow with minimal cleanup

**Third-party guides**: Thermo's [IP technique overview](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-biology-learning-center/protein-biology-resource-library/pierce-protein-methods/immunoprecipitation-ip.html#4) and [IP kit selection guide](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-assays-analysis/immunoprecipitation.html) · Abcam's [IP protocol](http://www.abcam.com/protocols/immunoprecipitation-protocol-1)

| Product | Vendor |
|:--|:--|
| [Pierce MS-compatible magnetic IP kit (Protein A/G)](https://www.thermofisher.com/order/catalog/product/90409) | Thermo Fisher |
| [Pierce crosslink IP kit](https://www.thermofisher.com/order/catalog/product/26147) and [crosslink magnetic IP kit](https://www.thermofisher.com/order/catalog/product/88805) (antibody covalently immobilized) | Thermo Fisher |
| [Pierce direct IP kit](https://www.thermofisher.com/order/catalog/product/26148) and [direct magnetic IP/co-IP kit](https://www.thermofisher.com/order/catalog/product/88828) (no Protein A/G) | Thermo Fisher |
| [Dynabeads antibody coupling kit](https://www.thermofisher.com/order/catalog/product/14311D) and [co-IP kit](https://www.thermofisher.com/order/catalog/product/14321D) | Thermo Fisher |
| [CLIP protocol with Dynabeads](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-assays-analysis/immunoprecipitation/dynabeads-immunoprecipitation-crosslinking-protocol.html) (UV crosslinking IP) | Thermo Fisher |
| [Immunoprecipitation proteomics kits](https://www.preomics.com/sample-types/immunoprecipitations) | PreOmics |

## Tag-Based Affinity Purification {#tagaffinity}

Affinity tags and tandem affinity purification (TAP) isolate a tagged protein of interest together with its interaction partners, using a resin or an antibody directed at the tag. Biotinylated proteins are enriched on streptavidin or neutravidin beads. Commonly used tags:

| Tag | Epitope / handle |
|:--|:--|
| FLAG | DYKDDDDK |
| c-Myc | EQKLISEEDL |
| Hemagglutinin (HA) | YPYDVPDYA |
| V5 | GKPIPNPLLGLDST |
| GFP, poly-His, GST | protein or peptide domains |

BioID screens for physiologically relevant protein interactions in living cells: a promiscuous biotin ligase is fused to the protein of interest and biotinylates proximal endogenous proteins, which are then enriched and identified (References 1-4).

Enrichment can also target a specific protein characteristic, for example N-glycosylated proteins enriched with hydrazide chemistry (Reference 5).

**Third-party guide**: [TAP-tag and AP-MS protocols from the Gingras lab](https://gingraslab.org/resources/#protocols).

| Product | Vendor |
|:--|:--|
| [Agarose co-IP and pull-down kits](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-assays-analysis/immunoprecipitation/immunoprecipitation-agarose-other-resins/agarose-co-ip-pull-down-kits.html) for tag-based pull-downs | Thermo Fisher |
| Anti-DYKDDDDK (FLAG) [affinity resin](https://www.thermofisher.com/order/catalog/product/A36801) and [magnetic agarose](https://www.thermofisher.com/order/catalog/product/A36797) | Thermo Fisher |
| [FLAG-HA tandem affinity purification kit](https://www.sigmaaldrich.com/US/en/product/sigma/tp0010) and [FLAG IP kit](https://www.sigmaaldrich.com/US/en/product/sigma/flagipt1) | Sigma |
| ChromoTek [DYKDDDDK IP starter pack](https://www.ptglab.com/products/DYKDDDDK-Immunoprecipitation-Starter-Pack-ffap.htm), [iST Myc-Trap](https://www.ptglab.com/products/iST-Myc-Trap-Kit-for-AP-MS-sample-preparation-of-Myc-fusion-proteins-ytak-iST.htm), [iST V5-Trap](https://www.ptglab.com/products/iST-V5-Trap-Kit-v5tak-iST.htm), [iST GFP-Trap](https://www.ptglab.com/products/iST-GFP-Trap-Kit-for-AP-MS-sample-preparation-of-GFP-fusion-proteins-gtak-iST.htm) | Proteintech |
| [T7 tag affinity purification kit](https://www.sigmaaldrich.com/US/en/product/mm/69025m) and [Ni-NTA reagent kit](https://www.sigmaaldrich.com/US/en/product/mm/acr5000nt) (His tag) | Sigma |

<div class="references" markdown="1">
**References**

1. BioID: A Screen for Protein-Protein Interactions. Roux KJ et al. *Curr Protoc Protein Sci* 91, 19.23 (2018). [link](https://pubmed.ncbi.nlm.nih.gov/29516480/)
2. An improved smaller biotin ligase for BioID proximity labeling. Kim DI et al. *Mol Biol Cell* 27, 1188-96 (2016). [link](https://pubmed.ncbi.nlm.nih.gov/26912792/)
3. A promiscuous biotin ligase fusion protein identifies proximal and interacting proteins in mammalian cells. Roux KJ et al. *J Cell Biol* 196, 801-10 (2012). [link](https://pubmed.ncbi.nlm.nih.gov/22412018/)
4. Efficient proximity labeling in living cells and organisms with TurboID. Branon TC et al. *Nat Biotechnol* 38, 108 (2020). [link](https://pubmed.ncbi.nlm.nih.gov/30125270/)
5. Identification and quantification of N-linked glycoproteins using hydrazide chemistry, stable isotope labeling and mass spectrometry. Zhang H, Li XJ, Martin DB, Aebersold R. *Nat Biotechnol* 21, 660-6 (2003). [link](https://pubmed.ncbi.nlm.nih.gov/12754519/)
</div>

## Affinity- and Activity-Based Enrichment {#affinity}

Beyond antibodies and tags, proteins can be enriched by their activity or by a chemical probe, for example kinases captured with an ATP probe, serine hydrolases with an activity-based probe, or newly synthesized proteins by bio-orthogonal amino acid tagging (BONCAT, Reference 1). These methods need careful optimization of bait and sample load, with appropriate positive and negative controls.

**Third-party guide**: Thermo's [protein enrichment and cleanup for MS](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/sample-prep-mass-spectrometry/protein-enrichment-clean-up-mass-spectrometry.html).

| Product | Vendor |
|:--|:--|
| [Kinase enrichment kit with ATP probe](https://www.thermofisher.com/order/catalog/product/88310) | Thermo Fisher |
| [ActivX TAMRA-FP serine hydrolase probe](https://www.thermofisher.com/order/catalog/product/88318) | Thermo Fisher |

<div class="references" markdown="1">
**References**

1. Dopaminergic modulation of the hippocampal neuropil proteome identified by BONCAT. Hodas JJ et al. *Proteomics* 12, 2464-76 (2012). [link](https://pubmed.ncbi.nlm.nih.gov/22744909/)
</div>

## Protein Separation: Gels (SDS-PAGE) {#gel}

SDS-PAGE separates proteins by molecular weight and is the workhorse for estimating relative molecular mass, judging sample purity, and monitoring a fractionation or purification. Two-dimensional (2D) electrophoresis separates proteins first by isoelectric point and then by molecular weight. Bands are visualized with Coomassie Blue or silver stain, and Western blotting detects specific proteins or modifications. To identify proteins by LC-MS, digest them in the gel (or on the membrane) and extract the peptides.

**UWPR protocol**: [In-gel digestion]({{ site.baseurl }}/resources/sample-preparation/ingeldigestion/)

## Protein Separation: Chromatography (HPLC, FPLC) {#hplc}

Column chromatography, HPLC, or FPLC separates proteins by physicochemical properties such as size, charge, and hydrophobicity; size exclusion, cation or anion exchange, and reversed phase (C4) are the common chemistries. Gel-free fractionation by free-flow electrophoresis exists but is uncommon, and commercial support for it has largely disappeared.

## Protein Labeling: Stable Isotopes {#isotopiclabelling}

SILAC (stable isotope labeling by amino acids in cell culture) incorporates isotopically labeled amino acids (typically Lys and Arg) into proteins during cell culture, enabling comprehensive identification and quantification by LC-MS/MS. Chemical labeling strategies instead incorporate stable isotopes at the protein or peptide level, including the isobaric tandem mass tags (TMT) used for multiplexed quantitation.

For background on when to choose which labeling strategy, see the [Knowledgebase]({{ site.baseurl }}/resources/knowledgebase/#quantification) and our [isotopic labeling overview]({{ site.baseurl }}/resources/knowledgebase/isotopic_labeling/).

| Product | Vendor |
|:--|:--|
| [SILAC metabolic labeling systems](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/protein-quantitation-mass-spectrometry/silac-metabolic-labeling-systems.html) and [SILAC reagents and kits](https://www.thermofisher.com/search/browse/category/us/en/90222280) | Thermo Fisher |
| TMT reagents: [overview](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/protein-quantitation-mass-spectrometry/tandem-mass-tag-systems.html) | Thermo Fisher |

## Protein Crosslinking (XL-MS) {#crosslinking}

Crosslinking mass spectrometry captures protein-protein interactions and structural proximity by covalently linking residues before digestion; MS-cleavable crosslinkers simplify the identification of the linked peptides.

| Product | Vendor |
|:--|:--|
| [MS-cleavable DSBU crosslinker](https://www.thermofisher.com/order/catalog/product/A35459) | Thermo Fisher |
| [Click chemistry reagents](https://www.thermofisher.com/us/en/home/life-science/cell-analysis/labeling-chemistry/click-chemistry-labeling-and-detection.html) | Thermo Fisher |
| [Protein crosslinking kits](https://broadpharm.com/product-categories/protein-crosslinking-kit) and [click chemistry reagents](https://broadpharm.com/product-categories/click-chemistry-reagents) | BroadPharm |
| [Crosslinking reagents](http://creativemolecules.com/index.htm) | Creative Molecules |
| [TRICEPS cell-surface crosslinking reagents and services](https://www.dualsystems.com/cell-surface-protein-identification/) (Reference 1) | Dualsystems |

<div class="references" markdown="1">
**References**

1. Ligand-based receptor identification on living cells and tissues using TRICEPS. Frei AP, Moest H, Novy K, Wollscheid B. *Nat Protoc* 8, 1321-36 (2013). [link](https://pubmed.ncbi.nlm.nih.gov/23764939/)
</div>

## Protein Digestion {#digestion}

Bottom-up proteomics analyzes peptides rather than intact proteins, so once the proteins are extracted, enriched, and separated, they are cleaved into peptides by a protease, most commonly trypsin. An effective digestion produces few missed cleavages and few side reactions, and the choice of detergents and buffers upstream determines how much cleanup the digest needs before LC-MS.

**UWPR protocol**: [Protein digestion]({{ site.baseurl }}/resources/sample-preparation/digestion/)
