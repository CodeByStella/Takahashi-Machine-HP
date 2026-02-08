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
$flow_item_1 = mytheme_img_asset('about/flow-1');
$flow_item_2 = mytheme_img_asset('about/flow-2');
$flow_item_3 = mytheme_img_asset('about/flow-3');
$flow_item_4 = mytheme_img_asset('about/flow-4');
$flow_item_5 = mytheme_img_asset('about/flow-5');
$flow_item_6 = mytheme_img_asset('about/flow-6');
$flow_item_7 = mytheme_img_asset('about/flow-7');
?>
<section class="flow-section mt-[200px] pb-59">
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
          <div class="w-[150px] aspect-square bg-secondary absolute top-0 left-0"></div>
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
          <div class="w-[150px] aspect-square bg-secondary absolute top-15 left-[68px]"></div>
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
      <div class="flex">
        <div class="w-[350px] relative aspect-[350/230]">
          <div class="w-[150px] aspect-square bg-secondary absolute top-0 left-0"></div>
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
          <div class="w-[150px] aspect-square bg-secondary absolute top-15 left-[68px]"></div>
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
      <div class="flex">
        <div class="w-[350px] relative aspect-[350/230]">
          <div class="w-[150px] aspect-square bg-secondary absolute top-0 left-0"></div>
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
          <div class="w-[150px] aspect-square bg-secondary absolute top-15 left-[68px]"></div>
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
      <div class="flex">
        <div class="w-[350px] relative aspect-[350/230]">
          <div class="w-[150px] aspect-square bg-secondary absolute top-0 left-0"></div>
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

<?php
get_footer();
