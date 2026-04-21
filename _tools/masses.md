---
title: "Amino Acid Mass Table"
permalink: /tools/masses/
layout: single
toc: true
toc_sticky: true
classes: no_sidebar
author_profile: false
---

Here's the set of monoisotopic and average amino masses and elemental mass values we use in our tools developed here. The amino acid masses are based on the sum of the elemental masses where the elemental masses are from [Unimod](http://www.unimod.org/masses.html). You can also download [this spreadsheet]({{ site.baseurl }}/docs/amino_acid_masses.xlsx) where the average and monoisotopic masses for each amino acid are calculated within the spreadsheet from the listed elemental values (that you can change). Please [send me an email](mailto:engj@uw.edu) if you notice an error! Note that these masses are residue masses as they appear in a peptide or protein. Add the N-terminus (H) and C-terminus (OH) groups to calculate the neutral mass of the peptide/protein.

|   amino acid   | code | abbrev |    composition     |   mono mass   | avg mass  |
|:--------------:|:----:|:------:|:------------------:|:-------------:|:---------:|
|    glycine     |  G   |  GLY   |     C~2~H~3~NO     | 57.021463735  | 57.05132  |
|    alanine     |  A   |  ALA   |     C~3~H~5~NO     | 71.037113805  |  71.0779  |
|     serine     |  S   |  SER   |   C~3~H~5~NO~2~    | 87.032028435  |  87.0773  |
|    proline     |  P   |  PRO   |     C~5~H~7~NO     | 97.052763875  | 97.11518  |
|     valine     |  V   |  VAL   |     C~5~H~9~NO     | 99.068413945  | 99.13106  |
|   threonine    |  T   |  THR   |   C~4~H~7~NO~2~    | 101.047678505 | 101.10388 |
|    cysteine    |  C   |  CYS   |    C~3~H~5~NOS     | 103.009184505 | 103.1429  |
|    leucine     |  L   |  LEU   |    C~6~H~11~NO     | 113.084064015 | 113.15764 |
|   isoleucine   |  I   |  ILE   |    C~6~H~11~NO     | 113.084064015 | 113.15764 |
|   asparagine   |  N   |  ASN   |  C~4~H~6~N~2~O~2~  | 114.042927470 | 114.10264 |
| aspartic acid  |  D   |  ASP   |   C~4~H~5~NO~3~    | 115.026943065 | 115.0874  |
|   glutamine    |  Q   |  GLN   |  C~5~H~8~N~2~O~2~  | 128.058577540 | 128.12922 |
|     lysine     |  K   |  LYS   |   C~6~H~12~N~2~O   | 128.094963050 | 128.17228 |
| glutamic acid  |  E   |  GLU   |   C~5~H~7~NO~3~    | 129.042593135 | 129.11398 |
|   methionine   |  M   |  MET   |    C~5~H~9~NOS     | 131.040484645 | 131.19606 |
|   histidine    |  H   |  HIS   |   C~6~H~7~N~3~O    | 137.058911875 | 137.13928 |
| phenylalanine  |  F   |  PHE   |     C~9~H~9~NO     | 147.068413945 | 147.17386 |
| selenocysteine |  U   |  SEC   |    C~3~H~5~NOSe    | 150.953633405 | 150.3079  |
|    arginine    |  R   |  ARG   |   C~6~H~12~N~4~O   | 156.101111050 | 156.18568 |
|    tyrosine    |  Y   |  TYR   |   C~9~H~9~NO~2~    | 163.063328575 | 163.17326 |
|   tryptophan   |  W   |  TRP   |  C~11~H~10~N~2~O   | 186.079312980 | 186.2099  |
|  pyrrolysine   |  O   |  PYL   | C~12~H~19~N~3~O~2~ | 237.147726925 | 237.29816 |

|  element   | code |   mono mass   | avg mass  |
|:----------:|:----:|:-------------:|:---------:|
|  Hydrogen  |  H   |  1.007825035  |  1.00794  |
|   Carbon   |  C   |  12.0000000   |  12.0107  |
|  Nitrogen  |  N   |   14.003074   |  14.0067  |
|   Oxygen   |  O   |  15.99491463  |  15.9994  |
| Phosphorus |  P   |   30.973762   | 30.973761 |
|  Sulphur   |  S   |  31.9720707   |  32.065   |
|  Selenium  |  Se  |  79.9165196   |   79.96   |
|  *proton*  |      | 1.00727646688 |  1.00739  |

|  modification   | residues | mono mass | avg mass | composition |
|:---------------:|:--------:|:---------:|:--------:|:-----------:|
| phosphorylation |   STY    | 79.966331 | 79.9799  |   HO~3~P    |
|    oxidation    |    M     | 15.994915 | 15.9994  |      O      |
|   acetylation   |    K     | 42.010565 | 42.0367  |  H~2~C~2~O  |
| carbamidomethyl |    C     | 57.021464 | 57.0513  | H~3~C~2~NO  |
