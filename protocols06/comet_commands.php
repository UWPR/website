<?php  include("../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <section>
                     <header class="major">
                        <h1>Comet commands</h1>
                        <span class="byline">Instructions for account setup and running Comet on UWPR systems</span>
                     </header>

<p>Cliff notes version to run a Comet search.  If you are not in the Dept. of Genome Sciences, this page is not for you.

<pre>
Generate a comet.params file:

   runCometQ --p
   mv comet.params.new comet.params

   or similarly, "comet -p" will generate a "comet.params.new"

Run a search:

   runCometQ *.raw    (to do mzXML conversion and submit search in 1 step)
   runCometQ *.mzXML  (if you already did mzXML conversion)

   convert.sh *.raw  will do the .raw to .mzXML conversions

To check if searches are running:

   qstat                    (or qstat -q pr-short.q)
   qstat | grep <i>userid</i>      (this will only list out your jobs, replace "userid" with your id)

Another way to look at search status:

   cat qsublogs/* | less     (list out all output in the log files including Comet reporting)

Lastly, the best way to know if searches are done is if the last line of each
.pep.xml file contains "&lt;/msms_pipeline_analysis&gt;".  You can check with the
command below.  If you don't see "&lt;/msms_pipeline_analysis&gt;" for every entry,
it means your searches are not complete.

   tail -n 1 *.pep.xml 

Note by default, runCometQ will request job resources for processes that run 48 hours.  If
your search will likely run longer than 48 hours, use the "--hours" command line option
to request up to 167 hours (7 days) of run time.  This option is currently
implemented for runCometQ.2015022 and newer.  The only drawback to always requesting 167
hours of runtime is that your job could be blocked by a scheduled maintenance that's
1 week out that would otherwise have finished searching before that time.

   runCometQ --hours 167 *.mzXML

Example commands after search:

   runCometQ --wocomet --all *.RAW
   runCometQ --wocomet --deleteraw --single *.mzXML
   runCometQ --wocomet --all --decoy DECOY_ *.mzXML


Open the .pep.xml or .prot.xml file in your browser.  That's it.
Type "runCometQ" without argument to see all options.

------------------------------------------------------------------------------

Helpful linux commands:

mkdir <i>directory</i>      make a directory
rmdir <i>directory</i>      removes an empty directory
rm -rf <i>directory</i>     removes a directory that is not empty
rm <i>file</i>              removes a file
rm -f <i>file</i>           removes a file without prompting
less <i>file</i>            show contents of a (text) file to screen
cp <i>file1</i> <i>file2</i>       copy file1 to file2
mv <i>file1</i> <i>file2</i>       move/rename file1 to file2
ln -s <i>file1</i> <i>file2</i>    create symbolic link from file1 to file2
cd <i>directory</i>         change to directory
cd ..                move up a level/directory
ls                   directory listing
ls -l                long directory listing incl. file size, date, etc.
pwd                  print present working directory
nano <i>file</i>            simple text editor
cp <i>from</i> <i>to</i>           copy command
history              list of previous commands
!<i>num</i>                 execute command <i>num</i> from history
up-arrow             will scroll through previous commands

------------------------------------------------------------------------------

<b>Account setup and cluster commands</b>

1) You will need a Genome Sciences user account. Contact https://www.gs.washington.edu/computing/
   to set one up if you don't have such an account.  Once your GS account is in
   good standing, it will need access to our server to allow you to
   run the analysis.  Your account will also need to be added to the 'pr' and
   'pr-apache_g' groups which typically happens via a GSIT authorization
   request that I make.

   If you're in the Genome Sciences department, you can run these searches on the
   "sage" cluster.  Simply log into "sage" and follow directions below.  If you
   have UWPR access, you could log into "tephra" to access the UWPR cluster.

2) You will need to be added to the "pr" and "pr-apache_g" groups in order to login
   to tephra or any other UWPR machines.  And ou will need to be added to the
   appropriate cluster collaboration project group.  <a href="mailto:engj@uw.edu">Send me a note</a>
   and I'll make that request.

   Have your account setup correctly.  This includes passwordless authentication
   on sage/tephra nodes.  This is accomplished by adding your public key to the
   respective server's .ssh/authorized_keys file.  You can do this by typing the
   following two commands from within your home directory:

      ssh-keygen  <i>&lt;hit enter to all prompts&gt;</i>
      cat .ssh/id_rsa.pub &gt;&gt; .ssh/authorized_keys

   This also includes adding the following two directories to your PATH environment
   variable:

      /net/pr/vol1/ProteomicsResource/bin/
      /net/pr/vol1/ProteomicsResource/bin/TPP/bin/tpp/bin/

   Most GS users will have the 'bash' shell by default.  For this shell, edit the
   .bashrc file in your home directory.  Do this using

      nano ~/.bashrc

   Add the following lines to the end of that file

   export PATH=$PATH:/net/pr/vol1/ProteomicsResource/bin/:/net/pr/vol1/ProteomicsResource/bin/TPP/bin/tpp/bin/:/opt/sge/bin/lx-amd64/
   export TMOUT=14400
   export PS1='\n\[`[ $? = 0 ] &amp;&amp; X=2 || X=1; tput setaf $X`\]\h $PWD\[`tput sgr0`\]\n&gt; '
   alias cd='cd -P'
   alias rm='rm -i'
   umask 002


   As of 10/2015, you will also need to set/edit the file .sge_request.bak in
   your home directory.  Add one of "-P pr_bruce" or "-P pr_maccoss"
   as a line in this text file.

      nano ~/.sge_request.bak

   Also run "winesetup.sh" once.  Ignore all error messages about permissions.
   (Actual file should be .sge_request but that globally sets values for all
   cluster commands which is bad for users who want to submit jobs to other
   clusters.  So I edited our runCometQ scripts to read from .sge_request.bak.)
   Wine is not installed on nexus2 so this command needs to be run on tephra.

<!--
   As of 2017/02/21 with the TPP 5.0 update, your account needs to be setup to
   run an updated Perl that's available through kernel modules.  So add the
   following 2 lines to your .bashrc and .bash_profile files in your home
   directory (assuming you're using the bash shell):

      . /etc/profile.d/modules.sh 
      module load modules modules-init modules-gs perl/5.24.0
-->
2a) Sign up for an account on the UWPR web application using the "<a href="http://proteomicsresource.washington.edu/pr/viewRegister.do">Not registered?</a>"
   link at the top of the UWPR home page.  For our purposes, this is simply used to
   set your web password that our analysis tools use to access/view search results.
   Use the same username as your UW NetID.  Choose any password you want.  Again,
   this is for access to visualize data through our web server which requires its
   own authentication.  

   Let me know that you did this step as I have to do a manual step with this
   in order to allow your access.

3) Convert data to mzXML and run search:

      runCometQ *.RAW

   Or if you want to do the mzXML conversion and search separately:

      convert.sh *.RAW
      runCometQ *.mzXML

   Ignore warning/error messages mentioning "Xserver", "$DISPLAY", "fixme:",
   etc.  which come up doing the mzXML conversion step (using ReAdW running
   under a Windows emulator on linux).

   To use the Genome Sciences cluster, 'ssh' into sage and issue a 'qlogin'.
   Or 'ssh' into 'tephra'.

   Unless you're in Foege, you will have to connect through the nexus2 firewall
   machine first.  And then from nexus2, connect to tephra.  For Windows users,
   use the <a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html">PuTTy</a> program.  Actually my favorite Windows terminal program is
   now <a href="http://proteomicsresource.washington.edu/protocols06/comet_commands.php">MobaXterm</a>.  So in either program, ssh to nexus2.gs.washington.edu first
   and then to tephra.

   This will submit (aka 'qsub') each mzXML as a separate 'job' to the cluster
   i.e. one mzXML will be searched on one node.  In addition to any other
   output formats you want, make sure to set "output_pepxmlfile = 1" in the
   params file.

   qsub logs are placed in a 'qsublogs' subdirectory since there are going to
   be many log files created.  Feel free to delete this directory after the
   searches are done; it does get deleted as part of running step 5.

   To check the status of the queue:

      qstat

   To delete all jobs that you submitted:

      qdel -u &lt;username&gt;

   Note that as of 10/2015, we switched over to using a shared job submission
   queue so 'qstat' may show a long list of jobs that are submitted to different
   clusters.  To just see the UWPR queue, use:

      qstat -q pr-short.q

4) When searches are done, you can use runCometQ to run the Prophets.  You can:

   - run PeptideProphet and ProteinProphet, combining all runs into a single
     analysis:

        runCometQ --wocomet --all *.mzXML

   - run the Prophets individually on each input file

        runCometQ --wocomet --single *.mzXML

   - you can do a combination of --single and --all if you wish.

   Type 'runCometQ' without any arguments to see all command line options.  Of
   most use would be the '--decoy &lt;string&gt;' flag to specify decoy entries (for
   a combined target-decoy search).

   Here's one common option:

      runCometQ --wocomet --single --all --decoy rev_ *.mzXML

   Another example with Comet internal decoys:

      runCometQ --wocomet --single --all --decoy DECOY_ *.mzXML
   
5) Or you can run the TPP tools with your custom command line options using
   the standard 'xinteract' program.  The input would be the individual
   .pep.xml files generated above.


6) Consider signing up for the <a href="http://mailman.u.washington.edu/mailman/listinfo/uwpr_computation">UWPR_computation mailing list</a> if you want to be
   kept abreast of UWPR computational announcements such as Comet software
   updates, cluster issues, etc.  You can subscribe/unsubscribe at the link
   above.
</pre>

</div>
</div>

<?php  include("../__footer.php"); ?>
