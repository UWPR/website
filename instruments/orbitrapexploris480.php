<?php  include("../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <div class="row">
                  
                     <!-- Content -->
                     <div id="content" class="8u skel-cell-important">
                        <section>
                           <header class="major">
                              <h1>Orbitrap Exploris 480</h1>
                              <span class="byline">Hybrid quadrupole-Orbitrap mass spectrometer</span>
                           </header>
                           
						   <div style="background-image: url('images/Exploris480_02.png'); height: 250px; width: 550px; background-size: 550px auto; background-repeat: no-repeat;"></div>

<br><p>The Thermo Scientific Orbitrap Exploris 480  is an advanced, intelligence-driven instrument, built for ultimate performance and ease of use.
	The hardware has been designed to address laboratory requirements for maximum uptime and easy serviceability.
	The instrument control software is shared with next generation Thermo Scientific™ Tribrid™ and Thermo Scientific™ TSQ triple quadrupole mass 
	spectrometers for simplicity of operation, reduced training needs, and easy transfer of methods and results from one research stage to the next. 
	The Orbitrap Exploris 480 mass spectrometer has unique capabilities which impart extra speed, depth, and certainty to enable you to run more 
	experiments or to gain deeper insights into your research.


 </p>

<p>Visit the <a target="new" href="https://planetorbitrap.com/orbitrap-exploris-480">Planet Orbitrap website</a> for more information
				
<p>12/1/2020 Exploris480 system 1 (SN MA10302C, UW tag 2033415) Installed
<br>3/23/2023 Exploris480 system 2 (SN MA10852C, UW tag 2033420) Installed


	
	<h2 id="specs">Specifications</h2>		

	<a href="#page">Back to Top</a>
	<br><br>
	<ul><strong>Scan Rate</strong>
		<li>Up to 40 Hz at resolution setting 7500 at m/z 200</li>
		<li>Multiplexity: up to 20 precursors/scan</li>
	</ul>

	<ul><strong>Resolution</strong>
		<li>up to 480 000 at m/z 200</li>
		
	</ul>

	<ul><strong>Mass accuracy</strong>
		<li>&lt; 3 ppm RMS drift over 24 hours using external calibration</li>
		<li>&lt; 1 ppm RMS drift over 24 hours using internal calibration</li>
	</ul>

	<ul><strong>Sensitivity</strong>
		<li>Dynamic range &gt; 5000 within a single Orbitrap mass analyzer spectrum </li>
		<li>MS/MS: 50 fg reserpine on column S/N 100:1</li>
		<li>SIM: 50 fg reserpine on column S/N 150:1</li>
	</ul>

	<ul><strong>Features</strong>
		<li>Higher Energy Collisional Dissociation (HCD)</li>
		<li>EASY-IC™ (internal calibration) source</li>
		<li>Quadrupole mass filter</li>
		<li>Ion Routing Multipole (IRM) trapping, focuses and routes ions more effectively</li>
		<li>Orbitrap mass analyzer</li>
		<li>Broader range of experiments with multiple scan modes: 
		data-dependent acquisition (DDA), data-independent acquisition (DIA), spectral multiplexing (MSX), 
		TopN and new TopSpeed (TopS), BoxCar DIA and DDA experiments, tSIM, tSIM MSX, ddMS/MS, targeted MS/MS</li>
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
	<h2 id="resolution">Resolving Power and Transient Length</h2>
	<a href="#page">Back to Top</a>
	<br>

	<br>Here is a full table of the available resolution settings.  
		Note: higher resolution does not always result in better mass accuracy.  
		The higher the resolution increases your ability to distinguish between m/z ions.  As you can see in this table, there is always a trade of higher 
		resolution with time. The Exploris480 allows acquisition of transients at resolution settings ranging from 7500 to 480,000 at m/z 200 (16 and 1024 ms transients, respectively).
	
	<br>To fully take advantage of the parallel fill and detect capabilities of the Exploris480, we need to balance the max fill times with the transient length. 
		For resolving power 15,000, detection time is about 32 ms. There is always a small amount of inter-scan delay.  Up to 22 ms can be used to fill the C-trap with ions- and without increasing cycle time. 
<br>
<br>
<table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th style="background-color:#9999CC" >Res. at m/z 200</th>
	<th style="background-color:#9999CC" >Transient length [ms]</th><th style="background-color:#9999CC" >Approx. scan speed [Hz]</th><th style="background-color:#9999CC" >"Free" fill time [ms]</th></tr></thead>
<tbody>
<tr>
		<td align="center" style="background-color:#D6D6EB">7500</td>
		<td align="center" style="background-color:#D6D6EB">16</td>
		<td align="center" style="background-color:#D6D6EB">40</td>
		<td align="center" style="background-color:#D6D6EB"></td>
	</tr>
	<tr>
		<td align="center">15,000</td>
		<td align="center">32</td>
		<td align="center">22</td>
		<td align="center">22</td>
	</tr>
		<tr>
		<td align="center" style="background-color:#D6D6EB">30,000</td>
		<td align="center" style="background-color:#D6D6EB">64</td>
		<td align="center" style="background-color:#D6D6EB">12</td>
		<td align="center" style="background-color:#D6D6EB">54</td>
	</tr>
	<tr>
		<td align="center">45,000</td>
		<td align="center"></td>
		<td align="center">10</td>
		<td align="center"></td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">60,000</td>
		<td align="center" style="background-color:#D6D6EB">128</td>
		<td align="center" style="background-color:#D6D6EB">7</td>
		<td align="center" style="background-color:#D6D6EB">118</td>
	</tr>
	<tr>
		<td align="center">120,000</td>
		<td align="center">256</td>
		<td align="center">3</td>
		<td align="center">246</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">180,000</td>
		<td align="center" style="background-color:#D6D6EB"></td>
		<td align="center" style="background-color:#D6D6EB">2</td>
		<td align="center" style="background-color:#D6D6EB"></td>
	</tr>
	<tr>
		<td align="center">240,000</td>
		<td align="center">512</td>
		<td align="center">1.5</td>
		<td align="center">502</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">480,000</td>
		<td align="center" style="background-color:#D6D6EB">1024</td>
		<td align="center" style="background-color:#D6D6EB">0.7</td>
		<td align="center" style="background-color:#D6D6EB">1014</td>
	</tr>
</tbody>
</table>

</p>  


<h2 id="TMTsettings">TMT instrument Orbitrap Exploris480 (Tune1.1)</h2>
	<a href="#page">Back to Top</a>
	<br>
    <br>The table below lists instrument method settings recommended by Thermo for the Lumos with Tune 3.3. 
	<br> with APD (Advanced Peak Detection) on
	<br> based on this document: <a target="new" href="https://assets.thermofisher.com/TFS-Assets/BID/Reference-Materials/tmt-tmtpro-instrument-acquisition.pdf">TMT/TMTpro Instrument Acquisition Parameter Settings</a>
<br>

<br><table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th style="background-color:#9999CC" >Properties</th>
			
			<th style="background-color:#9999CC" >MS2 120 min TMT 11plex</th>
			<th style="background-color:#9999CC" >MS2 120 min TMT 16plex</th>
			</tr></thead>
<tbody>
	<tr>
		<td align="left">Resolution Full MS</td>
		
		<td align="center">120,000</td>
		<td align="center">120,000</td>
	</tr>
	<tr>
		<td align="left" style="background-color:#D6D6EB">AGC target Full MS</td>
		
		<td align="center" style="background-color:#D6D6EB">100% (4e5)</td>
		<td align="center" style="background-color:#D6D6EB">100% (4e5)</td>
	</tr>
	<tr>
		<td align="left">MS max IT, ms</td>
		
		<td align="center">50</td>
		<td align="center">50</td>
	</tr>
	<tr>
	<td align="left" style="background-color:#D6D6EB">Scan range, m/z</td>
		
		<td align="center" style="background-color:#D6D6EB">400 - 1400</td>
		<td align="center" style="background-color:#D6D6EB">400 - 1400</td>
	</tr>
	<tr>
		<td align="left">Top Speed, s</td>
		
		<td align="center">3</td>
		<td align="center">3</td>
	</tr>
	<tr>
	<td align="left" style="background-color:#D6D6EB">MS2 max IT, ms</td>
		
		<td align="center" style="background-color:#D6D6EB">105</td>
		<td align="center" style="background-color:#D6D6EB">120</td>
	</tr>
	<tr>
		<td align="left">MS2 Isolation window, Th</td>
		
		<td align="center">0.7(2-3)-0.5(4+)</td>
		<td align="center">0.7</td>
	</tr>
	<tr>
	<td align="left" style="background-color:#D6D6EB">MS2 NCE, &#37;</td>
		
		<td align="center" style="background-color:#D6D6EB">38-40</td>
		<td align="center" style="background-color:#D6D6EB">32</td>
	</tr>
	<tr>
		<td align="left">MS2 Intensity threshold</td>
		
		<td align="center">5e4</td>
		<td align="center">5e4</td>
	</tr>
	<tr>
	<td align="left" style="background-color:#D6D6EB">Dynamic exclusion, s</td>
		
		<td align="center" style="background-color:#D6D6EB">60, single charge</td>
		<td align="center" style="background-color:#D6D6EB">60, single charge</td>
	</tr>
	<tr>
		<td align="left">MS2 Resolution</td>
		
		<td align="center">50,000</td>
		<td align="center">50,000</td>
	</tr>
	<tr>
	<td align="left" style="background-color:#D6D6EB">MS2 AGC target</td>
		
		<td align="center" style="background-color:#D6D6EB">200&#37; &#40; 1e5 &#41; </td>
		<td align="center" style="background-color:#D6D6EB">200&#37; &#40; 1e5 &#41; </td>
	</tr>
	<tr>
		<td align="left">First mass</td>
		
		<td align="center">m/z 110</td>
		<td align="center">m/z 110</td>
	</tr>
</tbody>
</table>

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

<h2 id="settings">Instrument Settings</h2>
	<a href="#page">Back to Top</a>
	<br>
    <br>The table below lists some of the instrument method settings we tested on our Exploris480. 
	<br>We use a EASYnLC UPLC with home made columns (35cm x 75&mu;m, Reprosil Pur C18AQ 120&#8491; 5&mu;m) and trap column (3cm x 100&mu;m, Reprosil Purc C18AQ 120&#8491; 5&mu;m), with 6-36% B (80% ACN, 0.1%FA) in 90min gradient.
        The sample is a Hela cell whole cell tryptic digest (ThermoFisher), 100 ng on column injection. We typically get ~22000 unique peptide ID's and 30000 PSM's with Comet search and PeptideProphet p&gt;0.9, 
	<br>The results below are based on the number of unique peptide ID's with Comet search and PeptideProphet p&gt;0.9.  
<br>
<br>
<table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th align="left" style="background-color:#9999CC" ><strong>Tested Setting</strong></th><th align="left" style="background-color:#9999CC" ><strong>Best Result (100%)</strong></th></tr></thead>
<tbody>
<tr>
<td align="left" style="background-color:#D6D6EB"><strong>Software Version</strong></td>
<td align="left" style="background-color:#D6D6EB"><strong>Exploris 4.4</strong></td>
</tr>
<tr>
<td align="left">Gradient (6-45%B), unique ID's</td>
<td align="left"><strong>120min (100%)</strong>, 90min (88.5%),60min (74.1%), 30min (46.8%)</td>
</tr>	
<tr>
<td align="left">Gradient (6-45%B),  PSM's</td>
<td align="left"><strong>120min (100%)</strong>, 90min (83.5%), 60min (67.6%), 30min (41.1%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB"><strong>Software Version</strong></td>
<td align="left" style="background-color:#D6D6EB"><strong>Exploris 4.2 SP1</strong></td>
</tr>
<tr>
<td align="left">MS2 res unique ID's</td>
<td align="left">MS2 7.5k (89%), 11.5k (96%), 15k (98%), <strong>22.5k (100%)</strong>, 30k (89%), 45k (71%)</td>
</tr>	
<tr>
<td align="left">MS2 res PSM's</td>
<td align="left">MS2 7.5k (88%), 11.5k (95%), 15k (98%), <strong>22.5k (100%)</strong>, 30k (89%), 45k (69%)</td>
</tr>


<tr>
<td align="left" style="background-color:#D6D6EB"><strong>Software Version</strong></td>
<td align="left" style="background-color:#D6D6EB"><strong>Exploris 4.0</strong></td>
</tr>
<tr>
<td align="left">10 plex TMT unique ID's MS2 res</td>
<td align="left"><strong><strong>45k (100%)</strong>, turbo 15k (60%), turbo 30k (98%)</td>
</tr>
<tr>
<td align="left">10 plex TMT PSM's MS2 res</td>
<td align="left">45k (99%), turbo 15k (64%), <strong>turbo 30k (100%)</strong></td>
</tr>
<tr>
<td align="left">% PSM's with signal in all TMT channels</td>
<td align="left">45k (99.5%), turbo 15k (92.9%), <strong>turbo 30k (99.6%)</strong></td>
</tr>

<tr>
<td align="left" style="background-color:#D6D6EB">MS2 res unique ID's</td>
<td align="left" style="background-color:#D6D6EB">MS2 7.5k (89%), <strong>15k (100%)</strong>, 30k (92%), 45k (72%), 60k (59%)</td>
</tr>	
<tr>
<td align="left" style="background-color:#D6D6EB">MS2 res PSM's</td>
<td align="left" style="background-color:#D6D6EB">MS2 7.5k (87%), <strong>15k (100%)</strong>, 30k (92%), 45k (70%), 60k (57%)</td>
</tr>
<tr>
<td align="left"> .  </td>
<td align="left">  .  </td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB"><strong>Software Version</strong></td>
<td align="left" style="background-color:#D6D6EB"><strong>Exploris 2.0</strong></td>
</tr>
<tr>
<td align="left">S-lens setting, unique ID's</td>
<td align="left">30 (93%), 40 (97%), <strong>50(100%)</strong>, 60 (92%)</td>
</tr>
<tr>
<td align="left">S-lens setting, PSM's</td>
<td align="left">30 (87%), 40 (94%), <strong>50(100%)</strong>, 60 (91%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">Gradient type, unique ID's</td>
<td align="left" style="background-color:#D6D6EB"><strong>3-19-29%B (100%)</strong>, 6-35%B (99.9%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">Gradient type, PSM's</td>
<td align="left" style="background-color:#D6D6EB">3-19-29%B (94%), <strong>6-35%B (100%)</strong></td>
</tr>

</tbody>
</table>

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
                                    <li><a href="#TMTsettings">TMT instrument settings</a></li>
									<li><a href="#hplc">HPLC setup</a></li>
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
