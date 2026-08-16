<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header(); ?>

<section>
  <div class="section-head">
    <span class="label">Blog</span>
    <h2><?php is_home() ? _e( 'Latest Posts', 'the-homoeopath' ) : the_title(); ?></h2>
  </div>
  <div class="about-body">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <p><a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong></a></p>
      <p><?php the_excerpt(); ?></p>
    <?php endwhile; else : ?>
      <p>Nothing here yet.</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
