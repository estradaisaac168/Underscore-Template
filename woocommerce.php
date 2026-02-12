<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Food_One
 */

get_header();
?>

<div class="site-grid-container">
	<main id="primary" class="site-main">

		<?php woocommerce_content() ?>

	</main><!-- #main -->

	<?php get_sidebar(); ?>
</div>

<?php
get_footer();
