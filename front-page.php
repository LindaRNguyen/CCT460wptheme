<?php
/**
 * The template file for the homepage
 * @package Underscores
 */

 get_header(); ?>

	<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php 
	/*The custom Query to limit the category & number of posts on the page*/
	/*Also helps pagination*/
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$limit = array( 'showposts' => 2, 'paged'=> $paged);
	$custom_query= new WP_Query($limit);
	?>
	
	<?php if ( $custom_query->have_posts() ) : /*Starting the Loop!!!*/ 
	 while ( $custom_query->have_posts() ) :
	 $custom_query->the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			

			<?php
			get_template_part( 'template-parts/content', get_post_format() );
		?>

		</article>

	<?php endwhile; ?>

	<?php else : ?>

	<?php endif; ?><!--Ending the loop!!!!-->

<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

<?php
 if ( wp_is_mobile() ) {/*wordpress way of making div only appear on mobile screens*/
	echo '	
	<div id="disillusionment">
		I"m almost invisible! You can"t see me! Neenerneenerneeer! Wait what? You can? ooops.
	</div>';
	}
?>
		</main><!-- #main -->

	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
