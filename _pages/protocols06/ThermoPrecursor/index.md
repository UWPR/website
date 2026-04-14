---
title: "Thermo precursor m/z issue"
permalink: /protocols06/ThermoPrecursor/
---

*2017/12/13*

In a number of Thermo instruments with an FT analyzer (Orbitrap or FTICE), an ion is selected for isolation early in the MS1 acquisition by transforming the short time domain transient signal. Precursor ions are selected for MS/MS acquisition. The time domain signal for the MS1 scan will continue to be acquired and eventually transformed to the final high resolution MS1 spectrum.

The precursor m/z values from the short transient that are used to trigger MS/MS scans will be referred to as SelectedMZ ions. The SelectedMZ ions are used to set the isolation window around which the ions are selected for fragmentation in the MS/MS scans. Correspondingly, MS/MS scans also include a "monoisotopic m/z" value in the scan header. Presumably there's some algorithm that looks at the precursor m/z isotopic envelope to determine the monoisotopic m/z.
