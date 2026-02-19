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
						<article id="privacy">
							<section id="sec01" class="sec1">
								<div class="mb-4">
									<p class="leading-relaxed font-regular text-[15px]">
										株式会社髙橋製作所（以下、「当社」）は、各種サービスのご提供にあたり、お客様の個人情報をお預かりしております。<br>
										当社は個人情報を保護し、お客様に更なる信頼性と安心感をご提供できるように努めて参ります。<br>
										当社は、個人情報に関する法令を遵守し、個人情報の適切な取り扱いを実現致します。
									</p>
								</div>
								<div class="mb-4">
									<h4 class="h4bg font-medium text-primary mb-2 text-[18px]">1. 個人情報の取得について</h4>
									<p class="leading-relaxed font-regular text-[15px] mb-2">
										当社は、偽りその他不正の手段によらず適正に個人情報を取得致します。なお、次のような場合に必要な範囲で個人情報を収集する場合があります。
									</p>
									<ol class="nl list-decimal list-inside">
										<li>ご相談・お問い合わせ</li>
									</ol>
								</div>
								<div class="mb-4">
									<h4 class="h4bg font-medium text-primary mb-2 text-[18px]">2. 個人情報の利用について</h4>
									<p class="leading-relaxed font-regular text-[15px] mb-2">
										当社は、個人情報を以下の利用目的の達成に必要な範囲内で、利用致します。<br>
										以下に定めのない目的で個人情報を利用する場合、あらかじめご本人の同意を得た上で行ないます。
									</p>
									<ol class="nl list-decimal list-inside">
										<li>ご相談・お問い合わせに対する回答や確認のご連絡のため</li>
										<li>個人情報を特定しない統計情報に利用するため</li>
									</ol>
								</div>
								<div class="mb-4">
									<h4 class="h4bg font-medium text-primary mb-2 text-[18px]">3. 個人情報の安全管理について</h4>
									<p class="leading-relaxed font-regular text-[15px]">
										当社は、取り扱う個人情報の漏洩、滅失またはき損の防止その他の個人情報の安全管理のために必要かつ適切な措置を講じます。
									</p>
								</div>
								<div class="mb-4">
									<h4 class="h4bg font-medium text-primary mb-2 text-[18px]">4. 個人情報の委託について</h4>
									<p class="leading-relaxed font-regular text-[15px]">
										当社は、個人情報の取り扱いの全部または一部を第三者に委託する場合は、当該第三者について厳正な調査を行い、取り扱いを委託された個人情報の安全管理が図られるよう当該第三者に対する必要かつ適切な監督を行います。
									</p>
								</div>
								<div class="mb-4">
									<h4 class="h4bg font-medium text-primary mb-2 text-[18px]">5. 個人情報の第三者提供について</h4>
									<p class="leading-relaxed font-regular text-[15px]">
										当社は、個人情報保護法等の法令に定めのある場合を除き、個人情報をあらかじめご本人の同意を得ることなく、第三者に提供致しません。
									</p>
								</div>
								<div class="mb-4">
									<h4 class="h4bg font-medium text-primary mb-2 text-[18px]">6. 個人情報の開示・訂正等について</h4>
									<p class="leading-relaxed font-regular text-[15px] mb-2">
										当社は、ご本人から自己の個人情報についての開示の請求がある場合、速やかに開示を致します。<br>
										その際、ご本人であることが確認できない場合には、開示に応じません。<br>
										個人情報の内容に誤りがあり、ご本人から訂正・追加・削除の請求がある場合、調査の上、速やかにこれらの請求に対応致します。<br>
										その際、ご本人であることが確認できない場合には、これらの請求に応じません。<br>
										当社の個人情報の取り扱いにつきまして、上記の請求・お問い合わせ等ございましたら、下記までご連絡くださいますようお願い申し上げます。
									</p>
									<table class="w-full border-collapse border border-primary/20 mt-2 text-left">
										<caption class="txtL font-medium text-left py-1">【　連絡先　】</caption>
										<colgroup>
											<col style="width:25%">
											<col style="width:auto">
										</colgroup>
										<tbody>
											<tr class="border-b border-primary/20">
												<th scope="row" class="font-medium py-1 pr-2 align-top">名称</th>
												<td class="py-1">株式会社髙橋製作所</td>
											</tr>
											<tr class="border-b border-primary/20">
												<th scope="row" class="font-medium py-1 pr-2 align-top">所在地</th>
												<td class="py-1">〒578－0983 大阪府東大阪市吉田下島14番25号</td>
											</tr>
											<tr class="border-b border-primary/20">
												<th scope="row" class="font-medium py-1 pr-2 align-top">電話番号</th>
												<td class="py-1">072-961-9975</td>
											</tr>
											<tr class="border-b border-primary/20">
												<th scope="row" class="font-medium py-1 pr-2 align-top">メールアドレス</th>
												<td class="py-1">mfg-tkhs@guitar.ocn.ne.jp</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="mb-4">
									<h4 class="h4bg font-medium text-primary mb-2 text-[18px]">7. 組織・体制</h4>
									<p class="leading-relaxed font-regular text-[15px]">
										当社は、髙橋 宏を個人情報管理責任者とし、個人情報の適正な管理及び継続的な改善を実施致します。
									</p>
								</div>
								<div class="mb-4">
									<h4 class="h4bg font-medium text-primary mb-2 text-[18px]">8. その他の注意事項</h4>
									<p class="leading-relaxed font-regular text-[15px]">
										当社が運営するコンテンツや掲載広告などからリンクされている第三者のサイト及びサービスは、当社とは独立した個人情報の保護に関する規定やデータ収集の規約を定めています。<br>
										当サイトはこれらの規約や活動に対していかなる義務や責任も負いません。
									</p>
								</div>
								<div class="mb-4">
									<h4 class="h4bg font-medium text-primary mb-2 text-[18px]">9. 個人情報の管理方法の継続的改善について</h4>
									<p class="leading-relaxed font-regular text-[15px]">
										当社は、個人情報の管理方法を見直し、継続的に改善を実施します。
									</p>
								</div>
								<div class="mb-4">
									<h4 class="h4bg font-medium text-primary mb-2 text-[18px]">10. 本方針の変更</h4>
									<p class="leading-relaxed font-regular text-[15px]">
										本方針の内容は変更されることがあります。<br>
										変更後の本方針については、当社が別途定める場合を除いて、当サイトに掲載した時から効力を生じるものとします。
									</p>
								</div>
							</section>
						</article>
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
