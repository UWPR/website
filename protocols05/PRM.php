<?php  include("../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <section>
                     <header class="major">
                        <h1>Parallel Reaction Monitoring (PRM)</h1>
                        <span class="byline">Targeted Proteomics by Parallel-Reaction Monitoring</span>
                     </header>

            <p>Parallel reaction monitoring (PRM)-based targeted mass spectrometry is comparable 
			in performance to selected reaction monitoring (SRM) but requires much less investment 
			in assay development for targeted proteomics applications.</p>
			

            <p>PRM methodology uses the quadrupole of the Q Exactive or Fusion mass spectrometer to isolate a target 
			precursor ion, then fragments the targeted precursor ion in the collision cell, and 
			then detects the resulting product ions in the Orbitrap mass analyzer. 
			Quantification is carried out after data acquisition by extracting several 
			fragment ions with narrow (5 to 10 ppm) mass windows. Optionally a full scan can be acquired as well. 
			The precursor mass can then be extracted as well to complement quantification.</p>

			<p>PRM provides high selectivity, 
			high sensitivity, and high-throughput quantification with confident targeted 
			peptide confirmation. It is most suitable for quantifying tens to hundreds of 
			targeted proteins in complex matrices with attomole-level limits of detection.</p>

            <p>

            <div style="background-image: url('/images/PRM_01.png'); height: 261px; width: 855px;"></div>


            <p>
            <h2>PRM assay development</h2>
			
			There are several excellent webinars and tutorials provided by the Skyline Team. 
         <ul>
			<li><a target="new" href="https://skyline.ms/wiki/home/software/Skyline/page.view?name=webinars">Webinars</a> #3, #9 and #17 cover PRM method development and analysis
			<li>Here's a link to all the Skyline <a target="new" href="https://skyline.ms/wiki/home/software/Skyline/page.view?name=tutorials">Tutorials</a>, including the Targeted MS/MS (PRM) tutorial. 
			<li>And a great PRM tutorial/workshop presented by Lindsey Pino <a target="new" href="https://youtu.be/F_YE7cRqfAY">May Institute 2020 Online - Lindsay Pino: Targeted analysis with Skyline, a PRM perspective</a>
         </ul>

            <p style="text-align:left"> <b>Proteins/peptides of interest can be derived from a variety of sources:</b>
      <ul>
      <li>Shotgun proteomics data
      <li>Other data, e.g. genomics
      <li>Proteomics data repositories
		<ul><li>For Phosphopeptides check out the <a target="new" href="https://phosphopedia.gs.washington.edu/PhosphoproteomicsAssay/">Phosphopedia Website</a>
		<li><a target="new" href="http://www.peptideatlas.org/">PeptideAtlas</a>
		<li><a target="new" href="https://www.ebi.ac.uk/pride/archive/">Pride</a>
		<li>PRM calculator for quantitative cross-linking analysis at <a target="new" href="http://xlinkdb.gs.washington.edu/xlinkdb/prmTransitionForm.php">XLinkDB</a>
		<li>Literature 
      </ul>
      
      <p style="text-align:left"> <b>1. Selection of signature or proteotypic peptide(s):</b></p>
       <ul>
        <li>Peptide(s) should be unique to the protein of interest
        <li>Peptide(s) should be easily detectable by LC-MS analysis
        <li>Peptide length about 5-25 amino acids
        <li>Both ends of the peptide match enzymatic cleavage sites, e.g. if you plan to use Trypsin the peptide should have tryptic ends
        <li>Avoid missed cleavage sites
        <li>Avoid ragged ends: two enzymatic sites sequential to each other
        <li>For heavy labeled peptides check with vendor for restrictions
        <li>Avoid frequently modified amino acids (Met oxidation, deamidation, alkylation, phosphorylation, glycosylation sites, proteolysis, etc)
          <br> some chemically induced modifications:
          <br>- Met and Trp: oxidation
          <br>- N-term Glu:  pyroglutamic acid under acidic conditions
          <br>- Asn and Gln: deamidation to Asp and Glu, particularly if followed in sequence by Gly and Pro
        <li>Check for known protein modifications (signal peptide, isoforms, cleavage sites etc)
      </ul>
      
     <p style="text-align:left"> <b>2. Peptide fragment selection:</b></p>      
      <ul>
        <li>Assay development is greatly reduced since no target fragment ions need to be preselected, the entire MS/MS spectrum will be acquired for every precursor
      </ul>

     <p style="text-align:left"> <b>3. Optimize the cycle time</b></p>
      <ul>
        <li>The total cycle time is defined by the time it takes to cycle through your entire target list.  
		Ultimately, this cycle time determines how many scans across the peak are obtained. 
		<li>The number of targets and the chromatographic peak widths will dictate the ideal cycle time. 
		<li>For about 30 sec wide chromatographic peaks, if you want 10 scans across the peak, the total cycle time should not exceed 3 sec. 
      </ul>

     

     <p>Figure 2 shows how to estimate total cycle time based on the orbitrap resolving power (for the Fusion and QExactive) and the number of targets. 
	 To obtain the fastest cycle time for any given resolution, the maximum allowed fill time should not exceed the detection time, 
	 because the instrument fills the HCD cell while the orbitrap mass analyzer is acquiring the MS2 scan.
	 It is important to understand that higher resolution does not always result in better mass accuracy.  Higher resolution increases 
	 your ability to distinguish between m/z ions.  As you can see in the table below, there is a trade of higher resolution with time.  
	 On the QE 17,500 is the lowest resolution setting, with the fastest scan speed of ~13 Hz, the highest resolution setting is 140K, 
	 on the QE plus with enhanced resolution mode its 280K.  
     </p>
     
     <div style="background-image: url('/images/PRM_02.png'); height: 265px; width: 855px;"></div>
    
<p>
<table border="0" cellpadding="4" style="background-color:#F7F8F9">
<thead><tr>	
			<th align="center" style="background-color:#EDE5F3" colspan="3"><b>Fusion</b></th>
			<th align="center" style="background-color:#D4D9DE"><b>Transient</b></th>
			<th align="center" style="background-color:#E1E9FC" colspan="3"><b>Q Exactive</b></th>
			</tr></thead>
<thead><tr> <th align="center" style="background-color:#EDE5F3" >Res. at m/z 200</th>
			<th align="center" style="background-color:#EDE5F3" >"Free" fill time [ms]</th>
			<th align="center" style="background-color:#EDE5F3" >Approx. scan speed [Hz]</th>
			<th align="center" style="background-color:#D4D9DE" >length [ms]</th>
			<th align="center" style="background-color:#E1E9FC" >Res. at m/z 200</th>
			<th align="center" style="background-color:#E1E9FC" >"Free" fill time [ms]</th>
			<th align="center" style="background-color:#E1E9FC" >Approx. scan speed [Hz]</th></tr></thead>
<tbody>
	<tr>
		<td align="center" >15,000</td>
		<td align="center" >22</td>
		<td align="center" > </td>
		<td align="center" style="background-color:#F1F2F4">32</td>
		<td align="center" > </td>
		<td align="center" > </td>
		<td align="center" > </td>
	</tr>
	<tr>
		<td align="center" style="background-color:#DFE5EB">30,000</td>
		<td align="center" style="background-color:#DFE5EB">54</td>
		<td align="center" style="background-color:#DFE5EB">15</td>
		<td align="center" style="background-color:#D4D9DE">64</td>
		<td align="center" style="background-color:#DFE5EB">17,500</td>
		<td align="center" style="background-color:#DFE5EB">50</td>
		<td align="center" style="background-color:#DFE5EB">13</td>
	</tr>
	<tr>
		<td align="center" >60,000</td>
		<td align="center" >118</td>
		<td align="center" >7.5</td>
		<td align="center" style="background-color:#F1F2F4">128</td>
		<td align="center" >35,000</td>
		<td align="center" >110</td>
		<td align="center" >7</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#DFE5EB">120,000</td>
		<td align="center" style="background-color:#DFE5EB">246</td>
		<td align="center" style="background-color:#DFE5EB">4</td>
		<td align="center" style="background-color:#D4D9DE">256</td>
		<td align="center" style="background-color:#DFE5EB">70,000</td>
		<td align="center" style="background-color:#DFE5EB">240</td>
		<td align="center" style="background-color:#DFE5EB">3</td>
	</tr>
	<tr>
		<td align="center" >240,000</td>
		<td align="center" >502</td>
		<td align="center" > 2</td>
		<td align="center" style="background-color:#F1F2F4">512</td>
		<td align="center" >140,000</td>
		<td align="center" >500</td>
		<td align="center" >1.5</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#DFE5EB"> </td>
		<td align="center" style="background-color:#DFE5EB"> </td>
		<td align="center" style="background-color:#DFE5EB">  </td>
		<td align="center" style="background-color:#D4D9DE">1064</td>
		<td align="center" style="background-color:#DFE5EB">280,000</td>
		<td align="center" style="background-color:#DFE5EB">1000</td>
		<td align="center" style="background-color:#DFE5EB"> &lt;1 </td>
	</tr>
	<tr>
		<td align="center" >450,000</td>
		<td align="center" >1014</td>
		<td align="center" > &lt;1 </td>
		<td align="center" style="background-color:#F1F2F4">1024</td>
		<td align="center" > </td>
		<td align="center" > </td>
		<td align="center" > </td>
	</tr>
</tbody>
</table>
</p>

	
     <p>
      <ol>
        <li>Sampling rate across the chromatographic peak: ideally for quantifications 10-15
        point across the chromatographic peak should be acquired.  If the average peak width
        is 30 seconds a duty cycle of 2-3 sec should be targeted. 
        <li>Ion fill time should be kept below the scan time to maximize cycle time (see table above). 
		On the Fusion the ion time can be customized for every precursor (i.e. for very low abundant precursors the max ion times can be set higher to ensure the specified AGC target is reached.  
        <li>So the maximum number of targeted precursors is basically the duty cycle divided by the scan time. 
		<li>If the retention times are known scheduling may be an option as well.
      </ol>
     </p>
	 <br> QE plus: Resolution of 17500, max IT 50 ms, we get a scan speed of ~ 12 Hz. 
	 <br> Fusion/Lumos: Resolution of 15000, max IT 22 ms, we get a scan speed of ~ 18 Hz.
	 <p>
<table border="0" cellpadding="4" style="background-color:#F7F8F9">
<thead><tr>	<th align="center" style="background-color:#E1E9FC"><b>Cycle Time</b></th>
			<th align="center" style="background-color:#E1E9FC"><b>QE plus</b></th>
			<th align="center" style="background-color:#E1E9FC"><b>Fusion/Lumos</b></th>
			
<thead><tr><th align="center" style="background-color:#E1E9FC" >sec</th>
			<th align="center" style="background-color:#E1E9FC" ># of scans</th>
			<th align="center" style="background-color:#E1E9FC" ># of scans</th>
			
<tbody>
	<tr>
		<td align="center">1</td>
		<td align="center">12</td>
		<td align="center">18</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#DFE5EB">2</td>
		<td align="center" style="background-color:#DFE5EB">24</td>
		<td align="center" style="background-color:#DFE5EB">36</td>
	</tr>
	<tr>
		<td align="center">3</td>
		<td align="center">36</td>
		<td align="center">54</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#DFE5EB">4</td>
		<td align="center" style="background-color:#DFE5EB">48</td>
		<td align="center" style="background-color:#DFE5EB">72</td>
	</tr>
	<tr>
		<td align="center">5</td>
		<td align="center">60</td>
		<td align="center">90</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#DFE5EB">6</td>
		<td align="center" style="background-color:#DFE5EB">72</td>
		<td align="center" style="background-color:#DFE5EB">108</td>
	</tr>
	<tr>
		<td align="center">7</td>
		<td align="center">84</td>
		<td align="center">126</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#DFE5EB">8</td>
		<td align="center" style="background-color:#DFE5EB">96</td>
		<td align="center" style="background-color:#DFE5EB">144</td>
	</tr>
	<tr>
		<td align="center">9</td>
		<td align="center">108</td>
		<td align="center">162</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#DFE5EB">10</td>
		<td align="center" style="background-color:#DFE5EB">120</td>
		<td align="center" style="background-color:#DFE5EB">180</td>
	</tr>
	
</tbody>
</table>
</p>
	 
	 <p>
	 <li>UWPR Guide to setup PRM method on QE plus:  <a href="/docs/protocols05/PRM_QExactive.pdf">PRM_QExactive (pdf)</a></li>
	 <li>UWPR Guide to setup PRM method on Fusion/Lumos:  <a href="/docs/protocols05/PRM_FusionLumos_SW3_1.pdf">PRM_FusionLumos_SW3_1 (pdf)</a></li>
				
				
    </p>
  
     <p>For additional resources search the Planet Orbitrap library: <a href="https://planetorbitrap.com/">Planet Orbitrap </a>
	 <br>
	 <br>Check out this Technical Guide on Thermo's Planet Orbitrap website 
	<br><a target="new" href="http://planetorbitrap.com/library?t=QTE0OTBlODg0OWE1NWYzYw%3D%3D&keywords=A1490#tab:keywords">How to best utilize your QE/QE Plus for maximum peptide IDs and for peptide quantitation</a> for more information

	 
	 </p>


     <p style="text-align:left"> <b>Skyline a free software tool to build and analyze SRM, PRM and DIA assays</b></p>

     <p>Skyline is a freely-available Windows client application for building Selected Reaction Monitoring (SRM) / 
	 Multiple Reaction Monitoring (MRM), Parallel Reaction Monitoring (PRM - Targeted MS/MS and DIA/SWATH) and 
	 targeted DDA with MS1 quantitative methods and analyzing the resulting mass spectrometer data. It aims to 
	 employ cutting-edge technologies for creating and iteratively refining targeted methods for large-scale proteomics studies.</p>

     
     <br><a target="new" href="https://skyline.gs.washington.edu/labkey/project/home/software/Skyline/begin.view"><img src="/images/Skyline.png" alt="skyline">Click here </a> to go to the skyline website to download the latest version.
<br>
<br>
     


      <h2>Glossary</h2>

      <ul>
      <li><b> SRM</b>
         <br> Selected Reaction Monitoring
         <br> Method used in tandem mass spectrometry in which an ion of a particular mass is
         selected in the first stage of a tandem mass spectrometer and an ion product of a
         fragmentation reaction of the precursor ion is selected in the second mass spectrometer
         stage for detection
      <li><b> MRM</b>
         <br> Multiple Reaction Monitoring
         <br> The application of SRM to multiple product ions from one or more precursor ions
	  <li><b> PRM</b>
         <br> Parallel Reaction Monitoring
         <br> targeted MS/MS analyses, in which full fragment ion spectrum of each precursors in a target list is recorded continuously throughout the entire LC separation
      <li><b> Transition</b>
         <br> Precursor/product ion pair
      <li><b> Specificity</b>
         <br> Ability to discriminate and quantify a particular protein sequence in a mixture
         without interferences from other components (Ref. [20])
      <li><b> Accuracy</b>
         <br> Refers to how close the average results are to the true quantity value. It is
         affected by systematic biases that consistently affect the measurement in the same direction (Ref. [20]).
      <li><b> Precision</b>
         <br> Degree to which repeated measurements of the target protein(s) under unchanged
         conditions (instrument settings, operator, apparatus and laboratory) show the same
         results, within a short interval of time. Precision is affected by random errors, and
         unpredictable fluctuations around the true value. Precision can be expressed as coefficient
         of variation (CV) which corresponds to the standard deviation of repeated measurements
         divided by the mean, with results typically expressed as per cent (%CV). The CV represents 
         therefore a standardization of the standard deviation that allows to compare the variability
         of the measurement regardless of the magnitude of analyte concentration, in the working range
         of the assay (Ref. [20]).
      <li><b> Limit of quantification (LOQ) </b>
         <br> Minimal concentration or amount of a protein that can be confidently quantified 
      <li><b> Limit of Detection (LOD) </b>
      <br> Smallest concentration or amount of a protein that can be confidently detected
      </ul>


      <p style="text-align:left"> <b>References</b></p>
      <ol>
	  <li>Domon, B. et al. Options and considerations when selecting a quantitative proteomics strategy. Nature Biotechnology 28, 710 - 721 (2010)
	  <a target="new" href="http://www.ncbi.nlm.nih.gov/pubmed/20622845">link</a>
	  <li>Gallien, S. et al. Targeted Proteomic Quantification on Quadrupole-Orbitrap Mass Spectrometer. Molecular &amp; Cellular Proteomics 11, 1709 - 1723, (2012)
	  <a target="new" href="http://www.ncbi.nlm.nih.gov/pubmed/22962056">link</a>
      <li>Peterson, A.C. et al. Parallel reaction monitoring for high resolution and high mass accuracy quantitative, targeted proteomics. Mol. Cell. Proteomics published online (3 August 2012).
	  <a target="new" href="http://www.ncbi.nlm.nih.gov/pubmed/22865924">link</a>
	  <li>Ronsein GE. et al. Parallel reaction monitoring (PRM) and selected reaction monitoring (SRM) exhibit comparable linearity, dynamic range and precision for targeted quantitative HDL proteomics. J Proteomics. 2015 Jan 15;113:388-99
	  <a target="new" href="http://www.ncbi.nlm.nih.gov/pubmed/25449833">link</a>
      <li>Villen, J. et al. Plug-and-play analysis of the human phosphoproteome by targeted high-resolution mass spectrometry. Nat Methods. 2016 May;13(5):431-4
	  <a target="new" href="http://www.ncbi.nlm.nih.gov/pubmed/27018578">link</a>
	  <li>Bourmaud A. et al. Parallel reaction monitoring using quadrupole-orbitrap mass spectrometer: Principle and applications. Proteomics. 2016 May 4. 
	  <a target="new" href="http://www.ncbi.nlm.nih.gov/pubmed/27145088">link</a>
      </ol>

</div>
</div>
    
<?php  include("../__footer.php"); ?>
