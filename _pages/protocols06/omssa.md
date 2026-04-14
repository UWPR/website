---
title: "OMSSA"
permalink: /protocols06/omssa/
---

*The Open Mass Spectrometry Search Algorithm*

OMSSA was developed by Lewis Geer at NCBI/NIH. This page is my OMSSA help page resource. Given that all parameters are specified on the omssacl command line, I wanted a single page where they are all listed for easy reference. The help text for OMSSA version 2.1.9 are listed below. Actually the download unpacks a 2.1.9 directory but the version output states 2.1.8. I'll assume they forgot to update the version string in the linux binary as the other distributions also unpack to a 2.1.9 directory.

Unfortunately OMSSA is no longer being supported at NIH.

- **Selected OMSSA publications**
- "Open mass spectrometry search algorithm." Geer LY, Markey SP, Kowalak JA, Wagner L, Xu M, Maynard DM, Yang X, Shi W, Bryant SH. J Proteome Res. 2004 Sep-Oct;3(5):958-64. [link](http://pubs.acs.org/cgi-bin/abstract.cgi/jprobs/2004/3/i05/abs/pr0499491.html)

<!-- -->

- **Example OMSSA command line**

- omssacl -e 16 -i 1,4 -mf 3 -mv 1 -tem 0 -tom 0 -te 1.0 -to 0.5 -tez 1 -he 100000.0 -zcc 1 -hl 5

  - semi-tryptic search (-e 16)
  - b/y-ions (-i 1,4)
  - carbamidomethyl C static mod (-mf 3)
  - oxidized M variable mod (-mv 1)
  - monoisotopic precursor (-tem 0)
  - monoisotopic fragments (-tom 0)
  - precursor tolerance 1.0 (-te 1.0)
  - fragment tolerance 0.5 (-to 0.5)
  - linear charge dependency of precursor charge (-tez 1)
  - maximum e-value 100000.0 (-he 100000.0)
  - believe precursor charge (-zcc 1)
  - retain top 5 hits (-hl 5)

<!-- -->

    USAGE
      omssacl [-h] [-help] [-xmlhelp] [-pm param] [-d blastdb] [-umm] [-f infile]
        [-fx xmlinfile] [-fb dtainfile] [-fp pklinfile] [-fm pklinfile]
        [-foms omsinfile] [-fomx omxinfile] [-fbz2 bz2infile] [-fxml omxinfile]
        [-o textasnoutfile] [-ob binaryasnoutfile] [-ox xmloutfile]
        [-obz2 bz2outfile] [-op pepxmloutfile] [-oc csvfile] [-w] [-to pretol]
        [-te protol] [-tom promass] [-tem premass] [-tez prozdep] [-ti isotopes]
        [-teppm] [-ta autotol] [-tex exact] [-i ions] [-cl cutlo] [-ch cuthi]
        [-ci cutinc] [-cp precursorcull] [-v cleave] [-x taxid] [-w1 window1]
        [-w2 window2] [-h1 hit1] [-h2 hit2] [-hl hitlist] [-hc hitcount]
        [-ht tophitnum] [-hm minhit] [-hs minspectra] [-he evalcut] [-mf fixedmod]
        [-mv variablemod] [-mnm] [-mm maxmod] [-e enzyme] [-zh maxcharge]
        [-zl mincharge] [-zoh maxprodcharge] [-zt chargethresh] [-z1 plusone]
        [-zc calcplusone] [-zcc calccharge] [-zn negions] [-pc pseudocount]
        [-sb1 searchb1] [-sct searchcterm] [-sp productnum] [-scorr corrscore]
        [-scorp corrprob] [-no minno] [-nox maxno] [-is subsetthresh]
        [-ir replacethresh] [-ii iterativethresh] [-p prolineruleions] [-il] [-el]
        [-ml] [-mx modinputfile] [-mux usermodinputfile] [-nt numthreads] [-ni]
        [-ns] [-os] [-nrs] [-logfile File_Name] [-conffile File_Name] [-version]
        [-version-full] [-dryrun]

    DESCRIPTION
       Search engine for identifying MS/MS peptide spectra

    OPTIONAL ARGUMENTS
     -h
       Print USAGE and DESCRIPTION;  ignore other arguments
     -help
       Print USAGE, DESCRIPTION and ARGUMENTS description;  ignore other arguments
     -xmlhelp
       Print USAGE, DESCRIPTION and ARGUMENTS description in XML format;  ignore
       other arguments
     -pm <String>
       search parameter input in xml format (overrides command line)
       Default = `'
     -d <String>
       Blast sequence library to search. Do not include .p* filename suffixes.
       Default = `nr'
     -umm
       use memory mapped sequence libraries
     -f <String>
       single dta file to search
       Default = `'
     -fx <String>
       multiple xml-encapsulated dta files to search
       Default = `'
     -fb <String>
       multiple dta files separated by blank lines to search
       Default = `'
     -fp <String>
       pkl formatted file
       Default = `'
     -fm <String>
       mgf formatted file
       Default = `'
     -foms <String>
       omssa oms file
       Default = `'
     -fomx <String>
       omssa omx file
       Default = `'
     -fbz2 <String>
       omssa omx file compressed by bzip2
       Default = `'
     -fxml <String>
       omssa xml search request file
       Default = `'
     -o <String>
       filename for text asn.1 formatted search results
       Default = `'
     -ob <String>
       filename for binary asn.1 formatted search results
       Default = `'
     -ox <String>
       filename for xml formatted search results
       Default = `'
     -obz2 <String>
       filename for bzip2 compressed xml formatted search results
       Default = `'
     -op <String>
       filename for pepXML formatted search results
       Default = `'
     -oc <String>
       filename for csv formatted search summary
       Default = `'
     -w
       include spectra and search params in search results
     -to <Real>
       product ion m/z tolerance in Da
       Default = `0.8'
     -te <Real>
       precursor ion m/z tolerance in Da (or ppm if -teppm flag set)
       Default = `2.0'
     -tom <Integer>
       product ion search type (0 = mono, 1 = avg, 2 = N15, 3 = exact)
       Default = `0'
     -tem <Integer>
       precursor ion search type (0 = mono, 1 = avg, 2 = N15, 3 = exact, 4 =
       multiisotope)
       Default = `0'
     -tez <Integer>
       charge dependency of precursor mass tolerance (0 = none, 1 = linear)
       Default = `0'
     -ti <Integer>
       when doing multiisotope search, number of isotopic peaks to search.  0 =
       monoisotopic peak only
       Default = `0'
     -teppm
       search precursor masses in units of ppm
     -ta <Real>
       automatic mass tolerance adjustment fraction
       Default = `1.0'
     -tex <Real>
       threshold in Da above which the mass of neutron should be added in exact
       mass search
       Default = `1446.94'
     -i <String>
       id numbers of ions to search (comma delimited, no spaces)
       Default = `1,4'
     -cl <Real>
       low intensity cutoff as a fraction of max peak
       Default = `0.0'
     -ch <Real>
       high intensity cutoff as a fraction of max peak
       Default = `0.2'
     -ci <Real>
       intensity cutoff increment as a fraction of max peak
       Default = `0.0005'
     -cp <Integer>
       eliminate charge reduced precursors in spectra (0=no, 1=yes)
       Default = `0'
     -v <Integer>
       number of missed cleavages allowed
       Default = `1'
     -x <String>
       comma delimited list of taxids to search (0 = all)
       Default = `0'
     -w1 <Integer>
       single charge window in Da
       Default = `27'
     -w2 <Integer>
       double charge window in Da
       Default = `14'
     -h1 <Integer>
       number of peaks allowed in single charge window (0 = number of ion species)
       Default = `2'
     -h2 <Integer>
       number of peaks allowed in double charge window (0 = number of ion species)
       Default = `2'
     -hl <Integer>
       maximum number of hits retained per precursor charge state per spectrum
       during the search
       Default = `30'
     -hc <Integer>
       maximum number of hits reported per spectrum (0 = all)
       Default = `0'
     -ht <Integer>
       number of m/z values corresponding to the most intense peaks that must
       include one match to the theoretical peptide
       Default = `6'
     -hm <Integer>
       the minimum number of m/z matches a sequence library peptide must have for
       the hit to the peptide to be recorded
       Default = `2'
     -hs <Integer>
       the minimum number of m/z values a spectrum must have to be searched
       Default = `4'
     -he <Real>
       the maximum evalue allowed in the hit list
       Default = `1'
     -mf <String>
       comma delimited (no spaces) list of id numbers for fixed modifications
       Default = `'
     -mv <String>
       comma delimited (no spaces) list of id numbers for variable modifications
       Default = `'
     -mnm
       n-term methionine should not be cleaved
     -mm <Integer>
       the maximum number of mass ladders to generate per database peptide
       Default = `128'
     -e <Integer>
       id number of enzyme to use
       Default = `0'
     -zh <Integer>
       maximum precursor charge to search when not 1+
       Default = `3'
     -zl <Integer>
       minimum precursor charge to search when not 1+
       Default = `1'
     -zoh <Integer>
       maximum product charge to search
       Default = `2'
     -zt <Integer>
       minimum precursor charge to start considering multiply charged products
       Default = `3'
     -z1 <Real>
       fraction of peaks below precursor used to determine if spectrum is charge 1
       Default = `0.95'
     -zc <Integer>
       should charge plus one be determined algorithmically? (1=yes)
       Default = `1'
     -zcc <Integer>
       how should precursor charges be determined? (1=believe the input file,
       2=use a range)
       Default = `2'
     -zn <Integer>
       search using negative or positive ions (1=positive, -1=negative)
       Default = `1'
     -pc <Integer>
       minimum number of precursors that match a spectrum
       Default = `1'
     -sb1 <Integer>
       should first forward (b1) product ions be in search (1=no)
       Default = `1'
     -sct <Integer>
       should c terminus ions be searched (1=no)
       Default = `0'
     -sp <Integer>
       max number of ions in each series being searched (0=all)
       Default = `100'
     -scorr <Integer>
       turn off correlation correction to score (1=off, 0=use correlation)
       Default = `0'
     -scorp <Real>
       probability of consecutive ion (used in correlation correction)
       Default = `0.5'
     -no <Integer>
       minimum size of peptides for no-enzyme and semi-tryptic searches
       Default = `4'
     -nox <Integer>
       maximum size of peptides for no-enzyme and semi-tryptic searches (0=none)
       Default = `40'
     -is <Real>
       evalue threshold to include a sequence in the iterative search, 0 = all
       Default = `0.0'
     -ir <Real>
       evalue threshold to replace a hit, 0 = only if better
       Default = `0.0'
     -ii <Real>
       evalue threshold to iteratively search a spectrum again, 0 = always
       Default = `0.01'
     -p <String>
       id numbers of ion series to apply no product ions at proline rule at (comma
       delimited, no spaces)
       Default = `'
     -il
       print a list of ions and their corresponding id number
     -el
       print a list of enzymes and their corresponding id number
     -ml
       print a list of modifications and their corresponding id number
     -mx <String>
       file containing modification data
       Default = `mods.xml'
     -mux <String>
       file containing user modification data
       Default = `usermods.xml'
     -nt <Integer>
       number of search threads to use, 0=autodetect
       Default = `0'
     -ni
       don't print informational messages
     -ns
       depreciated flag
     -os
       use omssa 1.0 scoring
     -nrs
       turn off rank score
     -logfile <File_Out>
       File to which the program log should be redirected
     -conffile <File_In>
       Program's configuration (registry) data file
     -version
       Print version number;  ignore other arguments
     -version-full
       Print extended version data;  ignore other arguments
     -dryrun
       Dry run the application: do nothing, only test all preconditions

    -i options:
    0: a
    1: b
    2: c
    3: x
    4: y
    5: zdot
    10: adot
    11: x-CO2
    12: adot-CO2

    -e enzyme options:
    0: Trypsin
    1: Arg-C
    2: CNBr
    3: Chymotrypsin (FYWL)
    4: Formic Acid
    5: Lys-C
    6: Lys-C, no P rule
    7: Pepsin A
    8: Trypsin+CNBr
    9: Trypsin+Chymotrypsin (FYWLKR)
    10: Trypsin, no P rule
    11: Whole protein
    12: Asp-N
    13: Glu-C
    14: Asp-N+Glu-C
    15: Top-Down
    16: Semi-Tryptic
    17: No Enzyme
    18: Chymotrypsin, no P rule (FYWL)
    19: Asp-N (DE)
    20: Glu-C (DE)
    21: Lys-N (K)
    22: Thermolysin, no P rule
    23: Semi-Chymotrypsin (FYWL)
    24: Semi-Glu-C

    Modifications:
     # : Name
     23: 2-amino-3-oxo-butanoic acid T
    182: Asparagine HexNAc
    183: Asparagine dHexHexNAc
    131: CAMthiopropanoyl K
    130: ICAT heavy
    129: ICAT light
      9: M cleavage from protein n-term
    179: MMTS on C
    119: N to D conversion
     83: NEM C
     84: NIPCAM
     87: O18 on peptide n-term
    139: PNGasF in O18 water
    113: SeMet
    184: Serine HexNAc
    185: Threonine HexNAc
     24: acetylation of K
     10: acetylation of protein n-term
     25: amidation of peptide c-term
    163: arginine to ornithine
    140: beta elimination of S
    141: beta elimination of T
     13: beta methythiolation of D
     26: beta-methylthiolation of D
      3: carbamidomethyl C
     31: carbamylation of K
     32: carbamylation of n-term peptide
     29: carboxyamidomethylation of D
     30: carboxyamidomethylation of E
     28: carboxyamidomethylation of H
     27: carboxyamidomethylation of K
    165: carboxykynurenin of W
      2: carboxymethyl C
     33: citrullination of R
      4: deamidation of N and Q
    164: dehydro of S and T
     88: di-O18 on peptide n-term
     35: di-iodination of Y
     36: di-methylation of K
     37: di-methylation of R
     38: di-methylation of peptide n-term
     42: farnesylation of C
     46: fluorophenylalanine
     43: formylation of K
     44: formylation of peptide n-term
     82: formylation of protein n-term
     47: gamma-carboxylation of D
     48: gamma-carboxylation of E
     49: geranyl-geranyl
     50: glucuronylation of protein n-term
     51: glutathione disulfide
     53: guanidination of K
    136: heavy arginine-13C6
    137: heavy arginine-13C6-15N4
    181: heavy lysine - 13C6 15N2
    180: heavy lysine - 2H4
    138: heavy lysine-13C6
     56: homoserine
     57: homoserine lactone
     64: hydroxylation of  Y
     59: hydroxylation of D
     63: hydroxylation of F
     60: hydroxylation of K
     61: hydroxylation of N
     62: hydroxylation of P
    168: iTRAQ114 on K
    169: iTRAQ114 on Y
    167: iTRAQ114 on nterm
    171: iTRAQ115 on K
    172: iTRAQ115 on Y
    170: iTRAQ115 on nterm
    174: iTRAQ116 on K
    175: iTRAQ116 on Y
    173: iTRAQ116 on nterm
    177: iTRAQ117 on K
    178: iTRAQ117 on Y
    176: iTRAQ117 on nterm
     65: iodination of Y
     67: lipoyl K
     73: methyl C
     74: methyl H
     75: methyl N
     77: methyl R
     69: methyl ester of D
     70: methyl ester of E
     71: methyl ester of S
     72: methyl ester of Y
     68: methyl ester of peptide c-term
     16: methylation of D
     17: methylation of E
      0: methylation of K
     14: methylation of Q
     18: methylation of peptide c-term
     76: methylation of peptide n-term
     11: methylation of protein n-term
     78: myristoleylation of G
     79: myristoyl-4H of G
     81: myristoylation of K
     80: myristoylation of peptide n-term G
    118: n-acyl diglyceride cysteine
     22: n-formyl met addition
     34: oxidation of C to cysteic acid
    162: oxidation of C to sulfinic acid
     39: oxidation of F to dihydroxyphenylalanine
     89: oxidation of H
     55: oxidation of H to D
     54: oxidation of H to N
      1: oxidation of M
    111: oxidation of P to pyroglutamic acid
     90: oxidation of W
     45: oxidation of W to formylkynurenin
     58: oxidation of W to hydroxykynurenin
     66: oxidation of W to kynurenin
     85: oxidation of W to nitro
     86: oxidation of Y to nitro
     92: palmitoylation of C
     93: palmitoylation of K
     94: palmitoylation of S
     95: palmitoylation of T
     91: phosphopantetheine S
      6: phosphorylation of S
    134: phosphorylation of S with ETD loss
     96: phosphorylation of S with prompt loss
      7: phosphorylation of T
    135: phosphorylation of T with ETD loss
     97: phosphorylation of T with prompt loss
      8: phosphorylation of Y
     99: phosphorylation with neutral loss on C
    100: phosphorylation with neutral loss on D
    101: phosphorylation with neutral loss on H
    132: phosphorylation with neutral loss on S
    133: phosphorylation with neutral loss on T
     98: phosphorylation with prompt loss on Y
      5: propionamide C
    104: propionyl heavy K
    105: propionyl heavy peptide n-term
    102: propionyl light K
    103: propionyl light on peptide n-term
    106: pyridyl K
    107: pyridyl peptide n-term
    108: pyro-cmC
    109: pyro-glu from n-term E
    110: pyro-glu from n-term Q
    112: s-pyridylethylation of C
    114: sulfation of Y
    115: sulphone of M
    166: sumoylation of K
     40: thioacylation of K
     41: thioacylation of peptide n-term
     19: tri-deuteromethylation of D
     20: tri-deuteromethylation of E
     21: tri-deuteromethylation of peptide c-term
    116: tri-iodination of Y
     15: tri-methylation of K
    117: tri-methylation of R
     12: tri-methylation of protein n-term
     52: ubiquitinylation residue
