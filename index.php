<?php

/**
 * Fallback template.
 *
 * @package mytheme
 */
get_header();
?>

<section class="section">
	<div class="container">
		<div class="section__head">
			<div>
				<h1 class="section__title"><?php bloginfo('name'); ?></h1>
				<p class="section__sub"><?php bloginfo('description'); ?></p>
			</div>
		</div>

		<?php if (have_posts()): ?>
			<?php while (have_posts()): ?>
				<?php the_post(); ?>
				<article class="card" style="margin-bottom:16px;">
					<div class="card__body">
						<h2 class="card__title" style="font-size:18px;margin-bottom:8px;">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<p class="card__text"><?php echo esc_html(wp_strip_all_tags(get_the_excerpt())); ?></p>
					</div>
				</article>
			<?php endwhile; ?>

			<div class="section__sub">
				<?php the_posts_pagination(); ?>
			</div>
		<?php else: ?>
			<p class="section__sub"><?php esc_html_e('No posts found.', 'mytheme'); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
