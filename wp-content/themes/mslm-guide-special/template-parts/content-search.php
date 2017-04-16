<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Educare
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php educare_champtheme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php
            the_excerpt();
            echo '<div><a class="read_more" href="'.get_permalink().'">'.esc_html__('Read More ', 'educare-champtheme').'</a></div>';
        ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php educare_champtheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
