<?php

/**
 * Front page template.
 *
 * @package mytheme
 */
get_header();
?>

<section class="hero pb-[20px] sm:pb-[40px] md:pb-[50px] lg:pb-[80px] xl:pb-[100px] 2xl:pb-[113px] flex justify-end items-center">
	<img
		class="w-full sm:w-[99%] md:w-[98%] h-auto"
		src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/hero.png'); ?>"
		alt="<?php echo esc_attr(get_bloginfo('hero')); ?>"
		loading="eager">
</section>

<!-- Product section start -->
<?php
$product_bg = mytheme_img_asset('top/product-bg');
$product_bg_sp = mytheme_img_asset('top/product-bg-sp');
$prod_1 = mytheme_img_asset('top/prod-1');
$prod_2 = mytheme_img_asset('top/prod-2');
$prod_3 = mytheme_img_asset('top/prod-3');
?>

<section class="pb-[40px] sm:pb-[50px] md:pb-[60px] lg:pb-[80px] xl:pb-[90px] 2xl:pb-[100px]">
	<div class="mx-auto w-full">
		<div class="overflow-hidden">
			<div class="relative aspect-[1330/990] sm:aspect-[1600/622] w-full">
				<img class="absolute inset-0 h-full w-full object-cover invisible sm:visible" src="<?php echo esc_url($product_bg); ?>" alt="" loading="lazy">
				<img class="absolute inset-0 h-full w-full object-cover visible sm:invisible" src="<?php echo esc_url($product_bg_sp); ?>" alt="" loading="lazy">

				<div class="relative z-10 h-full text-white px-[20px] sm:px-[40px] md:px-[80px] lg:px-[150px] xl:px-[180px] 2xl:pl-[200px] pt-[30px] sm:pt-[50px] md:pt-[60px] lg:pt-[40px] xl:pt-[100px] 2xl:pt-[120px]">
					<p class="mb-[12px] sm:mb-[16px] md:mb-[10px] 2xl:mb-[24px] inline-flex items-center gap-[8px] md:gap-[10px] text-white/75">
						<img class="top-kicker-icon w-[12px] sm:w-[14px] md:w-[16px]" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/product-icon.svg'); ?>" alt="" loading="lazy">
						<span class="text-[14px] sm:text-[16px] md:text-[18px] 2xl:text-[20px] text-[#6EBA38]"><?php esc_html_e('Product', 'mytheme'); ?></span>
					</p>
					<h2 class="mb-[20px] sm:mb-[24px] md:mb-[16px] 2xl:mb-[34px] text-[24px] sm:text-[28px] md:text-[32px] lg:text-[36px] xl:text-[40px] 2xl:text-[44px] font-bold leading-[1.35] tracking-[0.02em]">
						<?php esc_html_e('高橋製作所オリジナル', 'mytheme'); ?><br>
						<?php esc_html_e('オーダー製品', 'mytheme'); ?>
					</h2>
					<p class="mb-[24px] sm:mb-[30px] md:mb-[20px] 2xl:mb-[44px] text-[13px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] leading-[1.8] text-white/85">
						<?php esc_html_e('お客様のご要望にお応えしてきた', 'mytheme'); ?><br>
						<?php esc_html_e('製作実績をご紹介します。', 'mytheme'); ?>
					</p>

					<?php
					get_template_part(
						'template-parts/view-more',
						null,
						array(
							'url'   => home_url('/used-product/'),
							'label' => __('VIEW MORE', 'mytheme'),
						)
					);
					?>
				</div>
			</div>

			<div class="mt-[20px] sm:mt-[30px] md:mt-[40px] lg:-mt-[50px] xl:-mt-[70px] 2xl:-mt-[95px]">
				<?php
				$used_product_articles = array(
					array(
						'image'    => $prod_1,
						'title'    => __('商品名が入ります商品名が入ります', 'mytheme'),
						'location' => __('大阪府｜ネット通販生産', 'mytheme'),
						'tag'      => __('ダンボールパレットプレス機', 'mytheme'),
					),
					array(
						'image'    => $prod_2,
						'title'    => __('商品名が入ります商品名が入ります', 'mytheme'),
						'location' => __('西宮市｜特殊塗装生産', 'mytheme'),
						'tag'      => __('ダンボールスコア機付き機', 'mytheme'),
					),
					array(
						'image'    => $prod_3,
						'title'    => __('商品名が入ります商品名が入ります', 'mytheme'),
						'location' => __('西宮市｜製造業', 'mytheme'),
						'tag'      => __('トムソンカス製切機', 'mytheme'),
					),
					array(
						'image'    => $prod_3,
						'title'    => __('商品名が入ります商品名が入ります', 'mytheme'),
						'location' => __('西宮市｜製造業', 'mytheme'),
						'tag'      => __('トムソンカス製切機', 'mytheme'),
					),
					array(
						'image'    => $prod_3,
						'title'    => __('商品名が入ります商品名が入ります', 'mytheme'),
						'location' => __('西宮市｜製造業', 'mytheme'),
						'tag'      => __('トムソンカス製切機', 'mytheme'),
					),
					array(
						'image'    => $prod_3,
						'title'    => __('商品名が入ります商品名が入ります', 'mytheme'),
						'location' => __('西宮市｜製造業', 'mytheme'),
						'tag'      => __('トムソンカス製切機', 'mytheme'),
					),
				);
				get_template_part(
					'template-parts/product-carousel',
					null,
					array(
						'articles' => $used_product_articles,
					)
				);
				?>
			</div>
		</div>
	</div>
</section>
<!-- Product section end -->


<!-- Existing Product section start -->
<?php
$product_bg = mytheme_img_asset('top/machine');
$product_bg_sp = mytheme_img_asset('top/machine-sp');
$prod_1 = mytheme_img_asset('top/prod-1');
$prod_2 = mytheme_img_asset('top/prod-2');
$prod_3 = mytheme_img_asset('top/prod-3');
?>

<section class="pb-[40px] sm:pb-[50px] md:pb-[60px] lg:pb-[80px] xl:pb-[90px] 2xl:pb-[100px]">
	<div class="mx-auto w-full">
		<div class="overflow-hidden">
			<div class="relative aspect-[1330/990] sm:aspect-[1600/462] w-full">
				<img class="absolute inset-0 h-full w-full object-cover invisible sm:visible" src="<?php echo esc_url($product_bg); ?>" alt="" loading="lazy">
				<img class="absolute inset-0 h-full w-full object-cover visible sm:invisible" src="<?php echo esc_url($product_bg_sp); ?>" alt="" loading="lazy">

				<div class="relative z-10 h-full text-white px-[20px] sm:px-[40px] md:px-[80px] lg:px-[150px] xl:px-[180px] 2xl:px-[200px] pt-[30px] sm:pt-[50px] md:pt-[60px] lg:pt-[40px] xl:pt-[100px] 2xl:pt-[120px]">
					<p class="mb-[12px] sm:mb-[16px] md:mb-[10px] 2xl:mb-[22px] inline-flex items-center gap-[8px] md:gap-[10px] text-white/75">
						<img class="existing-product-kicker-icon w-[12px] sm:w-[14px] md:w-[16px]" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/product-icon.svg'); ?>" alt="" loading="lazy">
						<span class="text-[14px] sm:text-[16px] md:text-[18px] 2xl:text-[20px] text-[#6EBA38]"><?php esc_html_e('Existing Product', 'mytheme'); ?></span>
					</p>
					<h2 class="mb-[20px] sm:mb-[24px] md:mb-[16px] 2xl:mb-[34px] text-[24px] sm:text-[28px] md:text-[32px] lg:text-[36px] xl:text-[40px] 2xl:text-[44px] font-bold leading-[1.35] tracking-[0.02em]">
						<?php esc_html_e('既存製品一覧', 'mytheme'); ?><br>
					</h2>
					<div class="flex flex-col sm:flex-row justify-between w-full gap-[16px] sm:gap-[20px] 2xl:gap-[24px] items-start sm:items-end">
						<p class="text-[13px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] leading-[1.8] text-white opacity-30">
							<?php esc_html_e('様々な製品を取り揃え、', 'mytheme'); ?><br />
							<?php esc_html_e('全国の工場で幅広くご愛用いただいております。', 'mytheme'); ?>
						</p>
						<?php
						get_template_part(
							'template-parts/view-more',
							null,
							array(
								'url'   => home_url('/used-product/'),
								'label' => __('VIEW MORE', 'mytheme'),
							)
						);
						?>
					</div>
				</div>
			</div>

			<div class="mt-[20px] sm:mt-[30px] md:mt-[40px] lg:-mt-[50px] xl:-mt-[70px] 2xl:-mt-[95px]">
				<?php
				$used_product_articles = array(
					array(
						'image'    => $prod_1,
						'title'    => __('商品名が入ります商品名が入ります', 'mytheme'),
						'location' => __('大阪府｜ネット通販生産', 'mytheme'),
						'tag'      => __('ダンボールパレットプレス機', 'mytheme'),
					),
					array(
						'image'    => $prod_2,
						'title'    => __('商品名が入ります商品名が入ります', 'mytheme'),
						'location' => __('西宮市｜特殊塗装生産', 'mytheme'),
						'tag'      => __('ダンボールスコア機付き機', 'mytheme'),
					),
					array(
						'image'    => $prod_3,
						'title'    => __('商品名が入ります商品名が入ります', 'mytheme'),
						'location' => __('西宮市｜製造業', 'mytheme'),
						'tag'      => __('トムソンカス製切機', 'mytheme'),
					),
					array(
						'image'    => $prod_3,
						'title'    => __('商品名が入ります商品名が入ります', 'mytheme'),
						'location' => __('西宮市｜製造業', 'mytheme'),
						'tag'      => __('トムソンカス製切機', 'mytheme'),
					),
					array(
						'image'    => $prod_3,
						'title'    => __('商品名が入ります商品名が入ります', 'mytheme'),
						'location' => __('西宮市｜製造業', 'mytheme'),
						'tag'      => __('トムソンカス製切機', 'mytheme'),
					),
					array(
						'image'    => $prod_3,
						'title'    => __('商品名が入ります商品名が入ります', 'mytheme'),
						'location' => __('西宮市｜製造業', 'mytheme'),
						'tag'      => __('トムソンカス製切機', 'mytheme'),
					),
				);
				get_template_part(
					'template-parts/product-carousel',
					null,
					array(
						'articles' => $used_product_articles,
					)
				);
				?>
			</div>
		</div>

	</div>
</section>
<!-- Existing Product section end -->


<!-- Used Product section start -->
<?php
$product_bg = mytheme_img_asset('top/mesh');
$prod_1 = mytheme_img_asset('top/prod-1');
$prod_2 = mytheme_img_asset('top/prod-2');
$prod_3 = mytheme_img_asset('top/prod-3');
?>

<section class="pb-[40px] sm:pb-[50px] md:pb-[60px] lg:pb-[80px] xl:pb-[90px] 2xl:pb-[100px]">
	<div class="mx-auto w-full">
		<div class="overflow-hidden">
			<div class="relative aspect-[1600/990] sm:aspect-[1600/449] w-full">
				<img class="absolute inset-0 h-full w-full object-contain" src="<?php echo esc_url($product_bg); ?>" alt="" loading="lazy">

				<div class="relative z-10 h-full px-[20px] sm:px-[40px] md:px-[80px] lg:px-[150px] xl:px-[180px] 2xl:px-[200px] pt-[30px] sm:pt-[50px] md:pt-[60px] lg:pt-[40px] xl:pt-[100px] 2xl:pt-[120px]">
					<p class="mb-[12px] sm:mb-[16px] md:mb-[10px] 2xl:mb-[24px] inline-flex items-center gap-[8px] md:gap-[10px] text-[#1f1c1a]">
						<img class="used-product-kicker-icon w-[12px] sm:w-[14px] md:w-[16px]" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/product-icon.svg'); ?>" alt="" loading="lazy">
						<span class="text-[14px] sm:text-[16px] md:text-[18px] 2xl:text-[20px] text-[#6EBA38]"><?php esc_html_e('Used Product', 'mytheme'); ?></span>
					</p>
					<h2 class="mb-[20px] sm:mb-[24px] md:mb-[16px] 2xl:mb-[34px] text-[24px] sm:text-[28px] md:text-[32px] lg:text-[36px] xl:text-[40px] 2xl:text-[44px] font-bold leading-[1.35] tracking-[0.02em] text-[#1f1c1a]">
						<?php esc_html_e('中古製品一覧', 'mytheme'); ?><br>
					</h2>
					<div class="flex flex-col sm:flex-row justify-between w-full gap-[16px] sm:gap-[20px] 2xl:gap-[24px] items-start sm:items-end">
						<p class="text-[13px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] leading-[1.8] text-[#1f1c1a] opacity-70">
							<?php esc_html_e('非常に良質な中古機器を揃えており、', 'mytheme'); ?><br />
							<?php esc_html_e('販売はもちろんカスタマイズなど承っております。', 'mytheme'); ?>
						</p>
						<?php
						get_template_part(
							'template-parts/view-more',
							null,
							array(
								'url'   => home_url('/used-product/'),
								'label' => __('VIEW MORE', 'mytheme'),
							)
						);
						?>
					</div>
				</div>
			</div>

			<div class="mt-[20px] sm:mt-[30px] md:mt-[40px] lg:-mt-[50px] xl:-mt-[70px] 2xl:-mt-[95px]">
				<?php
				$used_product_articles = array(
					array(
						'image'    => $prod_1,
						'title'    => __('商品名が入ります商品名が入ります', 'mytheme'),
						'location' => __('大阪府｜ネット通販生産', 'mytheme'),
						'tag'      => __('ダンボールパレットプレス機', 'mytheme'),
					),
					array(
						'image'    => $prod_2,
						'title'    => __('商品名が入ります商品名が入ります', 'mytheme'),
						'location' => __('西宮市｜特殊塗装生産', 'mytheme'),
						'tag'      => __('ダンボールスコア機付き機', 'mytheme'),
					),
					array(
						'image'    => $prod_3,
						'title'    => __('商品名が入ります商品名が入ります', 'mytheme'),
						'location' => __('西宮市｜製造業', 'mytheme'),
						'tag'      => __('トムソンカス製切機', 'mytheme'),
					),
					array(
						'image'    => $prod_3,
						'title'    => __('商品名が入ります商品名が入ります', 'mytheme'),
						'location' => __('西宮市｜製造業', 'mytheme'),
						'tag'      => __('トムソンカス製切機', 'mytheme'),
					),
					array(
						'image'    => $prod_3,
						'title'    => __('商品名が入ります商品名が入ります', 'mytheme'),
						'location' => __('西宮市｜製造業', 'mytheme'),
						'tag'      => __('トムソンカス製切機', 'mytheme'),
					),
					array(
						'image'    => $prod_3,
						'title'    => __('商品名が入ります商品名が入ります', 'mytheme'),
						'location' => __('西宮市｜製造業', 'mytheme'),
						'tag'      => __('トムソンカス製切機', 'mytheme'),
					),
				);
				get_template_part(
					'template-parts/product-carousel',
					null,
					array(
						'articles' => $used_product_articles,
					)
				);
				?>
			</div>
		</div>

	</div>
</section>
<!-- Used Product section end -->

<!-- CARDBOARD PROCESSING SECTION START -->
<?php
$mesh_bg = mytheme_img_asset('top/mesh2');
$person1 = mytheme_img_asset('top/person1');
$person2 = mytheme_img_asset('top/person2');
$person3 = mytheme_img_asset('top/person3');
$person4 = mytheme_img_asset('top/person4');
$person5 = mytheme_img_asset('top/person5');
?>

<div class="max-w-screen overflow-hidden">
	<section class="section relative pb-[50px] sm:pb-[60px] md:pb-[70px] lg:pb-[80px] xl:pb-[90px] 2xl:pb-[100px]">
		<div class="relative flex justify-center h-full w-full aspect-[1600/577]">
			<img src="<?php echo esc_url($mesh_bg); ?>" alt="" aria-hidden="true" class="absolute h-full w-[94%] -z-10">
			<?php
			get_template_part(
				'template-parts/marquee',
				null,
				array(
					'text' => 'Cardboard Processing Machines that Increase On-site Productivity',
				)
			);
			?>
			<div class="text-center mt-[46px] sm:mt-[120px] md:mt-[160px] xl:mt-[210px] 2xl:mt-[230px] px-4">
				<p class="text-[18px] sm:text-[22px] md:text-[28px] lg:text-[32px] xl:text-[36px] 2xl:text-[40px] text-[#5b5246] leading-[1.4] md:leading-[1.6] lg:leading-[2] 2xl:leading-[3.5rem]">
					<?php esc_html_e('現場の⽣産性を上げる', 'mytheme'); ?><br>
					<?php esc_html_e('ダンボール加⼯機械をご提供します', 'mytheme'); ?>
				</p>
				<p class="mt-[12px] sm:mt-[38px] md:mt-4 2xl:mt-[58px] inline-block text-[14px] sm:text-[16px] md:text-[18px] lg:text-[20px] 2xl:text-[24px] text-[#5b5246]">
					<?php esc_html_e('こんなお悩みご相談ください！', 'mytheme'); ?>
				<div class="rounded-full bg-white w-[200px] sm:w-[240px] md:w-[280px] lg:w-[310px] 2xl:w-[338px] h-[8px] sm:h-[9px] md:h-[11px] 2xl:h-[13px] -mt-[8px] sm:-mt-[9px] md:-mt-[11px] 2xl:-mt-[13px] mx-auto"></div>
				</p>
			</div>
		</div>

		<ul class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 justify-items-center gap-[0px] sm:gap-[25px] md:gap-[30px] lg:gap-[35px] 2xl:gap-[40px] mt-[40px] 2xl:-mt-[100px] px-4 sm:px-6 md:px-8 lg:px-10">
			<li class="flex flex-col items-center">
				<img src="<?php echo esc_url($person1); ?>" alt="" loading="lazy" class="aspect-square h-[100px] w-[100px] sm:h-[120px] sm:w-[120px] md:h-[150px] md:w-[150px] lg:h-[180px] lg:w-[180px] 2xl:h-[200px] 2xl:w-[200px] rounded-full object-cover">
				<p class="mt-[10px] sm:mt-[12px] md:mt-[15px] 2xl:mt-[18px] w-[100px] sm:w-[120px] md:w-[150px] lg:w-[180px] 2xl:w-[200px] min-h-[50px] sm:min-h-[55px] md:min-h-[60px] lg:min-h-[70px] 2xl:h-[77px] text-[12px] sm:text-[13px] md:text-[15px] lg:text-[16px] 2xl:text-[18px] text-center -tracking-[0.08em] sm:tracking-none">
					<?php esc_html_e('ダンボール加工', 'mytheme'); ?>
					<?php esc_html_e('機械を探している', 'mytheme'); ?>
				</p>
			</li>
			<li class="flex flex-col items-center">
				<img src="<?php echo esc_url($person2); ?>" alt="" loading="lazy" class="aspect-square h-[100px] w-[100px] sm:h-[120px] sm:w-[120px] md:h-[150px] md:w-[150px] lg:h-[180px] lg:w-[180px] 2xl:h-[200px] 2xl:w-[200px] rounded-full object-cover">
				<p class="mt-[10px] sm:mt-[12px] md:mt-[15px] 2xl:mt-[18px] w-[100px] sm:w-[120px] md:w-[150px] lg:w-[180px] 2xl:w-[200px] min-h-[50px] sm:min-h-[55px] md:min-h-[60px] lg:min-h-[70px] 2xl:h-[77px] text-[12px] sm:text-[13px] md:text-[15px] lg:text-[16px] 2xl:text-[18px] text-center -tracking-[0.08em] sm:tracking-none">
					<?php esc_html_e('オリジナルの', 'mytheme'); ?><br />
					<?php esc_html_e('装置を作りたい', 'mytheme'); ?>
				</p>
			</li>
			<li class="flex flex-col items-center">
				<img src="<?php echo esc_url($person3); ?>" alt="" loading="lazy" class="aspect-square h-[100px] w-[100px] sm:h-[120px] sm:w-[120px] md:h-[150px] md:w-[150px] lg:h-[180px] lg:w-[180px] 2xl:h-[200px] 2xl:w-[200px] rounded-full object-cover">
				<p class="mt-[10px] sm:mt-[12px] md:mt-[15px] 2xl:mt-[18px] w-[100px] sm:w-[120px] md:w-[150px] lg:w-[180px] 2xl:w-[200px] min-h-[50px] sm:min-h-[55px] md:min-h-[60px] lg:min-h-[70px] 2xl:h-[77px] text-[12px] sm:text-[13px] md:text-[15px] lg:text-[16px] 2xl:text-[18px] text-center -tracking-[0.08em] sm:tracking-none">
					<?php esc_html_e('アフターサービスを', 'mytheme'); ?><br />
					<?php esc_html_e('しっかり頼みたい', 'mytheme'); ?>
				</p>
			</li>
			<li class="flex flex-col items-center">
				<img src="<?php echo esc_url($person4); ?>" alt="" loading="lazy" class="aspect-square h-[100px] w-[100px] sm:h-[120px] sm:w-[120px] md:h-[150px] md:w-[150px] lg:h-[180px] lg:w-[180px] 2xl:h-[200px] 2xl:w-[200px] rounded-full object-cover">
				<p class="mt-[10px] sm:mt-[12px] md:mt-[15px] 2xl:mt-[18px] w-[100px] sm:w-[120px] md:w-[150px] lg:w-[180px] 2xl:w-[200px] min-h-[50px] sm:min-h-[55px] md:min-h-[60px] lg:min-h-[70px] 2xl:h-[77px] text-[12px] sm:text-[13px] md:text-[15px] lg:text-[16px] 2xl:text-[18px] text-center -tracking-[0.08em] sm:tracking-none">
					<?php esc_html_e('適切なコストで', 'mytheme'); ?><br />
					<?php esc_html_e('購入したい', 'mytheme'); ?>
				</p>
			</li>
			<li class="flex flex-col items-center col-span-2 sm:col-span-1">
				<img src="<?php echo esc_url($person5); ?>" alt="" loading="lazy" class="aspect-square h-[100px] w-[100px] sm:h-[120px] sm:w-[120px] md:h-[150px] md:w-[150px] lg:h-[180px] lg:w-[180px] 2xl:h-[200px] 2xl:w-[200px] rounded-full object-cover">
				<p class="mt-[10px] sm:mt-[12px] md:mt-[15px] 2xl:mt-[18px] w-[100px] sm:w-[120px] md:w-[150px] lg:w-[180px] 2xl:w-[200px] min-h-[50px] sm:min-h-[55px] md:min-h-[60px] lg:min-h-[70px] 2xl:h-[77px] text-[12px] sm:text-[13px] md:text-[15px] lg:text-[16px] 2xl:text-[18px] text-center -tracking-[0.08em] sm:tracking-none">
					<?php esc_html_e('他社製品だけど', 'mytheme'); ?><br />
					<?php esc_html_e('修理や改造がしたい', 'mytheme'); ?>
				</p>
			</li>
		</ul>
	</section>
</div>

<!-- CARDBOARD PROCESSING SECTION END -->

<?php get_template_part('template-parts/section', 'enquiry'); ?>

<!-- FollowUs section start -->
<?php
$footer_asset = static function (string $base, string $fallback_rel): string {
	$dir = get_template_directory() . '/assets/img/footer/';
	$uri = get_template_directory_uri() . '/assets/img/footer/';

	$matches = glob($dir . $base . '.*');
	if ($matches && is_file($matches[0])) {
		return $uri . basename($matches[0]);
	}

	return get_template_directory_uri() . $fallback_rel;
};

$facebook_icon = $footer_asset('facebook-blue', '/assets/img/hero-placeholder.svg');
$instagram_icon = $footer_asset('instagram', '/assets/img/footer/instagram-icon.svg');

$banner = mytheme_img_asset('top/banner');
$blog_banner = mytheme_img_asset('top/blog-banner');
$item = mytheme_img_asset('top/item');
$tsicon = mytheme_img_asset('top/ts-icon');
?>
<section class="section pt-[40px] sm:pt-[50px] md:pt-[60px] lg:pt-[70px] xl:pt-[80px] 2xl:pt-[90px] pb-[60px] sm:pb-[70px] md:pb-[80px] lg:pb-[100px] xl:pb-[115px] 2xl:pb-[130px]">

	<div class="w-[95%] sm:w-[90%] md:w-[85%] lg:w-[80%] 2xl:w-[75%] mx-auto px-4 sm:px-0">
		<p class="text-[32px] sm:text-[38px] md:text-[44px] lg:text-[50px] xl:text-[55px] 2xl:text-[60px] w-full text-[#6EBA38] text-center mb-[20px] sm:mb-[24px] md:mb-[28px] lg:mb-[32px] 2xl:mb-[36px]"><?php esc_html_e('Follow us !', 'mytheme'); ?></p>
		<div class="pt-[30px] sm:pt-[40px] md:pt-[50px] 2xl:pt-[60px] pb-[40px] sm:pb-[50px] md:pb-[60px] 2xl:pb-[70px] px-[20px] sm:px-[30px] md:px-[50px] lg:px-[65px] 2xl:px-[80px] bg-white rounded-[8px] md:rounded-[10px] 2xl:rounded-[12px] flex flex-col lg:flex-row justify-between gap-[30px] md:gap-[40px] lg:gap-[30px]">
			<div class="w-full lg:w-[48%] 2xl:w-[464px]">
				<div class="flex mb-[12px] sm:mb-[15px] 2xl:mb-[20px] gap-[8px] md:gap-[10px] 2xl:gap-[12px]">
					<img src="<?php echo esc_url($facebook_icon); ?>" alt="" class="w-[24px] h-[24px] sm:w-[26px] sm:h-[26px] 2xl:w-[30px] 2xl:h-[30px] aspect-square object-cover rounded-full">
					<p class="text-[16px] sm:text-[18px] 2xl:text-[20px] text-[#1F1C1A] text-center"><?php esc_html_e('Facebook', 'mytheme'); ?></p>
				</div>
				<div class="w-full relative aspect-[464/109] p-[8px] sm:p-[10px] 2xl:p-[12px] flex gap-[8px] sm:gap-[10px] 2xl:gap-[12px] border border-[#70707090]">
					<img src="<?php echo esc_url($banner); ?>" alt="" class="z-0 absolute top-0 left-0 bottom-0 right-0 w-full h-full object-cover">
					<img src="<?php echo esc_url($tsicon); ?>" alt="" class="z-10 w-[45px] h-[45px] sm:w-[55px] sm:h-[55px] 2xl:w-[65px] 2xl:h-[65px] aspect-square object-cover">
					<p class="text-[12px] sm:text-[14px] 2xl:text-[16px] text-white z-10"> <?php esc_html_e('株式会社 髙橋製作所 / ダンボール機械の設計製作', 'mytheme'); ?></p>
				</div>
				<div class="max-h-[250px] sm:max-h-[280px] 2xl:max-h-[312px] p-[8px] sm:p-[9px] 2xl:p-[10px] overflow-y-auto bg-[#F5F6F7]">
					<div class="w-full h-fit bg-white">
						<img src="<?php echo esc_url($blog_banner); ?>" alt="" class="w-full object-cover" />
						<div class="p-[8px] sm:p-[10px] 2xl:p-[12px]">
							<div class="flex items-center gap-[8px] sm:gap-[10px] 2xl:gap-[12px]">
								<img src="<?php echo esc_url($tsicon); ?>" alt="" class="z-10 rounded-full w-[36px] h-[36px] sm:w-[38px] sm:h-[38px] 2xl:w-[42px] 2xl:h-[42px] aspect-square object-cover">
								<p class="text-[10px] sm:text-[11px] 2xl:text-[12px]"> <?php esc_html_e('株式会社 髙橋製作所 / ダンボール機械の設計製作', 'mytheme'); ?></p>
							</div>
							<div class="flex flex-col gap-[8px] sm:gap-[10px] 2xl:gap-[12px]">
								<p class="text-[10px] sm:text-[11px] 2xl:text-[12px]">ダンボール（B段.E段.G段）カットする</p>
								<p class="text-[10px] sm:text-[11px] 2xl:text-[12px]">オートスリッターを製作納品致しました</p>
								<p class="text-[10px] sm:text-[11px] 2xl:text-[12px]">厚み薄いものは中々難しいかったです</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="w-full lg:w-[48%] 2xl:w-[490px]">
				<div class="flex mb-[12px] sm:mb-[15px] 2xl:mb-[20px] gap-[8px] md:gap-[10px] 2xl:gap-[12px]">
					<img src="<?php echo esc_url($instagram_icon); ?>" alt="" class="w-[24px] h-[24px] sm:w-[26px] sm:h-[26px] 2xl:w-[30px] 2xl:h-[30px] aspect-square object-cover rounded-full">
					<p class="text-[16px] sm:text-[18px] 2xl:text-[20px] text-[#1F1C1A] text-center"><?php esc_html_e('Instagram', 'mytheme'); ?></p>
				</div>
				<div class="grid grid-cols-3 gap-[12px] sm:gap-[15px] md:gap-[17px] 2xl:gap-[20px]">
					<img src="<?php echo esc_url($item); ?>" alt="" class="w-full object-cover">
					<img src="<?php echo esc_url($item); ?>" alt="" class="w-full object-cover">
					<img src="<?php echo esc_url($item); ?>" alt="" class="w-full object-cover">
					<img src="<?php echo esc_url($item); ?>" alt="" class="w-full object-cover">
					<img src="<?php echo esc_url($item); ?>" alt="" class="w-full object-cover">
					<img src="<?php echo esc_url($item); ?>" alt="" class="w-full object-cover">
					<img src="<?php echo esc_url($item); ?>" alt="" class="w-full object-cover">
					<img src="<?php echo esc_url($item); ?>" alt="" class="w-full object-cover">
					<img src="<?php echo esc_url($item); ?>" alt="" class="w-full object-cover">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- FollowUs section end -->

<!-- Feature Section start -->
<?php
$feature_1 = mytheme_img_asset('top/feature-1');
$feature_2 = mytheme_img_asset('top/feature-2');
$feature_3 = mytheme_img_asset('top/feature-3');
$feature_4 = mytheme_img_asset('top/feature-4');
?>
<?php
$feature_cards = array(
	array(
		'image' => $feature_1,
		'eyebrow' => 'Custom Made',
		'title' => '製作実績',
	),
	array(
		'image' => $feature_2,
		'eyebrow' => 'Strength',
		'title' => '高橋の強み',
	),
	array(
		'image' => $feature_3,
		'eyebrow' => 'Existing Product',
		'title' => '既存製品',
	),
	array(
		'image' => $feature_4,
		'eyebrow' => 'Used Product',
		'title' => '中古製品',
	),
);
?>

<section class="section">
	<div class="grid grid-cols-2 lg:grid-cols-4">
		<?php foreach ($feature_cards as $feature_card): ?>
			<div class="group relative aspect-square overflow-hidden cursor-pointer">
				<img src="<?php echo esc_url($feature_card['image']); ?>" alt="" class="opacity-80 absolute inset-0 h-full w-full object-cover" />
				<!-- Mobile: lighter overlay by default, Desktop: darker with hover effect -->
				<div class="absolute inset-0 bg-black/45 transition-colors duration-300 md:bg-black/75 md:group-hover:bg-black/25 active:bg-black/30"></div>
				<div class="absolute inset-0 flex flex-col items-center justify-center text-white px-4">
					<p class="text-[12px] sm:text-[13px] md:text-[14px] lg:text-[15px] 2xl:text-[16px] opacity-50"><?php echo esc_html($feature_card['eyebrow']); ?></p>
					<h3 class="mt-[10px] sm:mt-[12px] md:mt-[15px] lg:mt-[17px] 2xl:mt-[20px] text-[20px] sm:text-[22px] md:text-[25px] lg:text-[27px] 2xl:text-[30px]"><?php echo esc_html($feature_card['title']); ?></h3>
				</div>
				<!-- Top-left corner: inward on mobile, animates on desktop hover -->
				<span class="absolute left-[15px] sm:left-[20px] md:left-[24px] 2xl:left-[52px] md:group-hover:!left-[25px] lg:md:group-hover:!left-[28px] 2xl:md:group-hover:!left-[31px] top-[15px] sm:top-[20px] md:top-[24px] 2xl:top-[52px] md:group-hover:!top-[25px] lg:md:group-hover:!top-[28px] 2xl:md:group-hover:!top-[31px] h-[15px] sm:h-[17px] md:h-[18px] lg:h-[19px] 2xl:h-[20px] w-[15px] sm:w-[17px] md:w-[18px] lg:w-[19px] 2xl:w-[20px] border-l-[3px] md:border-l-4 border-t-[3px] md:border-t-4 border-[#d1b06e] transition-all duration-300"></span>
				<!-- Top-right corner -->
				<span class="absolute right-[15px] sm:right-[20px] md:right-[24px] 2xl:right-[52px] md:group-hover:!right-[25px] lg:md:group-hover:!right-[28px] 2xl:md:group-hover:!right-[31px] top-[15px] sm:top-[20px] md:top-[24px] 2xl:top-[52px] md:group-hover:!top-[25px] lg:md:group-hover:!top-[28px] 2xl:md:group-hover:!top-[31px] h-[15px] sm:h-[17px] md:h-[18px] lg:h-[19px] 2xl:h-[20px] w-[15px] sm:w-[17px] md:w-[18px] lg:w-[19px] 2xl:w-[20px] border-r-[3px] md:border-r-4 border-t-[3px] md:border-t-4 border-[#d1b06e] transition-all duration-300"></span>
				<!-- Bottom-left corner -->
				<span class="absolute left-[15px] sm:left-[20px] md:left-[24px] 2xl:left-[52px] md:group-hover:!left-[25px] lg:md:group-hover:!left-[28px] 2xl:md:group-hover:!left-[31px] bottom-[15px] sm:bottom-[20px] md:bottom-[24px] 2xl:bottom-[52px] md:group-hover:!bottom-[25px] lg:md:group-hover:!bottom-[28px] 2xl:md:group-hover:!bottom-[31px] h-[15px] sm:h-[17px] md:h-[18px] lg:h-[19px] 2xl:h-[20px] w-[15px] sm:w-[17px] md:w-[18px] lg:w-[19px] 2xl:w-[20px] border-b-[3px] md:border-b-4 border-l-[3px] md:border-l-4 border-[#d1b06e] transition-all duration-300"></span>
				<!-- Bottom-right corner -->
				<span class="absolute right-[15px] sm:right-[20px] md:right-[24px] 2xl:right-[52px] md:group-hover:!right-[25px] lg:md:group-hover:!right-[28px] 2xl:md:group-hover:!right-[31px] bottom-[15px] sm:bottom-[20px] md:bottom-[24px] 2xl:bottom-[52px] md:group-hover:!bottom-[25px] lg:md:group-hover:!bottom-[28px] 2xl:md:group-hover:!bottom-[31px] h-[15px] sm:h-[17px] md:h-[18px] lg:h-[19px] 2xl:h-[20px] w-[15px] sm:w-[17px] md:w-[18px] lg:w-[19px] 2xl:w-[20px] border-b-[3px] md:border-b-4 border-r-[3px] md:border-r-4 border-[#d1b06e] transition-all duration-300"></span>
			</div>
		<?php endforeach; ?>
	</div>
</section>
<!-- Feature Section end -->

<?php
get_footer();
?>