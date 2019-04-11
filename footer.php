<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ifsa2019
 */

?>

	</div><!-- #content -->
	<div id="footer-widgets-area">
		<div class="container"><div class="row">
			<?php dynamic_sidebar( 'footer-sidebar' ); ?>
		</div></div>
	</div>
	<footer id="colophon" class="site-footer">
		<div class="container"><div class="row"> 
			<div class="col-md-6">
				<div class="site-info">
				Copyright &copy; 2019 IFSA, India -  All rights reserved
				</div><!-- .site-info -->
			</div>
			<div class="col-md-6">
				<nav id="footer-navigation" class="footer-navigation">
					<?php
					// wp_nav_menu( array(
					// 	'theme_location' => 'menu-2',
					// 	'menu_id'        => 'footer-menu',
					// ) );
					?>
				</nav>
			</div>
		</div></div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
