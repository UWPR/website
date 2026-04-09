<?php  include("../../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <section>
                     <header class="major">
                        <h1>MassSpecUtils (a.k.a "TagTraq")</h1>
                     </header>

      <p><b>Install:</b> <a href="setup.exe">setup.exe</a>  &nbsp; <b>Documentation:</b>  <a href="MassSpecUtilsUserGuide.docx">MassSpecUtilsUserGuide.docx</a>

      <p>MassSpecUtils is a tool that provides a graphical user interface to
      perform the following tasks:

      <ol style="list-style-type: disc">
      <li> Convert RAW data files to mgf or mzXML via ProteoWizard's msconvert tool.
      <li> Convert mgf files to mzXML.
      <li> Convert mzXML files to dta. 
      <li> Convert pep.xml files to txt.
      <li> Run Hardkl&ouml;r on raw data files.
      <li> For iTRAQ data, merge low mass range iTRAQ reporter ion peaks from HCD scans
           into CID scans of an mgf file to be used in a Mascot MS/MS search.
           Option to convert this mgf to mzXML (say for UW SEQUEST<sup>&reg;</sup> search).
      <li> Calculate potential "contaminants" introduced by iTRAQ labeling (TagTraq)
           using Mascot search results.  Potential contaminant peaks, measured in
           the precursor scans, are determined using Hardkl&ouml;r. 
      </ol>
      
      <p>

      <p>Please note that the tool assumes you have a fairly recent version of Xcalibur
      and the latest MSFileReader binaries installed.

      <p> 
     
      <p>If you have questions, please contact Tahmina 'Eva' Jahan at the UWPR (tabaker@uw.edu).
         As of 8/21/2015, Eva is off to medical school so send inquiries to Jimmy Eng (engj@uw.edu).

      <p>

      <p>
      <ul>
      <b>Links</b>
      <li><a href="http://proteowizard.sourceforge.net/">ProteoWizard</a>
      <li><a href="http://proteome.gs.washington.edu/software/hardklor/">Hardkl&ouml;r</a>
      <li>To access MSFileReader, go <a href="https://thermo.flexnetoperations.com/control/thmo/login">here</a>
          to register an account with Thermo and login.  You will find MSFileReader under "Utility Software". 
      <li>Deprecated as of 01/2016, <a href="2.0.4.1/">old (original) MassSpecUtils Version 2.0.1.4</a>.
      </ul>


      <p>
      <ul>
      <b>MassSpecUtils Versions</b>
      <li><a href="http://proteomicsresource.washington.edu/dist/eva/MassSpecUtilsInstallationFiles/">Latest Version 2.0.1.4</a>
      <ul>
      <li>Incorporated the latest <a href="http://proteowizard.sourceforge.net/downloads.shtml"> ProteoWizard binaries</a> as of 11/17/2014.
      <li>Turned of both 32-bit encoding and zlib peak compression for RAW --> mzXML conversions.
      <li>Fixed some bugs in the file converter related to file extentions.
      <li>Fixed some bugs in the pep.xml --> txt converter functionality.
      </ul>
      </ul>

</div>
</div>

<?php  include("../../__footer.php"); ?>
