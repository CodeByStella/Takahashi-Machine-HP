<?php

/**
 * Posts index template.
 *
 * Recommended usage for this project:
 * - Create a Page called "News" (slug: news)
 * - Settings -> Reading -> set that page as "Posts page"
 *
 * @package mytheme
 */
get_header();

$posts_page_id = (int) get_option('page_for_posts');
$news_title = $posts_page_id ? get_the_title($posts_page_id) : __('News', 'mytheme');
?>

<section class="page-hero">
	<div class="container">
		<div class="page-hero__inner">
			<h1 class="page-hero__title"><?php echo esc_html($news_title); ?></h1>
			<p class="page-hero__lead"><?php esc_html_e('Latest updates and announcements.', 'mytheme'); ?></p>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<?php if (have_posts()): ?>
			<div class="post-list">
				<?php while (have_posts()): ?>
					<?php the_post(); ?>
					<article class="post-card">
						<div class="post-card__meta">
							<time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
								<?php echo esc_html(get_the_date()); ?>
							</time>
						</div>
						<h2 class="post-card__title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<p class="post-card__excerpt">
							<?php echo esc_html(wp_strip_all_tags(get_the_excerpt())); ?>
						</p>
					</article>
				<?php endwhile; ?>
			</div>

			<div class="pagination">
				<?php the_posts_pagination(); ?>
			</div>
		<?php else: ?>
			<p class="muted"><?php esc_html_e('No news yet.', 'mytheme'); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
