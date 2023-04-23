<?php

/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');

if (is_front_page()) {
    get_template_part('global-templates/hero');
}
?>

<div class="home-hero-banner-top">
    <div class="container ">
        <div class="row align-items-end  justify-content-between">
            <div class="col-lg-8 col-xl-7">
                <div class="skip-bin-info-holder">
                    <div class="overlay-image-arrow">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home-hero-arrow-up.png" alt="">
                    </div>
                    <div class="title">
                        <i class="fa fa-arrow-circle-up"></i>
                        <p class="mb-0">Skip Bin Instant quote</p>
                    </div>
                    <div class="desc">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias laudantium iusto suscipit officiis repellat!</p>
                    </div>
                </div>
            </div>

            <div class="col col-lg-4  offset-xl-1 d-flex justify-content-start justify-content-md-center justify-content-lg-end ">
                <div class="seven-day-skip-info">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-hero-right-info.png" alt="Wst cost info">
                    <h4 class="title">7-Day skip bin hire direct to your home covering Perth to Albany</4>
                </div>
            </div>
        </div>

        <div class="home-hero-slider">
            <div class="slider">
                <div class="slider-wrapper">
                    <div class="slide">
                        <div class="image">

                        </div>
                        <div class="entry-content">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/home-slider-truck.svg" alt="Truck">
                            </div>
                            <div class="info">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, facere?
                            </div>
                            <div class="slider-nav">
                                <a href="#"><i class="fa fa-arrow-circle-left"></i></a>
                                <a href="#"><i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-product-info">
    <div class="home-special-offer-background-overlay">

        <div class="container">

            <div class="home-special-offer">
                <div class="discount-circle">
                    <div class="abs-holder">
                        <div class="save">Save</div>
                        <div class="percent">20%</div>
                    </div>
                </div>
                <div class="entry-content">
                    <h3 class="title">
                        15 Day Storm Special on 9m3 Skip Bins
                    </h3>
                    <p class="desc">Skip Bins are available in 4m3 , 6m3 and 10m3 capacities. Hook lift bins are available in 15m3 or 30m3 capacity. Waste is transported to our Material Recovery Facility.</p>
                    <a href="#" class="button">
                        Find out more information
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="home-product-holder">
        <div class="container">
            <h2><i class="fa fa-arrow-circle-down"></i> Select the right skip bin for your project</h2>
            <div class="home-products">


                <div class="home-product">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/product-placeholder.png" alt="4 Cubic Metre Skip">
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="title">4 Cubic Metre Skip</div>
                            <ul>
                                <li>Garden &amp; Household clean-up</li>
                                <li>Heavy Loads (High volumes of dirt, concrete, bricks or rubble)</li>
                                <li>Ideal for narrow alleys or small streets</li>
                                <li>Building Sites</li>
                            </ul>
                            <p>&nbsp;</p>
                        </div>  
                        <div class="col-xl-4 col-lg-12">
                            <div class="home-product-circles">
                                <div class="row g-2">
                                    <div class=" offset-lg-3 offset-xl-0 offset-md-2 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="circle">
                                            <div class="abs-circle-holder">
                                                <div class="content-holder">
                                                    Approx x 4 trailers
                                                </div>
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.png" alt="Product Trailer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="circle">
                                            <div class="abs-circle-holder">
                                                <div class="content-holder">
                                                    Approx x 16 wheelie bins
                                                </div>
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.png" alt="Product Trailer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="abs-holder-button">
                        Get a quote for this skip bin
                    </div>
                </div>

                
                <div class="home-product">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/product-placeholder.png" alt="4 Cubic Metre Skip">
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="title">4 Cubic Metre Skip</div>
                            <ul>
                                <li>Garden &amp; Household clean-up</li>
                                <li>Heavy Loads (High volumes of dirt, concrete, bricks or rubble)</li>
                                <li>Ideal for narrow alleys or small streets</li>
                                <li>Building Sites</li>
                            </ul>
                            <p>&nbsp;</p>
                        </div>  
                        <div class="col-xl-4 col-lg-12">
                            <div class="home-product-circles">
                                <div class="row g-2">
                                    <div class=" offset-lg-3 offset-xl-0 offset-md-2 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="circle">
                                            <div class="abs-circle-holder">
                                                <div class="content-holder">
                                                    Approx x 4 trailers
                                                </div>
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.png" alt="Product Trailer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="circle">
                                            <div class="abs-circle-holder">
                                                <div class="content-holder">
                                                    Approx x 16 wheelie bins
                                                </div>
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.png" alt="Product Trailer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="abs-holder-button">
                        Get a quote for this skip bin
                    </div>
                </div>


                <div class="home-product">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/product-placeholder.png" alt="4 Cubic Metre Skip">
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="title">4 Cubic Metre Skip</div>
                            <ul>
                                <li>Garden &amp; Household clean-up</li>
                                <li>Heavy Loads (High volumes of dirt, concrete, bricks or rubble)</li>
                                <li>Ideal for narrow alleys or small streets</li>
                                <li>Building Sites</li>
                            </ul>
                            <p>&nbsp;</p>
                        </div>  
                        <div class="col-xl-4 col-lg-12">
                            <div class="home-product-circles">
                                <div class="row g-2">
                                    <div class=" offset-lg-3 offset-xl-0 offset-md-2 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="circle">
                                            <div class="abs-circle-holder">
                                                <div class="content-holder">
                                                    Approx x 4 trailers
                                                </div>
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.png" alt="Product Trailer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="circle">
                                            <div class="abs-circle-holder">
                                                <div class="content-holder">
                                                    Approx x 16 wheelie bins
                                                </div>
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.png" alt="Product Trailer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="abs-holder-button">
                        Get a quote for this skip bin
                    </div>
                </div>
                
                <div class="home-product">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/product-placeholder.png" alt="4 Cubic Metre Skip">
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="title">4 Cubic Metre Skip</div>
                            <ul>
                                <li>Garden &amp; Household clean-up</li>
                                <li>Heavy Loads (High volumes of dirt, concrete, bricks or rubble)</li>
                                <li>Ideal for narrow alleys or small streets</li>
                                <li>Building Sites</li>
                            </ul>
                            <p>&nbsp;</p>
                        </div>  
                        <div class="col-xl-4 col-lg-12">
                            <div class="home-product-circles">
                                <div class="row g-2">
                                    <div class=" offset-lg-3 offset-xl-0 offset-md-2 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="circle">
                                            <div class="abs-circle-holder">
                                                <div class="content-holder">
                                                    Approx x 4 trailers
                                                </div>
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.png" alt="Product Trailer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="circle">
                                            <div class="abs-circle-holder">
                                                <div class="content-holder">
                                                    Approx x 16 wheelie bins
                                                </div>
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.png" alt="Product Trailer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="abs-holder-button">
                        Get a quote for this skip bin
                    </div>
                </div>
                
                

            </div>
        </div>
    </div>
    
    <div class="home-we-accept">
        <div class="container">
            <div class="title-holder">
                <h2>We accept the following waste</h2>
                <div class="button-holder top">
                    <a href="/frequently-asked-questions-waste-and-skip-bin-hire/" class="button outline">Read more on our FAQs page</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-1.png" alt="We Accept Waste" width="100%">
                        <div class="title">
                            Commercial Waste
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                <div class="circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-2.png" alt="We Accept Waste" width="100%">
                    <div class="title">
                    Building Waste
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                <div class="circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-3.png" alt="We Accept Waste" width="100%">
                    <div class="title">
                    Green Waste
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                <div class="circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-4.png" alt="We Accept Waste" width="100%">
                    <div class="title">
                        Household Waste
                    </div>
                    </div>
                </div>
            </div>
            <div class="button-holder bottom">
                <a href="#" class="button outline">read the full list of acceptable waste</a>
            </div>
        </div>
    </div>

</div>

<?php
get_footer();
