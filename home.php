<?php

/**
 * Page template for News (slug: news).
 *
 * @package mytheme
 */
get_header();
?>

<!-- Hero section start -->
<?php
$hero_image = mytheme_img_asset('news/hero');
$hero_mesh = mytheme_img_asset('news/hero-mesh');
?>
<section class="about-hero relative px-0">
	<div class="aspect-[375/300] sm:aspect-[768/600] md:aspect-[1024/500] lg:aspect-[1440/550] 2xl:aspect-[1600/577] relative w-full">
		<img src="<?php echo esc_url($hero_mesh); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
			class="-z-10 absolute h-auto w-[94%] object-cover mx-auto left-1/2 -translate-x-1/2" />
		<div class="w-full py-[24px] sm:py-[30px] md:py-[36px] lg:py-[42px] 2xl:py-[46px]">
			<div class="flex flex-col md:flex-row justify-center md:justify-end items-center w-full gap-4 md:gap-0">
				<div class="text-center md:text-left md:mr-[56px] xl:mr-44 2xl:mr-56 order-2 md:order-1">
					<h1 class="text-[48px] sm:text-[60px] md:text-[75px] lg:text-[90px] 2xl:text-[110px] leading-[1.1] text-[#6EBA38]">News</h1>
					<p class="text-[18px] sm:text-[22px] md:text-[28px] lg:text-[32px] 2xl:text-[36px] font-bold">お知らせ</p>
				</div>
				<img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
					class="h-auto w-full max-w-[340px] md:w-[58%] md:max-w-none lg:w-[62%] 2xl:w-[64%] object-cover order-1 md:order-2 rounded-[20px] sm:rounded-none" />
			</div>
			<p class="text-[11px] sm:text-[12px] md:text-[13px] 2xl:text-[14px] opacity-70 mt-[12px] sm:mt-[16px] md:mt-[20px] w-full text-center md:text-right pr-0 md:pr-15 lg:pr-20 2xl:pr-30">TOP > お知らせ</p>
		</div>
	</div>
</section>
<!-- Hero section end -->

<!-- Lists news section start -->
<?php
$decoration_icon = mytheme_img_asset('news/product-icon');
?>
<section class="flow-section mt-[32px] sm:mt-[44px] md:mt-[54px] 2xl:mt-[67px] relative pb-[40px] sm:pb-[50px] 2xl:pb-[59px] px-4 sm:px-6 md:px-8">
	<div class="mx-auto max-w-[1200px] w-full flex flex-col lg:flex-row gap-6 sm:gap-8 lg:gap-[40px] 2xl:gap-[60px]">
		<div class="w-full min-w-0 2xl:w-[860px] 2xl:max-w-[860px] order-2 lg:order-1">
			<p class="text-[20px] sm:text-[22px] md:text-[24px] 2xl:text-[28px] font-medium">すべてのお知らせ一覧</p>
			<div class="mt-[20px] sm:mt-[24px] 2xl:mt-[28px] border-t border-primary/20">
				<?php
				// This template is a Page; the main loop is the page itself.
				// For the News list, query latest 10 posts.
				$news_query = new WP_Query(
					array(
						'post_type'           => 'post',
						'post_status'         => 'publish',
						'posts_per_page'      => 10,
						'ignore_sticky_posts' => true,
					)
				);
				?>

				<?php if ($news_query->have_posts()) : ?>
					<ul>
						<?php while ($news_query->have_posts()) : ?>
							<?php
							$news_query->the_post();
							$categories = get_the_category();
							$category_name = ($categories && ! is_wp_error($categories)) ? $categories[0]->name : __('News', 'mytheme');
							?>
							<li class="border-b border-primary/20">
								<a href="<?php the_permalink(); ?>" class="flex flex-col sm:flex-row sm:items-center gap-1 sm:gap-[16px] md:gap-[22px] py-[14px] sm:py-[16px] 2xl:py-[18px]">
									<div class="flex items-center gap-2 sm:gap-[16px] md:gap-[22px] flex-wrap">
										<time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>"
											class="w-[90px] sm:w-[100px] 2xl:w-[110px] shrink-0 text-[12px] sm:text-[13px] 2xl:text-[14px] text-primary/60">
											<?php echo esc_html(get_the_date('Y.m.d')); ?>
										</time>
										<span
											class="shrink-0 bg-secondary px-[10px] sm:px-[12px] 2xl:px-[14px] py-[3px] 2xl:py-[4px] text-[11px] sm:text-[12px] font-medium leading-none text-white">
											<?php echo esc_html($category_name); ?>
										</span>
									</div>
									<span class="min-w-0 flex-1 truncate text-[14px] sm:text-[15px] 2xl:text-[16px] text-primary sm:pl-0">
										<?php the_title(); ?>
									</span>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p class="py-[14px] sm:py-[18px] text-[14px] sm:text-[16px] text-primary/60">
						<?php esc_html_e('No news yet.', 'mytheme'); ?>
					</p>
				<?php endif; ?>
			</div>
		</div>
		<div class="w-full lg:w-[240px] xl:w-[260px] 2xl:w-[280px] flex-shrink-0">
			<div class="flex flex-row gap-[10px] 2xl:gap-[12px]">
				<img src="<?php echo esc_url($decoration_icon); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
					class="w-[24px] h-[24px] sm:w-[26px] sm:h-[26px] 2xl:w-[30px] 2xl:h-[30px]" />
				<p class="text-[22px] sm:text-[26px] 2xl:text-[30px] font-medium text-[#6EBA38]">Category</p>
			</div>
			<?php
			// Sidebar categories (fixed order). Hide items if the category is empty/non-existent.
			$news_category_items = array();

			// "All" should go back to this News listing page.
			$news_all_url = '';
			$queried_id   = function_exists('get_queried_object_id') ? (int) get_queried_object_id() : 0;
			if ($queried_id) {
				$news_all_url = get_permalink($queried_id);
			}
			if (empty($news_all_url)) {
				$news_all_url = home_url('/');
			}

			$news_category_items[] = array(
				'label'   => 'すべて',
				'url'     => $news_all_url,
				'enabled' => true,
			);

			$news_category_targets = array(
				array(
					'label' => 'お知らせ',
					'names' => array('お知らせ'),
					'slugs' => array('oshirase'),
				),
				array(
					'label' => 'メンテナンス',
					'names' => array('メンテナンス'),
					'slugs' => array('maintenance'),
				),
			);

			foreach ($news_category_targets as $target) {
				$term = null;

				foreach ($target['names'] as $name) {
					$term = get_term_by('name', $name, 'category');
					if ($term && ! is_wp_error($term)) {
						break;
					}
				}

				if (! $term) {
					foreach ($target['slugs'] as $slug) {
						$term = get_term_by('slug', $slug, 'category');
						if ($term && ! is_wp_error($term)) {
							break;
						}
					}
				}

				$enabled = ($term && ! is_wp_error($term) && (int) $term->count > 0);
				$url     = ($term && ! is_wp_error($term)) ? get_category_link($term) : '';

				// Always show the label; disable if missing/empty.
				$news_category_items[] = array(
					'label'   => $target['label'],
					'url'     => $url,
					'enabled' => $enabled,
				);
			}
			?>
			<?php if (! empty($news_category_items)) : ?>
				<ul class="mt-[16px] sm:mt-[20px] 2xl:mt-[22px] flex flex-col bg-white rounded-[12px] sm:rounded-[16px] 2xl:rounded-[20px] py-[12px] sm:py-[14px] 2xl:py-[15px]">
					<?php foreach ($news_category_items as $item) : ?>
						<li class="px-[14px] sm:px-[18px] 2xl:px-[20px] flex items-center justify-between">
							<?php if (! empty($item['enabled']) && ! empty($item['url'])) : ?>
								<a href="<?php echo esc_url($item['url']); ?>"
									class="flex items-center justify-between w-full text-[14px] sm:text-[15px] 2xl:text-[16px] text-primary/80 hover:text-primary py-1">
									<span class="text-[16px] sm:text-[18px] 2xl:text-[20px] font-medium w-[16px] sm:w-[18px] 2xl:w-[20px] text-[#6EBA38]">></span>
									<span>
										<?php echo esc_html($item['label']); ?>
									</span>
								</a>
							<?php else : ?>
								<span class="flex items-center justify-between w-full text-[14px] sm:text-[15px] 2xl:text-[16px] text-primary/40 py-1" aria-disabled="true">
									<span class="text-[16px] sm:text-[18px] 2xl:text-[20px] font-medium w-[16px] sm:w-[18px] 2xl:w-[20px] text-[#6EBA38]">></span>
									<span>
										<?php echo esc_html($item['label']); ?>
									</span>
								</span>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>

			<!-- Archive -->
			<div class="mt-[28px] sm:mt-[34px] 2xl:mt-[40px] w-full 2xl:w-[280px]">
				<div class="flex flex-row gap-[10px] 2xl:gap-[12px]">
					<img src="<?php echo esc_url($decoration_icon); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
						class="w-[24px] h-[24px] sm:w-[26px] sm:h-[26px] 2xl:w-[30px] 2xl:h-[30px]" />
					<p class="text-[22px] sm:text-[26px] 2xl:text-[30px] font-medium text-[#6EBA38]">Archive</p>
				</div>

				<?php
				global $wpdb;
				$news_years = array();
				if (isset($wpdb)) {
					$news_years = $wpdb->get_col(
						$wpdb->prepare(
							"SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_type = %s AND post_status = %s ORDER BY post_date DESC",
							'post',
							'publish'
						)
					);
				}
				?>

				<?php if (! empty($news_years)) : ?>
					<ul class="mt-[16px] sm:mt-[20px] 2xl:mt-[22px] bg-white rounded-[12px] sm:rounded-[16px] 2xl:rounded-[20px] py-[18px] sm:py-[22px] 2xl:py-[26px] flex flex-col gap-[20px] sm:gap-[24px] 2xl:gap-[28px]">
						<?php foreach ($news_years as $year) : ?>
							<?php $year = (int) $year; ?>
							<li class="px-[14px] sm:px-[18px] 2xl:px-[20px] flex items-center justify-between">
								<a href="<?php echo esc_url(get_year_link($year)); ?>"
									class="flex items-center justify-between w-full text-[14px] sm:text-[15px] 2xl:text-[16px] text-primary/80 hover:text-primary py-1">
									<span class="text-[16px] sm:text-[18px] 2xl:text-[20px] font-medium w-[16px] sm:w-[18px] 2xl:w-[20px] text-[#6EBA38]">></span>
									<span><?php echo esc_html($year . '年'); ?></span>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- Lists news section end -->

<?php
get_footer();
