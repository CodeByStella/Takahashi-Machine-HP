<?php

/**
 * Single post template (News detail): /news/:slug
 * Content is built in WP Admin with blocks and colors.
 *
 * @package mytheme
 */

get_header();

$posts_page_id = (int) get_option('page_for_posts');
$news_url      = $posts_page_id ? get_permalink($posts_page_id) : home_url('/');
$hero_mesh     = mytheme_img_asset('news/hero-mesh');
?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : ?>
		<?php the_post(); ?>
		<?php
		$categories = get_the_category();
		$category_name = ($categories && ! is_wp_error($categories)) ? $categories[0]->name : __('お知らせ', 'mytheme');
		?>

		<!-- Hero section start -->
		<section class="about-hero relative">
			<div class="min-h-[300px] sm:min-h-[360px] md:min-h-[400px] relative w-full flex flex-col justify-center">
				<img src="<?php echo esc_url($hero_mesh); ?>" alt=""
					class="pointer-events-none absolute inset-0 -z-10 h-full w-full object-cover object-center" />
				<div class="relative z-0 w-full max-w-6xl mx-auto px-4 sm:px-6 md:px-8 lg:px-10 py-[24px] sm:py-[30px] md:py-[36px] lg:py-[42px] 2xl:py-[46px]">
					<p class="text-[11px] sm:text-[12px] md:text-[13px] 2xl:text-[14px] opacity-70 w-full text-right pr-0 md:pr-4 lg:pr-8 2xl:pr-12 truncate font-regular" title="TOP > お知らせ > <?php echo esc_attr(get_the_title()); ?>">
						<a href="<?php echo esc_url(home_url('/')); ?>">TOP</a> &gt; <a href="<?php echo esc_url($news_url); ?>">お知らせ</a> &gt; <span class="inline-block max-w-[60%] sm:max-w-[75%] truncate align-bottom"><?php the_title(); ?></span>
					</p>
					<div class="w-full pt-[16px] sm:pt-[20px] md:pt-[24px]">
						<div class="flex flex-wrap items-center gap-x-[12px] gap-y-2">
							<span class="shrink-0 bg-secondary px-[14px] py-[4px] text-[12px] font-medium leading-none text-white">
								<?php echo esc_html($category_name); ?>
							</span>
							<h1 class="min-w-0 text-[16px] sm:text-[18px] md:text-[20px] lg:text-[22px] 2xl:text-[24px] font-bold leading-[1.3] break-words">
								<?php the_title(); ?>
							</h1>
						</div>
						<p class="text-[12px] sm:text-[13px] 2xl:text-[14px] text-primary/60 mt-[12px] font-regular">
							<time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
								<?php echo esc_html(get_the_date('Y.m.d')); ?>
							</time>
						</p>
					</div>
				</div>
			</div>
		</section>
		<!-- Hero section end -->

		<!-- News content (blocks, colors from WP Admin) -->
		<section class="news-single-content">
			<div class="max-w-6xl mx-auto px-4 sm:px-6 md:px-8 lg:px-10 py-[32px] sm:py-[40px] md:py-[48px] 2xl:py-[59px]">
				<div class="prose prose-lg max-w-none news-content">
					<?php the_content(); ?>
				</div>
			</div>
		</section>

		<!-- Back to list -->
		<section>
			<div class="max-w-6xl mx-auto px-4 sm:px-6 md:px-8 lg:px-10 mt-[24px] border-t-2 flex justify-center py-[20px]">
				<a href="<?php echo esc_url($news_url); ?>"
					class="flex justify-center items-center bg-black px-[20px] py-[17px] rounded-[27px] w-[260px] hover:opacity-90 transition-opacity">
					<span class="text-[14px] font-medium text-white text-center">BACK TO LIST</span>
					<span class="font-bold text-white ml-2">&gt;</span>
				</a>
			</div>
		</section>

	<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
