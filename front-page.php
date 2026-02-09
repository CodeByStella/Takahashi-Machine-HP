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
		class="md:w-[98%] md:h-auto"
		src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/hero.png'); ?>"
		alt="<?php echo esc_attr(get_bloginfo('hero')); ?>"
		loading="eager">
</section>

<!-- Product section start -->
<?php
$product_bg = mytheme_img_asset('top/product-bg');
$prod_1 = mytheme_img_asset('top/prod-1');
$prod_2 = mytheme_img_asset('top/prod-2');
$prod_3 = mytheme_img_asset('top/prod-3');
?>

<section class="pb-[60px] md:pb-[100px]">
	<div class="mx-auto w-full">
		<div class="overflow-hidden">
			<div class="relative aspect-[1600/622] w-full">
				<img class="absolute inset-0 h-full w-full object-cover" src="<?php echo esc_url($product_bg); ?>" alt="" loading="lazy">

				<div class="relative z-10 h-full text-white md:pt-[120px] md:pl-[200px]">
					<p class="mb-[24px] inline-flex items-center gap-[10px] text-[12px] text-white/75">
						<img class="top-kicker-icon" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/product-icon.svg'); ?>" alt="" loading="lazy">
						<span class="text-[20px] text-[#6EBA38]"><?php esc_html_e('Product', 'mytheme'); ?></span>
					</p>
					<h2 class="mb-[34px] text-[44px] font-bold leading-[1.35] tracking-[0.02em]">
						<?php esc_html_e('高橋製作所オリジナル', 'mytheme'); ?><br>
						<?php esc_html_e('オーダー製品', 'mytheme'); ?>
					</h2>
					<p class="mb-[44px] text-[16px] leading-[1.8] text-white/85">
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

			<div class="lg:-mt-[95px]">
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
$prod_1 = mytheme_img_asset('top/prod-1');
$prod_2 = mytheme_img_asset('top/prod-2');
$prod_3 = mytheme_img_asset('top/prod-3');
?>

<section class="pb-[60px] md:pb-[100px]">
	<div class="mx-auto w-full">
		<div class="overflow-hidden">
			<div class="relative aspect-[1600/462] w-full">
				<img class="absolute inset-0 h-full w-full object-cover" src="<?php echo esc_url($product_bg); ?>" alt="" loading="lazy">

				<div class="relative z-10 h-full text-white md:pt-[120px] md:px-[200px]">
					<p class="mb-[22px] inline-flex items-center gap-[10px] text-[20px] text-white/75">
						<img class="existing-product-kicker-icon" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/product-icon.svg'); ?>" alt="" loading="lazy">
						<span class="text-[20px] text-[#6EBA38]"><?php esc_html_e('Existing Product', 'mytheme'); ?></span>
					</p>
					<h2 class="mb-[34px] text-[44px] font-bold leading-[1.35] tracking-[0.02em]">
						<?php esc_html_e('既存製品一覧', 'mytheme'); ?><br>
					</h2>
					<div class="flex justify-between w-full gap-[24px] text-[16px] items-end">
						<p class="text-[16px] leading-[1.8] text-white opacity-30">
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

			<div class="lg:-mt-[95px]">
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

<section class="pb-[60px] md:pb-[100px]">
	<div class="mx-auto w-full">
		<div class="overflow-hidden">
			<div class="relative aspect-[1600/449] w-full">
				<img class="absolute inset-0 h-full w-full object-contain" src="<?php echo esc_url($product_bg); ?>" alt="" loading="lazy">

				<div class="relative z-10 h-full md:pt-[120px] md:px-[200px]">
					<p class="mb-[24px] inline-flex items-center gap-[10px] text-[12px] text-[#1f1c1a]">
						<img class="used-product-kicker-icon" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/product-icon.svg'); ?>" alt="" loading="lazy">
						<span class="text-[20px] text-[#6EBA38]"><?php esc_html_e('Used Product', 'mytheme'); ?></span>
					</p>
					<h2 class="mb-[34px] text-[44px] font-bold leading-[1.35] tracking-[0.02em] text-[#1f1c1a]">
						<?php esc_html_e('中古製品一覧', 'mytheme'); ?><br>
					</h2>
					<div class="flex justify-between w-full gap-[24px] text-[16px]">
						<p class="text-[16px] leading-[1.8] text-[#1f1c1a] opacity-70">
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

			<div class="lg:-mt-[95px]">
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
	<section class="section relative pb-[100px] md:pb-[100px]">
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
			<div class="text-center mt-[230px]">
				<p class="text-sm text-[#5b5246] md:text-[40px] leading-[3.5rem]">
					<?php esc_html_e('現場の⽣産性を上げる', 'mytheme'); ?><br>
					<?php esc_html_e('ダンボール加⼯機械をご提供します', 'mytheme'); ?>
				</p>
				<p class="mt-[58px] inline-block text-xs text-[#5b5246] md:text-[24px]">
					<?php esc_html_e('こんなお悩みご相談ください！', 'mytheme'); ?>
				<div class="rounded-full bg-white w-[338px] h-[13px] -mt-[13px] mx-auto"></div>
				</p>
			</div>
		</div>

		<ul class="flex justify-center gap-[40px] -mt-[100px]">
			<li>
				<img src="<?php echo esc_url($person1); ?>" alt="" loading="lazy" class="aspect-square h-[200px] w-[200px] rounded-full object-cover">
				<p class="mt-[18px] w-[200px] h-[77px] text-[18px] text-center">
					<?php esc_html_e('ダンボール加工', 'mytheme'); ?>
					<?php esc_html_e('機械を探している', 'mytheme'); ?>
				</p>
			</li>
			<li>
				<img src="<?php echo esc_url($person2); ?>" alt="" loading="lazy" class="aspect-square h-[200px] w-[200px] rounded-full object-cover">
				<p class="mt-[18px] w-[200px] h-[77px] text-[18px] text-center">
					<?php esc_html_e('オリジナルの', 'mytheme'); ?><br />
					<?php esc_html_e('装置を作りたい', 'mytheme'); ?>
				</p>
			</li>
			<li>
				<img src="<?php echo esc_url($person3); ?>" alt="" loading="lazy" class="aspect-square h-[200px] w-[200px] rounded-full object-cover">
				<p class="mt-[18px] w-[200px] h-[77px] text-[18px] text-center">
					<?php esc_html_e('アフターサービスを', 'mytheme'); ?><br />
					<?php esc_html_e('しっかり頼みたい', 'mytheme'); ?>
				</p>
			</li>
			<li>
				<img src="<?php echo esc_url($person4); ?>" alt="" loading="lazy" class="aspect-square h-[200px] w-[200px] rounded-full object-cover">
				<p class="mt-[18px] w-[200px] h-[77px] text-[18px] text-center">
					<?php esc_html_e('適切なコストで', 'mytheme'); ?><br />
					<?php esc_html_e('購入したい', 'mytheme'); ?>
				</p>
			</li>
			<li>
				<img src="<?php echo esc_url($person5); ?>" alt="" loading="lazy" class="aspect-square h-[200px] w-[200px] rounded-full object-cover">
				<p class="mt-[18px] w-[200px] h-[77px] text-[18px] text-center">
					<?php esc_html_e('他社製品だけど', 'mytheme'); ?><br />
					<?php esc_html_e('修理や改造がしたい', 'mytheme'); ?>
				</p>
			</li>
</div>
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
<section class="section pt-[90px] pb-[130px]">

	<div class="w-[75%] mx-auto">
		<p class="text-[60px] w-full text-[#6EBA38] text-center mb-[36px]"><?php esc_html_e('Follow us !', 'mytheme'); ?></p>
		<div class="pt-[60px] pb-[70px] px-[80px] bg-white rounded-[12px] flex justify-between">
			<div class="w-[464px]">
				<div class="flex mb-[20px] gap-[12px]">
					<img src="<?php echo esc_url($facebook_icon); ?>" alt="" class="w-[30px] h-[30px] aspect-square object-cover rounded-full">
					<p class="text-[20px] text-[#1F1C1A] text-center"><?php esc_html_e('Facebook', 'mytheme'); ?></p>
				</div>
				<div class="w-full relative aspect-[464/109] p-[12px] flex gap-[12px] border border-[#70707090]">
					<img src="<?php echo esc_url($banner); ?>" alt="" class="z-0 absolute top-0 left-0 bottom-0 right-0 w-full h-full object-cover">
					<img src="<?php echo esc_url($tsicon); ?>" alt="" class="z-10 w-[65px] h-[65px] aspect-square object-cover">
					<p class="text-[16px] text-white z-10"> <?php esc_html_e('株式会社 髙橋製作所 / ダンボール機械の設計製作', 'mytheme'); ?></p>
				</div>
				<div class="max-h-[312px] p-[10px] overflow-y-auto bg-[#F5F6F7]">
					<div class="w-full h-fit bg-white">
						<img src="<?php echo esc_url($blog_banner); ?>" alt="" class="w-full object-cover" />
						<div class="p-[12px]">
							<div class="flex items-center gap-[12px]">
								<img src="<?php echo esc_url($tsicon); ?>" alt="" class="z-10 rounded-full w-[42px] h-[42px] aspect-square object-cover">
								<p class="text-[12px]"> <?php esc_html_e('株式会社 髙橋製作所 / ダンボール機械の設計製作', 'mytheme'); ?></p>
							</div>
							<div class="flex flex-col gap-[12px]">
								<p class="text-[12px]">ダンボール（B段.E段.G段）カットする</p>
								<p class="text-[12px]">オートスリッターを製作納品致しました</p>
								<p class="text-[12px]">厚み薄いものは中々難しいかったです</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="w-[490px]">
				<div class="flex mb-[20px] gap-[12px]">
					<img src="<?php echo esc_url($instagram_icon); ?>" alt="" class="w-[30px] h-[30px] aspect-square object-cover rounded-full">
					<p class="text-[20px] text-[#1F1C1A] text-center"><?php esc_html_e('Instagram', 'mytheme'); ?></p>
				</div>
				<div class="grid grid-cols-3 gap-[20px]">
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
	<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
		<?php foreach ($feature_cards as $feature_card): ?>
			<div class="group relative aspect-square overflow-hidden">
				<img src="<?php echo esc_url($feature_card['image']); ?>" alt="" class="opacity-80 absolute inset-0 h-full w-full object-cover" />
				<div class="absolute inset-0 bg-black/75 transition-colors duration-300 group-hover:bg-black/25"></div>
				<div class="absolute inset-0 flex flex-col items-center justify-center text-white">
					<p class="text-[16px] opacity-50"><?php echo esc_html($feature_card['eyebrow']); ?></p>
					<h3 class="mt-[20px] text-[30px]"><?php echo esc_html($feature_card['title']); ?></h3>
				</div>
				<span class="absolute left-[52px] group-hover:left-[31px] top-[52px] group-hover:top-[31px] h-[20px] w-[20px] border-l-[4px] border-t-[4px] border-[#d1b06e] transition-all duration-300"></span>
				<span class="absolute right-[52px] group-hover:right-[31px] top-[52px] group-hover:top-[31px] h-[20px] w-[20px] border-r-[4px] border-t-[4px] border-[#d1b06e] transition-all duration-300"></span>
				<span class="absolute left-[52px] group-hover:left-[31px] bottom-[52px] group-hover:bottom-[31px] h-[20px] w-[20px] border-b-[4px] border-l-[4px] border-[#d1b06e] transition-all duration-300"></span>
				<span class="absolute right-[52px] group-hover:right-[31px] bottom-[52px] group-hover:bottom-[31px] h-[20px] w-[20px] border-b-[4px] border-r-[4px] border-[#d1b06e] transition-all duration-300"></span>
			</div>
		<?php endforeach; ?>
	</div>
</section>
<!-- Feature Section end -->

<?php
get_footer();
?>