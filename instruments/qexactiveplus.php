<?php  include("../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <div class="row">
                  
                     <!-- Content -->
                     <div id="content" class="8u skel-cell-important">
                        <section>
                           <header class="major">
                              <h1>Q Exactive Plus (Q)</h1>
                              <span class="byline">Hybrid quadrupole-Orbitrap mass spectrometer</span>
                           </header>
                           
						   <div style="background-image: url('images/qexactive_05b.png'); height: 350px; width: 798px;"></div>

<br><p>The Thermo Scientific Q Exactive Plus benchtop LC-MS/MS combines high-performance
quadrupole precursor selection with high resolution, accurate-mass (HR/AM) Orbitrap
detection to deliver high performance and tremendous versatility. With a fast scan
speed and multiplexing capabilities, the Q Exactive Plus mass spectrometer is an outstanding
detector for fast chromatography separation techniques. The superior quality of
Q Exactive Plus MS/MS data enables identification and quantitation of more compounds with
greater confidence. The Q Exactive Plus LC-MS/MS system not only offers broad screening
capabilities but also excels at targeted quantitation experiments. </p>

<p>Visit the <a target="new" href="http://planetorbitrap.com/q-exactive-plus">Planet Orbitrap website</a> for more information
				
<p>11/19/2013 QE Plus (SN03039L / UW tag 2019655) Installed
<br>6/6/2012 QE (SN01284L) Installed, 11/14/2013 retired

	
	<h2 id="specs">Specifications</h2>		

	<a href="#page">Back to Top</a>
	<br><br>
	<ul><strong>Scan Rate</strong>
		<li>Up to 12 Hz at resolution setting of 17,500 at m/z 200</li>
		<li>Multiplexity: up to 10 precursors/scan</li>
	</ul>

	<ul><strong>Resolution</strong>
		<li>280 000 at m/z 200 option on the QE Plus</li>
		<li>140 000 at m/z 200 at a scan repetition rate of 1 Hz</li>
	</ul>

	<ul><strong>Mass accuracy</strong>
		<li>&lt; 3 ppm RMS error with external calibration</li>
		<li>&lt; 1 ppm RMS error with internal calibration</li>
	</ul>

	<ul><strong>Sensitivity</strong>
		<li>Intra-scan dynamic range &gt; 5000:1</li>
		<li>Full MS: 500fg Buspirone on column S/N 100:1</li>
		<li>SIM: 50fg Buspirone on column S/N 100:1</li>
	</ul>

	<ul><strong>Features</strong>
		<li>Higher Energy Collisional Dissociation (HCD)</li>
		<li>S-Lens ion source for increased sensitivity</li>
		<li>Quadrupole mass filter</li>
		<li>Orbitrap mass analyzer</li>
		<li>Spectral multiplexing for enhanced duty cycle</li>
	</ul>

<h2 id="software">Instrument control software</h2>
	<a href="#page">Back to Top</a>
	<br><br>
	<ul>
		<li><a href="/docs/InstrumentSoftwareVersions.xls">Instrument control software (.xls)</a>
		<li><a target="new" href="/docs/protocols05/UWPR_Win10LTSB2016_upgrade.pdf">Tips for upgrading to Win10 LTSB 2016 on TNG instruments (pdf)</a>
	</ul>


	<h2 id="calis">Instrument calibrations</h2>
	<a href="#page">Back to Top</a>
	<br><br>
	<ul>
		<li>This file summarizes calibration solutions and calibration tips <a href="/docs/Calibrations.xlsx">Calibrations (.xlsx)</a>
	</ul>
<p>
	<h2 id="parameters">Method parameters</h2>
	<a href="#page">Back to Top</a>
	<br><br>
	<strong>Method parameters for peptide identification on the QEplus</strong>

		<br>Check out this Technical Guide on Thermo's Planet Orbitrap website 
		<br><a target="new" href="http://planetorbitrap.com/library?t=QTE0OTBlODg0OWE1NWYzYw%3D%3D&keywords=A1490#tab:keywords">How to best utilize your QE/QE Plus for maximum peptide IDs and for peptide quantitation</a> for more information

		<br>
		<br>For bottom-up proteomics method (DDA) use the Full MS followed by ddMS2 mode
		<br>
<table border="0" cellpadding="4" width="100%" style="background-color:#EBEBF5">
<thead><tr><th align="left" style="background-color:#9999CC" width="20%" >Method Parameter</th><th align="left" style="background-color:#9999CC" width="80%" >Recommended Setting</th></tr></thead>
<tbody>
	<tr>
		<td align="left">Chrom. peak width</td>
		<td align="left">dictates how often the AGC pre - scan is collected, adjust this time based on your chromatographic peaks widths.  
			e.g. for narrow peak widths it is a critical for the instrument to take more frequent pre - scans based on the dramatic changes in ion flux</td>
	</tr>
	<tr>
		<td align="left" style="background-color:#D6D6EB">MS1 resolution</td>
		<td align="left" style="background-color:#D6D6EB">for regular DDA 70k is recommended; 
			for very complex samples higher resolution might be beneficial to resolve close m/z ions</td>
	</tr>
	<tr>
		<td align="left">MS2 resolution</td>
		<td align="left">17.5K is the lowest resolution setting, therefore the fastest scan rate.  
			For tryptic digests, this resolution is usually adequate for MS2 scans since the spectra are less complex and fragment ions are mostly +1 ions</td>
	</tr>
	<tr>
		<td align="left" style="background-color:#D6D6EB">MS1 AGC target</td>
		<td align="left" style="background-color:#D6D6EB">1e6 with a max IT of 30ms is recommended</td>
	</tr>
	<tr>
		<td align="left">MS2 AGC target</td>
		<td align="left">5e4 with a max IT of 50ms is recommended to maximize scan speed
		<br>1e5 with a max IT of 100ms if you load <100ng</td>
	</tr>
	<tr>
		<td align="left" style="background-color:#D6D6EB">Loop count</td>
		<td align="left" style="background-color:#D6D6EB">Refers to how many MS2 scans will be acquired between each full MS scan; 
			<br>we use 20, Thermo recommends 10 for 20-30 sec wide peaks</td>
	</tr>
	<tr>
		<td align="left" >Isolation window</td>
		<td align="left" >2 Da on the QE
			<br>1.5 Da on the QEplus, the new segmented quad improves isolation and lowering the isolation window to 1.5 Da does not affect sensitivity, 
			but can reduce the amount of interferences and increase the number of identifications</td>
	</tr>
	<tr>
		<td align="left" style="background-color:#D6D6EB">NCE</td>
		<td align="left" style="background-color:#D6D6EB">Normalized collision energy, 25 (28 for iTRAQ samples) 
			<br>applied voltage (eV) depends on the NCE setting, the m/z and the charge state factor.  
			<br>If you did want to know what the exact eV being applied you can view that in the scan header of each MS2 scan in qual browser.</td>
	</tr>
	<tr>
		<td align="left" >Intensity threshold</td>
		<td align="left" >1.0e4 (use the underfill % to set the int. threshold) minimum precursor intensity to trigger a MS2 scan
			<br>the MS2 target value, maximum injection time and underfill ratio ALL determine the threshold</td>
	</tr>
	<tr>
		<td align="left" style="background-color:#D6D6EB">Peptide Match</td>
		<td align="left" style="background-color:#D6D6EB">we usually leave it off, but Thermo recommends to use preferred
		    <br>Equivalent setting as "monoisotopic precursor selection" MIPS, to select ions with peptide-like isotopic distributions 
			<br>On: will only select ions with peptide-like isotopic distribution
			<br>Preferred: ions with peptide-like isotopic distribution are triggered with preference, but will select other ions for dd-MS2 after all ions with "peptide match" were selected</td>
	</tr>
	<tr>
		<td align="left" >Exclude Isotopes</td>
		<td align="left" >On is recommended
			<br>this parameter is de-coupled from "peptide match" or MIPS.  So regardless of what your setting is for peptide match, you can still exclude isotopes</td>
	</tr>
	<tr>
		<td align="left" style="background-color:#D6D6EB">Dynamic Exclusion</td>
		<td align="left" style="background-color:#D6D6EB">30 sec, In complex mixtures, increase dynamic exclusion to reduce repeat sampling and maximize number of unique peptides
		    <br>Default Exclusion width is  &#8723; 10ppm, but the exclusion widths for dynamic excl, inclusion list, exclusion list, etc are all changeable parameters</td>
	</tr>
	
</tbody>
</table>
</p>

<p>
<strong>Method parameters for peptide quantification on the QE plus</strong>

	<br>The sacrifice in targeted experiments:  If you want to quantitate as many targets as you can, well then you will be sacrificing depth and most likely overall sensitivity.  
	<br>On the flip side, if ultimate sensitivity is your priority, then you have to sacrifice the number of targets you want to quantify.  
	<br>
	<br>Check out our <a target="new" href="/protocols05/PRM.php">PRM overview page</a> for more information
	<br>
	
</p>
<strong id="TMTsettings">TMT instrument QE plus settings</strong>
<br>
	<a href="#page">Back to Top</a>
	<br>
    <br>The table below lists instrument method settings recommended by Thermo for the Lumos with Tune 3.3. 
	<br> with APD (Advanced Peak Detection) on
	<br> based on this document: <a target="new" href="https://assets.thermofisher.com/TFS-Assets/BID/Reference-Materials/tmt-tmtpro-instrument-acquisition.pdf">TMT/TMTpro Instrument Acquisition Parameter Settings</a>
<br>

<br><table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th style="background-color:#9999CC" >Properties</th>
			<th style="background-color:#9999CC" >QE classic 120 min TMT 11plex</th>
			<th style="background-color:#9999CC" >QE classic 120 min TMT 16plex</th>
			<th style="background-color:#9999CC" >QE plus 120 min TMT 11plex</th>
			<th style="background-color:#9999CC" >QE plus 120 min TMT 16plex</th>
			</tr></thead>
<tbody>
	<tr>
		<td align="left">Resolution Full MS</td>
		<td align="center">70,000</td>
		<td align="center">70,000</td>
		<td align="center">70,000</td>
		<td align="center">70,000</td>
	</tr>
	<tr>
		<td align="left" style="background-color:#D6D6EB">AGC target Full MS</td>
		<td align="center" style="background-color:#D6D6EB">3e6</td>
		<td align="center" style="background-color:#D6D6EB">3e6</td>
		<td align="center" style="background-color:#D6D6EB">3e6</td>
		<td align="center" style="background-color:#D6D6EB">13e6</td>
	</tr>
	<tr>
		<td align="left">MS max IT, ms</td>
		<td align="center">50</td>
		<td align="center">50</td>
		<td align="center">50</td>
		<td align="center">50</td>
	</tr>
	<tr>
	<td align="left" style="background-color:#D6D6EB">Scan range, m/z</td>
		<td align="center" style="background-color:#D6D6EB">350 - 1500</td>
		<td align="center" style="background-color:#D6D6EB">350 - 1500</td>
		<td align="center" style="background-color:#D6D6EB">350 - 1500</td>
		<td align="center" style="background-color:#D6D6EB">350 - 1500</td>
	</tr>
	<tr>
		<td align="left">Loop count</td>
		<td align="center">15</td>
		<td align="center">10</td>
		<td align="center">15</td>
		<td align="center">10</td>
	</tr>
	<tr>
	<td align="left" style="background-color:#D6D6EB">MS2 max IT, ms</td>
		<td align="center" style="background-color:#D6D6EB">250</td>
		<td align="center" style="background-color:#D6D6EB">250</td>
		<td align="center" style="background-color:#D6D6EB">120</td>
		<td align="center" style="background-color:#D6D6EB">120</td>
	</tr>
	<tr>
		<td align="left">MS2 Isolation window, Th</td>
		<td align="center">1.2</td>
		<td align="center">1.2</td>
		<td align="center">0.7</td>
		<td align="center">0.7</td>
	</tr>
	<tr>
	<td align="left" style="background-color:#D6D6EB">MS2 NCE, &#37;</td>
		<td align="center" style="background-color:#D6D6EB">32-34</td>
		<td align="center" style="background-color:#D6D6EB">28-32</td>
		<td align="center" style="background-color:#D6D6EB">32-34</td>
		<td align="center" style="background-color:#D6D6EB">28-32</td>
	</tr>
	<tr>
		<td align="left">MS2 Intensity threshold</td>
		<td align="center">1e4</td>
		<td align="center">2e4</td>
		<td align="center">1e4</td>
		<td align="center">2e4</td>
	</tr>
	<tr>
	<td align="left" style="background-color:#D6D6EB">Dynamic exclusion, s</td>
		<td align="center" style="background-color:#D6D6EB">45</td>
		<td align="center" style="background-color:#D6D6EB">45</td>
		<td align="center" style="background-color:#D6D6EB">30</td>
		<td align="center" style="background-color:#D6D6EB">30</td>
	</tr>
	<tr>
		<td align="left">MS2 Resolution</td>
		<td align="center">35,000</td>
		<td align="center">35,000</td>
		<td align="center">35,000</td>
		<td align="center">35,000</td>
	</tr>
	<tr>
	<td align="left" style="background-color:#D6D6EB">MS2 AGC target</td>
		<td align="center" style="background-color:#D6D6EB">1e5</td>
		<td align="center" style="background-color:#D6D6EB">2e5</td>
		<td align="center" style="background-color:#D6D6EB">1e5</td>
		<td align="center" style="background-color:#D6D6EB">2e5</td>
	</tr>
	<tr>
		<td align="left">Peptide match</td>
		<td align="center">preferred</td>
		<td align="center">preferred</td>
		<td align="center">preferred</td>
		<td align="center">preferred</td>
	</tr>
	<tr>
	<td align="left" style="background-color:#D6D6EB">First mmass, m/z </td>
		<td align="center" style="background-color:#D6D6EB">110</td>
		<td align="center" style="background-color:#D6D6EB">110</td>
		<td align="center" style="background-color:#D6D6EB">110</td>
		<td align="center" style="background-color:#D6D6EB">110</td>
	</tr>
	
</tbody>
</table>




<p>
	<h2 id="resolution">Resolving Power and Transient Length</h2>
	<a href="#page">Back to Top</a>
	<br>

	<br>Here is a full table of the available resolution settings.  
		Note: higher resolution does not always result in better mass accuracy.  
		The higher the resolution increases your ability to distinguish between m/z ions.  As you can see in this table, there is always a trade of higher 
		resolution with time.  17.5 is the lowest resolution setting, with the fastest scan speed of ~13 Hz.  On the QE, the highest resolution setting is 140K that is 1.5 Hz.  
	<br>On the QE plus with enhanced resolution mode, you can go up to 280K, which is a less than 1 Hz.
	<br>To fully take advantage of the parallel fill and detect capabilities of the Q-Exactive, we need to balance the max fill times with the transient length. 
		For resolving power 17,500, detection time is about 64 ms. There is always a small amount of inter-scan delay.  Up to 50 ms can be used to fill the C-trap with ions- and without increasing cycle time. 
<br>
<br>
<table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th style="background-color:#9999CC" >Res. at m/z 200</th><th style="background-color:#9999CC" >Res. at m/z 400</th>
	<th style="background-color:#9999CC" >Transient length [ms]</th><th style="background-color:#9999CC" >Approx. scan speed [Hz]</th><th style="background-color:#9999CC" >"Free" fill time [ms]</th></tr></thead>
<tbody>
	<tr>
		<td align="center">17,500</td>
		<td align="center">12,500</td>
		<td align="center">64</td>
		<td align="center">13</td>
		<td align="center">50</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">35,000</td>
		<td align="center" style="background-color:#D6D6EB">25,000</td>
		<td align="center" style="background-color:#D6D6EB">128</td>
		<td align="center" style="background-color:#D6D6EB">7</td>
		<td align="center" style="background-color:#D6D6EB">110</td>
	</tr>
	<tr>
		<td align="center">70,000</td>
		<td align="center">50,000</td>
		<td align="center">256</td>
		<td align="center">3</td>
		<td align="center">240</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">140,000</td>
		<td align="center" style="background-color:#D6D6EB">100,000</td>
		<td align="center" style="background-color:#D6D6EB">512</td>
		<td align="center" style="background-color:#D6D6EB">1.5</td>
		<td align="center" style="background-color:#D6D6EB">500</td>
	</tr>
	<tr>
		<td align="center">280,000</td>
		<td align="center">200,000</td>
		<td align="center">1024</td>
		<td align="center"> < 1</td>
		<td align="center">1000</td>
	</tr>
</tbody>
</table>

</p>

	  <p><h2 id="hplc">HPLC setup</h2>
	  <a href="#page">Back to Top</a>
		<br><br>
                <br>the following documents are guidelines to setup the capillary trap/column on our LC-MS systems, 
                this is intended as a supplement to the hands on training required to use the UWPR instruments.
                
			<ul>
                
				<li><a target="new" href="/docs/protocols05/UWPR_LC_MS_setup_EASYnLC.pdf">LC-MS setup procedure EASYnLC(pdf)</a>
			</ul>

<p>
	<h2 id="settings">Instrument Settings</h2>
	<a href="#page">Back to Top</a>
	<br>
    <br>The table below lists some of the instrument method settings we tested on our QEplus. 
	<br>We use a nanoAcquity UPLC with home made columns (30cm x 75&mu;m, Magic C18AQ 100&#8491; 5&mu;m) and trap column (3cm x 100&mu;m, Magic C18AQ 200&#8491; 5&mu;m), with 5-30% B (ACN, 0.1%FA) in 90min gradient.
        The sample is a Ramos cell whole cell tryptic digest (Thanks to Dr. Richard G. James, Seattle Children's), 100 ng on column injection. We typically get ~19000 unique peptides with Comet search and PeptideProphet p&gt;p0.9, 
	<br>The results below are based on the number of unique peptides with Comet search and PeptideProphet p&gt;0.9.
<br>
<br>
<table border="0" cellpadding="4" width="100%" style="background-color:#EBEBF5">
<thead><tr><th align="left" style="background-color:#9999CC" width="30%">Q Exactive plus</th><th align="left" style="background-color:#9999CC" width="70%"> </th></tr></thead>
<thead><tr><th align="left" style="background-color:#9999CC" >Best Result (100%)</th><th align="left" style="background-color:#9999CC" >Tested Values (X%)</th></tr></thead>
<tbody>
<tr>
<td align="left" style="background-color:#D6D6EB"><strong>Software Version</strong></td>
<td align="left" style="background-color:#D6D6EB"><strong>QE 2.3</strong></td>
</tr>
<tr>
<td align="left">Include: 2-5 charge (MS1 35k)</td>
<td align="left">Include: unassigned &amp; 2-5(89%), 2-5 (100%), unassigned (71%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">Include: 2-5 charge (MS1 35k)</td>
<td align="left" style="background-color:#D6D6EB">Only 2 plus  (65%), 3 plus(43%), 4 plus (7%)</td>
</tr>
<tr>
<td align="left">MS1 resolution 70k</td>
<td align="left">MS1 resolution 35k (97%), 140k (98%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">Isolation width 1.6 </td>
<td align="left" style="background-color:#D6D6EB">Isolation width 2 (97%)</td>
</tr>
<tr>
<td align="left">Complex mix DDA</td>
<td align="left">Blank following complex mix (0.6%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">DDA: Top 30 </td>
<td align="left" style="background-color:#D6D6EB">DDA: Top 10 (99%), Top 20 (98%), Top 30 (100%), Top 40 (97%)</td>
</tr>
<tr>
<td align="left">DDA: Top 30</td>
<td align="left">4GPF windows (80%), MS1 scan split in 4 mz windows (84%); windows for both were 400-610, 600-810, 800-1000, 1010-2000</td>
</tr>

<tr>
<td align="left" style="background-color:#D6D6EB"><strong>Software Version</strong></td>
<td align="left" style="background-color:#D6D6EB"><strong>QE 2.5</strong></td>
</tr>
<tr>
<td align="left">NCE 25</td>
<td align="left">NCE 25 (100%), 28(94.9%), 30 (90.0%), 32 (78.7%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">MS1 m/z 400-2000 </td>
<td align="left" style="background-color:#D6D6EB">400-2000 (100%), 400-1500 (97.1%) </td>
</tr>
<tr>
<td align="left">Iso Width 1.6</td>
<td align="left">Iso Width 0.7 (80.2%), 1.2 (94.8%), 1.6 (100%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">Fusion vs Lumos vs QEplus (OTMS2) </td>
<td align="left" style="background-color:#D6D6EB">Fusion (SW1.2) 15900 (89.8%), Lumos (SW2.0 beta) 17700 (100%), QE (SW2.5) 15760 (89.0%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB"><strong>Software Version</strong></td>
<td align="left" style="background-color:#D6D6EB"><strong>QE 2.8 SP1</strong></td>
</tr>
<tr>
<td align="left">minAGC (50ms IT) 5e2 100%</td>
<td align="left">1e2 (99.5%), 2.5e2 (99.2%), 5e2 (100%), 1e3 (99.6%), 5e3 (98.1%), 1e4 (97.1%), 5e4 (74.8%)</td>
</tr>
<tr>
<td align="left"> =  IntThreshold 1e4 (100%)</td>
<td align="left">2e3 (99.5%), 5e3 (99.2%), 1e4 (100%), 2e4 (99.6%), 1e5 (98.1%), 2e5 (97.1%), 1e6 (74.8%)</td>
</tr>

</tbody>
</table>
</p>

<p>

<br>The table below lists some of the instrument method settings we tested on our QE (before the QEplus upgrade) 
	<br>Same setup except the sample is a yeast whole cell tryptic digest (Thanks to Dr. Judit Villen, UW), 100 ng on column injection. We typically get ~10000 unique peptides with sequest search and PeptideProphet p&gt;0.9, 
	<br>The results below are based on the number of unique peptides with Sequest search and PeptideProphet p&gt;0.9.  
<br>
<br>
<table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th align="left" style="background-color:#9999CC" >Q Exactive</th><th align="left" style="background-color:#9999CC" > </th></tr></thead>
<thead><tr><th align="left" style="background-color:#9999CC" >Best Result (100%)</th><th align="left" style="background-color:#9999CC" >Tested Values (X%)</th></tr></thead>
<tbody>
<tr>
<td align="left">Isolation width 2</td>
<td align="left">Isolation width 1 (95%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">Excl.IsoOn</td>
<td align="left" style="background-color:#D6D6EB">All off (99%), Apex trigger (91%), PepMatchOn (88%), PepMatchPref (62%)</td>
</tr>
<tr>
<td align="left">Only Excl.IsoOn </td>
<td align="left">Exl.IsoOn and PepMatchOn (95%), Exl.IsoOn and PepMatchPref (97%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">DDA top 20</td>
<td align="left" style="background-color:#D6D6EB">DDA top 30 (97%)</td>
</tr>
<tr>
<td align="left">Signal Threshold 10k </td>
<td align="left">2k (96%),  5k (94%),  10k (100%), 20k (93%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">MS2 target value 5e4</td>
<td align="left" style="background-color:#D6D6EB">5e4 (99%), 1e5 (98%), 2e5 (98%), 5e5 (97%), 1e6 (100%)</td>
</tr>
<tr>
<td align="left">MS1 target value 1e6</td>
<td align="left">1e5 (90%), 5e5 (94%), 1e6 (100%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">iTRAQ NCE</td>
<td align="left" style="background-color:#D6D6EB">peptide ID's:NCE 20 (80%), NCE 25 (100%), NCE 30 (90%), SNCE 20/25/30 (83%)</td>
</tr>
<tr>
<td align="left">Missing ITRAQ reporter (% of total ID's)</td>
<td align="left">all channels &#160; 113 &#160; &#160; 114 &#160; &#160; 115 &#160; &#160; 116 &#160; &#160; 117 &#160; &#160; 118 &#160; &#160; 119 &#160; &#160; 121</td>
</tr>
<tr>
<td align="left">NCE 20</td>
<td align="left">&#160; &#160; 2.8 &#160; &#160; &#160; &#160; &#160; &#160; &#160; 10.4 &#160; &#160; 10.2 &#160; &#160; 11.6 &#160; &#160; 16 &#160; &#160; 11.7 &#160; &#160; 9.1 &#160; &#160; 20.6 &#160; &#160; 7.5</td>
</tr>
<tr>
<td align="left">NCE 25</td>
<td align="left">&#160; &#160; 0.3 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 1.3 &#160; &#160; &#160; 1.1 &#160; &#160; &#160; 1.5 &#160; &#160; &#160; 2.4 &#160; &#160; 1.6 &#160; &#160; 1.1 &#160; &#160; 3.5 &#160; &#160; &#160; 0.7</td>
</tr>
<tr>
<td align="left">NCE 30</td>
<td align="left">&#160; &#160; 0.0 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 0.1 &#160; &#160; &#160; 0.2 &#160; &#160; &#160; 0.2 &#160; &#160; 0.4 &#160; &#160; 0.3 &#160; &#160; 0.1 &#160; &#160; 0.8 &#160; &#160; 0.0</td>
</tr>
<tr>
<td align="left">SNCE 20/25/30</td>
<td align="left">&#160; &#160; 0.5 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 2.5 &#160; &#160; &#160; 2.3 &#160; &#160; &#160; 2.8 &#160; &#160; 4.2 &#160; &#160; 2.8 &#160; &#160; 1.9 &#160; &#160; 5.7 &#160; &#160; &#160; 1.7</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">Loading amount on column</td>
<td align="left" style="background-color:#D6D6EB">1000 ng  (96.2%), 500 ng (100%), 250 ng (96.7%), 100 ng (96.8%)</td>
</tr>
</tbody>
</table>
</p>
<p>
<h2 id="hela">Hela digest concentration curve</h2>
	<a href="#page">Back to Top</a>
		<br>

<br>Different concentrations of Pierce HeLa Protein Digest Standard (50, 100, 200, 500, 800, 1000 ng) were injected and separated with a 90 min 5-35% acetonitrile gradient over 90 min. 
Peptides were identified with our standard DDA method and search tools. 
<br>
	<div style="background-image: url('images/qexactive_Hela.png'); height: 733px; width: 766px;"></div>
	<br><br>
	TIC (total ion chromatogram) of the different concentrations overlay, normalized to 1000 ng chromatogram. 
	<br><br>
	<div style="background-image: url('images/qexactive_Hela_02.png'); height: 487px; width: 841px;"></div>
	<br><br>

</p>
<p>
	<ul><h2 id="resources">Useful resources</h2>
	<a href="#page">Back to Top</a>
		<br><br>
			<li><a target="new" href="http://proteomicsnews.blogspot.com/p/q-exactive-tutorial-videos.html">Q Exactive Tutorial videos by Ben Orsburn</a></li>
			<li><a target="new" href="https://documents.thermofisher.com/TFS-Assets/CMD/Reference-Materials/WS-MS-Q-Exactive-Calibration-Maintenance-iQuan2016-EN.pdf">Q Exactive Calibration &amp; Maintenance</a></li>
	</ul>
</p>
						   
						   
						   
						   </section>
                     </div>
      
                     <!-- Sidebar -->
                     <div id="sidebar" class="4u">
                        <section>
                           <header class="major">
                              <h2>Quick links</h2>
                           </header>
                           <div class="row half">
                              <section class="6u">
                                 <ul class="default">
                                    <li><a href="#specs">Specifications</a></li>
                                    <li><a href="#software">Software</a></li>
                                    <li><a href="#calis">Calibrations</a></li>
                                    <li><a href="#parameters">Method parameters</a></li>
                                    <li><a href="#hplc">HPLC setup</a></li>
                                 </ul>
                              </section>
                              <section class="6u">
                                 <ul class="default small">
                                    <li><a href="#settings">Instrument settings</a></li>
									<li><a href="#TMTsettings">TMT instrument settings</a></li>
                                    <li><a href="#resolution">Resolution/Transient</a></li>
                                    <li><a href="#hela">Hela reference data</a></li>
                                    <li><a href="#resources">Useful resources</a></li>
                                    
                                 </ul>
                              </section>
                           </div>
                        </section>
                        <section>
                           <header class="major">
                              <h2>UWPR documents and pages</h2>
                           </header>
                           <ul class="default">
                              <li><a href="/docs/InstrumentSoftwareVersions.xls">Instrument control software (.xls)</a></li>
		                      <li><a target="new" href="/docs/protocols05/UWPR_Win10LTSB2016_upgrade.pdf">Tips for upgrading to Win10 LTSB 2016 (pdf)</a></li>
                              <li><a href="/docs/Calibrations.xlsx">Calibrations (.xlsx)</a></li>
							  <li><a target="new" href="/docs/protocols05/UWPR_LC_MS_setup_EASYnLC.pdf">LC-MS setup procedure EASYnLC(pdf)</a>
							  <li><a target="new" href="EASYnLC.php">EASYnLC page</a></li>
							  <li><a target="new" href="/protocols05/PRM.php">PRM page</a></li>
				              <li><a target="new" href="/protocols05/DIA.php">DIA page</a></li>
							  <li><a target="new" href="/protocols03/isotopic_labeling.php">Isotopic Labeling page</a></li>
							  <li><a target="new" href="/protocols05/MRM.php">MRM/SRM page</a></li>
                           </ul>
                        </section>
                     </div>
                     
                  </div>
               </div>
            <!-- /Page -->

   </div>

<?php  include("../__footer.php"); ?>
