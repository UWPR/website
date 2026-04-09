<?php  include("../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <section>
                     <header class="major">
                        <h1>Orbitrap Fusion Tribrid MS</h1>
                     </header>

<div style="background-image: url('images/fusion_05.png'); height: 280px; width: 855px;"></div>

<br><p>The Thermo Scientific<sup>&trade; </sup> Orbitrap Fusion<sup>&trade; </sup> Tribrid<sup>&trade; </sup> mass spectrometer combines the best of quadrupole, Orbitrap, and ion trap mass analysis in a revolutionary Tribrid architecture that delivers unprecedented depth of analysis. It enables life scientists analyzing even the most challenging low-abundance, high-complexity, or difficult samples to identify more compounds more quickly, quantify more accurately, and elucidate structures more thoroughly.</p>

<p>Visit the <a target="new" href="http://planetorbitrap.com/orbitrap-fusion">Planet Orbitrap website</a> for more information
<br>and the <a target="new" href="http://event1.thermoscientific.com/content/CMD_Transform2013_Fusion"> Fusion intro site</a> for some nice animations.</p>

<p>12/5/2013 Fusion (FSN10134) Installed

<ul><strong>Scan Rate</strong>
	<li>Orbitrap MSn up to 15 Hz (18 Hz max for OT MS2 with sw v1.1) </li>
	<li>Ion trap MSn up to 20 Hz</li>
</ul>

<ul><strong>Resolution</strong>
	<li>15,000-450,000 (FWHM) at m/z 200</li>
</ul>

<ul><strong>Mass accuracy</strong>
	<li>&lt; 3 ppm RMS using external calibration</li>
	<li>&lt; 1 ppm RMS using internal calibration</li>
</ul>



<ul><strong>Features</strong>
	<li>CID/HCD/ETD(/EThcD with sw v1.1) detected by the Ion Trap or Orbitrap at any level of MSn for maximum experimental flexibility</li>
	<li>ETD for fragmentation and internal calibrant</li>
	<li>S-Lens ion source for increased sensitivity</li>
	<li>Quadrupole mass filter (1200 amu wide Quadrupole Isolation with improved signal to noise with sw v1.1)</li>
	<li>Orbitrap mass analyzer</li>
	<li>Spectral multiplexing for enhanced duty cycle</li>
	<li>Synchronous Precursor Selection Up to 15 precursors per MS2 scan, for MS3 analysis only</li>
</ul>



<ul><strong>Instrument control software</strong>
<li><a href="/docs/InstrumentSoftwareVersions.xls">see spreadsheet (.xls format)</a>
<li><a target="new" href="/docs/protocols05/UWPR_Win10LTSB2016_upgrade.pdf">Tips for upgrading to Win10 LTSB 2016 on TNG instruments (pdf)</a>
</ul>

<ul><strong>Instrument calibrations</strong>
<li><a href="/docs/Calibrations.xlsx">see spreadsheet (.xlsx format)</a>
</ul>

<p>
<strong>Parallelization on the Orbitrap Fusion</strong>
<br>To improve the spectral acquisition rate the acquisition process on the Fusion is extensively parallelized.
The figure below shows a schematic of parallel execution and event pipelining: Precursors identified in the 
Orbitrap full scan (top row) are fragmented and accumulated  in the IRM (middle row) concurrent with LT acquisition of the previous MS/MS (bottom row).
(The use of parallelizable time was further improved in sw v1.1.)

            <div style="background-image: url('images/fusion_04a.png'); height: 674px; width: 1054px;"></div>

<br>Senko MW et al. Novel parallelized quadrupole/linear ion trap/Orbitrap tribrid mass spectrometer improving proteome coverage and peptide identification rates. Anal Chem 85(24), 11710 - 4 (2013) 
</p>
<p>
<strong>How is AGC performed on Orbitrap Fusion Series Instruments?</strong>
	<br>Ion population control is an important concept for all trapping instruments. To ensure proper functioning of the Orbitrap and Linear Ion trap analyzers, 
	the ion populations are regulated at a given target level, in a process referred to as automatic gain control (AGC). The mechanism for the regulation is a 
	fast ion trap full scan referred to as the "prescan". This scan is "hidden", and is not recorded in the raw file. The prescan makes a measurement of the 
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
<strong>Resolving Power and Transient Length</strong>

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
<thead><tr><th style="background-color:#9999CC" >Res. at m/z 200</th>
			<th style="background-color:#9999CC" >Transient length [ms]</th>
			<th style="background-color:#9999CC" >Approx. scan speed [Hz]</th>
			<th style="background-color:#9999CC" >"Free" ion time [ms]</th></tr></thead>
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

    <br>The table below lists some of the instrument method settings we tested on our Fusion. 
	<br>We use a nanoAcquity UPLC with home made columns (30cm x 75&mu;m, Magic C18AQ 100&#8491; 5&mu;m) and trap column (3cm x 100&mu;m, Magic C18AQ 200&#8491; 5&mu;m), with 5-30% B (ACN, 0.1%FA) in 90min gradient.
        The sample is a Ramos cell whole cell tryptic digest (Thanks to Dr. Richard G. James, Seattle Children's), 100 ng on column injection. We typically get ~19000 unique peptides with Comet search and peptide prophet p>0.9, 
	<br>The results below are based on the number of unique peptides with Comet search and peptide prophet p>0.9.  
<br>
<br>
<table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th align="left" style="background-color:#9999CC" >Best Result (100%)</th><th align="left" style="background-color:#9999CC" >Tested Values (x%)</th></tr></thead>
<tbody>
<tr>
<td align="left" style="background-color:#D6D6EB"><strong>Software Version</strong></td>
<td align="left" style="background-color:#D6D6EB"><strong>Fusion 1.0</strong></td>
</tr>
<tr>
<td align="left">Gradient 5-30%B 150 min</td>
<td align="left">Gradient 5-30%B in 90 min(87%), 120 min (94%), 150 min (100%) </td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">Q isolation</td>
<td align="left" style="background-color:#D6D6EB">IT isolation (60%)</td>
</tr>
<tr>
<td align="left">IT MS2</td>
<td align="left">OT MS2 (86%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">HCD NCE 25</td>
<td align="left" style="background-color:#D6D6EB">HCD NCE 20 (93%), 25 (100%), 30 (99%)</td>
</tr>
<tr>
<td align="left">HCD (NCE25)</td>
<td align="left">CID (NCE35) (88%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">Target: HCD IT MS2, 10k</td>
<td align="left" style="background-color:#D6D6EB">5k (98%), 10k (100%), 50k (96%), 100k (95%)</td>
</tr>
<tr>
<td align="left">Target: CID IT MS2, 10k</td>
<td align="left">5k (99%), 10k (100%), 50k (98%), 100k (96%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">IT scan rate rapid </td>
<td align="left" style="background-color:#D6D6EB">Turbo (98%), rapid (100%), normal (96%)</td>
</tr>
<tr>
<td align="left">Iso width 1.6</td>
<td align="left">Iso width 1.6 (100%) and 2 (99%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">Top speed 3sec </td>
<td align="left" style="background-color:#D6D6EB">vs Top 20 (99%)</td>
</tr>
<tr>
<td align="left">Include: 2-5 charge</td>
<td align="left">Include: unassigned &  2-5(100%),   2-5 (100%),   unassigned (0%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">Signal threshold 10k </td>
<td align="left" style="background-color:#D6D6EB">500 (98%),  1k (99%),  10k (100%), 50k (97%),   100k (93%)</td>
</tr>
<tr>
<td align="left">Pick all charge states</td>
<td align="left">vs Only pick single Charge state per precursor (94%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">Auto Target off</td>
<td align="left" style="background-color:#D6D6EB">Auto Target on (98%)</td>
</tr>
<tr>
<td align="left">DDA start with most intense ion</td>
<td align="left">Least intense (96%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">DDA</td>
<td align="left" style="background-color:#D6D6EB">GPF: full MS1 but allow to pick from small GPF windows only (93%),   GPF MS1 windows (95%)</td>
</tr>
<tr>
<td align="left">Fusion DDA</td>
<td align="left">QEplus DDA(80%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">100ng Ramos cell digest</td>
<td align="left" style="background-color:#D6D6EB">100ng HeLa digest (Pierce #88328) (97%)</td>
</tr>
<tr>
<td align="left">Carryover</td>
<td align="left">100 ng Ramos cell digest (100%), blank following  (0.4%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">Top 30</td>
<td align="left" style="background-color:#D6D6EB">Top 10 (90%), Top 20 (91%), Top 30 (100%), Top 40 (92%)</td>
</tr>
<tr>
<td align="left">Top 30</td>
<td align="left">Top speed 1 sec (98%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">Top speed 1 sec</td>
<td align="left" style="background-color:#D6D6EB">Top speed 1 sec (100%), 2 sec (97%), 3 sec (94%), 4 sec (95%)</td>
</tr>
<tr>
<td align="left">MS1 m/z 300-1500</td>
<td align="left">MS1 m/z 300-1500 (100%), 300-2000 (99%), 400-1500 (99%), 400-2000 (97%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB"><strong>Software Version</strong></td>
<td align="left" style="background-color:#D6D6EB"><strong>Fusion 1.1</strong></td>
</tr>
<tr>
<td align="left">Q full (MS1) scan isolation</td>
<td align="left">"regular" full scan (99.4%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">IT MS2</td>
<td align="left" style="background-color:#D6D6EB">IT MS2 (100%), OT MS2 15k resolution (75.9%), OT MS2 30k resolution (75.4%)</td>
</tr>
<tr>
<td align="left">IT MS2</td>
<td align="left">MS1 11491 &#177 2;   MS2 91422 &#177 139;   peptides total 44062 &#177 76;   unique 19476 &#177 21</td>
</tr>
<tr>
<td align="left">OT MS2 15k</td>
<td align="left">MS1 13317 &#177 67;   MS2 77717 &#177 267;   peptides total 28943 &#177 30;   unique 14774 &#177 80</td>
</tr>
<tr>
<td align="left">OT MS2 30k</td>
<td align="left">MS1 11213 &#177 38;   MS2 51990 &#177 39;   peptides total 28642 &#177 66;   unique 14680 &#177 122</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">OT MS1 120k</td>
<td align="left" style="background-color:#D6D6EB">OT MS1 120k (100%), 240k (97%), 60k (94.7%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB"><strong>Software Version</strong></td>
<td align="left" style="background-color:#D6D6EB"><strong>Fusion 1.2</strong></td>
</tr>
<tr>
<td align="left">IT MS2 (HCD)</td>
<td align="left">ITMS2 (100%), OTMS2 (87.7%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">HCD ITMS2</td>
<td align="left" style="background-color:#D6D6EB">OT MS1 120k (100%), 240k (97%), 60k (94.7%)</td>
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
<td align="left" style="background-color:#D6D6EB">ITMS2 dyn. Excl. DE15s</td>
<td align="left" style="background-color:#D6D6EB">ITMS2: DE15s (100%), DE60s (99.9%), OTMS2: DE15s (82.8%), DE60s (86.7%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">unique peptide ID's</td>
<td align="left" style="background-color:#D6D6EB">ITMS2: DE15s 18222, DE60s 18200, OTMS2: DE15s 15091, DE60s 15801</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB">PSMs (total peptide ID's)</td>
<td align="left" style="background-color:#D6D6EB">ITMS2 DE15s: 32122, ITMS2 DE60s: 25942, OTMS2 DE15s: 24308, OTMS2 DE60s: 20622</td>
</tr>
<tr>
<td align="left">5-30 %B in 180 min unique ID's</td>
<td align="left">5-30% B in 60 mins (72%), 90 mins (83.9%), 120 mins (90.6%), 180 mins (100%)</td>
</tr>
<tr>
<td align="left">5-30 %B in 180 min PSM's</td>
<td align="left">5-30% B in 60 mins 51.0%), 90 mins (65.5%), 120 mins (77.1%), 180 mins (100%)</td>
</tr>
<tr>
<td align="left" style="background-color:#D6D6EB"><strong>Software Version</strong></td>
<td align="left" style="background-color:#D6D6EB"><strong>Fusion 2.1</strong></td>
</tr>
<tr>
</tbody>
</table>
<br>
<br>
<p>
<strong>Precursor m/z and charge state distribution</strong>
<br>The  chart below shows the charge state and precursor m/z distribution for all the peptides identified with a peptide prophet cutoff 0.9
The average of four LCMS runs with 90 min gradients, two replicates using a HeLa tryptic digest (Pierce, 100 ng on column) and two replicates of a tryptic digest from a Ramos cell whole cell lysate 100ng on column. 
The combined total number of peptide identifications p>= 0.9 is 38574; the total number of unique peptide identifications p>= 0.9 is 19218.

            <div style="background-image: url('images/fusion_mz_charge.png'); height: 524px; width: 900px;"></div>

<br>m/z and charge state distribution 
</p>
<br>
<br>



</div>
</div>

<?php  include("../__footer.php"); ?>
