---
title: "Stable Isotope Labeling Strategies"
permalink: /resources/knowledgebase/isotopic_labeling/
redirect_from:
  - /methods/protocols03/isotopic_labeling/
layout: single
toc: true
toc_sticky: true
classes: no_sidebar
author_profile: false
---

*Protein Quantitation using Mass Spectrometry*

With stable isotope labeling, one sample is derivatized with a "light" version of a chemical tag while another sample is labeled with a version of the same tag that incorporates a "heavy" isotope. The samples are then mixed together and analyzed in the same experiment. Identical compounds from the different samples co-elute as pairs of peaks and can be distinguished by the mass difference between the heavy and light isotope labels. Quantitation is performed on the pairs of peaks in the MS data, and identification is performed using the MS/MS fragment data. This technique eliminates much of the bias that can be introduced when comparing peaks between different experiments, since the data from all samples are collected within the same experiment.

Stable isotope labeling by amino acids in cell culture (SILAC) produces a mass difference between the molecular weights of differentially labeled peptides, which increases the complexity in MS space and limits an experiment to comparing only 2 or 3 sample types.

Tandem mass tags (TMT) are isobaric multiplexing tags. All versions of the tag have the same molecular mass, but the positions of the heavy and light isotopes are adjusted to shift the mass of a "reporter ion" region and a "balance mass" region within the compound. Since all versions of the reagent are identical in molecular weight, the same peptides originating from different samples have the same mass in MS space regardless of which reporter ion is attached. Upon fragmentation, the reporter ions can be clearly distinguished; the identity of the peptide is determined from the larger MS/MS peptide fragments, and the quantity of that peptide in each biological sample is determined from the areas of the respective reporter ion peaks.

*Third-party products appear on this page as suggestions only. They do not constitute an endorsement by the UWPR.*

## TMT, Tandem Mass Tag {#tmt}

There are multiple kits available (2-plex, 6-plex, 10-plex, 16-plex, and 18-plex), including bulk reagents, so you can adjust your order to your specific experimental needs.

- [TMT Quantitation Overview](https://www.thermofisher.com/us/en/home/industrial/mass-spectrometry/proteomics-mass-spectrometry/quantitative-proteomics-mass-spectrometry/tmt-quantitation.html)
- [TMT kits from Thermo](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/protein-quantitation-mass-spectrometry/tandem-mass-tag-systems.html)
- Use in combination with the [EasyPep MS Sample Prep Kits](https://www.thermofisher.com/order/catalog/product/A45733) or the [PreOmics iST-NHS kit](https://www.preomics.com/products/ist-nhs), a fast and reproducible sample preparation for chemical labeling

**Procedure summary for MS experiments with TMT isobaric mass tagging reagents**

Protein extracts isolated from cells or tissues are reduced, alkylated, and digested. Samples are labeled with the TMT reagents and then mixed before sample fractionation and cleanup. Labeled samples are analyzed by high resolution Orbitrap LC-MS/MS, followed by data analysis to identify peptides and quantify the relative reporter ion abundances.

![]({{ site.baseurl }}/assets/images/TMT_02.png)

**Structural design of the TMT 6-plex and 10-plex reagents**

TMT reagents consist of three functional regions: the mass reporter, the mass normalizer, and the reactive group. The MS/MS fragmentation sites for higher energy collision dissociation (HCD) and electron transfer dissociation (ETD) are located between the mass reporter and the mass normalizer. TMT reagents are labeled with <sup>13</sup>C and <sup>15</sup>N heavy isotopes at varying positions. The total number of isotopes is constant for all the reagents, but the distribution between the reporter and normalizer groups is different. There are also different reactive groups available: amine reactive groups label primary amines such as the N-terminus and Lys side chains, the sulfhydryl reactive group labels Cys side chains, and carbonyl reactive groups label carbonyl containing molecules like carbohydrates and steroids.

![]({{ site.baseurl }}/assets/images/TMT_03.png)

**Structural design of the TMTpro 16-plex and 18-plex reagents**

TMTpro reagents also consist of the three functional regions, with the HCD fragmentation site located between the mass reporter and the mass normalizer. The reagents are labeled with <sup>13</sup>C and <sup>15</sup>N heavy isotopes at varying positions; the total number of isotopes is constant for all the reagents, but the distribution between the reporter and normalizer groups is different.

![]({{ site.baseurl }}/assets/images/TMT_04.png)

For TMTpro 18-plex analysis, use the TMTpro 16-plex monoisotopic modification mass (304.2071) for database searching.

**Unimod entries**

- [TMT 2-plex](http://www.unimod.org/modifications_view.php?editid1=738)
- [TMT 6-plex](http://www.unimod.org/modifications_view.php?editid1=737)
- [cysTMT 6-plex](http://www.unimod.org/modifications_view.php?editid1=985)
- [iodoTMT 6-plex](http://www.unimod.org/modifications_view.php?editid1=1342)
- [TMTpro-zero](http://www.unimod.org/modifications_view.php?editid1=2017)
- [TMTpro 16-plex and 18-plex](http://www.unimod.org/modifications_view.php?editid1=2016)
- [TMTpro super heavy](http://www.unimod.org/modifications_view.php?editid1=2050)

## SILAC Metabolic Labeling Systems {#silac}

Stable isotope labeling using amino acids in cell culture (SILAC) is a powerful method to identify and quantify relative differential changes in complex protein samples. The SILAC method uses in vivo metabolic incorporation of "heavy" <sup>13</sup>C- or <sup>15</sup>N-labeled amino acids into proteins, followed by mass spectrometry analysis for accelerated comprehensive identification, characterization, and quantitation of proteins. NeuCode amino acids enable up to four samples to be multiplexed simultaneously.

Experimental information:

- Pino et al. combined SILAC with DIA quantification workflows ([Ref 1](#ref1))
- A practical recipe for SILAC from Ong and Mann ([Ref 2](#ref2))

There are multiple kits from different vendors available:

- [SILAC systems](https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/protein-quantitation-mass-spectrometry/silac-metabolic-labeling-systems.html) from Thermo
- [Search SILAC to find related products](https://www.sigmaaldrich.com/US/en/search/silac?focus=products&page=1&perPage=30&sort=relevance&term=SILAC&type=product) from Sigma
- SILAC kits and reagents from [Cambridge Isotope Laboratories](https://www.isotope.com/)
- There are likely others we missed, so do your homework

Software tools for SILAC quantification:

- The [Trans-Proteomic Pipeline (TPP)](http://www.tppms.org/) is a complete and mature suite of free and open-source software tools for MS data representation and visualization, peptide identification and validation, protein identification, quantification and annotation, data storage and mining, and biological inference. The [ASAPRatio](http://tools.proteomecenter.org/wiki/index.php?title=Software:ASAPRatio) and [XPRESS](http://tools.proteomecenter.org/wiki/index.php?title=Software:XPRESS) tools that are part of the TPP calculate the relative abundance of proteins, such as those obtained from stable isotope labeled precursors, by reconstructing the light and heavy elution profiles of the precursor ions and determining the elution area of each peak.
- [Skyline](https://skyline.ms/project/home/software/Skyline/begin.view) can also be used to integrate SILAC data.
- [MaxQuant](https://www.maxquant.org/) is a quantitative proteomics software package designed for analyzing large, high-resolution MS data sets. Several labeling techniques as well as label-free quantification are supported. [Perseus](https://www.maxquant.org/perseus/) complements it for interpreting protein quantification, interaction, and post-translational modification data.
- [PEAKS Q](https://www.bioinfor.com/silac-quantification/) provides SILAC quantification algorithms (limited free trial).

## AQUA or Absolute QUAntitation {#aqua}

Absolute quantitation (AQUA) in targeted proteomics analyses is performed by spiking complex samples with stable isotope labeled synthetic peptides that act as internal standards for specific peptides. These heavy peptides are designed to be identical to tryptic peptides generated by sample digestion, so that they co-elute with the target peptide and are concomitantly analyzed by MS/MS. AQUA-grade peptides are costly because of their high quality and purity.

There are multiple vendors that provide AQUA peptides:

- [Peptide synthesis](https://www.elimbio.com/services/peptide-synthesis/) from Elim Biopharm
- [AQUA peptides](https://www.sigmaaldrich.com/life-science/molecular-biology/molecular-biology-products.html?TablePage=21185103) from Sigma
- [Peptides for targeted quantitation](https://www.thermofisher.com/us/en/home/life-science/protein-biology/peptides-proteins/custom-peptide-synthesis-services/peptides-targeted-quantitation.html) from Thermo
- PeptiQuant assay kits from [Cambridge Isotope Laboratories](https://www.isotope.com/)
- There are likely others we missed, so do your homework

For data analysis, you can use [Skyline](https://skyline.ms/project/home/software/Skyline/begin.view) to estimate the absolute molecular quantities of peptides in your experiments.

## Heavy labeled protein standards {#labeledprotein}

Spiking heavy labeled ApoA-I as an internal standard has been shown to be useful for accurate quantitation of this protein, or of other proteins relative to ApoA-I, in a biological sample in a bottom-up proteomic workflow.

There are multiple vendors that provide heavy labeled proteins:

- Heavy-labeled MS protein standards from [Cambridge Isotope Laboratories](https://www.isotope.com/)
- [SILu Prot protein standards for quantitative mass spectrometry](https://www.sigmaaldrich.com/life-science/biochemicals/biochemical-products.html?TablePage=120049669) from Sigma
- [1-Step Heavy Protein IVT Kit](https://www.thermofisher.com/order/catalog/product/88331) from Thermo
- There are likely others we missed, so do your homework

## Chemical labeling {#chemicallabeling}

Chemical stable isotope labeling is advantageous in that it uses inexpensive reagents and is applicable to virtually any sample.

## References

<div class="references" markdown="1">

1. <a id="ref1"></a>Improved SILAC quantification with data-independent acquisition to investigate bortezomib-induced protein degradation. Pino LK, Baeza J, Lauman R, Schilling B, Garcia BA. J Proteome Res. 2021. [PubMed link](https://pubmed.ncbi.nlm.nih.gov/33764077/)
2. <a id="ref2"></a>A practical recipe for stable isotope labeling by amino acids in cell culture (SILAC). Ong SE, Mann M. Nat Protoc. 2006. [PubMed link](https://pubmed.ncbi.nlm.nih.gov/17406521/)

</div>
