---
title: "Minpeaks"
permalink: /misc/minpeaks/
---

## Effect of minimum peaks count

2011/01/28. Question: what is the "right" setting for minimum peaks count in a spectrum? For example should we filter out all spectrum that contain less than X number of peaks? The right answer will vary with each search engine i.e. search engine A performs better if the minimum peak count is set to a higher value whereas search engine B performs better if the filter is set to a lower value. Optimal values could even be search specific i.e. a function of how a search is performed such as using accurate mass on the fragment ions.

As a non-conclusive and very brief test of this (controlled by the "minimum_peaks" parameter in UWPR SEQUEST), I evaluated two LTQ-Orbitrap yeast runs composed of \~11,000 PSMs total. These were searched against a yeast database and a separate reverse decoy database (semi-tryptic search, +- 1 Da precursor tolerance). Four set of searches were performed using the following minimum peak count setting to filter out spectra: 5, 30, 75, and 100.

Searches were evaluated in two ways. First, results were analyzed by Percolator version 1.17. At a q-value cutoff of \<= 0.01, the resulting number of unique peptide identifications for 5, 30, 75, and 100 minimum peaks, respectively, were 1063, 1040, 1031, 1016. Unique peptide identifications gradually decrease as the minimum peak count filter increases.

A second analysis uses the same set of search results but plots FDR as a function of expectation score. Here's the resulting plot showing a minimum peak count of 5 doing a little better than the other settings. Curiously the 30, 75, and 100 plots all overlap; I did double check and the searches were run correctly. ![]({{ site.baseurl }}/misc/minpeaks-evalue.png)

So for *this* dataset using *this* analysis, it turns out that a conservative minimum peaks count filter works best. Differences I'm seeing are minimal though and may not be statistically significant. There could be some optimal value between 5 and 30 but I'm not interested enough to test these.

[Supporting files](https://proteomicsresource.washington.edu/misc/minpeaks.zip) (search results, Percolator output).
