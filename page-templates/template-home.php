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
  <div class="home-product-holder-1">
    <div class="container">
      <div class="home-special-offer d-flex flex-md-row flex-column align-items-center">
        <div class="discount-circle d-flex flex-column justify-content-center align-items-center">
          <div class="save uppercase">
            Save
          </div>
          <div class="percent">20%</div>
        </div>
        <div class="entry-content d-flex flex-column align-items-center justify-content-between ">
          <h1 class="title">15 Days Storm</h1>
          <div class="desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur adipisci facilis
            quibusdam quos cumque quis laborum nostrum vel animi amet.</div>
          <a href="#" class="btn btn-lg btn-outline-primary" type="button" role="button">Find Out More Info</a>
        </div>

      </div>
    </div>
  </div>
  <div class="home-product-holder-2">
    <div class="container">
      <h2 class="mb-5 text-center">
        <i class="fa fa-arrow-circle-down d-none d-sm-inline text-secondary mr-2"></i>
        <span class="d-block d-sm-inline-block mb-3 mb-sm-0">Select The Right Skip Bin For
          your project</span>
        <i class="fa fa-arrow-circle-left d-sm-none d-inline  text-secondary mr-2"></i>
        <i class="fa fa-arrow-circle-right d-sm-none d-inline text-secondary mr-2"></i>
      </h2>
      <div class="home-products  bg-white text-secondary">
        <div class="home-product p-5">
          <div class="row">
            <div class="col-xl-4 col-md-6">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/6m3-skip-bin.png"
                alt="Bin For Sale">
            </div>
            <div class="col-xl-4 col-md-6 order-md-3">
              <h3 class="title">Cubic Metri Skip</h3>
              <ul class="list-unstyled">
                <li>
                  Clean up and HouseHold Garden
                </li>
                <li>
                  Heavy Loads (dirt, concrete, bricks or rubble)
                </li>
                <li>
                  Ideal for narrow alleys or small streets
                </li>
                <li>
                  Building Sites
                </li>
              </ul>
            </div>
            <div class="col-xl-4 col-md-6 order-lg-3 mx-auto">
              <div class="home-product-circle">
                <div class="row justify-content-end">
                  <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                    <div class="circle mx-auto d-flex flex-column align-items-center justify-content-center">
                      <div class="content-holder">
                        Aproximity x 4 Trailers
                      </div>
                      <div class="icon-img">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.svg"
                          alt="">
                      </div>
                    </div>
                    <!-- End of Col -->
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                    <div class="circle mx-auto d-flex flex-column align-items-center justify-content-center">
                      <div class="content-holder">
                        Aproximity x
                        16 wheele Bin
                      </div>
                      <div class="icon-img">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/bin.svg" alt="">
                      </div>
                    </div>
                    <!-- End of Col  -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End of Row  -->
          <div class="abs-holder-button text-uppercase ">Get Quots For Skip Bin</div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of Products -->

<?php
get_footer();