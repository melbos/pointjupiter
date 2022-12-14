<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PointJupiter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() && get_theme_mod('hide_meta') != 1 ) : ?>
		<div class="entry-meta">
			<?php PointJupiter_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->	

	<?php if ( has_post_thumbnail() && ( get_theme_mod( 'featured_image' ) != 1 ) ) : ?>
		<?php if ( is_single() ) : ?>
		<div class="single-thumb">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('PointJupiter-large-thumb'); ?></a>
		</div>	
		<?php else : ?>
		<div class="entry-thumb">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('PointJupiter-medium-thumb'); ?></a>
		</div>
		<?php endif; ?>
	<?php endif; ?>

	<?php if ( is_single() ) : ?>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<?php else : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	<div class="read-more clearfix">
		<a class="button post-button" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php esc_html_e('Read more', 'PointJupiter'); ?></a>
	</div>
	<?php endif; ?>

	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'PointJupiter' ),
			'after'  => '</div>',
		) );
	?>
		
	<?php if ( is_single() && get_theme_mod('hide_meta') != 1 ) : ?>
	<footer class="entry-footer">
		<?php PointJupiter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
