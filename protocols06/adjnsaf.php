<?php  include("../__header.php"); ?>

            <!-- Page -->
               <div id="page" class="container">
                  <section>
                     <header class="major">
                        <h1>ADJNSAF (Adjusted Normalized Spectral Abundance Factor)</h1>
                     </header>

<p>Here's ChatGPT's description of ADJNSAF which is a metric exported by the Abacus spectral count tool.</p>

<p>
  <strong>ADJNSAF</strong> is a label-free, spectral-count–based protein quantitation
  metric used in shotgun proteomics to estimate <strong>relative protein abundance</strong>.
  It extends the Normalized Spectral Abundance Factor (NSAF) by applying additional
  adjustments that improve comparability across samples, particularly in
  affinity-purification mass spectrometry (AP-MS) experiments.
</p>

<p>It builds on the original NSAF concept by adding practical adjustments that improve comparability, especially in affinity-purification (AP-MS) or interactomics experiments.</p>

<h2>Why ADJNSAF Is Needed</h2>

<p>Raw spectral counts are biased because:</p>
<ul>
  <li>Longer proteins generate more tryptic peptides and therefore more spectra</li>
  <li>Total numbers of MS/MS spectra differ between runs</li>
  <li>Highly abundant proteins can dominate the signal and obscure lower-abundance proteins</li>
</ul>

<p>
  NSAF corrects for protein length and total spectral depth.  
  ADJNSAF further corrects for run-to-run compositional effects and background dominance.
</p>

<h2>Core Concept</h2>

<p>
  <em>
    ADJNSAF represents spectral evidence for a protein, normalized by protein length
    and total signal, with additional scaling to improve cross-sample comparison.
  </em>
</p>

<p>
  ADJNSAF provides <strong>relative</strong>, not absolute, protein quantitation.
</p>

<h2>Overview of the Calculation</h2>

<h3>1. Spectral Counts</h3>

<p>
  For each protein <em>i</em>, count the number of MS/MS spectra assigned to that protein:
</p>

<div class="equation">
  SC<sub>i</sub> = number of spectra matched to protein i
</div>

<p>
  Spectral counts typically include unique and shared peptides and are filtered
  at a fixed false discovery rate (e.g., 1% FDR).
</p>

<h3>2. Length Normalization (SAF)</h3>

<p>
  To correct for protein length:
</p>

<div class="equation">
  SAF<sub>i</sub> = SC<sub>i</sub> / L<sub>i</sub>
</div>

<p>
  where <code>L<sub>i</sub></code> is the protein length in amino acids.
</p>

<h3>3. Run-Level Normalization (NSAF)</h3>

<p>
  SAF values are normalized across all proteins in the run:
</p>

<div class="equation">
  NSAF<sub>i</sub> = SAF<sub>i</sub> / Σ SAF<sub>j</sub>
</div>

<p>
  NSAF values sum to 1 for each run and allow comparison of proteins within the same sample.
</p>

<h3>4. Adjustment Step (ADJNSAF)</h3>

<p>
  The adjustment step implemented by Abacus:
</p>




<p>
  Abacus improves spectral count quantitation by explicitly accounting for
  <strong>shared peptides</strong>. Instead of assigning the full spectral count
  of a shared peptide to every protein it maps to, Abacus distributes those
  spectra across proteins based on the amount of <em>unique spectral evidence</em>
  supporting each protein.
</p>

<h3>Step 1: Unique Spectral Evidence</h3>

<p>
  For each protein <em>i</em>, Abacus first computes:
</p>

<div class="equation">
  s<sub>i</sub> = number of spectra from peptides unique to protein i
</div>

<p>
  These unique spectra form the basis for weighting shared peptides.
</p>

<h3>Step 2: Weighting Shared Peptides</h3>

<p>
  For a peptide <em>p</em> shared among <em>N</em> proteins, Abacus computes
  an adjustment factor <code>a<sub>p,i</sub></code> for each protein <em>i</em>:
</p>

<div class="equation">
  a<sub>p,i</sub> = s<sub>i</sub> / Σ s<sub>j</sub> &nbsp;&nbsp; (j = 1…N)
</div>

<p>
  This factor represents the proportion of the shared peptide’s spectral
  evidence that should be attributed to protein <em>i</em>.
  Proteins with little or no unique evidence receive little or no contribution.
</p>

<h3>Step 3: Adjusted Spectral Counts</h3>

<p>
  The adjusted spectral count for protein <em>i</em> is computed by summing:
</p>

<ul>
  <li>All spectra from peptides unique to protein <em>i</em></li>
  <li>Weighted contributions from shared peptides using <code>a<sub>p,i</sub></code></li>
</ul>

<div class="equation">
  AdjustedSC<sub>i</sub> = Σ unique spectra + Σ (shared spectra × a<sub>p,i</sub>)
</div>

<p>
  This produces a more realistic estimate of protein abundance, especially for
  homologous proteins and protein families.
</p>

<h3>Step 4: NSAF Calculation Using Adjusted Counts</h3>

<p>
  Abacus then computes NSAF using the adjusted spectral counts:
</p>

<div class="equation">
  NSAF<sub>i</sub> = (AdjustedSC<sub>i</sub> / L<sub>i</sub>) /
                    Σ (AdjustedSC<sub>j</sub> / L<sub>j</sub>)
</div>

<p>
  where <code>L<sub>i</sub></code> is the protein length in amino acids.
</p>

<p>
  When NSAF is calculated using adjusted spectral counts, it is commonly referred
  to as <strong>ADJNSAF</strong>.
</p>




<h2>Interpretation</h2>

<ul>
  <li>Higher ADJNSAF indicates higher relative protein abundance</li>
  <li>Values are meaningful for comparisons within and across samples</li>
  <li>ADJNSAF does not represent absolute protein concentration</li>
</ul>

<h2>Strengths and Limitations</h2>

<h3>Strengths</h3>
<ul>
  <li>No isotope labeling required</li>
  <li>Robust to missing MS1 intensity values</li>
  <li>Well-suited for interactomics and large protein complexes</li>
</ul>

<h3>Limitations</h3>
<ul>
  <li>Lower dynamic range than MS1 intensity–based methods</li>
  <li>Reduced accuracy for very low spectral counts</li>
  <li>Dependent on digestion efficiency and peptide detectability</li>
</ul>

<h2>Common Applications</h2>

<ul>
  <li>Affinity purification–mass spectrometry (AP-MS)</li>
  <li>Protein–protein interaction studies</li>
  <li>Semi-quantitative analysis of large proteomics datasets</li>
</ul>


               </div>
<?php  include("../__footer.php"); ?>
