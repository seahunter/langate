<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package langate
 */

?>

<article
	id="post-<?php the_ID(); ?>" <?php post_class('row flex-md-row border rounded overflow-hidden m-2 shadow-sm position-relative'); ?>>
	<div class="col p-4">
		<header class="entry-header">
			<?php
			the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
		</header><!-- .entry-header -->
		<div><?php the_time('d.m.Y') ?></div>

		<div class="entry-content">
			<?php
			the_excerpt();

			wp_kses(
			/* translators: %s: Name of current post. Only visible to screen readers */
				__('<span class="screen-reader-text">Continue reading</span>', 'langate'),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			);
			?>
		</div><!-- .entry-content -->
	</div>
	<div class="col-auto d-none d-md-block p-0">
		<?php the_post_thumbnail('medium'); ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
