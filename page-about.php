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
      <div class="bg-secondary active:bg-primary text-white w-80 aspect-[320/120] relative rounded-[12px] flex flex-col justify-center items-center gap-2">
        <p class="text-[16px] opacity-50">Strength</p>
        <p class="text-[24px]">髙橋の強み</p>
        <svg class="absolute top-1/2 -translate-y-1/2 right-5" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
          <path id="Color_Overlay" data-name="Color Overlay" d="M575,812a15,15,0,1,1-15,15A15,15,0,0,1,575,812Z" transform="translate(-560 -812)" fill="#f6f6f6" opacity="0.3" />
          <path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M579.539,825.265l-4.406,4.406-4.406-4.406" transform="translate(-560 -812)" fill="none" stroke="#fff" stroke-width="2" />
        </svg>
      </div>
      <div class="bg-secondary active:bg-primary text-white w-80 aspect-[320/120] relative rounded-[12px] flex flex-col justify-center items-center gap-2">
        <p class="text-[16px] opacity-50">Business</p>
        <p class="text-[24px]">事業について</p>
        <svg class="absolute top-1/2 -translate-y-1/2 right-5" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
          <path id="Color_Overlay" data-name="Color Overlay" d="M575,812a15,15,0,1,1-15,15A15,15,0,0,1,575,812Z" transform="translate(-560 -812)" fill="#f6f6f6" opacity="0.3" />
          <path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M579.539,825.265l-4.406,4.406-4.406-4.406" transform="translate(-560 -812)" fill="none" stroke="#fff" stroke-width="2" />
        </svg>
      </div>
      <div class="bg-secondary active:bg-primary text-white w-80 aspect-[320/120] relative rounded-[12px] flex flex-col justify-center items-center gap-2">
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

  <div class="w-[75%] mt-[120px] mx-auto flex flex-col gap-[130px]">
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
          <p class="text-primary text-[18px] opacity-70 mt-[64px] -tracking-[0.06em]"><?php echo esc_html($item['body']); ?></p>
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
<div class="w-full h-[257px] mt-[175px] relative">
  <img src="<?php echo esc_url($service_decoration); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute -top-[400px] -left-[130px] w-[592px] h-full object-cover" />
  <img src="<?php echo esc_url($service_mesh); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="h-full mx-auto object-cover" />
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
<section class="flow-section mt-[200px] relative pb-59 ">
  <div class="overflow-hidden w-full h-[500px] absolute -top-38">
    <img src="<?php echo esc_url($flow_decoration_1); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-48 translate-x-1/2 right-[33%] w-[296px] h-auto " />
    <img src="<?php echo esc_url($flow_decoration_2); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute translate-x-1/2 right-[10%] w-[424px] h-auto " />
  </div>
  <div class="w-[75%] mx-auto relative">
    <p class="text-[20px] w-fit gap-[14px] flex text-secondary">
      <img src="<?php echo esc_url($decoration_icon); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[30px] h-[30px]" />
      Flow
    </p>
    <h1 class="mt-6 text-primary text-[44px]">
      製作の流れ
    </h1>
    <p class="text-[16px] mt-9">
      「こうしたい」というイメージから、<br />
      お客様の現場やご要望に合わせた機械づくりを行います。<br />
      ゼロから製作することも可能ですし、既製品をセミオーダーで<br />
      カスタマイズすることも可能です。まずは一度ご相談くださいませ。<br />
    </p>
    <div class="flex flex-col mt-[51px]">
      <div class="flex">
        <div class="w-[350px] relative aspect-[350/230]">
          <div class="w-[200px] aspect-square bg-secondary absolute top-0 left-0"></div>
          <img src="<?php echo esc_url($flow_item_1); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute w-[250px] h-auto object-cover  bottom-0 left-[30px]" />
          <div class="w-[10px] aspect-square rounded-full bg-primary absolute -right-[1px] bottom-[57px] translate-x-1/2"></div>
          <div class="w-[2px] h-[57px] bg-primary absolute -right-[2px] bottom-0"></div>
          <h1 class="text-secondary text-[60px] leading-[1] absolute bottom-24 right-0 translate-x-1/2">01</h1>
        </div>
        <div class="h-full pl-[68px]">
          <p class="text-primary text-[24px] -tracking-[0.12em] mt-22">
            お問い合わせ・お聞き取り
          </p>
          <p class="text-primary text-[16px] opacity-70 mt-4 -tracking-[0.06em]">
            メール・FAX・電話でお問い合せください。<br />
            ご希望の機械概要（⼨法・形状・材料など）やイメージ画像などがあればお⾒せください。
          </p>
        </div>
      </div>
      <div class="flex">
        <div class="w-[350px]">
        </div>
        <div class="px-[68px] pt-15 pb-[50px] relative aspect-[420/340] w-105 border-[2px] border-l-0 border-r-0 border-primary">
          <div class="w-[200px] aspect-square bg-secondary absolute top-15 left-[68px]"></div>
          <img src="<?php echo esc_url($flow_item_2); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[250px] relative h-auto object-cover  top-[30px] left-[30px] " />
          <div class="w-[10px] aspect-square rounded-full bg-primary absolute right-[1px] top-[90px] translate-x-1/2"></div>
          <div class="w-[2px] h-[90px] bg-primary absolute right-0 top-0"></div>
          <div class="w-[10px] aspect-square rounded-full bg-primary absolute right-[1px] bottom-[120px] translate-x-1/2"></div>
          <div class="w-[2px] h-[120px] bg-primary absolute right-0 bottom-0"></div>
          <h1 class="text-secondary text-[60px] leading-[1] absolute bottom-39 right-0 translate-x-1/2">02</h1>
        </div>
        <div class="h-full pl-[68px]">
          <p class="text-primary text-[24px] -tracking-[0.12em] mt-34">
            概算・お⾒積もりの提出
          </p>
          <p class="text-primary text-[16px] opacity-70 mt-4 -tracking-[0.08em]">
            ラフスケッチと概算⾒積をお伝えします。
          </p>
        </div>
      </div>
      <div class="flex relative">
        <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute -top-24 translate-x-1/2 -right-[0%] w-[200px] h-auto " />
        <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-6 translate-x-1/2 -right-[10%] w-[200px] h-auto " />
        <div class="w-[350px] relative aspect-[350/230]">
          <div class="w-[200px] aspect-square bg-secondary absolute top-0 left-0"></div>
          <img src="<?php echo esc_url($flow_item_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute w-[250px] h-auto object-cover  bottom-0 left-[30px]" />
          <div class="w-[10px] aspect-square rounded-full bg-primary absolute -right-[1px] top-[57px] translate-x-1/2"></div>
          <div class="w-[2px] h-[57px] bg-primary absolute -right-[2px] top-0"></div>
          <div class="w-[10px] aspect-square rounded-full bg-primary absolute -right-[1px] bottom-[57px] translate-x-1/2"></div>
          <div class="w-[2px] h-[57px] bg-primary absolute -right-[2px] bottom-0"></div>
          <h1 class="text-secondary text-[60px] leading-[1] absolute bottom-24 right-0 translate-x-1/2">03</h1>
        </div>
        <div class="h-full pl-[68px]">
          <p class="text-primary text-[24px] -tracking-[0.12em] mt-22">
            お打合せ
          </p>
          <p class="text-primary text-[16px] opacity-70 mt-4 -tracking-[0.06em]">
            詳細と仕上材を打合せで決定後、正式なお⾒積りを提出します。
          </p>
        </div>
      </div>
      <div class="flex">
        <div class="w-[350px]">
        </div>
        <div class="px-[68px] pt-15 pb-[50px] relative aspect-[420/340] w-105 border-[2px] border-l-0 border-r-0 border-primary">
          <div class="w-[200px] aspect-square bg-secondary absolute top-15 left-[68px]"></div>
          <img src="<?php echo esc_url($flow_item_4); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[250px] relative h-auto object-cover  top-[30px] left-[30px] " />
          <div class="w-[10px] aspect-square rounded-full bg-primary absolute right-[1px] top-[90px] translate-x-1/2"></div>
          <div class="w-[2px] h-[90px] bg-primary absolute right-0 top-0"></div>
          <div class="w-[10px] aspect-square rounded-full bg-primary absolute right-[1px] bottom-[120px] translate-x-1/2"></div>
          <div class="w-[2px] h-[120px] bg-primary absolute right-0 bottom-0"></div>
          <h1 class="text-secondary text-[60px] leading-[1] absolute bottom-39 right-0 translate-x-1/2">04</h1>
        </div>
        <div class="h-full pl-[68px] w-auto min-w-0 flex-1">
          <p class="text-primary text-[24px] -tracking-[0.12em] mt-34">
            最終確認・発注
          </p>
          <p class="text-primary text-[16px] opacity-70 mt-4 -tracking-[0.06em] break-words">
            最終確認として図⾯・⼨法・材料・⾊・形状・納期のご確認をしてもらい、注⽂書を作成して正式発注となります。
          </p>
        </div>
      </div>
      <div class="flex relative">
        <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute -bottom-48 translate-x-1/2 -left-[26%] w-[200px] h-auto " />
        <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute -bottom-14 translate-x-1/2 -left-[36%] w-[200px] h-auto " />
        <div class="w-[350px] relative aspect-[350/230]">
          <div class="w-[200px] aspect-square bg-secondary absolute top-0 left-0"></div>
          <img src="<?php echo esc_url($flow_item_5); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute w-[250px] h-auto object-cover  bottom-0 left-[30px]" />
          <div class="w-[10px] aspect-square rounded-full bg-primary absolute -right-[1px] top-[57px] translate-x-1/2"></div>
          <div class="w-[2px] h-[57px] bg-primary absolute -right-[2px] top-0"></div>
          <div class="w-[10px] aspect-square rounded-full bg-primary absolute -right-[1px] bottom-[57px] translate-x-1/2"></div>
          <div class="w-[2px] h-[57px] bg-primary absolute -right-[2px] bottom-0"></div>
          <h1 class="text-secondary text-[60px] leading-[1] absolute bottom-24 right-0 translate-x-1/2">05</h1>
        </div>
        <div class="h-full pl-[68px]">
          <p class="text-primary text-[24px] -tracking-[0.12em] mt-22">
            製作
          </p>
          <p class="text-primary text-[16px] opacity-70 mt-4 -tracking-[0.06em]">
            製作に取りかかります。
          </p>
        </div>
      </div>
      <div class="flex">
        <div class="w-[350px]">
        </div>
        <div class="px-[68px] pt-15 pb-[50px] relative aspect-[420/340] w-105 border-[2px] border-l-0 border-r-0 border-primary">
          <div class="w-[200px] aspect-square bg-secondary absolute top-15 left-[68px]"></div>
          <img src="<?php echo esc_url($flow_item_6); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[250px] relative h-auto object-cover  top-[30px] left-[30px] " />
          <div class="w-[10px] aspect-square rounded-full bg-primary absolute right-[1px] top-[90px] translate-x-1/2"></div>
          <div class="w-[2px] h-[90px] bg-primary absolute right-0 top-0"></div>
          <div class="w-[10px] aspect-square rounded-full bg-primary absolute right-[1px] bottom-[120px] translate-x-1/2"></div>
          <div class="w-[2px] h-[120px] bg-primary absolute right-0 bottom-0"></div>
          <h1 class="text-secondary text-[60px] leading-[1] absolute bottom-39 right-0 translate-x-1/2">06</h1>
        </div>
        <div class="h-full pl-[68px] w-auto min-w-0 flex-1">
          <p class="text-primary text-[24px] -tracking-[0.12em] mt-34">
            製品の発送・納品
          </p>
          <p class="text-primary text-[16px] opacity-70 mt-4 -tracking-[0.06em] break-words">
            単品機械の場合、梱包して運送会社で送れる物は全国対応致します。<br />
            弊社規定の地域は直接納品致します。
          </p>
        </div>
      </div>
      <div class="flex relative">
        <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-4 translate-x-1/2 right-[2%] w-[200px] h-auto " />
        <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute -bottom-28 translate-x-1/2 -right-[10%] w-[200px] h-auto " />
        <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute -bottom-60 translate-x-1/2 right-[2%] w-[200px] h-auto " />
        <div class="w-[350px] relative aspect-[350/230]">
          <div class="w-[200px] aspect-square bg-secondary absolute top-0 left-0"></div>
          <img src="<?php echo esc_url($flow_item_7); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute w-[250px] h-auto object-cover  bottom-0 left-[30px]" />
          <div class="w-[10px] aspect-square rounded-full bg-primary absolute -right-[1px] top-[57px] translate-x-1/2"></div>
          <div class="w-[2px] h-[57px] bg-primary absolute -right-[2px] top-0"></div>
          <h1 class="text-secondary text-[60px] leading-[1] absolute bottom-24 right-0 translate-x-1/2">07</h1>
        </div>
        <div class="h-full pl-[68px]">
          <p class="text-primary text-[24px] -tracking-[0.12em] mt-22">
            納品・アフターサービス
          </p>
          <p class="text-primary text-[16px] opacity-70 mt-4 -tracking-[0.06em]">
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

<!-- Business section start -->\
<?php
$decoration_icon = mytheme_img_asset('top/product-icon');

$business_item_1 = mytheme_img_asset('about/business-1');
$business_item_2 = mytheme_img_asset('about/business-2');
$business_item_3 = mytheme_img_asset('about/business-3');
?>
<section class="business-section">
  <p class="text-[20px] w-fit gap-[14px] flex mx-auto text-secondary">
    <img src="<?php echo esc_url($decoration_icon); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[30px] h-[30px]" />
    Business
  </p>
  <h1 class="mx-auto w-fit text-[44px] text-primary text-center mt-5">
    事業内容
  </h1>
  <div class="grid grid-cols-3 gap-[75px] mt-[90px] mx-auto w-fit">
    <div class="relative flex flex-col w-[340px] grid-cols-1">
      <div class="w-15 aspect-square bg-secondary absolute -translate-x-1/2 top-0 -translate-y-1/2 -z-10"></div>
      <img src="<?php echo esc_url($business_item_1); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class=" h-auto w-full object-cover aspect-[340/238]" />
      <p class="text-[28px] mt-[23px] w-full text-center -tracking-[0.06em]">既製品販売</p>
      <p class="text-[16px] opacity-70 mt-[18px] w-full text-left -tracking-[0.06em]">⼩⼝から⼤⼝まで、スペースを考慮した様々な製品を取り揃え、全国の⼯場で幅広くご愛⽤頂いております。</p>
    </div>
    <div class="relative flex flex-col w-[340px] grid-cols-1">
      <div class="w-15 aspect-square bg-secondary absolute -translate-x-1/2 top-0 -translate-y-1/2 -z-10"></div>
      <img src="<?php echo esc_url($business_item_2); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class=" h-auto w-full object-cover aspect-[340/238]" />
      <p class="text-[28px] mt-[23px] w-full text-center -tracking-[0.06em]">オリジナルオーダー</p>
      <p class="text-[16px] opacity-70 mt-[18px] w-full text-left -tracking-[0.06em]">ダンボールパレットプレス機、ダンボールフスマ断裁機、トムソンカス取り機等、必要な⽤途に応じて製作させていただきます。</p>
    </div>
    <div class="relative flex flex-col w-[340px] grid-cols-1">
      <div class="w-15 aspect-square bg-secondary absolute -translate-x-1/2 top-0 -translate-y-1/2 -z-10"></div>
      <img src="<?php echo esc_url($business_item_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class=" h-auto w-full object-cover aspect-[340/238]" />
      <p class="text-[28px] mt-[23px] w-full text-center -tracking-[0.06em]">中古品販売</p>
      <p class="text-[16px] opacity-70 mt-[18px] w-full text-left -tracking-[0.06em]">⾮常に良質な中古機器をご提供することにより、ランニングコストやメンテナンス等、コスト対策に貢献致します。</p>
    </div>
  </div>

</section>
<!-- Business section end -->

<!-- Company section start -->
<?php
$company_bg = mytheme_img_asset('about/company-bg');
$company = mytheme_img_asset('about/company');
?>
<section class="company-section mt-[105px]">
  <div class="relative pt-30 pb-[110px] w-full h-[338px]">
    <img src="<?php echo esc_url($company_bg); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="-z-10 absolute top-0 left-0 w-full h-full object-cover" />
    <p class="text-[20px] w-fit gap-[14px] flex mx-auto text-secondary">
      <img src="<?php echo esc_url($decoration_icon); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[30px] h-[30px]" />
      Company
    </p>
    <h1 class="mx-auto w-fit text-[44px] text-white text-center mt-5">
      会社案内
    </h1>
  </div>
  <div class="w-[75%] mx-auto">
    <h2 class="text-primary text-[28px] relative mt-[87px]">
      <div class="bg-secondary w-5 aspect-square absolute -translate-x-6 top-0 -translate-y-1/2 -z-10"></div>
      ご挨拶
    </h2>
    <p class="text-primary text-[18px] mt-[40px] -tracking-[0.06em]">
      弊社は創業以来ダンボール機械の製造、販売、設計を⼿掛けてまいりました。<br />
      今現在、⼿掛けている機械はもちろんのこと、お客差のご要望に応じた製品や、これから必要であろう新しい製品の設計製作をすることを⽇頃から考え取り組んだ製品作りを⾏っています。<br />
      また、⾃社、他社製品、⼟、⽇、祭⽇問わずアフターサービスにも努めております。<br />
    </p>
    <h2 class="text-primary text-[28px] relative mt-[96px]">
      <div class="bg-secondary w-5 aspect-square absolute -translate-x-6 top-0 -translate-y-1/2 -z-10"></div>
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
    <div class="mt-[45px] grid grid-cols-12 gap-15">
      <div class="col-span-7">
        <table class="w-full border-collapse text-[16px] text-primary">
          <?php foreach ($company_table as $row) : ?>
            <tr class="border-b-[2px] border-[#8F8D8C]">
              <td class="w-[170px] whitespace-nowrap pt-2 pb-4 align-top">
                <?php echo esc_html($row['label']); ?>
              </td>
              <td class="pt-2 pb-4 align-top leading-[1.8]">
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
      <div class="col-span-5 pt-6 relative">
        <img src="<?php echo esc_url($company); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-auto object-cover" />
        <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-53 translate-x-1/2 -right-[26%] w-[200px] h-auto " />
        <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-84 translate-x-1/2 -right-[0%] w-[200px] h-auto " />
      </div>
    </div>
    <h2 class="text-primary text-[28px] relative mt-[96px]">
      <div class="bg-secondary w-5 aspect-square absolute -translate-x-6 top-0 -translate-y-1/2 -z-10"></div>
      アクセス
    </h2>
    <div class="w-full aspect-[115/30] mt-[45px] relative">
      <iframe
        class="w-full h-full border border-[#60605B40]"
        src="https://www.google.com/maps?q=%E3%80%92578-0983+%E5%A4%A7%E9%98%AA%E5%BA%9C%E6%9D%B1%E5%A4%A7%E9%98%AA%E5%B8%82%E5%90%89%E7%94%B0%E4%B8%8B%E5%B3%B614-25&output=embed&hl=ja&region=JP"
        title="株式会社高橋製作所 地図"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        allowfullscreen>
      </iframe>
      <a
        class="absolute right-0 -bottom-22 inline-flex items-center justify-center bg-secondary !text-white text-[14px] px-9 py-[10px] rounded-[20px] leading-[1.2] z-10"
        href="https://www.google.com/maps?q=%E3%80%92578-0983+%E5%A4%A7%E9%98%AA%E5%BA%9C%E6%9D%B1%E5%A4%A7%E9%98%AA%E5%B8%82%E5%90%89%E7%94%B0%E4%B8%8B%E5%B3%B614-25"
        target="_blank"
        rel="noopener noreferrer">
        Google Map で見る
      </a>
    </div>
    <div class="relative pb-[155px]">
      <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-[185px] translate-x-1/2 -right-[0%] w-[200px] h-auto " />
      <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-[445px] translate-x-1/2 -right-[0%] w-[200px] h-auto -z-10 " />
      <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-[315px] translate-x-1/2 -right-[10%] w-[200px] h-auto " />
      <img src="<?php echo esc_url($flow_decoration_3); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-[315px] translate-x-1/2 right-[10%] w-[200px] h-auto " />
      <h2 class="text-secondary text-[20px] pl-[55px] mt-15">所在地</h2>
      <p class="text-primary text-[16px] mt-4 -tracking-[0.06em]">
        〒578-0983　大阪府東大阪市吉田下島14番25号<br>
        TEL：072-961-9975<br>
      </p>
      <h2 class="text-secondary text-[20px] pl-[55px] mt-11">電⾞でお越しの場合</h2>
      <p class="text-primary text-[16px] mt-4 -tracking-[0.06em]">
        新⼤阪駅・⼤阪駅から<br>
        地下鉄御堂筋線、中百⾆⿃⽅⾯⾏きに乗り「本町駅」下⾞<br>
        地下鉄中央線、⽣駒⽅⾯に乗り換え「吉⽥駅」で下⾞
      </p>
      <h2 class="text-secondary text-[20px] pl-[55px] mt-11">⾞でお越しの場合</h2>
      <p class="text-primary text-[16px] mt-4 -tracking-[0.06em]">
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
