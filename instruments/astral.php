<?php  include("../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <div class="row">
                  
                     <!-- Content -->
                     <div id="content" class="8u skel-cell-important">
                        <section>
                           <header class="major">
                              <h1>Orbitrap Astral</h1>
                              <span class="byline">Hybrid quadrupole-Orbitrap-Astral mass spectrometer</span>
                           </header>
                           
						   <div style="background-image: url('images/Astral_01.png'); height: 200px; width: 550px; background-size: 550px auto; background-repeat: no-repeat;"></div>

<br><p>The Thermo Scientific The Orbitrap Astral mass spectrometer contains three mass analyzers: a quadrupole mass analyzer for precursor ion selection, 
the Orbitrap mass analyzer to acquire high dynamic range HRAM spectra, and the novel Astral mass analyzer to acquire high sensitivity, high dynamic range 
HRAM spectra  at a rate of up to 200 Hz. Together, the analyzers’ unique strengths maximize performance and usability.
The front end—ion source to quadrupole—maximizes instrument sensitivity and robustness. The Orbitrap mass analyzer enables the collection of panoramic 
full scan data at high resolution.  The Astral mass analyzer adds fast (up to 200 Hz), sensitive, high dynamic range HRAM capabilities that are fully 
synchronized with the Orbitrap analyzer acquisition. Due to this synchronization the Orbitrap Astral mass spectrometer excels at many data acquisition 
strategies including high resolution data-independent acquisition (HR-DIA), and data-dependent acquisition (DDA) for identification and label-free quantitation (LFQ), 
as well as tandem mass tag (TMT™)-based multiplexed quantification using TMTpro™ 18-plex reagents. 


 </p>

<p>Visit the <a target="new" href="https://www.thermofisher.com/us/en/home/industrial/mass-spectrometry/liquid-chromatography-mass-spectrometry-lc-ms/lc-ms-systems/orbitrap-lc-ms/orbitrap-astral-mass-spectrometer.html">Astral site</a> for more information
				
<p>  8/15/2024 Astral (SN# OA10191, UW tag 2045625) Installed



	
	<h2 id="specs">Specifications</h2>		

	<a href="#page">Back to Top</a>
	<br><br>
	<ul><strong>Scan Rate</strong>
		<li>MS/MS acquisition rates of up to 200 Hz in the Astral mass analyzer with 80,000 resolution at m/z 524 with a maximum injection time of 3 ms</li>
		<li>MS/MS acquisition rates of up to 40 Hz with 7,500 resolution at m/z 200 for the Orbitrap mass analyzer </li>
	</ul>

	<ul><strong>Resolution</strong>
		<li>Maximum Astral mass analyzer resolution up to 80,000 FWHM at m/z 524 enabling resolution of TMTpro™ 18-plex reporter ions</li>
		<li>Maximum Orbitrap mass analyzer resolution of up to 480,000 FWHM at m/z 200</li>
		
	</ul>

	<ul><strong>Mass accuracy</strong>
	    <li>Astral &lt; 5 ppm RMS drift over 24 hours using external calibration</li>
		<li>Orbitrap &lt; 3 ppm RMS drift over 24 hours using external calibration</li>
		<li>Orbitrap &lt; 1 ppm RMS drift over 24 hours using internal calibration</li>
	</ul>

	<ul><strong>Sensitivity</strong>
		<li>Orbitrap dynamic range > 5000 within a single Orbitrap mass analyzer spectrum </li>
		<li>Astral dynamic range >1,000 within a single microscan Astral mass spectrum</li>
		
	</ul>

	<ul><strong>Features</strong>
		<li>Higher Energy Collisional Dissociation (HCD)</li>
		<li>EASY-IC™ (internal calibration) source</li>
		<li>Quadrupole mass filter</li>
		<li>Ion Routing Multipole (IRM) trapping, focuses and routes ions more effectively</li>
		<li>Orbitrap mass analyzer</li>
		<li>Astral (Asymmetric Track Lossless) mass analyzer</li>
		<li>Extensive pre-built method templates for data-dependent acquisition (DDA), data-independent acquisition (DIA), 
		TMT, and SureQuant for multiple application areas including plasma and single cell proteomics</li>
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
	
	
	
	<h2 id="pcconfig">PC configuration</h2>
	<a href="#page">Back to Top</a>
	<br><br>
	<ul>
				<li><a target="new" href="/docs/protocols05/UWPR_Win10LTSC_upgrade.pdf">Tips for upgrading to Win10 LTSC 2019 on TNG instruments (pdf)</a>
				<li><a target="new" href="/docs/protocols05/UWPR_Win10LTSC_PC_configuration.pdf">Tips configuring Win10 LTSC 2019 on Thermo instrument PC (pdf)</a>
	</ul>
<p>
	<h2 id="resolution">Resolving Power and Transient Length</h2>
	<a href="#page">Back to Top</a>
	<br>
	<br>Here is a full table of the available resolution settings.  
		Note: higher resolution does not always result in better mass accuracy.  
		The higher the resolution increases your ability to distinguish between m/z ions.  As you can see in this table, there is always a trade of higher 
		resolution with time.  15k is the lowest resolution setting, with the fastest scan speed of ~15 Hz.  On the Fusion, the highest resolution setting is 450K that is <1 Hz.  
	
	<br>To fully take advantage of the parallel fill and detect capabilities of the Fusion, we need to balance the max fill times with the transient length. 
		For resolving power 30,000, detection time is about 64 ms. There is always a small amount of inter-scan delay.  Up to 54 ms can be used to fill the C-trap with ions- and without increasing cycle time. 
	<br>In SW version 2.1 50k resolution OT scans for TMT 10plex experiments shows a ~10% improvement over 60k resolution. We successfully used 30k resolution as well. 
<br>
<br>
<table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th style="background-color:#9999CC" ><strong>Orbitrap Analyzer</strong></th>
			<th style="background-color:#9999CC" ></th>
			<th style="background-color:#9999CC" ></th>
<thead><tr><th style="background-color:#9999CC" >Res. at m/z 200</th>
			<th style="background-color:#9999CC" >Transient length [ms]</th>
			<th style="background-color:#9999CC" >Scan speed [Hz]</th>
			
<tbody>
	<tr>
		<td align="center">7,500</td>
		<td align="center">16</td>
		<td align="center">40</td>
		
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">15,000</td>
		<td align="center" style="background-color:#D6D6EB">32</td>
		<td align="center" style="background-color:#D6D6EB">22</td>
		
	</tr>
	<tr>
		<td align="center">30,000</td>
		<td align="center">64</td>
		<td align="center">12</td>
		
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">45,000</td>
		<td align="center" style="background-color:#D6D6EB">96</td>
		<td align="center" style="background-color:#D6D6EB">10</td>
		
	</tr>
	<tr>
		<td align="center">60,000</td>
		<td align="center">128</td>
		<td align="center"> 7</td>
		
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">120,000</td>
		<td align="center" style="background-color:#D6D6EB">256</td>
		<td align="center" style="background-color:#D6D6EB"> 3</td>
		
	</tr>
	<tr>
		<td align="center">240,000</td>
		<td align="center">512</td>
		<td align="center"> 1.5</td>
		
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">480,000</td>
		<td align="center" style="background-color:#D6D6EB">1024</td>
		<td align="center" style="background-color:#D6D6EB"> 0.7</td>
		
	</tr>
</tbody>
</table>

<table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th style="background-color:#9999CC" ><strong>Astral Mass Analyzer</strong></th>
			<th style="background-color:#9999CC" ></th>
			<th style="background-color:#9999CC" ></th>
<thead><tr><th style="background-color:#9999CC" >Res. at m/z 524</th>
			<th style="background-color:#9999CC" >Max. Inject. Time [ms]</th>
			<th style="background-color:#9999CC" >Scan speed [Hz]</th>
			
<tbody>
	<tr>
		<td align="center">Up to 80,000</td>
		<td align="center">2.5</td>
		<td align="center">200</td>
		
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">Up to 80,000</td>
		<td align="center" style="background-color:#D6D6EB">20</td>
		<td align="center" style="background-color:#D6D6EB">25</td>
		
	</tr>
	<tr>
		<td align="center">Up to 80,000</td>
		<td align="center">40</td>
		<td align="center">12.5</td>
		
	
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
				<li><a target="new" href="/docs/instruments/UWPR_LC_MS_setup_VanquishNeo.pdf">LC-MS setup procedure VanquishNeo (pdf)</a>
                <li><a target="new" href="/docs/protocols05/UWPR_LC_MS_setup.pdf">LC-MS setup procedure nanoAcquity (pdf)</a>
				
			</ul>
			
	<h2 id="templates">Method Templates</h2>
	<a href="#page">Back to Top</a>
	<br>
    <br>The following pdf documents summarize some of parameters from the method templates provided by Thermo in their method editor:
	<ul>
				<li><a target="new" href="/docs/instruments/MethodTemplates_DDA_Astral_SW1.1.pdf">MethodTemplates_DDA_Astral_SW1.1 (pdf)</a>
				<li><a target="new" href="/docs/instruments/MethodTemplates_DIA_Astral_SW1.1.pdf">MethodTemplates_DIA_Astral_SW1.1 (pdf)</a>
                				
			</ul>
	
<table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th style="background-color:#9999CC" ><strong>Low Level DIA methods</strong></th>
			<th style="background-color:#9999CC" ></th>
			<th style="background-color:#9999CC" ></th>
<thead><tr><th style="background-color:#9999CC" >Concentration</th>
			<th style="background-color:#9999CC" >Isolation width [Th]</th>
			<th style="background-color:#9999CC" >Injection Time [ms]</th>
			
<tbody>
	<tr>
		<td align="center"><250 pg</td>
		<td align="center">20</td>
		<td align="center">60</td>
		
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">250-500 pg</td>
		<td align="center" style="background-color:#D6D6EB">20</td>
		<td align="center" style="background-color:#D6D6EB">40</td>
		
	</tr>
	<tr>
		<td align="center">1-2 ng</td>
		<td align="center">10</td>
		<td align="center">20</td>
	</tr>	
	<tr>
		<td align="center" style="background-color:#D6D6EB">2-5 ng</td>
		<td align="center" style="background-color:#D6D6EB">8</td>
		<td align="center" style="background-color:#D6D6EB">14</td>
		
	</tr>
	<tr>
		<td align="center">5-10 ng</td>
		<td align="center">5</td>
		<td align="center">10</td>
	</tr>	
	
</tbody>
</table>
	
	<h2 id="settings">Instrument Settings</h2>
	<a href="#page">Back to Top</a>
	<br>
    <br>The table below lists some of the instrument method settings we tested on our Astral. 
	<br>We use a EASYnLC UPLC or VanquishNeo with home made columns (35cm x 75&mu;m, Reprosil Pur C18AQ 120&#8491; 5&mu;m) and trap column (EASYnLC: 3cm x 100&mu;m, Reprosil Purc C18AQ 120&#8491; 5&mu;m, VanquishNeo: Thermo trap cartridge ), with 6-45% B (80% ACN, 0.1%FA) in 90min linear gradient.
        The sample is a Hela cell whole cell tryptic digest (ThermoFisher), 100 ng on column injection. Using the Astral for MS2, we typically get ~30000 unique peptide ID's and 70000 PSM's with Comet search and peptide prophet p>0.9. 
	<br>The results below are based on the number of unique peptide ID's with Comet search and peptide prophet p>0.9.  
<br>
<br>
<table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th align="left" style="background-color:#9999CC" ><strong>Tested Setting</strong></th><th align="left" style="background-color:#9999CC" ><strong>Best Result (100%)</strong></th></tr></thead>
<tbody>
<tr>
<td align="left" style="background-color:#D6D6EB"><strong>Software Version</strong></td>
<td align="left" style="background-color:#D6D6EB"><strong>Astral 1.1</strong></td>
</tr>
<tr>
<td align="left">MS2 ion time, 10ng Hela, unique ID's</td>
<td align="left">3 (48%), 5 (63%), 10 (84%), 15 (95%),<strong>20 (100%)</strong></td>
</tr>
<tr>
<td align="left">MS2 ion time, 10ng Hela, PSM's</td>
<td align="left">3 (47%), 5 (64%), 10 (87%), 15 (97.5%),<strong>20 (100%)</strong></td>
</tr>
<tr>
<td align="left">MS2 ion time, 10ng Hela, protein ID's</td>
<td align="left">3 (73%), 5 (83%), 10 (96%), 15 (99%),<strong>20 (100%)</strong></td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">MS2 ion time, 100ng Hela, unique ID's</td>
<td align="left" style="background-color:#D6D6EB">3 (97%), 5 (99%), <strong>10 (100%)</strong>, 15 (98%),20 (94%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">MS2 ion time, 100ng Hela, PSM's</td>
<td align="left" style="background-color:#D6D6EB">3 (94%), <strong>5 (100%)</strong>, 10 (92%), 15 (83%),20 (75%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">MS2 ion time, 100ng Hela, protein ID's</td>
<td align="left" style="background-color:#D6D6EB">3 (98%), <strong>5 (100%)</strong>, 10 (99%), 15 (97%),20 (94%)</td>
</tr>
<tr>
<td align="left">RF lens voltage, unique ID's</td>
<td align="left"> 40 (97.4%), <strong>45 (100%)</strong>, 50 (98.1%), 55 (99.4%), 60 (95.6%), 65 (97.1%) </td>
</tr>
<tr>
<td align="left">RF lens voltage, PSM's</td>
<td align="left"> 40 (97.0%), <strong>45 (100%)</strong>, 50 (98.6%), 55 (99.3%), 60 (94.5%), 65 (95.5%) </td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB"><strong>Software Version</strong></td>
<td align="left" style="background-color:#D6D6EB"><strong>Astral 1.0 SP3</strong></td>
</tr>
<tr>
<td align="left">AGC (MS2), unique ID's</td>
<td align="left">AGC 75 (94%), <strong>100 (100%)</strong>, 200 (99%), 300 (98%), 400 (96%), 500 (95%)</td>
</tr>	
<tr>
<td align="left">AGC (MS2),  PSM's</td>
<td align="left">AGC 75 (93%), <strong>100 (100%)</strong>, 200 (95%), 300 (88%), 400 (83%), 500 (80%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">Isolation width, unique ID's</td>
<td align="left" style="background-color:#D6D6EB">IsoWidth 0.7 (92.9%), <strong>1.2 (100%)</strong>, 1.6 (98.6%), 2 (98.9%)</td>
</tr>	
<tr>
<td align="left" style="background-color:#D6D6EB">Isolation width, PSM's</td>
<td align="left" style="background-color:#D6D6EB">IsoWidth0.7 (60.3%), 1.2 (80.7%), 1.6 (87.4%), <strong>2 (100%)</strong></td>
</tr>
<tr>
<td align="left">Collision energy, unique ID's</td>
<td align="left">NCE 25 (99.9%), <strong>30 (100%)</strong>, 35 (90.3%)</td>
</tr>
<tr>
<td align="left">Collision energy, PSM's</td>
<td align="left"><strong>NCE 25 (100%)</strong>, 30 (97.9%), 35 (88%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">MS2 Orbitrap vs Astral, unique ID's</td>
<td align="left" style="background-color:#D6D6EB"><strong>Astral MS2 (100%)</strong>, Orbitrap MS2 (69%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">MS2 Orbitrap vs Astral, PSM's</td>
<td align="left" style="background-color:#D6D6EB"><strong>Astral MS2 (100%)</strong>, Orbitrap MS2 (37%)></td>
</tr>
<tr>
<td align="left">Gradient (6-45%B) length , unique ID's</td>
<td align="left"><strong>120 min (100%)</strong>, 90 min (94.6%),60 min (81.6%), 30 min (63.3%)</td>
</tr>
<tr>
<td align="left">Gradient (6-45%B) length , PSM's</td>
<td align="left"><strong>120 min (100%)</strong>, 90 min (88.4%), 60 min (69.2%), 30 min (47.6%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">Exploris 480 90 min (100%), unique ID's</td>
<td align="left" style="background-color:#D6D6EB">Astral 120 min  (144%), <strong>90 min (136%)</strong>, 60 min (118%), 30 min (91%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">Exploris 480 90 min (100%), unique PSM's</td>
<td align="left" style="background-color:#D6D6EB">Astral 120 min  (279%), <strong>90 min (246%)</strong>, 60 min (193%), 30 min (133%)</td>
</tr>

</tbody>
</table>	

<p>
	<h2 id="hela">Hela digest concentration curve</h2>
	<a href="#page">Back to Top</a>
		<br>
		<br>Different concentrations of Pierce HeLa Protein Digest Standard (10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 200, 300, 400, 500 ng) were injected and separated with a 6-35% Buffer B (80% ACN) gradient over 60 min  
			Peptides were identified with our standard DDA method and search tools. 

            <div style="background-image: url('images/Astral_Hela_01.png'); height: 890px; width: 827px;"></div>
            


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
									<li><a href="#resolution">Resolution/Transient</a></li>
                                    
                                 </ul>
                              </section>
                              <section class="6u">
                                 <ul class="default small">
								    <li><a href="#pcconfig">PC configuration</a></li>
								    <li><a href="#hplc">HPLC setup</a></li>
									<li><a href="#templates">Method Templates</a></li>
                                    <li><a href="#settings">Instrument settings</a></li>
									
                                    
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
