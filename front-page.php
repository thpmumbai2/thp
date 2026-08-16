<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header(); ?>

<header class="hero">
  <div class="vial"></div>
  <div class="label eyebrow">Classical Homoeopathy · Individualised Care</div>
  <h1><?php bloginfo( 'name' ); ?>
    <span class="amp"><?php echo ho_opt('hero_tagline','like cures like'); ?></span>
  </h1>
  <p class="sub"><?php echo ho_opt('hero_sub'); ?></p>

  <div class="dose">
    <div><div class="num"><?php echo ho_opt('stat_1_num','15+'); ?></div><div class="cap"><?php echo ho_opt('stat_1_label','Years in Practice'); ?></div></div>
    <div><div class="num"><?php echo ho_opt('stat_2_num','1:1'); ?></div><div class="cap"><?php echo ho_opt('stat_2_label','Consultations'); ?></div></div>
    <div><div class="num"><?php echo ho_opt('stat_3_num','3000+'); ?></div><div class="cap"><?php echo ho_opt('stat_3_label','Cases Studied'); ?></div></div>
  </div>

  <div class="scroll-cue">Scroll — 1 dose</div>
</header>

<section id="about">
  <div class="section-head">
    <span class="label">01 · About</span>
    <h2>Medicine that listens before it treats.</h2>
  </div>
  <div class="about-body">
    <?php
    // If a WordPress Page titled "Home" or the front page has body content, show it here instead of the default copy.
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
    endwhile; else : ?>
      <p>Homoeopathy begins with a conversation, not a checklist. Every consultation looks closely at your symptoms, your history, and the patterns that make your case <strong>yours</strong> — because the remedy that helps you is rarely the one that helps someone else with the "same" diagnosis.</p>
      <p>This practice is built on the classical principles laid down by Samuel Hahnemann: gentle, individualised, and aimed at the root of the disturbance rather than its surface. No two prescriptions are alike, because no two people are.</p>
    <?php endif; ?>
  </div>
</section>

<section id="approach">
  <div class="section-head">
    <span class="label">02 · Approach</span>
    <h2>Three principles, held quietly.</h2>
  </div>
  <div class="materia">
    <div class="materia-item">
      <div class="rx">℞ 01</div>
      <h3>The Whole Person</h3>
      <p>Physical, emotional, and constitutional threads are read together, not treated as separate complaints.</p>
    </div>
    <div class="materia-item">
      <div class="rx">℞ 02</div>
      <h3>The Minimum Dose</h3>
      <p>The smallest effective intervention — trusting the body's own capacity to restore balance.</p>
    </div>
    <div class="materia-item">
      <div class="rx">℞ 03</div>
      <h3>The Long View</h3>
      <p>Case-taking and follow-up are unhurried, tracking change over weeks, not just the first visit.</p>
    </div>
  </div>
</section>

<section id="consultations">
  <div class="section-head">
    <span class="label">03 · Consultations</span>
    <h2>Ways to begin.</h2>
  </div>
  <ul class="consult-list">
    <li class="consult-row">
      <span class="idx">A</span>
      <span class="name">First Consultation<span>Full case history and constitutional review</span></span>
      <span class="meta">90 min</span>
    </li>
    <li class="consult-row">
      <span class="idx">B</span>
      <span class="name">Follow-up Visit<span>Progress review and remedy adjustment</span></span>
      <span class="meta">30 min</span>
    </li>
    <li class="consult-row">
      <span class="idx">C</span>
      <span class="name">Acute Care<span>Short-term support for sudden, self-limiting complaints</span></span>
      <span class="meta">15 min</span>
    </li>
  </ul>
</section>

<?php get_footer(); ?>
