<?php  include("../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <section>
                     <header class="major">
                        <h1>X!Tandem</h1>
                        <span class="byline">Instructions for running X!Tandem on UWPR systems</span>
                     </header>

<pre>

To run Tandem:

1) You will need a Genome Sciences user account. Contact https://www.gs.washington.edu/computing/
   to set one up if you don't have such an account.  Once your
   GS account is in good standing, it will need access to a couple
   of our servers to allow you to run the analysis.

   If you're in the Genome Sciences department, you can run
   these searches on the "sage" cluster.  Simply log into "sage"
   and follow directions below.  If you are a UWPR user, you
   could log into "tephra" to access the UWPR cluster.

2) Have your account setup correctly.  This includes passwordless
   authentication on sage/tephra nodes.  This is
   accomplished by adding your public key to the respective server's
   .ssh/authorized_keys file.   This also includes adding the
   following two directories to your PATH environment variable

      /net/pr/vol1/ProteomicsResource/bin/
      /net/pr/vol1/ProteomicsResource/bin/TPP/bin/tpp/bin/

   You also need permission to submit jobs to the respective queues.

   Also run "winesetup.sh" once.  Ignore all error messages about
   permissions.

3) If needed, convert all RAW files to mzXML

   On any of our linux boxes:

      convert.sh *.RAW

   This will run ReAdW under linux/WINE.  Ignore warning/error
   messages about "X server" and "$DISPLAY".  Since processes should
   not be run on the "sage" machine, issue a "qlogin" command
   first to log into a cluster node to run this and subsequent
   commands.

4) Place mzXMLs and a tandem.params in a directory.

   Then on 'tephra', issue the command

      runTandemQ *.mzXML

   This issues one 'qsub' command for each mzXML, with each
   job searching one mzXML file on all cores of a node.

   qsub logs are placed in a 'qsublogs' subdirectory.  Feel free
   to delete this directory after the searches are done; it does
   get deleted as part of running step 5.

   To check the status of the queue:
      qstat 

   To delete all jobs that you submitted:
      qdel -u &lt;userame&gt;

   To delete a specific job number:
      qdel &lt;jobID&gt;

5) When searches are done, you can use runTandemQ to run the
   Prophets.  You can:

   - generate pep.xml files and run PeptideProphet and
     ProteinProphet, combining all runs into a single analysis:

        runTandemQ --wotandem --all *.mzXML

   - generate pep.xml files and run the Prophets individually on
     each input file

        runTandemQ --wotandem --single *.mzXML

   - you can do a combination of --single and --all if you wish.

   Type 'runTandemQ' without any arguments to see all command
   line options.  Of most use would be the '--accurate' flag to
   turn on PeptideProphet's accurate mass model, useful for high
   mass accuracy instruments, and '--decoy &lt;string&gt;' flag
   to specify decoy entries (for a combined target-decoy search).

   Here's one common option:

      runTandemQ --woTandem --single --all --decoy rev_ *.mzXML
   
6) Or you can run the TPP tools with your custom command line
   options using the standard 'xinteract' program.  The input
   would be the individual .pep.xml files generated above.

Just like running Sequest, this requires a tandem.params to be
present in the search directory.  A copy of a tandem.params file
can be found at /net/pr/vol1/ProteomicsResource/bin/tandem.params

The format of this file and how parameters are specified are specific
to X!Tandem and different from sequest.params.  It's probably
easiest if we sit down together to go over things when you're ready.
There are a many parameters specified in some default file (the file
is noted in the "default parameters" tag).  All parameters are inherited
from this default parameters file and then the ones in local the
tandem.params will override the default settings.  Databases are specified
in a 'taxonomy' file so you'll have to learn about that too.

Here's some documentation on the X!Tandem parameters:
<a href="http://www.thegpm.org/tandem/api/">http://www.thegpm.org/tandem/api/</a>

</pre>

</div>
</div>

<?php  include("../__footer.php"); ?>
