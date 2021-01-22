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
<section class="home-hero-banner-top">
  <div class="container">
    <div class="row align-items-end justify-content-between">
      <div class="col-lg-7">
        <div class="skip-bin-info-holder">
          <div class="overlay-image-arrow">
            <img src="<?php echo get_template_directory_uri(); ?>/img/home-hero-curve-line.svg" alt="">
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
          <div class="title lead text-center mt-5">Lorem ipsum dolor sit amet consectetur.</div>
        </div>
      </div>
    </div>
    <div class="home-hero-slider">
      <div class="slider">
        <div class="slider-wrapper">
          <div class="slide">
            <div class="image d-flex">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/slider-1.jpg"
                alt="Trcuk For Trash">
            </div>
            <div class="entry-content d-flex align-items-center px-md-5">
              <div class="icon-img">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/truck_container.png"
                  alt="truck container for waste">
              </div>
              <div class="info">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae laboriosam quam suscipit, temporibus in
                impedit officiis esse at cupiditate maxime!
              </div>
              <div class="slider-nav d-md-flex">
                <a class="align-self-center mx-1" href="#">
                  <i class="fa fa-arrow-circle-left"></i>
                </a>
                <a class="mx-1" href="#">
                  <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of Hero Banner  -->
<!-- Products  -->
<section class="home-products-info">
</section>
<!-- End of Products -->

<?php
get_footer();