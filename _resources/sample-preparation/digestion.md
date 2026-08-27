---
title: "Protein Digestion"
permalink: /resources/sample-preparation/digestion/
redirect_from:
  - /methods/protocols03/
layout: single
toc: true
toc_sticky: true
classes: no_sidebar
author_profile: false
---

*Protein digestion and peptide labeling strategies*

For bottom-up proteomics, proteins are digested into smaller, easier to handle peptides, which are then separated by on-line HPLC and analyzed by the mass spectrometer (LC-MS). It is critical to avoid or minimize any contamination during the entire sample preparation that could interfere with the subsequent LC-MS analysis.

Salts, detergents, and plasticizers are ionizable contaminants that cause major problems during LC-MS analysis. They compete with the peptides for binding to the column and detection by the mass spectrometer, and thus drastically decrease the overall sensitivity of the analysis. Complex biological matrices may be rich not only in proteins but also in metabolites, lipids, nucleic acids, sugars, and other molecules; if not removed, these also compete with the peptides for analysis. The primary goal should be to eliminate contamination and increase the amount and number of peptides in a sample. If at all possible, systematic preventive elimination of contaminants is preferable to retrospective reduction.

Equally important is an effective digestion protocol that produces few missed cleavages, few unspecific cleavages, and few undesired side reactions. If a peptide is present in properly cleaved, missed-cleaved, and/or modified forms, its signal intensity is distributed across those forms, decreasing the signal of each and increasing the sample complexity. For example, urea solutions can lead to carbamylation (via decomposition to ammonium cyanate) when aged or used above 25 °C.

## Detergents

**Avoid detergents** that are not mass spec compatible, including:

- NP-40
- TritonX (any derivative)
- Igepal (any derivative)
- Brij-35 (or any derivative)
- Tween-20
- OTG
- SDS
- CHAPS
- CHAPSO

Dilution, washing, and detergent removal columns often do NOT remove enough detergent for successful analysis of your sample, and can lead to massive contamination of the mass spectrometer and HPLC/column. In addition, detergent removal also leads to sample loss.

**Use "mass spec friendly" detergents** to keep the proteins in solution:

- **PPS Silent Surfactant** (acid-cleavable detergent) is no longer available from Agilent or Abcam (formerly Expedeon), but Creative Proteomics MSPro sells a variety of acid-cleavable surfactants:  
  [MS Protein Sample Preparation products](https://mspro.creative-proteomics.com/ms-protein-sample-preparation-list-108.htm)  
  Protocol: [PPS Silent Surfactant page]({{ site.baseurl }}/resources/protocols/PPS_SilentSurfactant/)  
  [Expedeon protocol (pdf)]({{ site.baseurl }}/assets/docs/protocols03/expedeon_PPS_SilentSurfactant.pdf) or [Agilent protocol (pdf)]({{ site.baseurl }}/assets/docs/protocols03/Agilent_PPS_SilentSurfactant.pdf)

- **RapiGest Surfactant** [from Waters](https://www.waters.com/nextgen/us/en/products/standards-and-reagents/rapigest-sf-surfactant.html)  
  Protocol: [RapiGest Surfactant page]({{ site.baseurl }}/resources/protocols/RapiGestSurfactant/)

- Invitrosol LC/MS Protein Solubilizer [from Thermo](https://www.thermofisher.com/order/catalog/product/MS10007)
- N-octyl-β-glucopyranoside (ThermoPierce)
- Big CHAP deoxy (Merck)
- ASB series (EMD chemicals)
- Sodium deoxycholate (ThermoPierce)

Starting out with clean HPLC grade solvents and keeping them clean is very important.  
[Avoid Contaminations (pdf)]({{ site.baseurl }}/assets/docs/protocols05/Avoid%20Contaminations.pdf)

## Enzymatic Digestion Protocols {#digestion}

List of enzymes and specificity: [Expasy Peptide Cutter page](https://web.expasy.org/peptide_cutter/peptidecutter_enzymes.html)

[UWPR Protein digestion calculator](https://proteomicsresource.gs.washington.edu/cgi-bin/digest.cgi)

### Digestion protocols

- [EasyPep MS sample prep kits](https://www.thermofisher.com/order/catalog/product/A45733) from Thermo Fisher
- [ThermoPierce trypsin digestion protocol (pdf)]({{ site.baseurl }}/assets/docs/protocols03/ThermoPierce_Trypsin_digestion.pdf)
- [Promega Trypsin Gold MS grade protocol (pdf)]({{ site.baseurl }}/assets/docs/protocols03/Promega_TrypsinGoldMassSpectrometryGradeProtocol.pdf)
- [Promega sequencing grade modified trypsin (pdf)]({{ site.baseurl }}/assets/docs/protocols03/Promega_SequencingGradeModifiedTrypsin.pdf)  
  Promega's sequencing grade trypsin (V5111) is commonly used in proteomics, works well, and is affordable
- [PreOmics kits](https://www.preomics.com/) for sample preparation and peptide cleanup: the iST kits offer all-in-one, standardized solutions from any starting material to clean peptide mixtures in about an hour
- [Protein digestion protocols (pdf)]({{ site.baseurl }}/assets/docs/protocols03/UWPR_Protocols_Protein_Digestion_Protocols.pdf): several digestion protocols including trypsin and LysC
- [In-gel digestion page]({{ site.baseurl }}/resources/sample-preparation/ingeldigestion/)
- [S-Trap rapid universal MS sample prep](https://protifi.com/s-trap-solution-1/): one spin column combines sample concentration, cleanup, and digestion
- [ProTrap XG](https://proteoform.com/products/protrapxg/): a dual-stage, disposable filtration and extraction cartridge that removes high levels of SDS and performs filtration, precipitation, and digestion in a single device
- [FASP (filter-aided sample preparation) protocol]({{ site.baseurl }}/resources/protocols/FASPprotocols/) to generate tryptic peptides from crude lysates

### Digestion Enzymes

- **Trypsin \[KR\|P\]**  
  [Promega Sequencing Grade Modified Trypsin](https://www.promega.com/products/mass-spectrometry/trypsin/sequencing-grade-modified-trypsin/)  
  [Promega Trypsin/Lys-C](https://www.promega.com/products/mass-spectrometry/trypsin/rapid-digestion-trypsin-and-trypsin-lysc-kits/)  
  [Promega Trypsin/Lys-C Mix, Mass Spec Grade](https://www.promega.com/products/mass-spectrometry/trypsin/trypsin-lys-c-mix-mass-spec-grade/)  
  [Promega Immobilized Trypsin](https://www.promega.com/products/mass-spectrometry/trypsin/)
- **Chymotrypsin \[FWYL\|P\]**  
  [Promega Chymotrypsin, Sequencing Grade](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/chymotrypsin_-sequencing-grade/) cleaves at C-terminus of Tyr, Phe and Trp
- **LysC \[K\|P\]**  
  [Promega rLys-C, Mass Spec Grade](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/rlys-c-mass-spec-grade/)  
  [Sigma Endoproteinase Lys-C](https://www.sigmaaldrich.com/US/en/product/sigma/p3428)
- **ArgC \[R\|-\]**  
  [Promega Arg-C, Sequencing Grade](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/arg_c_-sequencing-grade/) cleaves at the C-terminus of arginine residues, including sites next to proline; also cleaves at lysine residues  
  [Sigma Endoproteinase Arg-C Sequencing Grade](https://www.sigmaaldrich.com/US/en/product/roche/11370529001) cleaves the C-terminal side of arginine residues and lysine sites with lower efficiency
- **AspN \[-\|D\] N-terminal**  
  [Promega Asp-N, Sequencing Grade](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/asp_n_-sequencing-grade/) hydrolyzes peptide bonds on the N-terminal side of aspartic and cysteic acid residues
- **GluC \[DE\|P\]**  
  [Promega Glu-C, Sequencing Grade](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/glu_c_-sequencing-grade/)  
  [Sigma Endoproteinase Glu-C Sequencing Grade](https://www.sigmaaldrich.com/US/en/product/roche/endoglusro) specifically hydrolyzes peptide bonds at the carboxylic side of Glu
- **LysN \[-\|K\] N-terminal**
- **Alpha-lytic protease \[TASV\|-\]**  
  [Sigma Alpha-lytic protease](https://www.sigmaaldrich.com/US/en/product/sigma/a6362) cleaves after T, A, S, and V residues; generates peptides of similar average length as trypsin
- **PepsinA \[FLYW\|-\]**  
  [Promega Pepsin](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/pepsin/)
- **Staph protease \[E\|-\]**
- **Clostripain \[R\|-\]**
- **Elastase \[GVLIAS\|P\]**  
  [Promega Elastase](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/elastase/)
- **Protein endopeptidase \[P\|-\]**
- **Thermolysin \[-\|LFVIAM\]**  
  [Thermolysin from Fisher Scientific](https://www.fishersci.com/shop/products/thermolysin-from-geobacillus-s-5/501765019)
- **TEV Protease**: cleaves protein fusions with the ENLYFQ(G/S) sequence  
  [Promega ProTEV Plus](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/protev-plus/)
- **Factor Xa Protease**: preferentially cleaves after the arginine residue in the amino acid sequence Ile-Glu-Gly-Arg  
  [Promega Factor Xa Protease](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/factor-xa-protease/)
- **IdeS Protease and IdeZ Protease**: IgG cleavage  
  [Promega IdeS Protease and IdeZ Protease](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/ides-protease/)
- **PNGaseF**: cleaves N-linked oligosaccharides between innermost GlcNAc and asparagines from N-linked glycoproteins  
  [Promega PNGase F](https://www.promega.com/products/mass-spectrometry/glycosidases/pngase-f/)
- **Protease Profiler Kit**  
  [Sigma Protease Profiler Kit](https://www.sigmaaldrich.com/US/en/product/sigma/pp0500) provides four proven alternative proteases in addition to proteomics grade trypsin

## Chemical cleavage {#chemicalcleavage}

- CNBr: Cyanogen bromide hydrolyzes peptide bonds at the C-terminus of methionine residues, converting Met to homoserine
- BNPS-Skatole \[2-(2-nitrophenylsulfenyl)-3-methylindole\]: a mild oxidant and brominating reagent that cleaves at the C-terminus of tryptophan
- Formic acid: cleaves at the C-terminus of Asp
- Hydroxylamine (NH2OH): cleaves at the C-terminus of Asn and at the N-terminus of Gly
- Iodosobenzoic acid: cleaves at the C-terminus of Trp
- NTCB + Ni (2-nitro-5-thiocyanobenzoic acid): cleaves at the N-terminus of Cys

## Isotopic labeling {#isotopiclabeling}

There are various chemical labeling strategies for concurrent peptide identification and multiplexed proteomics quantitation by mass spectrometry. Most quantitative proteomics reagents incorporate stable isotopes into the isobaric tag portion of the reagents and are used to label at the protein or peptide level. Check out their protocols; most start with the digestion followed by labeling.

- Isotopic labeling overview: [UWPR page]({{ site.baseurl }}/resources/knowledgebase/isotopic_labeling/)
- ThermoPierce TMT (Tandem Mass Tag) systems [page](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/protein-quantitation-mass-spectrometry/tandem-mass-tag-systems.html)  
  Amine-reactive [TMTsixplex](https://www.thermofisher.com/order/catalog/product/90064B), [TMT10plex](https://www.thermofisher.com/order/catalog/product/90113), and [TMTpro 16-plex](https://www.thermofisher.com/order/catalog/product/A44520) kits  
  Cysteine-reactive [iodoTMTsixplex](https://www.thermofisher.com/order/catalog/product/90101) and carbonyl-reactive [aminoxyTMTsixplex](https://www.thermofisher.com/order/catalog/product/90401) label reagent sets

## Peptide cleanup protocols for LC-MS {#peptidecleanup}

[Proteomics sample prep: S-Trap](https://protifi.com/s-trap-solution-1/)  
S-Trap sample processing begins with sample lysis and solubilization in 5% SDS. Proteins are further denatured by acidification to pH < 1 and subsequent exposure to a high concentration of methanol. Reduction, alkylation, and digestion are performed within the physical confinement of the submicron pores of the trap, forcing substrate and protease interaction to yield rapid digestion. The trap does not have affinity for peptides, which elute after digestion.

[Proteomics sample prep: ProTrap XG](https://proteoform.com/products/protrapxg/)  
The ProTrap XG is a dual-stage, disposable filtration and extraction cartridge that removes a high level of SDS and performs filtration, precipitation, and digestion in a single device.

[Nestgroup desalting C18 RP MicroSpin column protocol (pdf)](https://www.nestgrp.com/pdf/Ap2/minispinRPC.pdf)  
These [spin columns (pdf)]({{ site.baseurl }}/assets/docs/protocols03/Nestgroup_minispinRPC.pdf) will retain non-polar solutes such as peptides (C18), proteins (C4), and detergents. Salts and polar solutes like DNA will not be retained.  
SUM SS18V 2-100 μL or 3-30 μg · SEM SS18V 5-200 μL or 5-60 μg · SMM SS18V 50-450 μL or 30-300 μg

[Nestgroup desalting C18 RP MicroSpin (Targa) column protocol (pdf)](https://www.nestgrp.com/pdf/Ap2/minispinRP_sm.pdf)  
These [spin columns (pdf)]({{ site.baseurl }}/assets/docs/protocols03/Nestgroup_minispinRP_sm.pdf) of water wettable TARGA C18 will retain polar and non-polar solutes such as carbohydrates, nucleotides, polar peptides, metabolites, and pharmaceutical compounds. Salts will not be retained, which permits the removal of salt from samples prior to mass spectrometry.  
SUM SS18R 2-25 μL or 3-30 μg · SEM SS18R 5-50 μL or 6-60 μg · SMM SS18R 50-150 μL or 30-300 μg

Waters Sep-Pak C18 Vac cartridges (WAT054955) for peptide desalting contain a hydrophobic, reverse-phase, silica-based bonded phase that adsorbs analytes of even weak hydrophobicity from aqueous solutions.

[ThermoTechTip19 for detergent removal (pdf)]({{ site.baseurl }}/assets/docs/protocols03/Thermo_TechTip19_Detergent_Removal.pdf)

[ThermoPierce detergent removal for low-concentration samples (pdf)]({{ site.baseurl }}/assets/docs/protocols03/ThermoPierce_DetergentRemoval.pdf)

[ThermoPierce detergent removal for samples with proteins or peptides above 100 μg/mL (pdf)]({{ site.baseurl }}/assets/docs/protocols03/ThermoPierce_DetergentRemoval_highConc.pdf)

[Nestgroup hydrophilic interaction and detergent removal (pdf)](https://www.nestgrp.com/pdf/Ap2/minispinHILIC.pdf)  
HILIC [spin columns (pdf)]({{ site.baseurl }}/assets/docs/protocols03/Nestgroup_minispinHILIC.pdf) will retain polar solutes such as peptides, proteins, and polar metabolites. Salts, detergents, and non-polar solutes will not be retained, which permits the removal of nonvolatile components from samples prior to mass spectrometry.  
SUM HIL 2-25 μL or 3-30 μg · SEM HIL 5-50 μL or 6-60 μg · SMM HIL 50-150 μL or 30-300 μg

[Nestgroup strong cation exchange cleanup (pdf)](https://www.nestgrp.com/pdf/Ap2/minispinSCX.pdf)  
These [spin columns (pdf)]({{ site.baseurl }}/assets/docs/protocols03/Nestgroup_minispinSCX.pdf) will retain cationic solutes such as peptides, protein digests, or simple organic amines. Desalt samples prior to mass spectrometry.  
SUM HIL-SCX 2-25 μL or 5-50 μg · SEM HIL-SCX 5-50 μL or 10-100 μg · SMM HIL-SCX 50-150 μL or 50-500 μg
