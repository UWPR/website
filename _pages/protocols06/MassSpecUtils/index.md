---
title: "MassSpecUtils (a.k.a \"TagTraq\")"
permalink: /protocols06/MassSpecUtils/
---

**Install:** [setup.exe]({{ site.baseurl }}/protocols06/MassSpecUtils/setup.exe)   **Documentation:** [MassSpecUtilsUserGuide.docx]({{ site.baseurl }}/protocols06/MassSpecUtils/MassSpecUtilsUserGuide.docx)

MassSpecUtils is a tool that provides a graphical user interface to perform the following tasks:

1.  Convert RAW data files to mgf or mzXML via ProteoWizard's msconvert tool.
2.  Convert mgf files to mzXML.
3.  Convert mzXML files to dta.
4.  Convert pep.xml files to txt.
5.  Run Hardklör on raw data files.
6.  For iTRAQ data, merge low mass range iTRAQ reporter ion peaks from HCD scans into CID scans of an mgf file to be used in a Mascot MS/MS search. Option to convert this mgf to mzXML (say for UW SEQUEST^®^ search).
7.  Calculate potential "contaminants" introduced by iTRAQ labeling (TagTraq) using Mascot search results. Potential contaminant peaks, measured in the precursor scans, are determined using Hardklör.

Please note that the tool assumes you have a fairly recent version of Xcalibur and the latest MSFileReader binaries installed.

If you have questions, please contact Tahmina 'Eva' Jahan at the UWPR (tabaker@uw.edu). As of 8/21/2015, Eva is off to medical school so send inquiries to Jimmy Eng (engj@uw.edu).

- **Links**
- [ProteoWizard](http://proteowizard.sourceforge.net/)
- [Hardklör](http://proteome.gs.washington.edu/software/hardklor/)
- To access MSFileReader, go [here](https://thermo.flexnetoperations.com/control/thmo/login) to register an account with Thermo and login. You will find MSFileReader under "Utility Software".
- Deprecated as of 01/2016, [old (original) MassSpecUtils Version 2.0.1.4]({{ site.baseurl }}/protocols06/MassSpecUtils/2.0.4.1/).

<!-- -->

- **MassSpecUtils Versions**
- [Latest Version 2.0.1.4](https://proteomicsresource.washington.edu/dist/eva/MassSpecUtilsInstallationFiles/)
  - Incorporated the latest [ProteoWizard binaries](http://proteowizard.sourceforge.net/downloads.shtml) as of 11/17/2014.
  - Turned of both 32-bit encoding and zlib peak compression for RAW \--\> mzXML conversions.
  - Fixed some bugs in the file converter related to file extentions.
  - Fixed some bugs in the pep.xml \--\> txt converter functionality.
