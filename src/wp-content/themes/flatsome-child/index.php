<?php

/**
 * The blog template file.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

get_header();

?>
<?php
$categories = get_the_category();
$cateID = $categories[0]->term_id;
$args = array(
	'post_type' => 'post',
	'cat' => $cateID,
	'posts_per_page' => 10,
);
$query = new WP_Query($args);

?>
<div id="content" class="ct-blog-archive">
	<div class="archive-wrapper">
		<div class="head">
			<h2>JILI178 News</h2>
			<p>Get the latest news from jili178 and receive the most free bonuses!</p>
		</div>
		<div class="body">
			<?php
			if ($query->have_posts()) :
			?>
				<div class="list-post">
					<?php
					while ($query->have_posts()) : $query->the_post(); ?>
						<div class="item-post">
							<div class="inner">
								<div class="item-post__image">
									<a href="<?php echo the_permalink() ?>"></a>
									<?php
									$image = get_post_thumbnail_id();
									$size = 'large';
									if ($image) {
										echo wp_get_attachment_image($image, $size, "", array("class" => "img-fluid"));
									}
									?>
								</div>
								<div class="item-post__content">
									<h3 class="post-title"><a href="<?php echo the_permalink() ?>"><?php the_title(); ?></a></h3>
									<div class="post-content">
										<?php
										$the_excerpt  = the_excerpt();
										$excerpt_more = apply_filters('excerpt_more', ' [...]');
										echo flatsome_string_limit_words($the_excerpt, $excerpt_length);
										?>
									</div>
									<a class="read-more" href="<?php echo the_permalink() ?>">
										Read more
										<span>
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="arrow-right" viewBox="0 0 512 545.5">
												<path d="M299.5 140.5l136 136 11 11.5-11 11.5-136 136-23-23L385 304H64v-32h321L276.5 163.5z" style="fill: #c049ea">
												</path>
											</svg>
										</span>
									</a>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>