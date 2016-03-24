<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Underscores
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				?>
				<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
				<?php the_title(); ?>
				</a></h2>
				<?php the_content();
			} else {
				?>
				<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a></h2><?php
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php underscores_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php

		 if ( is_category() || is_archive()) {
    			the_excerpt();
    		

			} else {
				if ( has_post_thumbnail() ) { ?>
				  <!--make images link to single post page -->
			<?php the_post_thumbnail('thumbnail');} 
    			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'underscores' ),
				'after'  => '</div>',
			) );}
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php underscores_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->