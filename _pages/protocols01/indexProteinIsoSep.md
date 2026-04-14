---
title: "Protein Preparation and Separation"
permalink: /protocols01/indexProteinIsoSep.php
# TODO: define sidebar nav in _data/navigation.yml
# sidebar:
#   nav: "SIDEBAR_NAME"
---

Protein extraction is an important step in any proteomics experiment. It often starts with cell lysis and cell fractionation, followed by specific enrichment and/or isolation of a particular protein of interest (affinity purification), or removal of interfering or contaminating substances (i.e. immunodepletion).

Many techniques are available for the disruption of cells, including physical and detergent-based methods. Historically, physical lysis has been the method of choice for cell disruption; however, physical methods often require expensive equipment (french prss, homogenizer, cryogrinding).\
Detergent-based lysis is more popular due to ease of use, low cost and efficient protocols. However, many detergents interfere with the downstream LC-MS analysis. A list of MS compatible detergents can be found on our protein digestion page.

## Sample Preparation Overviews {#sampleprep}

Workflow for Protein Mass Spectrometry from Thermo[page](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/workflow-protein-mass-spectrometry.html)\
Protein Sample Preparation for Mass Spectrometry [page](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-biology-learning-center/protein-biology-resource-library/pierce-protein-methods/sample-preparation-mass-spectrometry.html)\
Mass Spectrometry Sample Preparation Handbook [page](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-biology-learning-center/protein-biology-resource-library/pierce-protein-methods/overview-mass-spectrometry.html)\
Protein Purification and Isolation Support Center [page](https://www.thermofisher.com/us/en/home/technical-resources/technical-reference-library/protein-purification-isolation-support-center.html)\
Physical cell lysis [page](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-biology-learning-center/protein-biology-resource-library/pierce-protein-methods/traditional-methods-cell-lysis.html)\
Detergent based cell lysis [page](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-biology-learning-center/protein-biology-resource-library/pierce-protein-methods/detergents-cell-lysis-protein-extraction.html)\
Sigma's Proteomics [page](https://www.sigmaaldrich.com/life-science/proteomics.html)\
Tutorials from the Broad's Proteomics Platform [page](https://www.broadinstitute.org/proteomics/tutorials-and-workshops)

## Cell culture related protocols {#cellculture}

- [Protein Extraction for Mass Spectrometry Page](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/sample-prep-mass-spectrometry/protein-extraction-mass-spectrometry.html) lists different kits for either total protein extraction or isolation of proteins from specific cellular fractions.\
  \
- [EasyPep Mini MS Sample Prep Kit](https://www.thermofisher.com/order/catalog/product/A40006) from Thermo takes you from cell pellet and tissues (10-100ug) to mass spec ready peptides in one simple kit
- [EasyPep Maxi MS Sample Prep Kit](https://www.thermofisher.com/order/catalog/product/A45734) from Thermo takes you from cell pellet and tissues (0.5-2 mg) to mass spec ready peptides in one simple kit
- [EasyPep 96 MS Sample Prep Kit](https://www.thermofisher.com/order/catalog/product/A45733) from Thermo takes you from cell pellet and tissues (10-100ug) to mass spec ready peptides in one simple kit\
  \
- [Cell lines and primary cell Proteomics Kits](https://www.preomics.com/cell-lines) from PreOmics.\
  \
- Protocols for cell lysis and subcellular fractionation [go to page](/protocols01/cellfractionation.php)
- [ProteoExtract Subcellular Proteomie Extraction Kit](https://www.sigmaaldrich.com/US/en/product/mm/539790) from Sigma

## Protein Extraction from Tissues and Plants {#tissueplants}

- [EasyPep Mini MS Sample Prep Kit](https://www.thermofisher.com/order/catalog/product/A40006) from Thermo takes you from cell pellet and tissues to mass spec ready peptides in one simple kit\
  \
- [TissuePrep_and_Cell Fractionation (xlsx)](/docs/protocols01/UWPR_Protocol_TissuePrep_and_CellFractionation.xlsx)\
  Microsomal membrane protein enrichment protocol from tissue.\
  \
- [Tissue and formalin fixed (FFPE) tissue Proteomics Kits](https://www.preomics.com/sample-types/ffpe) from PreOmics.\
  \
- FASP (filter aided sample preparation: digestion and cleanup) protocol for complex proteins samples [FASP Protein Digestion Kit (ab270519)](https://www.abcam.com/fasp-protein-digestion-kit-ab270519.html) and formalin fixed tissue [FASP Protein Digestion Kit (FFPE) (ab270543)](https://www.abcam.com/fasp-protein-digestion-kit-ffpe-ab270543.html) from Abcam.\
  \
- [Plant Proteomics Kits](https://www.preomics.com/plant) from PreOmics.
- [Plant Proteomics](https://www.sigmaaldrich.com/life-science/molecular-biology/plant-biotechnology/plant-proteomics.html) from Sigma.

## Protein preparation from Serum, Plasma and Biofluids {#biofluids}

- The Seppro Depletion Technology from Sigma enables removal of interfering highly abundant proteins from a variety of biological samples, check out our [Immunodepletion](#immunodepletion) section below for links.\
  \
- [Biological fluids Proteomics Kits](https://www.preomics.com/biological-fluids) from PreOmics.\
  \
- Protocols for plasma and serum protein preparation [go to page](/protocols02/plasma.php)\
  \
- Purify/extract proteins from urine samples
- [Urine Protein Concentration with Vivaproducts Concentrators](https://www.vivaproducts.com/downloads/urine-protein-concentration-w-concentrators.pdf) from vivaproducts.
- [Urine Protein Concentration Calculator App](https://www.vivaproducts.com/calculator.html) from vivaproducts.\
  \
- [Urine Protein Extraction (xlsx)](/docs/protocols01/UWPR_Protocol_UrineProteinExtraction.xlsx)\
  Purify/extract proteins from urine samples

## Isotopic labelling strategies {#isotopiclabelling}

- [Protein Quantitation Using Mass Spectrometry](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/protein-quantitation-mass-spectrometry.html) Overview from Thermo
- [Stable Isotope Labeled Products for Biomolecular Mass Spectrometry](https://www.sigmaaldrich.com/chemistry/stable-isotopes-isotec/stable-isotope-products.html?TablePage=11594563) Overview from MilliporeSigma

SILAC (stable isotope labeling using amino acids in cell culture) is a metabolic labelling technique for comprehensive identification, characterization and quantification of proteins by LC-MS/MS. Isotopically labeled amino acids (typically Lys and Arg) are incorporated in to proteins during cell culture.

- [SILAC Quantitation](https://www.thermofisher.com/us/en/home/industrial/mass-spectrometry/proteomics-mass-spectrometry/quantitative-proteomics-mass-spectrometry/silac-quantitation.html) Overview from Thermo
- [SILAC Metabolic Labeling Systems](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/protein-quantitation-mass-spectrometry/silac-metabolic-labeling-systems.html) Reagents and Kits from Thermo
- [SILAC Isotope Labeling Reagents and Kits](https://www.thermofisher.com/search/browse/category/us/en/90222280/silac%20isotope%20labeling%20reagents%20and%20kits?viewtype=listview&resultpage=1%2C1&resultsperpage=15%2C60&resultPage=1&resultsPerPage=60) from Thermo
- [Stable Isotope Products](https://www.sigmaaldrich.com/chemistry/stable-isotopes-isotec.html) from MilliporeSigma
- [Stable Isotope Labeled Products for Metabolic Labeling](https://www.sigmaaldrich.com/chemistry/stable-isotopes-isotec/stable-isotope-products.html?TablePage=12514724) from Sigma
- [Stable Isotope Labeling in Mammals](https://www.sigmaaldrich.com/chemistry/stable-isotopes-isotec/stable-isotope-products.html?TablePage=118943664) from Sigma

There are various chemical labeling strategies for concurrent peptide identification and multiplexed proteomics quantitation by mass spectrometry. Most quantitative proteomics reagents incorporate stable isotopes into the isobaric tag portion of the reagents and are used to label at the protein or peptide level:\

- [ThermoPierce TMT Overview (Tandem Mass Tag) Reagents](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/protein-quantitation-mass-spectrometry/tandem-mass-tag-systems.html)\
  [Amine-reactive, 6-plex Tandem Mass Tag Reagents](https://www.thermofisher.com/order/catalog/product/90061)\
  [Amine-reactive, 10-plex Tandem Mass Tag Reagents](https://www.thermofisher.com/order/catalog/product/90110)\
  [Cysteine-Reactive, 6-plex Tandem Mass Tag Reagents](https://www.thermofisher.com/order/catalog/product/90101)\
  [Carbonyl-reactive, 6-plex aminoxyTMT Reagents](https://www.thermofisher.com/order/catalog/product/90401)\
  \
- [Sigma iTRAQ (Isobaric Tags for Relative and Absolute Quantification)](http://www.sigmaaldrich.com/life-science/molecular-biology/molecular-biology-products.html?TablePage=112006408)\
  Amine-reactive, 8-plex reagents

## Crosslinking strategies {#crosslinking}

- [Protein Interaction Crosslinking for Mass Spectrometry](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/sample-prep-mass-spectrometry/protein-interaction-crosslinking-mass-spectrometry.html) from Thermo
- [Crosslinking Protein Interaction Analysis Overview](http://www.piercenet.com/method/crosslinking-protein-interaction-analysis#overview) from Thermo
- [MS cleavable DSBU (Disuccinimidyl Dibutyric Urea)](https://www.thermofisher.com/order/catalog/product/A35459) from Thermo
- [Crosslinking Mass-tagged crosslinkers](http://www.piercenet.com/cat/mass-tagged-crosslinkers) from Thermo
- [Creative Molecules crosslinking reagents](http://creativemolecules.com/index.htm) from creative Molecules
- [Crosslinking kits](https://broadpharm.com/web/products.php?category1=Protein-Crosslinking-Kit) from BroadPharm
- [Click Chemistry reagents](https://broadpharm.com/web/products.php?category1=click-chemistry-reagents) from BroadPharm
- [Click Chemistry reagents](https://www.thermofisher.com/us/en/home/life-science/cell-analysis/labeling-chemistry/click-chemistry-labeling-and-detection.html) from Thermo
- [Cell surface crosslinking reagents and services](https://www.dualsystems.com/cell-surface-protein-identification/) from Dualsystems \[Nature protocol in Ref 1\]
- [Software (crosslinking) tools from the Bruce lab](https://brucelab.gs.washington.edu/software.html)
- [PROXL Analyze, Visualize, and Share Protein Cross-linking Data from the Davis lab](https://proxl-ms.org/)
- [surfaceome research Wollscheid lab](http://wlab.ethz.ch/wollscheidlab/)

## Protein Separation and Enrichment

The most challenging proteomics studies are those that try to identify and quantify global proteomes. Many experiments require a reduction of protein complexity by separating the proteins.\
One approach is to focus on the subproteome of an organelle using classical subcellular fractionation techniques.\
Alternatively, sample complexity can also be effectively reduced using enrichment techniques like immunoprecipitations or activity- or affinity-based approaches.\
Enrichment can also be directed toward a specific characteristic of proteins for example toward glycoproteins \[Ref 2\], phoshoproteins or newly synthesized proteins \[Ref 3\].\
Proteins can also be separated by gels (SDS-PAGE), chromatography (FPLC and HPLC) or Gel-Free separations.

## Affinity-activity based protein enrichment {#affinity}

Proteins can be enriched based on a specific interactions. Either the bait or the protein of interest are immobilized to extract the proteins of interest. All those methods have to be carefully optimized in terms of bait and sample load with appropriate positive and negative controls.

- [Protein Enrichment and Clean Up for Mass Spectrometry](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/sample-prep-mass-spectrometry/protein-enrichment-clean-up-mass-spectrometry.html) from Thermo
- [Kinase Enrichment Kit with ATP Probe](https://www.thermofisher.com/order/catalog/product/88310) from Thermo
- [ActivX TAMRA-FP Serine Hydrolase Probe](https://www.thermofisher.com/order/catalog/product/88318)

## Immunoprecipitation protocols {#immunoprecipitation}

Immunoprecipitation (IP) is the most commonly used affinity purification of antigen using a specific antibody. For MS analyses the strategy of immobilizing the antibody by covalently crosslinking it to the beads works very well as it reduces the amount of contaminating antibody.\

- Thermo's Immunoprecipitation Kit Selection Guide [go to page](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-assays-analysis/immunoprecipitation.html)
- [Pierce Crosslink IP Kit](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-assays-analysis/immunoprecipitation.html) adapts the traditional IP method to include reagents and protocol for crosslinking IP antibodies to Protein A/G agarose to enable antigen immunoprecipitation without antibody contamination.
- Protein Enrichment & Clean Up for Mass Spectrometry [go to page](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/sample-prep-mass-spectrometry/protein-enrichment-clean-up-mass-spectrometry.html)
- Cross-linking immunoprecipitation (CLIP) Protocol using Dynabeads to eliminate antibody interference [go to page](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-assays-analysis/immunoprecipitation/dynabeads-immunoprecipitation-crosslinking-protocol.html)\
  \
- [Immunoprecipitation Proteomics Kits](https://www.preomics.com/immunoprecipitation) from PreOmics.\
  \
- Immunoprecipitation protocol from Abcam [go to page](http://www.abcam.com/protocols/immunoprecipitation-protocol-1)\
  \

Tips:\

- To reduce antibody contamination in your final sample consider following a protocol which immobilizes the antibody (via crosslinking)
- Avoid using detergents as much as possible.
- Use an elution buffer compatible with the downstream analysis. For mass spec analysis use Urea buffer (4-6 M, pH 7.5) to be compatible with reduction/alkylation and tryptic digestion, and desalt prior to LC-MS analysis.\
  \
  Note: choose a mass spec compatible elution buffer to allow for in solution digestion and minimal peptide cleanup

## Immunodepletion

The wide dynamic range of protein concentrations present in serum and plasma represents a major challenge for the analysis of the proteome. The range of plasma protein concentrations, from low abundance proteins such as cytokines (pg/mL) to albumin (30-45 mg/mL), represents at least 10 orders of magnitude. Analysis of low abundance proteins by even the most sensitive of methods for proteomics greatly benefits from the removal of high abundance proteins that may interfere with their detection. Plasma Immunodepletion strategies specifically remove the most abundant proteins from human plasma or serum in preparation for further proteomics analysis, enabling deeper penetration into the plasma proteome, here are a couple of examples:

- [The Seppro Depletion Technology](https://www.sigmaaldrich.com/US/en/product/sigma/sep020) from Sigma enables removal of interfering highly abundant proteins from a variety of biological samples
- [The Seppro supermix](https://www.sigmaaldrich.com/US/en/product/sigma/sep050) from Sigma enables removal of interfering medium abundant proteins from a variety of biological samples
- [The ProteoPrep](https://www.sigmaaldrich.com/US/en/product/sigma/protia) Immunoaffinity Albumin and IgG Depletion Kit from Sigma
- [ProteoPrep® Blue Albumin & IgG Depletion Kit](https://www.sigmaaldrich.com/US/en/product/sigma/protba) from Sigma
- [ProteoPrep 20](https://www.sigmaaldrich.com/US/en/product/sigma/prot20s) from Sigma is discontinued but the info is still there
- [Proteome Purify 12 Human Serum Protein Immunodepletion Resin](http://www.rndsystems.com/Products/IDR012) from R&D systems
- [High Select™ HSA/Immunoglobulin Depletion Mini Spin Columns](https://www.thermofisher.com/order/catalog/product/A36365) from ThermoPierce
- [High Select™ Top14 Abundant Protein Depletion Mini Spin Columns](https://www.thermofisher.com/order/catalog/product/A36369) from ThermoPierce
- [Pierce™ Albumin Depletion Kit](https://www.thermofisher.com/order/catalog/product/85160) from ThermoPierce
- Protocols for plasma and serum protein preparation for shotgun proteomics [go to page](https://proteomicsresource.washington.edu/protocols02/plasma.php)

## Tag based affinity protocols {#tagaffinity}

Affinity tag and tandem affinity tag (TAP) allow to isolate specific proteins of interest and proteins associated with them. Commonly used affinity tools are the FLAG-tag, HA tag, or GFP tag used in combination with an antibody towards either of these tags. Proteins tagged with biotin can be enriched using streptavidin or neutravidin beads.\

- Gingras lab protocols [go to page](https://gingraslab.lunenfeld.ca/resources.php?cateName=Protocols)\
  Anne-Claude Gingras is a TAP-tag wizard check out her website for protocols\
  \
- [FLAG HA Tandem Affinity Purification Kit](https://www.sigmaaldrich.com/US/en/product/sigma/tp0010) from Sigma incorporates tandem-linked affinity tags into genes of interest so that high purity fusion proteins can be isolated through two consecutive affinity purification steps
- [FLAG Immunoprecipitation Kit](https://www.sigmaaldrich.com/US/en/product/sigma/flagipt1) from Sigma enables immunoprecipitation of an active FLAG-tagged protein
- [T7 tag Affinity Purificarion Kit](https://www.sigmaaldrich.com/US/en/product/mm/69025m) from Sigma enables immunoaffinity purification of T7 Tag fusion proteins
- [Ni-NTA Reagent Kit](https://www.sigmaaldrich.com/US/en/product/mm/acr5000nt) from Sigma for His-tagged protein purification.
- Modification, one example is glycoprotein isolation enriching specifically N-glycosylated proteins.\
  Here is a collection of protocols that were developed based on initial work done by Hui Zhang (Ass.Prof. Johns Hopkins) and Kelly Vaughn, while they were in Ruedi Aebersolds lab \[Ref 2\].\
  [Glycopeptide Isolation (xlsx)](/docs/protocols02/UWPR_Protocol_Glycopeptide_Isolation.xlsx)

## Cell Fractionation (organellar proteomics) {#cellfractionation}

When fractionating proteins based on their cellular localization all possible precautions should be taken to isolate the desired organelle. Contaminating proteins from other cytosol or other organelles should be expected. Repeated analyses with strong statistical tests are often needed to differentiate contaminating proteins from true organellar proteins. Another (undesired) organelle can serve as a good negative control.

- [ProteoExtract Subcellular Proteomie Extraction Kit](https://www.sigmaaldrich.com/US/en/product/mm/539790) from Sigma
- [Subcellular Protein Fractionation Kit for Cultured Cells](https://www.thermofisher.com/order/catalog/product/78840) from Thermo
- [Subcellular Protein Fractionation Kit for Tissue](https://www.thermofisher.com/order/catalog/product/87790) from Thermo
- [TissuePrep_and_CellFractionation (xlsx)](/docs/protocols01/UWPR_Protocol_TissuePrep_and_CellFractionation.xlsx)\
  Microsomal membrane protein enrichment protocol from tissue samples

## Protein separation 1D and 2D Gel {#gel}

Sodium dodecyl sulfate polyacrylamide gel electrophoresis (SDS-PAGE) is a very common method for separating proteins based on their molecular weight. Protein separation by SDS-PAGE can be used to estimate relative molecular mass, to determine the relative abundance of major proteins in a sample, and to determine the distribution of proteins among fractions. SDS-PAGE can also be used as a tool to assess purity of protein samples and to monitor the progress of a fractionation or purification procedure. Two-dimensional (2D) electrophoresis separated proteins first by their isoelectric point and then by their molecular weight.\
Different staining methods can be used like Coomassie Blue ( range) and Silver stain (range) to visualize the protein bands. Techniques such as Western blotting are used to detect specific proteins or protein modification.\
To identify proteins by LC-MS, proteins can be digested in the gel or on the membrane (western blot) and peptides can be extracted for analysis.

- [In-gel digest page](https://proteomicsresource.washington.edu/protocols03/ingeldigestion.php) for information about in-gel-digestion

## Chromatography HPLC or FPLC {#hplc}

Traditional column chromatography or using an HPLC (High-performance liquid chromatography) or FPLC (Fast protein liquid chromatography) can be used to separate proteins based on their physiochemical properties like size, charge and hydrophobicity; Size exclusion, cation or anion exchange, reversed phase (C4) are some of the commonly used chemistries.\

**Gel-Free (Free-Flow-Electrophoresis**\
less common and a bit tricky.. BD recently made the decision to exit the Free Flow Electrophoresis (FFE) business, but Expedeon is still offering a [Gel Free System](https://www.expedeon.com/products/mass-spectrometry/protein-fractionation/gelfree-8100/gelfree-8100-fractionation-station/)

## References

1.  Ligand-based receptor identification on living cells and tissues using TRICEPS. Frei AP, Moest H, Novy K, Wollscheid B. *Nat Protoc.* 2013 Jul;8(7):1321-36. doi: 10.1038/nprot.2013.072. Epub 2013 Jun 13. [link](http://www.ncbi.nlm.nih.gov/pubmed/23764939)
2.  Identification and quantification of N-linked glycoproteins using hydrazide chemistry, stable isotope labeling and mass spectrometry. Zhang H, Li XJ, Martin DB, Aebersold R.*Nat Biotechnol.* 2003 Jun;21(6):660-6. [link](http://www.ncbi.nlm.nih.gov/pubmed/12754519)
3.  Dopaminergic modulation of the hippocampal neuropil proteome identified by bio-orthogonal non-canonical amino-acid tagging (BONCAT). J.J. Hodas et al., *Proteomics* 12, 2464-2476 (2012). [link](http://www.ncbi.nlm.nih.gov/pubmed/22744909)
4.  Proteomics of human plasma: A critical comparison of analytical workflows in terms of effort, throughput and outcome. Loȉc Dayon, Martin Kussmann *EuPA Open Proteomics* Volume 1, 2013, Pages 8-16 12, 2464-2476 (2012). [link](http://www.sciencedirect.com/science/article/pii/S2212968513000044)

## Quick links

- [Sample prep overview sites](#sampleprep)
- [Cell culture](#cellculture)
- [Tissue and Plant](#tissueplants)
- [Biofluids](#biofluids)
- [Isotopic labelling](#isotopiclabelling)
- [Crosslinking](#crosslinking)
- [Affinity protein enrichment](#affinity)
- [Immunoprecipitation](#immunoprecipitation)
- [Immunodepletion](#immunodepletion)
- [Tag based affinity](#tagaffinity)
- [Cellular fractionation](#cellfractionation)
- [Gel separation](#gel)
- [HPLC/FPLC separation](#hplc)
- [References](#references)

## UWPR links and downloads

- [Cell lysis and subcellular fractionation page](/protocols01/cellfractionation.php)
- [Plasma and serum protein preparation page](/protocols02/plasma.php)
- [TissuePrep_and_Cell Fractionation (xlsx)](/docs/protocols01/UWPR_Protocol_TissuePrep_and_CellFractionation.xlsx)
- [Urine Protein Extraction (xlsx)](/docs/protocols01/UWPR_Protocol_UrineProteinExtraction.xlsx)
- [Cell lysis and IP (xlsx)](/docs/protocols02/UWPR_Protocol_Immunoprecipitation.xlsx)
- [Plasma protein preparation page](https://proteomicsresource.washington.edu/protocols02/plasma.php)
- [Glycopeptide Isolation (xlsx)](/docs/protocols02/UWPR_Protocol_Glycopeptide_Isolation.xlsx)
- [TissuePrep_and_CellFractionation (xlsx)](/docs/protocols01/UWPR_Protocol_TissuePrep_and_CellFractionation.xlsx)
- [In-gel digest page](https://proteomicsresource.washington.edu/protocols03/ingeldigestion.php)
