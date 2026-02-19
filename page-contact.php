<?php

/**
 * Page template for Contact (slug: contact).
 *
 * @package mytheme
 */
get_header();
?>

<!-- Hero section start -->
<?php
$hero_image = mytheme_img_asset('contact/hero');
$hero_mesh = mytheme_img_asset('contact/hero-mesh');
?>
<section class="about-hero relative ">
	<div class="aspect-[1600/577] relative w-full">
		<img src="<?php echo esc_url($hero_mesh); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
			class="-z-10 absolute h-auto w-[94%] object-cover mx-auto left-1/2 -translate-x-1/2" />
		<div class=" w-full py-[46px]">
			<div class="flex justify-end items-center w-full">
				<div class="mr-[44px]">
					<h1 class="text-[110px] leading-[1.1] text-[#6EBA38] font-medium">Contact</h1>
					<p class="text-[36px] font-bold">メール無料相談</p>
				</div>
				<img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
					class="h-auto w-[64%] object-cover" />
			</div>
			<p class="text-[14px] opacity-70 mt-[20px] w-full text-right pr-30 font-regular"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a> &gt; メール無料相談</p>
		</div>
	</div>
</section>
<!-- Hero section end -->

<!-- Contact section start -->
<?php
$cf7_form_id = defined('MYTHEME_CF7_CONTACT_FORM_ID') ? MYTHEME_CF7_CONTACT_FORM_ID : '';
$cf7_form_id = is_numeric($cf7_form_id) ? absint($cf7_form_id) : sanitize_key((string) $cf7_form_id);
$use_cf7 = $cf7_form_id !== '' && $cf7_form_id !== 0 && function_exists('wpcf7_contact_form');
?>
<section class="flow-section mt-[67px] relative pb-[59px]">
	<div class="mx-auto max-w-[1200px] w-full flex flex-col gap-[60px] justify-center items-center">
		<div class="w-[960px] max-w-full">
			<p class="text-[18px] font-medium text-center">弊社サービスについてのご相談やお見積依頼などお気軽にお問い合わせください。</p>
			<div class="mt-[23px] bg-[#F0ECE4] w-full max-w-[960px] mx-auto px-[70px] py-[50px] box-border mytheme-contact-cf7-wrap">
				<?php if ($use_cf7) : ?>
					<?php echo do_shortcode('[contact-form-7 id="' . $cf7_form_id . '"]'); ?>
					<p class="text-[18px] font-medium text-center mt-10 mytheme-contact-privacy-intro">プライバシーポリシーをお読みいただき、同意の上送信してください。</p>
					<div class="text-[14px] font-regular bg-white px-[60px] py-[15px] rounded-[4px] w-full h-[200px] overflow-scroll mt-5 mytheme-contact-privacy">
						<p class="text-[14px] font-regular">
							当社は、お客様からお預かりした個人情報を、以下の目的に限定して利用いたします。
							・お問い合わせへのご回答
							・お見積もりのご提案
							・その他ご要望に応じたご連絡
							・お客様の同意がない限り、個人情報を第三者に提供することはありません。
							・お客様の個人情報の管理については、適切な措置を講じております。
							当社は、お客様からお預かりした個人情報を、以下の目的に限定して利用いたします。
							・お問い合わせへのご回答
							・お見積もりのご提案
							・その他ご要望に応じたご連絡
							・お客様の同意がない限り、個人情報を第三者に提供することはありません。
							・お客様の個人情報の管理については、適切な措置を講じております。
							当社は、お客様からお預かりした個人情報を、以下の目的に限定して利用いたします。
							・お問い合わせへのご回答
							・お見積もりのご提案
							・その他ご要望に応じたご連絡
							・お客様の同意がない限り、個人情報を第三者に提供することはありません。
							・お客様の個人情報の管理については、適切な措置を講じております。
							当社は、お客様からお預かりした個人情報を、以下の目的に限定して利用いたします。
							・お問い合わせへのご回答
							・お見積もりのご提案
							・その他ご要望に応じたご連絡
							・お客様の同意がない限り、個人情報を第三者に提供することはありません。
							・お客様の個人情報の管理については、適切な措置を講じております。
						</p>
					</div>
					<script>
						(function() {
							var wrap = document.querySelector('.mytheme-contact-cf7-wrap');
							if (!wrap) return;
							var form = wrap.querySelector('.wpcf7-form');
							var privacy = wrap.querySelector('.mytheme-contact-privacy');
							if (!form || !privacy) return;
							var submitP = form.querySelector('p:last-child');
							if (submitP && submitP.querySelector('input[type="submit"]')) {
								privacy.parentNode.insertBefore(submitP, privacy.nextSibling);
							}
						})();
					</script>
				<?php else : ?>
					<p class="text-[16px] text-center font-medium">
						<?php if (!$cf7_form_id) : ?>
							<?php esc_html_e('Contact Form 7 をインストールし、お問い合わせフォームを作成したら、functions.php で MYTHEME_CF7_CONTACT_FORM_ID にそのフォームのIDを設定してください。', 'mytheme'); ?>
						<?php else : ?>
							<?php esc_html_e('Contact Form 7 プラグインを有効化するか、MYTHEME_CF7_CONTACT_FORM_ID が正しいフォームIDか確認してください。', 'mytheme'); ?>
						<?php endif; ?>
					</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- Contact section end -->

<?php
get_footer();
