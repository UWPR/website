---
title: "Protein Digestion"
permalink: /protocols03/
toc: true
toc_label: "On this page"
toc_sticky: true
---

*Protein digestion and Peptide labelling strategies*

For bottom-up proteomics proteins are digested into smaller, easier to handle peptides, which are then separated by on-line HPLC and analyzed by the mass spectrometer (LC-MS). It is critical to avoid/minimize any contaminations during your entire sample preparation that could interfere with the subsequent LC-MS analysis.
Salts, detergents and plasticisers are ionizable contaminations that cause major problems during the LC-MS analysis. They compete with the peptides binding to the column and detection by the mass spectrometer and thus will drastically decrease the overall sensitivity of the analysis.
Complex biological matrices may not only be rich in proteins but also rich in metabolites, lipids, nucleic acids, sugars, and other molecules. If not removed, they will also compete with the peptides for analysis.
Therefore, the primary goal should be to eliminate contamination and to increase the amount/number of peptides in a sample. If at all possible, systematic preventive elimination of contaminants is preferable over retrospective reduction of contaminants.
Equally important is an effective digestion protocol that produces few missed cleavages, few unspecific cleavages, and few undesired side reactions. If a peptide is present in properly cleaved,a missed cleaved and/or modified form, its signal intensity will be distributed into the number of forms present, decreasing its signal intensity and increasing the sample complexity (i.e. the number of detectable peptide ions). For example use of urea solution can lead to carbamylations (via its decomposition to ammonium cyanate) when using aged solutions or when used at elevated temperatures (above 25^o^C)

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

Dilution, washing, and detergent removal columns often do NOT remove enough detergent for successful analysis of your sample, and can lead to massive contamination of the mass spectrometer and HPLC/column.
In addition detergent removal also leads to sample loss!

**Use "mass spec friendly" detergents** to keep the proteins in solution:

- **PPS Silent Surfactant** (acid-cleavable detergent) is no longer available from Agilent or Abcam (former Expedion), but Creative Proteomics MSPro is selling a variety of acid cleavable surfactants:
  [MS Protein Sample Preparation products](https://mspro.creative-proteomics.com/ms-protein-sample-preparation-list-108.htm)
  Protocol [PPS Silent Surfactant page]({{ site.baseurl }}/protocols03/PPS_SilentSurfactant/)
  [Expedeon protocol]({{ site.baseurl }}/docs/protocols03/expedeon_PPS_SilentSurfactant.pdf) (former ProteinDiscovery) or [Agilent protocol]({{ site.baseurl }}/docs/protocols03/Agilent_PPS_SilentSurfactant.pdf)

- **RapiGest Surfactant** [from Waters](https://www.waters.com/nextgen/us/en/products/standards-and-reagents/rapigest-sf-surfactant.html)
  Protocol [RapiGest Surfactant page]({{ site.baseurl }}/protocols03/RapiGestSurfactant/)

- Invitrosol LC/MS Protein Solubilizer [from Thermo](https://www.thermofisher.com/order/catalog/product/MS10007)
- N-octyl-β-glucopyranoside (ThermoPierce)
- Big CHAP deoxy (Merck)
- ASB series (EMD chemicals)
- sodium deoxycholate (ThermoPierce)

Starting out with clean HPLC grade solvents and keeping them clean is very important.
[Avoid Contaminations (pdf)]({{ site.baseurl }}/docs/protocols05/Avoid%20Contaminations.pdf)

## Enzymatic Digestion Protocols 

List of enzymes and specificity [Expasy Peptide Cutter Page](http://web.expasy.org/peptide_cutter/peptidecutter_enzymes.html)

[UWPR Protein digestion calculator]({{ site.baseurl }}/cgi-bin/digest.cgi)

### Digestion protocols

[EasyPep™ MS Sample Prep Kits](https://www.thermofisher.com/order/catalog/product/A45733)

- [ThermoPierce Trypsin digestion protocol (pdf)]({{ site.baseurl }}/docs/protocols03/ThermoPierce_Trypsin_digestion.pdf)

- [Promega TrypsinGold MS GradeProtocol (pdf)]({{ site.baseurl }}/docs/protocols03/Promega_TrypsinGoldMassSpectrometryGradeProtocol.pdf)

- [Promega_SequencingGradeModifiedTrypsin (pdf)]({{ site.baseurl }}/docs/protocols03/Promega_SequencingGradeModifiedTrypsin.pdf)
  Promega's sequencing grade Trypsin (V5111) is commonly used in proteomics, works well and is affordable\...

- [PreOmics Kits](http://preomics.com/) for sample preparation and peptide cleanup in the field of MS-based proteomics
  PreOmics iST Kits offer all-in-one, standardized and simple-to-use solutions for reproducible preparation from any starting material to clean peptide mixtures in just 1 hour for LC-MS measurements.

- [Protein Digestion (pdf)]({{ site.baseurl }}/docs/protocols03/UWPR_Protocols_Protein_Digestion_Protocols.pdf)
  this document contains several digestion protocols including digestion with trypsin, LysC\...

- [In-gel digest page]({{ site.baseurl }}/protocols03/ingeldigestion/)

- [S-Trap, Rapid universal MS sample prep](https://protifi.com/pages/s-trap) One easy-to-use spin column combines sample concentration, clean up and digestion (page)

- [Protemics sample prep: ProTrap XG](https://proteoform.com/products/protrapxg/)
  The ProTrap XG is a dual-stage, disposable filtration and extraction cartridge can help:
  Remove a high level of SDS
  Perform filtration, precipitation, and digestion in a single device

- [FASP (Filter Aided Spample Preparation) protocol]({{ site.baseurl }}/protocols03/FASPprotocols/) to generate tryptic peptides from crude lysates for LC-MS analysis (page)

### Digestion Enzymes

- **Trypsin \[KR\|P\]**
  [Promega Sequencing Grade Modified Trypsin](https://www.promega.com/products/mass-spectrometry/trypsin/sequencing-grade-modified-trypsin/)
  [Promega Trypsin/Lys-C](https://www.promega.com/products/mass-spectrometry/trypsin/rapid-digestion-trypsin-and-trypsin-lysc-kits/)
  [Promega Trypsin/Lys-C Mix, Mass Spec Grade](https://www.promega.com/products/mass-spectrometry/trypsin/trypsin-lys-c-mix-mass-spec-grade/)
  [Promega Immobilized Trypsin](https://www.promega.com/products/mass-spectrometry/trypsin/)
  [Sigma Trypsin Products](http://www.sigmaaldrich.com/life-science/proteomics/mass-spectrometry/trypsin-proteomics-grade.html)
- **Chymotrypsin \[FWYL\|P\]**
  [Promega Chymotrypsin, Sequencing Grade](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/chymotrypsin_-sequencing-grade/) cleaves at C-Terminus of Tyr, Phe and Trp
- **LysC \[K\|P\]**
  [Promega rLys-C, Mass Spec Grade](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/rlys-c-mass-spec-grade/)
  [Sigma Endoproteinase Lys-C](http://www.sigmaaldrich.com/catalog/product/sigma/p3428?lang=en&region=US)
- **ArgC \[R\|P\]**
- **ArgC \[R\|-\]**
  [Promega Arg-C, Sequencing Grade](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/arg_c_-sequencing-grade/) Cleaves at the C-terminus of arginine residues, including sites next to proline, Also cleaves at lysine residues
  [Sigma Endoproteinase Arg-C Sequencing Grade](http://www.sigmaaldrich.com/catalog/product/roche/11370529001?lang=en&region=US) C-terminal side of arginine residues and lysine sites with lower efficiency
- **AspN \[-\|D\] n-terminal**
  [Promega Asp-N, Sequencing Grade](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/asp_n_-sequencing-grade/) Hydrolyzes Peptide Bonds on the N-Terminal Side of Aspartic and Cysteic Acid Residues (Asp and Cys)
  [Sigma Endoproteinase Asp-N Sequencing Grade](http://www.sigmaaldrich.com/catalog/product/roche/endoargsro?lang=en&region=US) specifically cleaves peptide bonds N-terminally at aspartic and cysteic acid. If cysteine is reduced or alkylated, only -↓-Asp-X is cleaved.
- **GluC \[DE\|P\]**
  [Promega Glu-C, Sequencing Grade](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/glu_c_-sequencing-grade/)
  [Sigma Endoproteinase Glu-C Sequencing Grade](http://www.sigmaaldrich.com/catalog/product/roche/endoglusro?lang=en&region=US) specifically hydrolyzes peptide bonds at the carboxylic side of Glu.
- **LysN \[-\|K\] n-terminal**
- **Alpha-lytic protease \[TASV\|-\]**
  [Sigma Alpha-lytic protease](http://www.sigmaaldrich.com/catalog/product/sigma/a6362?lang=en&region=US) cleaves after T, A, S, and V residues. It generates peptides of similar average length as trypsin.
- **PepsinA \[FLYW\|-\]**
  [Promega Pepsin](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/pepsin/)
- **Staph protease \[E\|-\]**
- **Clostripain \[R\|-\]**
- **Elastase \[GVLIAS\|P\]**
  [Promega Elastase](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/elastase/)
- **Protein endopeptidase \[P\|-\]**
- **Thermolysin \[-\|LFVIAM\]**
  Promega Thermolysin page is missing. [Fischer Scientific's Thermolysin](https://www.fishersci.com/shop/products/thermolysin-from-geobacillus-s-5/501765019).
- **TEV Protease** Cleaves protein fusions with the ENLYFQ(G/S) sequence
  [Promega ProTEV Plus](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/protev-plus/)
- **Factor Xa Proteae** preferentially cleaves after the arginine residue in the amino acid sequence Ile-Glu-Gly-Arg
  [Factor Xa Protease](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/factor-xa-protease/)
- **IdeS Protease and IdeZ Protease** IgG cleavage
  [Promega IdeS Protease and IdeZ Protease](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/ides-protease/)
- **PNGaseF** Cleaves N-linked oligosaccharides between innermost GlcNAc and asparagines from N-linked glycoproteins
  [Promega PNGase F](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/pngase-f-2/)
- **Protease Profiler Kit**
  [Sigma Protease Profiler™ Kit](http://www.sigmaaldrich.com/catalog/product/sigma/pp0500?lang=en&region=US&cm_sp=Insite-_-prodRecCold_xviews-_-prodRecCold10-5) provides four proven alternative proteases in addition to Proteomics Grade Trypsin
- **[Sigma PProteolytic Enzymes](http://www.sigmaaldrich.com/life-science/biochemicals/biochemical-products.html?TablePage=14573351)**

## Chemical cleavage 

- CNBr: Cyanogen bromide hydrolyzes peptide bonds at the C-terminus of methionine residues converting Met to Homoserine
- BNPS-Skatole: BNPS-skatole \[2-(2-nitrophenylsulfenyl)-3-methylindole\] is a mild oxidant and brominating reagent that cleaves at the C-terminus of tryptophan
- Formic Acid: Cleaves at the C-terminus of Asp
- Hydroxylamine (NH2OH): Cleaves at the C-term. of Asn and at the N-term. of Gly
- Iodosobenzoic acid: Cleaves at the C-terminus of Trp
- NTCB +Ni (2-nitro-5-thiocyanobenzoic acid ): Cleaves at the N-terminus of Cys

## Isotopic labeling 

There are various chemical labeling strategies for concurrent peptide identification and multiplexed proteomics quantitation by mass spectrometry. Most quantitative proteomics reagents incorporate stable isotopes into the isobaric tag portion of the reagents and are used to label at the protein or peptide level. Check out their protocols, most start with the digestion followed by labeling:

- Isotopic Labeling Overview [UWPR page]({{ site.baseurl }}/protocols03/isotopic_labeling/)

- Sigma iTRAQ (Isobaric tags for Relative and Absolute Quantification) [page](http://www.sigmaaldrich.com/life-science/molecular-biology/molecular-biology-products.html?TablePage=112006408)
  Amine-reactive, 8-plex reagents

- ThermoPierce TMT (Tandem Mass Tag) Systems [page](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/protein-quantitation-mass-spectrometry/tandem-mass-tag-systems.html)
  Amine-reactive, TMTsixplex™ Isobaric Mass Tagging Kit [page](https://www.thermofisher.com/order/catalog/product/90064B?SID=srch-srp-90064B#/90064B?SID=srch-srp-90064B)
  Amine-reactive, TMT10plex™ Isobaric Mass Tagging Kit [page](https://www.thermofisher.com/order/catalog/product/90113?SID=srch-srp-90113#/90113?SID=srch-srp-90113)
  Amine-reactive, TMTpro™ 16-plex Label Reagent Set [page](https://www.thermofisher.com/order/catalog/product/A44520#/A44520)
  Cysteine-Reactive, iodoTMTsixplex™ Isobaric Label Reagent Se [page](https://www.thermofisher.com/order/catalog/product/90101?SID=srch-srp-90101#/90101?SID=srch-srp-90101)
  Carbonyl-reactive, aminoxyTMTsixplex™ Label Reagent Set [page](https://www.thermofisher.com/order/catalog/product/90401?SID=srch-srp-90401#/90401?SID=srch-srp-90401)

- Planet Orbitrap TMT Overview (Tandem Mass Tag) Reagents [page](http://planetorbitrap.com/tmt#.VGpsdPnF9hE)

## Peptide cleanup protocols for LC-MS 

[Protemics sample prep: S-Trap](https://protifi.com/pages/s-trap)
S-Trap™ sample processing begins with sample lysis and solubilization in 5% SDS. Proteins are further denatured by acidification to pH \< 1 and subsequent exposure to a high concentration of methanol.
Reduction and alkylation and digestion are performed within the physical confinement of the submicron pores of the trap forcing substrate and protease interaction to yield rapid digestion
The trap does not have affinity for peptides, which elute after digestion.

[Protemics sample prep: ProTrap XG](https://proteoform.com/products/protrapxg/)
The ProTrap XG is a dual-stage, disposable filtration and extraction cartridge can help:
Remove a high level of SDS
Perform filtration, precipitation, and digestion in a single device

[Nestgroup Desalting C18 RP MicroSpin column protocol (pdf)](https://www.nestgrp.com/pdf/Ap2/minispinRPC.pdf)
These [spin columns (pdf)]({{ site.baseurl }}/docs/protocols03/Nestgroup_minispinRPC.pdf) will retain non-polar solutes such as peptides (C18) , proteins (C4), and detergents. Salts, and polar solutes like DNA will not be retained
SUM SS18V 2-100 μl or 3-30 μg
SEM SS18V 5-200 μl or 5-60 μg
SMM SS18V 50-450 μl or 30-300 μg

[Nestgroup Desalting C18 RP MicroSpin (Targa) column protocol (pdf)](https://www.nestgrp.com/pdf/Ap2/minispinRP_sm.pdf)
These [spin columns (pdf)]({{ site.baseurl }}/docs/protocols03/Nestgroup_minispinRP_sm.pdf) of water wettable TARGA C18 will retain polar & non-polar solutes such as carbohydrates, nucleotides, polar peptides as well as metabolites and pharmaceutical compounds. Salts will not be retained. This permits the removal of salt from samples prior to mass spectrometry
SUM SS18R 2-25 μl or 3-30 μg
SEM SS18R 5-50 μl or 6-60 μg
SMM SS18R 50-150 μl or 30-300 μg

[Waters Sep-Pak (WAT054955)](http://www.waters.com/waters/partDetail.htm?partNumber=WAT054955&locale=113) for peptide desalting
Sep-Pak C18 Vac cartridges contain a hydrophobic, reverse-phase, silica-based bonded phase that is used to adsorb analytes of even weak hydrophobicity from aqueous solutions.

[ThermoTechTip19 for detergent removal]({{ site.baseurl }}/docs/protocols03/Thermo_TechTip19_Detergent_Removal.pdf)

[ThermoPierce Detergent Removal for low-concentration samples (pdf)]({{ site.baseurl }}/docs/protocols03/ThermoPierce_DetergentRemoval.pdf)

[ThermoPierce Detergent Removal best for processing samples with proteins or peptides at greater than 100μg∕mL (pdf)]({{ site.baseurl }}/docs/protocols03/ThermoPierce_DetergentRemoval_highConc.pdf)

[Nestgroup Hydrophilic Interaction and Detergent Removal (pdf)](https://www.nestgrp.com/pdf/Ap2/minispinHILIC.pdf)
HILIC [spin columns (pdf)]({{ site.baseurl }}/docs/protocols03/Nestgroup_minispinHILIC.pdf) will retain polar solutes such as peptides, proteins, and polar metabolites. Salts, detergents, and non polar solutes will not be retained. This permits the removal of nonvolatile components from samples prior to mass spectrometry
SUM HIL 2-25 μl or 3-30 μg
SEM HIL 5-50 μl or 6-60 μg
SMM HIL 50-150 μl or 30-300 μg

[Nestgroup Strong Cation Exchange: post iTRAQ clean-up (pdf)](https://www.nestgrp.com/pdf/Ap2/minispinSCX.pdf)
These [spin columns (pdf)]({{ site.baseurl }}/docs/protocols03/Nestgroup_minispinSCX.pdf) will retain cationic solutes such as peptides, protein digests, or simple organic amines. Desalt samples prior to mass spectrometry.
SUM HIL-SCX 2-25 μl or 5-50 μg
SEM HIL-SCX 5-50 μl or 10-100 μg
SMM HIL-SCX 50-150 μl or 50-500 μg

## On this page

- [Detergents](#detergents)
- [Enzymatic digestion](#digestion)
- [Chemical cleavage](#chemicalcleavage)
- [Isotopic labeling](#isotopiclabeling)
- [Peptide cleanup](#peptidecleanup)

## UWPR pages and downloads

- [Avoid Contaminations (pdf)]({{ site.baseurl }}/docs/protocols05/Avoid%20Contaminations.pdf)
- [PPS Silent Surfactant page]({{ site.baseurl }}/protocols03/PPS_SilentSurfactant/)
- [RapiGest Surfactant page]({{ site.baseurl }}/protocols03/RapiGestSurfactant/)
- [UWPR Protein digestion calculator]({{ site.baseurl }}/cgi-bin/digest.cgi)
- [Protein Digestion (pdf)]({{ site.baseurl }}/docs/protocols03/UWPR_Protocols_Protein_Digestion_Protocols.pdf)
- [In-gel digest page]({{ site.baseurl }}/protocols03/ingeldigestion/)
- [FASP protocol]({{ site.baseurl }}/protocols03/FASPprotocols/)
- [Isotopic Labeling page]({{ site.baseurl }}/protocols03/isotopic_labeling/)
