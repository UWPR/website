<?php  include("../__header.php"); ?>

<div id="page" class="container">

    <div id="content">

        <!-- Image box -->
        <div id="banner">
            <div class="image">
                <a href="#">
                    <img src="/images/sequest.jpg" width="600" height="180" alt="background" />
                </a>
            </div>
            <div class="border"></div>
        </div>

    </div>

    <div id="wide-content">

        <div class="box-style1">
            <div class="title">
                <h2>SEQUEST<sup>&reg;</sup><h2>
            </div>

            <div class="content">


      <p>SEQUEST is a tandem mass spectrometry database search program originally
      developed in 1993 in the Yates lab at the University of Washington.  It
      correlates tandem mass spectra of peptides against peptide sequences from
      a sequence database.

      <p><b>NOTE: UW SEQUEST is no longer being supported.  The open source version
      of this tool that was being maintained at the University of Washington
      is now the <a href="http://comet-ms.sourceforge.net">Comet</a></b> project.

      <p>Classical SEQUEST applies a two-stage scoring method for each search.  The first
      stage applies the preliminary score to filter through all candidate peptides
      in the sequence database.  The best scoring candidate peptides are then
      re-scored using the cross correlation algorithm.  The sensitivity of the
      cross correlation algorithm is enhanced by the correction factor that is
      applied in its calculation.  <!--As of April 2012 in the
      <a href="/sequest_release/release_201201.php">2012.01.0 release of UW SEQUEST</a>,
      the cross correlation score is now the primary score function and is
      applied to all candidate peptides; the preliminary score is still
      computed at the end of the search for the top hits for pseudo backwards
      compatibility.-->

      <p>There currently exists a few variants of SEQUEST.  The primary version
      that most researchers will have acccess to is that which is supplied as
      part of the Proteome Discoverer (formerly BioWorks) software
      package by Thermo Fischer Scientific.  That version
      includes enhancements such as a probability-based score as well as a
      custom interface that Thermo distributes.  Sage-N Research
      has implemented a high throughput version of SEQUEST in their Sorcerer
      appliance; their version also contains many unique features specific to
      their tool.  The Yates lab at Scripps has a version that was modified to
      support their ms2/sqt input and output formats which has subsequently
      been superceded by the Java based ProLuCID.  And the University
      of Washington proteomics community currently uses a version of the tool
      that we have applied our own enhancements to including E-value statistics,
      threading, and linking to Mike Hoopmann's MSToolkit for direct support
      for multiple input formats such as compressed ms2 and mzXML.  The core
      algorithms in SEQUEST have also been reimplemented in the Crux program
      from the Noble lab.

      <p>
      <ul>
      <b>Links</b>
      <li>Thermo Scientific <a href="http://www.thermoscientific.com/ecomm/servlet/productsdetail?productId=11961811&groupType=PRODUCT&searchType=0&storeId=11152&from=search">Proteome Discoverer</a>
      <li>Sage-N Research's <a href="http://www.sagenresearch.com/">SEQUEST Sorcerer</a>
      <li>SEQUEST <a href="http://fields.scripps.edu/?q=content/software">info at Scripps</a>
      <li>Wikipedia <a href="http://en.wikipedia.org/wiki/SEQUEST">page</a>
      <li>ProLuCID <a href="http://fields.scripps.edu/yates/wp/?page_id=63">page</a>
      <li>Crux <a href="http://crux.ms">page</a>, 
               <a href="http://dx.doi.org/10.1021/pr800127y">publication</a>
<!--
      <li>UW sequest.params <a href="sequest_params.php">page</a>
      <li>UW SEQUEST commands <a href="sequest_commands.php">page</a>
      <li>UW SEQUEST release notes <a href="sequest_release.php">page</a>
-->
      </ul>


      <p>
      <ul>
      <b>Selected SEQUEST publications</b>
      <li>"An Approach to Correlate Tandem Mass Spectral Data of Peptides with Amino Acid Sequences in a Protein Database".
      Eng JK, McCormack AL, and Yates JR III.
      J Am Soc Mass Spectrom 5: 976–989. 1994.
      <a href="http://dx.doi.org/10.1016%2F1044-0305%2894%2980016-2">link</a>
      <li>"Direct database searching with MALDI-PSD spectra of peptides".
      Griffin PR, MacCoss MJ, Eng JK, Blevins RA, Aaronson JS,
      Yates JR III. Rapid Communications in Mass Spectrometry, 9(15):1546-51. 1995.
      <a href="http://dx.doi.org/10.1002/rcm.1290091515">link</a>
      <li>"Search of Sequence Databases with Uninterpreted High-Energy Collision-Induced Dissociation Spectra of Peptides".
      Yates JR III, Eng JK, Clauser KR, and Burlingame AL.
      J Am Soc Mass Spectrom 7: 1089-1098. 1996.
      <a href="http://dx.doi.org/10.1016/S1044-0305(96)00079-7">link</a>
      <li>"A Fast SEQUEST Cross Correlation Algorithm".
      Eng, JK, Fischer B, Grossmann J, MacCoss MJ.
      J. Proteome Res., 2008.
      <a href="http://dx.doi.org/10.1021%2Fpr800420s">link</a>
      </ul>

      <p>SEQUEST&reg; is a registered trademark of the University of Washington.


   </div>
   </div>
   </div>
<?php  include("../__footer.php"); ?>
