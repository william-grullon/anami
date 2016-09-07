<?php
/**
 * Template part for displaying posts preview.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Anami
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" id="blog-title">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;


		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php anami_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<div class="row">
		<div class="col-sm-4" id="thumb">
			<?php
			if ( has_post_thumbnail() ) {
					the_post_thumbnail();
			}
			 ?>
		</div>
		<div class="col-sm-8">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'anami' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
				?>
		</div>

			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'anami' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php anami_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
