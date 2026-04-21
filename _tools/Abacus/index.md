---
title: "Abacus"
permalink: /tools/Abacus/
layout: single
toc: true
toc_sticky: true
classes: no_sidebar
author_profile: false
---

*Instructions on running Abacus on UWPR systems*

[Abacus is a TPP compatible spectral counting tool](http://abacustpp.sourceforge.net) developed by the Nesvizshkii lab at the University of Michigan. Here are instructions on how to run it on the command line on our linux systems.

1.  First, generate individual interact-\*.pep.xml and interact-\*.prot.xml files for each of your input groups.
    - If you want separate output columns for each individual search run, you will need to generate individual interact-\*.pep.xml and interact-\*.prot.xml files for each. The easiest way to accomplish this is using a command like:  
      *`runCometQ --wocomet --single *.mzXML`*

      Or if you're using decoys in the search, then use a command like this instead:  
      *`runCometQ --wocomet --single --decoy DECOY_ *.mzXML`*

      Otherwise you would run some command like the following for each of your files:  
      *`xinteract -OAp -Nfile1 file1.pep.xml`*  
      *`xinteract -OAp -Nfile2 file2.pep.xml`*  
      *`xinteract -OAp -Nfile3 file3.pep.xml`*  
      *`xinteract -OAp -Nfile4 file4.pep.xml`*

    - If you want to group runs such that each spectral count column is a group of two or more runs then generate your interact-\* files for the groups. Give your groups some meaningful names (e.g. "group1" and "group2" in the example below).  
      *`xinteract -OAp -Ngroup1 file1.pep.xml file2.pep.xml`*  
      *`xinteract -OAp -Ngroup2 file3.pep.xml file4.pep.xml`*

2.  Next, you need to generate a combined ProteinProphet file using all of the interact-\*.pep.xml files as input. Use this command to do this:  
    *`ProteinProphet interact*.pep.xml interact-COMBINED.prot.xml`*

3.  At this point you should have a set of interact-\*.pep.xml, interact-\*.prot.xml, and an interact-COMBINED.prot.xml files. For some reason, Abacus will attempt to load every file in the directory, including the non-interact pep.xml files and I don't know if this is detrimental or not. In order to keep it from loading the base search files (e.g. file1.pep.xml, file2.pep.xml in the examples above), move those away temporarily into a "bak" subdirectory. Even if these files aren't detrimental, a nice side effect of doing this is reducing the run time by not loading useless files. Note: leave the interact-\*.pep.xml files where they are; only the original base pep.xml files should be moved to the subdirectory.  
    *`mkdir bak`*  
    *`mv file1.pep.xml file2.pep.xml file3.pep.xml file4.pep.xml bak/`*

4.  Grab a copy of the Abacus parameters file:  
    *`cp /net/pr/vol3/www/html/protocols06/Abacus/Abacus_parameters.txt .`*

    This parameters file is set to run Abacus with default settings using NSAF. Hopefully you can figure out how to edit the parameters as needed. If you need help understanding the settings, [here's the Abacus support forum](https://groups.google.com/forum/#!forum/abacus-support). You will need to edit the line entries for:

    - "combinedFile": set the full path to interact-COMBINED.prot.xml file generated in step 2 (replace "/change/me")
    - "srcDir": set the directory that contains your files (replace "/change/me")
    - "outputFile": set where you want the Abacus output to go (replace "/change/me")
    - "fasta": set the fasta file (replace "/change/me/database.fasta")
    - "decoyTag": current set to "DECOY\_" but change this as needed

5.  Now cross your fingers that you did everything right and run Abacus:  
    *`java -Xmx32g -jar /net/pr/vol1/ProteomicsResource/bin/abacus.jar -p Abacus_parameters.txt`*

6.  We can undo step 3 above now:  
    *`mv bak/* .`*  
    *`rmdir bak`*

7.  That's it. Hopefully you now have an "ABACUS_output.tsv" (or whatever you named the output file in step 4) in your search directory.
