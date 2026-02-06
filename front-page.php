<?php

/**
 * Front page template.
 *
 * @package mytheme
 */
get_header();
?>

<section class="hero flex justify-end items-center">
	<img
		class="lg:w-[98vw] lg:h-auto"
		src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/hero.png'); ?>"
		alt="<?php echo esc_attr(get_bloginfo('hero')); ?>"
		loading="eager">
</section>

<?php
$top_asset = static function (string $base, string $fallback_rel): string {
  $dir = get_template_directory() . '/assets/img/top/';
  $uri = get_template_directory_uri() . '/assets/img/top/';

  $matches = glob($dir . $base . '.*');
  if ($matches && is_file($matches[0])) {
    return $uri . basename($matches[0]);
  }

  return get_template_directory_uri() . $fallback_rel;
};

$product_bg = $top_asset('product-bg', '/assets/img/hero-placeholder.svg');
$prod_1 = $top_asset('prod-1', '/assets/img/card-1.svg');
$prod_2 = $top_asset('prod-2', '/assets/img/card-2.svg');
$prod_3 = $top_asset('prod-3', '/assets/img/card-3.svg');
?>

<section class="top-existing pb-[60px] lg:pb-[100px]">
	<div class="mx-auto w-full max-w-[1600px]">
		<div class="top-existing__panel">
			<div class="top-existing__hero w-full">
				<img class="top-existing__hero-bg" src="<?php echo esc_url($product_bg); ?>" alt="" loading="lazy">

				<div class="top-existing__hero-content h-full lg:pt-[120px] lg:pl-[200px]">
					<p class="top-existing__kicker">
						<img class="top-existing__kicker-icon" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/product-icon.svg'); ?>" alt="" loading="lazy">
						<span class="text-[20px]"><?php esc_html_e('Product', 'mytheme'); ?></span>
					</p>
					<h2 class="top-existing__title mb-[34px]">
						<?php esc_html_e('高橋製作所オリジナル', 'mytheme'); ?><br>
						<?php esc_html_e('オーダー製品', 'mytheme'); ?>
					</h2>
					<p class="top-existing__lead mb-[44px]">
						<?php esc_html_e('お客様のご要望にお応えしてきた', 'mytheme'); ?><br>
						<?php esc_html_e('製作実績をご紹介します。', 'mytheme'); ?>
					</p>

					<a class="top-existing__cta lg:w-[266px] lg:h-[56px] relative" href="<?php echo esc_url(home_url('/used-product/')); ?>">
						<span class="text-center w-full"><?php esc_html_e('VIEW MORE', 'mytheme'); ?></span>
						<svg class="absolute top-1/2 -translate-y-1/2 right-[29px]" xmlns="http://www.w3.org/2000/svg" width="7.588" height="10.934" viewBox="0 0 7.588 10.934">
  						<path d="M431.405,1336.6l4.406,4.407-4.406,4.406" transform="translate(-430.345 -1335.541)" fill="none" stroke="#fff" stroke-width="3"/>
						</svg>
					</a>
				</div>
			</div>

			<div class="top-existing__carousel">
				
				<div class="flex gap-[30px] justify-center items-center">
					<button class="bg-[#D2A573] w-[50px] h-[50px] rounded-full flex items-center justify-center" type="button" aria-label="<?php esc_attr_e('Previous', 'mytheme'); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="9.193" height="15.557" viewBox="0 0 9.193 15.557">
  						<path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M147.717,1645.06l-7.071-7.071,7.071-7.071" transform="translate(-139.231 -1630.21)" fill="none" stroke="#fff" stroke-width="2"/>
						</svg>
					</button>
					<article class="top-existing__card max-w-[380px]">
						<div class="top-existing__card-media">
							<img src="<?php echo esc_url($prod_1); ?>" alt="" loading="lazy">
						</div>
						<div class="top-existing__card-body">
							<h3 class="top-existing__card-title"><?php esc_html_e('商品名が入ります商品名が入ります', 'mytheme'); ?></h3>
							<p class="top-existing__card-meta"><?php esc_html_e('大阪府｜ネット通販生産', 'mytheme'); ?></p>
							<span class="top-existing__tag"><?php esc_html_e('ダンボールパレットプレス機', 'mytheme'); ?></span>
						</div>
					</article>
					
					<article class="top-existing__card max-w-[380px]">
						<div class="top-existing__card-media">
							<img src="<?php echo esc_url($prod_2); ?>" alt="" loading="lazy">
						</div>
						<div class="top-existing__card-body">
							<h3 class="top-existing__card-title"><?php esc_html_e('商品名が入ります商品名が入ります', 'mytheme'); ?></h3>
							<p class="top-existing__card-meta"><?php esc_html_e('西宮市｜特殊塗装生産', 'mytheme'); ?></p>
							<span class="top-existing__tag"><?php esc_html_e('ダンボールスコア機付き機', 'mytheme'); ?></span>
						</div>
					</article>
					
					<article class="top-existing__card max-w-[380px]">
						<div class="top-existing__card-media">
							<img src="<?php echo esc_url($prod_3); ?>" alt="" loading="lazy">
						</div>
						<div class="top-existing__card-body">
							<h3 class="top-existing__card-title"><?php esc_html_e('商品名が入ります商品名が入ります', 'mytheme'); ?></h3>
							<p class="top-existing__card-meta"><?php esc_html_e('西宮市｜製造業', 'mytheme'); ?></p>
							<span class="top-existing__tag"><?php esc_html_e('トムソンカス製切機', 'mytheme'); ?></span>
						</div>
					</article>
					<button class="bg-[#D2A573] w-[50px] h-[50px] rounded-full flex items-center justify-center" type="button" aria-label="<?php esc_attr_e('Next', 'mytheme'); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="9.193" height="15.557" viewBox="0 0 9.193 15.557">
  <path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M1451.94,1630.941l7.071,7.072-7.071,7.071" transform="translate(-1451.233 -1630.234)" fill="none" stroke="#fff" stroke-width="2"/>
</svg>

					</button>
				</div>

				<div class="top-existing__dots" aria-hidden="true">
					<span class="top-existing__dot is-active"></span>
					<span class="top-existing__dot"></span>
					<span class="top-existing__dot"></span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section__head">
			<div>
				<h2 class="section__title"><?php esc_html_e('Business', 'mytheme'); ?></h2>
				<p class="section__sub"><?php esc_html_e('Cards section like your “事業紹介”.', 'mytheme'); ?></p>
			</div>
			<a class="btn" href="<?php echo esc_url(home_url('/support/')); ?>"><?php esc_html_e('View all', 'mytheme'); ?></a>
		</div>

		<div class="cards">
			<article class="card">
				<div class="card__media">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/card-1.svg'); ?>" alt="" loading="lazy">
				</div>
				<div class="card__body">
					<h3 class="card__title"><?php esc_html_e('Support', 'mytheme'); ?></h3>
					<p class="card__text"><?php esc_html_e('Short description goes here. Replace with your real copy.', 'mytheme'); ?></p>
					<a class="card__link" href="<?php echo esc_url(home_url('/support/')); ?>">
						<?php esc_html_e('Learn more', 'mytheme'); ?> <span aria-hidden="true">→</span>
					</a>
				</div>
			</article>

			<article class="card">
				<div class="card__media">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/card-2.svg'); ?>" alt="" loading="lazy">
				</div>
				<div class="card__body">
					<h3 class="card__title"><?php esc_html_e('Used Product', 'mytheme'); ?></h3>
					<p class="card__text"><?php esc_html_e('Use this for product lineup like the screenshot tiles.', 'mytheme'); ?></p>
					<a class="card__link" href="<?php echo esc_url(home_url('/used-product/')); ?>">
						<?php esc_html_e('Learn more', 'mytheme'); ?> <span aria-hidden="true">→</span>
					</a>
				</div>
			</article>

			<article class="card">
				<div class="card__media">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/card-3.svg'); ?>" alt="" loading="lazy">
				</div>
				<div class="card__body">
					<h3 class="card__title"><?php esc_html_e('About', 'mytheme'); ?></h3>
					<p class="card__text"><?php esc_html_e('Company profile and strengths.', 'mytheme'); ?></p>
					<a class="card__link" href="<?php echo esc_url(home_url('/about/')); ?>">
						<?php esc_html_e('Learn more', 'mytheme'); ?> <span aria-hidden="true">→</span>
					</a>
				</div>
			</article>
		</div>
	</div>
</section>



<section class="section">
	<div class="container">
		<div class="section__head">
			<div>
				<h2 class="section__title"><?php esc_html_e('Cardboard Processing', 'mytheme'); ?></h2>
				<p class="section__sub"><?php esc_html_e('Big typography section + people strip (as seen in the screenshot).', 'mytheme'); ?></p>
			</div>
		</div>

		<div class="team">
			<div class="team__left">
				<h3 class="team__title"><?php esc_html_e('We are your production partner.', 'mytheme'); ?></h3>
				<p class="team__desc"><?php esc_html_e('Introduce your team and the quality promise here.', 'mytheme'); ?></p>
			</div>
			<div class="avatars" aria-label="<?php esc_attr_e('Team members', 'mytheme'); ?>">
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
    $posts_page_id = (int) get_option('page_for_posts');
    $news_url = $posts_page_id ? get_permalink($posts_page_id) : home_url('/news/');
    ?>
		<div class="section__head">
			<div>
				<h2 class="section__title"><?php esc_html_e('News', 'mytheme'); ?></h2>
				<p class="section__sub"><?php esc_html_e('Latest updates.', 'mytheme'); ?></p>
			</div>
			<a class="btn" href="<?php echo esc_url($news_url); ?>"><?php esc_html_e('View all', 'mytheme'); ?></a>
		</div>

		<?php
    $news_query = new WP_Query(
      array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'ignore_sticky_posts' => true,
      )
    );
    ?>
		<?php if ($news_query->have_posts()): ?>
			<div class="post-list">
				<?php while ($news_query->have_posts()): ?>
					<?php $news_query->the_post(); ?>
					<article class="post-card">
						<div class="post-card__meta">
							<time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
								<?php echo esc_html(get_the_date()); ?>
							</time>
						</div>
						<h3 class="post-card__title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>
						<p class="post-card__excerpt">
							<?php echo esc_html(wp_strip_all_tags(get_the_excerpt())); ?>
						</p>
					</article>
				<?php endwhile; ?>
			</div>
			<?php wp_reset_postdata(); ?>
		<?php else: ?>
			<p class="muted"><?php esc_html_e('No news yet.', 'mytheme'); ?></p>
		<?php endif; ?>
	</div>
</section>

<section class="section section--alt">
	<div class="container">
		<div class="ig">
			<div class="ig__head">
				<h2 class="ig__title"><?php esc_html_e('Follow us', 'mytheme'); ?></h2>
				<a class="btn" href="#"><?php esc_html_e('Instagram', 'mytheme'); ?></a>
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
