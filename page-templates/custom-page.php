<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 Template name:Custom
 * @package ifsa2019
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main ifsa-cp">

		<?php echo '<h1> This is a custom page template </h1>'; ?>

		<?php
$post = get_post( 145);
setup_postdata( $post );
var_dump($post);

 echo wp_get_attachment_image_url(145);

		?>
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
<img src="<?php echo $url ?>" />

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
