<?php
/**
 * Front page template.
 *
 * @package mytheme
 */

get_header();
?>

<section class="hero">
	<div class="container">
		<div class="hero__panel">
			<div class="hero__grid">
				<div class="hero__media">
					<div class="hero__img">
						<img
							src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero-placeholder.svg' ); ?>"
							alt="<?php echo esc_attr__( 'Factory machine placeholder', 'mytheme' ); ?>"
							loading="eager"
						>
					</div>
				</div>
				<div class="hero__content">
					<div class="hero__kicker">
						<span aria-hidden="true">●</span>
						<span><?php esc_html_e( 'High quality / High speed / High reliability', 'mytheme' ); ?></span>
					</div>
					<h1 class="hero__title">
						<?php esc_html_e( 'Bring “beautiful surfaces” to your production.', 'mytheme' ); ?>
					</h1>
					<p class="hero__lead">
						<?php esc_html_e( 'This hero area is structured to match your screenshot: image + headline + CTA.', 'mytheme' ); ?>
					</p>
					<div class="hero__actions">
						<a class="btn btn--primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
							<?php esc_html_e( 'Contact', 'mytheme' ); ?>
						</a>
						<a class="btn btn--ghost" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">
							<?php esc_html_e( 'About', 'mytheme' ); ?>
						</a>
					</div>
					<div class="hero__note">
						<?php esc_html_e( 'Tip: replace /assets/img/hero-placeholder.svg with your real hero image.', 'mytheme' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section__head">
			<div>
				<h2 class="section__title"><?php esc_html_e( 'Business', 'mytheme' ); ?></h2>
				<p class="section__sub"><?php esc_html_e( 'Cards section like your “事業紹介”.', 'mytheme' ); ?></p>
			</div>
			<a class="btn" href="<?php echo esc_url( home_url( '/support/' ) ); ?>"><?php esc_html_e( 'View all', 'mytheme' ); ?></a>
		</div>

		<div class="cards">
			<article class="card">
				<div class="card__media">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/card-1.svg' ); ?>" alt="" loading="lazy">
				</div>
				<div class="card__body">
					<h3 class="card__title"><?php esc_html_e( 'Support', 'mytheme' ); ?></h3>
					<p class="card__text"><?php esc_html_e( 'Short description goes here. Replace with your real copy.', 'mytheme' ); ?></p>
					<a class="card__link" href="<?php echo esc_url( home_url( '/support/' ) ); ?>">
						<?php esc_html_e( 'Learn more', 'mytheme' ); ?> <span aria-hidden="true">→</span>
					</a>
				</div>
			</article>

			<article class="card">
				<div class="card__media">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/card-2.svg' ); ?>" alt="" loading="lazy">
				</div>
				<div class="card__body">
					<h3 class="card__title"><?php esc_html_e( 'Used Product', 'mytheme' ); ?></h3>
					<p class="card__text"><?php esc_html_e( 'Use this for product lineup like the screenshot tiles.', 'mytheme' ); ?></p>
					<a class="card__link" href="<?php echo esc_url( home_url( '/used-product/' ) ); ?>">
						<?php esc_html_e( 'Learn more', 'mytheme' ); ?> <span aria-hidden="true">→</span>
					</a>
				</div>
			</article>

			<article class="card">
				<div class="card__media">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/card-3.svg' ); ?>" alt="" loading="lazy">
				</div>
				<div class="card__body">
					<h3 class="card__title"><?php esc_html_e( 'About', 'mytheme' ); ?></h3>
					<p class="card__text"><?php esc_html_e( 'Company profile and strengths.', 'mytheme' ); ?></p>
					<a class="card__link" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">
						<?php esc_html_e( 'Learn more', 'mytheme' ); ?> <span aria-hidden="true">→</span>
					</a>
				</div>
			</article>
		</div>
	</div>
</section>

<section class="section section--alt">
	<div class="container">
		<div class="feature-banner">
			<div class="feature-banner__bg" aria-hidden="true"></div>
			<div class="feature-banner__inner">
				<div>
					<h2 class="feature-banner__title"><?php esc_html_e( 'Craftsmanship that supports manufacturing.', 'mytheme' ); ?></h2>
					<p class="feature-banner__text"><?php esc_html_e( 'This wide banner matches the “image + overlay text + button” feeling from the screenshot.', 'mytheme' ); ?></p>
				</div>
				<div class="feature-banner__actions">
					<a class="btn btn--light" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About', 'mytheme' ); ?></a>
					<a class="btn btn--primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get a quote', 'mytheme' ); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section__head">
			<div>
				<h2 class="section__title"><?php esc_html_e( 'Cardboard Processing', 'mytheme' ); ?></h2>
				<p class="section__sub"><?php esc_html_e( 'Big typography section + people strip (as seen in the screenshot).', 'mytheme' ); ?></p>
			</div>
		</div>

		<div class="team">
			<div class="team__left">
				<h3 class="team__title"><?php esc_html_e( 'We are your production partner.', 'mytheme' ); ?></h3>
				<p class="team__desc"><?php esc_html_e( 'Introduce your team and the quality promise here.', 'mytheme' ); ?></p>
			</div>
			<div class="avatars" aria-label="<?php esc_attr_e( 'Team members', 'mytheme' ); ?>">
				<span class="avatar" aria-hidden="true"></span>
				<span class="avatar" aria-hidden="true"></span>
				<span class="avatar" aria-hidden="true"></span>
				<span class="avatar" aria-hidden="true"></span>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<?php
		$posts_page_id = (int) get_option( 'page_for_posts' );
		$news_url      = $posts_page_id ? get_permalink( $posts_page_id ) : home_url( '/news/' );
		?>
		<div class="section__head">
			<div>
				<h2 class="section__title"><?php esc_html_e( 'News', 'mytheme' ); ?></h2>
				<p class="section__sub"><?php esc_html_e( 'Latest updates.', 'mytheme' ); ?></p>
			</div>
			<a class="btn" href="<?php echo esc_url( $news_url ); ?>"><?php esc_html_e( 'View all', 'mytheme' ); ?></a>
		</div>

		<?php
		$news_query = new WP_Query(
			array(
				'post_type'           => 'post',
				'posts_per_page'      => 3,
				'ignore_sticky_posts' => true,
			)
		);
		?>
		<?php if ( $news_query->have_posts() ) : ?>
			<div class="post-list">
				<?php while ( $news_query->have_posts() ) : ?>
					<?php $news_query->the_post(); ?>
					<article class="post-card">
						<div class="post-card__meta">
							<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
								<?php echo esc_html( get_the_date() ); ?>
							</time>
						</div>
						<h3 class="post-card__title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>
						<p class="post-card__excerpt">
							<?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?>
						</p>
					</article>
				<?php endwhile; ?>
			</div>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p class="muted"><?php esc_html_e( 'No news yet.', 'mytheme' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<section class="section section--alt">
	<div class="container">
		<div class="ig">
			<div class="ig__head">
				<h2 class="ig__title"><?php esc_html_e( 'Follow us', 'mytheme' ); ?></h2>
				<a class="btn" href="#"><?php esc_html_e( 'Instagram', 'mytheme' ); ?></a>
			</div>
			<div class="ig__grid" aria-hidden="true">
				<div class="ig__item"></div>
				<div class="ig__item"></div>
				<div class="ig__item"></div>
				<div class="ig__item"></div>
				<div class="ig__item"></div>
				<div class="ig__item"></div>
				<div class="ig__item"></div>
				<div class="ig__item"></div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();

