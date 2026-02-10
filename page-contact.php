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
					<h1 class="text-[110px] leading-[1.1] text-[#6EBA38]">Contact</h1>
					<p class="text-[36px] font-bold">メール無料相談</p>
				</div>
				<img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
					class="h-auto w-[64%] object-cover" />
			</div>
			<p class="text-[14px] opacity-70 mt-[20px] w-full text-right pr-30">TOP > メール無料相談</p>
		</div>
	</div>
</section>
<!-- Hero section end -->

<!-- Contact section start -->
<?php
?>
<section class="flow-section mt-[67px] relative pb-[59px]">
	<div class="mx-auto max-w-[1200px] w-full flex flex-col gap-[60px] justify-center items-center">
		<div class="w-[960px]">
			<p class="text-[18px] font-medium text-center">弊社サービスについてのご相談やお見積依頼などお気軽にお問い合わせください。</p>
			<div class="mt-[23px] bg-[#F0ECE4] w-[960px] px-[70px] py-[50px]">
				<form action="">
					<div class="flex flex-row justify-between pb-[30px] border-b border-black">
						<div class="flex flex-row gap-[10px] shrink-0 items-center">
							<label class="text-[16px] font-medium" for="companyname">会社名</label>
                            <div class="text-[12px] bg-black text-white rounded-[10px] text-center shrink-0 w-[40px] h-[20px]">
                              必須
                            </div>
						</div>
                        <input class="w-full max-w-[630px] h-[60px] bg-white border border-[#CECECE] px-[10px] py-[5px]" type="text" id="companyname" name="companyname" placeholder="">
					</div>
					<div class="flex flex-row justify-between py-[30px] border-b border-black">
						<div class="flex flex-row gap-[10px] shrink-0 items-center">
							<label class="text-[16px] font-medium" for="name">お名前</label>
                            <div class="text-[12px] bg-black text-white rounded-[10px] text-center shrink-0 w-[40px] h-[20px]">
                              必須
                            </div>
						</div>
                        <input class="w-full max-w-[630px] h-[60px] bg-white border border-[#CECECE] px-[10px] py-[5px]" type="text" id="name" name="name" placeholder="">
					</div>
					<div class="flex flex-row justify-between py-[30px] border-b border-black">
						<div class="flex flex-row gap-[10px] shrink-0 items-center">
							<label class="text-[16px] font-medium" for="email">メールアドレス</label>
                            <div class="text-[12px] bg-black text-white rounded-[10px] text-center shrink-0 w-[40px] h-[20px]">
                              必須
                            </div>
						</div>
                        <input class="w-full max-w-[630px] h-[60px] bg-white border border-[#CECECE] px-[10px] py-[5px]" type="text" id="email" name="email" placeholder="">
					</div>
					<div class="flex flex-row justify-between py-[30px] border-b border-black">
						<div class="flex flex-row gap-[10px] shrink-0 items-center">
							<label class="text-[16px] font-medium" for="phone">電話番号</label>
                            <div class="text-[12px] bg-black text-white rounded-[10px] text-center shrink-0 w-[40px] h-[20px]">
                              必須
                            </div>
						</div>
                        <input class="w-full max-w-[630px] h-[60px] bg-white border border-[#CECECE] px-[10px] py-[5px]" type="text" id="phone" name="phone" placeholder="">
					</div>
					<div class="flex flex-row justify-between py-[30px] border-b border-black">
						<div class="flex flex-row gap-[10px] shrink-0 items-center">
							<label class="text-[16px] font-medium" for="inquirySubject">お問い合わせの件名</label>
						</div>
                        <input class="w-full max-w-[630px] h-[60px] bg-white border border-[#CECECE] px-[10px] py-[5px]" type="text" id="inquirySubject" name="inquirySubject" placeholder="">
					</div>
					<div class="flex flex-row justify-between py-[30px]">
						<div class="flex flex-row gap-[10px] shrink-0 items-center">
							<label class="text-[16px] font-medium" for="inquirySubject">お問い合わせ内容</label>
						</div>
                        <input class="w-full max-w-[630px] h-[200px] bg-white border border-[#CECECE] px-[10px] py-[5px]" type="text" id="inquirySubject" name="inquirySubject" placeholder="">
					</div>
				</form>
			</div>
		</div>
        <div class="w-[960px] flex flex-col gap-[20px] items-center">
            <p class="text-[18px] font-medium text-center">プライバシーポリシーをお読みいただき、同意の上送信してください。</p>
            <div class="text-[14px] font-medium bg-white px-[60px] py-[15px] rounded-[4px] w-full h-[200px] overflow-scroll">
                <p class="text-[14px] font-medium">
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
            <div class="text-[18px] font-medium text-center w-[300px] bg-[#6EBA38] rounded-[30px] text-white py-[20px] px-[40px] mt-[54px]">
               内容を確認する
            </div>
        </div>
	</div>
</section>
<!-- Lists news section end -->

<?php
get_footer();
