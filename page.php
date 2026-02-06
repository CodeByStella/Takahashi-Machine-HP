<?php
/**
 * Page template (default).
 *
 * @package mytheme
 */

get_header();
?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>

		<section class="page-hero">
			<div class="container">
				<div class="page-hero__inner">
					<h1 class="page-hero__title"><?php the_title(); ?></h1>
					<?php if ( has_excerpt() ) : ?>
						<p class="page-hero__lead"><?php echo esc_html( get_the_excerpt() ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="container">
				<article class="content-card">
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="content-card__media">
							<?php the_post_thumbnail( 'large' ); ?>
						</div>
					<?php endif; ?>
					<div class="content-card__body prose">
						<?php the_content(); ?>
					</div>
				</article>
			</div>
		</section>

	<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();

