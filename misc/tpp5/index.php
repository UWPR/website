<?php  include("../../__header.php"); ?>

<?php  include("../../__menu.php"); ?>

<div id="page">

    <div id="sidebar">

        <!-- Login Box -->
        <?php  include("../../_login.php"); ?>

    </div>


    <div id="content">

        <!-- Image box -->
        <div id="banner">
            <div class="image">
                <a href="#">
                    <img src="/images/sequest.jpg" width="600" height="180" alt="" />
                </a>
            </div>
            <div class="border"></div>
        </div>

    </div>

    <div id="wide-content">

        <div class="box-style1">
            <div class="title">
                <h2><span>Account setup required for TPP 5.0 (2017/02/21)</span></h2>
            </div>

            <div class="content">

      <p>Version of 5.0.0 of the TPP has recenty been released and was updated on our
      servers today (2017/02/21).  Unfortunately an updated version of Perl is required
      for TPP 5.0.  GSIT makes that update available through
      "loadable kernel modules".  This requires a small update to your linux account
      setup as follows.  Add the following 2 lines to the .bashrc and .bash_profile
      files in your home directory:

      <p><tt><b>. /etc/profile.d/modules.sh
      <br>module load modules modules-init modules-gs perl/5.24.0</b></tt>

      <p>Add the lines to the very end of those files if you don't know where else to
      put them. First line does start with a period and a space.
      Once you do this, simply log out and log back in and you should be all
      set.  Type "perl -version" and it should show version Perl 5 version 24 if it worked.
      If you have any problems, contact me (Jimmy) and I'll hopefully be able to
      assist.

      <p>The vast majority of you will be using the "bash" shell but in the small chance
      that you are using a different shell, go add the above lines to
      the appropriate files.  For example, users of the c-shell and tcsh-shells would
      add the lines to the .cshrc and .profile files.

      <p>To continue using the previous TPP 4.8.0 release, simply access the
      tools by specifying their full path, e.g.:

      <p><tt><b>/net/pr/vol1/ProteomicsResource/bin/TPP/bin/20141121-TPP-v4.8.0/bin/xinteract *.pep.xml</b></tt>

<!--
      <p>*** Unfortunately there's an issue in the pep.xml viewer such that there's an
      error message at the top of the screen.  Ignore this for now; hopefully I can
      figure out what's the issue.  UPDATE: 2017/2/22 I managed a workaround hack for this.

      <p><img src="error.png">
-->

   </div>
   </div>
   </div>
<?php  include("../../__footer.php"); ?>
