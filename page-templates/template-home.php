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
    <div class="row">
      <div class="col-lg-8">
        <div class="skip-bin-info-holder">
          <div class="title">
            <i class="fa fa-arrow-circle-up"></i>
            Skip Bin Instant Quote
          </div>
          <div class="desc">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, deserunt.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();