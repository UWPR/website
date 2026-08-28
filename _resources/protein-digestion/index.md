---
title: "Protein Digestion & Peptide Fractionation"
permalink: /resources/protein-digestion/
redirect_from:
  - /methods/protocols03/
  - /resources/sample-preparation/digestion/
  - /methods/protocols04/
  - /methods/protocols04/peptideseparation/
  - /resources/sample-preparation/peptide-separation/
layout: single
toc: true
toc_sticky: true
classes: no_sidebar
author_profile: false
---

*Protein digestion, peptide fractionation and enrichment, and cleanup for LC-MS*

For bottom-up proteomics, proteins are digested into smaller, easier-to-handle peptides, which are then separated by on-line HPLC and analyzed by the mass spectrometer (LC-MS). Throughout sample preparation, it is critical to avoid or minimize any contamination that could interfere with the subsequent LC-MS analysis.

Salts, detergents, and plasticizers are ionizable contaminants that cause major problems during LC-MS analysis. They compete with the peptides for binding to the column and for detection by the mass spectrometer, and thus drastically decrease the overall sensitivity of the analysis. Complex biological matrices may be rich not only in proteins but also in metabolites, lipids, nucleic acids, sugars, and other molecules. If not removed, these also compete with the peptides for analysis. The primary goal should be to eliminate contamination and increase the amount and number of peptides in a sample. If at all possible, systematic preventive elimination of contaminants is preferable to retrospective reduction.

Equally important is an effective digestion protocol that produces few missed cleavages, few nonspecific cleavages, and few undesired side reactions. If a peptide is present in properly cleaved, missed-cleaved, or modified forms, its signal intensity is distributed across those forms, decreasing the signal of each and increasing sample complexity. For example, urea solutions can lead to carbamylation (via decomposition to ammonium cyanate) when aged or used above 25 °C.

*Third-party tutorials and products appear on this page as suggestions only; they do not constitute an endorsement by the UWPR.*

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

| Detergent | Vendor | UWPR protocol |
|:--|:--|:--|
| PPS Silent Surfactant and similar [acid-cleavable surfactants](https://mspro.creative-proteomics.com/ms-protein-sample-preparation-list-108.htm) | Creative Proteomics MSPro | [PPS Silent Surfactant protocol]({{ site.baseurl }}/resources/protocols/PPS_SilentSurfactant/) |
| [RapiGest SF Surfactant](https://www.waters.com/nextgen/us/en/products/standards-and-reagents/rapigest-sf-surfactant.html) | Waters | [RapiGest Surfactant protocol]({{ site.baseurl }}/resources/protocols/RapiGestSurfactant/) |
| [Invitrosol LC/MS Protein Solubilizer](https://www.thermofisher.com/order/catalog/product/MS10007) | Thermo Fisher | |
| N-octyl-β-glucopyranoside | Thermo Fisher (Pierce) | |
| Big CHAP deoxy | Merck | |
| ASB series | EMD Chemicals | |
| Sodium deoxycholate | Thermo Fisher (Pierce) | |

Starting out with clean HPLC grade solvents and keeping them clean is very important.  
[Avoid Contaminations (pdf)]({{ site.baseurl }}/assets/docs/protocols05/Avoid%20Contaminations.pdf)

## Enzymatic Digestion {#digestion}

Enzymatic digestion cleaves proteins into peptides using a protease with defined specificity. Trypsin is the standard choice: it cleaves after lysine and arginine, producing peptides with a length and charge well suited to LC-MS/MS analysis. Proteins are typically denatured, reduced, and alkylated first so the protease can reach every cleavage site, and alternative enzymes (see the table below) can be used alone or in combination for complementary sequence coverage. Step-by-step UWPR digestion protocols are available on the [Protocols & Methods page]({{ site.baseurl }}/resources/protocols/#digestion-protocols).

### Digestion Kits

| Product | Vendor |
|:--|:--|
| EasyPep MS sample prep kits: [Mini](https://www.thermofisher.com/order/catalog/product/A40006), [Maxi](https://www.thermofisher.com/order/catalog/product/A45734), [96-well](https://www.thermofisher.com/order/catalog/product/A45733) | Thermo Fisher |
| [iST sample preparation kits](https://www.preomics.com/) (any starting material to clean peptides in about an hour) | PreOmics |
| [S-Trap](https://protifi.com/s-trap-solution-1/) (concentration, cleanup, and digestion in one spin column) | Protifi |

### Digestion Enzymes

| Enzyme | Cleavage sites | Description | Suppliers |
|:--|:--|:--|:--|
| Trypsin | \[KR\|P\] | The standard protease for bottom-up proteomics | Promega: [modified trypsin](https://www.promega.com/products/mass-spectrometry/trypsin/sequencing-grade-modified-trypsin/) · [Trypsin/Lys-C kits](https://www.promega.com/products/mass-spectrometry/trypsin/rapid-digestion-trypsin-and-trypsin-lysc-kits/) · [Trypsin/Lys-C mix](https://www.promega.com/products/mass-spectrometry/trypsin/trypsin-lys-c-mix-mass-spec-grade/) · [immobilized](https://www.promega.com/products/mass-spectrometry/trypsin/) |
| Chymotrypsin | \[FWYL\|P\] | | [Promega](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/chymotrypsin_-sequencing-grade/) |
| LysC | \[K\|P\] | | [Promega](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/rlys-c-mass-spec-grade/) · [Sigma](https://www.sigmaaldrich.com/US/en/product/sigma/p3428) |
| ArgC | \[R\|-\] | Cleaves R sites even before P; also cleaves K sites with lower efficiency | [Promega](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/arg_c_-sequencing-grade/) · [Sigma](https://www.sigmaaldrich.com/US/en/product/roche/11370529001) |
| AspN | \[-\|D\] | Also cleaves before cysteic acid | [Promega](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/asp_n_-sequencing-grade/) |
| GluC | \[DE\|P\] | | [Promega](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/glu_c_-sequencing-grade/) · [Sigma](https://www.sigmaaldrich.com/US/en/product/roche/endoglusro) |
| LysN | \[-\|K\] | | |
| Alpha-lytic protease | \[TASV\|-\] | Generates peptides of similar average length as trypsin | [Sigma](https://www.sigmaaldrich.com/US/en/product/sigma/a6362) |
| Pepsin A | \[FLYW\|-\] | | [Promega](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/pepsin/) |
| Staph protease | \[E\|-\] | | |
| Clostripain | \[R\|-\] | | |
| Elastase | \[GVLIAS\|P\] | | [Promega](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/elastase/) |
| Proline endopeptidase | \[P\|-\] | | |
| Thermolysin | \[-\|LFVIAM\] | | [Fisher Scientific](https://www.fishersci.com/shop/products/thermolysin-from-geobacillus-s-5/501765019) |
| TEV protease | after Q in ENLYFQ(G/S) | Cleaves protein fusions at its recognition sequence | Promega: [ProTEV Plus](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/protev-plus/) |
| Factor Xa protease | after R in IEGR | | [Promega](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/factor-xa-protease/) |
| IdeS and IdeZ proteases | single site below the IgG hinge | IgG cleavage | [Promega](https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/ides-protease/) |
| PNGase F | | Cleaves N-linked oligosaccharides between the innermost GlcNAc and asparagine of N-linked glycoproteins | [Promega](https://www.promega.com/products/mass-spectrometry/glycosidases/pngase-f/) |
| Protease Profiler Kit | | Four alternative proteases plus proteomics grade trypsin | [Sigma](https://www.sigmaaldrich.com/US/en/product/sigma/pp0500) |
{: .enzyme-table}

## Chemical cleavage {#chemicalcleavage}

| Chemical | Description |
|:--|:--|
| CNBr (cyanogen bromide) | Hydrolyzes peptide bonds at the C-terminus of Met, converting Met to homoserine |
| BNPS-skatole (2-(2-nitrophenylsulfenyl)-3-methylindole) | Mild oxidant and brominating reagent; cleaves at the C-terminus of Trp |
| Formic acid | Cleaves at the C-terminus of Asp |
| Hydroxylamine (NH₂OH) | Cleaves at the C-terminus of Asn and the N-terminus of Gly |
| Iodosobenzoic acid | Cleaves at the C-terminus of Trp |
| NTCB + Ni (2-nitro-5-thiocyanobenzoic acid) | Cleaves at the N-terminus of Cys |

## Peptide Fractionation & Enrichment {#fractionation}

After digestion, peptide-level fractionation reduces sample complexity before LC-MS, and enrichment isolates peptide classes of interest such as phosphopeptides or glycopeptides. A UWPR protocol covering peptide fractionation and cleanup is available on the [Protocols & Methods page]({{ site.baseurl }}/resources/protocols/#peptide-fractionation).

### Strong cation-exchange (SCX) chromatography {#scx}

SCX separates peptides by charge. The stationary phase carries negatively charged sulfonate groups that bind positively charged peptides. Bound peptides are then released with increasing salt concentration or pH. Most tryptic peptides carry a net charge of +2 or higher in acidic solution, so SCX can separate them from singly charged peptides such as phosphopeptides. SCX is available in HPLC column, cartridge, and StageTip formats.

### Avidin {#avidin}

Biotin-labeled peptides and proteins are isolated on avidin or streptavidin supports, either after chemical biotinylation or after spatial in-vivo biotinylation strategies such as APEX2 proximity labeling.

**Third-party guide**: Thermo's [biotinylation methods overview](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-biology-learning-center/protein-biology-resource-library/pierce-protein-methods/biotinylation.html)

### Phosphopeptide enrichment with IMAC (Immobilized Metal Affinity Chromatography) {#phospho}

To achieve robust MS results, enrichment of phosphopeptide samples is essential because of their low abundance and poor ionization relative to non-phosphorylated peptides. Phosphopeptide enrichment reduces sample complexity and enables effective identification and characterization of phosphorylated peptides by MS.

| Product | Vendor |
|:--|:--|
| [Pierce Fe-NTA phosphopeptide enrichment kit](https://www.thermofisher.com/order/catalog/product/A32992) | Thermo Fisher |
| [Pierce TiO2 phosphopeptide enrichment and cleanup kit](https://www.thermofisher.com/order/catalog/product/A32993), complements the Fe-NTA kit | Thermo Fisher |
| [Pierce graphite spin columns](https://www.thermofisher.com/order/catalog/product/88302), bind hydrophilic peptides (such as phosphopeptides) that C18 resins capture poorly | Thermo Fisher |
| [PHOS-Select iron affinity gel](https://www.sigmaaldrich.com/US/en/product/sigma/p9740) | Sigma |
| [PHOS-Select gallium silica spin column kit](https://www.sigmaaldrich.com/US/en/product/supelco/55416u) | Sigma |

### Glycopeptide enrichment {#glyco}

Glycopeptides can be enriched by hydrazide chemistry, lectin affinity, or HILIC-based approaches.

## Peptide Cleanup {#peptidecleanup}

Digested samples usually need a final cleanup before LC-MS. Leftover salts, buffers, and detergents compete with the peptides for ionization and contaminate the HPLC column and mass spectrometer, so samples are desalted (most commonly by reversed-phase solid-phase extraction) and, when detergents were used upstream, passed over a detergent removal resin.

| Product | Vendor |
|:--|:--|
| [S-Trap](https://protifi.com/s-trap-solution-1/) (reduction, alkylation, digestion, and cleanup in one spin column) | Protifi |
| [Sep-Pak C18 Vac cartridges](https://www.waters.com/nextgen/us/en/shop/sample-preparation--filtration/wat054955-sep-pak-c18-1-cc-vac-cartridge-50-mg-sorbent-per-cartridge-55---.html) for peptide desalting | Waters |
| Pierce C18 [spin columns](https://www.thermofisher.com/order/catalog/product/89873), [pipette tips](https://www.thermofisher.com/order/catalog/product/87782), and [96-well plates](https://www.thermofisher.com/order/catalog/product/A40012252) | Thermo Fisher |
| [Pierce peptide desalting spin columns](https://www.thermofisher.com/order/catalog/product/89851) | Thermo Fisher |
| [ZipTip pipette tips](https://www.emdmillipore.com/US/en/product/ZipTip-Pipette-Tips,MM_NF-C5737) (10 μL tips with a 0.2 or 0.6 μL chromatography bed) | EMD Millipore |
| [OMIX C18 pipette tips](https://www.agilent.com/en/product/sample-preparation/solid-phase-extraction-spe/omix-tips) for femtomole-to-picomole level cleanup | Agilent |
| [AttractSPE Disks Tips / StageTips](https://www.affinisep.com/products/attractspe-disks-tips-stagetips/) (C18, C4, C8, HILIC, HLB, SCX, SAX, and silica phases) | AffiniSEP |
| [Empore StageTips](https://www.emporesci.com/stagetips) (C18, C8, SDB, HLB, SCX, SAX, MCX, and multilayer formats) | Empore |
| [Pierce detergent removal spin columns](https://www.thermofisher.com/order/catalog/product/87777) (samples above 100 μg/mL) | Thermo Fisher |
| [HiPPR detergent removal spin columns](https://www.thermofisher.com/order/catalog/product/88306) (low-concentration samples) | Thermo Fisher |
