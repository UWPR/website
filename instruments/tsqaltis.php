<?php  include("../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <div class="row">
                  
                     <!-- Content -->
                     <div id="content" class="8u skel-cell-important">
                        <section>
                           <header class="major">
                              <h1>TSQ Altis</h1>
                              <span class="byline">Triple Quadrupole Mass Spectrometer</span>
                           </header>
                           
						   <div style="background-image: url('images/TSQAltis01b.png'); height: 250px; width: 550px; background-size: 550px auto; background-repeat: no-repeat;"></div>
						   <br>
						   
<p>The TSQ Altis, a triple quadrupole mass spectrometer, offers  improved Active Ion Management (AIM™) technology, segmented quadrupoles, novel electron multipliers, and enhanced ion transmission tubes.
<p>Visit the <a target="new" href="https://www.thermofisher.com/order/catalog/product/TSQ02-10002">Thermo TSQ Altis website</a> for more information and for some nice animations</p>



<p>TSQ Altis (TSQ-A-10306 / UW tag 2033410), Installed 10/16/2018 

	<h2 id="specs">Specifications</h2>		

		<a href="#page">Back to Top</a>
		<br><br>
		<ul><strong>Mass range</strong>
			<li>m/z 5 to 2000 Da</li>
			<li>600 SRMs/sec</li>
			<li>Selectivity 0.2 Da FWHM for high resolutions SRM</li>
			<li>Sensitivity 500 000 : 1</li>
		</ul>

		<ul><strong>Available scan functions</strong>
			<li>Collision induced dissociation (CID)</li>
			<li>3000 times SRMs (T-SRMs)
			<li>QED-MS/MS - Simultaneous quantitation and structural confirmation
			<li>iSRM - intelligent SRM
		</ul>
		
	<h2 id="software">Instrument control software</h2>
		<a href="#page">Back to Top</a>
		<br><br>
		<ul>
			<li><a href="/docs/InstrumentSoftwareVersions.xls">see spreadsheet (.xls format)</a>
			<li><a target="new" href="/docs/protocols05/UWPR_Win10LTSB2016_upgrade.pdf">Tips for upgrading to Win10 LTSB 2016 on TNG instruments (pdf)</a>
		</ul>
		
		
	<h2 id="calis">Instrument calibrations</h2>
		<a href="#page">Back to Top</a>
		<br><br>
		<ul>
			<li>This file summarizes calibration solutions and calibration tips <a href="/docs/Calibrations.xlsx">Calibrations (.xlsx)</a>
		</ul>
		
		<h2 id="collisionenergy">Collision Energy Calculation</h2>
		<a href="#page">Back to Top</a>
		<br><br>
		
		<p> For collision energy calculation check out our MRM/SRM overview <a target="new" href="/protocols05/MRM.php">page</a>.

		<p style="text-align:left"> Base Collision Energy (CE) Equations TSQ Altis
			(based on template method from Thermo):</p>
		<ul>
			<li>TSQ Altis (1.5 mTorr) 2 + peptide: CE = 0.0339 x m/z + 2.3398
			<li>TSQ Altis (1.5 mTorr) 3 + peptide: CE = 0.0295 x m/z + 1.4831
		<p>
      
		</ul>
	  
	  
	  <p><h2 id="hplc">HPLC setup</h2>
	  <a href="#page">Back to Top</a>
		<br><br>
                <br>the following documents are guidelines to setup the capillary trap/column on our LC-MS systems, 
                this is intended as a supplement to the hands on training required to use the UWPR instruments.
                
			<ul>
                
				<li><a target="new" href="/docs/protocols05/UWPR_LC_MS_setup_EASYnLC.pdf">LC-MS setup procedure EASYnLC(pdf)</a>
			</ul>
  
  <p><h2 id="standards">Peptide Standards</h2>
	  <a href="#page">Back to Top</a>
		<br><br>
				   <ul>
						<li><a href="/docs/protocols05/AngioNeuroStandard.xlsx">Simple peptide standards for LC-MS (xlsx)</a>
						<br><br>
						<li><a href="/docs/protocols05/AngioNeuro_QQQ_SRM.sky.zip">Skyline AngioNeuro_QQQ_SRM (zip)</a>
						<li><a href="/docs/protocols05/Promega_6x5_LCMS_Standard_Hela_QQQ_SRM.sky.zip">Skyline Promega 6x5_LCMS_Standard_Hela_QQQ_SRM (zip)</a>
						<li><a href="/docs/protocols05/AltisMethodTemplate_PRTC_Hela.sky.zip">Skyline for TSQ Altis method template "PRTC Hela" SRM (zip)</a>
						<li><a href="/docs/protocols05/AltisMethodTemplate_PRTCheavy.sky.zip">Skyline for TSQ Altis method template "PRTC heavy" SRM (zip)</a>
						<br><br>
						<li><a href="/docs/protocols05/AngioNeuro_Orbitrap_PRM.sky.zip">Skyline AngioNeuro_Orbitrap_PRM (zip)</a>
						<li><a href="/docs/protocols05/Promega_6x5_LCMS_Standard_Orbitrap_PRM.sky.zip">Skyline Promega 6x5_LCMS_Standard_Orbitrap_PRM (zip)</a>
						<li><a href="/docs/protocols05/Promega_6x5_LCMS_Standard_Hela_Orbitrap_PRM.sky.zip">Skyline Promega 6x5_LCMS_Standard_Hela_Orbitrap_PRM (zip)</a>
						<li><a href="/docs/protocols05/Sigma_MSQC1_Orbitrap_PRM.sky.zip">Skyline Sigma MSQC1_Orbitrap_PRM (zip)</a>
						<li><a href="/docs/protocols05/Hela_Orbitrap_PRM.sky.zip">Skyline Hela_Orbitrap_PRM (zip)</a>
						
				
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
                                    
                                 </ul>
                              </section>
                              <section class="6u">
                                 <ul class="default small">
                                    <li><a href="#collisionenergy">Collision Energy</a></li>
                                    <li><a href="#hplc">HPLC setup</a></li>
									<li><a href="#standards">Peptide Standards</a></li>
                                    
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
							  <li><a href="/docs/protocols05/AngioNeuroStandard.xlsx">Simple peptide standards for LC-MS (xlsx)</a></li>
							  <li><a target="new" href="/docs/protocols05/UWPR_LC_MS_setup_EASYnLC.pdf">LC-MS setup procedure EASYnLC(pdf)</a></li>
							  <li><a target="new" href="EASYnLC.php">EASYnLC page</a></li>
							  <li><a target="new" href="/protocols05/MRM.php">MRM/SRM page</a></li>
							  <li><a target="new" href="/protocols05/PRM.php">PRM page</a></li>
				              <li><a target="new" href="/protocols05/DIA.php">DIA page</a></li>
							  
                           </ul>
                        </section>
                     </div>
                     
                  </div>
               </div>
            <!-- /Page -->

   </div>

<?php  include("../__footer.php"); ?>
