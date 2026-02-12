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

// Base URL for news list (filter links stay on this page).
$posts_page_id = (int) get_option('page_for_posts');
$news_base_url  = $posts_page_id ? get_permalink($posts_page_id) : home_url('/news/');

// Current filter from URL (same page, filter only the list).
$filter_category = isset($_GET['category']) ? sanitize_text_field(wp_unslash($_GET['category'])) : '';
$filter_year     = isset($_GET['year']) ? absint($_GET['year']) : 0;

$news_query_args = array(
	'post_type'           => 'post',
	'post_status'         => 'publish',
	'posts_per_page'      => 10,
	'ignore_sticky_posts' => true,
);
if ($filter_category) {
	$news_query_args['category_name'] = $filter_category;
}
if ($filter_year) {
	$news_query_args['date_query'] = array(
		array(
			'year' => $filter_year,
		),
	);
}
$news_query = new WP_Query($news_query_args);

// List heading: reflect active filter.
$list_heading = __('すべてのお知らせ一覧', 'mytheme');
if ($filter_category) {
	$cat_term = get_term_by('slug', $filter_category, 'category');
	$list_heading = $cat_term && ! is_wp_error($cat_term) ? $cat_term->name . __('一覧', 'mytheme') : $list_heading;
} elseif ($filter_year) {
	$list_heading = sprintf(/* translators: %d: year */__('%d年のお知らせ一覧', 'mytheme'), $filter_year);
}
?>
<section class="flow-section mt-[32px] sm:mt-[44px] md:mt-[54px] 2xl:mt-[67px] relative pb-[40px] sm:pb-[50px] 2xl:pb-[59px] px-4 sm:px-6 md:px-8">
	<div class="mx-auto max-w-[1200px] w-full flex flex-col lg:flex-row gap-6 sm:gap-8 lg:gap-[40px] 2xl:gap-[60px] flex-col-reverse">
		<div class="w-full min-w-0 2xl:w-[860px] 2xl:max-w-[860px] order-1">
			<p class="text-[20px] sm:text-[22px] md:text-[24px] 2xl:text-[28px] font-medium"><?php echo esc_html($list_heading); ?></p>
			<div class="mt-[20px] sm:mt-[24px] 2xl:mt-[28px] border-t border-primary/20">
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
		<div class="w-full lg:w-[240px] xl:w-[260px] 2xl:w-[280px] flex-shrink-0 order-2">
			<div class="flex flex-row gap-[10px] 2xl:gap-[12px]">
				<img src="<?php echo esc_url($decoration_icon); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
					class="w-[24px] h-[24px] sm:w-[26px] sm:h-[26px] 2xl:w-[30px] 2xl:h-[30px]" />
				<p class="text-[22px] sm:text-[26px] 2xl:text-[30px] font-medium text-[#6EBA38]">Category</p>
			</div>
			<?php
			// Sidebar categories: filter on same page via ?category=slug (no template change).
			$news_category_items = array();

			// "All" = news page; keep year if filtering by year only.
			$all_url = $filter_year ? add_query_arg('year', $filter_year, $news_base_url) : $news_base_url;
			$news_category_items[] = array(
				'label'   => 'すべて',
				'url'     => $all_url,
				'enabled' => true,
				'active'  => ! $filter_category && ! $filter_year,
			);

			$news_categories = get_categories(array(
				'taxonomy'   => 'category',
				'orderby'    => 'name',
				'order'      => 'ASC',
				'hide_empty' => true,
			));

			foreach ($news_categories as $term) {
				if (is_wp_error($term)) {
					continue;
				}
				$cat_url = add_query_arg('category', $term->slug, $news_base_url);
				if ($filter_year) {
					$cat_url = add_query_arg('year', $filter_year, $cat_url);
				}
				$news_category_items[] = array(
					'label'   => $term->name,
					'url'     => $cat_url,
					'enabled' => (int) $term->count > 0,
					'active'  => $filter_category === $term->slug,
				);
			}
			?>
			<?php if (! empty($news_category_items)) : ?>
				<ul class="mt-[16px] sm:mt-[20px] 2xl:mt-[22px] flex flex-col bg-white rounded-[12px] sm:rounded-[16px] 2xl:rounded-[20px] py-[12px] sm:py-[14px] 2xl:py-[15px]">
					<?php foreach ($news_category_items as $item) : ?>
						<li class="px-[14px] sm:px-[18px] 2xl:px-[20px] flex items-center justify-between">
							<?php if (! empty($item['enabled']) && ! empty($item['url'])) : ?>
								<a href="<?php echo esc_url($item['url']); ?>"
									class="flex items-center justify-between w-full text-[14px] sm:text-[15px] 2xl:text-[16px] py-1 <?php echo ! empty($item['active']) ? 'text-[#6EBA38] font-semibold' : 'text-primary/80 hover:text-primary'; ?>">
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
						<?php foreach ($news_years as $y) : ?>
							<?php $y = (int) $y; ?>
							<?php $year_active = $filter_year === $y; ?>
							<?php $year_url = add_query_arg('year', $y, $news_base_url); ?>
							<?php if ($filter_category) {
								$year_url = add_query_arg('category', $filter_category, $year_url);
							} ?>
							<li class="px-[14px] sm:px-[18px] 2xl:px-[20px] flex items-center justify-between">
								<a href="<?php echo esc_url($year_url); ?>"
									class="flex items-center justify-between w-full text-[14px] sm:text-[15px] 2xl:text-[16px] py-1 <?php echo $year_active ? 'text-[#6EBA38] font-semibold' : 'text-primary/80 hover:text-primary'; ?>">
									<span class="text-[16px] sm:text-[18px] 2xl:text-[20px] font-medium w-[16px] sm:w-[18px] 2xl:w-[20px] text-[#6EBA38]">></span>
									<span><?php echo esc_html($y . '年'); ?></span>
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
