<?php

get_header(); ?>
	<div class="container">
		<?php if (have_posts()) : ?>
			<div class="row">
				<h2 class="text-center">The latest movies</h2>
			</div>
			<div class="row">
				<div class="col">
					<div class="articles-list d-flex flex-wrap" data-total="<?php global $wp_query;
					echo $wp_query->found_posts ?>">
						<?php while (have_posts()) : the_post(); ?>
							<div class="articles-list__item">
								<?php get_template_part('template-parts/content', get_post_type()); ?>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col text-center">
					<div class="load-more-wrapper">
						<div class="d-none">
							<?php echo get_next_posts_link(); ?>
						</div>
						<button id="loadMore" class="btn btn-success">Load more</button>
					</div>
				</div>
			</div>
		<?php else: ?>
			<div class="row">
				<h2 class="text-center">This are no posts</h2>
			</div>
		<?php endif; ?>
	</div>
<?php get_footer();
