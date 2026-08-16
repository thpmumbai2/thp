<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="site-nav">
  <div class="mark"><?php bloginfo( 'name' ); ?></div>
  <?php
  wp_nav_menu( array(
      'theme_location' => 'primary',
      'container'      => false,
      'items_wrap'     => '<ul>%3$s</ul>',
      'fallback_cb'    => function() {
          echo '<ul><li><a href="#about">About</a></li><li><a href="#approach">Approach</a></li><li><a href="#consultations">Consultations</a></li><li><a href="#contact">Contact</a></li></ul>';
      },
  ) );
  ?>
</nav>
