<?php  include("../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <div class="row">
                  
                     <!-- Content -->
                     <div id="content" class="8u skel-cell-important">
                        <section>
                           <header class="major">
                              <h1>Orbitrap Elite</h1>
                              <span class="byline">Hybrid Ion Trap Mass Spectrometer</span>
                           </header>
                           
<div style="background-image: url('images/OTElite_02.png'); height: 353px; width: 731px;"></div>

<br><p>The Thermo Scientific<sup>&trade; </sup> Orbitrap Elite<sup>&trade; </sup> mass spectrometer combines a dual linear ion trap (VelosPro) with a high-field orbitrap mass analyzer.  The Velos Pro ion trap contributes enhanced ion optics that increase sensitivity and reliability, a greater dynamic range for better precursor detection, and the power of MSn identification.  The high-field Orbitrap mass analyzer geometry and advanced signal processing technologies enable resolution of &gt;240,000, superior spectral quality, and higher scan speed.  The superior resolution and spectral quality, as well as the higher scan speed, increase proteome coverage in complex samples even with very low sample amounts.</p>
			
<p>Visit the <a target="new" href="http://planetorbitrap.com/orbitrap-elite">Planet Orbitrap website</a> for more information and for some nice animations</p>

	<p>2011 Velos Orbitrap (SN03313B) Installed
	<br>2012 Elite upgrade

	<h2 id="specs">Specifications</h2>		

		<a href="#page">Back to Top</a>
		<br><br>

		<ul><strong>Scan Rate</strong>
			<li>Orbitrap MSn 4 Hz at 60,000 resolution</li>
			<li>Ion trap MSn up to 10 Hz</li>
		</ul>

		<ul><strong>Resolution</strong>
			<li>15,000-240,000 (FWHM) at m/z 400</li>
		</ul>

		<ul><strong>Mass accuracy</strong>
			<li>&lt; 3 ppm RMS using external calibration</li>
			<li>&lt; 1 ppm RMS using internal calibration</li>
		</ul>



	<ul><strong>Features</strong>
		<li>High Field Orbitrap mass analyzer with resolving power up to 240,000 FWHM</li>
		<li>Advanced Signal processing</li>
		<li>S-Lens ion source for increased sensitivity</li>
		<li>CID/PQD and HCD Fragmentation</li>
		<li>Parallel MS and MSn analysis for enhanced duty cycle</li>
		<li>Velos Pro ion trap generation II ion optics with neutral blocking technology increase robustness</li>
	</ul>



	<h2 id="software">Instrument control software</h2>
		<a href="#page">Back to Top</a>
		<br><br>
		<ul>
			<li><a href="/docs/InstrumentSoftwareVersions.xls">Instrument control software (.xls)</a>
		
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
			resolution with time.  15k is the lowest resolution setting, with the fastest scan speed of ~7.7 Hz.  The highest resolution setting is 240K that is ~1.2 Hz.  
	
	
		<br>
		<br>
<table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th style="background-color:#9999CC" >OT Res. at m/z 200</th>
			<th style="background-color:#9999CC" >OT Elite Res. at m/z 200</th>
			<th style="background-color:#9999CC" >Transient length [ms]</th>
			<th style="background-color:#9999CC" >Approx. scan speed [Hz]</th></tr></thead>
<tbody>
	<tr>
		<td align="center"></td>
		<td align="center">15,000</td>
		<td align="center">48</td>
		<td align="center">7.7 </td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">7,500</td>
		<td align="center" style="background-color:#D6D6EB">30,000</td>
		<td align="center" style="background-color:#D6D6EB">96</td>
		<td align="center" style="background-color:#D6D6EB">6.9</td>
	</tr>
	<tr>
		<td align="center">15,000</td>
		<td align="center">60,000</td>
		<td align="center">192</td>
		<td align="center">4.0</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">30,000</td>
		<td align="center" style="background-color:#D6D6EB">120,000</td>
		<td align="center" style="background-color:#D6D6EB">384</td>
		<td align="center" style="background-color:#D6D6EB">2.3</td>
	</tr>
	<tr>
		<td align="center">60,000</td>
		<td align="center">240,000</td>
		<td align="center">768</td>
		<td align="center">1.2</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">100,000</td>
		<td align="center" style="background-color:#D6D6EB"></td>
		<td align="center" style="background-color:#D6D6EB">  </td>
		<td align="center" style="background-color:#D6D6EB"></td>
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
                <li><a target="new" href="/docs/protocols05/UWPR_LC_MS_setup.pdf">LC-MS setup procedure nanoAcquity (pdf)</a>
				
			</ul>

<h2 id="settings">Instrument Settings</h2>
	<a href="#page">Back to Top</a>
	<br>

    <br>The table below lists some of the instrument method settings we tested on our Elite. 
	<br>We use a nanoAcquity UPLC with home made columns (30cm x 75&mu;m, Dr Maisch C18AQ 100&#8491; 5&mu;m) and trap column (3cm x 100&mu;m, Dr Maisch C18AQ 100&#8491; 5&mu;m), with 5-30% B (ACN, 0.1%FA) in 90min gradient.
        The sample is a HeLa cell whole cell tryptic digest (ThermoPierce), 100 ng on column injection. 
	<br>The results below are based on the number of unique peptides with Comet search and peptide prophet p>0.9.  
<br>
<br>
<table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th align="left" style="background-color:#9999CC" >Best Result (100%)</th><th align="left" style="background-color:#9999CC" >Tested Values (x%)</th></tr></thead>
<tbody>
<tr>
<td align="left" style="background-color:#D6D6EB"><strong>Software Version</strong></td>
<td align="left" style="background-color:#D6D6EB"><strong>Orbitrap Elite 2.7 SP2</strong></td>
</tr>
<tr>
<td align="left">MS1 resolution 60k</td>
<td align="left">MS1 res. 60k(100%), 120k (97.2%), 240k (91%) </td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">Preview Off</td>
<td align="left" style="background-color:#D6D6EB">FT Master Scan Preview Off (100%) On (96.9%)</td>
</tr>
<tr>
<td align="left">IT MS2</td>
<td align="left">OT MS2 (  %)</td>
</tr>


<tr>
</tbody>
</table>
<br>
<br>
<p>
	<h2 id="m/z">Precursor m/z and charge state distribution</h2>
		<a href="#page">Back to Top</a>
		<br>
		<br>The  chart below shows the charge state and precursor m/z distribution for all the peptides identified with a peptide prophet cutoff 0.9
			The average of four LCMS runs with 90 min gradients, two replicates using a HeLa tryptic digest (Pierce, 100 ng on column) and two replicates of a tryptic digest from a Ramos cell whole cell lysate 100ng on column. 
			The combined total number of peptide identifications p&gt;= 0.9 is 38574; the total number of unique peptide identifications p&gt;= 0.9 is 19218.

            <div style="background-image: url('images/fusion_mz_charge.png'); height: 524px; width: 900px;"></div>

<br>m/z and charge state distribution 
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
                                 </ul>
                              </section>
                              <section class="6u">
                                 <ul class="default small">
									<li><a href="#hplc">HPLC setup</a></li>
                                    <li><a href="#settings">Instrument settings</a></li>
                                    <li><a href="#resolution">Resolution/Transient</a></li>
                                    
                                    <li><a href="#m/z">Precursor m/z</a></li>
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
		                      <li><a href="/docs/Calibrations.xlsx">Calibrations (.xlsx)</a></li>
							  <li><a target="new" href="/docs/protocols05/UWPR_LC_MS_setup.pdf">LC-MS setup procedure nanoAcquity (pdf)</a></li>
							  <li><a target="new" href="/protocols05/PRM.php">PRM page</a></li>
				              <li><a target="new" href="/protocols05/DIA.php">DIA page</a></li>
							  <li><a target="new" href="/protocols05/MRM.php">MRM/SRM page</a></li>
                           </ul>
                        </section>
                     </div>
                     
                  </div>
               </div>
            <!-- /Page -->

   </div>

<?php  include("../__footer.php"); ?>
