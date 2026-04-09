<?php  include("../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <section>
                     <header class="major">
                        <h1>In-Gel digestion</h1>
                        <span class="byline">In-Gel digestion protocols</span>
                     </header>

			<p>Use the <a target="new" href="https://www.thermofisher.com/order/catalog/product/89871">In-Gel Tryptic Digestion Kit</a> from Pierce, ThermoFisher or follow the protocol below</p>
			
		   <p>Here is a YouTube video preparing protein samples from  <a target="new" href="https://youtu.be/hr9kIW0jnXM"> SDS-polyacrylamide gels for mass spectrometry</a> provided by the Proteomics core facility of Shared Resources, Fred Hutchinson Cancer Research Center
			<p>And here are a couple of YouTube videos showing how to do in-gel digenstion <a target="new" href="https://youtu.be/4XVhWMLIAS8"> Part 1</a> and
			<a target="new" href="https://youtu.be/dqsfzCxDveM"> Part 2</a> provided by the University of California, Davis Proteomics Core Facility.
			
	<p>
		 <br><b>Trypsin in-gel digestion of proteins</b> <a href="/docs/protocols03/UWPR_Protocols_In_Gel_Digest.pdf">(pdf)</a> for collodial coomassie stained polyacrylamide gel slices
		 <br>
			<br><b>Materials</b>
			<br>All solvents should be HPLC grade, NEVER use pipette tips when transferring acids &gt;2% in concentration!
			<br><a target="new" href="/docs/protocols05/Avoid Contaminations.pdf">Avoid Contaminations (pdf)</a></li>
			<ol>
			<li>Dithiothreitol DTT (Fisher, part # PI-20291); Stock solution: 1 M in H<sub>2</sub>O
			<li>Iodoacetamide IAA (Fisher, part # AC12227-0050); Stock solution: 100 mM in H<sub>2</sub>O (0.0185g/ml; always prepare fresh, light sensitive)
			<li>Urea (Fisher, part # AC14075-0010 )
			<li>Water (Fisher, part # W6-4 optima LCMS grade)
			<li>Ammonium bicarbonate (Fisher, part # A643-500) Stock solution: 500 mM in H<sub>2</sub>O (NH<sub>4</sub>HCO<sub>3</sub> (79.1g/mol): 3.955g/100ml)
			<li>Acetonitrile (Fisher, part # A955-4 optima LCMS grade)
			<li>1 &#956;g/&#956;L Trypsin in 0.01% acetic acid (modified, sequencing grade, Promega, part # V5111, 5 x 20&#956;g/&#956;g)
			<li>Gel-Loading Pipet Tips (VWR, part # 53509-015)
			<li>Eppendorf LoBind Microcentrifuge Tubes: Protein (Fisher, part # 13-698-794)
			</ol>
			
			<br><font color="#FF5555"><b>Avoid Keratin contamination</b></font>
			<br>
			<br>When handling the gel and gel band(s) use extreme caution to avoid keratin contamination (from your skin and hair etc.). 
			Wear gloves at all times and use clean equipment (wipe all surfaces and tools with methanol/water and if possible use new unused razor blades). 
			Keep the gel at a reasonable distance from your body, don't talk, sneeze etc over the gel..... 
			<br>
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
			<br>Use coomassie stained polyacrylamide gels of 1mm thickness.
			<br>Note:  The excised band can be stored in de-ionized water for a few days at 4<sup>o</sup>C if necessary. Protein amounts should be in the hundreds of femtomole
			to 1 pmol range. A band that can be visualized by Coomassie blue stain, usually contains sufficient protein for identification.
			<br><br>This method involves reduction and alkylation of cysteine-containing peptides, this is useful for low
			level protein &lt;1pmol and typically results in higher sequence coverage of the protein, as it improves the recovery of cysteine containing peptides and 
			minimizes the appearance of unknown masses in MS analysis from disulfide bond formation and side chain modification
			<br>Note: Alkylation with iodoacetamide increases the mass of a peptide by 57.02 for each cystine present. Acrylamide modification of cystine results in a peptide mass increase of 71.04. 
			<br><br>For protein bands stained with mass spectrometry-compatible silver stains (e.g. Pierce Silver Stain Kit for Mass Spectrometry (24600)) or 
			reversible zinc staining (Pierce Zinc Reversible Stain Kit (24582)), alternative destaining procedures will be required.
			<br>
			<br>
			<ol>
			<li>Excise protein spot/band, cut into small pieces (~1 mm<sup>3</sup>) and dehydrate in acetonitrile for approx. 10 min, repeat this step twice.
			Remove acetonitrile and SpeedVac until dry. Note use gel loading pipette tips to remove solvents, and be careful not to lose the gel pieces.
			<li>Add 50-100 &#956;L 10mM DTT in H<sub>2</sub>O (or in 25mM ammonium bicarbonate) just enough to cover the gel pieces, vortex and spin down
			<li>Incubate at 56 <sup>o</sup>C for 45 min to 1hr.
			<li>Spin down, and pull off supernatant, allow to cool to room temperature.
			<li>Alkylate with iodoacetamide (184.96g/mol: 18.5mg/ml)) 100mM in 25mM ammonium bicarbonate (5 to 10 fold excess over DTT), incubate for 30min in the dark at room temperature.
			<li>Spind down, pull off supernatant, wash with H<sub>2</sub>O (or 25mM ammonium bicarbonate) and pull off wash.
			<li>Dehydrate in acetonitrile for approx. 10min. Remove acetonitrile and SpeedVac until dry.
			<li>Rehydrate gel pieces at 4 <sup>o</sup>C for 45 min in buffer containing trypsin and 50 mM ammonium bicarbonate. (Approx. 5 &#956;L/mm2 gel). The gel pieces should just be covered:
				<br>Suggested amount of trypsin is 12.5 ng/uL of buffer for proteins that have been silver stained.
				<br>(1&#956;g/&#956;L trypsin solution === 1&#956;L/80&#956;L 50 mM ammonium bicarbonate)
			    <br>Don't use more than 1 &#956;g trypsin per sample for MS analysis.
			<li>Cover gel pieces with 50 mM ammonium bicarbonate. Digest overnight at 37 <sup>o</sup>C (or at least for 3 hrs).
			<li>Centrifuge gel pieces (4min) and collect (keep) supernatant. Use gel loading pipette tips to remove solvents, and be careful not to transfer the gel pieces as they could interfere with downstream MS analysis.
			<li>Further extract peptides by one change of H<sub>2</sub>O and three changes of 5% formic acid in 50% acetonitrile incubate 20 min for each of the changes, centrifuge then collect at room temp.
			<li>Reduce sample volume in speedvac to about 5&#956;L, don't let the sample dry completely. Store at -20 <sup>o</sup>C
			<li>Prior to LC-MS analysis add 0.1-0.2% formic acid in water to about 10-12 &#956;L and inject 4-8 &#956;L
			</ol>
			Do not discard extracted gel pieces: if, for any reason, the digestion failed, it can be repeated with the same gel pieces using the same enzyme (trypsin) or using another enzyme. 
			Note that, in the latter case, strong peptide background may be encountered because of the digestion of residual intact trypsin.
		 
</p>

<p><strong>Resources</strong>
                <ul>
                <li><a href="/docs/protocols03/UWPR_Protocols_In_Gel_Digest.pdf">In-gel digest (pdf)</a>
				<br>In-gel-digestion protocols (if you don't like this one, there are lots of protocols out there on the web)
				<li><a target="new" href="https://tools.thermofisher.com/content/sfs/brochures/TR0050-Stained-gels-for-MS.pdf">In-gel digest Tech tip (Thermo)</a>
				<br>Includes a list of compatible staining reagents
				<li><a target="new" href="https://www.thermofisher.com/order/catalog/product/89871">Thermo: In-Gel Tryptic Digestion Kit (Cat: Nr 89871)</a>
				<li><a target="new" href="https://tools.thermofisher.com/content/sfs/manuals/MAN0011497_InGel_Tryptic_Digest_UG.pdf">Thermo: In-Gel Tryptic Digestion Kit instructions</a>
				<li><a target="new" href="http://www.nature.com/nprot/journal/v1/n6/full/nprot.2006.468.html">Nature Protocols: In-gel digestion for mass spectrometric characterization of proteins and proteomes</a>
				<br>Nature Protocols 1, - 2856 - 2860 (2007) Published online: 25 January 2007 | doi:10.1038/nprot.2006.468
				<br>
				<br><strong>Mass spec compatible stains</strong>
				<li><a target="new" href="http://www.thermofisher.com/order/catalog/product/LC6025">Thermo: Colloidal Blue Staining (Cat: Nr LC6025)</a>
				<li><a target="new" href="http://www.thermofisher.com/order/catalog/product/S12000">Thermo: SYPRO Ruby Protein Gel Stain (Cat: Nr S12000)</a>
				<br>SYPRO Ruby stain involves a noncovalent interaction and will generally be removed during preparation of the sample for mass spectrometry
				<li><a target="new" href="https://www.thermofisher.com/order/catalog/product/S12010">Thermo: SYPRO Tangerine Protein Gel Stain (Cat: Nr S12010)</a>
				<br>SYPRO Tangerine stain does not alter protein structure and so does not interfere with analysis by mass spectrometry.
				<li><a target="new" href="http://www.bio-rad.com/en-us/sku/1610490-flamingo-fluorescent-protein-gel-stain-20-ml">BioRad: Flamingo™ Fluorescent Protein Gel Stain (Cat: Nr 1610490)</a>
				<li><a target="new" href="http://www.thermofisher.com/order/catalog/product/LC6070">Thermo: SilverQuest Silver Staining (Cat: Nr LC6070)</a>
				<li><a target="new" href="https://www.thermofisher.com/order/catalog/product/24600">Thermo: Pierce Silver Stain for Mass Spectrometry (Cat: Nr 24600)</a>
				<li><a target="new" href="http://www.sigmaaldrich.com/catalog/product/sigma/protsil1?lang=en&region=US">Sigma: ProteoSilver Silver Stain (Cat: Nr PROTSIL1-1KT)</a>
				<li><a target="new" href="http://www.bio-rad.com/en-us/product/negative-stain-solutions">BioRad: Negative Stain Solutions</a>
				<li><a target="new" href="https://www.thermofisher.com/order/catalog/product/24582">Thermo: Pierce Zinc Reversible Stain (Cat: Nr 24582)</a>
				<li><a target="new" href="https://www.thermofisher.com/order/catalog/product/P33300">Thermo: Pro-Q Diamond Phosphoprotein Gel Stain (Cat: Nr 33300)</a>
				<br>Pro-Q Diamond Phosphoprotein Gel Stain allows direct, in-gel detection of phosphate groups attached to tyrosine, serine, or threonine residues and is fully compatible with mass spectrometry.
				<li><a target="new" href="https://www.thermofisher.com/order/catalog/product/P21855">Thermo: Pro-Q Emerald 300 Glycoprotein Gel Stain (Cat: Nr P21855)</a>
				<br>Pro-Q Emerald 300 stain only binds to carbohydrate groups at glycosylation sites. After trypsin digestion, the unglycosylated peptides, which are not stained, can be directly 
				identified. The glycosylated peptides are difficult to identify, even under standard conditions. If necessary, they can be deglycosylated for identification by mass spectrometry.
				<li><a target="new" href="https://www.thermofisher.com/order/catalog/product/LC6030">Thermo: InVision™ His-Tag In-Gel Stain (Cat: Nr LC6030)</a>
				<br>Directly detect His-tagged fusion proteins in the gel.
                </ul>
                </p>

		<p><strong>References</strong>
                <ol>
                <li>In-gel digestion for mass spectrometric characterization of proteins and proteomes.
                Andrej Shevchenko, Henrik Tomas, Jan Havlis breve, Jesper V Olsen and Matthias Mann<i>Nat Protoc.</i> 2006;1(6):2856-60. 
                <a target="new" href="http://www.ncbi.nlm.nih.gov/pubmed/17406544">link</a>
				<li>Mass spectrometric sequencing of proteins silver-stained polyacrylamide gels.
                Shevchenko A1, Wilm M, Vorm O, Mann M.<i>Anal Chem.</i> 1996 Mar 1;68(5):850-8. 
                <a target="new" href="http://www.ncbi.nlm.nih.gov/pubmed/8779443">link</a>
				
                </ol>
                </p>

</div>
</div>

<?php  include("../__footer.php"); ?>
