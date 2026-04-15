---
title: "DIA"
permalink: /protocols05/DIA/
---

*Data Independent Acquisition*

Data Independent Acquisition (DIA) strategies acquire MS/MS scans systematically and independent of precursor information. Unlike targeted parallel reaction monitoring (PRM) and selected reaction monitoring (SRM) strategies, no prior knowledge of target peptides/proteins is required for DIA and thus requires less investment in assay development compared to targeted proteomics applications.

There are various strategies how to acquire and analyze DIA data. In principal data is acquired by isolating and fragmenting a certain m/z mass windows and acquiring all the fragment ions in one scan. Typically the isolation windows are selected to cover the tryptic peptide m/z range in certain time frame. There are many factors to be considered, like instrument type, scan speed, chromatography and data analysis tools. Depending on the isolated m/z range the fragmentation spectra are chimera of multiple precursor ions and the increased MS/MS spectra complexity has been a major challenge for DIA data analysis tools.  
Targeted approaches like PRM and SRM analysis are limited to only a handful of peptides without acquisition scheduling or tens to hundreds of peptides per LCMS run with scheduling. DIA on the other hand allows the measurement of much larger numbers of peptides (thousands or even whole proteomes).

For more information, check out the documentation and tutorials on the Skyline site: [Slides Explaining Data Independent Acquisition](https://skyline.gs.washington.edu/labkey/wiki/home/software/Skyline/page.view?name=Slides%20Explaining%20Data%20Independent%20Acquisition)

![]({{ site.baseurl }}/images/DIA_01a.png)

Figure 1: DIA acquisition strategy. Precursor ions are isolated in small isolation windows (typically 5-20 m/z) and fragmented. Fragment ions are analyzed in MS/MS scans spanning the full m/z range. Total Cycle Time is the length of time it takes to go through all the isolation windows and cover the m/z range. Note: ion injection (Fill or ion time) happens in parallel with Orbitrap MS/MS fragment detection, to achieve the fastest cycle time, the max fill time should not exceed the Orbitrap scan time. Full MS scans between the DIA MS/MS scans are optional.

## DIA assay development

There are several excellent webinars and tutorials provided by the Skyline Team.  
[Webinars](https://skyline.ms/wiki/home/software/Skyline/page.view?name=webinars) #2, #14 and #15 cover PRM method development and analysis  
Here's a link to all the Skyline [Tutorials](https://skyline.ms/wiki/home/software/Skyline/page.view?name=tutorials), including the Data Independent Acquisition tutorial.

**DIA isolation schema: Things to consider**

For Thermo Instruments you need to specify the center mass of the isolation window as well as the isolation width. The easiest way to generate an isolation inclusion list is to use Skyline. If you plan to use Skyline to analyze your data, it makes most sense to generate your inclusion list in Skyline that way you have the correct settings when you go to import your data. The Fusion/Lumos software will populate the isolation list for you, all you need is the start and end m/z and the isolation width.

- Type of Instrument (scan speed, resolution, fragmentation etc)
- Precursor m/z range: e.g. if you are working with tryptic peptides it is reasonable to cover a m/z range of 400-900
- Isolation width: narrower isolation widths reduce the MS/MS spectra complexity and increase the sensitivity, but increase cycle time
- Chromatography, i.e. peak width
- Cycle time: The total cycle time is defined by the time it takes to cycle through your entire inclusion list, i.e. cover the isolation m/z range. Ultimately, this cycle time determines how many scans across the chromatographic peak are obtained.  
  e.g. for about 30 sec wide chromatographic peaks, if you want 10 scans across the peak, the total cycle time should not exceed 3 sec  
  Thought: you can always run the same sample twice, e.g. cover 400-700 m/z in the first run and 700-1000 m/z in the second run
- Full MS scans are optional but can be very useful for quantification and identification

Figure 2 shows how to estimate total cycle time based on the Orbitrap resolving power (for the Fusion and QExactivePlus) and the number of scans. To obtain the fastest cycle time for any given resolution, the maximum allowed fill time should not exceed the detection time, because the instrument fills the HCD cell while the Orbitrap mass analyzer is acquiring the MS2 scan. It is important to understand that higher resolution does not always result in better mass accuracy. But higher resolution increases your ability to distinguish between m/z ions. As you can see in the table below, there is a trade of higher resolution with time. On the QE 17,500 is the lowest resolution setting, with the fastest scan speed of \~13 Hz, the highest resolution setting is 140K, on the QE plus with enhanced resolution mode its 280K with the lowest scan speed. Also note the theoretical scan speed are seldom achieved (we see about 12 Hz on the QE+, 17 Hz on the Fusion and 18 Hz on the Lumos at the lowest resolution).

![]({{ site.baseurl }}/images/DIA_02a.png)

<table class="dia-table">
  <thead>
    <tr>
      <th colspan="3" style="text-align:center">Fusion Lumos</th>
      <th rowspan="2" style="text-align:center">Transient<br>length [ms]</th>
      <th colspan="3" style="text-align:center">QE plus</th>
    </tr>
    <tr>
      <th style="text-align:center">Res. at m/z 200</th>
      <th style="text-align:center">"Free" fill time [ms]</th>
      <th style="text-align:center">Approx. scan speed [Hz]</th>
      <th style="text-align:center">Res. at m/z 200</th>
      <th style="text-align:center">"Free" fill time [ms]</th>
      <th style="text-align:center">Approx. scan speed [Hz]</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>15,000</td><td>22</td><td>18/20</td><td>32</td><td></td><td></td><td></td></tr>
    <tr><td>30,000</td><td>54</td><td>15</td><td>64</td><td>17,500</td><td>50</td><td>13</td></tr>
    <tr><td>60,000</td><td>118</td><td>7.5</td><td>128</td><td>35,000</td><td>110</td><td>7</td></tr>
    <tr><td>120,000</td><td>246</td><td>4</td><td>256</td><td>70,000</td><td>240</td><td>3</td></tr>
    <tr><td>240,000</td><td>502</td><td>2</td><td>512</td><td>140,000</td><td>500</td><td>1.5</td></tr>
    <tr><td></td><td></td><td></td><td>1064</td><td>280,000</td><td>1000</td><td>&lt;1</td></tr>
    <tr><td>450,000</td><td>1014</td><td>&lt;1</td><td>1024</td><td></td><td></td><td></td></tr>
  </tbody>
</table>

1.  Sampling rate across the chromatographic peak: ideally for quantifications 10-15 point across the chromatographic peak should be acquired. If the average peak width is 30 seconds a duty cycle of 2-3 sec should be targeted.
2.  Ion fill time should be kept below the scan time to maximize cycle time (see table above). On the Fusion/Lumos the ion time can be customized for every precursor (i.e. for very low abundant precursors the max ion times can be set higher to ensure the specified AGC target is reached for those very low abundant ions while keeping the max IT for all the other ions at the "free" fill time).

Guide to setup DIA method on QE on the Skyline site: [DIA Methods for Thermo Q Exactive](https://skyline.gs.washington.edu/labkey/wiki/home/software/Skyline/page.view?name=dia_qexactive)

For additional resources search the Planet Orbitrap library: [Planet Orbitrap](https://planetorbitrap.com/)

**Skyline a free software tool to build and analyze SRM, PRM and DIA assays**

Skyline is a freely-available Windows client application for building Selected Reaction Monitoring (SRM) / Multiple Reaction Monitoring (MRM), Parallel Reaction Monitoring (PRM - Targeted MS/MS and DIA/SWATH) and targeted DDA with MS1 quantitative methods and analyzing the resulting mass spectrometer data. It aims to employ cutting-edge technologies for creating and iteratively refining targeted methods for large-scale proteomics studies.

[![skyline]({{ site.baseurl }}/images/Skyline.png)Click here](https://skyline.gs.washington.edu/labkey/project/home/software/Skyline/begin.view) to go to the skyline website to download the latest version.

## Glossary

- **SRM**  
  Selected Reaction Monitoring  
  Method used in tandem mass spectrometry in which an ion of a particular mass is selected in the first stage of a tandem mass spectrometer and an ion product of a fragmentation reaction of the precursor ion is selected in the second mass spectrometer stage for detection
- **MRM**  
  Multiple Reaction Monitoring  
  The application of SRM to multiple product ions from one or more precursor ions
- **PRM**  
  Parallel Reaction Monitoring  
  targeted MS/MS analyses, in which full fragment ion spectrum of each precursors in a target list is recorded continuously throughout the entire LC separation
- **Transition**  
  Precursor/product ion pair
- **Specificity**  
  Ability to discriminate and quantify a particular protein sequence in a mixture without interferences from other components (Ref. \[20\])
- **Accuracy**  
  Refers to how close the average results are to the true quantity value. It is affected by systematic biases that consistently affect the measurement in the same direction (Ref. \[20\]).
- **Precision**  
  Degree to which repeated measurements of the target protein(s) under unchanged conditions (instrument settings, operator, apparatus and laboratory) show the same results, within a short interval of time. Precision is affected by random errors, and unpredictable fluctuations around the true value. Precision can be expressed as coefficient of variation (CV) which corresponds to the standard deviation of repeated measurements divided by the mean, with results typically expressed as per cent (%CV). The CV represents therefore a standardization of the standard deviation that allows to compare the variability of the measurement regardless of the magnitude of analyte concentration, in the working range of the assay (Ref. \[20\]).
- **Limit of quantification (LOQ)**  
  Minimal concentration or amount of a protein that can be confidently quantified
- **Limit of Detection (LOD)**  
  Smallest concentration or amount of a protein that can be confidently detected

**References**

1.  Schlapbback, R. et al. Targeted proteomics coming of age - SRM, PRM and DIA performance evaluated from a core facility perspective. Proteomics. 2016 Apr 30. [link](http://www.ncbi.nlm.nih.gov/pubmed/27130639)
2.  MacCoss MJ et al. Using Data Independent Acquisition (DIA) to Model High-responding Peptides for Targeted Proteomics Experiments. Mol Cell Proteomics. 2015 Sep;14(9) [link](http://www.ncbi.nlm.nih.gov/pubmed/26100116)
3.  Domon, B. et al. Options and considerations when selecting a quantitative proteomics strategy. Nature Biotechnology 28, 710 - 721 (2010)
4.  Gallien, S. et al. Targeted Proteomic Quantification on Quadrupole-Orbitrap Mass Spectrometer. Molecular & Cellular Proteomics 11, 1709 - 1723, (2012)
5.  Peterson, A.C. et al. Parallel reaction monitoring for high resolution and high mass accuracy quantitative, targeted proteomics. Mol. Cell. Proteomics published online (3 August 2012).
