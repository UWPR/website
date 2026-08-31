---
title: "Running Crux at UWPR"
permalink: /resources/data-analysis/crux/
redirect_from:
  - /tools/crux/
layout: single
classes: no_sidebar
author_profile: false
---

*Instructions for running the Crux toolkit on UWPR systems*

1.  Do not run Crux on the "tephra" head node of our cluster. Instead, ssh into sage (the Genome Sciences department cluster front end) or tephra (the UWPR cluster front end) and type `qlogin`. This gets you a shell on a cluster node with more resources (memory and CPU) than the head nodes.

2.  Set up your environment to run Crux with the following module command (some of these modules may be deprecated now). As a shortcut, paste it into your .bashrc file:

    ```
    module load modules modules-init modules-gs/prod gmp/latest mpfr/latest mpc/latest gcc/latest
    ```

    Next, log into a cluster node and request 14 GB of free memory (tephra nodes have 16 GB of total RAM):

    ```
    qlogin -l h_vmem=14G
    ```

3.  The binary is named "crux". Type it without arguments to see the usage statement. To see what version of Crux is installed (version 3.2-91fd064 as of 2020/04/30):

    ```
    crux version
    ```

    You will likely run commands like:

    ```
    crux spectral-count ...
    crux percolator ...
    crux tide-search ...
    crux comet ...
    ```

4.  Crux documentation and tutorials are at [crux.ms](https://crux.ms/).

5.  For Crux questions, ask on the [crux-users mailing list](https://groups.google.com/g/crux-users).
