---
title: "Comet commands"
permalink: /resources/data-analysis/comet_commands/
redirect_from:
  - /tools/comet_commands/
layout: single
toc: true
toc_sticky: true
classes: no_sidebar
author_profile: false
---

*Instructions for account setup and running Comet on UWPR systems*

The cliff notes version of running a Comet search. If you are not in the Department of Genome Sciences, this page is not for you.

## Quick reference

Generate a comet.params file (similarly, `comet -p` will generate a comet.params.new file):

```
runCometQ --p
mv comet.params.new comet.params
```

Run a search:

```
runCometQ *.raw    (mzXML conversion and search submission in one step)
runCometQ *.mzXML  (if you already did the mzXML conversion)
convert.sh *.raw   (does just the .raw to .mzXML conversions)
```

Check whether searches are running (replace "userid" with your id to list only your jobs):

```
qstat
qstat | grep userid
```

Another way to look at search status, listing all output in the log files including Comet reporting:

```
cat qsublogs/* | less
```

The best way to know whether searches are done is to check that the last line of each .pep.xml file contains "\</msms_pipeline_analysis\>". If you do not see it for every entry, your searches are not complete:

```
tail -n 1 *.pep.xml
```

By default, runCometQ requests job resources for processes that run 48 hours. If your search will likely run longer, use the `--hours` option to request up to 167 hours (7 days) of run time. The only drawback to always requesting 167 hours is that your job could be blocked by a scheduled maintenance a week out that would otherwise not have affected it:

```
runCometQ --hours 167 *.mzXML
```

Example commands after the search:

```
runCometQ --wocomet --all *.RAW
runCometQ --wocomet --deleteraw --single *.mzXML
runCometQ --wocomet --all --decoy DECOY_ *.mzXML
```

Open the .pep.xml or .prot.xml file in your browser. That's it. Type `runCometQ` without arguments to see all options.

## Account setup

1.  You will need a Genome Sciences user account; contact [GS computing](https://www.gs.washington.edu/computing/) to set one up if you do not have one. Once your GS account is in good standing, it needs access to our server, and it needs to be added to the "pr" and "pr-apache_g" groups and to the appropriate cluster collaboration project group. These typically happen via a GSIT authorization request that I make, so send me a note.

    If you are in the Genome Sciences department, you can run these searches on the "sage" cluster: log into sage and follow the directions below. If you have UWPR access, log into "tephra" to access the UWPR cluster.

2.  Set up passwordless authentication on the sage/tephra nodes by adding your public key to the server's .ssh/authorized_keys file. From within your home directory (hit enter at all prompts):

    ```
    ssh-keygen
    cat .ssh/id_rsa.pub >> .ssh/authorized_keys
    ```

3.  Add the UWPR directories to your PATH environment variable. Most GS users have the bash shell by default; edit the .bashrc file in your home directory:

    ```
    nano ~/.bashrc
    ```

    Add the following lines to the end of that file:

    ```
    export PATH=$PATH:/net/pr/vol1/ProteomicsResource/bin/:/net/pr/vol1/ProteomicsResource/bin/TPP/bin/tpp/bin/:/opt/sge/bin/lx-amd64/
    export TMOUT=14400
    export PS1='\n\[`[ $? = 0 ] && X=2 || X=1; tput setaf $X`\]\h $PWD\[`tput sgr0`\]\n> '
    alias cd='cd -P'
    alias rm='rm -i'
    umask 002
    ```

4.  Set or edit the file .sge_request.bak in your home directory, adding one of "-P pr_bruce" or "-P pr_maccoss" as a line in this text file:

    ```
    nano ~/.sge_request.bak
    ```

    (The actual file would be .sge_request, but that globally sets values for all cluster commands, which is bad for users who want to submit jobs to other clusters, so our runCometQ scripts read from .sge_request.bak instead.)

    Also run `winesetup.sh` once and ignore all error messages about permissions. Wine is not installed on nexus2, so this command needs to be run on tephra.

5.  Sign up for an account on the UWPR web application using the "Not registered?" link at the top of the UWPR home page. This is used to set the web password that our analysis tools use to access and view search results. Use the same username as your UW NetID and choose any password you want. Let me know when you have done this step, as I have to complete a manual step to allow your access.

## Running a search

Convert the data to mzXML and run the search in one step:

```
runCometQ *.RAW
```

Or do the mzXML conversion and search separately:

```
convert.sh *.RAW
runCometQ *.mzXML
```

Ignore warning and error messages mentioning "Xserver", "$DISPLAY", "fixme:", etc. during the mzXML conversion step; they come from ReAdW running under a Windows emulator on Linux.

To use the Genome Sciences cluster, ssh into sage and issue a `qlogin`, or ssh into tephra for the UWPR cluster. Unless you are in Foege, you will have to connect through the nexus2 firewall machine first, and then from nexus2 connect to tephra. Windows users can use PuTTY or MobaXterm: ssh to nexus2.gs.washington.edu first and then to tephra.

Each mzXML is submitted (via qsub) as a separate job to the cluster, so one mzXML is searched on one node. In addition to any other output formats you want, make sure "output_pepxmlfile = 1" is set in the params file. The qsub logs are placed in a "qsublogs" subdirectory since many log files are created; feel free to delete this directory after the searches are done (it also gets deleted when the Prophet step below runs).

Check the status of the queue (as of 10/2015 we use a shared job submission queue, so plain `qstat` may show a long list of jobs submitted to different clusters; the second form shows just the UWPR queue):

```
qstat
qstat -q pr-short.q
```

Delete all jobs that you submitted:

```
qdel -u <username>
```

## Running the Prophets

When the searches are done, you can use runCometQ to run the Prophets. Run PeptideProphet and ProteinProphet combining all runs into a single analysis:

```
runCometQ --wocomet --all *.mzXML
```

Or run the Prophets individually on each input file (a combination of `--single` and `--all` also works):

```
runCometQ --wocomet --single *.mzXML
```

Type `runCometQ` without any arguments to see all command line options. Of most use is the `--decoy <string>` flag to specify decoy entries for a combined target-decoy search:

```
runCometQ --wocomet --single --all --decoy rev_ *.mzXML
runCometQ --wocomet --single --all --decoy DECOY_ *.mzXML
```

Alternatively, run the TPP tools with your custom command line options using the standard `xinteract` program, with the individual .pep.xml files generated above as input.

Consider signing up for the UWPR_computation mailing list if you want to be kept abreast of UWPR computational announcements such as Comet software updates and cluster issues.

## Helpful Linux commands

| Command | Description |
|---|---|
| `mkdir directory` | Make a directory |
| `rmdir directory` | Remove an empty directory |
| `rm -rf directory` | Remove a directory that is not empty |
| `rm file` | Remove a file |
| `rm -f file` | Remove a file without prompting |
| `less file` | Show the contents of a (text) file on screen |
| `cp file1 file2` | Copy file1 to file2 |
| `mv file1 file2` | Move or rename file1 to file2 |
| `ln -s file1 file2` | Create a symbolic link from file1 to file2 |
| `cd directory` | Change to directory |
| `cd ..` | Move up a level |
| `ls` | Directory listing |
| `ls -l` | Long directory listing including file size, date, etc. |
| `pwd` | Print the present working directory |
| `nano file` | Simple text editor |
| `history` | List previous commands |
| `!num` | Execute command num from the history |
| up-arrow | Scroll through previous commands |
