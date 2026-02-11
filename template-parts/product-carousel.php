<?php

/**
 * Template part: Used product carousel
 *
 * Args:
 * - articles (array) : List of product data
 */

$articles = isset($args['articles']) && is_array($args['articles']) ? $args['articles'] : array();
?>

<div class="relative bg-[#f4f2eb] lg:bg-transparent" data-carousel>
	<div class="flex gap-[15px] sm:gap-[20px] md:gap-[30px] justify-center items-center">
		<button class="bg-[#D2A573] w-[40px] sm:w-[45px] md:w-[50px] cursor-pointer h-[40px] sm:h-[45px] md:h-[50px] rounded-full flex items-center justify-center flex-shrink-0" type="button" aria-label="<?php esc_attr_e('Previous', 'mytheme'); ?>" data-carousel-prev>
			<svg xmlns="http://www.w3.org/2000/svg" width="9.193" height="15.557" viewBox="0 0 9.193 15.557">
				<path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M147.717,1645.06l-7.071-7.071,7.071-7.071" transform="translate(-139.231 -1630.21)" fill="none" stroke="#fff" stroke-width="2" />
			</svg>
		</button>
		<div class="w-[calc(100vw-120px)] sm:w-[380px] md:w-[790px] 2xl:w-[1200px] max-w-full overflow-hidden" data-carousel-viewport>
			<div class="flex gap-[20px] md:gap-[30px] transition-transform duration-300 ease-out" data-carousel-track>
				<?php foreach ($articles as $article) : ?>
					<?php
					$image = isset($article['image']) ? $article['image'] : '';
					$title = isset($article['title']) ? $article['title'] : '';
					$location = isset($article['location']) ? $article['location'] : '';
					$tag = isset($article['tag']) ? $article['tag'] : '';
					?>
					<article class="w-full sm:w-[380px] sm:max-w-[380px] flex-shrink-0 overflow-hidden bg-white shadow-[0_12px_26px_rgba(0,0,0,0.12)]">
						<div class="aspect-[190/133] overflow-hidden">
							<img class="h-full w-full object-cover" src="<?php echo esc_url($image); ?>" alt="" loading="lazy">
						</div>
						<div class="p-[20px] sm:p-[24px] md:p-[28px_30px_40px]">
							<h3 class="mb-[12px] sm:mb-[14px] md:mb-[16px] text-[16px] sm:text-[18px] md:text-[20px] leading-[1.45] tracking-[-0.02em] text-[#1f1c1a]"><?php echo esc_html($title); ?></h3>
							<p class="mb-[18px] sm:mb-[22px] md:mb-[25px] text-[11px] sm:text-[11px] md:text-[12px] text-[rgba(31,28,26,0.55)]"><?php echo esc_html($location); ?></p>
							<span class="inline-flex h-[18px] sm:h-[19px] md:h-[20px] items-center bg-[#6eba38] px-[8px] sm:px-[9px] md:px-[10px] text-[11px] sm:text-[11px] md:text-[12px] font-bold text-white"><?php echo esc_html($tag); ?></span>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
		<button class="bg-[#D2A573] cursor-pointer w-[40px] sm:w-[45px] md:w-[50px] h-[40px] sm:h-[45px] md:h-[50px] rounded-full flex items-center justify-center flex-shrink-0" type="button" aria-label="<?php esc_attr_e('Next', 'mytheme'); ?>" data-carousel-next>
			<svg xmlns="http://www.w3.org/2000/svg" width="9.193" height="15.557" viewBox="0 0 9.193 15.557">
				<path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M1451.94,1630.941l7.071,7.072-7.071,7.071" transform="translate(-1451.233 -1630.234)" fill="none" stroke="#fff" stroke-width="2" />
			</svg>

		</button>
	</div>

	<div class="mt-[20px] sm:mt-[25px] md:mt-[30px] flex items-center justify-center gap-[8px] md:gap-[10px]" data-carousel-dots>
	</div>
</div>