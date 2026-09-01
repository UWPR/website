---
title: "Setting up ReAdW and Wine"
permalink: /resources/data-analysis/wine/
redirect_from:
  - /tools/wine/
layout: single
classes: no_sidebar
author_profile: false
---

*ReAdW is a Windows-based tool to convert Thermo RAW files to mzXML*

Here are the relatively simple steps needed to run ReAdW under Wine, which lets you perform mzXML conversions of Thermo RAW files on your Linux box.

1.  If you need to install Wine, do so:

    ```
    yum install wine
    ```

2.  Grab the latest 64-bit ReAdW binary compiled with MSFileReader support: [ReAdW_x64.exe](https://proteomicsresource.washington.edu/protocols06/ReAdW_program/ReAdW_x64.exe).

3.  Log into [Thermo's mass spectrometry software site](https://thermo.flexnetoperations.com/control/thmo/login) and download "MS File Reader 3.1 SP4" from [this page](https://thermo.flexnetoperations.com/control/thmo/download?element=8554997).

4.  Install MSFileReader (which also installs vcrun2008 and vcrun2010):

    ```
    wine /path/to/MSFileReader_x64.exe
    ```

5.  Set the following environment variable to suppress all Wine debug output:

    ```
    export WINEDEBUG=-fixme-all,-all
    ```

6.  That should be it. Now try to run a conversion:

    ```
    wine /path/to/ReAdW_x64.exe --centroid somefile.raw
    ```
