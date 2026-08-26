<!--
STAGING: NOT PUBLISHED.
This folder is intentionally absent from _config.yml's `include:` list, so Jekyll
ignores it. Content parked here is waiting for its final home.

Origin: _facility/instruments/astral.md (removed 2026-08-26)
Destination: the future Methods & Protocols area under Resources
             (item 3 of the top-menu plan). Move it there and delete this file.
-->

# Orbitrap Astral: method/settings content parked from the instrument page

## Method Templates {#templates}

The following pdf documents summarize some of parameters from the method templates provided by Thermo in their method editor:

- [MethodTemplates_DDA_Astral_SW1.1 (pdf)]({{ site.baseurl }}/assets/docs/instruments/MethodTemplates_DDA_Astral_SW1.1.pdf)
- [MethodTemplates_DIA_Astral_SW1.1 (pdf)]({{ site.baseurl }}/assets/docs/instruments/MethodTemplates_DIA_Astral_SW1.1.pdf)

**Low Level DIA methods**

| Concentration | Isolation width \[Th\] | Injection Time \[ms\] |
|:-------------:|:----------------------:|:---------------------:|
|   \<250 pg    |           20           |          60           |
|  250-500 pg   |           20           |          40           |
|    1-2 ng     |           10           |          20           |
|    2-5 ng     |           8            |          14           |
|    5-10 ng    |           5            |          10           |

## Instrument Settings {#settings}

The table below lists some of the instrument method settings we tested on our Astral.  
We use a EASYnLC UPLC or VanquishNeo with home made columns (35cm x 75μm, Reprosil Pur C18AQ 120Å 5μm) and trap column (EASYnLC: 3cm x 100μm, Reprosil Purc C18AQ 120Å 5μm, VanquishNeo: Thermo trap cartridge ), with 6-45% B (80% ACN, 0.1%FA) in 90min linear gradient. The sample is a Hela cell whole cell tryptic digest (ThermoFisher), 100 ng on column injection. Using the Astral for MS2, we typically get \~30000 unique peptide ID's and 70000 PSM's with Comet search and peptide prophet p\>0.9.  
The results below are based on the number of unique peptide ID's with Comet search and peptide prophet p\>0.9.

| **Tested Setting** | **Best Result (100%)** |
|:---|:---|
| **Software Version** | **Astral 1.1** |
| MS2 ion time, 10ng Hela, unique ID's | 3 (48%), 5 (63%), 10 (84%), 15 (95%),**20 (100%)** |
| MS2 ion time, 10ng Hela, PSM's | 3 (47%), 5 (64%), 10 (87%), 15 (97.5%),**20 (100%)** |
| MS2 ion time, 10ng Hela, protein ID's | 3 (73%), 5 (83%), 10 (96%), 15 (99%),**20 (100%)** |
| MS2 ion time, 100ng Hela, unique ID's | 3 (97%), 5 (99%), **10 (100%)**, 15 (98%),20 (94%) |
| MS2 ion time, 100ng Hela, PSM's | 3 (94%), **5 (100%)**, 10 (92%), 15 (83%),20 (75%) |
| MS2 ion time, 100ng Hela, protein ID's | 3 (98%), **5 (100%)**, 10 (99%), 15 (97%),20 (94%) |
| RF lens voltage, unique ID's | 40 (97.4%), **45 (100%)**, 50 (98.1%), 55 (99.4%), 60 (95.6%), 65 (97.1%) |
| RF lens voltage, PSM's | 40 (97.0%), **45 (100%)**, 50 (98.6%), 55 (99.3%), 60 (94.5%), 65 (95.5%) |
| **Software Version** | **Astral 1.0 SP3** |
| AGC (MS2), unique ID's | AGC 75 (94%), **100 (100%)**, 200 (99%), 300 (98%), 400 (96%), 500 (95%) |
| AGC (MS2), PSM's | AGC 75 (93%), **100 (100%)**, 200 (95%), 300 (88%), 400 (83%), 500 (80%) |
| Isolation width, unique ID's | IsoWidth 0.7 (92.9%), **1.2 (100%)**, 1.6 (98.6%), 2 (98.9%) |
| Isolation width, PSM's | IsoWidth0.7 (60.3%), 1.2 (80.7%), 1.6 (87.4%), **2 (100%)** |
| Collision energy, unique ID's | NCE 25 (99.9%), **30 (100%)**, 35 (90.3%) |
| Collision energy, PSM's | **NCE 25 (100%)**, 30 (97.9%), 35 (88%) |
| MS2 Orbitrap vs Astral, unique ID's | **Astral MS2 (100%)**, Orbitrap MS2 (69%) |
| MS2 Orbitrap vs Astral, PSM's | **Astral MS2 (100%)**, Orbitrap MS2 (37%)\> |
| Gradient (6-45%B) length , unique ID's | **120 min (100%)**, 90 min (94.6%),60 min (81.6%), 30 min (63.3%) |
| Gradient (6-45%B) length , PSM's | **120 min (100%)**, 90 min (88.4%), 60 min (69.2%), 30 min (47.6%) |
| Exploris 480 90 min (100%), unique ID's | Astral 120 min (144%), **90 min (136%)**, 60 min (118%), 30 min (91%) |
| Exploris 480 90 min (100%), unique PSM's | Astral 120 min (279%), **90 min (246%)**, 60 min (193%), 30 min (133%) |
