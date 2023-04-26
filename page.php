<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

?>

<div class="page-header-holder">
	<div class="container">
		<header class="entry-header">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</header>
	</div>

</div>
<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-lg-7">
				<main class="site-main" id="main">

					<?php
					while (have_posts()) {
						the_post();
						get_template_part('loop-templates/content', 'page');

						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()) {
							comments_template();
						}
					}
					?>

				</main>
			</div>
			<div class="offset-lg-1 col-lg-4">
				<div class="right-sidebar-promotion">
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
							<a href="#" class="button outline">
								Find out more
							</a>

						</div>
					</div>
				</div>
			</div>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
