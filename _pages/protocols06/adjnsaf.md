---
title: "ADJNSAF (Adjusted Normalized Spectral Abundance Factor)"
permalink: /protocols06/adjnsaf.php
---

Here's ChatGPT's description of ADJNSAF which is a metric exported by the Abacus spectral count tool.

**ADJNSAF** is a label-free, spectral-count--based protein quantitation metric used in shotgun proteomics to estimate **relative protein abundance**. It extends the Normalized Spectral Abundance Factor (NSAF) by applying additional adjustments that improve comparability across samples, particularly in affinity-purification mass spectrometry (AP-MS) experiments.

It builds on the original NSAF concept by adding practical adjustments that improve comparability, especially in affinity-purification (AP-MS) or interactomics experiments.

## Why ADJNSAF Is Needed

Raw spectral counts are biased because:

- Longer proteins generate more tryptic peptides and therefore more spectra
- Total numbers of MS/MS spectra differ between runs
- Highly abundant proteins can dominate the signal and obscure lower-abundance proteins

NSAF corrects for protein length and total spectral depth. ADJNSAF further corrects for run-to-run compositional effects and background dominance.

## Core Concept

*ADJNSAF represents spectral evidence for a protein, normalized by protein length and total signal, with additional scaling to improve cross-sample comparison.*

ADJNSAF provides **relative**, not absolute, protein quantitation.

## Overview of the Calculation

### 1. Spectral Counts

For each protein *i*, count the number of MS/MS spectra assigned to that protein:

SC~i~ = number of spectra matched to protein i

Spectral counts typically include unique and shared peptides and are filtered at a fixed false discovery rate (e.g., 1% FDR).

### 2. Length Normalization (SAF)

To correct for protein length:

SAF~i~ = SC~i~ / L~i~

where `L`~`i`~ is the protein length in amino acids.

### 3. Run-Level Normalization (NSAF)

SAF values are normalized across all proteins in the run:

NSAF~i~ = SAF~i~ / Σ SAF~j~

NSAF values sum to 1 for each run and allow comparison of proteins within the same sample.

### 4. Adjustment Step (ADJNSAF)

The adjustment step implemented by Abacus:

Abacus improves spectral count quantitation by explicitly accounting for **shared peptides**. Instead of assigning the full spectral count of a shared peptide to every protein it maps to, Abacus distributes those spectra across proteins based on the amount of *unique spectral evidence* supporting each protein.

### Step 1: Unique Spectral Evidence

For each protein *i*, Abacus first computes:

s~i~ = number of spectra from peptides unique to protein i

These unique spectra form the basis for weighting shared peptides.

### Step 2: Weighting Shared Peptides

For a peptide *p* shared among *N* proteins, Abacus computes an adjustment factor `a`~`p,i`~ for each protein *i*:

a~p,i~ = s~i~ / Σ s~j~    (j = 1...N)

This factor represents the proportion of the shared peptide's spectral evidence that should be attributed to protein *i*. Proteins with little or no unique evidence receive little or no contribution.

### Step 3: Adjusted Spectral Counts

The adjusted spectral count for protein *i* is computed by summing:

- All spectra from peptides unique to protein *i*
- Weighted contributions from shared peptides using `a`~`p,i`~

AdjustedSC~i~ = Σ unique spectra + Σ (shared spectra × a~p,i~)

This produces a more realistic estimate of protein abundance, especially for homologous proteins and protein families.

### Step 4: NSAF Calculation Using Adjusted Counts

Abacus then computes NSAF using the adjusted spectral counts:

NSAF~i~ = (AdjustedSC~i~ / L~i~) / Σ (AdjustedSC~j~ / L~j~)

where `L`~`i`~ is the protein length in amino acids.

When NSAF is calculated using adjusted spectral counts, it is commonly referred to as **ADJNSAF**.

## Interpretation

- Higher ADJNSAF indicates higher relative protein abundance
- Values are meaningful for comparisons within and across samples
- ADJNSAF does not represent absolute protein concentration

## Strengths and Limitations

### Strengths

- No isotope labeling required
- Robust to missing MS1 intensity values
- Well-suited for interactomics and large protein complexes

### Limitations

- Lower dynamic range than MS1 intensity--based methods
- Reduced accuracy for very low spectral counts
- Dependent on digestion efficiency and peptide detectability

## Common Applications

- Affinity purification--mass spectrometry (AP-MS)
- Protein--protein interaction studies
- Semi-quantitative analysis of large proteomics datasets
