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
$product_bg = mytheme_top_asset('product-bg');
$prod_1 = mytheme_top_asset('prod-1');
$prod_2 = mytheme_top_asset('prod-2');
$prod_3 = mytheme_top_asset('prod-3');
?>

<section class="pb-[60px] md:pb-[100px]">
	<div class="mx-auto w-full max-w-[1600px]">
		<div class="top-panel">
			<div class="top-hero w-full">
				<img class="top-hero-bg" src="<?php echo esc_url($product_bg); ?>" alt="" loading="lazy">

				<div class="top-hero-content h-full md:pt-[120px] md:pl-[200px]">
					<p class="top-kicker">
						<img class="top-kicker-icon" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/product-icon.svg'); ?>" alt="" loading="lazy">
						<span class="text-[20px] text-[#6EBA38]"><?php esc_html_e('Product', 'mytheme'); ?></span>
					</p>
					<h2 class="top-title mb-[34px]">
						<?php esc_html_e('高橋製作所オリジナル', 'mytheme'); ?><br>
						<?php esc_html_e('オーダー製品', 'mytheme'); ?>
					</h2>
					<p class="top-lead mb-[44px]">
						<?php esc_html_e('お客様のご要望にお応えしてきた', 'mytheme'); ?><br>
						<?php esc_html_e('製作実績をご紹介します。', 'mytheme'); ?>
					</p>

					<a class="top-cta md:w-[266px] md:h-[56px] relative" href="<?php echo esc_url(home_url('/used-product/')); ?>">
						<span class="text-center w-full"><?php esc_html_e('VIEW MORE', 'mytheme'); ?></span>
						<svg class="absolute top-1/2 -translate-y-1/2 right-[29px]" xmlns="http://www.w3.org/2000/svg" width="7.588" height="10.934" viewBox="0 0 7.588 10.934">
							<path d="M431.405,1336.6l4.406,4.407-4.406,4.406" transform="translate(-430.345 -1335.541)" fill="none" stroke="#fff" stroke-width="3" />
						</svg>
					</a>
				</div>
			</div>

			<div class="top-carousel">

				<div class="flex gap-[30px] justify-center items-center">
					<button class="bg-[#D2A573] w-[50px] h-[50px] rounded-full flex items-center justify-center" type="button" aria-label="<?php esc_attr_e('Previous', 'mytheme'); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="9.193" height="15.557" viewBox="0 0 9.193 15.557">
							<path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M147.717,1645.06l-7.071-7.071,7.071-7.071" transform="translate(-139.231 -1630.21)" fill="none" stroke="#fff" stroke-width="2" />
						</svg>
					</button>
					<article class="top-card max-w-[380px]">
						<div class="top-card-media">
							<img src="<?php echo esc_url($prod_1); ?>" alt="" loading="lazy">
						</div>
						<div class="top-card-body">
							<h3 class="top-card-title"><?php esc_html_e('商品名が入ります商品名が入ります', 'mytheme'); ?></h3>
							<p class="top-card-meta"><?php esc_html_e('大阪府｜ネット通販生産', 'mytheme'); ?></p>
							<span class="top-tag"><?php esc_html_e('ダンボールパレットプレス機', 'mytheme'); ?></span>
						</div>
					</article>

					<article class="top-card max-w-[380px]">
						<div class="top-card-media">
							<img src="<?php echo esc_url($prod_2); ?>" alt="" loading="lazy">
						</div>
						<div class="top-card-body">
							<h3 class="top-card-title"><?php esc_html_e('商品名が入ります商品名が入ります', 'mytheme'); ?></h3>
							<p class="top-card-meta"><?php esc_html_e('西宮市｜特殊塗装生産', 'mytheme'); ?></p>
							<span class="top-tag"><?php esc_html_e('ダンボールスコア機付き機', 'mytheme'); ?></span>
						</div>
					</article>

					<article class="top-card max-w-[380px]">
						<div class="top-card-media">
							<img src="<?php echo esc_url($prod_3); ?>" alt="" loading="lazy">
						</div>
						<div class="top-card-body">
							<h3 class="top-card-title"><?php esc_html_e('商品名が入ります商品名が入ります', 'mytheme'); ?></h3>
							<p class="top-card-meta"><?php esc_html_e('西宮市｜製造業', 'mytheme'); ?></p>
							<span class="top-tag"><?php esc_html_e('トムソンカス製切機', 'mytheme'); ?></span>
						</div>
					</article>
					<button class="bg-[#D2A573] w-[50px] h-[50px] rounded-full flex items-center justify-center" type="button" aria-label="<?php esc_attr_e('Next', 'mytheme'); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="9.193" height="15.557" viewBox="0 0 9.193 15.557">
							<path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M1451.94,1630.941l7.071,7.072-7.071,7.071" transform="translate(-1451.233 -1630.234)" fill="none" stroke="#fff" stroke-width="2" />
						</svg>

					</button>
				</div>

				<div class="top-dots" aria-hidden="true">
					<span class="top-dot is-active"></span>
					<span class="top-dot"></span>
					<span class="top-dot"></span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Product section end -->


<!-- Existing Product section start -->
<?php
$product_bg = mytheme_top_asset('machine');
$prod_1 = mytheme_top_asset('prod-1');
$prod_2 = mytheme_top_asset('prod-2');
$prod_3 = mytheme_top_asset('prod-3');
?>

<section class="pb-[60px] md:pb-[100px]">
	<div class="mx-auto w-full max-w-[1600px]">
		<div class="existing-product-panel">
			<div class="existing-product-hero w-full">
				<img class="existing-product-hero-bg" src="<?php echo esc_url($product_bg); ?>" alt="" loading="lazy">

				<div class="existing-product-hero-content h-full md:pt-[120px] md:px-[200px]">
					<p class="existing-product-kicker">
						<img class="existing-product-kicker-icon" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/product-icon.svg'); ?>" alt="" loading="lazy">
						<span class="text-[20px] text-[#6EBA38]"><?php esc_html_e('Existing Product', 'mytheme'); ?></span>
					</p>
					<h2 class="existing-product-title mb-[34px]">
						<?php esc_html_e('既存製品一覧', 'mytheme'); ?><br>
					</h2>
					<div class="flex justify-between w-full gap-[24px] text-[16px] items-end">
						<p class="existing-product-lead opacity-30">
							<?php esc_html_e('様々な製品を取り揃え、', 'mytheme'); ?><br />
							<?php esc_html_e('全国の工場で幅広くご愛用いただいております。', 'mytheme'); ?>
						</p>
						<a class="existing-product-cta md:w-[266px] md:h-[56px] relative" href="<?php echo esc_url(home_url('/used-product/')); ?>">
							<span class="text-center w-full"><?php esc_html_e('VIEW MORE', 'mytheme'); ?></span>
							<svg class="absolute existing-product-1/2 -translate-y-1/2 right-[29px]" xmlns="http://www.w3.org/2000/svg" width="7.588" height="10.934" viewBox="0 0 7.588 10.934">
								<path d="M431.405,1336.6l4.406,4.407-4.406,4.406" transform="translate(-430.345 -1335.541)" fill="none" stroke="#fff" stroke-width="3" />
							</svg>
						</a>
					</div>
				</div>
			</div>

			<div class="top-carousel">

				<div class="flex gap-[30px] justify-center items-center">
					<button class="bg-[#D2A573] w-[50px] h-[50px] rounded-full flex items-center justify-center" type="button" aria-label="<?php esc_attr_e('Previous', 'mytheme'); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="9.193" height="15.557" viewBox="0 0 9.193 15.557">
							<path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M147.717,1645.06l-7.071-7.071,7.071-7.071" transform="translate(-139.231 -1630.21)" fill="none" stroke="#fff" stroke-width="2" />
						</svg>
					</button>
					<article class="top-card max-w-[380px]">
						<div class="top-card-media">
							<img src="<?php echo esc_url($prod_1); ?>" alt="" loading="lazy">
						</div>
						<div class="top-card-body">
							<h3 class="top-card-title"><?php esc_html_e('商品名が入ります商品名が入ります', 'mytheme'); ?></h3>
							<p class="top-card-meta"><?php esc_html_e('大阪府｜ネット通販生産', 'mytheme'); ?></p>
							<span class="top-tag"><?php esc_html_e('ダンボールパレットプレス機', 'mytheme'); ?></span>
						</div>
					</article>

					<article class="top-card max-w-[380px]">
						<div class="top-card-media">
							<img src="<?php echo esc_url($prod_2); ?>" alt="" loading="lazy">
						</div>
						<div class="top-card-body">
							<h3 class="top-card-title"><?php esc_html_e('商品名が入ります商品名が入ります', 'mytheme'); ?></h3>
							<p class="top-card-meta"><?php esc_html_e('西宮市｜特殊塗装生産', 'mytheme'); ?></p>
							<span class="top-tag"><?php esc_html_e('ダンボールスコア機付き機', 'mytheme'); ?></span>
						</div>
					</article>

					<article class="top-card max-w-[380px]">
						<div class="top-card-media">
							<img src="<?php echo esc_url($prod_3); ?>" alt="" loading="lazy">
						</div>
						<div class="top-card-body">
							<h3 class="top-card-title"><?php esc_html_e('商品名が入ります商品名が入ります', 'mytheme'); ?></h3>
							<p class="top-card-meta"><?php esc_html_e('西宮市｜製造業', 'mytheme'); ?></p>
							<span class="top-tag"><?php esc_html_e('トムソンカス製切機', 'mytheme'); ?></span>
						</div>
					</article>
					<button class="bg-[#D2A573] w-[50px] h-[50px] rounded-full flex items-center justify-center" type="button" aria-label="<?php esc_attr_e('Next', 'mytheme'); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="9.193" height="15.557" viewBox="0 0 9.193 15.557">
							<path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M1451.94,1630.941l7.071,7.072-7.071,7.071" transform="translate(-1451.233 -1630.234)" fill="none" stroke="#fff" stroke-width="2" />
						</svg>

					</button>
				</div>

				<div class="top-dots" aria-hidden="true">
					<span class="top-dot is-active"></span>
					<span class="top-dot"></span>
					<span class="top-dot"></span>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- Existing Product section end -->


<!-- Used Product section start -->
<?php
$product_bg = mytheme_top_asset('mesh');
$prod_1 = mytheme_top_asset('prod-1');
$prod_2 = mytheme_top_asset('prod-2');
$prod_3 = mytheme_top_asset('prod-3');
?>

<section class="pb-[60px] md:pb-[100px]">
	<div class="mx-auto w-full max-w-[1600px]">
		<div class="used-product-panel">
			<div class="used-product-hero w-full">
				<img class="used-product-hero-bg" src="<?php echo esc_url($product_bg); ?>" alt="" loading="lazy">

				<div class="used-product-hero-content h-full md:pt-[120px] md:px-[200px]">
					<p class="used-product-kicker">
						<img class="used-product-kicker-icon" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/top/product-icon.svg'); ?>" alt="" loading="lazy">
						<span class="text-[20px] text-[#6EBA38]"><?php esc_html_e('Used Product', 'mytheme'); ?></span>
					</p>
					<h2 class="used-product-title mb-[34px]">
						<?php esc_html_e('中古製品一覧', 'mytheme'); ?><br>
					</h2>
					<div class="flex justify-between w-full gap-[24px] text-[16px]">
						<p class="used-product-lead opacity-70">
							<?php esc_html_e('非常に良質な中古機器を揃えており、', 'mytheme'); ?><br />
							<?php esc_html_e('販売はもちろんカスタマイズなど承っております。', 'mytheme'); ?>
						</p>
						<a class="used-product-cta md:w-[266px] md:h-[56px] relative" href="<?php echo esc_url(home_url('/used-product/')); ?>">
							<span class="text-center w-full"><?php esc_html_e('VIEW MORE', 'mytheme'); ?></span>
							<svg class="absolute used-product-1/2 -translate-y-1/2 right-[29px]" xmlns="http://www.w3.org/2000/svg" width="7.588" height="10.934" viewBox="0 0 7.588 10.934">
								<path d="M431.405,1336.6l4.406,4.407-4.406,4.406" transform="translate(-430.345 -1335.541)" fill="none" stroke="#fff" stroke-width="3" />
							</svg>
						</a>
					</div>
				</div>
			</div>

			<div class="top-carousel">

				<div class="flex gap-[30px] justify-center items-center">
					<button class="bg-[#D2A573] w-[50px] h-[50px] rounded-full flex items-center justify-center" type="button" aria-label="<?php esc_attr_e('Previous', 'mytheme'); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="9.193" height="15.557" viewBox="0 0 9.193 15.557">
							<path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M147.717,1645.06l-7.071-7.071,7.071-7.071" transform="translate(-139.231 -1630.21)" fill="none" stroke="#fff" stroke-width="2" />
						</svg>
					</button>
					<article class="top-card max-w-[380px]">
						<div class="top-card-media">
							<img src="<?php echo esc_url($prod_1); ?>" alt="" loading="lazy">
						</div>
						<div class="top-card-body">
							<h3 class="top-card-title"><?php esc_html_e('商品名が入ります商品名が入ります', 'mytheme'); ?></h3>
							<p class="top-card-meta"><?php esc_html_e('大阪府｜ネット通販生産', 'mytheme'); ?></p>
							<span class="top-tag"><?php esc_html_e('ダンボールパレットプレス機', 'mytheme'); ?></span>
						</div>
					</article>

					<article class="top-card max-w-[380px]">
						<div class="top-card-media">
							<img src="<?php echo esc_url($prod_2); ?>" alt="" loading="lazy">
						</div>
						<div class="top-card-body">
							<h3 class="top-card-title"><?php esc_html_e('商品名が入ります商品名が入ります', 'mytheme'); ?></h3>
							<p class="top-card-meta"><?php esc_html_e('西宮市｜特殊塗装生産', 'mytheme'); ?></p>
							<span class="top-tag"><?php esc_html_e('ダンボールスコア機付き機', 'mytheme'); ?></span>
						</div>
					</article>

					<article class="top-card max-w-[380px]">
						<div class="top-card-media">
							<img src="<?php echo esc_url($prod_3); ?>" alt="" loading="lazy">
						</div>
						<div class="top-card-body">
							<h3 class="top-card-title"><?php esc_html_e('商品名が入ります商品名が入ります', 'mytheme'); ?></h3>
							<p class="top-card-meta"><?php esc_html_e('西宮市｜製造業', 'mytheme'); ?></p>
							<span class="top-tag"><?php esc_html_e('トムソンカス製切機', 'mytheme'); ?></span>
						</div>
					</article>
					<button class="bg-[#D2A573] w-[50px] h-[50px] rounded-full flex items-center justify-center" type="button" aria-label="<?php esc_attr_e('Next', 'mytheme'); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="9.193" height="15.557" viewBox="0 0 9.193 15.557">
							<path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M1451.94,1630.941l7.071,7.072-7.071,7.071" transform="translate(-1451.233 -1630.234)" fill="none" stroke="#fff" stroke-width="2" />
						</svg>

					</button>
				</div>

				<div class="top-dots" aria-hidden="true">
					<span class="top-dot is-active"></span>
					<span class="top-dot"></span>
					<span class="top-dot"></span>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- Used Product section end -->

<!-- CARDBOARD PROCESSING SECTION START -->
<?php
$mesh_bg = mytheme_top_asset('mesh2');
$person1 = mytheme_top_asset('person1');
$person2 = mytheme_top_asset('person2');
$person3 = mytheme_top_asset('person3');
$person4 = mytheme_top_asset('person4');
$person5 = mytheme_top_asset('person5');
?>

<div class="max-w-screen overflow-hidden">
	<section class="section relative pb-[100px] md:pb-[100px]">
		<div class="relative flex justify-center h-full w-full aspect-[1600/577]">
			<img src="<?php echo esc_url($mesh_bg); ?>" alt="" aria-hidden="true" class="absolute h-full w-[94%] -z-10">
			<div class="absolute left-0 top-0 w-[200%] marquee pointer-events-none text-[64px] font-semibold tracking-[0.12em] text-[#B58522] md:text-[150px]">
				<span>Cardboard Processing Machines that Increase On-site Productivity</span>
				<span>Cardboard Processing Machines that Increase On-site Productivity</span>
			</div>
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

<!-- Enquiry section start -->
<?php
$enquiry_bg = mytheme_top_asset('enquiry-bg');
$download_icon = mytheme_top_asset('download');
$mail_icon = mytheme_top_asset('mail');
$telephone_icon = mytheme_top_asset('telephone');
?>
<section class="section relative overflow-hidden pt-[117px] pb-[124px]">
	<img class=" absolute	top-0 left-0 bottom-0 right-0 w-full h-full object-cover -z-10" aria-hidden="true" src="<?php echo esc_url($enquiry_bg); ?>" alt="" />
	<p class="mb-[50px] text-white text-[44px] text-center"><?php esc_html_e('お問い合わせはこちら', 'mytheme'); ?></p>
	<div class="flex justify-center gap-[30px]">
		<div class="p-[28px] flex flex-col items-center justify-center rounded-[12px] bg-white drop-shadow-[0px_5px_20px_rgba(0,0,0,0)] aspect-[380/265] w-[380px]">
			<img src="<?php echo esc_url($download_icon); ?>" alt="" class="w-[68px] h-[68px] aspect-square object-cover rounded-full">
			<p class="text-[16px] text-[#6EBA38] text-center mt-[12px]"><?php esc_html_e('Download', 'mytheme'); ?></p>
			<p class="text-[24px] text-[#1F1C1A] text-center mt-[24px]">
				<?php esc_html_e('改善事例などを', 'mytheme'); ?><br />
				<?php esc_html_e('ダウンロードする', 'mytheme'); ?>
			</p>
		</div>
		<div class="p-[28px] flex flex-col items-center justify-center rounded-[12px] bg-white drop-shadow-[0px_5px_20px_rgba(0,0,0,0)] aspect-[380/265] w-[380px]">
			<img src="<?php echo esc_url($mail_icon); ?>" alt="" class="w-[68px] h-[68px] aspect-square object-cover rounded-full">
			<p class="text-[16px] text-[#6EBA38] text-center mt-[12px]"><?php esc_html_e('Mail', 'mytheme'); ?></p>
			<p class="text-[24px] text-[#1F1C1A] text-center mt-[24px]">
				<?php esc_html_e('メールで', 'mytheme'); ?><br />
				<?php esc_html_e('無料相談をする', 'mytheme'); ?>
			</p>
		</div>
		<div class="p-[28px] flex flex-col items-center justify-center rounded-[12px] bg-white drop-shadow-[0px_5px_20px_rgba(0,0,0,0)] aspect-[380/265] w-[380px]">
			<img src="<?php echo esc_url($telephone_icon); ?>" alt="" class="w-[68px] h-[68px] aspect-square object-cover rounded-full">
			<p class="text-[16px] text-[#6EBA38] text-center mt-[12px]"><?php esc_html_e('Telephone', 'mytheme'); ?></p>
			<p class="text-[14px] text-[#1F1C1A] text-center mt-[20px]">
				<?php esc_html_e('お電話でのお問い合わせ', 'mytheme'); ?><br />
			</p>
			<p class="text-[30px] text-[#1F1C1A] text-center mt-[2px]">
				<?php esc_html_e('072-961-9975', 'mytheme'); ?><br />
			</p>
			<p class="text-[12px] text-[#1F1C1A] text-center mt-[2px]">
				<?php esc_html_e('平日 00時〜00時', 'mytheme'); ?><br />
			</p>
		</div>
	</div>
</section>
<!-- Enquiry section end -->

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

$banner = mytheme_top_asset('banner');
$blog_banner = mytheme_top_asset('blog-banner');
$item = mytheme_top_asset('item');
$tsicon = mytheme_top_asset('ts-icon');
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
$feature_1 = mytheme_top_asset('feature-1');
$feature_2 = mytheme_top_asset('feature-2');
$feature_3 = mytheme_top_asset('feature-3');
$feature_4 = mytheme_top_asset('feature-4');
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