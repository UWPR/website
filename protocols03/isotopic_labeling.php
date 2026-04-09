<?php  include("../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <div class="row">
                  
                     <!-- Content -->
                     <div id="content" class="8u skel-cell-important">
                        <section>
                           <header class="major">
                              <h1>Stable Isotope Labeling Strategies</h1>
                              <span class="byline">Protein Quantitation using Mass Spectrometry</span>
                           </header>
                           
						   <p>With stable isotope labeling, one sample is derivatized with a “light” version of a chemical tag while another sample is labeled with a version of the same tag that incorporates a “heavy” isotope. 
			The samples are then mixed together and analyzed in the same experiment. Identical compounds from the different samples co-elute as pairs of peaks and can be distinguished by the mass difference 
			between the heavy and light isotope labels. Quantitation is performed on the pairs of peaks in the MS data and identification is performed using the MS/MS fragment data. This technique eliminates 
			much of the bias that can be introduced when comparing peaks between different experiments since the data from all samples are collected within the same experiment.
			<br>Isotope coded affinity tags ICAT and Stable Isotope Labeling by Amino Acids in Cell Culture, or SILAC,  are technologies that provide a mass difference in the molecular weights of differentially 
			labeled peptides, which increases the complexity in the MS space and limits to comparing only 2 or 3 sample types.
			<br>Tandem Mass Tags (TMT and iTRAQ) are isobaric multiplexing tags. All versions of each tag have the same molecular mass but the positions of heavy and light isotopes are adjusted in order to affect the mass of a 
			“reporter ion” region and “balance mass” region within the compound. Since all versions of the reagent tag are identical in molecular weight, the same peptides originating from different samples will have the same mass in MS space 
			regardless of which reporter ion is attached. Upon fragmentation, the reporter ion can be clearly distinguished, and the identity of the peptide determined from the sequence of the larger MS/MS peptide fragments, and the quantity 
			of that peptide from each biological sample determined from the areas of each respective reporter ion peak.
			</p>
			
			<h2 id="tmt">TMT, Tandem Mass Tag</h2>
			<br>
			<br>There are multiple different kits available (2-plex, 6-plex, 10-plex, 16-plex and 18-plex), including bulk, so you can adjust your order to your specific experimental needs. 
			<br>
			<br><a target="new" href="https://www.thermofisher.com/us/en/home/industrial/mass-spectrometry/proteomics-mass-spectrometry/quantitative-proteomics-mass-spectrometry/tmt-quantitation.html">TMT Quantitation Overview</a>
			<br><a target="new" href="https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/protein-quantitation-mass-spectrometry/tandem-mass-tag-systems.html">TMT kits from Thermo</a>
			<br>use in combination with 
			<br><a target="new" href="https://www.thermofisher.com/order/catalog/product/A45733">EasyPep&trade; MS Sample Prep Kits</a>
			<br>OR
			<br><a target="new" href="https://www.preomics.com/products/ist-nhs">PreOmics iST-NHS Kit, a fast, reliable, reproducible sample preparation for chemical labeling (iTRAQ and TMT) </a>
			
			
			<br>
			<br><a target="new" href="https://youtu.be/zPhknUaBQrc">TMT Webinar Steven Gygi HUPO 2020</a>
			
			<br>
			
			
			<br><br><strong>Procedure summary for MS experiments with TMT Isobaric Mass Tagging Reagents</strong>
			<br><br>Protein extracts isolated from cells or tissues are reduced, alkylated and digested. Samples are labeled with the TMT Reagents and then mixed before sample fractionation and clean up. 
			Labeled samples are analyzed by high resolution Orbitrap LC-MS/MS before data analysis to identify peptides and quantify reporter ion relative abundance.
			<br>
			<br>
			<div style="background-image: url('/images/TMT_02.png'); height: 594px; width: 870px;"></div>
			<br>
			<br>
			<strong>Structural design of the TMT 6-plex and 10-plex (Tandem Mass Tag) Reagents</strong>
			<br>TMT reagents consist of three functional regions: the mass reporter, the mass normalizer and the reactive group.
			 MS/MS fragmentation sites by higher energy collision dissociation (HCD) and electron transfer dissociation (ETD) are located between the  mass reporter and mass normalizer. 
			 TMT reagents are labeled with 13C and 15N heavy isotopes at varying positions. The total number of isotopes is constant for all the reagents, but the distribution between the reporter and normalizer groups are different. 
			 <br>There are also different reactive groups available, amine reactive groups to label primary amines as in the N-terminus and Lys side chains, sulfhydryl reactive group to label Cys side chains and carbonyl reactive groups 
			 to label carbonyl containing molecules like carbohydrates, steroids etc. 
			<br>
			<br>
			<div style="background-image: url('/images/TMT_03.png'); height: 529px; width: 858px;"></div>
			
			<br>The table below shows the different masses added to the peptide for each of the TMT labels as well as the reporter ion masses.
			<br>
			<br>
			<table border="0" cellpadding="4" style="background-color:#EBEBF5">
		
		<thead><tr><th align="left" style="background-color:#7171A4; color:#FFFFFF;" >Tandem Mass Tag (TMT) Reagents</th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >Mono Mod Mass</th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >Avg Mod Mass</th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >HCD Reporter    Mono m/z</th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >ETD Reporter Mono m/z</th></tr></thead>
	<tbody>
		
		<tr>
			<td align="left" style="background-color:#D6D6EB"><strong>Amine Reactive TMT</strong></td><td align="center" style="background-color:#D6D6EB"></td><td align="center" style="background-color:#D6D6EB"></td><td align="center" style="background-color:#D6D6EB"></td><td align="center" style="background-color:#D6D6EB"></td>
		</tr>
		<tr>
			<td align="left">TMT<sup>0</sup> - 126</td><td align="center">224.152478</td><td align="center">224.2994</td><td align="center">126.127726</td><td align="center">114.127725</td>
		</tr>
		<tr>
			<td align="left">TMT<sup>2</sup> - 126</td><td align="center">225.155833</td><td align="center">225.2921</td><td align="center">126.127726</td><td align="center">114.127725</td>
		</tr>
		<tr>
			<td align="left">TMT<sup>2</sup> - 127 C</td><td align="center">225.155833</td><td align="center">225.2921</td><td align="center">127.131081</td><td align="center">114.127725</td>
		</tr>
		<tr>
			<td align="left">TMT<sup>6/10</sup> - 126</td><td align="center">229.162932</td><td align="center">229.2634</td><td align="center">126.127726</td><td align="center">114.127725</td>
		</tr>
		<tr>
			<td align="left">TMT<sup>6/10</sup> - 127 N</td><td align="center">229.162932</td><td align="center">229.2634</td><td align="center">127.124761 </td><td align="center">115.124760</td>
		</tr>
		<tr>
			<td align="left">TMT<sup>10</sup> - 127 C</td><td align="center">229.162932</td><td align="center">229.2634</td><td align="center">127.131081 </td><td align="center">114.127725</td>
		</tr>
		<tr>
			<td align="left">TMT<sup>10</sup> - 128 N</td><td align="center">229.162932</td><td align="center">229.2634</td><td align="center">128.128116</td><td align="center">115.124760</td>
		</tr>
		<tr>
			<td align="left">TMT<sup>6/10</sup> - 128 C</td><td align="center">229.162932</td><td align="center">229.2634</td><td align="center">128.134436 </td><td align="center">116.134433</td>
		</tr>
		<tr>
			<td align="left">TMT<sup>6/10</sup> - 129 N</td><td align="center">229.162932</td><td align="center">229.2634</td><td align="center">129.131471</td><td align="center">117.131468</td>
		</tr>
		<tr>
			<td align="left">TMT<sup>10</sup> - 129 C</td><td align="center">229.162932</td><td align="center">229.2634</td><td align="center">129.137790</td><td align="center">116.134433</td>
		</tr>
		<tr>
			<td align="left">TMT<sup>10</sup> - 130 N</td><td align="center">229.162932</td><td align="center">229.2634</td><td align="center">130.134825</td><td align="center">117.131468</td>
		</tr>
		<tr>
			<td align="left">TMT<sup>6/10</sup> - 130 C</td><td align="center">229.162932</td><td align="center">229.2634</td><td align="center">130.141145</td><td align="center">118.141141</td>
		</tr>
		<tr>
			<td align="left">TMT<sup>6/10</sup> - 131</td><td align="center">229.162932</td><td align="center">229.2634</td><td align="center">131.138180 </td><td align="center">119.138176</td>
		</tr>
		<tr>
			<td align="left">TMT<sup>11</sup> - 131 C</td><td align="center">229.169252</td><td align="center">229.2634</td><td align="center">131.144499 </td><td align="center">118.141141</td>
		</tr>
		
		
		<tr>
			<td align="left" style="background-color:#D6D6EB"><strong>Cystein Reactive TMT</strong></td><td align="center" style="background-color:#D6D6EB"></td><td align="center" style="background-color:#D6D6EB"></td><td align="center" style="background-color:#D6D6EB"></td><td align="center" style="background-color:#D6D6EB"></td>
		</tr>
		<tr>
			<td align="left">iodoTMT<sup>0</sup> - 126</td><td align="center">324.216141</td><td align="center">324.4185</td><td align="center">126.127725</td><td align="center">114.127725</td>
		</tr>
		<tr>
			<td align="left">iodoTMT<sup>6</sup> - 126</td><td align="center">329.226595</td><td align="center">329.3825</td><td align="center">126.127725</td><td align="center">114.127725</td>
		</tr>
		<tr>
			<td align="left">iodoTMT<sup>6</sup> - 127 N</td><td align="center">329.226595</td><td align="center">329.3825</td><td align="center">127.124760</td><td align="center">115.124760</td>
		</tr>
		<tr>
			<td align="left">iodoTMT<sup>6</sup> - 128 C</td><td align="center">329.226595</td><td align="center">329.3825</td><td align="center">128.134433</td><td align="center">116.134433</td>
		</tr>
		<tr>
			<td align="left">iodoTMT<sup>6</sup> - 129 N</td><td align="center">329.226595</td><td align="center">329.3825</td><td align="center">129.131468</td><td align="center">117.131468</td>
		</tr>
		<tr>
			<td align="left">iodoTMT<sup>6</sup> - 130 C</td><td align="center">329.226595</td><td align="center">329.3825</td><td align="center">130.141141</td><td align="center">118.141141</td>
		</tr>
		<tr>
			<td align="left">iodoTMT<sup>6</sup> - 131</td><td align="center">329.226595</td><td align="center">329.3825</td><td align="center">131.138176</td><td align="center">119.138176</td>
		</tr>
		<tr>
			<td align="left" style="background-color:#D6D6EB"><strong>Carbonyl Reactive TMT</strong></td><td align="center" style="background-color:#D6D6EB"></td><td align="center" style="background-color:#D6D6EB"></td><td align="center" style="background-color:#D6D6EB"></td><td align="center" style="background-color:#D6D6EB"></td>
		</tr>
		<tr>
			<td align="left">aminoxyTMT<sup>0</sup> - 126</td><td align="center">296.2212</td><td align="center">296.4084</td><td align="center">126.1277</td><td align="center">114.1277</td>
		</tr>
		<tr>
			<td align="left">aminoxyTMT<sup>6</sup> - 126</td><td align="center">301.2317</td><td align="center">301.3724</td><td align="center">126.1277</td><td align="center">114.1277</td>
		</tr>
		<tr>
			<td align="left">aminoxyTMT<sup>6</sup> - 127 N</td><td align="center">301.2317</td><td align="center">301.3724</td><td align="center">127.1248</td><td align="center">115.1248</td>
		</tr>
		<tr>
			<td align="left">aminoxyTMT<sup>6</sup> - 128 C</td><td align="center">301.2317</td><td align="center">301.3724</td><td align="center">128.1344</td><td align="center">116.1344</td>
		</tr>
		<tr>
			<td align="left">aminoxyTMT<sup>6</sup> - 129 N</td><td align="center">301.2317</td><td align="center">301.3724</td><td align="center">129.1315 </td><td align="center">117.1315</td>
		</tr>
		<tr>
			<td align="left">aminoxyTMT<sup>6</sup> - 130 C</td><td align="center">301.2317</td><td align="center">301.3724</td><td align="center">130.1411 </td><td align="center">118.1411</td>
		</tr>
		<tr>
			<td align="left">aminoxyTMT<sup>6</sup> - 131</td><td align="center">301.2317</td><td align="center">301.3724</td><td align="center">131.1382</td><td align="center">119.1382</td>
		</tr>

</tbody>
</table>
		
			<br><a target="new" href="https://www.thermofisher.com/order/catalog/product/90061">TMT 6-plex kit</a>
			<br><a target="new" href="https://www.thermofisher.com/order/catalog/product/90110">TMT 10-plex kit</a>
			<br><a target="new" href="https://www.thermofisher.com/order/catalog/product/A34808">TMT 11-plex kit</a>
			<br><a target="new" href="https://www.thermofisher.com/order/catalog/product/90103">iodoTMT 6-plex kit</a>
			<br><a target="new" href="https://www.thermofisher.com/order/catalog/product/90402">aminoxyTMT 6-plex kit</a>
		<br>
			<br>
			<br>
		<strong>Structural design of the TMTpro 16-plex and 18-plex (Tandem Mass Tag) Reagents</strong>
			<br>TMT reagents consist of three functional regions: the mass reporter, the mass normalizer and the reactive group.
			 MS/MS fragmentation site by higher energy collision dissociation (HCD) is located between the  mass reporter and mass normalizer. 
			 TMT reagents are labeled with 13C and 15N heavy isotopes at varying positions. The total number of isotopes is constant for all the reagents, but the distribution between the reporter and normalizer groups are different. 


<br>
			<br>
			<div style="background-image: url('/images/TMT_04.png'); height: 525px; width: 803px;"></div>
			
			<br>The table below shows the different masses added to the peptide for each of the TMTpro labels as well as the reporter ion masses.
			<br>For TMTpro 18plex analysis, use the TMTpro 16plex monoisotopic modification mass (304.2071) for database searching.
			<br>
			<br>
			<table border="0" cellpadding="4" style="background-color:#EBEBF5">
		
		<thead><tr><th align="left" style="background-color:#7171A4; color:#FFFFFF;" >Tandem Mass Tag (TMT) Reagents</th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >Modification Mass <br> (mono)</th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >Modification Mass <br> (avg)</th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >HCD Reporter m/z <br> (mono) </th>
	<tbody>
		
		<tr>
			<td align="left" style="background-color:#D6D6EB"><strong>Amine Reactive TMTpro</strong></td><td align="center" style="background-color:#D6D6EB"></td><td align="center" style="background-color:#D6D6EB"></td><td align="center" style="background-color:#D6D6EB">
			
		</tr>
		
		</tr>
		<tr>
			<td align="left">TMTpro-zero - 126</td><td align="center">295.189592</td><td align="center">295.3773</td><td align="center">126.127726 </td>
		</tr>
		<tr>
			<td align="left">TMTpro-16/18plex - 126</td><td align="center">304.207146</td><td align="center">304.3127</td><td align="center">126.127726 </td>
		</tr>
		<tr>
			<td align="left">TMTpro-16/18plex - 127 N</td><td align="center">304.207146</td><td align="center">304.3127</td><td align="center">127.124761 </td>
		</tr>
		<tr>
			<td align="left">TMTpro-16/18plex - 127 C</td><td align="center">304.207146</td><td align="center">304.3127</td><td align="center">127.131081 </td>
		</tr>
		<tr>
			<td align="left">TMTpro-16/18plex - 128 N</td><td align="center">304.207146</td><td align="center">304.3127</td><td align="center">128.128116 </td>
		</tr>
		<tr>
			<td align="left">TMTpro-16/18plex - 128 C</td><td align="center">304.207146</td><td align="center">304.3127</td><td align="center">128.134436 </td>
		</tr>
		<tr>
			<td align="left">TMTpro-16/18plex - 129 N</td><td align="center">304.207146</td><td align="center">304.3127</td><td align="center">129.131471 </td>
		</tr>
		<tr>
			<td align="left">TMTpro-16/18plex - 129 C</td><td align="center">304.207146</td><td align="center">304.3127</td><td align="center">129.13779 </td>
		</tr>
		<tr>
			<td align="left">TMTpro-16/18plex - 130 N</td><td align="center">304.207146</td><td align="center">304.3127</td><td align="center">130.134825 </td>
		</tr>
		<tr>
			<td align="left">TMTpro-16/18plex - 130 C</td><td align="center">304.207146</td><td align="center">304.3127</td><td align="center">130.141145 </td>
		</tr>
		<tr>
			<td align="left">TMTpro-16/18plex - 131 N</td><td align="center">304.207146</td><td align="center">304.3127</td><td align="center">131.13818 </td>
		</tr>
		<tr>
			<td align="left">TMTpro-16/18plex - 131 C</td><td align="center">304.207146</td><td align="center">304.3127</td><td align="center">131.1445 </td>
		</tr>
		<tr>
			<td align="left">TMTpro-16/18plex - 132 N</td><td align="center">304.207146</td><td align="center">304.3127</td><td align="center">132.141535 </td>
		</tr>
		<tr>
			<td align="left">TMTpro-16/18plex - 132 C</td><td align="center">304.207146</td><td align="center">304.3127</td><td align="center">132.147855 </td>
		</tr>
		<tr>
			<td align="left">TMTpro-16/18plex - 133 N</td><td align="center">304.207146</td><td align="center">304.3127</td><td align="center">133.14489 </td>
		</tr>
		<tr>
			<td align="left">TMTpro-16/18plex - 133 C</td><td align="center">304.207146</td><td align="center">304.3127</td><td align="center">133.15121 </td>
		</tr>
		<tr>
			<td align="left">TMTpro-16/18plex - 134 N</td><td align="center">304.207146</td><td align="center">304.3127</td><td align="center">134.148245 </td>
		</tr>
		<tr>
			<td align="left">TMTpro-18plex - 134 C</td><td align="center">304.207146</td><td align="center">304.3127</td><td align="center">134.154565 </td>
		</tr>
		<tr>
			<td align="left">TMTpro-18plex - 135 N</td><td align="center">304.207146</td><td align="center">304.3127</td><td align="center">135.151600 </td>
		</tr>
		<tr>
			<td align="left">TMTpro - sh</td><td align="center">313.231019</td><td align="center">313.2473</td><td align="center">135.151600 </td>
		</tr>

</tbody>
</table>

			<br><a target="new" href="https://www.thermofisher.com/order/catalog/product/A44520">TMTpro 16-plex kit</a>
			<br><a target="new" href="https://www.thermofisher.com/order/catalog/product/A52045">TMTpro 18-plex kit</a>
			<br><a target="new" href="https://www.thermofisher.com/order/catalog/product/A52046">TMTpro-134C and TMTpro-135N Label Reagents</a>

		<br><br><br>
		<p><strong>Unimod links</strong>
                <ul>
				<li>UNIMOD TMT 2-plex <a target="new" href="http://www.unimod.org/modifications_view.php?editid1=738">link</a></li>
				<li>UNIMOD TMT 6-plex <a target="new" href="http://www.unimod.org/modifications_view.php?editid1=737">link</a></li>
				
				<li>UNIMOD cysTMT 6-plex <a target="new" href="http://www.unimod.org/modifications_view.php?editid1=985">link</a></li>
				<li>UNIMOD iodoTMT 6-plex <a target="new" href="http://www.unimod.org/modifications_view.php?editid1=1342">link</a></li>
				<li>UNIMOD TMTpro_zero <a target="new" href="http://www.unimod.org/modifications_view.php?editid1=2017">link</a></li>
                <li>UNIMOD TMTpro 16-plex <a target="new" href="http://www.unimod.org/modifications_view.php?editid1=2016">link</a></li>
				<li>UNIMOD TMTpro 18-plex <a target="new" href="http://www.unimod.org/modifications_view.php?editid1=2016">link</a></li>
				<li>UNIMOD TMTpro super heavy <a target="new" href="http://www.unimod.org/modifications_view.php?editid1=2050">link</a></li>
                </ul>
                </p>


				
		<h2 id="itraq">iTRAQ</h2>
			<br><br>
			<p>There are multiple different kits available, including bulk etc. shop around. The iTRAQ 4-plex kits are simply called iTRAQ without the designation as to 4-plex or 8-plex, as the original kits were all 4-plex so they didn’t need to differentiate. With the inception of 8-plex they had to add the “8-plex” terminology to the kits.
			<br>
			<br>iTRAQ 4-plex <a target="new" href="https://www.sigmaaldrich.com/catalog/product/sigma/4352135?lang=en&region=US">4352135</a> from Sigma,  
			<br>iTRAQ 8-plex <a target="new" href="https://www.sigmaaldrich.com/catalog/product/sigma/4381662?lang=en&region=US">4381662</a> from Sigma, 
			<br><a target="new" href="https://www.sigmaaldrich.com/US/en/search/itraq?focus=products&page=1&perPage=30&sort=relevance&term=iTRAQ&type=product">iTRAQ Reagents from Sigma</a> 
			<br><a target="new" href="https://sciex.com/br/products/consumables/itraq-reagent">iTRAQ Reagents from Sciex</a> 
			
			</p>
			
			<div style="background-image: url('/images/iTRAQ_01.png'); height: 388px; width: 858px;"></div>
			
		    <p>What is   <a target="new" href="https://sciex.com/community/support-community/faqs-and-discussions/standards-and-reagents/itraq/what-is-the-mass-added-to-the-peptide-for-itraq-4plex-and-8plex"> 
			the mass added to the peptide for iTRAQ 4plex and 8plex?</a> from the FAQ's at the Sciex site.
			<br>The table below list the masses added to the peptides per amine (N-term and Lys residues) as well as the reporter fragment m/z seen by MSMS analysis.
			</p>
			
	<table border="0" cellpadding="4" style="background-color:#EBEBF5">
		
		<thead><tr><th align="left" style="background-color:#7171A4; color:#FFFFFF;" >8-plex iTRAQ reagents</th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >113</th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >114</th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >115</th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >116</th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >117</th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >118</th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >119</th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >121</th></tr></thead>
	<tbody>
		
		<tr>
			<td align="left">Accurate mass added to peptide</td><td align="left">304.20536</td><td align="left">304.20536</td><td align="left">304.19904</td><td align="left">304.20536</td><td align="left">304.20536</td><td align="left">304.19904</td><td align="left">304.19904</td><td align="left">304.19904</td>
		</tr>
		<tr>
			<td align="left">Average mass added to peptide</td><td align="left">304.3074</td><td align="left">304.3074</td><td align="left">304.3081</td><td align="left">304.3074</td><td align="left">304.3074</td><td align="left">304.3081</td><td align="left">304.3081</td><td align="left">304.3081</td>
		</tr>
		<tr>
			<td align="left">Monoisotopic MH+ of the reporter </td><td align="left">113.1078</td><td align="left">114.1112</td><td align="left">115.1082</td><td align="left">116.1116</td><td align="left">117.1149</td><td align="left">118.1120</td><td align="left">119.1153</td><td align="left">121.1220</td>
		</tr>
		
		<thead><tr><th align="left" style="background-color:#7171A4; color:#FFFFFF;" >4-plex iTRAQ reagents</th><th align="left" style="background-color:#7171A4; color:#FFFFFF;" ></th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >114</th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >115</th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >116</th><th align="center" style="background-color:#7171A4; color:#FFFFFF;" >117</th><th align="left" style="background-color:#7171A4; color:#FFFFFF;" ></th><th align="left" style="background-color:#7171A4; color:#FFFFFF;" ></th><th align="left" style="background-color:#7171A4; color:#FFFFFF;" ></th></tr></thead>
		
		
		<tr>
			<td align="left">Accurate mass added to peptide</td><td align="left"> </td><td align="left">144.105918</td><td align="left">144.099599</td><td align="left">144.102063</td><td align="left">144.102063</td><td align="left"> </td><td align="left"> </td><td align="left"> </td>
		</tr>
		<tr>
			<td align="left">Average mass added to peptide</td><td align="left"> </td><td align="left">144.1680</td><td align="left">144.1688</td><td align="left">144.1544</td><td align="left">144.1544</td><td align="left"> </td><td align="left"> </td><td align="left"> </td>
		</tr>
		<tr>
			<td align="left">Monoisotopic MH+ of the reporter</td><td align="left"> </td><td align="left">114.1112</td><td align="left">115.1083</td><td align="left">116.1116</td><td align="left">117.1150</td><td align="left"> </td><td align="left"> </td><td align="left"> </td>
		</tr>

</tbody>
</table>
</p>
			

		<p><strong>Unimod links</strong>
                <ul>
				<li>UNIMOD iTRAQ 8-plex 113, 114, 116, 117 <a target="new" href="http://www.unimod.org/modifications_view.php?editid1=730">link</a>
				<li>UNIMOD iTRAQ 8-plex 115, 118, 119, 121 <a target="new" href="http://www.unimod.org/modifications_view.php?editid1=731">link</a>
                <li>UNIMOD iTRAQ 4-plex 114 <a target="new" href="http://www.unimod.org/modifications_view.php?editid1=532">link</a>
				<li>UNIMOD iTRAQ 4-plex 115 <a target="new" href="http://www.unimod.org/modifications_view.php?editid1=533">link</a>
				<li>UNIMOD iTRAQ 4-plex 116, 117 <a target="new" href="http://www.unimod.org/modifications_view.php?editid1=214">link</a>
				</ul>
                </p>
				
				
        <h2 id="silac">SILAC Metabolic Labeling Systems</h2>
			<br>
			<br>Stable isotope labeling using amino acids in cell culture (SILAC) is a powerful method to identify and quantify relative differential changes in complex protein samples. 
			The SILAC method uses in vivo metabolic incorporation of “heavy” 13C- or 15N-labeled amino acids into proteins followed by mass spectrometry (MS) analysis for accelerated 
			comprehensive identification, characterization and quantitation of proteins. NeuCode amino acids enable up to four samples to be multiplexed simultaneously.
			<br><br>
			<br>
				<br>Experimental information:
				<br><br>
				<ul>
			<li> Pino et al combined SILAC with DIA quantification workflows, see <a target="new" href="https://pubmed.ncbi.nlm.nih.gov/31008411/">Ref 7</a></li>
			
			<li>Protocols from ShaoEn Ong and Matthias Mann 
			<a target="new" href="https://www.researchgate.net/publication/6414471_A_practical_recipe_for_stable_isotope_labeling_by_amino_acids_in_cell_culture_SILAC">A practical recipe for stable isotope labeling by amino acids in cell culture (SILAC)</a> Ref 8
			</ul>
			
			<p>There are multiple different kits from different vendors available:
			<br>
			<br> <a target="new" href="https://www.thermofisher.com/us/en/home/life-science/protein-biology/protein-mass-spectrometry-analysis/protein-quantitation-mass-spectrometry/silac-metabolic-labeling-systems.html">SILAC systems</a> from Thermo  
			<br> <a target="new" href="https://www.sigmaaldrich.com/US/en/search/silac?focus=products&page=1&perPage=30&sort=relevance&term=SILAC&type=product">search SILAC to find related products</a> from Sigma
			<br> <a target="new" href="http://shop.isotope.com/category.aspx?id=10032092">SILAC Kits and Reagents</a> from Cambridge Isotope Laboratories 
			<br>there are likely other I missed, so do your homework..  
			</p>
			
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
			
			
			
			
		<h2 id="aqua">AQUA or Absolute QUAntitation</h2>
			<br>
			<br>Absolute QUAntitation (AQUA) in targeted proteomics analyses is performed by spiking complex samples with stable isotope-labeled synthetic peptides that act as internal standards for specific peptides.
			<br>These heavy peptides are designed to be identical to tryptic peptides generated by sample digestion, so that they co-elute with the target peptide and are concomitantly analyzed by MS/MS
			<br>But AQUA-grade peptides are costly because of their high quality and purity. 
			<br><br>
			<p>There are multiple vendors that provide AQUA peptides:
			<br>
			<br> <a target="new" href="https://www.elimbio.com/services/peptide-synthesis/">Peptide Synthesis</a> Elim Biopharm
			<br> <a target="new" href="https://www.sigmaaldrich.com/life-science/molecular-biology/molecular-biology-products.html?TablePage=21185103">AQUA peptides</a> from Sigma
			<br> <a target="new" href="https://www.thermofisher.com/us/en/home/life-science/protein-biology/peptides-proteins/custom-peptide-synthesis-services/peptides-targeted-quantitation.html">Peptides for Targeted Quantitation</a> from Thermo
			<br> <a target="new" href="https://www.isotope.com/applications/subsubapplication.cfm?ssid=PeptiQuant%E2%84%A2_6">PeptiQuant Assay Kits</a> from Cambridge Isotope Laboratories 
			<br>there are likely other I missed, so do your homework.. 
			</p>
			<p><strong>Data analysis</strong>
			<br>You can use <a target="new" href="https://skyline.ms/project/home/software/Skyline/begin.view">Skyline</a> to estimate the absolute molecular quantities of peptides in your experiments.
			<br><a target="new" href="https://skyline.ms/wiki/home/software/Skyline/page.view?name=tutorial_absolute_quant">Absolute Quantification Tutorial</a>
			<br><a target="new" href="https://skyline.ms/project/home/software/Skyline/events/2016%20Webinars/Webinar%2013/begin.view?">Webinar #13: Calibrated Quantification with Skyline</a>
			</p>
			
		<h2 id="labeledprotein">Heavy labeled protein standards</h2>
			<br>
			<br>Spiking heavy labeled ApoA-I as internal standard has been shown to be useful for accurate quantitation of this protein and/or other proteins relative to ApoA-I in a biological sample in a bottom-up proteomic workflow.
			<br><br>
			<p>There are multiple vendors that provide heavy labeled proteins:
			<br>
			
			<br> <a target="new" href="http://shop.isotope.com/category.aspx?id=10032905">Heavy-Labeled MS Proteins Standards</a> from Cambridge Isotope Laboratories 
			<br> <a target="new" href="https://www.sigmaaldrich.com/life-science/biochemicals/biochemical-products.html?TablePage=120049669">SILu Prot Protein Standards for Quantitative Mass Spectrometry</a> from Sigma
			<br> <a target="new" href="https://www.thermofisher.com/order/catalog/product/88331?SID=srch-srp-88331">1-Step Heavy Protein IVT Kit</a> from Thermo
			<br>there are likely other I missed, so do your homework.. 
			</p>
			
		<h2 id="chemicallabeling">Chemical labeling</h2>
			<br>
			<br>Chemical stable isotope labeling is advantageous in that it uses inexpensive reagents and is applicable to virtually any sample.
			<br><br>
			
			
			<p><h2 id="references">References</h2>
			
                <ol>
				
				
				
				<br><strong>TMT labeling of small amounts of peptides</strong>
				<li>TMT Labeling for the Masses: A Robust and Cost-efficient, In-solution Labeling Approach
                Zecha J, Satpathy S, Kanashova T, Avanessian SC, Kane MH, Clauser KR, Mertins P, Carr SA, Kuster B.
                <i>Mol Cell Proteomics.</i> 2019 Jul;18(7):1468-1478. doi: 10.1074/mcp.TIR119.001385. Epub 2019 Apr 9.
                <a target="new" href="https://pubmed.ncbi.nlm.nih.gov/30967486/">link</a></li>
				<li>Sample Preparation for Relative Quantitation of Proteins Using Tandem Mass Tags (TMT) and Mass Spectrometry (MS)
                Erdjument-Bromage H, Huang FK, Neubert TA.
                <i>Methods Mol Biol.</i> 2018;1741:135-149. doi: 10.1007/978-1-4939-7659-1_11.
                <a target="new" href="https://pubmed.ncbi.nlm.nih.gov/29392697/">link</a></li>
				<li>Streamlined Protocol for Deep Proteomic Profiling of FAC-sorted Cells and Its Application to Freshly Isolated Murine Immune Cells
                Myers SA, Rhoads A, Cocco AR, Peckner R, Haber AL, Schweitzer LD, Krug K, Mani DR, Clauser KR, Rozenblatt-Rosen O, Hacohen N, Regev A, Carr SA.
                <i>Mol Cell Proteomics.</i> 2019 May;18(5):995-1009. doi: 10.1074/mcp.RA118.001259. Epub 2019 Feb 21.
                <a target="new" href="https://pubmed.ncbi.nlm.nih.gov/30792265/">link</a></li>
				
				
				
				<br><strong>TMTpro</strong>
				<li>TMTpro Reagents: A Set of Isobaric Labeling Mass Tags Enables Simultaneous Proteome-Wide Measurements Across 16 Samples
                Li J, Van Vranken JG, Pontano Vaites L, Schweppe DK, Huttlin EL, Etienne C, Nandhikonda P, Viner R, Robitaille AM, Thompson AH, Kuhn K, Pike I, Bomgarden RD, Rogers JC, Gygi SP, Paulo JA.
                <i>Nat Methods.</i> 2020 Apr;17(4):399-404. doi: 10.1038/s41592-020-0781-4. Epub 2020 Mar 16.
                <a target="new" href="https://pubmed.ncbi.nlm.nih.gov/32203386/">link</a></li>
				
				<li>TMTpro: Design, Synthesis, and Initial Evaluation of a Proline-Based Isobaric 16-Plex Tandem Mass Tag Reagent Set
                Thompson A, Wölmer N, Koncarevic S, Selzer S, Böhm G, Legner H, Schmid P, Kienle S, Penning P, Höhle C, Berfelde A, Martinez-Pinna R, Farztdinov V, Jung S, Kuhn K, Pike I.
                <i>Nat Methods.</i> 2020 Apr;17(4):399-404. doi: 10.1038/s41592-020-0781-4. Epub 2020 Mar 16.
                <a target="new" href="https://pubmed.ncbi.nlm.nih.gov/31738517/">link</a></li>
				
				<li>A Triple Knockout Isobaric-Labeling Quality Control Platform With an Integrated Online Database Search
                Gygi JP, Ramin Rad, Navarrete-Perea J, Younesi S, Gygi SP, Paulo JA.
                <i>Nat Methods.</i> 2020 Apr;17(4):399-404. doi: 10.1038/s41592-020-0781-4. Epub 2020 Mar 16.
                <a target="new" href="https://pubmed.ncbi.nlm.nih.gov/32202424/">link</a></li>
				
				
				
				
				<br><strong>SILAC</strong>
				<li>Improved SILAC quantification with data independent acquisition to investigate bortezomib-induced protein degradation
					Pino LK, Baeza J, Lauman R, Schilling B, Garcia BA. 
					<i>J Proteome Res.</i> 2021 Apr 2;20(4):1918-1927. doi: 10.1021/acs.jproteome.0c00938. Epub 2021 Mar 25.
					<a target="new" href="https://www.ncbi.nlm.nih.gov/labs/pmc/articles/PMC8256668/">link</a></li>
				<li>Stable Isotope Labeling by Amino Acids in Cell Culture, SILAC, as a Simple and Accurate Approach to Expression Proteomics
                Ong SE, Blagoev B, Kratchmarova I, Kristensen DB, Steen H, Pandey A, Mann M.
                <i>Mol Cell Proteomics.</i> 2002 May;1(5):376-86. doi: 10.1074/mcp.m200025-mcp200.
                <a target="new" href="https://pubmed.ncbi.nlm.nih.gov/12118079/">link</a></li>
				
				<li>Comparing SILAC- and stable isotope dimethyl-labeling approaches for quantitative proteomics.
                Lau HT, Suh HW, Golkowski M, Ong SE.
                <i>J Proteome Res.</i> 2014 Sep 5;13(9):4164-74. doi: 10.1021/pr500630a. Epub 2014 Aug 12.
                <a target="new" href="https://pubmed.ncbi.nlm.nih.gov/25077673/">link</a></li>
				
				<li>An Overview of Advanced SILAC-Labeling Strategies for Quantitative Proteomics
                Terzi F, Cambridge S.
                <i>Methods Enzymol.</i> 2017;585:29-47. doi: 10.1016/bs.mie.2016.09.014. Epub 2017 Jan 12.
                <a target="new" href="https://pubmed.ncbi.nlm.nih.gov/28109435/">link</a></li>
				
				
				<br><strong>AQUA and Heavy labeled protein standards</strong>
				<br>
				<li>Multiple-Reaction Monitoring-Mass Spectrometric Assays Can Accurately Measure the Relative Protein Abundance in Complex Mixtures.
                Hoofnagle AN, Becker JO, Oda MN, Cavigiolio G, Mayer P, Vaisar T.
                <i>Clin Chem.</i> 2012 Apr;58(4):777-81. Epub 2012 Feb 3.
                <a target="new" href="http://www.ncbi.nlm.nih.gov/pubmed/22307200">link</a></li>
				
				<br><strong>Chemical labeling</strong>
				<br>
				<li>Multiplex Peptide Stable Isotope Dimethyl Labeling for Quantitative Proteomics
                Boersema PJ, Raijmakers R, Lemeer S, Mohammed S, Heck AJ.
                <i>Nat Protoc.</i> 2009;4(4):484-94. doi: 10.1038/nprot.2009.21.
                <a target="new" href="https://pubmed.ncbi.nlm.nih.gov/19300442/">link</a></li>
				
				<li>Triplex protein quantification based on stable isotope labeling by peptide dimethylation applied to cell and tissue lysates.
                Boersema PJ, Aye TT, van Veen TA, Heck AJ, Mohammed S.
                <i>Proteomics.</i> 2008 Nov;8(22):4624-32. doi: 10.1002/pmic.200800297.
                <a target="new" href="https://pubmed.ncbi.nlm.nih.gov/18850632/">link</a></li>
				
				<li>Differential Stable Isotope Labeling of Peptides for Quantitation and De Novo Sequence Derivation
                Goodlett DR, Keller A, Watts JD, Newitt R, Yi EC, Purvine S, Eng JK, von Haller P, Aebersold R, Kolker E.
                <i>Rapid Commun Mass Spectrom. </i> 2001;15(14):1214-21. doi: 10.1002/rcm.362.
                <a target="new" href="https://pubmed.ncbi.nlm.nih.gov/11445905/">link</a></li>
				
				
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
                           <div class="row half">
                              <section class="6u">
                                 <ul class="default">
                                    <li><a href="#tmt">TMT</a></li>
                                    <li><a href="#itraq">iTRAQ</a></li>
                                    <li><a href="#silac">SILAC</a></li>
                                    <li><a href="#aqua">AQUA</a></li>
                                    
                                 </ul>
                              </section>
                              <section class="6u">
                                 <ul class="default small">
									<li><a href="#labeledprotein">Heavy labeled protein standards</a></li>
									<li><a href="#chemicallabeling">Chemical labeling</a></li>
									<li><a href="#references">References</a></li>
                                    
                                 </ul>
                              </section>
                           </div>
                        </section>
                        
						
                     </div>
                     
                  </div>
               </div>
            <!-- /Page -->

   </div>

<?php  include("../__footer.php"); ?>
