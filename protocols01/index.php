<?php  include("../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <div class="row">
                  
                     <!-- Content -->
                     <div id="content" class="8u skel-cell-important">
                        <section>
                           <header class="major">
                              <h1>Proteomics</h1>
                              <span class="byline">Protein identification and quantification</span>
                           </header>
                           
						   <p>Proteomics using mass spectrometry (LC-MS) allows system-wide identification and quantification of proteins for both discovery-based (untargeted) proteomics applications and targeted proteomics applications.
					<p>In bottom-up proteomics protein digestion and labeling technologies, when coupled to liquid chromatography-mass spectrometry (LC-MS), offer powerful methods for identifying and quantifying peptides, proteins, and posttranslational modifications (PTMs).
					<p>The strategy is to denature, reduce alkylate and digest the proteins and then separate the peptides using liquid chromatography (LC), and finally identify the peptides by MS. The resulting sequence data are used to determine the original protein components of the sample.
					<p>For PTM analyses additional enrichment strategies may be necessary, like metal affinity chromatography for selective phosphopeptide enrichment.
					<p>Quantitative proteomics using mass spectrometry (LC-MS) allows system-wide identification and quantification of proteins. Both discovery-based (untargeted) and targeted proteomics approaches are available. 
					The two main quantitation strategies include protein/peptide labelling with stable isotopes and label-free quantitation (LFQ).
						
		<p><h2 id="identification">Protein Identification</h2>
				<br>
				<br>A typical bottom-up or shotgun proteomics workflow (Figure below) consists of several major steps: 
				
				<ul>
				<li>starting with the isolation of the protein mixture from biological samples and determining the concentrations of isolated proteins
				<li>proteins can be fractionated by gel electrophoresis, liquid chromatography methods or immunoprecipitation (IP)
				<li>in the next step the proteins are proteolytically cleaved by enzymes (trypsin, LysC, ArgC etc.)
				<li>the peptides can then be further fractionated or enriched by affinity chromatography, and finally cleaned up to remove any contaminants that would interfere with the downstream analyses
				<li>the resulting peptides are then separated and analyzed by liquid chromatography coupled with mass spectrometry (LC-MS)
				<li>the final step is to analyze the acquired data by database search to identify peptide matches to spectra and further data processing validation, modeling and protein interference
					<br>at UWPR we generally use Comet and the TPP (trans proteomic pipeline) software tools
				</ul>
				<br>
				<div style="background-image: url('/images/MSworkflow_02.png'); height: 1026px; width: 644px;"></div>
				
				
		<p><h2 id="quantification">Protein quantification</h2>
				<br>
				<br><strong>Discovery proteomics based quantification - identify and quantify</strong>
				<br><br>Discovery proteomics experiments are intended to identify as many proteins as possible across a broad dynamic range, while at the same 
						time measuring the relative protein abundance changes of these proteins across multiple set of samples. Discovery based quantification requires very low LC-MS method development and delivers very good reproducibility. 
					<br>Several discovery based techniques have been developed, including 
			<ul>
				<li>Label-free quantitation (LFQ) by either data-dependent acquisition <a href="#DDA">(DDA)</a> or data-independent acquisition <a href="#DIA">(DIA)</a>
				<li>Chemical labeling with isobaric mass tags including <a href="#TMT">TMT</a> and <a href="#itraq">iTRAQ</a>
				<li>Stable isotope labeling by amino acids in cell culture <a href="#SILAC">(SILAC)</a>
			</ul>
			
			<table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th style="background-color:#C5C5F8" >Feature</th><th style="background-color:#C5C5F8" >LFQ (DDA)</th>
	<th style="background-color:#C5C5F8" >LFQ (DIA)</th><th style="background-color:#C5C5F8" >SILAC</th><th style="background-color:#C5C5F8" >TMT</th><th style="background-color:#C5C5F8" >iTRAQ</th></tr></thead>
<tbody>
<tr>
		<td align="center"> Multiplexing</td>
		<td align="center">low</td>
		<td align="center">low</td>
		<td align="center">medium</td>
		<td align="center">highest</td>
		<td align="center">high</td>
	</tr>
<tr>
		<td align="center" style="background-color:#D6D6EB">Number of samples per LC-MS</td>
		<td align="center" style="background-color:#D6D6EB">1</td>
		<td align="center" style="background-color:#D6D6EB">1</td>
		<td align="center" style="background-color:#D6D6EB">1-3</td>
		<td align="center" style="background-color:#D6D6EB">1-16</td>
		<td align="center" style="background-color:#D6D6EB">1-8</td>
	</tr>
	<tr>
		<td align="center">Precision (%CV)</td>
		<td align="center">&#60;15-20</td>
		<td align="center">&#60;10-15</td>
		<td align="center">&#60;10-15</td>
		<td align="center">&#60;5-10</td>
		<td align="center">&#60;5-10</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">Accuracy</td>
		<td align="center" style="background-color:#D6D6EB">Good</td>
		<td align="center" style="background-color:#D6D6EB">Good</td>
		<td align="center" style="background-color:#D6D6EB">Good</td>
		<td align="center" style="background-color:#D6D6EB">very good</td>
		<td align="center" style="background-color:#D6D6EB">very good</td>
	</tr>
	<tr>
		<td align="center">Coverage</td>
		<td align="center">Medium</td>
		<td align="center">Medium</td>
		<td align="center">Medium</td>
		<td align="center">High</td>
		<td align="center">High</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">Applicable to any sample type</td>
		<td align="center" style="background-color:#D6D6EB">yes</td>
		<td align="center" style="background-color:#D6D6EB">yes</td>
		<td align="center" style="background-color:#D6D6EB">no</td>
		<td align="center" style="background-color:#D6D6EB">yes</td>
		<td align="center" style="background-color:#D6D6EB">yes</td>
	</tr>
	<tr>
		<td align="center">Cost-efficient sample preparation</td>
		<td align="center">yes</td>
		<td align="center">yes</td>
		<td align="center">no</td>
		<td align="center">no</td>
		<td align="center">no</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">Minimal sample handling</td>
		<td align="center" style="background-color:#D6D6EB">yes</td>
		<td align="center" style="background-color:#D6D6EB">yes</td>
		<td align="center" style="background-color:#D6D6EB">no</td>
		<td align="center" style="background-color:#D6D6EB">no</td>
		<td align="center" style="background-color:#D6D6EB">no</td>
	</tr>
	<tr>
		<td align="center">Susceptible to inter-sample variations</td>
		<td align="center">low</td>
		<td align="center">low</td>
		<td align="center">lowest</td>
		<td align="center">medium</td>
		<td align="center">medium</td>
	</tr>
	
	<tr>
		<td align="center" style="background-color:#D6D6EB">LC reproducibility requirement</td>
		<td align="center" style="background-color:#D6D6EB">high</td>
		<td align="center" style="background-color:#D6D6EB">high</td>
		<td align="center" style="background-color:#D6D6EB">low</td>
		<td align="center" style="background-color:#D6D6EB">low</td>
		<td align="center" style="background-color:#D6D6EB">low</td>
	</tr>
	<tr>
		<td align="center">Technical replicates</td>
		<td align="center">multiple</td>
		<td align="center">multiple</td>
		<td align="center">few</td>
		<td align="center">few</td>
		<td align="center">few</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">Spectral library needed</td>
		<td align="center" style="background-color:#D6D6EB">no</td>
		<td align="center" style="background-color:#D6D6EB">yes</td>
		<td align="center" style="background-color:#D6D6EB">no</td>
		<td align="center" style="background-color:#D6D6EB">no</td>
		<td align="center" style="background-color:#D6D6EB">no</td>
	</tr>
	<tr>
		<td align="center">MS spectral complexity increased</td>
		<td align="center">no</td>
		<td align="center">no</td>
		<td align="center">yes</td>
		<td align="center">no</td>
		<td align="center">no</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">Method development</td>
		<td align="center" style="background-color:#D6D6EB">low</td>
		<td align="center" style="background-color:#D6D6EB">low</td>
		<td align="center" style="background-color:#D6D6EB">low</td>
		<td align="center" style="background-color:#D6D6EB">low</td>
		<td align="center" style="background-color:#D6D6EB">low</td>
	</tr>
	<tr>
		<td align="center">Quantification relative or absolute</td>
		<td align="center">yes / no</td>
		<td align="center">yes / no</td>
		<td align="center">yes / no</td>
		<td align="center">yes / no</td>
		<td align="center">yes / no</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">Quantification based on MS level</td>
		<td align="center" style="background-color:#D6D6EB">MS1</td>
		<td align="center" style="background-color:#D6D6EB">MS1 / MS2</td>
		<td align="center" style="background-color:#D6D6EB">MS1</td>
		<td align="center" style="background-color:#D6D6EB">MS2</td>
		<td align="center" style="background-color:#D6D6EB">MS2</td>
	</tr>
	
</tbody>
</table>
				<br><strong>Targeted proteomics based quantification</strong>
				<br><br>Targeted proteomics strategies limit the number of proteins that will be monitored and optimizes the instrument method for throughput of hundreds or thousands of samples. 
				        This translates to high quantitative precision and accuracy with very little errors in the estimation of the protein abundances
						<br>Several targeted quantitative techniques have been developed, including:
				
				<ul>
				<li>selected reaction monitoring (SRM) performed on triple-quadrupole instruments
				<li>Selected ion monitoring (SIM) performed on high-resolution accurate-mass instruments
				<li>Parallel reaction monitoring (PRM) using high-resolution MS
				<li>Absolute quantification (AQUA) of proteins with internal heavy labelled peptides
				<li>SureQuant internal standard (IS) targeted protein quantitation
			</ul>
			
			<table border="0" cellpadding="4" style="background-color:#EBEBF5">
<thead><tr><th style="background-color:#C5C5F8" >Feature</th><th style="background-color:#C5C5F8" >SRM</th>
	<th style="background-color:#C5C5F8" >SIM</th><th style="background-color:#C5C5F8" >PRM</th><th style="background-color:#C5C5F8" >AQUA</th><th style="background-color:#C5C5F8" >SureQuant</th></tr></thead>
<tbody>
<tr>
		<td align="center"> Multiplexing</td>
		<td align="center">low</td>
		<td align="center">low</td>
		<td align="center">low</td>
		<td align="center">low</td>
		<td align="center">low</td>
	</tr>
<tr>
		<td align="center" style="background-color:#D6D6EB">Number of samples per LC-MS</td>
		<td align="center" style="background-color:#D6D6EB">1</td>
		<td align="center" style="background-color:#D6D6EB">1</td>
		<td align="center" style="background-color:#D6D6EB">1</td>
		<td align="center" style="background-color:#D6D6EB">1</td>
		<td align="center" style="background-color:#D6D6EB">1</td>
	</tr>
	<tr>
		<td align="center">Precision (%CV)</td>
		<td align="center">&#60;5-10</td>
		<td align="center">&#60;5-10</td>
		<td align="center">&#60;5-10</td>
		<td align="center">&#60;5-10</td>
		<td align="center">&#60;5-10</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">Accuracy</td>
		<td align="center" style="background-color:#D6D6EB">very good</td>
		<td align="center" style="background-color:#D6D6EB">very good</td>
		<td align="center" style="background-color:#D6D6EB">very good</td>
		<td align="center" style="background-color:#D6D6EB">very good</td>
		<td align="center" style="background-color:#D6D6EB">very good</td>
	</tr>
	<tr>
		<td align="center">Sensitivity</td>
		<td align="center">high</td>
		<td align="center">5-50x vs full scan</td>
		<td align="center">high</td>
		<td align="center">high</td>
		<td align="center">high</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">Applicable to any sample type</td>
		<td align="center" style="background-color:#D6D6EB">yes</td>
		<td align="center" style="background-color:#D6D6EB">yes</td>
		<td align="center" style="background-color:#D6D6EB">yes</td>
		<td align="center" style="background-color:#D6D6EB">yes</td>
		<td align="center" style="background-color:#D6D6EB">yes</td>
	</tr>
	<tr>
		<td align="center">Cost-efficient sample preparation</td>
		<td align="center">yes</td>
		<td align="center">yes</td>
		<td align="center">yes</td>
		<td align="center">no</td>
		<td align="center">no</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">Minimal sample handling</td>
		<td align="center" style="background-color:#D6D6EB">yes</td>
		<td align="center" style="background-color:#D6D6EB">yes</td>
		<td align="center" style="background-color:#D6D6EB">yes</td>
		<td align="center" style="background-color:#D6D6EB">yes</td>
		<td align="center" style="background-color:#D6D6EB">yes</td>
	</tr>
	<tr>
		<td align="center">susceptible to inter-sample variations</td>
		<td align="center">medium</td>
		<td align="center">medium</td>
		<td align="center">medium</td>
		<td align="center">medium</td>
		<td align="center">medium</td>
	</tr>
	
	<tr>
		<td align="center" style="background-color:#D6D6EB">LC reproducibility requirement</td>
		<td align="center" style="background-color:#D6D6EB">high</td>
		<td align="center" style="background-color:#D6D6EB">high</td>
		<td align="center" style="background-color:#D6D6EB">high</td>
		<td align="center" style="background-color:#D6D6EB">low</td>
		<td align="center" style="background-color:#D6D6EB">low</td>
	</tr>
	<tr>
		<td align="center">technical replicates</td>
		<td align="center">multiple</td>
		<td align="center">multiple</td>
		<td align="center">multiple</td>
		<td align="center">few</td>
		<td align="center">few</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">Dynamic range</td>
		<td align="center" style="background-color:#D6D6EB">high</td>
		<td align="center" style="background-color:#D6D6EB"></td>
		<td align="center" style="background-color:#D6D6EB"></td>
		<td align="center" style="background-color:#D6D6EB"></td>
		<td align="center" style="background-color:#D6D6EB"></td>
	</tr>
	<tr>
		<td align="center">Confidence in peptide identity</td>
		<td align="center">medium</td>
		<td align="center">low</td>
		<td align="center">high</td>
		<td align="center">high</td>
		<td align="center">high</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">Method development</td>
		<td align="center" style="background-color:#D6D6EB">high</td>
		<td align="center" style="background-color:#D6D6EB">low</td>
		<td align="center" style="background-color:#D6D6EB">low</td>
		<td align="center" style="background-color:#D6D6EB">high</td>
		<td align="center" style="background-color:#D6D6EB">medium</td>
	</tr>
	<tr>
		<td align="center">Quantification relative or absolute</td>
		<td align="center">yes / yes</td>
		<td align="center">yes / yes</td>
		<td align="center">yes / yes</td>
		<td align="center">yes / yes</td>
		<td align="center">yes / yes</td>
	</tr>
	<tr>
		<td align="center" style="background-color:#D6D6EB">Quantification based on MS level</td>
		<td align="center" style="background-color:#D6D6EB">MS2</td>
		<td align="center" style="background-color:#D6D6EB">MS1</td>
		<td align="center" style="background-color:#D6D6EB">MS1 / MS2</td>
		<td align="center" style="background-color:#D6D6EB">MS1 / MS2</td>
		<td align="center" style="background-color:#D6D6EB">MS1 / MS2</td>
	</tr>
	
</tbody>
</table>
			
			
			
			
			
			
		<p><h2 id="DDA">Label-free Quantification DDA</h2>
				<br>
				<br>
				Label-free quantification is extremely sensitive to external factors such as differences in sample preparation, chromatography, and instrument configuration
				Therefore, samples should be processed in parallel with randomization and analyzed on the same column at a similar period in time.
				In data-dependent acquisition (DDA) workflows the sampling nature of the mass spectrometer is stochastic.
				This can make consistent pre-cursor and thereby protein quantitation challenging.
				Software algorithms minimize missing data points and maximize quantitative insights by extracting LC-MS peaks in the raw data files and mapping them to identified spectra.
				
			<br><br>Experimental considerations:
				<br><br>
				<ul>
				<li>2 to 3 biological replicates of the controls as well as the perturbation (samples)</li>
				<li>Samples should be processed in parallel
				<li>Replicate LC-MS analyses (three or more per sample) greatly increases the sensitivity of the protein quantification</li>
				<li>All the samples should be processed randomized with the same LC-MS setup</li>
				<li>Identification based on stochastic acquired fragmentation (MSMS) spectra</li>
				<li>Quantification based on extracted precursor m/z</li>
				
				</ul>
				
			<br>Software tools for Label-free Quantification from DDA data
				<br><br>
				<ul>
				<li>Skyline for DDA quantification.  [Ref 1]
				<br><a href="https://skyline.ms/wiki/home/software/Skyline/page.view?name=tutorial_dda_search">Skyline DDA Search for MS1 Filtering</a>
				<br><a href="https://skyline.ms/wiki/home/software/Skyline/page.view?name=tutorial_ms1_filtering">Skyline MS1 Full-Scan Filtering</a>
				<br> J. Meyer put together a nice protocol: Fast Proteome Identification and Quantification from Data-Dependent Acquisition–Tandem Mass Spectrometry (DDA MS/MS) Using Free Software Tools, see <a target="new" href="https://pubmed.ncbi.nlm.nih.gov/31008411/">Ref 1</a>
				<br><br>
				<li>MaxQuant
				<br><a href="https://www.maxquant.org/">MaxQuant quantitative proteomics software package</a>
				<li>Perseus
				<br><a href="https://www.maxquant.org/perseus/"> for interpreting protein quantification, interaction and post-translational modification data</a>
				<br><br>
				<li>SpectroMine: DIA, DDA and PRM Searchable and Differential Abundance Analysis (limited free trial)
				<br><a href="https://biognosys.com/software/spectromine/">SpectroMine from BIOGNOSYS</a>
				<br><br>
				<!--<li>Protalizer DDA software platform (only 30 day or up to 5 files, free trial)
				<br><a href="https://www.vulcan.ms/dda.html"> for any label-free DDA application</a>-->
				
				</ul>
				
				
				
		<p><h2 id="DIA">Label-free Quantification DIA</h2>
				<br>
				<br> Data-independent acquisition (DIA) offers several advantages over data-dependent acquisition (DDA) schemes for characterizing complex protein digests analyzed by LC-MS/MS. 
				DIA systematically parallelizes the fragmentation of all detectable ions within a wide m/z range regardless of intensity, thereby providing broader dynamic range of detected signals, 
				improved reproducibility for identification, better sensitivity, and accuracy for quantification.
				However, the composite or multiplexed fragment ion spectra generated by DIA require more elaborate processing algorithms compared to DDA.
				<br> Lisacek et al put together a nice review of Processing strategies and software solutions for data-independent acquisition in mass spectrometry, see <a target="new" href="https://pubmed.ncbi.nlm.nih.gov/31008411/">Ref 2</a>
				<br>
				<br>UWPR DIA overview <a target="new" href="/protocols05/DIA.php">page</a>
				<br>
				<br>Experimental considerations:
				<br><br>
				<ul>
				<li>2 to 3 biological replicates of the controls as well as the perturbation (samples)</li>
				<li>Samples should be processed in parallel
				<li>Replicate LC-MS analyses (three or more per sample) greatly increases the sensitivity of the protein quantification</li>
				<li>All the samples should be processed randomized with the same LC-MS setup</li>
				<li>Select precursor mass range to cover the masses of most enzymatic peptides</li>
				<li>Select isolation window width to acquire the chimeric MSMS data</li>
				<li>Generate spectral libraries to identify the peptides of interest</li>
				<li>Chromatographic peak areas are integrated for the precursor ion in the MS1 scan or the fragment ions in the MSMS scan.
				
				</ul>
				
				Software tools for Label-free Quantification from DIA data
				<br><br>
				<ul>
				<li>Skyline for DIA quantification.  [Ref 1]
				<br><a href="https://skyline.ms/wiki/home/software/Skyline/page.view?name=tutorial_dia_swath">Analysis of DIA/SWATH Data</a>
				<br><a href="https://skyline.ms/wiki/home/software/Skyline/page.view?name=tutorial_dia_pasef">Analysis of diaPASEF Data,  data independent acquisition (DIA) parallel accumulation serial fragmentation (PASEF) data, from a Bruker timsTOF instrument</a>
				
				<br><br>
				<li>OpenSWATH
				<br><a href="https://openswath.org/en/latest/">The OpenSWATH Workflow enables targeted data analysis of data-independent acquisition (DIA) or SWATH-MS proteomic data</a>
				<br><br>
				
				<li>MaxQuant
				<br><a href="https://www.maxquant.org/">MaxQuant quantitative proteomics software package</a>
				<li>Perseus
				<br><a href="https://www.maxquant.org/perseus/"> for interpreting protein quantification, interaction and post-translational modification data</a>
				<br><br>
				<li>Spectronaut: DIA proteomics analysis (limited free trial)
				<br><a href="https://biognosys.com/software/spectronaut/">Spectronaut from BIOGNOSYS</a>
				<br><br>
				<!--<li>microDIA-Protalizer software platform (only 30 day or up to 5 files, free trial)
				<br><a href="https://www.vulcan.ms/microdia.html"> microDIA-Protalizer</a>-->
				
				</ul>
				</p>
				
		<p><h2 id="SILAC">Stable isotope labeling SILAC</h2>
				<br><br>Stable isotope labeling using amino acids in cell culture (SILAC) is a powerful method to identify and quantify relative differential changes in complex protein samples. 
			The SILAC method uses in vivo metabolic incorporation of “heavy” 13C- or 15N-labeled amino acids into proteins followed by mass spectrometry (MS) analysis for accelerated 
			comprehensive identification, characterization and quantitation of proteins. NeuCode amino acids enable up to four samples to be multiplexed simultaneously.
			
			<br>UWPR stable isotope labeling overview <a target="new" href="https://proteomicsresource.washington.edu/protocols03/isotopic_labeling.php#silac">SILAC page</a>
			
			<br>
				<br>Experimental information:
				<br><br>
				<ul>
			<li> Pino et al combined SILAC with DIA quantification workflows, see <a target="new" href="https://pubmed.ncbi.nlm.nih.gov/31008411/">Ref 3</a></li>
			
			<li>Protocols from ShaoEn Ong and Matthias Mann 
			<a target="new" href="https://www.researchgate.net/publication/6414471_A_practical_recipe_for_stable_isotope_labeling_by_amino_acids_in_cell_culture_SILAC">A practical recipe for stable isotope labeling by amino acids in cell culture (SILAC)</a> Ref 4
			</ul>
			
			There are multiple different kits from different vendors available:
			<br><br>
				<ul>
			<li> <a target="new" href="https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/protein-quantitation-mass-spectrometry/silac-metabolic-labeling-systems.html">SILAC systems</a> from Thermo  
			<li> <a target="new" href="https://www.sigmaaldrich.com/US/en">search SILAC to find related products</a> from Sigma
			<li> <a target="new" href="http://shop.isotope.com/category.aspx?id=10032092">SILAC Kits and Reagents</a> from Cambridge Isotope Laboratories 
			<br>there are likely other I missed, so do your homework.. 
				</ul>
				
				Software tools for SILAC quantification
				<br><br>
				<ul>
				<li>The <a target="new" href="http://www.tppms.org/">Trans-Proteomic Pipeline (TPP)</a> is a complete and mature suite of free and open-source software tools for MS data representation, MS data visualization, peptide identification and validation, protein identification, 
				quantification, and annotation, data storage and mining, and biological inference. 
				The <a target="new" href="http://tools.proteomecenter.org/wiki/index.php?title=Software:ASAPRatio">Automated Statistical Analysis on Protein Ratio (ASAPRatio)</a> and <a target="new" href="http://tools.proteomecenter.org/wiki/index.php?title=Software:XPRESS">XPRESS</a> 
				software tools are part of the TPP calculates the relative abundance of proteins, such as those obtained from stable isotope labeled precursors, by reconstructing the light and heavy elution profiles of the precursor ions and determining the elution areas of each peak
				<br><br>
				<li><a target="new" href="https://skyline.ms/project/home/software/Skyline/begin.view">Skyline</a> is also being used to integrate SILAC data.
			    <br>Check <a target="new" href="https://skyline.ms/project/home/software/Skyline/events/2015%20Webinars/Webinar%2012/begin.view?">Skyline Webinar 12: Isotope Labeled Standards in Skyline</a> for more information
			    <br>You may need to define a new Isotope Label Type: Click the "Isotope label type" dropdown list in the Peptide Settings - Modifications tab, and click the &lt;Edit list...&gt; element. 
			     Then specify your isotope label types in a line separated list in the form that appears.
			     Once you have your two label types, you need to make sure that Arg10, Lys8 are checked when you have "heavy" selected in the list, and Arg6, Lys4 are checked when you have "medium" selected. 
			     All of these modifications will need to be added to the "Isotope modifications" list. The "Internal standard type" list will change to a check list (from a dropdown list), which allows you 
			     to specify multiple internal standard types. You would just make sure nothing is checked in this list for a SILAC experiment, which is the equivalent to "None" in the dropdown list.

			For targeted proteomics experiments for sample preparations involving both AQUA labeled peptides and 15N labeled proteins, both get checked as internal standard types.
				
				<br><br>
				<li>MaxQuant
				<br>MaxQuant is a quantitative proteomics software package designed for analyzing large mass-spectrometric data sets. 
				It is specifically aimed at high-resolution MS data. Several labeling techniques as well as label-free quantification are supported. 
				MaxQuant is freely available and can be downloaded from this site.
				<br><a href="https://www.maxquant.org/">MaxQuant quantitative proteomics software package</a>
				<li>Perseus
				<br><a href="https://www.maxquant.org/perseus/"> for interpreting protein quantification, interaction and post-translational modification data</a>
				<br><br>
				<li>PEAKS Q (limited free trial)
				<br><a href="https://www.bioinfor.com/silac-quantification/">PEAKS Q SILAC Quantification Algorithms</a>
				<br>
				</ul>
				
		<p><h2 id="TMT">Stable isotope labeling TMT</h2>
				
				<p>Isobaric chemical tags are a more universal alternative to SILAC for simultaneous identification and quantitation of proteins in multiple sample sets. They can facilitate relative 
				quantitation of a wide variety of samples including cells, tissues, and biological fluids.

				<p>In relative quantitation experiments, different isobaric tags are used to label different systemic conditions. Once labeled, all samples are mixed and analyzed in a single liquid 
				chromatography-mass spectrometry (LC-MS) experiment. Because the isobaric tags possess the same chemical properties, all peptides from different TMT-labeled samples co-elute during LC 
				separation. Once the peptides enter the mass spectrometer, they are detected simultaneously as a single and indistinguishable precursor ion peak.

				<p>Following fragmentation, the tags from each individual systemic condition generate a unique signature reporter ion in the low m/z area of the MS/MS spectrum. Peptide identification 
				is achieved by matching the resulting ion peaks to those provided in fragment databases. Peptide quantitation is accomplished by comparing the intensities of the reporter ions.
				
				<br><br>UWPR stable isotope labeling overview <a target="new" href="https://proteomicsresource.washington.edu/protocols03/isotopic_labeling.php#tmt">TMT page</a> for more detailed information
				<br>
				<br>Thermo <a target="new" href="https://www.thermofisher.com/us/en/home/industrial/mass-spectrometry/proteomics-mass-spectrometry/quantitative-proteomics-mass-spectrometry/tmt-quantitation.html">TMT Quantitation Overview</a>.
				<br>
				<br> There are multiple different kits available (2-plex, 6-plex, 10-plex, 16-plex and 18-plex), including bulk, so you can adjust your order to your specific experimental needs:
				<a target="new" href="https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/protein-quantitation-mass-spectrometry/tandem-mass-tag-systems.html">TMT kits from Thermo</a>
			    </p>
				
		<p><h2 id="itraq">Stable isotope labeling iTRAQ</h2>
		
				<br><br>The iTRAQ reagents are multiplexed, amine-specific, stable-isotope reagents that can label all peptides in up to eight different biological samples enabling simultaneous identification and quantitation, 
				both relative and absolute, while retaining important PTM information. There are two types of iTRAQ reagent kits, 4plex and 8plex. 
				
				<br><br>UWPR stable isotope labeling overview <a target="new" href="https://proteomicsresource.washington.edu/protocols03/isotopic_labeling.php#itraq">iTRAQ page</a> for more detailed information
				<br>
				<br>Sciex <a target="new" href="https://sciex.com/br/products/consumables/itraq-reagent">iTRAQ Quantitation Overview</a>
				<br>
				<br>
				</p>
				
				<p><strong></strong>
				<br>
				</p>
				
				<p><h2 id="SRM">Targeted Quantification SRM</h2>
				<br>
				<br>Targeted quantitation using selected reaction monitoring (SRM) with a triple quadrupole mass spectrometer has been used for a long time. In SRM, a peptide/peptides unique to the protein of interest are selected for targeted quantitation. 
				Specific fragment ions from the target peptide along with its parent mass (referred to as transitions) and retention time are used to monitor the peptide across multiple sample sets. 
				By using very narrow isolation windows to select the fragments, chemical interferences can be reduced to increase both selectivity and sensitivity for transitions of interest. 
				Quantitation is performed by integrating the peak area of the transitions over the chromatographic time scale and comparing them over multiple samples. SRM quantitation is extremely sensitive, 
				reliable, and suitable for analyzing large numbers of samples. SRM can also be used to perform absolute quantitation of targeted proteins by incorporation of appropriate stable isotope-labeled peptides as internal standards.
				Method development to determine the best transitions can be very extensive.
				
				<br><br>UWPR targeted proteomics by <a target="new" href="https://proteomicsresource.washington.edu/protocols05/MRM.php">SRM page</a> for more detailed information
				<br>
				</p>
				
				<p><strong></strong>
				<br>
				</p>
				
				<p><h2 id="SIM">Targeted Quantification SIM</h2>
				<br>
				<br>Selected ion monitoring (SIM) performed on high-resolution accurate-mass instruments such as an Orbitrap mass spectrometer provides the simplest method set up and the most selective and sensitive quantification.
				It is most suitable for quantifying tens of proteins in samples of medium complexity. SIM also provides higher sensitivity for quantification of labile peptides which do not fragment efficiently. 
				The SIM methodology uses the quadrupole of the MS to isolate the precursor of the target peptide ion. Only the selected target ion is transferred to the mass analyzer for detection. 
				There is no fragmentation. SIM experiments can also be multiplexed (msxSIM). In such experiments up to ten targets can be isolated sequentially, accumulated, and then transferred to the mass analyzer for 
				detection in a single spectrum. Confirmation of the targeted peptide is accomplished using accurate-mass measurements in combination with elution-time information.
				
				
				<br>
				</p>
				
				<p><strong></strong>
				<br>
				</p>
				
				<p><h2 id="PRM">Targeted Quantification PRM</h2>
				<br>
				<br>Parallel reaction monitoring (PRM), also performed on high-resolution accurate-mass instruments, provides high selectivity, high sensitivity, and high-throughput quantification with confident targeted peptide
				confirmation. It is most suitable for quantifying tens to hundreds of targeted proteins in complex matrices. PRM methodology uses the quadrupole of the mass spectrometer to isolate a target precursor ion, 
				fragments the targeted precursor ion in the collision cell, and then detects the resulting product ions in the mass analyzer. Quantification is carried out by extracting one or more fragment ions’ 
				area with a 5–10 ppm mass window and then comparing the information across multiple sample sets.
				PRM offers several advantages for targeted quantitation. It eliminates most interferences, providing high accuracy and attomole-level limits of detection and quantification. 
				Since PRM generates a fragmentation spectrum for the target peptide, confident confirmation of the peptide identity can be obtained with spectral library matching. Furthermore, 
				it reduces assay development time since target transitions don’t need to be preselected.
				
				<br><br>UWPR targeted proteomics by <a target="new" href="https://proteomicsresource.washington.edu/protocols05/PRM.php">PRM page</a> for more detailed information
				<br>
				</p>
				
				<p><strong></strong>
				<br>
				</p>
				
				<p><h2 id="AQUA">Targeted Quantification AQUA</h2>
				
				<br><br>AQUA strategy is for the absolute quantification (AQUA) of proteins and their modification states. Peptides are synthesized with incorporated stable isotopes as internal standards 
				to mimic native peptides formed by proteolysis. These synthetic peptides can also be prepared with covalent modifications (e. g. , phosphorylation, methylation, acetylation, etc.) that are 
				chemically identical to naturally occurring posttranslational modifications. Such AQUA internal standard peptides are then used to precisely and quantitatively measure the absolute levels 
				of proteins and post-translationally modified proteins after proteolysis by using a SRM or PRM analysis in a tandem mass spectrometer.
				<br>
				<br><br>UWPR stable isotope labeling overview <a target="new" href="https://proteomicsresource.washington.edu/protocols03/isotopic_labeling.php#aqua">AQUA page</a> for more detailed information
				<br>
				<br>
				</p>
				
				<p><strong></strong>
				<br>
				</p>
				
				<p><h2 id="surequant">Targeted Quantification SureQuant IS</h2>
				<br>
				<br>SureQuant IS targeted protein quantitation workflow builds upon the PRM, SRM and AQUA approach by using spiked-in internal standards to dynamically control MS acquisition parameters and optimize instrument duty cycle, 
				thereby maximizing the number of productive MS scans and improving sensitivity of target detection. This enhanced efficiency enables targeted quantitation of far more targets than PRM while still maintaining 
				high quantitative performance. 
				<br>The overall SureQuant IS targeted protein quantitation workflow is comprised of two steps. First, a survey is run to verify the detectability of the reference internal standards (i.e. isotopically labeled AQUA peptides). 
				The internal standards are standards of the peptides that the user of the SureQuant method wants to target and quantify. This analysis verifies the optimal precursor ion of each internal standard peptide and the optimal associated fragment 
				ions that can be detected. The signal intensity of the internal standard and corresponding triggering intensity threshold is also determined from the survey run. 
				This is followed by the SureQuant analysis, targeting the peptides of interest. Here, using the SureQuant method, the mass spectrometer is programmed to monitor the reference internal standard in the sample 
				using low fill times and resolution. As soon as the internal standard is detected, the instrument switches to using longer fill times and higher resolution to acquire PRM data for the internal standard and the 
				endogenous peptide. The real-time management of acquisition time maximizes the time devoted to analyte quantitation allowing a greater number of targets to be reliably detected and quantified for targeted 
				proteomics experiments. Furthermore, the constant on-the-fly monitoring of the internal standard removes the need for retention time scheduling, allowing for a far more robust and reproducible analytical method 
				The built-in positive internal standard control provides a definitive limit of detection (LOD) measure for the presence or absence of proteins in the sample addressing the common need to assess protein copy 
				number expression in many molecular biology experiments. Validated instrument method templates for both Survey Run and SureQuant IS targeted protein quantitation workflow analysis are provided, preset 
				for various Thermo  SureQuant targeted assay kits, like the AKT/mTOR pathway kit. Generic SureQuant method templates are also available to simplify the development of custom protein panel assays.
				<br>
				</p>
				
				<p><strong></strong>
				<br>
				</p>
				
				<p><h2 id="surequant">Tools for downstream analysis of proteomics data</h2>
		
				<br>
				<br><a target="new" href="http://geneontology.org/">The Gene Ontology resource</a> is a comprehensive, computational model of biological systems, ranging from the molecular to the organism level, 
				across the multiplicity of species in the tree of life.
				<br>The Gene Ontology (GO) knowledgebase is the world’s largest source of information on the functions of genes. This knowledge is both human-readable and machine-readable, and is a foundation for 
				computational analysis of large-scale molecular biology and genetics experiments in biomedical research.
				
				<br>
				<br><a target="new" href="https://pantherdb.org/">The PANTHER (Protein ANalysis THrough Evolutionary Relationships) Classification System</a> was designed to classify proteins (and their genes) in order to facilitate high-throughput analysis.
		
				<br>
				<br><a target="new" href="http://cbl-gorilla.cs.technion.ac.il/">Gene Ontology enRIchment anaLysis and visuaLizAtion tool GOrilla</a> 
				<br>GOrilla is a web-based application that identifies enriched GO terms in ranked lists of genes, without requiring the user to provide explicit target and background sets. 
				The output of the enrichment analysis is visualized as a hierarchical structure, providing a clear view of the relations between enriched GO terms.
				
				<br>
				<br><a target="new" href="https://www.bioconductor.org/packages/release/bioc/html/MSstatsTMT.html">MSstatsTMT at Bioconductor</a> provides statistical tools for detecting differentially abundant proteins 
				in shotgun mass spectrometry-based proteomic experiments with tandem mass tag (TMT) labeling. It provides multiple functionalities, including data visualization, protein quantification and normalization, 
				and statistical modeling and inference. Furthermore, it is inter-operable with other data processing tools, such as Proteome Discoverer, MaxQuant, OpenMS and SpectroMine.
				<br><a target="new" href="https://msstats.org/wp-content/uploads/2018/12/MSstatsTMT.html">MSstatsTMT : A package for protein significance analysis in shotgun mass spectrometry-based proteomic experiments with tandem mass tag (TMT) labeling</a>
				<br>Ref 5
				
				<br>
				<br><a target="new" href="http://www.webgestalt.org/">WEB-based GEne SeT AnaLysis Toolkit</a> is one of the first web tools for functional enrichment analysis.
				
				<br>
				<br><a target="new" href="https://cytoscape.org/">Cytoscape</a> is an open source software platform for visualizing complex networks and integrating these with any type of attribute data.
				
				<br>
				<br><a target="new" href="https://string-db.org/cgi/about">STRING</a> is a database of known and predicted protein-protein interactions. 
				The interactions include direct (physical) and indirect (functional) associations; they stem from computational prediction, from knowledge transfer between organisms, and from interactions aggregated from other (primary) databases.
				
				<br>
				<br><a target="new" href="http://quantitativeproteomics.org/normalyzerde">Normalyzer</a> normalizes the uploaded data using twelve different well known normalization methods and compares the resulting data based on quantitative and qualitative parameters. 
				
				<br>
				<br><a target="new" href="https://bioinfogp.cnb.csic.es/tools/venny/">Venny</a> allows you to create Venn diagrams. 
				
				</p>
				
				<p><strong></strong>
				<br>
				</p>
				
		<p><h2 id="references">References</h2>
				<br>
                <ol>
				<li>Fast Proteome Identification and Quantification from Data-Dependent Acquisition-Tandem Mass Spectrometry (DDA MS/MS) Using Free Software Tools
					Jesse G Meyer 
					<i>Methods Protoc</i> 2019 Mar;2(1):8. doi: 10.3390/mps2010008. Epub 2019 Jan 17.
					<a target="new" href="https://pubmed.ncbi.nlm.nih.gov/31008411/">PubMed link</a></li>
				<li>Processing strategies and software solutions for data-independent acquisition in mass spectrometry
					Aivett Bilbao, Emmanuel Varesio, Jeremy Luban, Caterina Strambio-De-Castillia, Gérard Hopfgartner, Markus Müller, Frédérique Lisacek 
					<i>Proteomics</i> 2015 Mar;15(5-6):964-80. doi: 10.1002/pmic.201400323. Epub 2015 Feb 2.
					<a target="new" href="https://pubmed.ncbi.nlm.nih.gov/25430050/">PubMed link</a></li>
				<li>Improved SILAC quantification with data independent acquisition to investigate bortezomib-induced protein degradation
					Pino LK, Baeza J, Lauman R, Schilling B, Garcia BA. 
					<i>J Proteome Res.</i> 2021 Apr 2;20(4):1918-1927. doi: 10.1021/acs.jproteome.0c00938. Epub 2021 Mar 25.
					<a target="new" href="https://www.ncbi.nlm.nih.gov/labs/pmc/articles/PMC8256668/">PubMed link</a></li>
				<li>A practical recipe for stable isotope labeling by amino acids in cell culture (SILAC)
					Shao-En Ong , Matthias Mann 
					<i>Nat Protoc.</i> 2006;1(6):2650-60. doi: 10.1038/nprot.2006.427.
					<a target="new" href="https://pubmed.ncbi.nlm.nih.gov/17406521/">PubMed link</a></li>
				<li>MSstatsTMT: Statistical Detection of Differentially Abundant Proteins in Experiments with Isobaric Labeling and Multiple Mixtures
					Huang T, Choi M, Tzouros M, Golling S, Pandya NJ, Banfai B, Dunkley T, Vitek O. 
					<i>Mol Cell Proteomics</i> 2020 Oct;19(10):1706-1723. doi: 10.1074/mcp.RA120.002105. Epub 2020 Jul 17.
					<a target="new" href="https://pubmed.ncbi.nlm.nih.gov/32680918/">PubMed link</a></li>
                
                </ol>
                </p>
						   
						</section>
                     </div>
      
                     <!-- Sidebar -->
                     <div id="sidebar" class="4u">
                        
                        <section>
                           <header class="major">
                              <h2>On this page</h2>
                           </header>
                           <ul class="default">
                              <li><a href="#identification">Identification</a></li>
                              <li><a href="#quantification">Protein Quantification</a></li>
                              <li><a href="#DDA">Label-free Quantification DDA</a></li>
                              <li><a href="#DIA">Label-free Quantification DIA</a></li>
                              <li><a href="#SILAC">Stable isotope labeling SILAC</a></li>
                              <li><a href="#TMT">Stable isotope labeling TMT</a></li>
                              <li><a href="#itraq">Stable isotope labeling iTRAQ</a></li>
							  <li><a href="#SRM">Targeted Quantification SRM</a></li>
							  <li><a href="#SIM">Targeted Quantification SIM</a></li>
							  <li><a href="#PRM">Targeted Quantification PRM</a></li>
							  <li><a href="#AQUA">Targeted Quantification AQUA</a></li>
							  <li><a href="#surequant">Targeted Quantification SureQuant</a></li>
							  <li><a href="#references">References</a></li>
                           </ul>
                        </section>
						<section>
                           <header class="major">
                              <h2>UWPR pages</h2>
                           </header>
                           <ul class="default">
						      <li><a target="new" href="/protocols05/MRM.php">SRM page</a></li>
							  <li><a target="new" href="/protocols05/PRM.php">PRM page</a></li>
				              <li><a target="new" href="/protocols05/DIA.php">DIA page</a></li>
							  <li><a target="new" href="/protocols03/isotopic_labeling.php">Isotopic Labeling page</a></li>
                              <li>
                              
                           </ul>
                        </section>
                     </div>
                     
                  </div>
               </div>
            <!-- /Page -->

   </div>

<?php  include("../__footer.php"); ?>
