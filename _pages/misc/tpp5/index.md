---
title: "Index"
permalink: /misc/tpp5/
---

[![]({{ site.baseurl }}/images/sequest.jpg){width="600" height="180"}](#)

## Account setup required for TPP 5.0 (2017/02/21)

Version of 5.0.0 of the TPP has recenty been released and was updated on our servers today (2017/02/21). Unfortunately an updated version of Perl is required for TPP 5.0. GSIT makes that update available through "loadable kernel modules". This requires a small update to your linux account setup as follows. Add the following 2 lines to the .bashrc and .bash_profile files in your home directory:

**`. /etc/profile.d/modules.sh`  
`module load modules modules-init modules-gs perl/5.24.0`**

Add the lines to the very end of those files if you don't know where else to put them. First line does start with a period and a space. Once you do this, simply log out and log back in and you should be all set. Type "perl -version" and it should show version Perl 5 version 24 if it worked. If you have any problems, contact me (Jimmy) and I'll hopefully be able to assist.

The vast majority of you will be using the "bash" shell but in the small chance that you are using a different shell, go add the above lines to the appropriate files. For example, users of the c-shell and tcsh-shells would add the lines to the .cshrc and .profile files.

To continue using the previous TPP 4.8.0 release, simply access the tools by specifying their full path, e.g.:

**`/net/pr/vol1/ProteomicsResource/bin/TPP/bin/20141121-TPP-v4.8.0/bin/xinteract *.pep.xml`**
