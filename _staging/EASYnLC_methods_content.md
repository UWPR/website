<!--
STAGING: NOT PUBLISHED.
This folder is intentionally absent from _config.yml's `include:` list, so Jekyll
ignores it. Content parked here is waiting for its final home.

Origin: _facility/instruments/EASYnLC.md (removed 2026-08-26)
Destination: the future Methods & Protocols area under Resources
             (item 3 of the top-menu plan). Move it there and delete this file.

NOTE: the Virtual Display section below contains the EASY-nLC Linux login
(hplc / hplchplc, Thermo's factory default). Decide whether that belongs on a
public page when this content gets its new home.
-->

# EASY-nLC: method/protocol content parked from the instrument page

## Virtual Display {#virtualdisplay}

The EASY-nLC can be controlled directly via the-built in touchscreen. You can also setup the virtual display on the pc so it can be controlled from the pc, this is particularly useful if you wish to remotely control the system.

**How to restart the virtual display (e.g. after rebooting the PC):**  
[Detailed guide how to restart the virtual display (pdf)]({{ site.baseurl }}/assets/docs/instruments/EASYnLC_reconnect_virtual_display.pdf)

- Open "Instrument Configuration," select the EASYnLC and Configure
- Test Connection and select the plate installed and click ok and done.

  ![]({{ site.baseurl }}/assets/images/instruments/EASYnLC_01.png)

- Open Putty by double clicking on "putty.exe" located on the desktop
- Under Sessions/Saved Sessions select "EASYnLC" and click "Load" and then "Open"
- login as: hplc
- Password: hplchplc
- use the up arrow to reload the last command or type: **x11vnc -q -display :0**  
  after hitting enter you should see this:

  ![]({{ site.baseurl }}/assets/images/instruments/EASYnLC_02a.png)

- If you don't see that type this alternate command (EASY-nLC 7): **x11vnc -env FD_XDM=1 -auth guess**

- Open "TightVNC Viewer" located on the desktop
- In the "TightVNC Server" field type: **localhost::5901**
- then hit "connect" to open the virtual display of the EASY-nLC touchscreen

  ![]({{ site.baseurl }}/assets/images/instruments/EASYnLC_03a.png)

  **Initial setup of Putty and the virtual display (e.g. on a new PC):**  
  [Guide how to initially setup the virtual display (pdf)]({{ site.baseurl }}/assets/docs/instruments/EASYnLC_setup_virtual_display.pdf)

## LogViewer

the following document describes how to use the LogViewer to view the EASYnLC pressure trace.

- [Log Viewer usage(pdf)]({{ site.baseurl }}/assets/docs/instruments/EASYnLC_LogViewer.pdf)

You can download the zip file containing the log viewer.

- [EASY_nLC Log Viewer 2.18 (zip)](https://proteomicsresource.washington.edu/docs/instruments/LogViewer218.zip)

## Consumables

the following document includes part numbers for AS vials, columns trap cartridges etc needed to use the VanquishNeo

- [LC-MS commonly used consumables for EASYnLC (xlsx)]({{ site.baseurl }}/assets/docs/instruments/LC_MS_Consumables_EASYnLC.xlsx)
- [Simple peptide standards for LC-MS (xlsx)]({{ site.baseurl }}/assets/docs/protocols05/AngioNeuroStandard.xlsx)

## HPLC setup {#hplcsetup}

the following document includes guidelines to setup the capillary trap/column on our LC-MS systems, this is intended as a supplement to the hands-on training required to use the UWPR instruments.

- [LC-MS setup procedure EASYnLC(pdf)]({{ site.baseurl }}/assets/docs/instruments/UWPR_LC_MS_setup_EASYnLC.pdf)
- [Simple peptide standards for LC-MS (xlsx)]({{ site.baseurl }}/assets/docs/protocols05/AngioNeuroStandard.xlsx)

## Solvent filters {#solventfilters}

We noticed air leaks originating from the original solvent filter cartridges. So we decided to replace them with a different setup:  
Guide how to setup alternate EASY-nLC solvent filters [see pdf]({{ site.baseurl }}/assets/docs/instruments/EASYnLC_SolventBottleFilters.pdf)
