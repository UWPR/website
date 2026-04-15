---
title: "Protein Separation"
permalink: /protocols02/index_proteinSeparation/
toc: true
toc_label: "On this page"
toc_sticky: true
---

*Protein separation and enrichment related resources*

The most challenging proteomics studies are those that try to identify and quantify global proteomes. Many experiments require a reduction of protein complexity by separating the proteins.
One approach is to focus on the subproteome of an organelle using classical subcellular fractionation techniques.
Alternatively, sample complexity can also be effectively reduced using enrichment techniques like immunoprecipitations or activity- or affinity-based approaches.
Enrichment can also be directed toward a specific characteristic of proteins for example toward glycoproteins \[Ref 1\], phoshoproteins or newly synthesized proteins \[Ref 2\].
Proteins can also be separated by gels (SDS-PAGE), chromatography (FPLC and HPLC) or Gel-Free separations.

## Affinity-activity based protein enrichment 

Proteins can be enriched based on a specific interactions. Either the bait or the protein of interest are immobilized to extract the proteins of interest. All those methods have to be carefully optimized in terms of bait and sample load with appropriate positive and negative controls.

- [Pierce Kinase Enrichment Kit with ATP Probe](https://www.thermofisher.com/order/catalog/product/88310)
- [Pierce GTPase Enrichment Kit with GTP Probe](https://www.thermofisher.com/order/catalog/product/88314)
- [ActivX TAMRA-FP Serine Hydrolase Probe](https://www.thermofisher.com/order/catalog/product/88318)

## Immunoprecipitation protocols 

Immunoprecipitation (IP) is the most commonly used affinity purification of antigen using a specific antibody. For MS analyses the strategy of immobilizing the antibody by covalently crosslinking it to the beads works very well as it reduces the amount of contaminating antibody.

- Immunoprecipitation Kit Selection Guide [go to page](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-assays-analysis/immunoprecipitation.html)

- Protein Enrichment & Clean Up for Mass Spectrometry [go to page](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/sample-prep-mass-spectrometry/protein-enrichment-clean-up-mass-spectrometry.html)
  Pierce offers nice IP Kits and has good tutorials on their website

- Mass Spectrometric Immunoassay (MSIA) Microcolumns [go to page](https://www.thermofisher.com/order/catalog/product/992STR96?SID=srch-srp-992STR96)
  According to Thermo MSIA tips provide a simple and effective way to enrich and concentrate target proteins down to femtomole level

- Immunoprecipitation protocol from Abcam [go to page](http://www.abcam.com/protocols/immunoprecipitation-protocol-1)

- Ab crosslinking strategy from Abcam [go to page](http://www.abcam.com/protocols/cross-linking-antibodies-to-beads-protocol)

- [Cell lysis and IP (xlsx)]({{ site.baseurl }}/docs/protocols02/UWPR_Protocol_Immunoprecipitation.xlsx)
  Here is an IP protocol we used a long time ago\...

Tips:

- To reduce antibody contamination in your final sample consider following a protocol which immobilizes the antibody (via crosslinking)
- Avoid using detergents as much as possible.
- Use an elution buffer compatible with the downstream analysis. For mass spec analysis use Urea buffer (4-6 M, pH 7.5) to be compatible with reduction/alkylation and tryptic digestion, and desalt prior to LC-MS analysis.

  Note: choose a mass spec compatible elution buffer to allow for in solution digestion and minimal peptide cleanup

## Immunodepletion

The wide dynamic range of protein concentrations present in serum and plasma represents a major challenge for the analysis of the proteome. The range of plasma protein concentrations, from low abundance proteins such as cytokines (pg/mL) to albumin (30-45 mg/mL), represents at least 10 orders of magnitude. Analysis of low abundance proteins by even the most sensitive of methods for proteomics greatly benefits from the removal of high abundance proteins that may interfere with their detection. Plasma Immunodepletion strategies specifically remove the most abundant proteins from human plasma or serum in preparation for further proteomics analysis, enabling deeper penetration into the plasma proteome, here are a couple of examples:

- [The Seppro Depletion Technology](https://www.sigmaaldrich.com/life-science/proteomics/protein-sample-preparation/protein-depletion-products/seppro-depletion-resins.html) from Sigma enables removal of interfering highly abundant proteins from a variety of biological samples
- [ProteoPrep® Blue Albumin & IgG Depletion Kit](https://www.sigmaaldrich.com/catalog/product/sigma/protba?lang=en&region=US&cm_sp=Insite-_-prodRecCold_xviews-_-prodRecCold3-2) from Sigma
- [ProteoPrep 20](http://www.sigmaaldrich.com/catalog/product/sigma/prot20s?lang=en&region=US) from Sigma is discontinued but the info is still there
- [Proteome Purify 12 Human Serum Protein Immunodepletion Resin](http://www.rndsystems.com/Products/IDR012) from R&D systems
- [High Select™ HSA/Immunoglobulin Depletion Mini Spin Columns](https://www.thermofisher.com/order/catalog/product/A36365) from ThermoPierce
- [High Select™ Top14 Abundant Protein Depletion Mini Spin Columns](https://www.thermofisher.com/order/catalog/product/A36369) from ThermoPierce
- [Pierce™ Albumin Depletion Kit](https://www.thermofisher.com/order/catalog/product/85160) from ThermoPierce
- [Pierce™ Top 2 Abundant Protein Depletion Spin Columns](https://www.thermofisher.com/order/catalog/product/85161) from ThermoPierce

Protocols for plasma and serum protein preparation for shotgun proteomics [go to page]({{ site.baseurl }}/protocols02/plasma/)

## Tag based affinity protocols 

Affinity tag and tandem affinity tag (TAP) allow to isolate specific proteins of interest and proteins associated with them. Commonly used affinity tools are the FLAG-tag, HA tag, or GFP tag used in combination with an antibody towards either of these tags. Proteins tagged with biotin can be enriched using streptavidin or neutravidin beads.

- Gingras lab protocols [go to page](https://gingraslab.lunenfeld.ca/resources.php?cateName=Protocols)
  Anne-Claude Gingras is a TAP-tag wizard check out her website for protocols

- Yeast Resource Center [go to page](http://yeastrc.org/yeastrc/pages/ms_tap1.html)
  In their Mass Spectrometry section you'll find a nice TAP-tagged protein purification step by step protocol

- Modification, one example is glycoprotein isolation enriching specifically N-glycosylated proteins.
  Here is a collection of protocols that were developed based on initial work done by Hui Zhang (Ass.Prof. Johns Hopkins) and Kelly Vaughn, while they were in Ruedi Aebersolds lab \[Ref 1\].
  [Glycopeptide Isolation (xlsx)]({{ site.baseurl }}/docs/protocols02/UWPR_Protocol_Glycopeptide_Isolation.xlsx)

## Cell Fractionation (organellar proteomics) 

When fractionating proteins based on their cellular localization all possible precautions should be taken to isolate the desired organelle. Contaminating proteins from other cytosol or other organelles should be expected. Repeated analyses with strong statistical tests are often needed to differentiate contaminating proteins from true organellar proteins. Another (undesired) organelle can serve as a good negative control.

- [TissuePrep_and_CellFractionation (xlsx)]({{ site.baseurl }}/docs/protocols01/UWPR_Protocol_TissuePrep_and_CellFractionation.xlsx)
  Microsomal membrane protein enrichment protocol from tissue samples

## Protein separation 1D and 2D Gel 

Sodium dodecyl sulfate polyacrylamide gel electrophoresis (SDS-PAGE) is a very common method for separating proteins based on their molecular weight. Protein separation by SDS-PAGE can be used to estimate relative molecular mass, to determine the relative abundance of major proteins in a sample, and to determine the distribution of proteins among fractions. SDS-PAGE can also be used as a tool to assess purity of protein samples and to monitor the progress of a fractionation or purification procedure. Two-dimensional (2D) electrophoresis separated proteins first by their isoelectric point and then by their molecular weight.
Different staining methods can be used like Coomassie Blue ( range) and Silver stain (range) to visualize the protein bands. Techniques such as Western blotting are used to detect specific proteins or protein modification.
To identify proteins by LC-MS, proteins can be digested in the gel or on the membrane (western blot) and peptides can be extracted for analysis.

- [In-gel digest page]({{ site.baseurl }}/protocols03/ingeldigestion/) for information about in-gel-digestion

## Chromatography HPLC or FPLC 

Traditional column chromatography or using an HPLC (High-performance liquid chromatography) or FPLC (Fast protein liquid chromatography) can be used to separate proteins based on their physiochemical properties like size, charge and hydrophobicity; Size exclusion, cation or anion exchange, reversed phase (C4) are some of the commonly used chemistries.

**Gel-Free (Free-Flow-Electrophoresis**
less common and a bit tricky.. BD recently made the decision to exit the Free Flow Electrophoresis (FFE) business, but Expedeon is still offering a [Gel Free System](https://www.expedeon.com/products/mass-spectrometry/protein-fractionation/gelfree-8100/gelfree-8100-fractionation-station/)

## References

1.  Identification and quantification of N-linked glycoproteins using hydrazide chemistry, stable isotope labeling and mass spectrometry. Zhang H, Li XJ, Martin DB, Aebersold R.*Nat Biotechnol.* 2003 Jun;21(6):660-6. [link](http://www.ncbi.nlm.nih.gov/pubmed/12754519)
2.  Dopaminergic modulation of the hippocampal neuropil proteome identified by bio-orthogonal non-canonical amino-acid tagging (BONCAT). J.J. Hodas et al., *Proteomics* 12, 2464-2476 (2012). [link](http://www.ncbi.nlm.nih.gov/pubmed/22744909)
3.  Proteomics of human plasma: A critical comparison of analytical workflows in terms of effort, throughput and outcome. Loȉc Dayon, Martin Kussmann *EuPA Open Proteomics* Volume 1, 2013, Pages 8-16 12, 2464-2476 (2012). [link](http://www.sciencedirect.com/science/article/pii/S2212968513000044)

## Quick Links

- [Affinity based protein enrichment](#affinity)
- [Immunoprecipitation protocols](#immunoprecipitation)
- [Immunodepletion proteocols](#immunodepletion)
- [Tag based affinity](#tagaffinity)
- [Cellular fractionation](#cellfractionation)
- [Gel separation](#gel)
- [HPLC/FPLC separation](#hplc)
- [References](#references)

## UWPR links and downloads

- [Cell lysis and IP (xlsx)]({{ site.baseurl }}/docs/protocols02/UWPR_Protocol_Immunoprecipitation.xlsx)
- [Plasma protein preparation page]({{ site.baseurl }}/protocols02/plasma/)
- [Glycopeptide Isolation (xlsx)]({{ site.baseurl }}/docs/protocols02/UWPR_Protocol_Glycopeptide_Isolation.xlsx)
- [TissuePrep_and_CellFractionation (xlsx)]({{ site.baseurl }}/docs/protocols01/UWPR_Protocol_TissuePrep_and_CellFractionation.xlsx)
- [In-gel digest page]({{ site.baseurl }}/protocols03/ingeldigestion/)
