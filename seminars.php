<?php  include("__header.php"); ?>

<?php function randomimage() {
   $total = 0;
   $imagelist = array();

   //Grab all files in directory for checking and process
   $dir = opendir ('images/main');
   while (false !== ($file = readdir($dir))) {
      if (preg_match("/^.*\.(jpg|bmp|jpeg|png|gif)$/i", $file)) {
         $imagelist[] = $file;
      }
   }
   $random = mt_rand(0, count($imagelist) - 1);
   return '/images/main/'. $imagelist[$random];
}?>


<!--<div id="splash" style="background: url('--><?php //echo randomimage(); ?><!--') no-repeat right top;">-->
<?php // include("__quote.php"); ?>
<!--</div>-->

<div id="page" class="container">

      <div id="box3" class="box-style1">
        <div class="major">
            <h1>Quarterly UW Proteomics Resource Seminar Series<h1>
        </div>

          <div class="content">
            

              <h3><strong>Next Quarterly UWPR Seminar</strong></h3>
              <p>TBA
              
			  			  
			  <h3><strong>Future UWPR Seminars</strong></h3>
			  <br>We are considering changing the format to a yearly Mini Symposium
			  <br>Check back regularly for updates.
			  <br> 
			  <br>
			  <br>Seminar announcments are sent via the proteomics mail list, 
			  <br><a target="new" href="https://mailman13.u.washington.edu/mailman/listinfo/proteomics">subscribe to the proteomics mail list here </a>
			  <br>
			  <br>
  
				
				
			<p>  
              
              <h3><strong>Past UWPR Seminars</strong></h3>
			  <br>
			  <ul>
			  <li>March 6th, 2018, 4 - 6 pm, Orin Smith Auditorium
			    <br><strong>Tomas Vaisar, PhD</strong> Research Associate Professor, Department of Medicine
			    <br><i>"Investigating lipoproteins using electrospray-differential mobility analysis"</i>
			    <br><strong>Alex Zelter, PhD</strong> Research Scientist Davis Lab
                <br><i>"A Mass Spectrometry Based Method to Identify Drug-Protein Adducts: Implications for Drug Development"</i>
			    <br>
				<br>
			  <li>Tues, Dec 5th, 2017, 4 - 6 pm, Foege North 130A
			    <br><strong>Stephanie Zimmerman, PhD</strong>, Postdoctoral Fellow in Stan Fields lab    
			    <br><i>"Measuring the functional effects of mutations proteome-wide using mistranslation"</i>
                <br><strong>Martin Golkowski Ph.D </strong>, Postdoctoral Fellow in Shao-En Ong's lab  
                <br><i>"Kinome profiling to discover novel kinase regulators of EMT in cancer."</i>
			    <br>
				<br>
			  <li>Sept 12th, 2017, 4 - 6 pm, Orin Smith Auditorium
			    <br><strong>Matthew Bush, PhD</strong>, Assistant Professor Dept. of Chemistry    
			    <br><i>"TBA"</i>
                <br><strong>Miguel Martin Perez, PhD</strong>, Postdoctoral Research Fellow Vill&eacute;n lab  
                <br><i>"Remodeling of the muscle signaling network with age"</i>
			    <br>
				<br>
			  <li>May 30th, 2017, 4:30 - 6 pm, Foege Auditorium
			    <br><strong>Baohai Shao, PhD</strong>, Research Assistant Professor, Department of Medicine, Division of Metabolism, Endocrinology and Nutrition   
			    <br><i>"HDL Proteomics in the Prediction of Heart Disease"</i>
                <br><strong>Judit Marsillach, PhD</strong>, Acting Instructor at Department of Medicine  
                <br><i>"Monitoring exposures to organophosphorus compounds using adductomics"</i>
			    <br>
				<br>
			  <li>March 7th, 2017, 4 - 6 pm, Orin Smith Auditorium
			    <br><strong>Trisha Davis, PhD</strong>, Professor and Chair of Biochemistry   
			    <br><i>"Getting the most out of cross-linking"</i>
                <br><strong>Juan Chavez, PhD </strong>, Research Scientist in Jim Bruce's Lab  
                <br><i>"Interactome dynamics by quantitative cross-linking mass spectrometry"</i>
			    <br>
				<br>
			  <li>Dec. 6th, 2016, 4 - 6 pm, Foege North 130A
			    <br><strong>Mike MacCoss, PhD</strong>, Professor - Genome Sciences   
			    <br><i>"How do we make proteomics assays quantitative?"</i>
                <br><strong>Alex Hu </strong>, Graduate Student in the Wolf-Yadlin and Noble lab  
                <br><i>"A regression model to deconvolve data-independent acquisition mass spectra for peptide identification."</i>
			    <br>
				<br>
			  <li>Sep. 13th, 2016, 4 - 6 pm, SLU Orin Smith Auditorium
			    <br><strong>Judit Vill&eacute;n, PhD</strong>, Assistant Professor, Genome Sciences  
			    <br><i>"TBA"</i>
                <br><strong>Anthony Raubitschek MD PhD</strong> , Resident Physician, Internal Medicine, UW (Vaisar Lab collaborator) 
                <br><i>"Atherosclerotic Plaque Proteomics in Murine uPA-Overexpression Model and Human Carotid Plaques."</i>
			    <br>
				<br>
			  
			  <li>Cancelled: May, 31st, 2016, 4 - 6 pm, Foege Auditorium S060
			  <br>
				<br>
			  <li>March, 1st, 2016, 4 - 6 pm, SLU Orin Smith Auditorium
			    <br><strong>Shao En Ong, PhD</strong>, Assistant Professor, Pharmacology  
			    <br><i>"Kinome Analyses in Cancer"</i>
                <br><strong>Yi He, PhD</strong> , Postdoctoral Fellow from the Heinecke Lab 
                <br><i>"Insights into lipoprotein structure-function relationship using cross-linking mass spectrometry"</i>
			    <br>
				<br>
				
			    <li>Dec. 1st, 2015, 4 - 6 pm, SLU Orin Smith Auditorium
			    <br><strong>Jim Bruce, PhD</strong>, Professor, Genome Sciences  
			    <br><i>"The quantitative interactome: edging across a functional landscape"</i>
                <br><strong>Ben Jester, PhD </strong> , Postdoctoral Fellow from the Fields Lab 
                <br><i>"A General Strategy to Create Biosensors for Small Molecules"</i>
			    <br>
				<br>
			  
			    <li>Sept. 15th, 2015, 4 - 6 pm, Foege North 130A
			    <br><strong>Andy Hoofnagle, MD PhD</strong>, Associate Professor, Laboratory Medicine 
			    <br><i>"Calibration and Validation: Dirty Words that Help the Masses"</i>
                <br><strong>Brian C. Searle </strong> , Graduate Research Assistant in the MacCoss Lab
                <br><i>"Using DIA to predict high-responding peptides for targeted proteomics experiments"</i>
			    <br>
				<br>
			  
			    <li>May 26th, 2015, 4 - 6 pm, SLU Orin Smith Auditorium
			    <br><strong>Alejandro Wolf-Yadlin, PhD</strong>, Assistant Professor of Genome Sciences 
			    <br><i>"Molecular Mechanisms behind Kaposi Herpes Sarcoma Virus Latent Infection"</i>
                <br><strong>Samuel Marionni </strong> , Graduate Research Assistant in the Bush Lab
                <br><i>"Native Ion Mobility Mass Spectrometry Results as Constraints for Structural Modeling of Conformationally Heterogenous Complexes"</i>
			    <br>
				<br>
				
			    <li>March 3rd, 2015, 4 - 6 pm, Foege North 130A
				<br><strong>Tomas Vaisar, PhD</strong>, Research Associate Professor of Medicine 
				<br><i>"Quantitative proteomics of high density lipoprotein in cardiovascular diagnostics."</i>
				<br><strong>Michael Hoopmann, PhD</strong>, Software Engineer, ISB; Collaborator with Davis lab 
				<br><i>"Efficient analysis of chemically cross-linked peptide spectra"</i>
                <br>
				<br>
			  
				<li>Dec 2nd, 2014, 4 - 6 pm, SLU Orin Smith Auditorium
				<br><strong>Stanley Fields, PhD</strong>, HHMI Investigator, Professor, Genome Sciences 
				<br><i>"Massively parallel functional analysis of BRCA1 RING domain variants"</i>
				<br><strong>Martin Golkowski, PhD</strong>, Postdoctoral Fellow in the Ong Lab 
				<br><i>"Kinome-centric phosphoproteomics to study GPCR signalling networks"</i>
                <br>
				<br>
                
				<li>Sept. 9, 2014, 4 - 6 pm, Foege North 130A
				<br><strong>Matthew Bush, PhD</strong>, Assistant Professor Dept. of Chemistry 
				<br><i>"Ion Mobility Mass Spectrometry of Intact Protein Complexes"</i>
				<br><strong>Miguel Martin-Perez, PhD</strong>, Postdoctoral Fellow in the Vill&eacute;n Lab 
				<br><i>"Tracing metabolic labelling in prototroph organisms for protein turnover analyses"</i>
                <br>
				<br>
				<li>June 3, 2014, 4 - 6 pm, SLU Brotman Auditorium
				<br><strong>Graziella Ronsein, PhD</strong> Postdoc Fellow in the Heinecke Lab
				<br><i>"Quantitative analysis of candidate HDL protein biomarkers for human disease"</i>
				<br><strong>Devin Schweppe, PhD</strong>, Postdoc Fellow in the Bruce Lab 
				<br><i>"Proteomic identification of interspecies host-pathogen interactions by protein crosslinking: Acinetobacter baumannii infection of human lung epithelia"</i>
                <br>
				<br>
				<li>March 4, 2014, 4 - 6 pm, SLU Orin Smith Auditorium
				<br><strong>Michael MacCoss, PhD</strong> Associate Professor, Genome Sciences
				<br><i>"Improving the Robustness and Reproducibility of Mass Spectrometry Based Proteomics"</i>
				<br><strong>Clark Henderson, PhD</strong>, Postdoc Fellow in the Hoofnagle Lab 
				<br><i>"Quantifying Clinically Relevant Biomarkers of Cardiovascular Disease in Dried Blood Spots"</i>
				<br>
				<br>
				<li>Dec. 10, 2013, 4 - 6 pm, Foege North 130A
				<br><strong>Trisha Davis, PhD</strong> Professor - Biochemistry
				<br><i>"Crosslinking as a probe of protein structure: Gamma-tubulin complex as a test case"</i>
				<br><strong>Nathan Camp, PhD</strong>, Postdoc Fellow in the Wolf-Yadlin Lab 
				<br><i>"What is a Cancer stem cell? Phosphoproteomic analysis of Glioblastoma stem cell models"</i>
				<br>
				<br>
				<li>Sept. 10, 2013, 4 - 6 pm, SLU Orin Smith Auditorium
				<br><strong>Judit Vill&eacute;n, PhD</strong> Assistant Professor, Genome Sciences
				<br><i>"PROTEIN PHOSPHORYLATION IN CELLULAR SIGNALING AND DEGRADATION"</i>
				<br><strong>Tomas Vaisar, PhD</strong>, Research Associate Professor of Medicine 
				<br><i>"HDL and cardiovascular disease; targeted quantitative proteomics in translational research"</i>
				<br>
				<br>
				<li>June 4, 2013, 4 - 6 pm, SLU Orin Smith Auditorium
				<br><strong>Shao En Ong, PhD</strong> Assistant Professor, Pharmacology
				<br><i>"Quantitative proteomics to identify novel protein-DNA interactions"</i>
				<br><strong>Patrick Hutchins, PhD</strong>, Postdoc Fellow in the Heinecke Lab 
				<br><i>"HDL in the prediction of heart disease risk"</i>
                <br>
				<br>
				<li>March 5, 2013, 4 - 6 pm, Foege Auditorium S060
				<br><strong>Jim Bruce, PhD</strong> Professor, Genome Sciences
				<br><i>"Protein Structures and Interaction Networks: Identifying Links"</i>
				<br><strong>Griffin Kim, PhD</strong>, Postdoc Fellow in the Fields Lab 
				<br><i>"High Throughput Analysis of Protein Stability"</i>
				<br>
				<br>
				<li>Dec. 4, 2012, 4 - 6 pm, SLU Orin Smith Auditorium
				<br><strong>Andy Hoofnagle, PhD</strong> Assistant Professor, Laboratory Medicine
				<br><i>"Quantifying Proteins by LC-MS/MS in Clinical Samples"</i>
				<br><strong>Sonia Ting</strong>, Member from the MacCoss Lab 
				<br><i>"Hypothesis-Driven Analysis: A New Concept for Investigating Tandem Mass Spectrometry Data"</i>
				<br>
				<br>
				<li>Sept. 11, 2012, 4 - 6 pm, Foege Auditorium S060
				<br><strong>Alejandro Wolf-Yadlin, PhD</strong> Assistant Professor, Genome Sciences
				<br><i>"NA"</i>
				<br><strong>Alex Zelter, PhD</strong>, Member from the Davis Lab 
				<br><i>"Identification of chemically crosslinked peptides by mass spectrometry: An analysis of the yeast gamma-tubulin complex"</i>
				<br>
				<br>
				
				
				</ul>
			</p>	

             <p>
				<a target="new" href="http://www.proteomicsresource.washington.edu/symposium_schedule.php">Proteomics Symposium schedule</a>, May 18, 2012
				</p>
        </div>
    </div>

   <?php include("_googlesearch.php"); ?>
   </div>

<?php  include("__footer.php"); ?>
