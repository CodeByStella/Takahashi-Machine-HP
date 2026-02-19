<?php
$enquiry_bg = mytheme_img_asset('top/enquiry-bg');
$enquiry_bg_sp = mytheme_img_asset('top/enquiry-bg-sp');
$download_icon = mytheme_img_asset('top/download');
$mail_icon = mytheme_img_asset('top/mail');
$telephone_icon = mytheme_img_asset('top/telephone');

$enquiry_download_url = function_exists('mytheme_get_download_url') ? mytheme_get_download_url() : home_url('/product/#product-movie-section');
$enquiry_contact_url  = home_url('/contact/');
$enquiry_phone_number = '0729619975';
$enquiry_phone_display = '072-961-9975';
$enquiry_phone_url    = 'tel:' . $enquiry_phone_number;
?>
<!-- Enquiry section start -->
<section class="section relative overflow-hidden px-4 py-12 sm:py-16 md:py-20 lg:pt-[100px] lg:pb-[100px] 2xl:pt-[117px] 2xl:pb-[124px] min-h-[auto] lg:min-h-[614px]">
	<img class="absolute top-0 left-0 bottom-0 right-0 w-full h-full object-cover -z-10 invisible sm:visible" aria-hidden="true" src="<?php echo esc_url($enquiry_bg); ?>" alt="" />
	<img class="absolute top-0 left-0 bottom-0 right-0 w-full h-full object-cover -z-10 sm:invisible" aria-hidden="true" src="<?php echo esc_url($enquiry_bg_sp); ?>" alt="" />
	<p class="mb-6 sm:mb-8 md:mb-10 lg:mb-[50px] text-white text-[24px] sm:text-[32px] md:text-[36px] lg:text-[44px] text-center font-bold leading-tight"><?php esc_html_e('お問い合わせはこちら', 'mytheme'); ?></p>
	<div class="flex flex-col md:flex-row justify-center items-center gap-4 sm:gap-5 md:gap-6 lg:gap-[30px] max-w-7xl mx-auto">
		<a href="<?php echo esc_url($enquiry_download_url); ?>" class="p-5 sm:p-6 md:p-[28px] flex flex-col items-center justify-center rounded-[12px] bg-white drop-shadow-[0px_5px_20px_rgba(0,0,0,0)] w-full max-w-[320px] sm:max-w-[340px] md:max-w-[260px] lg:max-w-[280px] xl:max-w-[320px] 2xl:max-w-[380px] min-h-[200px] md:aspect-[380/265] hover:opacity-95 transition-opacity cursor-pointer" aria-label="<?php esc_attr_e('改善事例などをダウンロードする', 'mytheme'); ?>"<?php echo (int) get_theme_mod('mytheme_download_file_id', 0) > 0 ? ' download' : ''; ?>>
			<img src="<?php echo esc_url($download_icon); ?>" alt="" class="w-[56px] h-[56px] sm:w-[60px] sm:h-[60px] md:w-[68px] md:h-[68px] aspect-square object-cover rounded-full">
			<p class="text-[14px] sm:text-[15px] md:text-[16px] text-[#6EBA38] text-center mt-2 md:mt-[12px] font-medium"><?php esc_html_e('Download', 'mytheme'); ?></p>
			<p class="text-[18px] sm:text-[20px] md:text-[22px] lg:text-[24px] text-[#1F1C1A] text-center mt-4 md:mt-[24px] leading-snug font-bold">
				<?php esc_html_e('改善事例などを', 'mytheme'); ?><br />
				<?php esc_html_e('ダウンロードする', 'mytheme'); ?>
			</p>
		</a>
		<a href="<?php echo esc_url($enquiry_contact_url); ?>" class="p-5 sm:p-6 md:p-[28px] flex flex-col items-center justify-center rounded-[12px] bg-white drop-shadow-[0px_5px_20px_rgba(0,0,0,0)] w-full max-w-[320px] sm:max-w-[340px] md:max-w-[260px] lg:max-w-[280px] xl:max-w-[320px] 2xl:max-w-[380px] min-h-[200px] md:aspect-[380/265] hover:opacity-95 transition-opacity cursor-pointer" aria-label="<?php esc_attr_e('メールで無料相談をする', 'mytheme'); ?>">
			<img src="<?php echo esc_url($mail_icon); ?>" alt="" class="w-[56px] h-[56px] sm:w-[60px] sm:h-[60px] md:w-[68px] md:h-[68px] aspect-square object-cover rounded-full">
			<p class="text-[14px] sm:text-[15px] md:text-[16px] text-[#6EBA38] text-center mt-2 md:mt-[12px] font-medium"><?php esc_html_e('Mail', 'mytheme'); ?></p>
			<p class="text-[18px] sm:text-[20px] md:text-[22px] lg:text-[24px] text-[#1F1C1A] text-center mt-4 md:mt-[24px] leading-snug font-bold">
				<?php esc_html_e('メールで', 'mytheme'); ?><br />
				<?php esc_html_e('無料相談をする', 'mytheme'); ?>
			</p>
		</a>
		<a href="<?php echo esc_url($enquiry_phone_url); ?>" class="p-5 sm:p-6 md:p-[28px] flex flex-col items-center justify-center rounded-[12px] bg-white drop-shadow-[0px_5px_20px_rgba(0,0,0,0)] w-full max-w-[320px] sm:max-w-[340px] md:max-w-[260px] lg:max-w-[280px] xl:max-w-[320px] 2xl:max-w-[380px] min-h-[200px] md:aspect-[380/265] hover:opacity-95 transition-opacity cursor-pointer" aria-label="<?php esc_attr_e('お電話でのお問い合わせ', 'mytheme'); ?>">
			<img src="<?php echo esc_url($telephone_icon); ?>" alt="" class="w-[56px] h-[56px] sm:w-[60px] sm:h-[60px] md:w-[68px] md:h-[68px] aspect-square object-cover rounded-full">
			<p class="text-[14px] sm:text-[15px] md:text-[16px] text-[#6EBA38] text-center mt-2 md:mt-[12px] font-medium"><?php esc_html_e('Telephone', 'mytheme'); ?></p>
			<p class="text-[12px] sm:text-[13px] md:text-[14px] text-[#1F1C1A] text-center mt-3 md:mt-[20px] font-bold">
				<?php esc_html_e('お電話でのお問い合わせ', 'mytheme'); ?><br />
			</p>
			<p class="text-[18px] sm:text-[20px] md:text-[22px] lg:text-[24px] text-[#1F1C1A] text-center mt-1 md:mt-[2px] leading-[1.2] font-medium">
				<?php echo esc_html($enquiry_phone_display); ?><br />
			</p>
			<p class="text-[11px] sm:text-[11px] md:text-[12px] text-[#1F1C1A] text-center mt-1 md:mt-[2px] font-regular">
				<?php esc_html_e('平日 00時〜00時', 'mytheme'); ?><br />
			</p>
		</a>
	</div>
</section>
<!-- Enquiry section end -->