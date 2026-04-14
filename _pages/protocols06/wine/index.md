---
title: "Setting up ReAdW and Wine"
permalink: /protocols06/wine/
---

*ReAdW is a Windows based tool to convert Thermo RAW files to mzXML.*

Here are the relatively simple steps needed to run ReAdW under Wine. This will let you perform mzXML conversions of Thermo RAW files on your linux box. If you need to install Wine, do so (e.g. "yum install wine").

A. Grab the latest 64-bit ReAdW binary compiled with MS File Reader support.
[ReAdW_x64.exe]({{ site.baseurl }}/protocols06/ReAdW_program/ReAdW_x64.exe)

B. Log into Thermo's mass spectrometry software site:
<https://thermo.flexnetoperations.com/control/thmo/login>

C. Then get "MS File Reader 3.1 SP4" from Thermo from this page:
[https://thermo.flexnetoperations.com/control/thmo/download?element=6306677](https://thermo.flexnetoperations.com/control/thmo/download?element=8554997)

D. install MSFileReader (which installs vcrun2008 + vcrun2010):  `wine /path/to/MSFileReader_x64.exe`

That should be it. Now try to run a conversion:  `wine /path/to/ReAdW_x64.exe --centroid somefile.raw`

Actually also set the following environment variable to suppress all Wine debug output: `export WINEDEBUG=-fixme-all,-all`
