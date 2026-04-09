<?php  include("../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <section>
                     <header class="major">
                        <h1>Data Analysis Tools</h1>
                        <span class="byline">A collection of computational tools and links</span>
                     </header>

				<h3>Online Tools/Calculators</h3>
                <ul>
                    <li><a href="/cgi-bin/fragment.cgi">MS/MS fragmentation calculator</a>
                    <li><a href="/cgi-bin/digest.cgi">Protein sequence digestion calculator</a>
                    <li><a href="/cgi-bin/calcisotopes.cgi">Isotope distribution calculator</a>
                    <li><a href="/cgi-bin/element.cgi">Elemental mass calculator</a>
                    <li><a href="/cgi-bin/motif_search.cgi">Peptide motif finder</a>
                    <li><a href="/lorikeet/">Lorikeet Spectrum viewer</a>
                    <li><a href="/lorikeet/html/specview-koina.html">Koina (Prosit, ms2pip, AlphaPeptDeep) spectrum prediction viewer</a>
                    <!--<li><a href="lorikeet/specview.php">Lorikeet Spectrum viewer</a>-->
                    <li><a href="masses.php">Table of relevant masses (amino acids, elements)</a>
                </ul>

<!--
				<p><strong>ProteinCenter</strong>
				<br>ProteinCenter by Proxeon (Thermo Scientific) is a tool that helps bridge
            the gap between raw data and biological insight.  It is a great web-based tool
            for interpreting results from complex proteomics data sets.
                <ul>
                    <li><a href="proteincenter.php">UWPR ProteinCenter</a>
                </ul>
				</p>

				<h3>Mass Spec Utils</h3>
				A tool with a graphical interface that performs various tasks including
            creating mgf files, running Hardkl&#246;r, merging HCD/CID scans for iTRAQ analysis,
            calculating precursor contamination for iTRAQ data, etc.</br>
                <ul>
                    <li><a href="/protocols06/MassSpecUtils">Mass Spec Utils</a>
                </ul>
-->

				<h3>MS/MS database search tools</h3>
				Various MS/MS database search tools are available at our UWPR systems.
            Search results are typically processed through the Trans-Proteomic Pipeline.</br>
                <ul>
                    <li><a href="https://uwpr.github.io/Comet/">Comet</a> (<a href="/protocols06/comet_commands.php">local linux commands</a>)
                    <li><a href="xtandem.php">X!Tandem</a>
<!--                <li><a href="omssa.php">OMSSA</a> -->
                    <li><a href="http://cruxtoolkit.sourceforge.net">Crux</a> (<a href="/protocols06/crux.php">local run info</a>)
                </ul>
                
            <h3>Software tools and protocols from other resources:</h3>
                <ul>
                   <li><a href="https://skyline.ms/project/home/software/Skyline/begin.view">Skyline: targeted proteomics environment </a>
                   <li><a href="http://brucelab.gs.washington.edu/xlinkdb/">XLink-DB: database and software tools for storing and visualizing protein interaction topology data</a></li>
                   <li><a href="http://proxl-ms.org">Proxl Protein Cross-Linking Database</a></li>
                </ul>

            <h3>CrossLinking</h3>
                <ul>
                   <li><a href="http://proxl-ms.org">ProXL</a>
                   <li><a href="http://xlinkdb.gs.washington.edu/xlinkdb/">XlinkDB</a>
                </ul>

				<h3>Miscellaneous</h3>
                <ul>
                   <li><a href="/protocols06/primer/">A quick primer</a> on how to interpret peptide ID results processed at UWPR</li>
                   <li><a href="/docs/ms22dta.zip">Simple .ms2 to .dta command line converter (zip of source + binaries)</a></li>
                   <li><a href="/docs/ms22mgf.c">Simple .ms2 to .mgf command line converter (C source)</a></li>
                   <li><a href="/docs/libra_condition_files.zip">Here are TPP Libra condition files</a> for iTRAQ and TMT.</li>
                   <li><a href="/protocols06/wine/">ReAdW under Wine</a> Thermo to mzXML conversions under linux.
                   <li><a href="/protocols06/RawMeat_1007.exe">RawMeat</a> is a nice Thermo raw file diagnostic
                   tool developed by the now defunct Vast Scientific.  RawMeat requires Thermo's MSFileReader library
                   to be installed.  MSFileReader can be downloaded by creating an account with
                   <a href="https://thermo.flexnetoperations.com/control/thmo/login">ThermoFischer Scientific</a>.
                   Once registered you will find the software under "Other Software Releases".
                   <li><a href="/protocols06/Abacus/">Instructions on running Abacus</a> spectral count tool on UWPR systems. Here
                   is <a href="adjnsaf.php">ChatGPT's description of what ADJNSAF is</a>.</li>
                   <li><a href="/protocols06/uniprot.contam.zip">zip file containing contaminant protein sequences</a> based on the <a href="https://www.thegpm.org/crap/">GPM's cRAP database</a>. Updated 2022/06/21 to current UniProt sequences. Separated into bovine, human, yeast, chicken, E. coli, and others. </li>
                   <li>Historic public datasets from ISB. These both include 18 protein mixture datasets as published in <a href="https://pubmed.ncbi.nlm.nih.gov/12143966/">Keller et al., Omics, 2002</a> (<a href="https://proteomicsresource.washington.edu/protocols06/18MixPublicDatasets/2002_Omics_mixture/">dataset1</a>) and <a href="https://pubmed.ncbi.nlm.nih.gov/17711323/">Klimek et al., JPR, 2008</a> (<a href="https://proteomicsresource.washington.edu/protocols06/18MixPublicDatasets/StandardProteinMix/">dataset2</a>). These files are not posted online for direct download in order to avoid constant download from data crawlers so contact us for a link to the files.
                </ul>

            <h3>MS/MS database search info:</h3>
                <ul>
                   <li>Search engine comparisons:  <!--<a href="http://www.springerlink.com/content/36620u50421457g2/">link1</a>,-->
                                                   <a href="http://www3.interscience.wiley.com/journal/110574802/abstract">link2</a>,
                                                   <a href="http://www.mcponline.org/content/6/9/1599.full">link3 (only OMSSA searched 3+ spectra!)</a>,
                                                   <a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC2801774/">link4</a>,
                                                   <a href="http://pubs.acs.org/doi/abs/10.1021/pr900780s">link5</a>,
                                                   <a href="http://pubs.acs.org/doi/abs/10.1021/pr200052c">link6</a>
                   <li>Be wary of searching with too narrow a precursor tolerance (even if your
                       mass spectrometer can measure that accurately). It's an issue with all
                       search tools.
                       <a href="http://pubs.acs.org/doi/abs/10.1021/pr101003r">This paper
                       nicely touches on the problem</a> and
                       <a href="http://pubs.acs.org/doi/abs/10.1021/pr200726c">
                       here's a rebuttal</a>.  And Phil Wilmarth has <a href="https://pwilmart.github.io/blog/2021/04/22/Parent-ion-tolerance">a nice blog post</a>
                       about the benefits of using a wide precursor window.
                   <li>Be wary of multiple-stage searches like X!Tandem's refinement mode or the hot-spot
                       searching that Paragon does.  Not that these searches are innately bad but rather one should be
                       educated on the search strategy and what it means.  If one searches a bazillion spectra against
                       subset proteins X, Y, and Z in the 2nd pass, don't be surprised to find many matches
                       (real or spurious) to proteins X, Y and Z.  Think of it as a self-fulfilling prophecy.
                       Here's an interesting paper and follow-up touching on the problem and proposing solutions
                       to the target-decoy strategy with these types of searches:
                       <a href="http://pubs.acs.org/doi/abs/10.1021/pr900256v">paper1</a>,
                       <a href="http://pubs.acs.org/doi/abs/10.1021/pr101143m">paper2</a>
                </ul>
				
				<h3>UWPR computing resources (as of 10/2024)</h3>
            <ul>
            <li>Two (2) Dell PowerEdge R6515 servers each with 256GB RAM, 480GB SSD, and
                dual AMD EPYC 7443P 2.85GHz CPUs (each with 24 cores, 48 threads, 128M Cache).
                These serve as cluster compute nodes (p001 and p002).
            <li>One (1) Dell PowerEdge R660 server with 128GB RAM, Intel Xeon Silver 4510
                2.4GHz CPU (12 core, 24 threads, 30M Cache).
                This serves as an application and web server (tephra).
            <li>33TB of enterprise class storage with NFS (Linux) and SMB (Windows) connectivity.
            <li>The UWPR also has access to UW Genome Sciences cluster computing resources.
                This includes (A) one compute node with dual Intel Xeon Gold 6330N 2.2GHz CPUs
                (each with 28 cores, 56 threads, 42MB cache), 512GB RAM, 890GB local storage;
                (B) two compute nodes with dual Intel Xeon Silver 4316 2.3GHz CPUs (each with
                20 cores, 40 threads, 30MB cache), 256GB RAM, 890GB local storage; and (C)
                three compute nodes with Intel Xeon E5-2680 2.5GHz CPUs (8 cores, 16 threads,
                20MB cache), 256GB RAM, 930GB local storage.
            </ul>

				
</div>
</div>

<?php  include("../__footer.php"); ?>
