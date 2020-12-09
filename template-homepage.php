<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <!-- TARJETAS DE COLECCIONES -->
        <div class="container tarjetas">
           <div class="tarjeta1">
                <h2>Line Name</h2>
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/collection_01.jpg'; ?>" alt="collection 1">
                <div class="descripcion">
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero ex consequatur minima non. Earum aperiam dolores odit. Beatae molestias numquam exercitationem atque odit sapiente id, consequuntur quaerat eius! Non, accusamus!</p>
                </div>
           </div>
           <div class="tarjeta2">
           <h2>Line Name</h2>
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/collection_02.jpg'; ?>" alt="collection 2">
                <div class="descripcion">
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero ex consequatur minima non. Earum aperiam dolores odit. Beatae molestias numquam exercitationem atque odit sapiente id, consequuntur quaerat eius! Non, accusamus!</p>
                </div>
           </div>
           <div class="tarjeta3">
           <h2>Line Name</h2>
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/collection_03.jpg'; ?>" alt="collection 3">
                <div class="descripcion">
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero ex consequatur minima non. Earum aperiam dolores odit. Beatae molestias numquam exercitationem atque odit sapiente id, consequuntur quaerat eius! Non, accusamus!</p>
                </div>
           </div>
        </div>

        <!-- HORNOS TEXTO -->
        <div class="container">
            <h1 class="titulo">Lorem Ipsum</h1>
            <div class="hornos-texto1">
                <div class="texto-hornos"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit, esse culpa, eius ab ducimus nihil vitae voluptatem ullam quo asperiores, quae porro nobis aliquam et dolor modi fuga velit recusandae?</p></div>
                <div class="imagen-hornos"><img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/horno_textp_01.jpg'; ?>" alt=""></div>
            </div>
            <div class="hornos-texto2">
                <div class="texto-hornos"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit, esse culpa, eius ab ducimus nihil vitae voluptatem ullam quo asperiores, quae porro nobis aliquam et dolor modi fuga velit recusandae?</p></div>
                <div class="imagen-hornos"><img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/horno_textp_02.jpg'; ?>" alt=""></div>
            </div>
        </div>

        <!-- MAS VENDIDOS -->
			<?php
			/**
			 * Functions hooked in to homepage action
			 *
			 * @hooked storefront_homepage_content      - 10
			 * @hooked storefront_product_categories    - 20
			 * @hooked storefront_recent_products       - 30
			 * @hooked storefront_featured_products     - 40
			 * @hooked storefront_popular_products      - 50
			 * @hooked storefront_on_sale_products      - 60
			 * @hooked storefront_best_selling_products - 70
			 */
			do_action( 'homepage' );
            ?>

        <!-- BANNER MEDIO -->
        <div class="banner-medio">
            <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/banner_02_home.jpg'; ?>" alt="">
        </div>

        <div id="post-35" <?php post_class(); ?> style="<?php storefront_homepage_content_styles(); ?>" data-featured-image="<?php echo esc_url( $featured_image ); ?>">
	<div class="container">
		<?php
		/**
		 * Functions hooked in to storefront_page add_action
		 *
		 * @hooked storefront_homepage_header      - 10
		 * @hooked storefront_page_content         - 20
		 */
		do_action( 'storefront_homepage' );
		?>
	</div>
</div><!-- #post-## -->

		</main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();