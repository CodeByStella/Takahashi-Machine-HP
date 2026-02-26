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
<section class="about-hero relative px-0">
  <div class="aspect-[375/600] sm:aspect-[768/600] md:aspect-[1024/500] lg:aspect-[1440/550] 2xl:aspect-[1600/577] relative w-full">
    <img src="<?php echo esc_url($hero_mesh); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="-z-10 absolute h-auto w-[94%] object-cover mx-auto left-1/2 -translate-x-1/2" />
    <div class="w-full py-[24px] sm:py-[30px] md:py-[36px] lg:py-[42px] 2xl:py-[46px]">
      <div class="flex flex-col md:flex-row justify-center md:justify-end items-center w-full gap-4 md:gap-0">
        <div class="text-center md:text-left md:mr-[24px] lg:mr-[34px] 2xl:mr-[44px] order-2 md:order-1">
          <h1 class="text-[48px] sm:text-[60px] md:text-[75px] lg:text-[90px] 2xl:text-[110px] leading-[1.1] text-[#6EBA38] font-medium">About us</h1>
          <p class="text-[18px] sm:text-[22px] md:text-[28px] lg:text-[32px] 2xl:text-[36px] font-bold">髙橋製作所について</p>
        </div>
        <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="h-auto w-full max-w-[340px] md:w-[58%] md:max-w-none lg:w-[62%] 2xl:w-[64%] object-cover order-1 md:order-2 rounded-[20px] sm:rounded-none" />
      </div>
      <p class="text-[11px] sm:text-[12px] md:text-[13px] 2xl:text-[14px] opacity-70 mt-[12px] sm:mt-[16px] md:mt-[20px] w-full text-center md:text-right pr-0 md:pr-15 lg:pr-20 2xl:pr-30 font-regular"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a> &gt; 髙橋について</p>
    </div>
    <?php $about_page_url = get_permalink(); ?>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-5 md:gap-[20px] lg:gap-[25px] 2xl:gap-[30px] mx-auto max-w-[320px] sm:max-w-none w-full sm:w-fit px-4 sm:px-0 mt-[30px] sm:mt-[35px] md:mt-[40px] lg:mt-[45px] 2xl:mt-[50px] pb-6 sm:pb-8 md:pb-0">
      <a href="<?php echo esc_url($about_page_url . '#about-strength'); ?>" class="bg-secondary hover:bg-primary active:bg-primary text-white w-full sm:w-[240px] md:w-[220px] lg:w-[280px] 2xl:w-80 aspect-[320/120] relative rounded-[12px] flex flex-col justify-center items-center gap-2 cursor-pointer transition-colors">
        <p class="text-[13px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] opacity-50 font-regular">Strength</p>
        <p class="text-[18px] sm:text-[20px] md:text-[22px] 2xl:text-[24px] font-bold">髙橋の強み</p>
        <svg class="absolute top-1/2 -translate-y-1/2 right-5" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
          <path id="Color_Overlay" data-name="Color Overlay" d="M575,812a15,15,0,1,1-15,15A15,15,0,0,1,575,812Z" transform="translate(-560 -812)" fill="#f6f6f6" opacity="0.3" />
          <path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M579.539,825.265l-4.406,4.406-4.406-4.406" transform="translate(-560 -812)" fill="none" stroke="#fff" stroke-width="2" />
        </svg>
      </a>
      <a href="<?php echo esc_url($about_page_url . '#about-business'); ?>" class="bg-secondary hover:bg-primary active:bg-primary text-white w-full sm:w-[240px] md:w-[220px] lg:w-[280px] 2xl:w-80 aspect-[320/120] relative rounded-[12px] flex flex-col justify-center items-center gap-2 cursor-pointer transition-colors">
        <p class="text-[13px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] opacity-50 font-regular">Business</p>
        <p class="text-[18px] sm:text-[20px] md:text-[22px] 2xl:text-[24px] font-bold">事業について</p>
        <svg class="absolute top-1/2 -translate-y-1/2 right-5" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
          <path id="Color_Overlay" data-name="Color Overlay" d="M575,812a15,15,0,1,1-15,15A15,15,0,0,1,575,812Z" transform="translate(-560 -812)" fill="#f6f6f6" opacity="0.3" />
          <path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M579.539,825.265l-4.406,4.406-4.406-4.406" transform="translate(-560 -812)" fill="none" stroke="#fff" stroke-width="2" />
        </svg>
      </a>
      <a href="<?php echo esc_url($about_page_url . '#about-company'); ?>" class="bg-secondary hover:bg-primary active:bg-primary text-white w-full sm:w-[240px] md:w-[220px] lg:w-[280px] 2xl:w-80 aspect-[320/120] relative rounded-[12px] flex flex-col justify-center items-center gap-2 cursor-pointer transition-colors sm:col-span-2 sm:mx-auto md:col-span-1">
        <p class="text-[13px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] opacity-50 font-regular">Company</p>
        <p class="text-[18px] sm:text-[20px] md:text-[22px] 2xl:text-[24px] font-bold">会社案内</p>
        <svg class="absolute top-1/2 -translate-y-1/2 right-5" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
          <path id="Color_Overlay" data-name="Color Overlay" d="M575,812a15,15,0,1,1-15,15A15,15,0,0,1,575,812Z" transform="translate(-560 -812)" fill="#f6f6f6" opacity="0.3" />
          <path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M579.539,825.265l-4.406,4.406-4.406-4.406" transform="translate(-560 -812)" fill="none" stroke="#fff" stroke-width="2" />
        </svg>
      </a>
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
<section id="about-strength" class="strength-section mt-[50px] sm:mt-[60px] md:mt-[70px] lg:mt-[80px] 2xl:mt-[90px] px-0">
  <p class="text-[16px] sm:text-[17px] md:text-[18px] lg:text-[19px] 2xl:text-[20px] w-fit gap-[10px] sm:gap-[12px] md:gap-[14px] flex mx-auto text-secondary items-center font-medium">
    <img src="<?php echo esc_url($decoration_icon); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[24px] h-[24px] sm:w-[26px] sm:h-[26px] md:w-[28px] md:h-[28px] 2xl:w-[30px] 2xl:h-[30px]" />
    Strength
  </p>
  <h2 class="mt-4 sm:mt-4 md:mt-5 text-[28px] sm:text-[32px] md:text-[36px] lg:text-[40px] 2xl:text-[44px] text-primary w-fit mx-auto text-center font-bold">髙橋の強み</h2>
  <div class="aspect-[375/200] sm:aspect-[768/250] md:aspect-[1024/280] lg:aspect-[1440/320] 2xl:aspect-[1600/333] relative w-full px-4 sm:px-8 md:px-20 lg:px-30 2xl:px-50 py-4 sm:py-5 md:py-6 flex flex-col justify-center items-start text-[22px] sm:text-[22px] md:text-[26px] lg:text-[32px] 2xl:text-[36px] text-white mt-[30px] sm:mt-[35px] md:mt-[40px] lg:mt-[45px] 2xl:mt-[50px] font-bold">
    <img src="<?php echo esc_url($strength_bg); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="-z-10 absolute inset-0 h-full w-full object-cover" />
    <p class="leading-[1.8]">
      現場に合わせた<span class="bg-secondary px-1">オーダーメイド</span>の
    </p>
    <p class="leading-[1.8]">
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

  <div class="w-full sm:w-[90%] md:w-[85%] lg:w-[80%] 2xl:w-[75%] mt-[60px] sm:mt-[70px] md:mt-[90px] lg:mt-[110px] 2xl:mt-[120px] mx-auto flex flex-col gap-[60px] sm:gap-[80px] md:gap-[100px] lg:gap-[120px] 2xl:gap-[130px] px-8 sm:px-0">
    <?php foreach ($strength_items as $index => $item) : ?>
      <?php $row_class = ($index % 2 === 1) ? 'md:flex-row-reverse' : ''; ?>
      <div class="flex flex-col md:flex-row gap-[30px] sm:gap-[40px] md:gap-[60px] lg:gap-[80px] justify-between 2xl:gap-[100px] justify-center <?php echo esc_attr($row_class); ?>">
        <div class="relative w-full md:w-[380px] lg:w-[450px] 2xl:w-[510px] aspect-[510/357] flex-shrink-0">
          <div class="w-10 sm:w-12 md:w-14 lg:w-15 aspect-square bg-secondary absolute -translate-x-1/2 top-0 -translate-y-1/2 -z-10"></div>
          <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="inset-0 h-full w-full object-cover" />
          <p class="[writing-mode:vertical-rl] text-secondary text-[13px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] top-0 left-0 absolute -translate-x-[24px] sm:-translate-x-[30px] md:-translate-x-[36px] translate-y-[30px] sm:translate-y-[35px] md:translate-y-[40px] font-bold">
            STRENGTH
          </p>
        </div>
        <div class="w-full md:w-[320px] lg:w-[420px] 2xl:w-[500px]">
          <h1 class="text-secondary text-[42px] sm:text-[48px] md:text-[52px] lg:text-[56px] 2xl:text-[60px] leading-[1] -ml-[20px] sm:-ml-[26px] md:-ml-[30px] 2xl:-ml-[34px] -mt-[20px] sm:-mt-[28px] md:-mt-[34px] 2xl:-mt-[38px] font-bold"><?php echo esc_html(sprintf('%02d', $index + 1)); ?></h1>
          <p class="text-primary text-[18px] sm:text-[20px] md:text-[22px] lg:text-[24px] 2xl:text-[25px] mt-5 sm:mt-6 md:mt-7 2xl:mt-8 font-bold">
            <?php echo wp_kses($item['title'], array('br' => array())); ?>
          </p>
          <p class="text-primary text-[15px] sm:text-[15px] md:text-[16px] lg:text-[17px] 2xl:text-[18px] opacity-70 mt-[20px] sm:mt-[48px] md:mt-[56px] 2xl:mt-[64px] -tracking-[0.06em] font-regular"><?php echo esc_html($item['body']); ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<!-- Strength section end -->

<?php
$service_mesh = mytheme_img_asset('about/service-mesh');
$service_decoration = mytheme_img_asset('about/service-decoration');
?>
<div class="w-full h-[60px] sm:h-[150px] md:h-[180px] lg:h-[220px] 2xl:h-[257px] mt-[30px] sm:mt-[100px] md:mt-[130px] lg:mt-[155px] 2xl:mt-[175px] relative">
  <img src="<?php echo esc_url($service_decoration); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute -top-[200px] sm:-top-[260px] md:-top-[320px] lg:-top-[360px] 2xl:-top-[400px] -left-[60px] sm:-left-[80px] md:-left-[100px] lg:-left-[115px] 2xl:-left-[130px] w-[280px] sm:w-[360px] md:w-[450px] lg:w-[520px] 2xl:w-[592px] h-full object-cover" />
  <img src="<?php echo esc_url($service_mesh); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="h-14 sm:h-full mx-auto object-cover" />
  <div class="w-full overflow-hidden h-full absolute top-0 left-0">
    <?php
    get_template_part(
      'template-parts/marquee',
      null,
      array(
        'text' => 'Custom Order & One Stop Service',
      )
    );
    ?>
  </div>
</div>

<!-- Flow Section start -->
<?php
$decoration_icon = mytheme_img_asset('top/product-icon');
$flow_decoration_1 = mytheme_img_asset('about/flow-decoration-1');
$flow_decoration_2 = mytheme_img_asset('about/flow-decoration-2');
$flow_decoration_3 = mytheme_img_asset('about/flow-decoration-3');

$flow_item_1 = mytheme_img_asset('about/flow-1');
$flow_item_2 = mytheme_img_asset('about/flow-2');
$flow_item_3 = mytheme_img_asset('about/flow-3');
$flow_item_4 = mytheme_img_asset('about/flow-4');
$flow_item_5 = mytheme_img_asset('about/flow-5');
$flow_item_6 = mytheme_img_asset('about/flow-6');
$flow_item_7 = mytheme_img_asset('about/flow-7');
?>
<section class="flow-section mt-[100px] sm:mt-[130px] md:mt-[160px] lg:mt-[180px] 2xl:mt-[200px] relative pb-[120px] sm:pb-[150px] md:pb-[180px] lg:pb-[220px] 2xl:pb-59 px-4 sm:px-6 md:px-8 lg:px-0">
  <div class="overflow-hidden w-full h-[300px] sm:h-[350px] md:h-[400px] lg:h-[450px] 2xl:h-[500px] absolute -top-[76px] sm:-top-[100px] md:-top-[120px] lg:-top-[140px] 2xl:-top-38 hidden md:block">
    <img src="<?php echo esc_url($flow_decoration_1); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-24 sm:top-32 md:top-36 lg:top-44 2xl:top-48 translate-x-1/2 right-[33%] w-[180px] sm:w-[220px] md:w-[250px] lg:w-[270px] 2xl:w-[296px] h-auto " />
    <img src="<?php echo esc_url($flow_decoration_2); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute translate-x-1/2 right-[10%] w-[260px] sm:w-[320px] md:w-[360px] lg:w-[390px] 2xl:w-[424px] h-auto " />
  </div>
  <div class="w-full sm:w-[90%] md:w-[85%] lg:w-[80%] 2xl:w-[75%] mx-auto relative">
    <p class="text-[16px] sm:text-[17px] md:text-[18px] lg:text-[19px] 2xl:text-[20px] w-fit gap-[10px] sm:gap-[12px] md:gap-[14px] flex text-secondary items-center font-bold">
      <img src="<?php echo esc_url($decoration_icon); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[24px] h-[24px] sm:w-[26px] sm:h-[26px] md:w-[28px] md:h-[28px] 2xl:w-[30px] 2xl:h-[30px] " />
      Flow
    </p>
    <h1 class="mt-4 sm:mt-5 md:mt-6 text-primary text-[28px] sm:text-[32px] md:text-[36px] lg:text-[40px] 2xl:text-[44px] font-bold">
      製作の流れ
    </h1>
    <p class="text-[15px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] mt-6 sm:mt-7 md:mt-8 2xl:mt-9 leading-relaxed font-regular">
      「こうしたい」というイメージから、<br />
      お客様の現場やご要望に合わせた機械づくりを行います。<br />
      ゼロから製作することも可能ですし、既製品をセミオーダーで<br class="hidden sm:inline" />
      カスタマイズすることも可能です。まずは一度ご相談くださいませ。<br />
    </p>
    <div class="flex flex-col mt-[30px] sm:mt-[36px] md:mt-[42px] lg:mt-[48px] 2xl:mt-[51px] gap-0">
      <div class="flex flex-col md:flex-row gap-6 md:gap-0">
        <div class="flow-item-width relative aspect-[350/230] hidden md:block">
          <div class="w-[120px] sm:w-[140px] md:w-[160px] lg:w-[180px] 2xl:w-[200px] aspect-square bg-secondary absolute top-0 left-0"></div>
          <img src="<?php echo esc_url($flow_item_1); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute w-[150px] sm:w-[170px] md:w-[200px] lg:w-[225px] 2xl:w-[250px] h-auto object-cover bottom-0 left-[20px] sm:left-[24px] md:left-[26px] lg:left-[28px] 2xl:left-[30px]" />
          <div class="w-[8px] sm:w-[9px] md:w-[10px] aspect-square rounded-full bg-primary absolute -right-[1px] bottom-[40px] sm:bottom-[48px] md:bottom-[52px] lg:bottom-[55px] 2xl:bottom-[57px] translate-x-1/2"></div>
          <div class="w-[2px] h-[40px] sm:h-[48px] md:h-[52px] lg:h-[55px] 2xl:h-[57px] bg-primary absolute -right-[2px] bottom-0"></div>
          <h1 class="text-secondary text-[42px] sm:text-[48px] md:text-[52px] lg:text-[56px] 2xl:text-[60px] leading-[1] absolute bottom-16 sm:bottom-20 md:bottom-22 lg:bottom-23 2xl:bottom-24 right-0 translate-x-1/2 font-bold font-bold">01</h1>
        </div>
        <div class="h-full md:pl-[40px] lg:pl-[54px] 2xl:pl-[68px]">
          <div class="flex items-start gap-4 mb-4 md:hidden">
            <span class="text-secondary text-[40px] sm:text-[48px] font-bold leading-none flex-shrink-0">01</span>
            <div class="flex flex-col gap-2">
              <img src="<?php echo esc_url($flow_item_1); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[220px] sm:w-[140px] h-auto object-cover rounded-md" />
            </div>
          </div>
          <p class="text-primary text-[18px] sm:text-[20px] md:text-[22px] lg:text-[23px] 2xl:text-[24px] -tracking-[0.12em] mt-0 md:mt-16 lg:mt-20 2xl:mt-22 font-bold">
            お問い合わせ・お聞き取り
          </p>
          <p class="text-primary text-[15px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] opacity-70 mt-3 md:mt-4 -tracking-[0.06em] leading-relaxed font-regular">
            メール・FAX・電話でお問い合せください。<br />
            ご希望の機械概要（⼨法・形状・材料など）やイメージ画像などがあればお⾒せください。
          </p>
        </div>
      </div>
      <div class="flex flex-col md:flex-row mt-12 md:mt-0 gap-6 md:gap-0">
        <div class="flow-item-width hidden md:block">
        </div>
        <div class="px-4 sm:px-6 md:px-[40px] lg:px-[54px] 2xl:px-[68px] pt-8 sm:pt-10 md:pt-12 lg:pt-14 2xl:pt-15 pb-[30px] sm:pb-[36px] md:pb-[42px] lg:pb-[46px] 2xl:pb-[50px] relative aspect-[420/300] sm:aspect-[420/320] md:aspect-[420/340] w-full md:w-[360px] lg:w-[380px] 2xl:w-105 border-t-[2px] border-b-[2px] md:border-l-0 md:border-r-0 border-primary hidden md:block">
          <div class="w-[120px] sm:w-[140px] md:w-[160px] lg:w-[180px] 2xl:w-[200px] aspect-square bg-secondary absolute top-8 sm:top-10 md:top-12 lg:top-14 2xl:top-15 left-4 sm:left-6 md:left-[40px] lg:left-[54px] 2xl:left-[68px]"></div>
          <img src="<?php echo esc_url($flow_item_2); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[150px] sm:w-[170px] md:w-[200px] lg:w-[225px] 2xl:w-[250px] relative h-auto object-cover top-[20px] sm:top-[24px] md:top-[26px] lg:top-[28px] 2xl:top-[30px] left-[20px] sm:left-[24px] md:left-[26px] lg:left-[28px] 2xl:left-[30px]" />
          <div class="w-[8px] sm:w-[9px] md:w-[10px] aspect-square rounded-full bg-primary absolute right-[1px] top-[60px] sm:top-[70px] md:top-[76px] lg:top-[82px] 2xl:top-[90px] translate-x-1/2"></div>
          <div class="w-[2px] h-[60px] sm:h-[70px] md:h-[76px] lg:h-[82px] 2xl:h-[90px] bg-primary absolute right-0 top-0"></div>
          <div class="w-[8px] sm:w-[9px] md:w-[10px] aspect-square rounded-full bg-primary absolute right-[1px] bottom-[80px] sm:bottom-[95px] md:bottom-[100px] lg:bottom-[110px] 2xl:bottom-[120px] translate-x-1/2"></div>
          <div class="w-[2px] h-[80px] sm:h-[95px] md:h-[100px] lg:h-[110px] 2xl:h-[120px] bg-primary absolute right-0 bottom-0"></div>
          <h1 class="text-secondary text-[42px] sm:text-[48px] md:text-[52px] lg:text-[56px] 2xl:text-[60px] leading-[1] absolute bottom-32 sm:bottom-36 md:bottom-37 lg:bottom-38 2xl:bottom-39 right-0 translate-x-0 md:translate-x-1/2 font-bold">02</h1>
        </div>
        <div class="h-full md:pl-[40px] lg:pl-[54px] 2xl:pl-[68px] mt-0 md:mt-0">
          <div class="flex items-start gap-4 mb-4 md:hidden">
            <span class="text-secondary text-[40px] sm:text-[48px] font-bold leading-none flex-shrink-0">02</span>
            <div class="flex flex-col gap-2">
              <img src="<?php echo esc_url($flow_item_2); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[220px] sm:w-[140px] h-auto object-cover rounded-md" />
            </div>
          </div>
          <p class="text-primary text-[18px] sm:text-[20px] md:text-[22px] lg:text-[23px] 2xl:text-[24px] -tracking-[0.12em] mt-0 md:mt-28 lg:mt-32 2xl:mt-34 font-bold">
            概算・お⾒積もりの提出
          </p>
          <p class="text-primary text-[15px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] opacity-70 mt-3 md:mt-4 -tracking-[0.08em] leading-relaxed font-regular">
            ラフスケッチと概算⾒積をお伝えします。
          </p>
        </div>
      </div>
      <div class="flex flex-col md:flex-row relative mt-12 md:mt-0 gap-6 md:gap-0">
        <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute -top-16 sm:-top-20 md:-top-24 translate-x-1/2 -right-[0%] w-[120px] sm:w-[150px] md:w-[180px] lg:w-[190px] 2xl:w-[200px] h-auto hidden md:block" />
        <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-4 sm:top-5 md:top-6 translate-x-1/2 -right-[10%] w-[120px] sm:w-[150px] md:w-[180px] lg:w-[190px] 2xl:w-[200px] h-auto hidden md:block" />
        <div class="flow-item-width relative aspect-[350/230] hidden md:block">
          <div class="w-[120px] sm:w-[140px] md:w-[160px] lg:w-[180px] 2xl:w-[200px] aspect-square bg-secondary absolute top-0 left-0"></div>
          <img src="<?php echo esc_url($flow_item_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute w-[150px] sm:w-[170px] md:w-[200px] lg:w-[225px] 2xl:w-[250px] h-auto object-cover bottom-0 left-[20px] sm:left-[24px] md:left-[26px] lg:left-[28px] 2xl:left-[30px]" />
          <div class="w-[8px] sm:w-[9px] md:w-[10px] aspect-square rounded-full bg-primary absolute -right-[1px] top-[40px] sm:top-[48px] md:top-[52px] lg:top-[55px] 2xl:top-[57px] translate-x-1/2"></div>
          <div class="w-[2px] h-[40px] sm:h-[48px] md:h-[52px] lg:h-[55px] 2xl:h-[57px] bg-primary absolute -right-[2px] top-0"></div>
          <div class="w-[8px] sm:w-[9px] md:w-[10px] aspect-square rounded-full bg-primary absolute -right-[1px] bottom-[40px] sm:bottom-[48px] md:bottom-[52px] lg:bottom-[55px] 2xl:bottom-[57px] translate-x-1/2"></div>
          <div class="w-[2px] h-[40px] sm:h-[48px] md:h-[52px] lg:h-[55px] 2xl:h-[57px] bg-primary absolute -right-[2px] bottom-0"></div>
          <h1 class="text-secondary text-[42px] sm:text-[48px] md:text-[52px] lg:text-[56px] 2xl:text-[60px] leading-[1] absolute bottom-16 sm:bottom-20 md:bottom-22 lg:bottom-23 2xl:bottom-24 right-0 translate-x-1/2 font-bold">03</h1>
        </div>
        <div class="h-full md:pl-[40px] lg:pl-[54px] 2xl:pl-[68px]">
          <div class="flex items-start gap-4 mb-4 md:hidden">
            <span class="text-secondary text-[40px] sm:text-[48px] font-bold leading-none flex-shrink-0">03</span>
            <div class="flex flex-col gap-2">
              <img src="<?php echo esc_url($flow_item_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[220px] sm:w-[140px] h-auto object-cover rounded-md" />
            </div>
          </div>
          <p class="text-primary text-[18px] sm:text-[20px] md:text-[22px] lg:text-[23px] 2xl:text-[24px] -tracking-[0.12em] mt-0 md:mt-16 lg:mt-20 2xl:mt-22 font-bold">
            お打合せ
          </p>
          <p class="text-primary text-[15px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] opacity-70 mt-3 md:mt-4 -tracking-[0.06em] leading-relaxed font-regular">
            詳細と仕上材を打合せで決定後、正式なお⾒積りを提出します。
          </p>
        </div>
      </div>
      <div class="flex flex-col md:flex-row mt-12 md:mt-0 gap-6 md:gap-0">
        <div class="flow-item-width hidden md:block"></div>
        <div class="px-4 sm:px-6 md:px-[40px] lg:px-[54px] 2xl:px-[68px] pt-8 sm:pt-10 md:pt-12 lg:pt-14 2xl:pt-15 pb-[30px] sm:pb-[36px] md:pb-[42px] lg:pb-[46px] 2xl:pb-[50px] relative aspect-[420/300] sm:aspect-[420/320] md:aspect-[420/340] w-full md:w-[360px] lg:w-[380px] 2xl:w-105 border-t-[2px] border-b-[2px] md:border-l-0 md:border-r-0 border-primary hidden md:block">
          <div class="w-[120px] sm:w-[140px] md:w-[160px] lg:w-[180px] 2xl:w-[200px] aspect-square bg-secondary absolute top-8 sm:top-10 md:top-12 lg:top-14 2xl:top-15 left-4 sm:left-6 md:left-[40px] lg:left-[54px] 2xl:left-[68px]"></div>
          <img src="<?php echo esc_url($flow_item_4); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[150px] sm:w-[170px] md:w-[200px] lg:w-[225px] 2xl:w-[250px] relative h-auto object-cover top-[20px] sm:top-[24px] md:top-[26px] lg:top-[28px] 2xl:top-[30px] left-[20px] sm:left-[24px] md:left-[26px] lg:left-[28px] 2xl:left-[30px]" />
          <div class="w-[8px] sm:w-[9px] md:w-[10px] aspect-square rounded-full bg-primary absolute right-[1px] top-[60px] sm:top-[70px] md:top-[76px] lg:top-[82px] 2xl:top-[90px] translate-x-1/2"></div>
          <div class="w-[2px] h-[60px] sm:h-[70px] md:h-[76px] lg:h-[82px] 2xl:h-[90px] bg-primary absolute right-0 top-0"></div>
          <div class="w-[8px] sm:w-[9px] md:w-[10px] aspect-square rounded-full bg-primary absolute right-[1px] bottom-[80px] sm:bottom-[95px] md:bottom-[100px] lg:bottom-[110px] 2xl:bottom-[120px] translate-x-1/2"></div>
          <div class="w-[2px] h-[80px] sm:h-[95px] md:h-[100px] lg:h-[110px] 2xl:h-[120px] bg-primary absolute right-0 bottom-0"></div>
          <h1 class="text-secondary text-[42px] sm:text-[48px] md:text-[52px] lg:text-[56px] 2xl:text-[60px] leading-[1] absolute bottom-32 sm:bottom-36 md:bottom-37 lg:bottom-38 2xl:bottom-39 right-0 translate-x-0 md:translate-x-1/2 font-bold">04</h1>
        </div>
        <div class="h-full md:pl-[40px] lg:pl-[54px] 2xl:pl-[68px] w-auto min-w-0 flex-1 mt-0 md:mt-0">
          <div class="flex items-start gap-4 mb-4 md:hidden">
            <span class="text-secondary text-[40px] sm:text-[48px] font-bold leading-none flex-shrink-0">04</span>
            <div class="flex flex-col gap-2">
              <img src="<?php echo esc_url($flow_item_4); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[220px] sm:w-[140px] h-auto object-cover rounded-md" />
            </div>
          </div>
          <p class="text-primary text-[18px] sm:text-[20px] md:text-[22px] lg:text-[23px] 2xl:text-[24px] -tracking-[0.12em] mt-0 md:mt-28 lg:mt-32 2xl:mt-34 font-bold">
            最終確認・発注
          </p>
          <p class="text-primary text-[15px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] opacity-70 mt-3 md:mt-4 -tracking-[0.06em] break-words leading-relaxed font-regular">
            最終確認として図⾯・⼨法・材料・⾊・形状・納期のご確認をしてもらい、注⽂書を作成して正式発注となります。
          </p>
        </div>
      </div>
      <div class="flex flex-col md:flex-row relative mt-12 md:mt-0 gap-6 md:gap-0">
        <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute -bottom-32 sm:-bottom-40 md:-bottom-48 translate-x-1/2 -left-[26%] w-[120px] sm:w-[150px] md:w-[180px] lg:w-[190px] 2xl:w-[200px] h-auto hidden md:block" />
        <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute -bottom-10 sm:-bottom-12 md:-bottom-14 translate-x-1/2 -left-[36%] w-[120px] sm:w-[150px] md:w-[180px] lg:w-[190px] 2xl:w-[200px] h-auto hidden md:block" />
        <div class="flow-item-width relative aspect-[350/230] hidden md:block">
          <div class="w-[120px] sm:w-[140px] md:w-[160px] lg:w-[180px] 2xl:w-[200px] aspect-square bg-secondary absolute top-0 left-0"></div>
          <img src="<?php echo esc_url($flow_item_5); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute w-[150px] sm:w-[170px] md:w-[200px] lg:w-[225px] 2xl:w-[250px] h-auto object-cover bottom-0 left-[20px] sm:left-[24px] md:left-[26px] lg:left-[28px] 2xl:left-[30px]" />
          <div class="w-[8px] sm:w-[9px] md:w-[10px] aspect-square rounded-full bg-primary absolute -right-[1px] top-[40px] sm:top-[48px] md:top-[52px] lg:top-[55px] 2xl:top-[57px] translate-x-1/2"></div>
          <div class="w-[2px] h-[40px] sm:h-[48px] md:h-[52px] lg:h-[55px] 2xl:h-[57px] bg-primary absolute -right-[2px] top-0"></div>
          <div class="w-[8px] sm:w-[9px] md:w-[10px] aspect-square rounded-full bg-primary absolute -right-[1px] bottom-[40px] sm:bottom-[48px] md:bottom-[52px] lg:bottom-[55px] 2xl:bottom-[57px] translate-x-1/2"></div>
          <div class="w-[2px] h-[40px] sm:h-[48px] md:h-[52px] lg:h-[55px] 2xl:h-[57px] bg-primary absolute -right-[2px] bottom-0"></div>
          <h1 class="text-secondary text-[42px] sm:text-[48px] md:text-[52px] lg:text-[56px] 2xl:text-[60px] leading-[1] absolute bottom-16 sm:bottom-20 md:bottom-22 lg:bottom-23 2xl:bottom-24 right-0 translate-x-1/2 font-bold">05</h1>
        </div>
        <div class="h-full md:pl-[40px] lg:pl-[54px] 2xl:pl-[68px]">
          <div class="flex items-start gap-4 mb-4 md:hidden">
            <span class="text-secondary text-[40px] sm:text-[48px] font-bold leading-none flex-shrink-0">05</span>
            <div class="flex flex-col gap-2">
              <img src="<?php echo esc_url($flow_item_5); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[220px] sm:w-[140px] h-auto object-cover rounded-md" />
            </div>
          </div>
          <p class="text-primary text-[18px] sm:text-[20px] md:text-[22px] lg:text-[23px] 2xl:text-[24px] -tracking-[0.12em] mt-0 md:mt-16 lg:mt-20 2xl:mt-22 font-bold">
            製作
          </p>
          <p class="text-primary text-[15px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] opacity-70 mt-3 md:mt-4 -tracking-[0.06em] leading-relaxed font-regular">
            製作に取りかかります。
          </p>
        </div>
      </div>
      <div class="flex flex-col md:flex-row mt-12 md:mt-0 gap-6 md:gap-0">
        <div class="flow-item-width hidden md:block"></div>
        <div class="px-4 sm:px-6 md:px-[40px] lg:px-[54px] 2xl:px-[68px] pt-8 sm:pt-10 md:pt-12 lg:pt-14 2xl:pt-15 pb-[30px] sm:pb-[36px] md:pb-[42px] lg:pb-[46px] 2xl:pb-[50px] relative aspect-[420/300] sm:aspect-[420/320] md:aspect-[420/340] w-full md:w-[360px] lg:w-[380px] 2xl:w-105 border-t-[2px] border-b-[2px] md:border-l-0 md:border-r-0 border-primary hidden md:block">
          <div class="w-[120px] sm:w-[140px] md:w-[160px] lg:w-[180px] 2xl:w-[200px] aspect-square bg-secondary absolute top-8 sm:top-10 md:top-12 lg:top-14 2xl:top-15 left-4 sm:left-6 md:left-[40px] lg:left-[54px] 2xl:left-[68px]"></div>
          <img src="<?php echo esc_url($flow_item_6); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[150px] sm:w-[170px] md:w-[200px] lg:w-[225px] 2xl:w-[250px] relative h-auto object-cover top-[20px] sm:top-[24px] md:top-[26px] lg:top-[28px] 2xl:top-[30px] left-[20px] sm:left-[24px] md:left-[26px] lg:left-[28px] 2xl:left-[30px]" />
          <div class="w-[8px] sm:w-[9px] md:w-[10px] aspect-square rounded-full bg-primary absolute right-[1px] top-[60px] sm:top-[70px] md:top-[76px] lg:top-[82px] 2xl:top-[90px] translate-x-1/2"></div>
          <div class="w-[2px] h-[60px] sm:h-[70px] md:h-[76px] lg:h-[82px] 2xl:h-[90px] bg-primary absolute right-0 top-0"></div>
          <div class="w-[8px] sm:w-[9px] md:w-[10px] aspect-square rounded-full bg-primary absolute right-[1px] bottom-[80px] sm:bottom-[95px] md:bottom-[100px] lg:bottom-[110px] 2xl:bottom-[120px] translate-x-1/2"></div>
          <div class="w-[2px] h-[80px] sm:h-[95px] md:h-[100px] lg:h-[110px] 2xl:h-[120px] bg-primary absolute right-0 bottom-0"></div>
          <h1 class="text-secondary text-[42px] sm:text-[48px] md:text-[52px] lg:text-[56px] 2xl:text-[60px] leading-[1] absolute bottom-32 sm:bottom-36 md:bottom-37 lg:bottom-38 2xl:bottom-39 right-0 translate-x-0 md:translate-x-1/2 font-bold">06</h1>
        </div>
        <div class="h-full md:pl-[40px] lg:pl-[54px] 2xl:pl-[68px] w-auto min-w-0 flex-1 mt-0 md:mt-0">
          <div class="flex items-start gap-4 mb-4 md:hidden">
            <span class="text-secondary text-[40px] sm:text-[48px] font-bold leading-none flex-shrink-0">06</span>
            <div class="flex flex-col gap-2">
              <img src="<?php echo esc_url($flow_item_6); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[220px] sm:w-[140px] h-auto object-cover rounded-md" />
            </div>
          </div>
          <p class="text-primary text-[18px] sm:text-[20px] md:text-[22px] lg:text-[23px] 2xl:text-[24px] -tracking-[0.12em] mt-0 md:mt-28 lg:mt-32 2xl:mt-34 font-bold">
            製品の発送・納品
          </p>
          <p class="text-primary text-[15px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] opacity-70 mt-3 md:mt-4 -tracking-[0.06em] break-words leading-relaxed font-regular">
            単品機械の場合、梱包して運送会社で送れる物は全国対応致します。<br />
            弊社規定の地域は直接納品致します。
          </p>
        </div>
      </div>
      <div class="flex flex-col md:flex-row relative mt-12 md:mt-0 gap-6 md:gap-0">
        <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-3 sm:top-3 md:top-4 translate-x-1/2 right-[2%] w-[120px] sm:w-[150px] md:w-[180px] lg:w-[190px] 2xl:w-[200px] h-auto hidden md:block" />
        <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute -bottom-20 sm:-bottom-24 md:-bottom-28 translate-x-1/2 -right-[10%] w-[120px] sm:w-[150px] md:w-[180px] lg:w-[190px] 2xl:w-[200px] h-auto hidden md:block" />
        <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute -bottom-40 sm:-bottom-50 md:-bottom-60 translate-x-1/2 right-[2%] w-[120px] sm:w-[150px] md:w-[180px] lg:w-[190px] 2xl:w-[200px] h-auto hidden md:block" />
        <div class="flow-item-width relative aspect-[350/230] hidden md:block">
          <div class="w-[120px] sm:w-[140px] md:w-[160px] lg:w-[180px] 2xl:w-[200px] aspect-square bg-secondary absolute top-0 left-0"></div>
          <img src="<?php echo esc_url($flow_item_7); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute w-[150px] sm:w-[170px] md:w-[200px] lg:w-[225px] 2xl:w-[250px] h-auto object-cover bottom-0 left-[20px] sm:left-[24px] md:left-[26px] lg:left-[28px] 2xl:left-[30px]" />
          <div class="w-[8px] sm:w-[9px] md:w-[10px] aspect-square rounded-full bg-primary absolute -right-[1px] top-[40px] sm:top-[48px] md:top-[52px] lg:top-[55px] 2xl:top-[57px] translate-x-1/2"></div>
          <div class="w-[2px] h-[40px] sm:h-[48px] md:h-[52px] lg:h-[55px] 2xl:h-[57px] bg-primary absolute -right-[2px] top-0"></div>
          <h1 class="text-secondary text-[42px] sm:text-[48px] md:text-[52px] lg:text-[56px] 2xl:text-[60px] leading-[1] absolute bottom-16 sm:bottom-20 md:bottom-22 lg:bottom-23 2xl:bottom-24 right-0 translate-x-1/2 font-bold">07</h1>
        </div>
        <div class="h-full md:pl-[40px] lg:pl-[54px] 2xl:pl-[68px]">
          <div class="flex items-start gap-4 mb-4 md:hidden">
            <span class="text-secondary text-[40px] sm:text-[48px] font-bold leading-none flex-shrink-0">07</span>
            <div class="flex flex-col gap-2">
              <img src="<?php echo esc_url($flow_item_7); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[220px] sm:w-[140px] h-auto object-cover rounded-md" />
            </div>
          </div>
          <p class="text-primary text-[18px] sm:text-[20px] md:text-[22px] lg:text-[23px] 2xl:text-[24px] -tracking-[0.12em] mt-0 md:mt-16 lg:mt-20 2xl:mt-22 font-bold">
            納品・アフターサービス
          </p>
          <p class="text-primary text-[15px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] opacity-70 mt-3 md:mt-4 -tracking-[0.06em] leading-relaxed font-regular">
            設置後、納品完了となります。<br />
            また、納品後のメンテナンスや修理もお受けしております。
          </p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- Flow Section end -->

<!-- Business section start -->
<?php
$decoration_icon = mytheme_img_asset('top/product-icon');

$business_item_1 = mytheme_img_asset('about/business-1');
$business_item_2 = mytheme_img_asset('about/business-2');
$business_item_3 = mytheme_img_asset('about/business-3');
?>
<section id="about-business" class="business-section px-4 sm:px-6 md:px-8 lg:px-0">
  <p class="text-[16px] sm:text-[17px] md:text-[18px] lg:text-[19px] 2xl:text-[20px] w-fit gap-[10px] sm:gap-[12px] md:gap-[14px] flex mx-auto text-secondary items-center font-bold">
    <img src="<?php echo esc_url($decoration_icon); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[24px] h-[24px] sm:w-[26px] sm:h-[26px] md:w-[28px] md:h-[28px] 2xl:w-[30px] 2xl:h-[30px] " />
    Business
  </p>
  <h1 class="mx-auto w-fit text-[28px] sm:text-[32px] md:text-[36px] lg:text-[40px] 2xl:text-[44px] text-primary text-center mt-4 sm:mt-4 md:mt-5 font-bold">
    事業内容
  </h1>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-16 sm:gap-10 md:gap-12 lg:gap-[60px] 2xl:gap-[75px] mt-[50px] sm:mt-[60px] md:mt-[70px] lg:mt-[80px] 2xl:mt-[90px] mx-auto max-w-[320px] sm:max-w-none w-full sm:w-fit">
    <div class="relative flex flex-col w-full sm:w-[280px] md:w-[240px] lg:w-[300px] 2xl:w-[340px]">
      <div class="w-10 sm:w-12 md:w-14 lg:w-15 aspect-square bg-secondary absolute -translate-x-1/2 top-0 -translate-y-1/2 -z-10"></div>
      <img src="<?php echo esc_url($business_item_1); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="h-auto w-full object-cover aspect-[340/238]" />
      <p class="text-[22px] sm:text-[24px] md:text-[25px] lg:text-[27px] 2xl:text-[28px] mt-[16px] sm:mt-[18px] md:mt-[20px] lg:mt-[22px] 2xl:mt-[23px] w-full text-center -tracking-[0.06em] font-bold">既製品販売</p>
      <p class="text-[13px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] opacity-70 mt-[14px] sm:mt-[16px] 2xl:mt-[18px] w-full text-left -tracking-[0.06em] leading-relaxed font-regular">⼩⼝から⼤⼝まで、スペースを考慮した様々な製品を取り揃え、全国の⼯場で幅広くご愛⽤頂いております。</p>
    </div>
    <div class="relative flex flex-col w-full sm:w-[280px] md:w-[240px] lg:w-[300px] 2xl:w-[340px]">
      <div class="w-10 sm:w-12 md:w-14 lg:w-15 aspect-square bg-secondary absolute -translate-x-1/2 top-0 -translate-y-1/2 -z-10"></div>
      <img src="<?php echo esc_url($business_item_2); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="h-auto w-full object-cover aspect-[340/238]" />
      <p class="text-[22px] sm:text-[24px] md:text-[25px] lg:text-[27px] 2xl:text-[28px] mt-[16px] sm:mt-[18px] md:mt-[20px] lg:mt-[22px] 2xl:mt-[23px] w-full text-center -tracking-[0.06em] font-bold">オリジナルオーダー</p>
      <p class="text-[13px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] opacity-70 mt-[14px] sm:mt-[16px] 2xl:mt-[18px] w-full text-left -tracking-[0.06em] leading-relaxed font-regular">ダンボールパレットプレス機、ダンボールフスマ断裁機、トムソンカス取り機等、必要な⽤途に応じて製作させていただきます。</p>
    </div>
    <div class="relative flex flex-col w-full sm:w-[280px] md:w-[240px] lg:w-[300px] 2xl:w-[340px] sm:col-span-2 sm:mx-auto md:col-span-1">
      <div class="w-10 sm:w-12 md:w-14 lg:w-15 aspect-square bg-secondary absolute -translate-x-1/2 top-0 -translate-y-1/2 -z-10"></div>
      <img src="<?php echo esc_url($business_item_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="h-auto w-full object-cover aspect-[340/238]" />
      <p class="text-[22px] sm:text-[24px] md:text-[25px] lg:text-[27px] 2xl:text-[28px] mt-[16px] sm:mt-[18px] md:mt-[20px] lg:mt-[22px] 2xl:mt-[23px] w-full text-center -tracking-[0.06em] font-bold">中古品販売</p>
      <p class="text-[13px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] opacity-70 mt-[14px] sm:mt-[16px] 2xl:mt-[18px] w-full text-left -tracking-[0.06em] leading-relaxed font-regular">⾮常に良質な中古機器をご提供することにより、ランニングコストやメンテナンス等、コスト対策に貢献致します。</p>
    </div>
  </div>

</section>
<!-- Business section end -->

<!-- Company section start -->
<?php
$company_bg = mytheme_img_asset('about/company-bg');
$company = mytheme_img_asset('about/company');
?>
<section id="about-company" class="company-section mt-[60px] sm:mt-[70px] md:mt-[85px] lg:mt-[95px] 2xl:mt-[105px] px-4 sm:px-6 md:px-8 lg:px-0">
  <div class="relative pt-20 sm:pt-24 md:pt-26 lg:pt-28 2xl:pt-30 pb-[60px] sm:pb-[75px] md:pb-[90px] lg:pb-[100px] 2xl:pb-[110px] w-full h-[200px] sm:h-[240px] md:h-[280px] lg:h-[310px] 2xl:h-[338px]">
    <img src="<?php echo esc_url($company_bg); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="-z-10 absolute top-0 left-0 w-full h-full object-cover" />
    <p class="text-[16px] sm:text-[17px] md:text-[18px] lg:text-[19px] 2xl:text-[20px] w-fit gap-[10px] sm:gap-[12px] md:gap-[14px] flex mx-auto text-secondary items-center font-bold">
      <img src="<?php echo esc_url($decoration_icon); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[24px] h-[24px] sm:w-[26px] sm:h-[26px] md:w-[28px] md:h-[28px] 2xl:w-[30px] 2xl:h-[30px]" />
      Company
    </p>
    <h1 class="mx-auto w-fit text-[28px] sm:text-[32px] md:text-[36px] lg:text-[40px] 2xl:text-[44px] text-white text-center mt-4 sm:mt-4 md:mt-5 font-bold">
      会社案内
    </h1>
  </div>
  <div class="w-full sm:w-[90%] md:w-[85%] lg:w-[80%] 2xl:w-[75%] mx-auto">
    <h2 class="text-primary text-[22px] sm:text-[24px] md:text-[26px] 2xl:text-[28px] relative mt-[50px] sm:mt-[60px] md:mt-[70px] lg:mt-[80px] 2xl:mt-[87px]  pl-5 sm:pl-0 font-bold">
      <div class="bg-secondary w-4 sm:w-4 md:w-5 aspect-square absolute -translate-x-5 sm:-translate-x-5 md:-translate-x-6 top-0 -translate-y-1/2 -z-10 font-bold"></div>
      ご挨拶
    </h2>
    <p class="text-primary text-[14px] sm:text-[15px] md:text-[16px] lg:text-[17px] 2xl:text-[18px] mt-[24px] sm:mt-[28px] md:mt-[34px] 2xl:mt-[40px] -tracking-[0.06em] leading-relaxed font-regular">
      弊社は創業以来ダンボール機械の製造、販売、設計を⼿掛けてまいりました。<br />
      今現在、⼿掛けている機械はもちろんのこと、お客差のご要望に応じた製品や、これから必要であろう新しい製品の設計製作をすることを⽇頃から考え取り組んだ製品作りを⾏っています。<br />
      また、⾃社、他社製品、⼟、⽇、祭⽇問わずアフターサービスにも努めております。<br />
    </p>
    <h2 class="text-primary text-[22px] sm:text-[24px] md:text-[26px] 2xl:text-[28px] relative mt-[55px] sm:mt-[65px] md:mt-[76px] lg:mt-[86px] 2xl:mt-[96px] pl-5 sm:pl-0 font-bold">
      <div class="bg-secondary w-4 sm:w-4 md:w-5 aspect-square absolute -translate-x-5 sm:-translate-x-5 md:-translate-x-6 top-0 -translate-y-1/2 -z-10 font-bold"></div>
      会社概要
    </h2>
    <?php
    $company_table = array(
      array(
        'label' => '会社名',
        'value' => '株式会社高橋製作所',
      ),
      array(
        'label' => '代表者',
        'value' => '代表取締役社長　高橋 宏',
      ),
      array(
        'label' => '資本金',
        'value' => '1,500万円',
      ),
      array(
        'label' => '設立',
        'value' => '昭和44年10月1日',
      ),
      array(
        'label' => '社員数',
        'value' => '7名',
      ),
      array(
        'label' => '事業内容',
        'value' => array(
          'ダンボール製造機械',
          '・製作販売',
          '・中古機械整備販売',
          '・メンテナンス',
        ),
      ),
      array(
        'label' => '所在地',
        'value' => '〒578-0983　大阪府東大阪市吉田下島14番25号',
      ),
      array(
        'label' => 'TEL',
        'value' => '072-961-9975',
      ),
      array(
        'label' => 'FAX',
        'value' => '072-963-7568',
      ),
      array(
        'label' => '取引金融機関',
        'value' => array(
          '三菱東京UFJ銀行　今里支店',
          '永和信用金庫　花園支店',
        ),
      ),
      array(
        'label' => '中古機器について',
        'value' => array(
          '当社では、非常に良質な中古機器の販売をしております。',
          '全て弊社でメンテ、リメイクを行った自社製品になります。',
        ),
      ),
    );
    ?>
    <div class="mt-[30px] sm:mt-[35px] md:mt-[40px] 2xl:mt-[45px] grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-10 lg:gap-12 2xl:gap-15">
      <div class="md:col-span-12 lg:col-span-7">
        <div class="overflow-x-auto">
          <table class="w-full border-collapse text-[13px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] text-primary">
            <?php foreach ($company_table as $row) : ?>
              <tr class="border-b-[2px] border-[#8F8D8C]">
                <td class="w-[100px] sm:w-[120px] md:w-[140px] lg:w-[150px] 2xl:w-[170px] whitespace-nowrap pt-2 pb-3 sm:pb-4 align-top font-medium">
                  <?php echo esc_html($row['label']); ?>
                </td>
                <td class="pt-2 pb-3 sm:pb-4 align-top leading-[1.7] sm:leading-[1.8] font-regular">
                  <?php if (is_array($row['value'])) : ?>
                    <?php foreach ($row['value'] as $line_index => $line) : ?>
                      <?php if ($line_index > 0) : ?><br><?php endif; ?>
                      <?php echo esc_html($line); ?>
                    <?php endforeach; ?>
                  <?php else : ?>
                    <?php echo esc_html($row['value']); ?>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
      <div class="md:col-span-12 lg:col-span-5 pt-0 md:pt-4 lg:pt-6 relative">
        <img src="<?php echo esc_url($company); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-auto object-cover" />
        <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-40 sm:top-48 md:top-50 lg:top-53 translate-x-1/2 -right-[26%] w-[120px] sm:w-[150px] md:w-[180px] lg:w-[190px] 2xl:w-[200px] h-auto hidden md:block" />
        <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-64 sm:top-72 md:top-80 lg:top-84 translate-x-1/2 -right-[0%] w-[120px] sm:w-[150px] md:w-[180px] lg:w-[190px] 2xl:w-[200px] h-auto hidden md:block" />
      </div>
    </div>
    <h2 class="text-primary text-[22px] sm:text-[24px] md:text-[26px] 2xl:text-[28px] relative mt-[55px] sm:mt-[65px] md:mt-[76px] lg:mt-[86px] 2xl:mt-[96px]  pl-5 sm:pl-0 font-bold">
      <div class="bg-secondary w-4 sm:w-4 md:w-5 aspect-square absolute -translate-x-5 sm:-translate-x-5 md:-translate-x-6 top-0 -translate-y-1/2 -z-10 font-bold"></div>
      アクセス
    </h2>
    <div class="w-full aspect-[375/250] sm:aspect-[768/300] md:aspect-[1024/320] lg:aspect-[115/30] mt-[30px] sm:mt-[35px] md:mt-[40px] 2xl:mt-[45px] relative">
      <iframe
        class="w-full h-full border border-[#60605B40] rounded-md"
        src="https://www.google.com/maps?q=%E3%80%92578-0983+%E5%A4%A7%E9%98%AA%E5%BA%9C%E6%9D%B1%E5%A4%A7%E9%98%AA%E5%B8%82%E5%90%89%E7%94%B0%E4%B8%8B%E5%B3%B614-25&output=embed&hl=ja&region=JP"
        title="株式会社高橋製作所 地図"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        allowfullscreen>
      </iframe>
      <a
        class="absolute right-0 sm:right-2 md:right-0 -bottom-16 sm:-bottom-18 md:-bottom-20 2xl:-bottom-22 inline-flex items-center justify-center bg-secondary !text-white text-[12px] sm:text-[13px] md:text-[14px] px-6 sm:px-7 md:px-8 2xl:px-9 py-[8px] sm:py-[9px] md:py-[10px] rounded-[20px] leading-[1.2] z-10 hover:bg-opacity-90 transition-all font-medium"
        href="https://www.google.com/maps?q=%E3%80%92578-0983+%E5%A4%A7%E9%98%AA%E5%BA%9C%E6%9D%B1%E5%A4%A7%E9%98%AA%E5%B8%82%E5%90%89%E7%94%B0%E4%B8%8B%E5%B3%B614-25"
        target="_blank"
        rel="noopener noreferrer">
        Google Map で見る
      </a>
    </div>
    <div class="relative pb-[80px] sm:pb-[100px] md:pb-[120px] lg:pb-[140px] 2xl:pb-[155px]">
      <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-[120px] sm:top-[140px] md:top-[160px] lg:top-[175px] 2xl:top-[185px] translate-x-1/2 -right-[0%] w-[120px] sm:w-[150px] md:w-[180px] lg:w-[190px] 2xl:w-[200px] h-auto hidden md:block" />
      <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-[300px] sm:top-[350px] md:top-[390px] lg:top-[420px] 2xl:top-[445px] translate-x-1/2 -right-[0%] w-[120px] sm:w-[150px] md:w-[180px] lg:w-[190px] 2xl:w-[200px] h-auto -z-10 hidden md:block" />
      <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-[210px] sm:top-[245px] md:top-[275px] lg:top-[295px] 2xl:top-[315px] translate-x-1/2 -right-[10%] w-[120px] sm:w-[150px] md:w-[180px] lg:w-[190px] 2xl:w-[200px] h-auto hidden md:block" />
      <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-[210px] sm:top-[245px] md:top-[275px] lg:top-[295px] 2xl:top-[315px] translate-x-1/2 right-[10%] w-[120px] sm:w-[150px] md:w-[180px] lg:w-[190px] 2xl:w-[200px] h-auto hidden md:block" />
      <h2 class="text-secondary text-[16px] sm:text-[17px] md:text-[18px] lg:text-[19px] 2xl:text-[20px] pl-[0px] sm:pl-[40px] md:pl-[48px] 2xl:pl-[55px] mt-[40px] sm:mt-[48px] md:mt-[54px] 2xl:mt-[60px] font-bold">所在地</h2>
      <p class="text-primary text-[13px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] mt-3 md:mt-4 -tracking-[0.06em] leading-relaxed font-regular">
        〒578-0983　大阪府東大阪市吉田下島14番25号<br>
        TEL：072-961-9975<br>
      </p>
      <h2 class="text-secondary text-[16px] sm:text-[17px] md:text-[18px] lg:text-[19px] 2xl:text-[20px] pl-0 sm:pl-[40px] md:pl-[48px] 2xl:pl-[55px] mt-[34px] sm:mt-[38px] md:mt-[42px] 2xl:mt-[44px] font-bold">電⾞でお越しの場合</h2>
      <p class="text-primary text-[13px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] mt-3 md:mt-4 -tracking-[0.06em] leading-relaxed font-regular">
        新⼤阪駅・⼤阪駅から<br>
        地下鉄御堂筋線、中百⾆⿃⽅⾯⾏きに乗り「本町駅」下⾞<br>
        地下鉄中央線、⽣駒⽅⾯に乗り換え「吉⽥駅」で下⾞
      </p>
      <h2 class="text-secondary text-[16px] sm:text-[17px] md:text-[18px] lg:text-[19px] 2xl:text-[20px] pl-0 sm:pl-[40px] md:pl-[48px] 2xl:pl-[55px] mt-[34px] sm:mt-[38px] md:mt-[42px] 2xl:mt-[44px] font-bold">⾞でお越しの場合</h2>
      <p class="text-primary text-[13px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] mt-3 md:mt-4 -tracking-[0.06em] leading-relaxed font-regular">
        阪神⾼速 東⼤阪線 中野I.Cより5分
      </p>
    </div>
  </div>
</section>
<!-- Company section end -->

<!-- Enquiry section start -->
<?php get_template_part('template-parts/section-enquiry'); ?>
<!-- Enquiry section end -->

<!-- Footer section start -->
<?php get_template_part('template-parts/section-foot-cards'); ?>
<!-- Footer section end -->

<?php
get_footer();
