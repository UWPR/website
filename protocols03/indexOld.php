<?php  include("../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <section>
                     <header class="major">
                        <h1>Protein Digestion</h1>
                     </header>

                <p>For bottom-up proteomics proteins are digested into smaller, easier to handle peptides, which are then separated by on-line HPLC and analyzed by the mass spectrometer (LC-MS). 
				It is critical to avoid/minimize any contaminations during your entire sample preparation that could interfere with the subsequent LC-MS analysis. 
				<br>			
				Salts, detergents and plasticisers are ionizable contaminations that cause major problems during the LC-MS analysis. They compete with the peptides binding to the column and detection by the mass spectrometer 
				and thus will drastically decrease the overall sensitivity of the analysis. 
				 <br>
				Complex biological matrices may not only be rich in proteins but also rich in metabolites, lipids, nucleic acids, sugars, and other molecules. 
				If not removed, they will also compete with the peptides for analysis. 
				<br>
				Therefore, the primary goal should be to eliminate contamination and to increase the amount/number of peptides in a sample.
				If at all possible, systematic preventive elimination of contaminants is preferable over retrospective reduction of contaminants.
				<br>
				Equally important is an effective digestion protocol that produces few missed cleavages, few unspecific cleavages, and few undesired side reactions.
				If a peptide is present in properly cleaved,a missed cleaved and/or modified form, its signal intensity will be distributed into the number of forms present, 
				decreasing its signal intensity and increasing the sample complexity (i.e. the number of detectable peptide ions). 
				For example use of urea solution can lead to carbamylations (via its decomposition to ammonium cyanate) when using aged solutions or when used at elevated temperatures (above 25<sup>o</sup>C)
				<br>
				<br>
				<strong>Avoid detergents</strong> that are not mass spec compatible, including: 
				<ul>
				<li>NP-40
				<li>TritonX (any derivative)
				<li>Igepal (any derivative) 
				<li>Brij-35 (or any derivative) 
				<li>Tween-20 
				<li>OTG
				<li>SDS 
				<li>CHAPS 
				<li>CHAPSO
				</ul>
				Dilution, washing, and detergent removal columns often do NOT remove enough detergent for successful analysis of your sample, 
				and can lead to massive contamination of the mass spectrometer and HPLC/column. 
				<br>In addition detergent removal also leads to sample loss! 
 				<br>
				<br>
				
				<strong>Use "mass spec friendly" detergents</strong> to keep the proteins in solution: 
				<br>
				<br>
				<ul>
				<li><strong>PPS Silent Surfactant</strong> (acid-cleavable detergent) from 
				     <a href="/docs/protocols03/expedeon_PPS_SilentSurfactant.pdf">Expedeon</a> (former ProteinDiscovery) or 
				     <a href="/docs/protocols03/Agilent_PPS_SilentSurfactant.pdf">Agilent</a>
					 <br>Protocol <a target="new" href="/protocols03/PPS_SilentSurfactant.php">PPS Silent Surfactant page</a>
					 <br><br>
			    <li><strong>RapiGest Surfactant</strong> <a href="http://www.waters.com/waters/en_IL/Home/nav.htm?cid=1000941&locale=en_IL#FACETED_NAVIGATION"> from Waters</a>
				     <br>Protocol <a target="new" href="/protocols03/RapiGestSurfactant.php">RapiGest Surfactant page</a>
					 <br><br>
				<li>Invitrosol LC/MS Protein Solubilizer <a href="https://www.thermofisher.com/order/catalog/product/MS10007"> from Thermo</a>
				<li>N-octyl-&beta;-glucopyranoside (ThermoPierce)
				<li>Big CHAP deoxy (Merck)
				<li>ASB series (EMD chemicals)
				<li>sodium deoxycholate (ThermoPierce)
				</ul>
				Starting out with clean HPLC grade solvents and keeping them clean is very important.
				<br><a target="new" href="/docs/protocols05/Avoid Contaminations.pdf">Avoid Contaminations (pdf)</a>
				</p>
				
                
				
				<p><strong>Enzymatic Digestion Protocols</strong>
				</p>
				<p>List of enzymes and specificity
				<a target="new" href="http://web.expasy.org/peptide_cutter/peptidecutter_enzymes.html">Expasy Peptide Cutter Page</a>
				</p>
				<p>
				Jimmy's <a target="new" href="/cgi-bin/digest.cgi">UWPR Protein digestion calculator</a>
				</p>
                
				<p>List of digestion protocols</p>
				<p>
				<ul>
				<li><a href="/docs/protocols03/ThermoPierce_Trypsin_digestion.pdf">ThermoPierce Trypsin digestion protocol (pdf)</a>
				<br>
				<br>
				<li><a href="/docs/protocols03/Promega_TrypsinGoldMassSpectrometryGradeProtocol.pdf">Promega TrypsinGold MS GradeProtocol (pdf)</a>
				<br>
				<br>
				<li><a href="/docs/protocols03/Promega_SequencingGradeModifiedTrypsin.pdf">Promega_SequencingGradeModifiedTrypsin (pdf)</a>
				<br>Promega's sequencing grade Trypsin (V5111) is commonly used in proteomics, works well and is affordable...
				<br>
				<br>
				<li><a href="http://preomics.com/">PreOmics Kits</a> for sample preparation and peptide cleanup in the field of MS-based proteomics</a>
				<br>PreOmics iST Kits offer all-in-one, standardized and simple-to-use solutions for reproducible preparation from any starting material to clean peptide mixtures in just 1 hour for LC-MS measurements.
				<br>
				<br>
				<li><a href="/docs/protocols03/UWPR_Protocols_Protein_Digestion_Protocols.pdf">Protein Digestion (pdf)</a>
				<br>this document contains several digestion protocols including digestion with trypsin, LysC...
				<br>
				<br>
				<li><a target="new" href="/protocols03/ingeldigestion.php">In-gel digest page</a>
				<br>
				<br>
				<li><a target="new" href="/protocols03/FASPprotocols.php">FASP (Filter Aided Spample Preparation) protocol</a> 
				to generate tryptic peptides from crude lysates for LC-MS analysis (page)
				<br>
				<br>
				<li><a target="new" href="http://www.protifi.com/s-trap/">S-Trap, Rapid universal MS sample prep</a> 
				One easy-to-use spin column combines sample concentration, clean up and digestion (page)	
				</ul>
				
				<p>Digestion Enzymes</p>
				
				<ul>
				
				<li><strong>Trypsin [KR|P]</strong>
            <br><a target="new" href="https://www.promega.com/products/mass-spectrometry/trypsin/sequencing-grade-modified-trypsin/">Promega Sequencing Grade Modified Trypsin</a>
            <br><a target="new" href="https://www.promega.com/products/mass-spectrometry/trypsin/rapid-digestion-trypsin-and-trypsin-lysc-kits/">Promega Trypsin/Lys-C</a>
            <br><a target="new" href="https://www.promega.com/products/mass-spectrometry/trypsin/trypsin-lys-c-mix-mass-spec-grade/">Promega Trypsin/Lys-C Mix, Mass Spec Grade</a>
            <br><a target="new" href="https://www.promega.com/products/mass-spectrometry/trypsin/">Promega Immobilized Trypsin</a>
				<br><a target="new" href="http://www.sigmaaldrich.com/life-science/proteomics/mass-spectrometry/trypsin-proteomics-grade.html">Sigma Trypsin Products</a>
				
				<li><strong>Chymotrypsin [FWYL|P]</strong>
				<br><a target="new" href="https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/chymotrypsin_-sequencing-grade/">Promega Chymotrypsin, Sequencing Grade</a> cleaves at C-Terminus of Tyr, Phe and Trp
				
				<li><strong>LysC [K|P]</strong>
				<br><a target="new" href="https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/rlys-c-mass-spec-grade/">Promega rLys-C, Mass Spec Grade</a>
				<br><a target="new" href="http://www.sigmaaldrich.com/catalog/product/sigma/p3428?lang=en&region=US">Sigma Endoproteinase Lys-C</a>
				
				<li><strong>ArgC [R|P]</strong>
				
				<li><strong>ArgC [R|-]</strong>
				<br><a target="new" href="https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/arg_c_-sequencing-grade/">Promega Arg-C, Sequencing Grade</a> Cleaves at the C-terminus of arginine residues, including sites next to proline, Also cleaves at lysine residues
				<br><a target="new" href="http://www.sigmaaldrich.com/catalog/product/roche/11370529001?lang=en&region=US">Sigma Endoproteinase Arg-C Sequencing Grade</a> C-terminal side of arginine residues and lysine sites with lower efficiency
				
				<li><strong>AspN [-|D] n-terminal</strong>
				<br><a target="new" href="https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/asp_n_-sequencing-grade/">Promega Asp-N, Sequencing Grade</a> Hydrolyzes Peptide Bonds on the N-Terminal Side of Aspartic and Cysteic Acid Residues (Asp and Cys)
				<br><a target="new" href="http://www.sigmaaldrich.com/catalog/product/roche/endoargsro?lang=en&region=US">Sigma Endoproteinase Asp-N Sequencing Grade</a> specifically cleaves peptide bonds N-terminally at aspartic and cysteic acid. If cysteine is reduced or alkylated, only -↓-Asp-X is cleaved. 
				
				<li><strong>GluC [DE|P]</strong>
				<br><a target="new" href="https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/glu_c_-sequencing-grade/">Promega Glu-C, Sequencing Grade</a>
				<br><a target="new" href="http://www.sigmaaldrich.com/catalog/product/roche/endoglusro?lang=en&region=US">Sigma Endoproteinase Glu-C Sequencing Grade</a> specifically hydrolyzes peptide bonds at the carboxylic side of Glu. 
				
				<li><strong>LysN [-|K] n-terminal</strong>
				
				<li><strong>Alpha-lytic protease [TASV|-]</strong>
				<br><a target="new" href="http://www.sigmaaldrich.com/catalog/product/sigma/a6362?lang=en&region=US">Sigma Alpha-lytic protease</a> cleaves after T, A, S, and V residues. It generates peptides of similar average length as trypsin.
				
				<li><strong>PepsinA [FLYW|-]</strong>
				<br><a target="new" href="https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/pepsin/">Promega Pepsin</a>
				
				<li><strong>Staph protease [E|-]</strong>
				
				<li><strong>Clostripain [R|-]</strong>
				
				<li><strong>Elastase [GVLIAS|P]</strong>
				<br><a target="new" href="https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/elastase/">Promega Elastase</a>
				
				<li><strong>Protein endopeptidase [P|-]</strong>
				
				<li><strong>Thermolysin [-|LFVIAM]</strong>
				<br><a target="new" href="https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/thermolysin/">Promega Thermolysin</a>
				
				<li><strong>TEV Protease</strong> Cleaves protein fusions with the ENLYFQ(G/S) sequence
				<br><a target="new" href="https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/protev-plus/">Promega ProTEV Plus</a>
				
				<li><strong>Factor Xa Proteae</strong> preferentially cleaves after the arginine residue in the amino acid sequence Ile-Glu-Gly-Arg
				<br><a target="new" href="https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/factor-xa-protease/">Factor Xa Protease</a>
				
				<li><strong>IdeS Protease and IdeZ Protease</strong> IgG cleavage
				<br><a target="new" href="https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/ides-protease/">Promega IdeS Protease and IdeZ Protease</a>
				
				<li><strong>PNGaseF</strong> Cleaves N-linked oligosaccharides between innermost GlcNAc and asparagines from N-linked glycoproteins
				<br><a target="new" href="https://www.promega.com/products/mass-spectrometry/proteases-and-surfactants/pngase-f-2/">Promega PNGase F</a>
				
				<li><strong>Protease Profiler Kit</strong>
				<br><a target="new" href="http://www.sigmaaldrich.com/catalog/product/sigma/pp0500?lang=en&region=US&cm_sp=Insite-_-prodRecCold_xviews-_-prodRecCold10-5">Sigma Protease Profiler™ Kit</a> provides four proven alternative proteases in addition to Proteomics Grade Trypsin
				
				<li><strong><a target="new" href="http://www.sigmaaldrich.com/life-science/biochemicals/biochemical-products.html?TablePage=14573351">Sigma PProteolytic Enzymes</a> </strong>
				
				
					
				</ul>
				</p>
				
				<p><strong>Chemical cleavage</strong>
				<ul>
				<li>CNBr: Cyanogen bromide hydrolyzes peptide bonds at the C-terminus of methionine residues converting Met to Homoserine
				<li>BNPS-Skatole: BNPS-skatole [2-(2-nitrophenylsulfenyl)-3-methylindole] is a mild oxidant and brominating reagent that cleaves at the C-terminus of tryptophan
				<li>Formic Acid: Cleaves at the C-terminus of Asp
				<li>Hydroxylamine (NH2OH): Cleaves at the C-term. of Asn and at the N-term. of Gly 
				<li>Iodosobenzoic acid: Cleaves at the C-terminus of Trp
				<li>NTCB +Ni (2-nitro-5-thiocyanobenzoic acid ): Cleaves at the N-terminus of Cys
				</ul>
				</p>
				
				
				
				<p><strong>Isotopic labeling</strong>
				<br>There are various chemical labeling strategies for concurrent peptide identification and multiplexed proteomics quantitation by mass spectrometry. 
				Most quantitative proteomics reagents incorporate stable isotopes into the isobaric tag portion of the reagents and are used to label at the protein or peptide level. 
				Check out their protocols, most start with the digestion followed by labeling:
				<br>
				<br>
				
				<ul>
				<li>Isotopic Labeling Overview <a target="new" href="/protocols03/isotopic_labeling.php">UWPR page</a>
				<br><br>
				<li>Sigma iTRAQ (Isobaric tags for Relative and Absolute Quantification)
				<a target="new" href="http://www.sigmaaldrich.com/life-science/molecular-biology/molecular-biology-products.html?TablePage=112006408">page</a>
				<br>Amine-reactive, 8-plex reagents
				<br><br>
				<li>ThermoPierce TMT Overview (Tandem Mass Tag) Reagents <a target="new" href="http://www.piercenet.com/cat/tandem-mass-tag-reagents">page</a>
				<br>Amine-reactive, 6-plex Tandem Mass Tag Reagents <a target="new" href="http://www.piercenet.com/product/amine-reactive-6-plex-tandem-mass-tag-reagents">page</a>
				<br>Amine-reactive, 10-plex Tandem Mass Tag Reagents <a target="new" href="http://www.piercenet.com/product/amine-reactive-10-plex-tandem-mass-tag-reagents">page</a>
				<br>Cysteine-Reactive, 6-plex Tandem Mass Tag Reagents <a target="new" href="http://www.piercenet.com/product/cysteine-reactive-tandem-mass-tag-reagents">page</a>
				<br>Carbonyl-reactive, 6-plex aminoxyTMT Reagents <a target="new" href="http://www.piercenet.com/product/carbonyl-reactive-6-plex-tandem-mass-tag-reagents">page</a>
				<br><br>
				<li>Planet Orbitrap TMT Overview (Tandem Mass Tag) Reagents <a target="new" href="http://planetorbitrap.com/tmt#.VGpsdPnF9hE">page</a>
				</ul>
                </p>
				
				<p><strong>List of peptide cleanup protocols for LC-MS</strong></p>
				
				<p>
				<ul>
				<li><a target="new" href="https://www.nestgrp.com/pdf/Ap2/minispinRPC.pdf">Nestgroup Desalting C18 RP MicroSpin column protocol (pdf)</a>
				<br>These <a target="new" href="/docs/protocols03/Nestgroup_minispinRPC.pdf">spin columns (pdf)</a> will retain non-polar solutes such as peptides (C18) , proteins (C4), and detergents. Salts, and polar solutes like DNA will not be retained
				<br>SUM SS18V 2-100 &mu;l or 3-30 &mu;g
				<br>SEM SS18V 5-200 &mu;l or 5-60 &mu;g
				<br>SMM SS18V 50-450 &mu;l or 30-300 &mu;g
				<br>
				<br>
				<li><a target="new" href="https://www.nestgrp.com/pdf/Ap2/minispinRP_sm.pdf">Nestgroup Desalting C18 RP MicroSpin (Targa) column protocol (pdf)</a>				
				<br>These <a target="new" href="/docs/protocols03/Nestgroup_minispinRP_sm.pdf">spin columns (pdf)</a> of water wettable TARGA C18 will retain polar & non-polar solutes such as carbohydrates, nucleotides, polar peptides as well as metabolites 
				and pharmaceutical compounds. Salts will not be retained. This permits the removal of salt from samples prior to mass spectrometry
				<br>SUM SS18R 2-25 &mu;l or 3-30 &mu;g
				<br>SEM SS18R 5-50 &mu;l or 6-60 &mu;g
				<br>SMM SS18R 50-150 &mu;l or 30-300 &mu;g
				<br>
				<br>				
				<li><a target="new" href="http://www.waters.com/waters/partDetail.htm?partNumber=WAT054955&locale=113">Waters Sep-Pak (WAT054955)</a> for peptide desalting
				<br>Sep-Pak C18 Vac cartridges contain a hydrophobic, reverse-phase, silica-based bonded phase that is used to adsorb analytes of even weak hydrophobicity from aqueous solutions.
				<br>
				<br>
				<li><a target="new" href="/docs/protocols03/Thermo_TechTip19_Detergent_Removal.pdf">ThermoTechTip19 for detergent removal</a>
				<br>
				<br>
				<li><a target="new" href="/docs/protocols03/ThermoPierce_DetergentRemoval.pdf">ThermoPierce Detergent Removal for low-concentration samples (pdf)</a>
				<br>
				<br>
				<li><a target="new" href="/docs/protocols03/ThermoPierce_DetergentRemoval_highConc.pdf">ThermoPierce Detergent Removal best for processing samples with proteins or peptides at greater than 100&mu;g&#8725;mL (pdf)</a>
				<br>
				<br>
				<li><a target="new" href="https://www.nestgrp.com/pdf/Ap2/minispinHILIC.pdf">Nestgroup Hydrophilic Interaction and Detergent Removal (pdf)</a>
				<br>HILIC <a target="new" href="/docs/protocols03/Nestgroup_minispinHILIC.pdf">spin columns (pdf)</a> will retain polar solutes such as peptides, proteins, and polar metabolites. Salts, 
				detergents, and non polar solutes will not be retained. This permits the removal of nonvolatile components from samples prior to mass spectrometry
				<br>SUM HIL 2-25 &mu;l or 3-30 &mu;g
				<br>SEM HIL 5-50 &mu;l or 6-60 &mu;g
				<br>SMM HIL 50-150 &mu;l or 30-300 &mu;g
				<br>
				<br>
				<li><a target="new" href="https://www.nestgrp.com/pdf/Ap2/minispinSCX.pdf">Nestgroup Strong Cation Exchange: post iTRAQ clean-up (pdf)</a>
				<br>These <a target="new" href="/docs/protocols03/Nestgroup_minispinSCX.pdf">spin columns (pdf)</a> will retain cationic solutes such as peptides, protein digests, or simple organic amines. Desalt samples prior to mass spectrometry.
				<br>SUM HIL-SCX 2-25 &mu;l or 5-50 &mu;g
				<br>SEM HIL-SCX 5-50 &mu;l or 10-100 &mu;g
				<br>SMM HIL-SCX 50-150 &mu;l or 50-500 &mu;g
				</p>
				
				
</div>
</div>

<?php  include("../__footer.php"); ?>
