<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

				do_action( 'storefront_page_before' );?>


				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

					<div class="container">
                        <div class="hornos-texto1 margin-top">
                            <div class="texto-hornos">
                                <h1>Lorem ipsum dolor sit amet</h1>
                                <p class="font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, exercitationem labore iste quasi voluptatibus nostrum a porro. Architecto, molestiae! Tenetur quae consequuntur nemo, eum corrupti unde distinctio explicabo voluptatum sit?</p>
                                <p class="font-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate, voluptatem. Unde veritatis labore, placeat quos nesciunt ea natus hic cum eveniet repellendus est nemo vitae suscipit modi nulla dignissimos fuga.</p>
                            </div>
                            <div class="imagen-hornos"><img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/about_01.jpg'; ?>" alt=""></div>
                        </div>
                        <div class="bannerau"><img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/banner_aboutus_02.jpg'; ?>" alt=""></div>
                        <div class="hornos-texto2">
                        <div class="texto-hornos">
                                <h1>Lorem ipsum dolor sit amet</h1>
                                <p class="font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, exercitationem labore iste quasi voluptatibus nostrum a porro. Architecto, molestiae! Tenetur quae consequuntur nemo, eum corrupti unde distinctio explicabo voluptatum sit?</p>
                                <p class="font-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate, voluptatem. Unde veritatis labore, placeat quos nesciunt ea natus hic cum eveniet repellendus est nemo vitae suscipit modi nulla dignissimos fuga.</p>
                            </div>
                            <div class="imagen-hornos"><img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/about_02.jpg'; ?>" alt=""></div>
                        </div>
					</div>
					
				</article><!-- #post-## -->

				<?php

				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				do_action( 'storefront_page_after' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
