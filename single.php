<?php
/**
 * Single post template (News detail).
 *
 * @package mytheme
 */

get_header();

$posts_page_id = (int) get_option( 'page_for_posts' );
$news_url      = $posts_page_id ? get_permalink( $posts_page_id ) : home_url( '/' );
?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>

		<section class="page-hero">
			<div class="container">
				<div class="page-hero__inner">
					<p class="breadcrumb">
						<a href="<?php echo esc_url( $news_url ); ?>"><?php esc_html_e( 'News', 'mytheme' ); ?></a>
						<span aria-hidden="true">/</span>
						<span><?php the_title(); ?></span>
					</p>
					<h1 class="page-hero__title"><?php the_title(); ?></h1>
					<p class="page-hero__lead">
						<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
							<?php echo esc_html( get_the_date() ); ?>
						</time>
					</p>
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

				<div class="post-nav">
					<div class="post-nav__prev"><?php previous_post_link( '%link', '← %title' ); ?></div>
					<div class="post-nav__next"><?php next_post_link( '%link', '%title →' ); ?></div>
				</div>
			</div>
		</section>

	<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();

