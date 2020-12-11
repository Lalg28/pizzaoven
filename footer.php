<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
        
        <div class="container">
            <div class="contenedor-flex">
                <div class="menu-footer">
                    <?php wp_nav_menu( array('menu' => 'Footer Menu', 'menu_class' => 'footer-menu') ); ?>
                </div>
                <div class="logo-footer">
                    <a href="http://localhost:8888/pizzaoven/" rel="home">Pizza Oven</a>
                </div>
                <div class="social-container">
                    <p class="">Don't miss ouw on sales, arrivals and more.</p>
                        <div class="subscribe-block">
                            <form action="">
                                <input type="text" class="newsletter-input" placeholder="ENTER YOUR EMAIL">
                                <input type="submit" class="btn btn-primary blue-btn" value="subscribe">
                            </form>
                        </div>
                        <ul class="social">
                            <p>Follow Us</p>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </ul>
                </div>
            </div>
        </div>

    <div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			// do_action( 'storefront_footer' );
			?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../wp-content/themes/pizza-oven/assets/js/send-mail.js"></script>
</body>
</html>