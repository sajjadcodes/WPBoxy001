<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package wpboxy
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('contain-area'); ?> id="post-<?php the_ID(); ?>">


<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	<header class="entry-header">

		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php wpboxy_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->



	<div class="entry-content">
		

		<?php the_excerpt(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wpboxy' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php wpboxy_entry_footer(); ?>

	</footer><!-- .entry-footer -->





</article><!-- #post-## -->
