<?php

/**
 * The blog template file.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

get_header();

?>

<div id="content" class="ct-blog-detail">
	<div class="blog-wrapper">
		<div class="post__img"><?php the_post_thumbnail(); ?></div>
		<div class="post__body">
			<div class="post-meta">
				<span class="post-date-day"><?php echo get_the_time('M d, Y', get_the_ID()); ?></span>
			</div>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
			<div class="post-category">
				<span>Categories:</span>
				<?php
				$categories = get_the_category();
				foreach ($categories as $category) {
					echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
				}
				?>
			</div>
			<div class="post-tag">
				<span>Tags:</span>
				<?php
				$posttags = get_the_tags();
				if ($posttags) {
					foreach ($posttags as $tag) {
						echo '<span>' . $tag->name . ' </span>';
					}
				} else {
					echo '<span>No Tag</span>';
				}
				?>

			</div>

		</div>
		<div class="navigation">
			<div class="previous-post-link post-link">
				<?php previous_post_link('%link', 'Previous post'); ?>
			</div>
			<div class="next-post-link post-link">
				<?php next_post_link('%link', 'Next Post'); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer();
