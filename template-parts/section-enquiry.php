<?php
$enquiry_bg = mytheme_img_asset('top/enquiry-bg');
$download_icon = mytheme_img_asset('top/download');
$mail_icon = mytheme_img_asset('top/mail');
$telephone_icon = mytheme_img_asset('top/telephone');
?>
<!-- Enquiry section start -->
<section class="section relative overflow-hidden pt-[117px] pb-[124px] h-[614px]">
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