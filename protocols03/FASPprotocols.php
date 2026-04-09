<?php  include("../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <section>
                     <header class="major">
                        <h1>FASP Protocol</h1>
                        <span class="byline">Filter Aided Spample Preparation</span>
                     </header>

			<p>Use the <a target="new" href="https://pubmed.ncbi.nlm.nih.gov/19377485/">Filter Aided Sample Preparation (FASP) Method</a> 
			from Matthias Mann's lab to generate tryptic peptides from crude lysates for LC-MS analysis.
			Or use FASP (filter aided sample preparation: digestion and cleanup) kit for 
			<a target="new" href="https://www.abcam.com/fasp-protein-digestion-kit-ab270519.html">complex proteins samples</a> and 
			
            <a target="new" href="https://www.abcam.com/fasp-protein-digestion-kit-ffpe-ab270543.html"> formalin fixed tissue</a> from Abcam (former Expedeon). The FASP Protein Digestion Kit is intended to solubilize whole or fractionated protein samples in SDS, 
         digest the protein with trypsin, and analyze the resulting peptides by mass spectrometry. Those Kits area also compatible with their <a target="new" href="https://www.abcam.com/protein-extraction-kit-ab270054.html">Protein Extraction Kit</a>.
			
		    <br><br>The protocols below are similar to the one described by Ostasiewicz, Xielinska, Mann, and Wisniewskii.
		 <p><b>Materials</b>
			<br>All solvents should be HPLC grade, NEVER use pipette tips when transferring acids &gt;2% in concentration!
			<br><a target="new" href="/docs/protocols05/Avoid Contaminations.pdf">Avoid Contaminations (pdf)</a></li>
			<ol>
			<li>EMD Millipore Amicon Ultra-0.5 Centrifugal Filter Units (FisherScientific UFC501024)
			<li>50 mM Ammonium bicarbonate pH 7.8 (Fisher, part # A643-500) in H<sub>2</sub>O (79.1g/mol): 3.955g/100ml)(pH 7.8) (make fresh)
			<li>1% SDS in 50 mM Ammonium bicarbonate (make fresh)
			<li>8 M Urea in 50 mM ammonium bicarbonate (0.4805 g/ml) (make fresh)
			<li>500 mM Dithiothreitol DTT (Fisher, part # PI20291) in H<sub>2</sub>O
			<li> Or 500 mM TCEP (Fisher, part # PI77720) in H<sub>2</sub>O
			<li>500 mM Iodoacetamide IAA (Fisher, part # AC12227-0050) in H<sub>2</sub>O (0.0185g/ml; always prepare fresh, light sensitive)
			<li>400 ng / &#956;g/&#956;L Trypsin in 0.01% acetic acid (modified, sequencing grade, Promega, part # V5111, 5 x 20&#956;g/&#956;g)
			<li>Water (Fisher, part # W6-4 optima LCMS grade)
			<li>Eppendorf LoBind Microcentrifuge Tubes: Protein (Fisher, part # 13-698-794)
			</ol>
			
			<br><font color="#FF5555"><b>Avoid contamination from plasticizers</b></font>
			<br>
			<br>To avoid contamination from plasticizers, use all fresh solvents. Never use any plastic pipettes to transfer solvents from the original bottles,
			instead poor the solvent into a beaker. Repeated exposure of solvents to plastics will contaminate the stock solvents with plasticizers.
			Never use plastic pipettes when handling concentrated (&gt;2%) acids, use glass pipettes or Hamilton syringes (rinse the syringe with water after
			using it for concentrated acids to avoid corrosion of the metal needle).
			If you don't know whether your stock solvents already are contaminated, buy new solvents and make sure no one is contaminating them!
			Keep your solvents in glass bottles, preferably with Teflon lined lids. Never use bottle lids that have foil backed cardboard liners! 
			
			
			<br>
			<br><b>Method</b>
			<br>
			<br>
			<ol>
			<li>Lyse pellet (50 &#956;l HeLa cell pellet (one 15 cm dish)or 25 mg mouse liver or cerebellum) in 150 &#956;l of 1% SDS, 0.1M DTT and 50 mM Ammonium bicarbonate 
			<li>Heat at 95<sup>o</sup>C for 5 min. 
			<li>Sonicate (pulse #3 for 20 seconds) to shear the DNA to reduce the viscosity of the sample.
			<li>Spin at 16,000 x g for 5 min to clarify the lysate
			<li>Determine protein concentration. Note:DTT interferes with BCA protein assay, use reducing agent compatible BCA Protein Assay Kits 
			(ThermoPierce 23250 and 23252) instead or use a lysis buffer w/o DTT
			<li>Combine 100 (- 250) &#956;g sample lysis buffer with 200 &#956;l 8M urea, 50 mM ammonium bicarbonate in the filter unit
			<li>Vortex and spin at 14000 rcf for 20 minutes
			<li>Add 200 &#956;l 8M urea, 50 mM ammonium bicarbonate to filter, vortex and spin at 14000 rcf for 20 minutes
			<br>Discard flow through
			<li>Note if you used a lysis protocols without DDT, you can add 100 &#956;l 5 mM TCEP in 8M urea, 50 mM ammonium bicarbonate
			<br>Vortex and incubate at room temperature for 20 minutes
			<br>Then add 3 ul 500mM IAA (15 mM final)
			<li>Otherwise add 100 &#956;l 15 mM IAA in 8M urea, 50 mM ammonium bicarbonate to filter
			<li>Vortex and incubate in dark at room temperature for 20 minutes
			<li>Spin 14000 rcf for 20 minutes
			<li>Add 100 &#956;l 8M urea, 50 mM ammonium bicarbonate to filter
			<li>Vortex and spin at 14000 rcf for 20 minutes 
			<li>Repeat 100 &#956;l 8M urea, 50 mM ammonium bicarbonate, vortex and spin again
			<li>Add 100 &#956;l of 50 mM ammonium bicarbonate
			<li>Vortex and spin at 14000 rcf for 20 minutes 
			<li>Repeat 100 &#956;l 50 mM ammonium bicarbonate, vortex and spin again
			<li>Transfer the filter unit to a new collection tube
			<li>Add 120 &#956;l of 50 mM ammonium bicarbonate and 5 &#956;l of 400 ng/&#956;l trypsin to filter (enzyme to protein ratio 1:50) and vortex
			<li>Digest 4 - 18 hrs at 37<sup>o</sup>C, covered and shaking gently.
			<li>Collect filtrate by spinning at 14000 rcf for 20 minutes
			<li>Add 50 &#956;l water to filter
			<li>Vortex and spin at 14000 rcf for 20 minutes
			<li>Speed vacuum to reduce volume
			<li>Prior to LCMS analysis adjust volume with 0.1% formic acid to a final concentration of 1 &#956;g/&#956;l
			
			</ol>
</p>

<p><strong>Resources</strong>
                <ol>
				<li><a target="new" href="https://pubmed.ncbi.nlm.nih.gov/19377485/">Filter Aided Sample Preparation (FASP) Method</a> 
			from Matthias Mann's lab
                <li>FASP (filter aided sample preparation: digestion and cleanup) protocol for 
					<a target="new" href="http://shop.expedeon.com/products/25-Protein-Digestion-for-MS/">complex proteins samples and formalin fixed tissue</a> from Expedeon.
				
				</ol>
                </p>

		<p><strong>References</strong>
                <ol>
                <li> Proteome, phosphoproteome, and N-glycoproteome are quantitatively preserved in formalin-fixed paraffin embedded tissue and analyzable by high-resolution mass spectrometry. 
				     Ostasiewicz P, Zielinska DF, Mann M, Wisniewski JR. J Proteome Res. 2010 Jul 2; 9(7): 3688-700.
                </ol>
                </p>

</div>
</div>

<?php  include("../__footer.php"); ?>
