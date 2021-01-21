<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;700;900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
  <?php do_action( 'wp_body_open' ); ?>
  <div class="site" id="page">

    <!-- ******************* The Navbar Area ******************* -->
    <div id="wrapper-navbar  ">
      <div class="top-header d-flex align-items-center ">
        <div class="container">
          <div class="row p-2">
            <div class="col-lg-5 col-sm-6 navbar-brand-col">
              <!-- Your site title as branding in the menu -->
              <?php if ( ! has_custom_logo() ) { ?>

              <?php if ( is_front_page() && is_home() ) : ?>

              <h1 class="navbar-brand mb-0">
                <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                  itemprop="url"><?php bloginfo( 'name' ); ?>
                </a>
              </h1>

              <?php else : ?>


              <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
              </a>

              <?php endif; ?>

              <?php
							} else {
                the_custom_logo();?>
              <?php
							}
							?>
              <!-- end custom logo -->
            </div>
            <div class="col-lg-7 col-sm-6">
              <div class="top-header-contact d-flex justify-content-sm-end justify-content-space-around">
                <a href="tel:+31 661457585">
                  <i class="fa fa-phone"></i> +31 661457585
                </a>
                <!-- This Button ONLY appears on Small View Port -->
                <div class="mobile-menu-dropdown">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?> ">
                    <span> <?php esc_html_e('Menu'); ?></span>
                    <i class="fa fa-bars"></i>
                  </button>
                </div>
                <!-- End of the Button -->
                <a href="mailto:youremail@email.com" class="top-header-contact-email">
                  <i class="fa fa-envelope-o"></i>
                  youremail@email.com
                </a>
              </div>
            </div>
            </di v>
          </div>
        </div>
      </div>
      <nav id="main-nav" class="navbar navbar-expand-xl navbar-dark" aria-labelledby="main-nav-label">
        <div class="container">
          <div class="search-input-holder d-flex">
            <div class="title mr-3">
              Quote:
            </div>
            <input type="text" placeholder="Search">
          </div>
          <div class="mobile-menu-dropdown">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown" aria-expanded="false"
              aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?> ">
              <span> <?php esc_html_e('Menu'); ?></span>
              <i class="fa fa-bars"></i>
            </button>
          </div>
          <!-- The WordPress Menu goes here -->
          <?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav ml-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>

        </div><!-- .container -->
      </nav><!-- .site-navigation -->

    </div><!-- #wrapper-navbar end -->