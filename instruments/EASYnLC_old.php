<?php  include("../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <section>
                     <header class="major">
                        <h1>EASY-nLC&trade; 1200 System</h1>
                     </header>


<p>The EASY-nLC combines simplicity and high-throughput capacity in a nano-flow UHPLC with a pressure rating of 1200 bar. 
<br> here is a link to Thermo's website if you wish to learn more: <a href="https://www.thermofisher.com/order/catalog/product/LC140">EASY-nLC&trade; 1200 System</a>

                    <div style="background-image: url('images/TSQAltis.jpg'); height: 180px; width: 550px; float: right"></div>


<p>EASY-nLC 1 (LC-030755 / UW tag 2033411), Installed 10/16/2018
<br>EASY-nLC 2 (LC-030757 / UW tag 2033412), Installed 10/19/2018 
<br>EASY-nLC 3 (LC-030758 / UW tag 2033413), Installed 10/19/2018 
</p>

<strong>Virtual Display</strong>
	<br>
	<br>The EASY-nLC can be controlled directly via the built in touchscreen. You can also setup the virtual display on the pc so it can be controlled from the pc, this is particularly useful if you wish to remotely control the system.
	<br>Guide how to initially setup the virtual display <a target="new" href="/docs/EASYnLC_setup_virtual_display.pdf">see pdf</a>
	<br>
	<br>

<strong>How to restart the virtual display (e.g. after rebooting the PC):</strong>
	<br>
	<br>Detailed guide how to restart the virtual display <a target="new" href="/docs/EASYnLC_reconnect_virtual_display.pdf">see pdf</a>
	<br>
	<br>

<ul>
	<li>Open "Instrument Configuration", select the EASYnLC and Configure
	<li>Test Connection and select the plate installed and click ok and done.
	<br><br>
	<div style="background-image: url('images/EASYnLC_01.png'); height: 294px; width: 512px;"></div>
	<br><br>
	<li>Open Putty by double clicking on "putty.exe" located on the desktop</li>

	<li>Under Sessions/Saved Sessions select "Easy VNC" and click "Load" and then "Open"</li>
	<li>login as: hplc</li>
	<li>Password: hplc</li>
	<li>use the up arrow to reload the last command or type:  <strong>x11vnc -q -display :0</strong>
	<br>after hitting enter you should see this:
	<br><br>
	<div style="background-image: url('images/EASYnLC_02a.png'); height: 343px; width: 602px;"></div>
	<br><br>
	<li>Open "TightVNC Viewer" located on the desktop
	<li>In the "TightVNC Server" field type: <strong>localhost::5901</strong>
	<li>then hit "connect" to open the virtual display of the EASY-nLC touchscreen
	<br><br>
	<div style="background-image: url('images/EASYnLC_03a.png'); height: 366px; width: 806px;"></div>
	<br><br>

</ul>


<strong>Switch between Trapping and No-trapping mode</strong>
	<br>
	<br>Detailed guide how to switch between trapping and no-trapping mode <a target="new" href="/docs/EASYnLC_SwitchBetweenTrappingAndNoTrap.pdf">see pdf</a>
	<br>
	<br>

<ul>
	<li>Looking at the EASY-nLC home page you can see if the system is in trapping or no-trapping mode. It either displays the trap before the analytical column or not. 
	<li>To switch the trapping mode click on the Maintenance/Devices/EAY-nLC [HPLC]/Properties
	<li>To select no-trap mode check the box next to “One column setup”
	<li>To select trapping mode uncheck the next to “One column setup”
	<li>Hit “Apply” and accept the popup confirmation window
	<br><br>
	<div style="background-image: url('images/EASYnLC_04.png'); height: 300px; width: 768px;"></div>
	<br><br>
	<li><strong>Now make sure the plumbing is setup correctly</strong></li>

	<li>In trap mode put a trap column in front of the analytical column</li>
	<li>In no-trap mode replace the trap column with an empty fused silica</li>

	<br><br>

<li><strong>Now make sure the sample loading in the method is setup correctly</strong>
	<li>For no-trap mode we recommend to load at lower flowrates e.g.  0.3 µl/min, or set the max pressure instead e.g. 150-200 bar
	<li>the loading volume should be: 2 x sample volume + 2µl
	<li>But always use a minimum of 6 µl (1-2 µl of sample volume)
	<li>e.g. if you load 4 µl of sample: 2 x 4 µl + 2 µl = 10 µl
	<br><br>

	<li>For trap mode you can load at higher flowrates e.g. 2.5 µl, or set the max pressure instead e.g. 150-200 bar
	<li>the loading volume should be: 2 x sample volume + 2µl
	<li>But always use a minimum of 6 µl (1-2 µl of sample volume)
	<li>e.g. if you load 4 µl of sample: 2 x 4 µl + 2 µl = 10 µl



</ul>

<strong>Changing the plate configuration </strong>
	<br>
	<br>Detailed guide how to change the plate configuration <a target="new" href="/docs/EASYnLC_ChangingPlateConfiguration.pdf">see pdf</a>
	<br>
	<br>

<ul>
	<li>Close Xcalibur, methods, qual browser etc.
	<li>You can leave the virtual display and Tune window open
	<li>Open instrument configuration (should be pinned to the start menu)
	<li>Select the EASYnLC and hit configure
	<li>Click on “Test configuration” wait for the “connection OK” turn green
	<li>Under Autosampler Configuration, go to the plate installed and select the plate format you want to use
	<li>Note our systems are only calibrated for 6x8 vials and 96 well plate
	<li>You can click on Edit to see the layout or change the row/number layout if you wish
	<li>Hit “OK” and then “Done” to close the instrument configuration window


	<br><br>
	<div style="background-image: url('images/EASYnLC_01.png'); height: 294px; width: 512px;"></div>
	<br><br>
	<li><strong>Now you have to change the plate on the HPLC itself:</strong></li>

	<li>On the EASYnLC home screen click on the plate</li>
	<li>Click on Goto Calibration</li>
	<li>Alternatively you can go to Maintenance/Devices/Cooled Autosampler/Tools</li>
	<li>Select the plate you want to use from the pull down menu
	<li>Hit “Use” and acknowledge the pop up
	<br><br>
	<div style="background-image: url('images/EASYnLC_05.png'); height: 300px; width: 748px;"></div>
	<br><br>

	<li>Now re-open Xcalibur and you should be able to select the sample positions that correspond to your plate
	<li>6x8: A1-A8, B1-B8, … F1-F8
	<li>8x12: A1-A12, B1-B12, …. H1-H12
	<li>Note the vial position for the 6 vials on the right side is 1-V1 through 1-V6
</ul>

<p><strong>HPLC setup</strong>
                <br>the following document includes guidelines to setup the capillary trap/column on our LC-MS systems, 
                this is intended as a supplement to the hands on training required to use the UWPR instruments.
                <ul>
				   <li><a target="new" href="/docs/protocols05/UWPR_LC_MS_setup_EASYnLC.pdf">LC-MS setup procedure EASYnLC(pdf)</a>
                   <li><a href="/docs/protocols05/AngioNeuroStandard.xlsx">Simple peptide standards for LC-MS (xlsx)</a>
                </ul>

                </p>
				
<p><strong>LogViewer</strong>
                <br>the following document discribes how to use the LogViewer to view the EASYnLC pressure trace.
                <ul>
				   <li><a target="new" href="/docs/EASYnLC_LogViewer.pdf">LC-MS setup procedure EASYnLC(pdf)</a>
                  
                </ul>

                </p>

<strong>Method setup guidelines</strong>
	<br>
	<br>Detailed guide how to setup the EASY-nLC method <a target="new" href="/docs/EASYnLC_MethodSetup.pdf">see pdf</a>
	<br>
	<br>

<ul>
	<li>Note: the injection volume in the Xcalibur sequence overwrites the Sample pickup volume in the method
	<li>So you need to make sure the at the Sample loading Volume in the method is sufficient to load the entire sample onto the column
	<li>Always set the Sample loading Volume = 2 x injection volume + 2 µl
	<li>But always use a minimum of 6 µl (1-2 µl of sample volume)
	<li>e.g. if you load 4 µl of sample: 2 x 4 µl + 2 µl = 10 µl
	<li>The basic method provided by UWPR will have a loading volume of 20 µl to allow for 1-8 µl sample injection volumes (set in Xcalibur sequence list)
	<br>
	<br>
	<li><strong>Setup the Gradient</strong></li>
	<li>Note the buffer composition used on the EASY-nLC:
	<li>Buffer A: 0.1 % Formic Acid in Water (Fisher Water with 0.1% Formic Acid (v/v), Optima™ LC/MS Grade, LS118)
	<li>Buffer B: 0.1 % Formic Acid, 80% Acetonitrile in Water (Fisher Water with 0.1% Formic Acid (v/v), Optima™ LC/MS Grade,  LS122500)
<li>Formula 100% ACN to 80% conversion: % B [80%ACN] = 1.25 * % B [100%ACN]
<br>
<br>
<table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th style="background-color:#9999CC" >%B [100% ACN]</th>
			<th style="background-color:#9999CC" >%B [80% ACN]</th>
			<th  >     </th>
			<th style="background-color:#9999CC" >%B [100% ACN]</th>
			<th style="background-color:#9999CC" >%B [80% ACN]</th></tr></thead>
<tbody>
	<tr>
		<td align="center">1</td>
		<td align="center">1.25</td>
		<td align="center">     </td>
		<td align="center">10</td>
		<td align="center">12.5</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">2</td>
		<td align="center" style="background-color:#D6D6EB">2.5</td>
		<td align="center">     </td>
		<td align="center" style="background-color:#D6D6EB">20</td>
		<td align="center" style="background-color:#D6D6EB">25</td>
	</tr>
	<tr>
		<td align="center">3</td>
		<td align="center">3.75</td>
		<td align="center">     </td>
		<td align="center">30</td>
		<td align="center">37.5</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">4</td>
		<td align="center" style="background-color:#D6D6EB">5</td>
		<td align="center">     </td>
		<td align="center" style="background-color:#D6D6EB">40</td>
		<td align="center" style="background-color:#D6D6EB">50</td>
	</tr>
	<tr>
		<td align="center">5</td>
		<td align="center">6.25</td>
		<td align="center">     </td>
		<td align="center"> 50</td>
		<td align="center">62.5</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">6</td>
		<td align="center" style="background-color:#D6D6EB">7.5</td>
		<td align="center">     </td>
		<td align="center" style="background-color:#D6D6EB"> 60 </td>
		<td align="center" style="background-color:#D6D6EB">75</td>
	</tr>
	<tr>
		<td align="center">7</td>
		<td align="center">8.75</td>
		<td align="center">     </td>
		<td align="center"> 70</td>
		<td align="center">87.5</td>
	</tr>
<tr>
		<td align="center" style="background-color:#D6D6EB">8</td>
		<td align="center" style="background-color:#D6D6EB">10</td>
		<td align="center">     </td>
		<td align="center" style="background-color:#D6D6EB">80</td>
		<td align="center" style="background-color:#D6D6EB">100</td>
	</tr>
	<tr>
		<td align="center">9</td>
		<td align="center">11.25</td>
		<td align="center">     </td>
		<td align="center"> 90</td>
		<td align="center">na</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">10</td>
		<td align="center" style="background-color:#D6D6EB">12.5</td>
		<td align="center">     </td>
		<td align="center" style="background-color:#D6D6EB"> 100 </td>
		<td align="center" style="background-color:#D6D6EB">na</td>	
</tbody>
</table>
	
</ul>

<p>	
<br>
<strong>Solvent filters</strong>
	<br>We noticed air leaks originating from the original solvent filter cartridges. So we decided to replace them with a different setup:
	<br>Guide how to setup alternate EASY-nLC solvent filters <a target="new" href="/docs/instruments/EASYnLC_SolventBottleFilters.pdf">see pdf</a>
</p>

<strong>Convert bar to psi</strong>
	<br>
	<br>Formula for bar to psi conversion: 1 bar = 14.5038 psi or (bar x 14.5038 = psi) or 0.0689475729 bars in 1 psi.
	<br>
	<br>To convert bar to psi follow this link: <a target="new" href="https://www.unitconverters.net/pressure/bar-to-psi.htm">UnitConverters.net: Convert bar to psi</a>
<br>
<br>
<table align="center" border="0" cellpadding="5" style="background-color:#EBEBF5">
<thead><tr><th style="background-color:#9999CC" >Convert Bar to</th>
			<th style="background-color:#9999CC" >Psi</th>
			<th  >     </th>
			<th style="background-color:#9999CC" >Convert Psi to</th>
			<th style="background-color:#9999CC" >Bar</th></tr></thead>
<tbody>
	<tr>
		<td align="center">1</td>
		<td align="center">14.5</td>
		<td align="center">     </td>
		<td align="center">10</td>
		<td align="center">0.7</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">10</td>
		<td align="center" style="background-color:#D6D6EB">145.0</td>
		<td align="center">     </td>
		<td align="center" style="background-color:#D6D6EB">100</td>
		<td align="center" style="background-color:#D6D6EB">6.9</td>
	</tr>
	<tr>
		<td align="center">50</td>
		<td align="center">725.2</td>
		<td align="center">     </td>
		<td align="center">500</td>
		<td align="center">34.5</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">100</td>
		<td align="center" style="background-color:#D6D6EB">1450.4</td>
		<td align="center">     </td>
		<td align="center" style="background-color:#D6D6EB">1000</td>
		<td align="center" style="background-color:#D6D6EB">68.9</td>
	</tr>
	<tr>
		<td align="center">150</td>
		<td align="center">2175.6</td>
		<td align="center">     </td>
		<td align="center"> 1500</td>
		<td align="center">103.4</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">200</td>
		<td align="center" style="background-color:#D6D6EB">2900.8</td>
		<td align="center">     </td>
		<td align="center" style="background-color:#D6D6EB">2000</td>
		<td align="center" style="background-color:#D6D6EB">137.9</td>
	</tr>
	<tr>
		<td align="center">250</td>
		<td align="center">3626.0</td>
		<td align="center">     </td>
		<td align="center">2500</td>
		<td align="center">172.4</td>
	</tr>
<tr>
		<td align="center" style="background-color:#D6D6EB">300</td>
		<td align="center" style="background-color:#D6D6EB">4351.1</td>
		<td align="center">     </td>
		<td align="center" style="background-color:#D6D6EB">3000</td>
		<td align="center" style="background-color:#D6D6EB">206.8</td>
	</tr>
	<tr>
		<td align="center">350</td>
		<td align="center">5076.3</td>
		<td align="center">     </td>
		<td align="center">3500</td>
		<td align="center">241.3</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">400</td>
		<td align="center" style="background-color:#D6D6EB">5801.5</td>
		<td align="center">     </td>
		<td align="center" style="background-color:#D6D6EB">4000</td>
		<td align="center" style="background-color:#D6D6EB">275.8</td>	
	</tr>
	<tr>
		<td align="center">450</td>
		<td align="center">6526.7</td>
		<td align="center">     </td>
		<td align="center">4500</td>
		<td align="center">310.3</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">500</td>
		<td align="center" style="background-color:#D6D6EB">7251.9</td>
		<td align="center">     </td>
		<td align="center" style="background-color:#D6D6EB">5000</td>
		<td align="center" style="background-color:#D6D6EB">344.7</td>
	</tr>
	<tr>
		<td align="center">550</td>
		<td align="center">7977.1</td>
		<td align="center">     </td>
		<td align="center">5500</td>
		<td align="center">379.2</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">600</td>
		<td align="center" style="background-color:#D6D6EB">8702.3</td>
		<td align="center">     </td>
		<td align="center" style="background-color:#D6D6EB">6000</td>
		<td align="center" style="background-color:#D6D6EB">413.7</td>
	</tr>
	<tr>
		<td align="center">650</td>
		<td align="center">9427.5</td>
		<td align="center">     </td>
		<td align="center">7000</td>
		<td align="center">482.6</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">700</td>
		<td align="center" style="background-color:#D6D6EB">10152.7</td>
		<td align="center">     </td>
		<td align="center" style="background-color:#D6D6EB">8000</td>
		<td align="center" style="background-color:#D6D6EB">551.6</td>
	</tr>
	<tr>
		<td align="center">750</td>
		<td align="center">10877.9</td>
		<td align="center">     </td>
		<td align="center">9000</td>
		<td align="center">620.5</td>
	</tr>
<tr>
		<td align="center" style="background-color:#D6D6EB">800</td>
		<td align="center" style="background-color:#D6D6EB">11603.0</td>
		<td align="center">     </td>
		<td align="center" style="background-color:#D6D6EB">10000</td>
		<td align="center" style="background-color:#D6D6EB">689.5</td>
	</tr>
	<tr>
		<td align="center">850</td>
		<td align="center">12328.2</td>
		<td align="center">     </td>
		<td align="center">11000</td>
		<td align="center">758.4</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">900</td>
		<td align="center" style="background-color:#D6D6EB">13053.4</td>
		<td align="center">     </td>
		<td align="center" style="background-color:#D6D6EB">12000</td>
		<td align="center" style="background-color:#D6D6EB">827.4</td>
	</tr>
	<tr>
		<td align="center">950</td>
		<td align="center">13778.6</td>
		<td align="center">     </td>
		<td align="center">13000</td>
		<td align="center">896.3</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">1000</td>
		<td align="center" style="background-color:#D6D6EB">14503.8</td>
		<td align="center">     </td>
		<td align="center" style="background-color:#D6D6EB">14000</td>
		<td align="center" style="background-color:#D6D6EB">965.3</td>
	</tr>
	<tr>
		<td align="center">1050</td>
		<td align="center">15229.0</td>
		<td align="center">     </td>
		<td align="center">15000</td>
		<td align="center">1034.2</td>
	</tr>
<tr>
		<td align="center" style="background-color:#D6D6EB">1100</td>
		<td align="center" style="background-color:#D6D6EB">15954.2</td>
		<td align="center">     </td>
		<td align="center" style="background-color:#D6D6EB">16000</td>
		<td align="center" style="background-color:#D6D6EB">1103.2</td>
	</tr>
	<tr>
		<td align="center">1150</td>
		<td align="center">16679.4</td>
		<td align="center">     </td>
		<td align="center">17000</td>
		<td align="center">1172.1</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">1200</td>
		<td align="center" style="background-color:#D6D6EB">17404.6</td>
		<td align="center">     </td>
		<td align="center" style="background-color:#D6D6EB">18000</td>
		<td align="center" style="background-color:#D6D6EB">1241.1</td>
	</tr>
</tbody>
</table>

	</div>
    </div>
    </div>

<?php  include("../__footer.php"); ?>
