<?php  include("../../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <section>
                     <header class="major">
                        <h1>Data Analysis Tools</h1>
                        <span class="byline">A primer on MS/MS analysis tools at UWPR.</i></font></span>
                     </header>

               <p>The two primary analysis performed at the UWPR are shotgun or bottom up proteomics
               and targeted quantitative proteomics.
               
               <p>For targeted proteomics, data is classically acquired on
               triple quadrupole instruments and typically analyzed using the
               <a href="https://brendanx-uw1.gs.washington.edu/labkey/project/home/software/Skyline/begin.view">Skyline</a>
               software suite.  There are extensive documentation, tutorials, and videos on the Skyline web site.
               The nice thing about Skyline is the develop is done here at the UW in the MacCoss lab in
               Genome Sciences (in the Foege building on South campus).

               <p>Shotgun analysis involves peptide identification via MS/MS database searching.
               Popular commercial tools are
               <a href="http://www.thermoscientific.com/en/product/proteome-discoverer-software.html">Thermo's Protein Discoverer</a>
               and <a href="https://www.proteomesoftware.com/">Proteome Software's Scaffold</a>.
               Free tools such as
               <a href="https://maxquant.org/">MaxQuant</a> and 
               <a href="https://fragpipe.nesvilab.org/">FragPipe</a>
               are widely used for performing peptide ID, quantification, and more.

               <p>To use the same tools as we do here at the UWPR, you can learn about the
               <a href="http://tools.proteomecenter.org/wiki/index.php?title=Software:TPP">Trans-Proteomic
               Pipeline (TPP)</a> originally developed in the Aebersold group at ISB.
               There's a <a href="https://groups.google.com/forum/#!forum/spctools-discuss">support forum</a>
               for your questions and they offer periodic <a href="http://www.proteomecenter.org/course.php">week-long
               software courses</a> if you want to learn how to use the software.



              <h2>Data analysis primer</h2>

               <p>Shotgun data processed by the UWPR for you will typically entail a
               <a href="http://comet-ms.sourceforge.net">Comet</a> database search followed by
               <a href="http://sashimi.sourceforge.net">Trans-Proteomics Pipeline (TPP)</a> analysis
               using
               <a href="http://www.ncbi.nlm.nih.gov/pubmed/12403597">PeptideProphet</a> and
               <a href="http://www.ncbi.nlm.nih.gov/pubmed/14632076">ProteinProphet</a>.
               Aimed at someone new to UWPR proteomics analysis, this is a brief tutorial on how to start
               looking at your data.

               <p>Links to your processed data will appear at the bottom of your project page
               in the section "External Links to Data".  

               <p><img src="pic0.png" alt="external links">

               <p>Click on the "View Data" link which will bring up a page that looks like this:
               
               <p><img src="pic1.png" alt="data links">

               <p>Clicking on these links will prompt you to authenticate again using the same user name
               and password that gets you into your UWPR project page.  If you're sure you're using the
               same login credentials but are still not able to access the data links, 
               <a href="/protocols06/password.php">please try the instructions on this page</a>.

               <p>The very first thing I always look at is PeptideProphet's score distribution plots
               and how well the modeled positive and negative distributions fit the experimental data.
               To do this, click on the "pep.xml" file link for each analysis.  This brings up the
               TPP's PepXML Viewer below.  Think of this as a grid of your raw search results where
               each row represents an MS/MS spectrum search result.  You'll see some scores, a
               spectrum name with scan number and charge state encoded in it, link to the spectrum
               viewer, best (not necessarily correct) peptide match, protein name (just one
               protein name printed but peptide could match to many), and the peptide mass.  You
               can add or remove other columns of information.

               <p><img src="pic2.png" width="850" alt="pepXML page">

               <p>Then click on any of the probability score values in the leftmost column with the
               header "PROB".  They will all bring up the same score distribution curves so it
               doesn't matter which one you click on.  You should see a set of model charts like below.
               There's a lot of information here that is beyond this primer.  Your best resource
               for questions on PeptideProphet and these score distributions is the TPP's
               <a href="https://groups.google.com/forum/#!forum/spctools-discuss">support forum</a>.

               <p><img src="pic3.png" width="850" alt="models page">

               <p>The charts on the far left are the key indicators and what I use to judge whether
               or not the calculated probability values are worthwhile.

               <p>What you see in the plots is a score histogram (black curves) of all the peptide
               identifications; one plot for each precursor charge state.  The red curves are what
               PeptideProphet fits to the negative/null/wrong distribution and the green curves
               are what PeptideProphet fits to the positive/correct distribution.  What you want
               to see is that there are two distinct distributions (bimodal) in the black curve
               and that the red and green curves fit those well.  ** NOTE: although each peptide-spectrum-match
               has a link to the model charts, they all point to the same set of curves; the only
               difference is the score mark for each specific PSM.

               <p>Here's two examples of very good score distributions.  Sensitivity/error curves
               are near ideal (you want them to hit the top right and bottom left corners).  The
               black line in the 2nd and 3rd plots represents histogram of search results and you
               want to see a bimodal (two peaks) distribution representing the bad hits (modeled
               by the red curve) and good hits (modeled by the green curve).  In these examples,
               it's clear that there are two peaks in the black score distribution  and the
               positive distributions are big.
               <p><img src="score1.png" alt="good score distributions"> &nbsp; &nbsp; <img src="score2.png" alt="good score distributions">

               <p>Here's two examples of other good, maybe more normal distributions.  You can see the positive
               distributions are not nearly as large as in the plots above but they are clear
               positive distributions.  In the plots on the right, the lines are jagged simply
               because the raw counts are so low.  But even with these low counts, there's good
               separation between positive and negative distributions (and this good separation
               is encapsulated in the good sensitivity/error plots).
               <p><img src="score3.png" alt="good score distributions"> &nbsp; &nbsp; <img src="score4.png" alt="good score distributions">

               <p>Here's an example of very poor score distributions.  The sensitivity/error plots
               don't trend to the top right and bottom left corners.  And there's simply no
               positive distribution.  So if there are any good peptide IDs, their counts are
               very low.
               <p><img src="score5.png" alt="bad score distributions"> &nbsp; &nbsp; <img src="score7.png" alt="bad score distributions">

               <p>When the score distributions are this poor as in the third example above,
               I tend to ignore the calculated probability values which means the protein probabilities
               aren't reliable either (don't bother opening the prot.xml link).  For such data, I
               end up sorting the peptide list in ascending order by the "expect" column (E-value or
               expectation value) and looking at the best scoring identifications.  In contrast to
               PeptideProphet probabilities calculated by analyzing the entire run, the E-value is calculated
               on each individual spectrum search; smaller E-values are better.  Think
               of it as related to a p-value but with the definition that it's the expected
               number of random identifications to score as well or better than the current
               peptide's score.  By observation of Comet scores and the spectral annotations,
               E-value scores in the range of 10^-8 or smaller are usually very good while
               spectra for scores in the 10^-4 range and higher start to look more noisy
               and suspect.  And there are always exceptions (like a good looking spectrum match
               with a poorer E-value).  Note that there is an issue where extremely poor matches
               of say a single fragment ion can generate low E-values so always glance at the "IONS"
               column as well; any entries with just 1 or 2 fragment matches e.g. "1/20" indicate
               a poor match.

               <p>Both the pep.xml and prot.xml viewers allow you to filter the data.  For example, in
               order to target a specific false discovery rate, you can look up the appropriate probability
               score cutoff to target that false discovery rate.  In the pep.xml viewer, click on any
               probability score and then click on "Sens/Error Tables".  Look at the "Error Table" and
               the "Error_Rate" column which represents the false discovery rate.
               If you want to filter the results at a 1% or a 5% false discovery rate, find the
               "min_prob" minimum probability that corresponds with the 0.01 or 0.05 "Error_Rate" value.
               Now you can filter your results with this minimum probability cutoff in order to 
               target your specific false discovery rate. (Use the global error rate values and ignore
               those specific to each charge state.)  Click on the images below to get a larger
               view of the filtering workflows.

               <p>pep.xml FDR filtering:<br><a href="pepxml_filter.png" target="new"><img src="pepxml_filter.png" width="600" alt="pepXML filtering"></a>
               <br>prot.xml FDR filtering:<br><a href="protxml_filter.png" target="new"><img src="protxml_filter.png" width="600" alt="protXML filtering"></a>

               <p>To visualize annotated spectral using the <a href="https://github.com/UWPR/Lorikeet">Lorikeet</a>
               viewer, click on the links in the "IONS" column of the PepXML Viewer.
               Here are 3 examples of good MS/MS spectra with good peptide matches.

               <p><img src="spectrum1.png" width="600" alt="ms/ms spectrum">
               <p><img src="spectrum2.png" width="600" alt="ms/ms spectrum">
               <p><img src="spectrum3.png" width="600" alt="ms/ms spectrum">

               <p>These are examples of very poor MS/MS spectra.

               <p><img src="spectrum4.png" width="600" alt="ms/ms spectrum">
               <p><img src="spectrum5.png" width="600" alt="ms/ms spectrum">
               <p><img src="spectrum6.png" width="600" alt="ms/ms spectrum">

               <p>These peptide-spectrum-matches got poor scores but might seem plausible if
               you squint your eyes hard enough. This reflects the fact that mass spectra are
               not binary (correct/incorrect) data so identifications and identification
               confidence are also not black and white.

               <p><img src="spectrum7.png" width="600" alt="ms/ms spectrum">
               <p><img src="spectrum8.png" width="600" alt="ms/ms spectrum">
               <p><img src="spectrum9.png" width="600" alt="ms/ms spectrum">

               <p>The prot.xml link brings up the ProteinProphet viewer.  This is a protein
               centric view of the data and should only be looked at after you validate that
               the peptide score distributions aren't horrible.  Here's what the ProteinProphet
               viewer looks like:
               <p><img src="prot1.png" width="850" alt="protXML view">

               <p>Scrolling down the list, you start seeing protein "groups" which are usually
               isoforms grouped together (but sometimes they're unrelated proteins that
               simply share sequence homology):
               <p><img src="prot2.png" width="850" alt="protXML view">

               <p>Clicking on the far left column for a particular protein entry will bring
               up these peptide details:
               
               <p><img src="prot3.png" width="850" alt="protXML view">

               <p>Clicking on the group entry number will bring up these group details.
               The shaded boxes represent peptide IDs across the
               As you can see, entry "sp|O00159-3|MYO1C-3_HUMAN" has contains every peptide
               identified across this set of 5 proteins where as the other 4 proteins
               match a subset of those peptides. This is why "sp|O00159-3|MYO1C-3_HUMAN"
               has a probability of 1.0000 whereas the other 4 proteins have a probability
               of 0.0000. This doesn't mean that the other proteins aren't present in your
               sample ... there's no way to know this from the peptide data. The ProteinProphet
               software will proportion the probability values across the simplest list
               of protein(s) that can explain the identified peptides which in this case is
               that is that single protein entry; that simply the convention its authors
               decided to take. All 5 proteins are still part of the protein group and any or
               all might be present irrespective of the individual assigned protein probabilities.

               <p><img src="prot4.png" width="850" alt="protein group">


               <hr>

               <p><b>How to download the "Excel" files from the pep.xml and prot.xml viewers:</b>


               <p>For the pep.xml link, after you choose "Export Spreadsheet", go back to the "Summary tab".
               In the header, you should now see an "exported spreadsheet to:" text with a hypertext link to
               the .xls file (which is really just a tab-delimited text file).  See image below.  You can
               just click on the hypertext link to download the .xls file and open in Excel.

               <p><img src="excel1.png" width="850" alt="pepXML export">

               <p>It's a little more convoluted to get the exported file from the prot.xml view.  Once you
               hit the "Export to XLS" button in the protein view, you end up with something like this:

               <p><img src="excel2.png" width="850" alt="protXML export">

               <p>For TMT or iTRAQ labeled samples, the tool that extracts the reporter ions signals is the
               Libra tool.  Assuming the 6-plex TMT reagent was used, the resulting quantitative values
               would be reported as Libra1 through Libra6 corresponding to reporter ions from 126 through 131.
               The quantitative peptide and protein values are displayed as below and the actual values
               will be exported into the tab-delimited text files when exported as described above.
               <a href="libra_info.html">Here's the documentation, from back in 2006, that the Libra
               developers put together</a> describing what it does.

               <p><img src="libra1.png" width="850" alt="pepXML Libra">
               <p><img src="libra2.png" width="850" alt="protXML Libra">

 

               <p>To exclude all 155 contaminants (e.g. trypsin, keratin, albumin, etc.) and decoys from
               the PepXMLViewer (pep.xml) viewer, paste this string into the "Required protein text (regex allowed):"
               text box of the "Filtering Options" tab.  It's one long string, no spaces.
             
               <br><label for="contaminants">Contaminant regular expression: <input type="text" id="contaminants" size="50" value="^(?!.*(ALBU_BOVIN|CASA1_BOVIN|CASA2_BOVIN|CAH2_BOVIN|CASB_BOVIN|CASK_BOVIN|CTRA_BOVIN|CTRB_BOVIN|DHE3_BOVIN|LALBA_BOVIN|PEPA_BOVIN|TRY1_BOVIN|TRY2_BOVIN|LYSC_CHICK|OVAL_CHICK|BGAL_ECOLI|ALBU_HUMAN|AMY1A_HUMAN|AMY1B_HUMAN|AMY1C_HUMAN|ANT3_HUMAN|ANXA5_HUMAN|B2MG_HUMAN|BID_HUMAN|CAH1_HUMAN|CAH2_HUMAN|CATA_HUMAN|CATD_HUMAN|CATG_HUMAN|CO5_HUMAN|CRP_HUMAN|CYB5_HUMAN|CYC_HUMAN|EGF_HUMAN|FABPH_HUMAN|GELS_HUMAN|GSTA1_HUMAN|GSTP1_HUMAN|HBA_HUMAN|HBB_HUMAN|HBEGF_HUMAN|IGF2_HUMAN|IL8_HUMAN|INHBA_HUMAN|INHBB_HUMAN|KCRM_HUMAN|LALBA_HUMAN|LEP_HUMAN|LYSC_HUMAN|MYG_HUMAN|NEDD8_HUMAN|NQO1_HUMAN|NQO2_HUMAN|PDGFB_HUMAN|PPIA_HUMAN|PRDX1_HUMAN|RASH_HUMAN|RET4_HUMAN|RS27A_HUMAN|SODC_HUMAN|SUMO1_HUMAN|HARS1_HUMAN|TAU_HUMAN|THIO_HUMAN|TNFA_HUMAN|TRFE_HUMAN|TRFL_HUMAN|UB2E1_HUMAN|UBE2C_HUMAN|K1C26_HUMAN|K2C3_HUMAN|K1C15_HUMAN|K2C79_HUMAN|K2C6B_HUMAN|K1C17_HUMAN|K2C4_HUMAN|K2C73_HUMAN|K2C71_HUMAN|K2C7_HUMAN|K2C8_HUMAN|K1C39_HUMAN|K1C18_HUMAN|K1C28_HUMAN|K1C16_HUMAN|K2C1_HUMAN|K2C5_HUMAN|K2C80_HUMAN|K2C1B_HUMAN|K2C75_HUMAN|K2C6A_HUMAN|K2C72_HUMAN|K1C24_HUMAN|K1C19_HUMAN|K2C74_HUMAN|K1C27_HUMAN|K1C20_HUMAN|K1C9_HUMAN|K1C23_HUMAN|K1C12_HUMAN|K1C14_HUMAN|K2C6C_HUMAN|K1C10_HUMAN|K1C13_HUMAN|K22O_HUMAN|K1C25_HUMAN|K2C78_HUMAN|K22E_HUMAN|K1C40_HUMAN|KRT85_HUMAN|KRT38_HUMAN|KRT34_HUMAN|KRT86_HUMAN|KRT35_HUMAN|KT33B_HUMAN|KRT81_HUMAN|KRT37_HUMAN|KT33A_HUMAN|KRT83_HUMAN|K1H1_HUMAN|KRT82_HUMAN|K1H2_HUMAN|KRT36_HUMAN|KRT84_HUMAN|ALDOA_RABIT|CYC_HORSE|GAG_SCVLA|GFP_AEQVI|K1C15_SHEEP|K1M1_SHEEP|K1M2_SHEEP|K2M1_SHEEP|K2M2_SHEEP|K2M3_SHEEP|KKA1_ECOLX|KRA33_SHEEP|KRA34_SHEEP|KRA3A_SHEEP|KRA3_SHEEP|KRA61_SHEEP|KRB2A_SHEEP|KRB2B_SHEEP|KRB2C_SHEEP|KRB2D_SHEEP|KRUC_SHEEP|LYSC_LYSEN|MYG_HORSE|PEPA_PIG|PEPB_PIG|PEPC_PIG|PLMP_GRIFR|REF_HEVBR|SRPP_HEVBR|SSPA_STAAU|TRYP_PIG|ADH1_YEAST|DECOY_)).*$" readonly id="text-to-copy-3"> <button class="copy-btn" onclick="copyInputValue('text-to-copy-3', 'success-message-3')">Copy protein filter text</button> 

               <!--
               <span class="success-message" id="success-message-3">✓ Copied!</span>
               -->

              <p>Paste the copied text here:<br><img src="filtercontam.png" alt="contaminant filter">


    <script>
        function copyToClipboard(elementId, messageId) {
            // Get the text content
            const text = document.getElementById(elementId).textContent;

            // Fallback approach that works in more environments
            const textarea = document.createElement('textarea');
            textarea.value = text;
            textarea.setAttribute('readonly', '');
            textarea.style.position = 'absolute';
            textarea.style.left = '-9999px';
            document.body.appendChild(textarea);

            // Select the text and copy
            textarea.select();
            let success = false;

            try {
                success = document.execCommand('copy');
            } catch (err) {
                console.error('Unable to copy to clipboard', err);
                success = false;
            }

            // Remove the temporary element
            document.body.removeChild(textarea);

            <!--
            // Show success or error message
            const successMessage = document.getElementById(messageId);
            if (success) {
                successMessage.style.display = 'inline';
                // Hide the success message after 2 seconds
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 2000);
            } else {
                alert('Failed to copy text. Please try selecting the text manually and copying it.');
            }
            -->
        }

        function copyInputValue(elementId, messageId) {
            // Get the input value
            const input = document.getElementById(elementId);
            const text = input.value;
            
            // Select the input
            input.select();
            let success = false;
            
            try {
                success = document.execCommand('copy');
            } catch (err) {
                console.error('Unable to copy to clipboard', err);
                success = false;
            }
            
            // Deselect the input
            input.blur();
            
            <!--
            // Show success or error message
            const successMessage = document.getElementById(messageId);
            if (success) {
                successMessage.style.display = 'inline';
                // Hide the success message after 2 seconds
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 2000);
            } else {
                alert('Failed to copy text. Please try selecting the text manually and copying it.');
            }
            -->
        }

    </script>



               </div>

             

</div>
</div>

<?php  include("../../__footer.php"); ?>
