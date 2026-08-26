---
title: "Data Analysis Tools"
permalink: /tools/
layout: single
toc: true
toc_sticky: true
classes: no_sidebar
author_profile: false
---

*A collection of computational tools and links*

### Online Tools/Calculators

- [MS/MS fragmentation calculator](https://proteomicsresource.gs.washington.edu/cgi-bin/fragment.cgi)
- [Protein sequence digestion calculator](https://proteomicsresource.gs.washington.edu/cgi-bin/digest.cgi)
- [Isotope distribution calculator](https://proteomicsresource.gs.washington.edu/cgi-bin/calcisotopes.cgi)
- [Elemental mass calculator](https://proteomicsresource.gs.washington.edu/cgi-bin/element.cgi)
- [Peptide motif finder](https://proteomicsresource.gs.washington.edu/cgi-bin/motif_search.cgi)
- [Lorikeet Spectrum viewer](https://proteomicsresource.washington.edu/lorikeet/)
- [Koina (Prosit, ms2pip, AlphaPeptDeep) spectrum prediction viewer](https://proteomicsresource.washington.edu/lorikeet/html/specview-koina.html)
- [Table of relevant masses (amino acids, elements)]({{ site.baseurl }}/tools/masses/)

### MS/MS database search tools

Various MS/MS database search tools are available at our UWPR systems. Search results are typically processed through the Trans-Proteomic Pipeline.

- [Comet](https://uwpr.github.io/Comet/) ([local linux commands]({{ site.baseurl }}/tools/comet_commands/))
- [X!Tandem]({{ site.baseurl }}/tools/xtandem/)
- [Crux](http://cruxtoolkit.sourceforge.net) ([local run info]({{ site.baseurl }}/tools/crux/))

### Software tools and protocols from other resources:

- [Skyline: targeted proteomics environment](https://skyline.ms/project/home/software/Skyline/begin.view)
- [XLink-DB: database and software tools for storing and visualizing protein interaction topology data](http://brucelab.gs.washington.edu/xlinkdb/)
- [Proxl Protein Cross-Linking Database](http://proxl-ms.org)

### CrossLinking

- [ProXL](http://proxl-ms.org)
- [XlinkDB](http://xlinkdb.gs.washington.edu/xlinkdb/)

### Miscellaneous

- [A quick primer]({{ site.baseurl }}/tools/primer/) on how to interpret peptide ID results processed at UWPR
- [Simple .ms2 to .dta command line converter (zip of source + binaries)](https://proteomicsresource.washington.edu/docs/ms22dta.zip)
- [Simple .ms2 to .mgf command line converter (C source)]({{ site.baseurl }}/docs/ms22mgf.c)
- [Here are TPP Libra condition files](https://proteomicsresource.washington.edu/docs/libra_condition_files.zip) for iTRAQ and TMT.
- [ReAdW under Wine]({{ site.baseurl }}/tools/wine/) Thermo to mzXML conversions under linux.
- [RawMeat](https://proteomicsresource.washington.edu/tools/RawMeat_1007.exe) is a nice Thermo raw file diagnostic tool developed by the now defunct Vast Scientific. RawMeat requires Thermo's MSFileReader library to be installed. MSFileReader can be downloaded by creating an account with [ThermoFischer Scientific](https://thermo.flexnetoperations.com/control/thmo/login). Once registered you will find the software under "Other Software Releases".
- [Instructions on running Abacus]({{ site.baseurl }}/tools/Abacus/) spectral count tool on UWPR systems. Here is [ChatGPT's description of what ADJNSAF is]({{ site.baseurl }}/tools/adjnsaf/).
- [zip file containing contaminant protein sequences](https://proteomicsresource.washington.edu/tools/uniprot.contam.zip) based on the [GPM's cRAP database](https://www.thegpm.org/crap/). Updated 2022/06/21 to current UniProt sequences. Separated into bovine, human, yeast, chicken, E. coli, and others.
- Historic public datasets from ISB. These both include 18 protein mixture datasets as published in [Keller et al., Omics, 2002](https://pubmed.ncbi.nlm.nih.gov/12143966/) ([dataset1](https://proteomicsresource.washington.edu/tools/18MixPublicDatasets/2002_Omics_mixture/)) and [Klimek et al., JPR, 2008](https://pubmed.ncbi.nlm.nih.gov/17711323/) ([dataset2](https://proteomicsresource.washington.edu/tools/18MixPublicDatasets/StandardProteinMix/)). These files are not posted online for direct download in order to avoid constant download from data crawlers so contact us for a link to the files.

### MS/MS database search info:

- Search engine comparisons: [link2](http://www3.interscience.wiley.com/journal/110574802/abstract), [link3 (only OMSSA searched 3+ spectra!)](http://www.mcponline.org/content/6/9/1599.full), [link4](http://www.ncbi.nlm.nih.gov/pmc/articles/PMC2801774/), [link5](http://pubs.acs.org/doi/abs/10.1021/pr900780s), [link6](http://pubs.acs.org/doi/abs/10.1021/pr200052c)
- Be wary of searching with too narrow a precursor tolerance (even if your mass spectrometer can measure that accurately). It's an issue with all search tools. [This paper nicely touches on the problem](http://pubs.acs.org/doi/abs/10.1021/pr101003r) and [here's a rebuttal](http://pubs.acs.org/doi/abs/10.1021/pr200726c). And Phil Wilmarth has [a nice blog post](https://pwilmart.github.io/blog/2021/04/22/Parent-ion-tolerance) about the benefits of using a wide precursor window.
- Be wary of multiple-stage searches like X!Tandem's refinement mode or the hot-spot searching that Paragon does. Not that these searches are innately bad but rather one should be educated on the search strategy and what it means. If one searches a bazillion spectra against subset proteins X, Y, and Z in the 2nd pass, don't be surprised to find many matches (real or spurious) to proteins X, Y and Z. Think of it as a self-fulfilling prophecy. Here's an interesting paper and follow-up touching on the problem and proposing solutions to the target-decoy strategy with these types of searches: [paper1](http://pubs.acs.org/doi/abs/10.1021/pr900256v), [paper2](http://pubs.acs.org/doi/abs/10.1021/pr101143m)

### UWPR computing resources

The computing hardware these tools run on is described on the
[Computing Resources page]({{ site.baseurl }}/facility/computing/).
