<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header(); ?>

<section>
  <div class="section-head">
    <span class="label">Page</span>
    <h2><?php the_title(); ?></h2>
  </div>
  <div class="about-body">
    <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
  </div>
</section>

<?php get_footer(); ?>
