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
                        <h2 class="container-titulo">THANK YOU FOR COMMUNICATING WITH US</h2>
                        <div class="contenedor-formulario">
                            <div class="formulario-contacto">
                                <form id="formularioContacto" class="formulario-contacto" action="../wp-content/themes/pizza-oven/send-mail.php" method="POST" role="form">
                                    <div class="dos-columnas">
                                        <div class="nombre"><input type="text" class="form-control" name="nombre" placeholder="Name*" required></div>
                                        <div class="celular"><input type="number" class="form-control" name="celular" placeholder="Cel*" required></div>
                                    </div>
                                    <div class="email"><input type="email" class="form-control" name="email" placeholder="Email*" required></div>
									<div class="mensaje"><textarea class="form-control" name="mensaje" placeholder="Message" required></textarea></div>
									<div class="form-group"><input type="submit" class="btn btn-primary form-btn" value="SEND"></div>
                                </form>
                            </div>
                            <div class="texto-contacto">
                                <p>
									Av. Faro 2350 Piso 1 Int. 1X <br>
									C.P. 44550 <br>
									Guadalajara Jalisco, MX.
								</p>
								<p>
									+52 33 1913 2094
								</p>
								<p>
									<a class="cafe" href="mailto:">contact@pizzaoven.com</a>
								</p>
                            </div>
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

