<?php

/**
 * Page template for About (slug: about).
 *
 * @package mytheme
 */

get_header();
?>

<!-- Hero section start -->
<?php
$hero_image = mytheme_img_asset('about/hero');
$hero_mesh = mytheme_img_asset('about/hero-mesh');
?>
<section class="about-hero relative ">
  <div class="aspect-[1600/577] relative w-full">
    <img src="<?php echo esc_url($hero_mesh); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="-z-10 absolute h-auto w-[94%] object-cover mx-auto left-1/2 -translate-x-1/2" />
    <div class=" w-full py-[46px]">
      <div class="flex justify-end items-center w-full">
        <div class="mr-[44px]">
          <h1 class="text-[110px] leading-[1.1] text-[#6EBA38]">About us</h1>
          <p class="text-[36px] font-bold">髙橋製作所について</p>
        </div>
        <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="h-auto w-[64%] object-cover" />
      </div>
      <p class="text-[14px] opacity-70 mt-[20px] w-full text-right pr-30">TOP > 髙橋について</p>
    </div>
    <div class="grid grid-cols-3 gap-[30px] mx-auto w-fit mt-[50px]">
      <div class="bg-[#6EBA38] text-white w-80 aspect-[320/120] relative rounded-[12px] flex flex-col justify-center items-center gap-2">
        <p class="text-[16px] opacity-50">Strength</p>
        <p class="text-[24px]">髙橋の強み</p>
        <svg class="absolute top-1/2 -translate-y-1/2 right-5" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
          <path id="Color_Overlay" data-name="Color Overlay" d="M575,812a15,15,0,1,1-15,15A15,15,0,0,1,575,812Z" transform="translate(-560 -812)" fill="#f6f6f6" opacity="0.3" />
          <path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M579.539,825.265l-4.406,4.406-4.406-4.406" transform="translate(-560 -812)" fill="none" stroke="#fff" stroke-width="2" />
        </svg>
      </div>
      <div class="bg-primary text-white w-80 aspect-[320/120] relative rounded-[12px] flex flex-col justify-center items-center gap-2">
        <p class="text-[16px] opacity-50">Business</p>
        <p class="text-[24px]">事業について</p>
        <svg class="absolute top-1/2 -translate-y-1/2 right-5" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
          <path id="Color_Overlay" data-name="Color Overlay" d="M575,812a15,15,0,1,1-15,15A15,15,0,0,1,575,812Z" transform="translate(-560 -812)" fill="#f6f6f6" opacity="0.3" />
          <path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M579.539,825.265l-4.406,4.406-4.406-4.406" transform="translate(-560 -812)" fill="none" stroke="#fff" stroke-width="2" />
        </svg>
      </div>
      <div class="bg-[#6EBA38] text-white w-80 aspect-[320/120] relative rounded-[12px] flex flex-col justify-center items-center gap-2">
        <p class="text-[16px] opacity-50">Company</p>
        <p class="text-[24px]">会社案内</p>
        <svg class="absolute top-1/2 -translate-y-1/2 right-5" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
          <path id="Color_Overlay" data-name="Color Overlay" d="M575,812a15,15,0,1,1-15,15A15,15,0,0,1,575,812Z" transform="translate(-560 -812)" fill="#f6f6f6" opacity="0.3" />
          <path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M579.539,825.265l-4.406,4.406-4.406-4.406" transform="translate(-560 -812)" fill="none" stroke="#fff" stroke-width="2" />
        </svg>
      </div>
    </div>
</section>
<!-- Hero section end -->

<!-- Strength section start -->
<?php
$decoration_icon = mytheme_img_asset('top/product-icon');
$strength_bg = mytheme_img_asset('about/strength-bg');

$strength_item_1 = mytheme_img_asset("about/strength-1");
$strength_item_2 = mytheme_img_asset("about/strength-2");
$strength_item_3 = mytheme_img_asset("about/strength-3");
$strength_item_4 = mytheme_img_asset("about/strength-4");
?>
<section class="strength-section mt-[90px]">
  <p class="text-[20px] w-fit gap-[14px] flex mx-auto text-secondary">
    <img src="<?php echo esc_url($decoration_icon); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[30px] h-[30px]" />
    Strength
  </p>
  <h2 class="mt-5 text-[44px] text-primary w-fit mx-auto">髙橋の強み</h2>
  <div class="aspect-[1600/333] relative w-full px-50 py-6 flex flex-col justify-center items-start text-[36px] text-white mt-[50px]">
    <img src="<?php echo esc_url($strength_bg); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="-z-10 absolute inset-0 h-full w-full object-cover" />
    <p>
      現場に合わせた<span class="bg-secondary">オーダーメイド</span>の
    </p>
    <p>
      ダンボール加⼯機械が製作可能
    </p>
  </div>
  <?php
  $strength_items = array(
    array(
      'image' => $strength_item_1,
      'title' => 'ダンボール(加工)機械製作のプロフェッショナル 。設計から設置､ アフターサービスまでワンストップ',
      'body'  => '当社は1969年からダンボール機械の製作を専門とし､ お客様のお困り事やニーズにお応えしてきました｡ 現在は設計から製作､ 設置､ アフターサービスまでワンストップ体制で皆様のお力になれるように日々努力 しております。',
    ),
    array(
      'image' => $strength_item_2,
      'title' => 'ワンストップ体制だからこそお客様のご要望に柔軟に対応 お客様のご要望にあったご提案をトータルでさせていただきます。',
      'body'  => 'お客様の現場､ 作業環境に合ったライン設備等もトータルでご提案することも可能です｡ 機械のスペックも大切ですが､ 使い方や配置も非常に重要なのでトータルでご提案させていただきます。',
    ),
    array(
      'image' => $strength_item_3,
      'title' => '様々な販売形態を展開<br>他者設備の改造､ 設計､ 中古販売まで',
      'body'  => '当社製作の機械はもちろん､ 他社様でご購入された機械もオーバーホール､ 改造をし､ ご提供できます｡ ご要望があれば中古品の販売､ ご要望に沿ったスペックに仕上げることも可能です。',
    ),
    array(
      'image' => $strength_item_4,
      'title' => 'お客様に寄り添うアフターサービス<br>サポート、付帯工事について',
      'body'  => '機械の納品後のサポートもお任せください｡ メンテナンス､ 修理はもちろん､ 付帯工事(安全柵や安全ステップの取り付け等)なども行っておりますので 一度ご相談ください｡',
    ),
  );
  ?>

  <div class="w-[70%] mt-[120px] mx-auto flex flex-col gap-[130px]">
    <?php foreach ($strength_items as $index => $item) : ?>
      <?php $row_class = ($index % 2 === 1) ? 'flex-row-reverse' : 'justify-start'; ?>
      <div class="flex gap-[100px] <?php echo esc_attr($row_class); ?>">
        <div class="relative w-[510px] aspect-[510/357]">
          <div class="w-15 aspect-square bg-secondary absolute -translate-x-1/2 top-0 -translate-y-1/2 -z-10"></div>
          <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="inset-0 h-full w-full object-cover" />
          <p class="[writing-mode:vertical-rl] text-secondary text-[16px] top-0 left-0 absolute -translate-x-[36px] translate-y-[40px]">
            STRENGTH
          </p>
        </div>
        <div class="w-[500px]">
          <h1 class="text-secondary text-[60px] leading-[1] -ml-[34px] -mt-[38px]"><?php echo esc_html(sprintf('%02d', $index + 1)); ?></h1>
          <p class="text-primary text-[25px] -tracking-[0.12em] mt-8">
            <?php echo wp_kses($item['title'], array('br' => array())); ?>
          </p>
          <p class="text-primary text-[18px] opacity-[70px] mt-[64px] -tracking-[0.06em]"><?php echo esc_html($item['body']); ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<!-- Strength section end -->



<?php
get_footer();
