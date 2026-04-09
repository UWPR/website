<?php  include("../../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <section>
                     <header class="major">
                        <h1>Setting up ReAdW and Wine</h1>
                        <span class="byline">ReAdW is a Windows based tool to convert Thermo RAW files to mzXML.</i></font></span>
                     </header>
                     <p>

            <p>Here are the relatively simple steps needed to run ReAdW under Wine.  This will
               let you perform mzXML conversions of Thermo RAW files on your linux box.
               If you need to install Wine, do so (e.g. "yum install wine").

            <p>A.  Grab the latest 64-bit ReAdW binary compiled with MS File Reader support.
            <br><a href="https://proteomicsresource.washington.edu/protocols06/ReAdW_program/ReAdW_x64.exe">ReAdW_x64.exe</a>

            <p>B.  Log into Thermo's mass spectrometry software site:
            <br><a href="https://thermo.flexnetoperations.com/control/thmo/login">https://thermo.flexnetoperations.com/control/thmo/login</a>

            <p>C.  Then get "MS File Reader 3.1 SP4" from Thermo from this page:
            <br><a href="https://thermo.flexnetoperations.com/control/thmo/download?element=8554997">https://thermo.flexnetoperations.com/control/thmo/download?element=6306677</a>

            <p>D.  install MSFileReader (which installs vcrun2008 + vcrun2010):  <tt><font color="blue">wine /path/to/MSFileReader_x64.exe</font></tt>

            <p>That should be it.  Now try to run a conversion:  <tt><font color="blue">wine /path/to/ReAdW_x64.exe --centroid somefile.raw</font></tt>

            <p>Actually also set the following environment variable to suppress all Wine debug output: <tt><font color="blue">export WINEDEBUG=-fixme-all,-all</font></tt>
               

   </div>
   </div>
<?php  include("../../__footer.php"); ?>
