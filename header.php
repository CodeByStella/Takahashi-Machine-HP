<?php

/**
 * Header template.
 *
 * @package mytheme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="site-header lg:h-[140px]">
		<div class="mx-auto w-full max-w-[1600px] px-4 lg:px-[40px] lg:pt-[24px] h-full">
			<div class="flex items-start justify-between h-full">
				<a class="site-brand lg:flex lg:flex-col lg:items-start lg:gap-[4px]" href="<?php echo esc_url(home_url('/')); ?>">
					<?php if (has_custom_logo()) : ?>
						<?php the_custom_logo(); ?>
					<?php else : ?>
						<span class="hidden lg:block text-[12px] leading-none text-black mb-[18px]">
							<?php esc_html_e('段ボール機械 専門メーカー', 'mytheme'); ?>
						</span>
						<img
							class="site-brand__logo lg:w-[220px] lg:h-[45px]"
							src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/header/logo.svg'); ?>"
							alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
							width="220"
							height="45"
							loading="eager">
					<?php endif; ?>
				</a>

				<div class="flex flex-col items-end h-full lg:pt-0 lg:pb-0">
					<div class="site-header__right">
						<div class="header-ctas lg:gap-[10px]" aria-label="<?php esc_attr_e('Contact shortcuts', 'mytheme'); ?>">
							<a class="cta-pill cta-pill--phone lg:w-[200px] lg:h-[40px] lg:rounded-full" href="tel:0729619975">
								<svg xmlns="http://www.w3.org/2000/svg" width="19.775" height="21.555" viewBox="0 0 19.775 21.555">
									<path id="Path_5736" data-name="Path 5736" d="M4.943,290.928l5.693,5.693a1.29,1.29,0,0,0,1.825,0l1.373-1.373a1.77,1.77,0,0,1,2.5,0l1.613,1.613a1.751,1.751,0,0,1,0,2.474l-.013.013c-4.357,4.357-8.543,1.478-12.9-2.879s-7.237-8.543-2.88-12.9l.013-.013a1.751,1.751,0,0,1,2.474,0l1.667,1.667a1.77,1.77,0,0,1,0,2.5L4.943,289.1a1.29,1.29,0,0,0,0,1.825" transform="translate(0 -279.954)" fill="#fff" />
									<path id="Path_5737" data-name="Path 5737" d="M1619.241,966.9v.006a.54.54,0,0,0,.435.529,2.166,2.166,0,0,1,1.687,1.687.54.54,0,0,0,.529.435h.005a.538.538,0,0,0,.528-.644,3.249,3.249,0,0,0-2.541-2.541.538.538,0,0,0-.644.528" transform="translate(-1608.857 -960.162)" fill="#fff" />
									<path id="Path_5738" data-name="Path 5738" d="M1905.169.536V.541a.54.54,0,0,0,.5.537,6.492,6.492,0,0,1,5.977,5.977.54.54,0,0,0,.537.5h.005a.539.539,0,0,0,.537-.58A7.575,7.575,0,0,0,1905.749,0a.539.539,0,0,0-.58.537" transform="translate(-1892.952 0.003)" fill="#fff" />
									<path id="Path_5739" data-name="Path 5739" d="M1762.205,482.544v.005a.539.539,0,0,0,.482.536,4.329,4.329,0,0,1,3.822,3.822.54.54,0,0,0,.536.482h.005a.538.538,0,0,0,.536-.6,5.411,5.411,0,0,0-4.786-4.785.538.538,0,0,0-.6.536" transform="translate(-1750.905 -478.914)" fill="#fff" />
								</svg>

								<span class="text-[16px] leading-none">072-961-9975</span>
							</a>

							<a class="cta-pill cta-pill--download lg:w-[200px] lg:h-[40px] lg:rounded-full" href="<?php echo esc_url(home_url('/download/')); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" viewBox="0 0 15 15">
									<defs>
										<clipPath id="clip-path">
											<rect id="Rectangle_1" data-name="Rectangle 1" width="15" height="15" transform="translate(0 0)" fill="rgba(0,0,0,0)" />
										</clipPath>
									</defs>
									<g id="ベクトルスマートオブジェクト" transform="translate(0 0)">
										<g id="Group_2" data-name="Group 2">
											<g id="Group_1" data-name="Group 1" clip-path="url(#clip-path)">
												<line id="Line_1" data-name="Line 1" y2="9.199" transform="translate(7.5 0.853)" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.706" />
											</g>
										</g>
										<path id="Path_1" data-name="Path 1" d="M10.109,7.322,7.5,10.052,4.891,7.322" fill="rgba(0,0,0,0)" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.668" />
										<g id="Group_4" data-name="Group 4">
											<g id="Group_3" data-name="Group 3" clip-path="url(#clip-path)">
												<path id="Path_2" data-name="Path 2" d="M14.185,11.246v2.9H.815v-2.9" fill="rgba(0,0,0,0)" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.668" />
											</g>
										</g>
									</g>
								</svg>

								<span class="text-[16px] leading-none"><?php esc_html_e('資料ダウンロード', 'mytheme'); ?></span>
							</a>

							<a class="cta-pill cta-pill--mail lg:w-[200px] lg:h-[40px] lg:rounded-full" href="<?php echo esc_url(home_url('/contact/')); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="11" viewBox="0 0 16 11">
									<defs>
										<clipPath id="clip-path">
											<rect id="Rectangle_3" data-name="Rectangle 3" width="16" height="11" transform="translate(0 0)" fill="rgba(0,0,0,0)" />
										</clipPath>
									</defs>
									<g id="ベクトルスマートオブジェクト" transform="translate(0 0)">
										<g id="Group_6" data-name="Group 6">
											<g id="Group_5" data-name="Group 5" clip-path="url(#clip-path)">
												<path id="Path_3" data-name="Path 3" d="M15.155,0H.845A.838.838,0,0,0,0,.83v9.339A.838.838,0,0,0,.845,11H15.155a.838.838,0,0,0,.845-.83V.83A.838.838,0,0,0,15.155,0m-.845,9.339H1.689V1.661H14.311Zm-9.7-4.1a.823.823,0,0,1-.236-1.152.857.857,0,0,1,1.171-.232L8,5.457l2.458-1.6a.855.855,0,0,1,1.171.232.823.823,0,0,1-.236,1.152L8.467,7.146a.859.859,0,0,1-.935,0Z" fill="#fff" />
											</g>
										</g>
									</g>
								</svg>

								<span class="text-[16px] leading-none"><?php esc_html_e('メール無料相談', 'mytheme'); ?></span>
							</a>
						</div>

						<button class="nav-toggle nav-toggle--header" type="button" data-nav-toggle aria-expanded="false" aria-controls="primary-menu">
							<span class="sr-only"><?php esc_html_e('Menu', 'mytheme'); ?></span>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
								<line x1="3" y1="6" x2="21" y2="6"></line>
								<line x1="3" y1="12" x2="21" y2="12"></line>
								<line x1="3" y1="18" x2="21" y2="18"></line>
							</svg>
						</button>
					</div>
					<nav class="primary-nav lg:h-fit lg:items-center mt-[12px] lg:mt-[23px]" data-nav aria-label="<?php esc_attr_e('Primary menu', 'mytheme'); ?>">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'container'      => false,
								'menu_id'        => 'primary-menu',
								'menu_class'     => 'primary-menu',
								'fallback_cb'    => 'wp_page_menu',
							)
						);
						?>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<main id="content">