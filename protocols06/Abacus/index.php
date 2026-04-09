<?php  include("../../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <section>
                     <header class="major">
                        <h1>Abacus</h1>
                        <span class="byline">Instructions on running Abacus on UWPR systems</span>
                     </header>

      <p><a href="http://abacustpp.sourceforge.net">Abacus is a TPP compatible spectral counting tool</a>
         developed by the Nesvizshkii lab at the University of Michigan.
         Here are instructions on how to run it on the command line on
         our linux systems.

      <p><ol>
         <li>First, generate individual interact-*.pep.xml and interact-*.prot.xml files
             for each of your input groups.
             <ul><li>If you want separate output columns for each
             individual search run, you will need to generate individual interact-*.pep.xml and
             interact-*.prot.xml files for each.  The easiest way to accomplish this is
             using a command like:
             <br><tt><i>runCometQ --wocomet --single *.mzXML</i></tt>
             <p>Or if you're using decoys in the search, then use a command like this instead:
             <br><tt><i>runCometQ --wocomet --single --decoy DECOY_ *.mzXML</i></tt>
             <p>Otherwise you would run some command like the following for each of your files:
             <br><tt><i>xinteract -OAp -Nfile1 file1.pep.xml</i></tt>
             <br><tt><i>xinteract -OAp -Nfile2 file2.pep.xml</i></tt>
             <br><tt><i>xinteract -OAp -Nfile3 file3.pep.xml</i></tt>
             <br><tt><i>xinteract -OAp -Nfile4 file4.pep.xml</i></tt>

             <li> If you want to group runs such
             that each spectral count column is a group of two or more runs then generate
             your interact-* files for the groups.  Give your groups some meaningful
             names (e.g. "group1" and "group2" in the example below).
         
             <br><tt><i>xinteract -OAp -Ngroup1 file1.pep.xml file2.pep.xml</i></tt>
             <br><tt><i>xinteract -OAp -Ngroup2 file3.pep.xml file4.pep.xml</i></tt>
             </ul>

         <li><p>Next, you need to generate a combined ProteinProphet file using all of the
             interact-*.pep.xml files as input.  Use this command to do this:
             <br><tt><i>ProteinProphet interact*.pep.xml interact-COMBINED.prot.xml</i></tt></p>
             
         <li><p>At this point you should have a set of interact-*.pep.xml, interact-*.prot.xml,
             and an interact-COMBINED.prot.xml files.  For some reason, Abacus will attempt to load
             every file in the directory, including the non-interact pep.xml files  and I don't
             know if this is detrimental or not.  In order to keep it from loading the base search
             files (e.g. file1.pep.xml, file2.pep.xml in the examples above), move those away
             temporarily into a "bak" subdirectory.  Even if these files aren't detrimental,
             a nice side effect of doing this is reducing the run time by not loading useless files.
             Note: leave the interact-*.pep.xml files where they are; only the original base pep.xml
             files should be moved to the subdirectory.
             <br><tt><i>mkdir bak</i></tt>
             <br><tt><i>mv file1.pep.xml file2.pep.xml file3.pep.xml file4.pep.xml bak/</i></tt>
             </p>

         <li>Grab a copy of the Abacus parameters file:
             <br><tt><i>cp /net/pr/vol3/www/html/protocols06/Abacus/Abacus_parameters.txt .</i></tt>

             <p>This parameters file is set to run Abacus with default settings using NSAF.
             Hopefully you can figure out how to edit the parameters as needed.  If you
             need help understanding the settings,
             <a href="https://groups.google.com/forum/#!forum/abacus-support">here's the Abacus support forum</a>.
             You will need to edit the line entries for:
             <ul><li>"combinedFile": set the full path to interact-COMBINED.prot.xml file generated in step 2 (replace "/change/me")
             <li>"srcDir": set the directory that contains your files (replace "/change/me")
             <li>"outputFile": set where you want the Abacus output to go (replace "/change/me")
             <li>"fasta": set the fasta file (replace "/change/me/database.fasta")
             <li>"decoyTag": current set to "DECOY_" but change this as needed
             </ul></p>

<!--
         <li><p>We're ready to run Abacus but first we need to load Java via modules:
             <br><tt><i>module load modules modules-init ; module load modules-gs/prod ; module load java/latest</i></tt></p>
-->

         <li><p>Now cross your fingers that you did everything right and run Abacus:
            <br><tt><i>java -Xmx32g -jar /net/pr/vol1/ProteomicsResource/bin/abacus.jar -p Abacus_parameters.txt</i></tt></p>

         <li><p>We can undo step 3 above now:
             <br><tt><i>mv bak/* .</i></tt>
             <br><tt><i>rmdir bak</i></tt>
             </p>

         <li><p>That's it.  Hopefully you now have an "ABACUS_output.tsv" (or whatever you named the
                output file in step 4) in your search directory.

         </ol>

   </div>
   </div>
   </div>
<?php  include("../../__footer.php"); ?>
