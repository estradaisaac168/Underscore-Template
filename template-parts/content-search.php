<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Food_One
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			food_one_posted_on();
			food_one_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php food_one_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php food_one_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
