---
title: "Stable Isotope Labeling Strategies"
permalink: /protocols03/isotopic_labeling/
toc: true
toc_label: "On this page"
toc_sticky: true
---

*Protein Quantitation using Mass Spectrometry*

With stable isotope labeling, one sample is derivatized with a "light" version of a chemical tag while another sample is labeled with a version of the same tag that incorporates a "heavy" isotope. The samples are then mixed together and analyzed in the same experiment. Identical compounds from the different samples co-elute as pairs of peaks and can be distinguished by the mass difference between the heavy and light isotope labels. Quantitation is performed on the pairs of peaks in the MS data and identification is performed using the MS/MS fragment data. This technique eliminates much of the bias that can be introduced when comparing peaks between different experiments since the data from all samples are collected within the same experiment.  
Isotope coded affinity tags ICAT and Stable Isotope Labeling by Amino Acids in Cell Culture, or SILAC, are technologies that provide a mass difference in the molecular weights of differentially labeled peptides, which increases the complexity in the MS space and limits to comparing only 2 or 3 sample types.  
Tandem Mass Tags (TMT and iTRAQ) are isobaric multiplexing tags. All versions of each tag have the same molecular mass but the positions of heavy and light isotopes are adjusted in order to affect the mass of a "reporter ion" region and "balance mass" region within the compound. Since all versions of the reagent tag are identical in molecular weight, the same peptides originating from different samples will have the same mass in MS space regardless of which reporter ion is attached. Upon fragmentation, the reporter ion can be clearly distinguished, and the identity of the peptide determined from the sequence of the larger MS/MS peptide fragments, and the quantity of that peptide from each biological sample determined from the areas of each respective reporter ion peak.

## TMT, Tandem Mass Tag {#tmt}

There are multiple different kits available (2-plex, 6-plex, 10-plex, 16-plex and 18-plex), including bulk, so you can adjust your order to your specific experimental needs.

[TMT Quantitation Overview](https://www.thermofisher.com/us/en/home/industrial/mass-spectrometry/proteomics-mass-spectrometry/quantitative-proteomics-mass-spectrometry/tmt-quantitation.html)  
[TMT kits from Thermo](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/protein-quantitation-mass-spectrometry/tandem-mass-tag-systems.html)  
use in combination with  
[EasyPep™ MS Sample Prep Kits](https://www.thermofisher.com/order/catalog/product/A45733)  
OR  
[PreOmics iST-NHS Kit, a fast, reliable, reproducible sample preparation for chemical labeling (iTRAQ and TMT)](https://www.preomics.com/products/ist-nhs)

[TMT Webinar Steven Gygi HUPO 2020](https://youtu.be/zPhknUaBQrc)

**Procedure summary for MS experiments with TMT Isobaric Mass Tagging Reagents**

Protein extracts isolated from cells or tissues are reduced, alkylated and digested. Samples are labeled with the TMT Reagents and then mixed before sample fractionation and clean up. Labeled samples are analyzed by high resolution Orbitrap LC-MS/MS before data analysis to identify peptides and quantify reporter ion relative abundance.

![]({{ site.baseurl }}/images/TMT_02.png)

**Structural design of the TMT 6-plex and 10-plex (Tandem Mass Tag) Reagents**  
TMT reagents consist of three functional regions: the mass reporter, the mass normalizer and the reactive group. MS/MS fragmentation sites by higher energy collision dissociation (HCD) and electron transfer dissociation (ETD) are located between the mass reporter and mass normalizer. TMT reagents are labeled with 13C and 15N heavy isotopes at varying positions. The total number of isotopes is constant for all the reagents, but the distribution between the reporter and normalizer groups are different.  
There are also different reactive groups available, amine reactive groups to label primary amines as in the N-terminus and Lys side chains, sulfhydryl reactive group to label Cys side chains and carbonyl reactive groups to label carbonyl containing molecules like carbohydrates, steroids etc.

![]({{ site.baseurl }}/images/TMT_03.png)  
The table below shows the different masses added to the peptide for each of the TMT labels as well as the reporter ion masses.

| Tandem Mass Tag (TMT) Reagents | Mono Mod Mass | Avg Mod Mass | HCD Reporter Mono m/z | ETD Reporter Mono m/z |
|:---|:--:|:--:|:--:|:--:|
| **Amine Reactive TMT** |  |  |  |  |
| TMT^0^ - 126 | 224.152478 | 224.2994 | 126.127726 | 114.127725 |
| TMT^2^ - 126 | 225.155833 | 225.2921 | 126.127726 | 114.127725 |
| TMT^2^ - 127 C | 225.155833 | 225.2921 | 127.131081 | 114.127725 |
| TMT^6/10^ - 126 | 229.162932 | 229.2634 | 126.127726 | 114.127725 |
| TMT^6/10^ - 127 N | 229.162932 | 229.2634 | 127.124761 | 115.124760 |
| TMT^10^ - 127 C | 229.162932 | 229.2634 | 127.131081 | 114.127725 |
| TMT^10^ - 128 N | 229.162932 | 229.2634 | 128.128116 | 115.124760 |
| TMT^6/10^ - 128 C | 229.162932 | 229.2634 | 128.134436 | 116.134433 |
| TMT^6/10^ - 129 N | 229.162932 | 229.2634 | 129.131471 | 117.131468 |
| TMT^10^ - 129 C | 229.162932 | 229.2634 | 129.137790 | 116.134433 |
| TMT^10^ - 130 N | 229.162932 | 229.2634 | 130.134825 | 117.131468 |
| TMT^6/10^ - 130 C | 229.162932 | 229.2634 | 130.141145 | 118.141141 |
| TMT^6/10^ - 131 | 229.162932 | 229.2634 | 131.138180 | 119.138176 |
| TMT^11^ - 131 C | 229.169252 | 229.2634 | 131.144499 | 118.141141 |
| **Cystein Reactive TMT** |  |  |  |  |
| iodoTMT^0^ - 126 | 324.216141 | 324.4185 | 126.127725 | 114.127725 |
| iodoTMT^6^ - 126 | 329.226595 | 329.3825 | 126.127725 | 114.127725 |
| iodoTMT^6^ - 127 N | 329.226595 | 329.3825 | 127.124760 | 115.124760 |
| iodoTMT^6^ - 128 C | 329.226595 | 329.3825 | 128.134433 | 116.134433 |
| iodoTMT^6^ - 129 N | 329.226595 | 329.3825 | 129.131468 | 117.131468 |
| iodoTMT^6^ - 130 C | 329.226595 | 329.3825 | 130.141141 | 118.141141 |
| iodoTMT^6^ - 131 | 329.226595 | 329.3825 | 131.138176 | 119.138176 |
| **Carbonyl Reactive TMT** |  |  |  |  |
| aminoxyTMT^0^ - 126 | 296.2212 | 296.4084 | 126.1277 | 114.1277 |
| aminoxyTMT^6^ - 126 | 301.2317 | 301.3724 | 126.1277 | 114.1277 |
| aminoxyTMT^6^ - 127 N | 301.2317 | 301.3724 | 127.1248 | 115.1248 |
| aminoxyTMT^6^ - 128 C | 301.2317 | 301.3724 | 128.1344 | 116.1344 |
| aminoxyTMT^6^ - 129 N | 301.2317 | 301.3724 | 129.1315 | 117.1315 |
| aminoxyTMT^6^ - 130 C | 301.2317 | 301.3724 | 130.1411 | 118.1411 |
| aminoxyTMT^6^ - 131 | 301.2317 | 301.3724 | 131.1382 | 119.1382 |

[TMT 6-plex kit](https://www.thermofisher.com/order/catalog/product/90061)  
[TMT 10-plex kit](https://www.thermofisher.com/order/catalog/product/90110)  
[TMT 11-plex kit](https://www.thermofisher.com/order/catalog/product/A34808)  
[iodoTMT 6-plex kit](https://www.thermofisher.com/order/catalog/product/90103)  
[aminoxyTMT 6-plex kit](https://www.thermofisher.com/order/catalog/product/90402)

**Structural design of the TMTpro 16-plex and 18-plex (Tandem Mass Tag) Reagents**  
TMT reagents consist of three functional regions: the mass reporter, the mass normalizer and the reactive group. MS/MS fragmentation site by higher energy collision dissociation (HCD) is located between the mass reporter and mass normalizer. TMT reagents are labeled with 13C and 15N heavy isotopes at varying positions. The total number of isotopes is constant for all the reagents, but the distribution between the reporter and normalizer groups are different.

![]({{ site.baseurl }}/images/TMT_04.png)  
The table below shows the different masses added to the peptide for each of the TMTpro labels as well as the reporter ion masses.  
For TMTpro 18plex analysis, use the TMTpro 16plex monoisotopic modification mass (304.2071) for database searching.

Tandem Mass Tag (TMT) Reagents

Modification Mass  
(mono)

Modification Mass  
(avg)

HCD Reporter m/z  
(mono)

**Amine Reactive TMTpro**

TMTpro-zero - 126

295.189592

295.3773

126.127726

TMTpro-16/18plex - 126

304.207146

304.3127

126.127726

TMTpro-16/18plex - 127 N

304.207146

304.3127

127.124761

TMTpro-16/18plex - 127 C

304.207146

304.3127

127.131081

TMTpro-16/18plex - 128 N

304.207146

304.3127

128.128116

TMTpro-16/18plex - 128 C

304.207146

304.3127

128.134436

TMTpro-16/18plex - 129 N

304.207146

304.3127

129.131471

TMTpro-16/18plex - 129 C

304.207146

304.3127

129.13779

TMTpro-16/18plex - 130 N

304.207146

304.3127

130.134825

TMTpro-16/18plex - 130 C

304.207146

304.3127

130.141145

TMTpro-16/18plex - 131 N

304.207146

304.3127

131.13818

TMTpro-16/18plex - 131 C

304.207146

304.3127

131.1445

TMTpro-16/18plex - 132 N

304.207146

304.3127

132.141535

TMTpro-16/18plex - 132 C

304.207146

304.3127

132.147855

TMTpro-16/18plex - 133 N

304.207146

304.3127

133.14489

TMTpro-16/18plex - 133 C

304.207146

304.3127

133.15121

TMTpro-16/18plex - 134 N

304.207146

304.3127

134.148245

TMTpro-18plex - 134 C

304.207146

304.3127

134.154565

TMTpro-18plex - 135 N

304.207146

304.3127

135.151600

TMTpro - sh

313.231019

313.2473

135.151600

[TMTpro 16-plex kit](https://www.thermofisher.com/order/catalog/product/A44520)  
[TMTpro 18-plex kit](https://www.thermofisher.com/order/catalog/product/A52045)  
[TMTpro-134C and TMTpro-135N Label Reagents](https://www.thermofisher.com/order/catalog/product/A52046)

**Unimod links**

- UNIMOD TMT 2-plex [link](http://www.unimod.org/modifications_view.php?editid1=738)
- UNIMOD TMT 6-plex [link](http://www.unimod.org/modifications_view.php?editid1=737)
- UNIMOD cysTMT 6-plex [link](http://www.unimod.org/modifications_view.php?editid1=985)
- UNIMOD iodoTMT 6-plex [link](http://www.unimod.org/modifications_view.php?editid1=1342)
- UNIMOD TMTpro_zero [link](http://www.unimod.org/modifications_view.php?editid1=2017)
- UNIMOD TMTpro 16-plex [link](http://www.unimod.org/modifications_view.php?editid1=2016)
- UNIMOD TMTpro 18-plex [link](http://www.unimod.org/modifications_view.php?editid1=2016)
- UNIMOD TMTpro super heavy [link](http://www.unimod.org/modifications_view.php?editid1=2050)

## iTRAQ

There are multiple different kits available, including bulk etc. shop around. The iTRAQ 4-plex kits are simply called iTRAQ without the designation as to 4-plex or 8-plex, as the original kits were all 4-plex so they didn't need to differentiate. With the inception of 8-plex they had to add the "8-plex" terminology to the kits.

iTRAQ 4-plex [4352135](https://www.sigmaaldrich.com/catalog/product/sigma/4352135?lang=en&region=US) from Sigma,  
iTRAQ 8-plex [4381662](https://www.sigmaaldrich.com/catalog/product/sigma/4381662?lang=en&region=US) from Sigma,  
[iTRAQ Reagents from Sigma](https://www.sigmaaldrich.com/US/en/search/itraq?focus=products&page=1&perPage=30&sort=relevance&term=iTRAQ&type=product)  
[iTRAQ Reagents from Sciex](https://sciex.com/br/products/consumables/itraq-reagent)

![]({{ site.baseurl }}/images/iTRAQ_01.png)

What is [the mass added to the peptide for iTRAQ 4plex and 8plex?](https://sciex.com/community/support-community/faqs-and-discussions/standards-and-reagents/itraq/what-is-the-mass-added-to-the-peptide-for-itraq-4plex-and-8plex) from the FAQ's at the Sciex site.  
The table below list the masses added to the peptides per amine (N-term and Lys residues) as well as the reporter fragment m/z seen by MSMS analysis.

8-plex iTRAQ reagents

113

114

115

116

117

118

119

121

Accurate mass added to peptide

304.20536

304.20536

304.19904

304.20536

304.20536

304.19904

304.19904

304.19904

Average mass added to peptide

304.3074

304.3074

304.3081

304.3074

304.3074

304.3081

304.3081

304.3081

Monoisotopic MH+ of the reporter

113.1078

114.1112

115.1082

116.1116

117.1149

118.1120

119.1153

121.1220

4-plex iTRAQ reagents

114

115

116

117

Accurate mass added to peptide

144.105918

144.099599

144.102063

144.102063

Average mass added to peptide

144.1680

144.1688

144.1544

144.1544

Monoisotopic MH+ of the reporter

114.1112

115.1083

116.1116

117.1150

**Unimod links**

- UNIMOD iTRAQ 8-plex 113, 114, 116, 117 [link](http://www.unimod.org/modifications_view.php?editid1=730)
- UNIMOD iTRAQ 8-plex 115, 118, 119, 121 [link](http://www.unimod.org/modifications_view.php?editid1=731)
- UNIMOD iTRAQ 4-plex 114 [link](http://www.unimod.org/modifications_view.php?editid1=532)
- UNIMOD iTRAQ 4-plex 115 [link](http://www.unimod.org/modifications_view.php?editid1=533)
- UNIMOD iTRAQ 4-plex 116, 117 [link](http://www.unimod.org/modifications_view.php?editid1=214)

## SILAC Metabolic Labeling Systems {#silac}

Stable isotope labeling using amino acids in cell culture (SILAC) is a powerful method to identify and quantify relative differential changes in complex protein samples. The SILAC method uses in vivo metabolic incorporation of "heavy" 13C- or 15N-labeled amino acids into proteins followed by mass spectrometry (MS) analysis for accelerated comprehensive identification, characterization and quantitation of proteins. NeuCode amino acids enable up to four samples to be multiplexed simultaneously.

Experimental information:

- Pino et al combined SILAC with DIA quantification workflows, see [Ref 7](https://pubmed.ncbi.nlm.nih.gov/31008411/)
- Protocols from ShaoEn Ong and Matthias Mann [A practical recipe for stable isotope labeling by amino acids in cell culture (SILAC)](https://www.researchgate.net/publication/6414471_A_practical_recipe_for_stable_isotope_labeling_by_amino_acids_in_cell_culture_SILAC) Ref 8

There are multiple different kits from different vendors available:

[SILAC systems](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/protein-quantitation-mass-spectrometry/silac-metabolic-labeling-systems.html) from Thermo  
[search SILAC to find related products](https://www.sigmaaldrich.com/US/en/search/silac?focus=products&page=1&perPage=30&sort=relevance&term=SILAC&type=product) from Sigma  
[SILAC Kits and Reagents](http://shop.isotope.com/category.aspx?id=10032092) from Cambridge Isotope Laboratories  
there are likely other I missed, so do your homework..

Software tools for SILAC quantification

- The [Trans-Proteomic Pipeline (TPP)](http://www.tppms.org/) is a complete and mature suite of free and open-source software tools for MS data representation, MS data visualization, peptide identification and validation, protein identification, quantification, and annotation, data storage and mining, and biological inference. The [Automated Statistical Analysis on Protein Ratio (ASAPRatio)](http://tools.proteomecenter.org/wiki/index.php?title=Software:ASAPRatio) and [XPRESS](http://tools.proteomecenter.org/wiki/index.php?title=Software:XPRESS) software tools are part of the TPP calculates the relative abundance of proteins, such as those obtained from stable isotope labeled precursors, by reconstructing the light and heavy elution profiles of the precursor ions and determining the elution areas of each peak

- [Skyline](https://skyline.ms/project/home/software/Skyline/begin.view) is also being used to integrate SILAC data.  
  Check [Skyline Webinar 12: Isotope Labeled Standards in Skyline](https://skyline.ms/project/home/software/Skyline/events/2015%20Webinars/Webinar%2012/begin.view?) for more information  
  You may need to define a new Isotope Label Type: Click the "Isotope label type" dropdown list in the Peptide Settings - Modifications tab, and click the \<Edit list\...\> element. Then specify your isotope label types in a line separated list in the form that appears. Once you have your two label types, you need to make sure that Arg10, Lys8 are checked when you have "heavy" selected in the list, and Arg6, Lys4 are checked when you have "medium" selected. All of these modifications will need to be added to the "Isotope modifications" list. The "Internal standard type" list will change to a check list (from a dropdown list), which allows you to specify multiple internal standard types. You would just make sure nothing is checked in this list for a SILAC experiment, which is the equivalent to "None" in the dropdown list. For targeted proteomics experiments for sample preparations involving both AQUA labeled peptides and 15N labeled proteins, both get checked as internal standard types.

- MaxQuant  
  MaxQuant is a quantitative proteomics software package designed for analyzing large mass-spectrometric data sets. It is specifically aimed at high-resolution MS data. Several labeling techniques as well as label-free quantification are supported. MaxQuant is freely available and can be downloaded from this site.  
  [MaxQuant quantitative proteomics software package](https://www.maxquant.org/)
- Perseus  
  [for interpreting protein quantification, interaction and post-translational modification data](https://www.maxquant.org/perseus/)

- PEAKS Q (limited free trial)  
  [PEAKS Q SILAC Quantification Algorithms](https://www.bioinfor.com/silac-quantification/)

## AQUA or Absolute QUAntitation {#aqua}

Absolute QUAntitation (AQUA) in targeted proteomics analyses is performed by spiking complex samples with stable isotope-labeled synthetic peptides that act as internal standards for specific peptides.  
These heavy peptides are designed to be identical to tryptic peptides generated by sample digestion, so that they co-elute with the target peptide and are concomitantly analyzed by MS/MS  
But AQUA-grade peptides are costly because of their high quality and purity.

There are multiple vendors that provide AQUA peptides:

[Peptide Synthesis](https://www.elimbio.com/services/peptide-synthesis/) Elim Biopharm  
[AQUA peptides](https://www.sigmaaldrich.com/life-science/molecular-biology/molecular-biology-products.html?TablePage=21185103) from Sigma  
[Peptides for Targeted Quantitation](https://www.thermofisher.com/us/en/home/life-science/protein-biology/peptides-proteins/custom-peptide-synthesis-services/peptides-targeted-quantitation.html) from Thermo  
[PeptiQuant Assay Kits](https://www.isotope.com/applications/subsubapplication.cfm?ssid=PeptiQuant%E2%84%A2_6) from Cambridge Isotope Laboratories  
there are likely other I missed, so do your homework..

**Data analysis**  
You can use [Skyline](https://skyline.ms/project/home/software/Skyline/begin.view) to estimate the absolute molecular quantities of peptides in your experiments.  
[Absolute Quantification Tutorial](https://skyline.ms/wiki/home/software/Skyline/page.view?name=tutorial_absolute_quant)  
[Webinar #13: Calibrated Quantification with Skyline](https://skyline.ms/project/home/software/Skyline/events/2016%20Webinars/Webinar%2013/begin.view?)

## Heavy labeled protein standards {#labeledprotein}

Spiking heavy labeled ApoA-I as internal standard has been shown to be useful for accurate quantitation of this protein and/or other proteins relative to ApoA-I in a biological sample in a bottom-up proteomic workflow.

There are multiple vendors that provide heavy labeled proteins:

[Heavy-Labeled MS Proteins Standards](http://shop.isotope.com/category.aspx?id=10032905) from Cambridge Isotope Laboratories  
[SILu Prot Protein Standards for Quantitative Mass Spectrometry](https://www.sigmaaldrich.com/life-science/biochemicals/biochemical-products.html?TablePage=120049669) from Sigma  
[1-Step Heavy Protein IVT Kit](https://www.thermofisher.com/order/catalog/product/88331?SID=srch-srp-88331) from Thermo  
there are likely other I missed, so do your homework..

## Chemical labeling {#chemicallabeling}

Chemical stable isotope labeling is advantageous in that it uses inexpensive reagents and is applicable to virtually any sample.

## References

1.    
    **TMT labeling of small amounts of peptides**
2.  TMT Labeling for the Masses: A Robust and Cost-efficient, In-solution Labeling Approach Zecha J, Satpathy S, Kanashova T, Avanessian SC, Kane MH, Clauser KR, Mertins P, Carr SA, Kuster B. *Mol Cell Proteomics.* 2019 Jul;18(7):1468-1478. doi: 10.1074/mcp.TIR119.001385. Epub 2019 Apr 9. [link](https://pubmed.ncbi.nlm.nih.gov/30967486/)
3.  Sample Preparation for Relative Quantitation of Proteins Using Tandem Mass Tags (TMT) and Mass Spectrometry (MS) Erdjument-Bromage H, Huang FK, Neubert TA. *Methods Mol Biol.* 2018;1741:135-149. doi: 10.1007/978-1-4939-7659-1_11. [link](https://pubmed.ncbi.nlm.nih.gov/29392697/)
4.  Streamlined Protocol for Deep Proteomic Profiling of FAC-sorted Cells and Its Application to Freshly Isolated Murine Immune Cells Myers SA, Rhoads A, Cocco AR, Peckner R, Haber AL, Schweitzer LD, Krug K, Mani DR, Clauser KR, Rozenblatt-Rosen O, Hacohen N, Regev A, Carr SA. *Mol Cell Proteomics.* 2019 May;18(5):995-1009. doi: 10.1074/mcp.RA118.001259. Epub 2019 Feb 21. [link](https://pubmed.ncbi.nlm.nih.gov/30792265/)

    **TMTpro**
5.  TMTpro Reagents: A Set of Isobaric Labeling Mass Tags Enables Simultaneous Proteome-Wide Measurements Across 16 Samples Li J, Van Vranken JG, Pontano Vaites L, Schweppe DK, Huttlin EL, Etienne C, Nandhikonda P, Viner R, Robitaille AM, Thompson AH, Kuhn K, Pike I, Bomgarden RD, Rogers JC, Gygi SP, Paulo JA. *Nat Methods.* 2020 Apr;17(4):399-404. doi: 10.1038/s41592-020-0781-4. Epub 2020 Mar 16. [link](https://pubmed.ncbi.nlm.nih.gov/32203386/)
6.  TMTpro: Design, Synthesis, and Initial Evaluation of a Proline-Based Isobaric 16-Plex Tandem Mass Tag Reagent Set Thompson A, Wölmer N, Koncarevic S, Selzer S, Böhm G, Legner H, Schmid P, Kienle S, Penning P, Höhle C, Berfelde A, Martinez-Pinna R, Farztdinov V, Jung S, Kuhn K, Pike I. *Nat Methods.* 2020 Apr;17(4):399-404. doi: 10.1038/s41592-020-0781-4. Epub 2020 Mar 16. [link](https://pubmed.ncbi.nlm.nih.gov/31738517/)
7.  A Triple Knockout Isobaric-Labeling Quality Control Platform With an Integrated Online Database Search Gygi JP, Ramin Rad, Navarrete-Perea J, Younesi S, Gygi SP, Paulo JA. *Nat Methods.* 2020 Apr;17(4):399-404. doi: 10.1038/s41592-020-0781-4. Epub 2020 Mar 16. [link](https://pubmed.ncbi.nlm.nih.gov/32202424/)

    **SILAC**
8.  Improved SILAC quantification with data independent acquisition to investigate bortezomib-induced protein degradation Pino LK, Baeza J, Lauman R, Schilling B, Garcia BA. *J Proteome Res.* 2021 Apr 2;20(4):1918-1927. doi: 10.1021/acs.jproteome.0c00938. Epub 2021 Mar 25. [link](https://www.ncbi.nlm.nih.gov/labs/pmc/articles/PMC8256668/)
9.  Stable Isotope Labeling by Amino Acids in Cell Culture, SILAC, as a Simple and Accurate Approach to Expression Proteomics Ong SE, Blagoev B, Kratchmarova I, Kristensen DB, Steen H, Pandey A, Mann M. *Mol Cell Proteomics.* 2002 May;1(5):376-86. doi: 10.1074/mcp.m200025-mcp200. [link](https://pubmed.ncbi.nlm.nih.gov/12118079/)
10. Comparing SILAC- and stable isotope dimethyl-labeling approaches for quantitative proteomics. Lau HT, Suh HW, Golkowski M, Ong SE. *J Proteome Res.* 2014 Sep 5;13(9):4164-74. doi: 10.1021/pr500630a. Epub 2014 Aug 12. [link](https://pubmed.ncbi.nlm.nih.gov/25077673/)
11. An Overview of Advanced SILAC-Labeling Strategies for Quantitative Proteomics Terzi F, Cambridge S. *Methods Enzymol.* 2017;585:29-47. doi: 10.1016/bs.mie.2016.09.014. Epub 2017 Jan 12. [link](https://pubmed.ncbi.nlm.nih.gov/28109435/)

    **AQUA and Heavy labeled protein standards**  
12. Multiple-Reaction Monitoring-Mass Spectrometric Assays Can Accurately Measure the Relative Protein Abundance in Complex Mixtures. Hoofnagle AN, Becker JO, Oda MN, Cavigiolio G, Mayer P, Vaisar T. *Clin Chem.* 2012 Apr;58(4):777-81. Epub 2012 Feb 3. [link](http://www.ncbi.nlm.nih.gov/pubmed/22307200)

    **Chemical labeling**  
13. Multiplex Peptide Stable Isotope Dimethyl Labeling for Quantitative Proteomics Boersema PJ, Raijmakers R, Lemeer S, Mohammed S, Heck AJ. *Nat Protoc.* 2009;4(4):484-94. doi: 10.1038/nprot.2009.21. [link](https://pubmed.ncbi.nlm.nih.gov/19300442/)
14. Triplex protein quantification based on stable isotope labeling by peptide dimethylation applied to cell and tissue lysates. Boersema PJ, Aye TT, van Veen TA, Heck AJ, Mohammed S. *Proteomics.* 2008 Nov;8(22):4624-32. doi: 10.1002/pmic.200800297. [link](https://pubmed.ncbi.nlm.nih.gov/18850632/)
15. Differential Stable Isotope Labeling of Peptides for Quantitation and De Novo Sequence Derivation Goodlett DR, Keller A, Watts JD, Newitt R, Yi EC, Purvine S, Eng JK, von Haller P, Aebersold R, Kolker E. *Rapid Commun Mass Spectrom.* 2001;15(14):1214-21. doi: 10.1002/rcm.362. [link](https://pubmed.ncbi.nlm.nih.gov/11445905/)

------------------------------------------------------------------------

- [Heavy labeled protein standards](#labeledprotein)
- [Chemical labeling](#chemicallabeling)
- [References](#references)
