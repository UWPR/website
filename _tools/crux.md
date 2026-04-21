---
title: "Running Crux at UWPR"
permalink: /tools/crux/
layout: single
toc: true
toc_sticky: true
classes: no_sidebar
author_profile: false
---

1) Do not run Crux on the 'tephra' head node of our cluster.  You should 'ssh' into sage
      (Genome Sciences department cluster front end) or tephra (UWPR cluster front end) and then
       type 'qlogin'.  This will get you a shell on a cluster node with more resources (memory/CPU)
       than the head nodes.

    2) You will need to setup your environment to run Crux.

       Run the following module command (some of which may be deprecated now):

          module load modules modules-init modules-gs/prod gmp/latest mpfr/latest mpc/latest gcc/latest

       As a shortcut, paste these commands into your .bashrc file. 

       Next, log into a cluster node and request 14GB free memory (tephra nodes have 16GB total RAM):

          qlogin -l h_vmem=14G

    2) The binary is named 'crux'.  Type that without arguments to see the usage statement.

       To see what version of Crux is installed (version 3.2-91fd064 as of 2020/04/30), you can type:

          crux version

       You'll likely run commands like

          crux spectral-count ...
          crux percolator ...
          crux tide-search ...
          crux comet ...

    3) You can find Crux documentation and tutorials here.

    4) For Crux questions, ask them on the mailing list here.
