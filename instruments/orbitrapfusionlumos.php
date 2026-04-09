<?php  include("../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <div class="row">
                  
                     <!-- Content -->
                     <div id="content" class="8u skel-cell-important">
                        <section>
                           <header class="major">
                              <h1>Lumos</h1>
                              <span class="byline">Orbitrap Fusion Lumos Tribrid MS</span>
                           </header>
                           
						   <div style="background-image: url('images/lumos02c.png'); height: 250px; width: 550px; background-size: 550px auto; background-repeat: no-repeat;"></div>


<br><p>The Thermo Scientific<sup>&trade; </sup> Orbitrap Fusion Lumos<sup>&trade; </sup> Tribrid<sup>&trade; </sup> mass spectrometer allows systems biology researchers to test new limits of quantitation and protein characterization. It incorporates the brightest ion source, a segmented quadrupole mass filter with improved selectivity and ion transmission, Advanced Vacuum Technology for improved ion transmission to the Orbitrap mass analyzer. Combined, these hardware improvements enable the new tribrid instrument to excel in the most challenging applications, including analysis of low level PTMs, multiplexed relative quantitation using isobaric tags, intact protein characterization, as well as MSn analysis of small molecules.</p>

<p>Visit the <a target="new" href="http://planetorbitrap.com/orbitrap-fusion-lumos">Planet Orbitrap website</a> for more information

		

	<p>1/8/2016 Fusion (CA2-MP25 / UW tag 2019657) Installed

	<h2 id="specs">Specifications</h2>		

	<a href="#page">Back to Top</a>
	<br><br>
	<ul><strong>Scan Rate</strong>
		<li>Orbitrap MSn up to 20 Hz</li>
		<li>Ion trap MSn up to 20 Hz</li>
	</ul>

	<ul><strong>Resolution</strong>
		<li>15,000-500,000 (FWHM) at m/z 200</li>
	</ul>

	<ul><strong>Mass accuracy</strong>
		<li>&lt; 3 ppm RMS using external calibration</li>
		<li>&lt; 1 ppm RMS using internal calibration</li>
	</ul>



	<ul><strong>Features</strong>
		<li>CID/HCD Fragmentation</li>
		<li>High Capacity Transfer Tube (HCTT) and Electrodynamic Ion Funnel (EIDF) for increased ion flux and lower limits of detection</li>
		<li>Segmented quadrupole mass filter allows for 0.4 u to 1200 u precursor isolation</li>
		<li>Ultra high field Orbitrap mass analyzer</li>
		<li>Spectral multiplexing for enhanced duty cycle</li>
		<li>Synchronous Precursor Selection Up to 15 precursors per MS2 scan, for MS3 analysis only</li>
	</ul>


	<h2 id="software">Instrument control software</h2>
	<a href="#page">Back to Top</a>
	<br><br>
	<ul>
		<li><a href="/docs/InstrumentSoftwareVersions.xls">Instrument control software (.xls)</a>
		<li><a target="new" href="/docs/protocols05/UWPR_Win10LTSC_upgrade.pdf">Tips for upgrading to Win10 LTSC 2019 on TNG instruments (pdf)</a>
		<li><a target="new" href="/docs/protocols05/UWPR_Win10LTSB2016_upgrade.pdf">Tips for upgrading to Win10 LTSB 2016 on TNG instruments (pdf)</a>
	</ul>


	<h2 id="calis">Instrument calibrations</h2>
	<a href="#page">Back to Top</a>
	<br><br>
	<ul>
		<li>This file summarizes calibration solutions and calibration tips <a href="/docs/Calibrations.xlsx">Calibrations (.xlsx)</a>
	</ul>


<p>
	<h2 id="parallelization">Parallelization on the Orbitrap Fusion</h2>
	<a href="#page">Back to Top</a>
		<br>
		<br>To improve the spectral acquisition rate the acquisition process on the Fusion Series is extensively parallelized.
		The figure below shows a schematic of parallel execution and event pipelining: Precursors identified in the 
		Orbitrap full scan (top row) are fragmented and accumulated  in the IRM (middle row) concurrent with LT acquisition of the previous MS/MS (bottom row).

			
            <div style="background-image: url('images/lumos03a.png'); height: 683px; width: 1050px; class=center"></div>

	<br>Senko MW et al. Novel parallelized quadrupole/linear ion trap/Orbitrap tribrid mass spectrometer improving proteome coverage and peptide identification rates. Anal Chem 85(24), 11710 - 4 (2013) 
</p>
<p>
	<h2 id="agc">AGC control on Orbitrap Fusion Series Instruments</h2>
	<a href="#page">Back to Top</a>
		<br>
		<br>Ion population control is an important concept for all trapping instruments. To ensure proper functioning of the Orbitrap and Linear Ion trap analyzers, 
		the ion populations are regulated at a given target level, in a process referred to as automatic gain control (AGC). The mechanism for the regulation is a 
		fast ion trap full scan referred to as the prescan. This scan is hidden and is not recorded in the raw file. The prescan makes a measurement of the 
		ion flux, and from this information, the injection time for subsequent scans can be set to deliver the target number of ions.
		<br>For <strong>data dependent experiments</strong>, the prescan uses the same settings as the MS master scan. The prescan is executed immediately before the master scan, and 
		the total ion current (TIC) from the prescan is used to set the injection time for the master scan. The identities (m/z and charge) of the precursors for the 
		dependent scans are extracted from the previous master scan, but the injection times for these dependent scans are calculated from the intensities in the prescan.
		<br>For <strong>targeted experiments</strong>, the prescan analyzes the mass range spanning the smallest target up to the largest target, and the injection times for each target are 
		calculated from intensities in the prescan. In the context of LC-MS, analyte intensity varies considerably as each compound elutes from the column, making the 
		length of time between prescan and subsequent scans an important factor to consider. When the list of targeted scans is large, the time between execution of the 
		prescan and execution of the later targeted scans could become significant, negatively affecting the accuracy of the ion population regulation. For this reason, 
		the Loop Control mechanism was added to the targeted experiment methods. For example, when Loop Control is set to Time, the prescan will be executed at a period 
		less than or equal to the specified time period, ensuring a certain proximity between prescan and targeted scans, which in turn can improve the accuracy of the calculated 
		injection times, and hence the quality of the acquired data.
</p>

<p>
	<h2 id="resolution">Resolving Power and Transient Length</h2>
	<a href="#page">Back to Top</a>
	<br>
	<br>Here is a full table of the available resolution settings.  
		Note: higher resolution does not always result in better mass accuracy.  
		The higher the resolution increases your ability to distinguish between m/z ions.  As you can see in this table, there is always a trade of higher 
		resolution with time.  15k is the lowest resolution setting, with the fastest scan speed of ~15 Hz.  On the Fusion, the highest resolution setting is 450K that is &lt;1 Hz.  
	
	<br>To fully take advantage of the parallel fill and detect capabilities of the Fusion, we need to balance the max fill times with the transient length. 
		For resolving power 30,000, detection time is about 64 ms. There is always a small amount of inter-scan delay.  Up to 54 ms can be used to fill the C-trap with ions- and without increasing cycle time. 
	<br>In SW version 2.1 50k resolution OT scans for TMT 10plex experiments shows a ~10% improvement over 60k resolution. We successfully used 30k resolution as well. 
<br>
<br>
<table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th style="background-color:#9999CC" >Res. at m/z 200</th>
			<th style="background-color:#9999CC" >Transient length [ms]</th>
			<th style="background-color:#9999CC" >Approx. scan speed [Hz]</th>
			<th style="background-color:#9999CC" >"Free" fill time [ms]</th></tr></thead>
<tbody>
	<tr>
		<td align="center">15,000</td>
		<td align="center">32</td>
		<td align="center">na</td>
		<td align="center">22</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">30,000</td>
		<td align="center" style="background-color:#D6D6EB">64</td>
		<td align="center" style="background-color:#D6D6EB">15</td>
		<td align="center" style="background-color:#D6D6EB">54</td>
	</tr>
	<tr>
		<td align="center">50,000</td>
		<td align="center">96</td>
		<td align="center">na</td>
		<td align="center">86</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">60,000</td>
		<td align="center" style="background-color:#D6D6EB">128</td>
		<td align="center" style="background-color:#D6D6EB">7.5</td>
		<td align="center" style="background-color:#D6D6EB">118</td>
	</tr>
	<tr>
		<td align="center">120,000</td>
		<td align="center">256</td>
		<td align="center"> 4</td>
		<td align="center">246</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">240,000</td>
		<td align="center" style="background-color:#D6D6EB">512</td>
		<td align="center" style="background-color:#D6D6EB"> 2 </td>
		<td align="center" style="background-color:#D6D6EB">502</td>
	</tr>
	<tr>
		<td align="center">450,000</td>
		<td align="center">1024</td>
		<td align="center"> <1</td>
		<td align="center">1014</td>
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
				<li><a target="new" href="/docs/instruments/UWPR_LC_MS_setup_VanquishNeo.pdf">LC-MS setup procedure VanquishNeo (pdf)</a>
                <li><a target="new" href="/docs/protocols05/UWPR_LC_MS_setup.pdf">LC-MS setup procedure nanoAcquity (pdf)</a>
				
			</ul>
			
			
	<h2 id="settings">Instrument Settings</h2>
	<a href="#page">Back to Top</a>
	<br>
    <br>The table below lists some of the instrument method settings we tested on our Lumos. 
	<br>We use a nanoAcquity UPLC with home made columns (35cm x 75&mu;m, Reprosil Pur C18AQ 120&#8491; 5&mu;m) and trap column (3cm x 100&mu;m, Reprosil Purc C18AQ 120&#8491; 5&mu;m), with 5-30% B (ACN, 0.1%FA) in 90min gradient.
        The sample is a Hela cell whole cell tryptic digest (ThermoFisher), 100 ng on column injection. We typically get ~17000 unique peptides with Comet search and PeptideProphet p&gt;0.9, 
	<br>The results below are based on the number of unique peptide ID's with Comet search and PeptideProphet p&gt;0.9.  
<br>
<br>
<table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th align="left" style="background-color:#9999CC" >Best Result (100%)</th><th align="left" style="background-color:#9999CC" >Tested Values (x%)</th></tr></thead>
<tbody>
<tr>
<td align="left" style="background-color:#D6D6EB"><strong>Software Version</strong></td>
<td align="left" style="background-color:#D6D6EB"><strong>Fusion 2.0</strong></td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB"><strong>OTMS2 comparisons</strong></td>
<td align="left" style="background-color:#D6D6EB"></td>
</tr>
<tr>
<td align="left">MS1 resolution 60k</td>
<td align="left">MS1 resolution 60k (100%), 120k (99.6%), 240k (90%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">MS1 AGC target 7e5</td>
<td align="left" style="background-color:#D6D6EB">MS1 AGC target 5e5 (98.2%), 6e5 (98.8%), 7e5 (100%)</td>
</tr>
<tr>
<td align="left">5-30 %B in 150 min </td>
<td align="left">5-30 %B in 90 min (84.3%), in 120min (92.2%), in 150 min (100%)</td>
</tr>

<tr>
<td align="left" style="background-color:#D6D6EB">5-30 %B in 90 min curve 6</td>
<td align="left" style="background-color:#D6D6EB">5-30 %B in 90 min curve 6 (100%), curve 7 (89.2%), curve 8 (77.1%)</td>
</tr>
<tr>
<td align="left">Isolation Width 1.6</td>
<td align="left">Isolation Width 0.4 (90.1%), 0.7 (95.6%), 1.2 (95.1%), 1.6 (100%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">HCD NCE 25</td>
<td align="left" style="background-color:#D6D6EB">HCD NCE 25 (100%), 29 (99.5%), 30 (98.9%), 31 (98.1%), 32 (99.8%), 33 (99.7%), 35 (99.7%)</td>
</tr>
<tr>
<td align="left">OTMS2 Resolution 30k</td>
<td align="left">OTMS2 Resolution 15k (98.1%), 30k (100%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">OTMS2 AGC 5e3 (IT 100ms)</td>
<td align="left" style="background-color:#D6D6EB">OTMS2 AGC 5e3 IT100ms (100%), 1e4 (97.9%), 2e4 (95.9%), 3e4 (93.4%), 4e4 (93.2%), 5e4 (92.4%), 2e4 IT300ms (87.3%)</td>
</tr>
<tr>
<td align="left">OTMS2: Dynamic Excl 60 sec</td>
<td align="left">Dynamic Excl 15 sec (97.0%), 60 sec (100%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">OTMS2</td>
<td align="left" style="background-color:#D6D6EB">OTMS2 (100%), ITMS2 (91%)</td>
</tr>
<tr>
<td align="left"></td>
<td align="left">OTMS2 (DE15s) 18933 unique and 32227 total peptide ID's</td>
</tr>
<tr>
<td align="left"></td>
<td align="left">ITMS2 (DE15s) 17227 unique and 31621 total peptide ID's</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">OTMS2 cycle time 2 sec </td>
<td align="left" style="background-color:#D6D6EB">OTMS2 cycle time 1 s (90.7%), 2 s (100%), 3 s (99.0%) </td>
</tr>
<tr>
<td align="left">Fusion vs Lumos vs QEplus (OTMS2) </td>
<td align="left">Fusion 15900(89.8%), Lumos 17700 (100%), QE 15760 (89.0%)</td>
</tr>
<tr>
<td align="left">Fusion vs Lumos (ITMS2)</td>
<td align="left">Fusion 18100 (100%), Lumos 18000 (99.4%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">  </td>
<td align="left" style="background-color:#D6D6EB"> </td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB"><strong>ITMS2 comparisons</strong></td>
<td align="left" style="background-color:#D6D6EB"></td>
</tr>
<tr>
<td align="left">ITMS2 AGC target 2e3</td>
<td align="left">ITMS2 AGC target 2e3 (100%), 3e3 (99.1%), 4e3 (98.5%),  5e3 (97.1%), 2e4 (91.0%), 3e4 (85.5%), 4e4 (85.3%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">HCD</td>
<td align="left" style="background-color:#D6D6EB">HCD (100%) CID (96.8%)</td>
</tr>
<tr>
<td align="left">Dynamic Exclusion DE15 sec</td>
<td align="left">unique peptide ID's: ITMS2 DE 15 s (100%), 30 s (97.7%), 60 s (94.6%)
<br>PSM's: ITMS2 DE 15 s (100%), 30 s (76.27%), 60 s (67.1%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">ITMS2 cycle time </td>
<td align="left" style="background-color:#D6D6EB">ITMS2 cycle time 1 s (99.9%), 2 s (100%), 3 s (99.9%)</td>
</tr>
<tr>
<td align="left">Fusion vs Lumos vs QEplus (OTMS2) </td>
<td align="left">Fusion (SW1.2) 15900 (89.8%), Lumos (SW2.0 beta) 17700 (100%), QE (SW2.5) 15760 (89.0%)</td>
</tr>
<tr>
<td align="left">Fusion vs Lumos (ITMS2)</td>
<td align="left">Fusion (SW1.2) 18100 (100%), Lumos (SW2.0 beta) 18000 (99.4%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">5-30 %B in 180 min unique ID's</td>
<td align="left" style="background-color:#D6D6EB">5-30% B in 60 mins (77.8%), 90 mins (88.2%), 120 mins (93.7%), 180 mins 100%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">5-30 %B in 180 min PSM's</td>
<td align="left" style="background-color:#D6D6EB">5-30% B in 60 mins (45.3%), 90 mins (62.9%), 120 mins (76.5%), 180 mins (100%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB"><strong>Software Version</strong></td>
<td align="left" style="background-color:#D6D6EB"><strong>Fusion 2.1</strong></td>
</tr>
<tr>
<td align="left">OTMS2 AGC 5e3</td>
<td align="left">OTMS2 AGC 5e3 (100%), 1e4 (96.5%), 5e4 (79.4%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">OTMS2 signThreshold 3e4</td>
<td align="left" style="background-color:#D6D6EB">OTMS2 signThreshold 3e4 (100%), 2e4 ( 88.4%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB"><strong>Software Version</strong></td>
<td align="left" style="background-color:#D6D6EB"><strong>Fusion 3.5</strong></td>
</tr>
<tr>
<td align="left">APD advanced peak detection</td>
<td align="left">unique ID's: ITMS2 APD(77.1%), ITMS2(68.2%), OTMS2 APD(100%), OTMS2(66.1%)</td>
</tr>
<tr>
<td align="left"> </td>
<td align="left">PSM's: ITMS2 APD(84.1%), ITMS2(90%), OTMS2 APD(100%), OTMS2(79.5%)</td>
</tr>
<tr>

</tr>
</tbody>
</table>
<br>



<h2 id="TMTsettings">TMT instrument Orbitrap Fusion Lumos settings (Tune3.3)</h2>
	<a href="#page">Back to Top</a>
	<br>
    <br>The table below lists instrument method settings recommended by Thermo for the Lumos with Tune 3.3. 
	<br> with APD (Advanced Peak Detection) on
	<br> based on this document: <a target="new" href="https://assets.thermofisher.com/TFS-Assets/BID/Reference-Materials/tmt-tmtpro-instrument-acquisition.pdf">TMT/TMTpro Instrument Acquisition Parameter Settings</a>
<br>

<br><table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th style="background-color:#9999CC" >Properties</th>
			<th style="background-color:#9999CC" >SPS MS3 120 min TMT 11plex</th>
			<th style="background-color:#9999CC" >SPS MS3 120 min TMT 16plex</th>
			<th style="background-color:#9999CC" >MS2 120 min TMT 11plex</th>
			<th style="background-color:#9999CC" >MS2 120 min TMT 16plex</th>
			</tr></thead>
<tbody>
	<tr>
		<td align="left">Resolution Full MS</td>
		<td align="center">120,000</td>
		<td align="center">120,000</td>
		<td align="center">120,000</td>
		<td align="center">120,000</td>
	</tr>
	<tr>
		<td align="left" style="background-color:#D6D6EB">AGC target Full MS</td>
		<td align="center" style="background-color:#D6D6EB">100% (4e5)</td>
		<td align="center" style="background-color:#D6D6EB">100% (4e5)</td>
		<td align="center" style="background-color:#D6D6EB">100% (4e5)</td>
		<td align="center" style="background-color:#D6D6EB">100% (4e5)</td>
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
		<td align="center" style="background-color:#D6D6EB">400 - 1400</td>
		<td align="center" style="background-color:#D6D6EB">400 - 1400</td>
		<td align="center" style="background-color:#D6D6EB">400 - 1400</td>
		<td align="center" style="background-color:#D6D6EB">400 - 1400</td>
	</tr>
	<tr>
		<td align="left">Top Speed, s</td>
		<td align="center">3</td>
		<td align="center">3</td>
		<td align="center">3</td>
		<td align="center">3</td>
	</tr>
	<tr>
	<td align="left" style="background-color:#D6D6EB">MS2 max IT, ms</td>
		<td align="center" style="background-color:#D6D6EB">50</td>
		<td align="center" style="background-color:#D6D6EB">50</td>
		<td align="center" style="background-color:#D6D6EB">120</td>
		<td align="center" style="background-color:#D6D6EB">120</td>
	</tr>
	<tr>
		<td align="left">MS2 Isolation window, Th</td>
		<td align="center">1.2(2)-0.7(3)-0.5(4+)</td>
		<td align="center">1.2(2)-0.7(3)-0.5(4+)</td>
		<td align="center">0.7(2-3)-0.5(4+)</td>
		<td align="center">0.7</td>
	</tr>
	<tr>
	<td align="left" style="background-color:#D6D6EB">MS2 NCE, &#37;</td>
		<td align="center" style="background-color:#D6D6EB">35</td>
		<td align="center" style="background-color:#D6D6EB">30</td>
		<td align="center" style="background-color:#D6D6EB">38-40</td>
		<td align="center" style="background-color:#D6D6EB">35</td>
	</tr>
	<tr>
		<td align="left">MS2 Intensity threshold</td>
		<td align="center">5e3</td>
		<td align="center">5e3</td>
		<td align="center">5e4</td>
		<td align="center">5e4</td>
	</tr>
	<tr>
	<td align="left" style="background-color:#D6D6EB">Dynamic exclusion, s</td>
		<td align="center" style="background-color:#D6D6EB">60, single charge</td>
		<td align="center" style="background-color:#D6D6EB">60, single charge</td>
		<td align="center" style="background-color:#D6D6EB">60, single charge</td>
		<td align="center" style="background-color:#D6D6EB">60, single charge</td>
	</tr>
	<tr>
		<td align="left">MS2 Resolution</td>
		<td align="center">turbo</td>
		<td align="center">rapid</td>
		<td align="center">50,000</td>
		<td align="center">50,000</td>
	</tr>
	<tr>
	<td align="left" style="background-color:#D6D6EB">MS2 AGC target</td>
		<td align="center" style="background-color:#D6D6EB">100&#37; &#40; 1e4 &#41;</td>
		<td align="center" style="background-color:#D6D6EB">100&#37; &#40; 1e4 &#41;</td>
		<td align="center" style="background-color:#D6D6EB">200&#37; &#40; 1e5 &#41;</td>
		<td align="center" style="background-color:#D6D6EB">240&#37; &#40; 1.2e5 &#41;</td>
	</tr>
	<tr>
		<td align="left">MS3 AGC target</td>
		<td align="center">200&#37; &#40; 1e5 &#41;</td>
		<td align="center">240&#37; &#40; 1.2e5 &#41;</td>
		<td align="center">     </td>
		<td align="center">     </td>
	</tr>
	<tr>
	<td align="left" style="background-color:#D6D6EB">SPS Isolation window, Th</td>
		<td align="center" style="background-color:#D6D6EB">1.3(2)-0.7(3)-0.5(4+)</td>
		<td align="center" style="background-color:#D6D6EB">1.3(2)-0.7(3)-0.5(4+)</td>
		<td align="center" style="background-color:#D6D6EB">     </td>
		<td align="center" style="background-color:#D6D6EB">     </td>
	</tr>
	<tr>
		<td align="left">SPS NCE, &#37;</td>
		<td align="center">65</td>
		<td align="center">55</td>
		<td align="center">     </td>
		<td align="center">     </td>
	</tr>
	<tr>
	<td align="left" style="background-color:#D6D6EB">SPS max IT, ms</td>
		<td align="center" style="background-color:#D6D6EB">120</td>
		<td align="center" style="background-color:#D6D6EB">120</td>
		<td align="center" style="background-color:#D6D6EB">     </td>
		<td align="center" style="background-color:#D6D6EB">     </td>
	</tr>
	<tr>
		<td align="left">SPS settings: &#35; notches, mass range, Tag Exclusion</td>
		<td align="center">5 - 10 - 10 <br>m/z 110-500, TMT</td>
		<td align="center">5 - 10 - 10 <br> m/z 110-500, TMT pro</td>
		<td align="center">m/z 110</td>
		<td align="center">m/z 110</td>
	</tr>
</tbody>
</table>




<br>
<p>
	<h2 id="m/z">Precursor m/z and charge state distribution</h2>
	<a href="#page">Back to Top</a>
		<br>
		<br>The  chart below shows the charge state and precursor m/z distribution for all the peptides identified with a PeptideProphet cutoff 0.9
		The average of four LCMS runs with 90 min gradients, two replicates using a HeLa tryptic digest (Pierce, 100 ng on column) and two replicates of a tryptic digest from a Ramos cell whole cell lysate 100ng on column. 
		The combined total number of peptide identifications p&gt;= 0.9 is 38574; the total number of unique peptide identifications p&gt;= 0.9 is 19218.

            <div style="background-image: url('images/fusion_mz_charge.png'); height: 524px; width: 900px;"></div>

<br>m/z and charge state distribution 
</p>
<br>
<br>
<br>
<br>
<p>
	<h2 id="hela">Hela digest concentration curve</h2>
	<a href="#page">Back to Top</a>
		<br>
		<br>Different concentrations of Pierce HeLa Protein Digest Standard (50, 100, 200, 500, 800, 1000 ng) were injected and separated with a 5-35% acetonitrile gradient over 90 min. 
			Peptides were identified with our standard DDA method and search tools. 

            <div style="background-image: url('images/lumos_Hela_OTMS2_01.png'); height: 759px; width: 814px;"></div>


<br><br>
	TIC (total ion chromatogram) of the different concentrations overlay, normalized to 1000 ng chromatogram. 
	<br><br>
	<div style="background-image: url('images/lumos_Hela_OTMS2_02.png'); height: 436px; width: 844px;"></div>
	<br><br>
	
	<div style="background-image: url('images/lumos_Hela_ITMS2_01.png'); height: 753px; width: 801px;"></div>


<br><br>
	TIC (total ion chromatogram) of the different concentrations overlay, normalized to 1000 ng chromatogram. 
	<br><br>
	<div style="background-image: url('images/lumos_Hela_ITMS2_02.png'); height: 422px; width: 840px;"></div>
	<br><br>
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
                                    <li><a href="#parallelization">Parallelization</a></li>
                                    <li><a href="#agc">AGC control</a></li>
									<li><a href="#resolution">Resolution/Transient</a></li>
                                 </ul>
                              </section>
                              <section class="6u">
                                 <ul class="default small">
                                    
									<li><a href="#hplc">HPLC setup</a></li>
                                    <li><a href="#settings">Instrument settings</a></li>
									<li><a href="#TMTsettings">TMT instrument settings</a></li>
                                    <li><a href="#m/z">Precursor m/z</a></li>
                                    <li><a href="#hela">Hela reference data</a></li>
                                    
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
