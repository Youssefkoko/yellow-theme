<?php
/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="home-hero-banner-top">
  <div class="container">
    <div class="row  align-items-end justify-content-between">
      <div class="col-lg-7">
        <div class="skip-bin-info-holder">
          <div class="overlay-image-arrow">
            <img src="<?php echo get_template_directory_uri(); ?>/img/curve-line.svg" alt="">
          </div>
          <div class="title">
            <i class="fa fa-arrow-circle-up"></i>
            Skip Bin Instant Quote
          </div>
          <div class="desc">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, deserunt.
          </div>
        </div>
      </div>
      <div class="col-lg-4 offset-xl-1">
        <div class="seven-days-skip-info">
          <img src="<?php echo get_template_directory_uri(); ?>/img/home-right-info.svg" alt="West Cost Info"
            width="100%">
          <div class="title">Lorem ipsum dolor sit amet consectetur.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();