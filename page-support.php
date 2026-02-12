<?php

/**
 * Page template for Support (slug: support).
 *
 * @package mytheme
 */

get_header();
?>

<!-- Hero section start -->
<?php
$hero_image = mytheme_img_asset('support/hero');
$hero_mesh = mytheme_img_asset('about/hero-mesh');
?>
<section class="about-hero relative px-0">
  <div class="aspect-[375/300] sm:aspect-[768/600] md:aspect-[1024/500] lg:aspect-[1440/550] 2xl:aspect-[1600/577] relative w-full">
    <img src="<?php echo esc_url($hero_mesh); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="-z-10 absolute h-auto w-[94%] object-cover mx-auto left-1/2 -translate-x-1/2" />
    <div class="w-full py-[24px] sm:py-[30px] md:py-[36px] lg:py-[42px] 2xl:py-[46px]">
      <div class="flex flex-col md:flex-row justify-center md:justify-end items-center w-full gap-4 md:gap-0">
        <div class="text-center md:text-left md:mr-[42px] xl:mr-[86px] 2xl:mr-[44px] order-2 md:order-1">
          <h1 class="text-[48px] sm:text-[60px] md:text-[75px] lg:text-[90px] 2xl:text-[110px] leading-[1.1] text-[#6EBA38]">Support</h1>
          <p class="text-[18px] sm:text-[22px] md:text-[28px] lg:text-[32px] 2xl:text-[36px] font-bold">サポートについて</p>
        </div>
        <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="h-auto w-full max-w-[340px] md:w-[58%] md:max-w-none lg:w-[62%] 2xl:w-[64%] object-cover order-1 md:order-2 rounded-[20px] sm:rounded-none" />
      </div>
      <p class="text-[11px] sm:text-[12px] md:text-[13px] 2xl:text-[14px] opacity-70 mt-[12px] sm:mt-[16px] md:mt-[20px] w-full text-center md:text-right pr-0 md:pr-15 lg:pr-20 2xl:pr-30">TOP > サポートについて</p>
    </div>
  </div>
</section>
<!-- Hero section end -->

<!-- Ancillary section start -->
<?php
$decoration_icon = mytheme_img_asset('top/product-icon');

$icon_1 = mytheme_img_asset('support/ancillary-icon-1');
$icon_2 = mytheme_img_asset('support/ancillary-icon-2');

$ancill_1 = mytheme_img_asset('support/ancill-1');
$ancill_2 = mytheme_img_asset('support/ancill-2');
$ancill_decoration = mytheme_img_asset('support/ancill-decoration');
?>
<section class="ancillary-section pt-[40px] sm:pt-[50px] md:pt-[60px] lg:pt-[75px] 2xl:pt-[90px] pb-[60px] sm:pb-[80px] md:pb-[100px] lg:pb-[140px] 2xl:pb-[180px] px-4 sm:px-6 md:px-8 lg:px-12 xl:pl-[120px] xl:pr-[60px] 2xl:pl-[200px] 2xl:pr-[100px] relative overflow-hidden">
  <img src="<?php echo esc_url($ancill_decoration) ?>" class="w-[280px] sm:w-[400px] md:w-[520px] lg:w-[720px] 2xl:w-[960px] -z-10 aspect-[960/600] top-[19px] right-0 absolute opacity-60 md:opacity-80 2xl:opacity-100" alt="<?php echo esc_attr(get_the_title()) ?>" />
  <div class="absolute left-0 top-[120px] sm:top-[160px] md:top-[200px] lg:top-[220px] 2xl:top-[258px] hidden md:flex flex-col">
    <img src="<?php echo esc_url($ancill_1) ?>" class="w-[200px] sm:w-[280px] md:w-[380px] lg:w-[520px] 2xl:w-[640px] -z-10 aspect-[640/368]" alt="<?php echo esc_attr(get_the_title()) ?>" />
    <img src="<?php echo esc_url($ancill_2) ?>" class="w-[200px] sm:w-[280px] md:w-[380px] lg:w-[520px] 2xl:w-[640px] -z-10 aspect-[640/368]" alt="<?php echo esc_attr(get_the_title()) ?>" />
  </div>

  <p class="text-[14px] sm:text-[16px] md:text-[18px] 2xl:text-[20px] w-fit gap-[10px] sm:gap-[12px] 2xl:gap-[14px] flex text-secondary items-center">
    <img src="<?php echo esc_url($decoration_icon); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[22px] h-[22px] sm:w-[26px] sm:h-[26px] 2xl:w-[30px] 2xl:h-[30px]" />
    Ancillary construction
  </p>
  <h2 class="mt-3 sm:mt-4 2xl:mt-5 text-[24px] sm:text-[28px] md:text-[34px] lg:text-[40px] 2xl:text-[44px] text-primary w-fit tracking-[-0.06em]">付帯工事、メンテナンス</h2>
  <div class="mt-[40px] sm:mt-[60px] md:mt-[80px] lg:mt-[110px] 2xl:mt-[140px] right-0 w-full md:w-fit ml-0 md:ml-auto flex flex-col items-center">
    <p class="text-[18px] sm:text-[22px] md:text-[28px] lg:text-[32px] 2xl:text-[36px] text-primary text-center w-full 2xl:w-fit -tracking-[0.06em]">その他<span class="bg-secondary text-white px-2">ダンボール工場設備</span>に関する<br />付帯工事・メンテナンス</p>
    <div class="mt-[24px] sm:mt-[30px] 2xl:mt-[43px] flex flex-col sm:flex-row gap-4 sm:gap-[12px] w-full max-w-[320px] sm:max-w-none sm:w-fit">
      <div class="bg-secondary pt-[24px] sm:pt-[30px] 2xl:pt-[38px] flex flex-col items-center gap-[16px] sm:gap-[20px] 2xl:gap-[28px] w-full sm:w-[140px] md:w-100 2xl:w-120 min-h-[280px] sm:min-h-0 sm:h-[320px] md:h-[360px] lg:h-[380px] 2xl:h-[409px] px-4 sm:px-2 pb-6 sm:pb-[38px]">
        <img src="<?php echo esc_url($icon_1) ?>" class="w-[64px] sm:w-[80px] 2xl:w-[105px] aspect-square flex-shrink-0" alt="<?php echo esc_attr(get_the_title()) ?>" />
        <div class="text-center flex flex-col items-center gap-[6px] sm:gap-[7px] -tracking-[0.06em]">
          <div class="text-primary text-[11px] sm:text-[12px] 2xl:text-[14px] px-3 sm:px-4 rounded-full bg-white w-fit">シート運搬等のローラコンベア設置</div>
          <div class="flex flex-wrap gap-[6px] sm:gap-[7px] justify-center">
            <div class="text-primary text-[11px] sm:text-[12px] 2xl:text-[14px] px-3 sm:px-4 rounded-full bg-white w-fit">テーブルリフター設置</div>
            <div class="text-primary text-[11px] sm:text-[12px] 2xl:text-[14px] px-3 sm:px-4 rounded-full bg-white w-fit">安全柵（フェンス）</div>
          </div>
          <div class="flex flex-wrap gap-[6px] sm:gap-[7px] justify-center">
            <div class="text-primary text-[11px] sm:text-[12px] 2xl:text-[14px] px-3 sm:px-4 rounded-full bg-white w-fit">手摺設備工事</div>
            <div class="text-primary text-[11px] sm:text-[12px] 2xl:text-[14px] px-3 sm:px-4 rounded-full bg-white w-fit">ステップ台</div>
          </div>
          <div class="text-primary text-[11px] sm:text-[12px] 2xl:text-[14px] px-3 sm:px-4 rounded-full bg-white w-fit">階段等製作設置工事</div>
          <div class="flex flex-wrap gap-[6px] sm:gap-[7px] justify-center">
            <div class="text-primary text-[11px] sm:text-[12px] 2xl:text-[14px] px-3 sm:px-4 rounded-full bg-white w-fit">コンプレッサー設置</div>
            <div class="text-primary text-[11px] sm:text-[12px] 2xl:text-[14px] px-3 sm:px-4 rounded-full bg-white w-fit">エア配管</div>
          </div>
        </div>
      </div>
      <div class="bg-secondary pt-[24px] sm:pt-[30px] 2xl:pt-[38px] flex flex-col items-center gap-[16px] sm:gap-[20px] 2xl:gap-[28px] w-full sm:w-[140px] md:w-100 2xl:w-120 min-h-[280px] sm:min-h-0 sm:h-[320px] md:h-[360px] lg:h-[380px] 2xl:h-[409px] px-4 sm:px-2 pb-6 sm:pb-[38px]">
        <img src="<?php echo esc_url($icon_2) ?>" class="w-[64px] sm:w-[80px] 2xl:w-[105px] aspect-square flex-shrink-0" alt="<?php echo esc_attr(get_the_title()) ?>" />
        <div class="text-center flex flex-col items-center gap-[6px] sm:gap-[7px] -tracking-[0.06em]">
          <div class="flex flex-wrap gap-[6px] sm:gap-[7px] justify-center">
            <div class="text-primary text-[11px] sm:text-[12px] 2xl:text-[14px] px-3 sm:px-4 rounded-full bg-white w-fit">ダンボール製品</div>
            <div class="text-primary text-[11px] sm:text-[12px] 2xl:text-[14px] px-3 sm:px-4 rounded-full bg-white w-fit">検品台</div>
          </div>
          <div class="flex flex-wrap gap-[6px] sm:gap-[7px] justify-center">
            <div class="text-primary text-[11px] sm:text-[12px] 2xl:text-[14px] px-3 sm:px-4 rounded-full bg-white w-fit">機械等安全カバー</div>
            <div class="text-primary text-[11px] sm:text-[12px] 2xl:text-[14px] px-3 sm:px-4 rounded-full bg-white w-fit">トムソン木型棚</div>
          </div>
          <div class="text-primary text-[11px] sm:text-[12px] 2xl:text-[14px] px-3 sm:px-4 rounded-full bg-white w-fit">トムソン面板棚製作</div>
          <div class="text-primary text-[11px] sm:text-[12px] 2xl:text-[14px] px-3 sm:px-4 rounded-full bg-white w-fit">送風機設置工事</div>
          <div class="text-primary text-[11px] sm:text-[12px] 2xl:text-[14px] px-3 sm:px-4 rounded-full bg-white w-fit">紙粉・紙片除去装置ブロアー</div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Ancillary section end -->

<!-- Maintenance section start -->
<?php
$maintenance_1 = mytheme_img_asset('support/maintenance-1');
$maintenance_2 = mytheme_img_asset('support/maintenance-2');
$maintenance_3 = mytheme_img_asset('support/maintenance-3');

$maintenance_example = mytheme_img_asset('support/maintenance-example');
?>
<section class="">
  <div class="w-full pt-[32px] sm:pt-[44px] md:pt-[56px] 2xl:pt-[68px] pb-[32px] sm:pb-[44px] md:pb-[52px] 2xl:pb-[61px] bg-[#E4F2D9] px-4 sm:px-6 md:px-8">
    <h2 class="text-[22px] sm:text-[28px] md:text-[36px] lg:text-[42px] 2xl:text-[47px] text-primary text-center w-full max-w-[320px] sm:max-w-none mx-auto -tracking-[0.06em]">メンテナンスBefore Afterの工事内容について</h2>
    <div class="flex flex-col sm:flex-row gap-4 sm:gap-[14px] md:gap-[18px] 2xl:gap-[22px] justify-center w-full max-w-[320px] sm:max-w-none mx-auto mt-[32px] sm:mt-[44px] md:mt-[56px] 2xl:mt-[68px]">
      <div class="w-full sm:w-[180px] md:w-[260px] lg:w-[340px] 2xl:w-[411px]">
        <img src="<?php echo esc_url($maintenance_1) ?>" class="w-full aspect-[411/317]" alt="<?php echo esc_attr(get_the_title()) ?>" />
        <p class="text-[14px] sm:text-[16px] 2xl:text-[20px] mt-[6px] 2xl:mt-[8px] text-primary w-fit -tracking-[0.06em]">Before</p>
        <p class="text-[12px] sm:text-[14px] md:text-[16px] 2xl:text-[18px] mt-[6px] 2xl:mt-[10px] text-primary w-full 2xl:w-fit -tracking-[0.06em] leading-[1.2]">コルゲートのペーパーガイドロールの軸が摩耗している状態</p>
      </div>
      <div class="w-full sm:w-[180px] md:w-[260px] lg:w-[340px] 2xl:w-[411px]">
        <img src="<?php echo esc_url($maintenance_2) ?>" class="w-full aspect-[411/317]" alt="<?php echo esc_attr(get_the_title()) ?>" />
        <p class="text-[14px] sm:text-[16px] 2xl:text-[20px] mt-[6px] 2xl:mt-[8px] text-primary w-fit -tracking-[0.06em]">途中経過</p>
        <p class="text-[12px] sm:text-[14px] md:text-[16px] 2xl:text-[18px] mt-[6px] 2xl:mt-[10px] text-primary w-full 2xl:w-fit -tracking-[0.06em] leading-[1.2]">肉盛りした状態</p>
      </div>
      <div class="w-full sm:w-[180px] md:w-[260px] lg:w-[340px] 2xl:w-[411px]">
        <img src="<?php echo esc_url($maintenance_3) ?>" class="w-full aspect-[411/317]" alt="<?php echo esc_attr(get_the_title()) ?>" />
        <p class="text-[14px] sm:text-[16px] 2xl:text-[20px] mt-[6px] 2xl:mt-[8px] text-primary w-fit -tracking-[0.06em]">After</p>
        <p class="text-[12px] sm:text-[14px] md:text-[16px] 2xl:text-[18px] mt-[6px] 2xl:mt-[10px] text-primary w-full 2xl:w-fit -tracking-[0.06em] leading-[1.2]">肉盛り後旋盤加工し完成</p>
      </div>
    </div>
  </div>
  <div class="pt-[48px] sm:pt-[64px] md:pt-[88px] lg:pt-[110px] 2xl:pt-[132px] pb-[40px] sm:pb-[55px] 2xl:pb-[75px] px-4 sm:px-6 md:px-10 lg:px-16 xl:px-[80px] 2xl:px-[163px]">
    <h1 class="text-[24px] sm:text-[30px] md:text-[36px] lg:text-[40px] 2xl:text-[44px] text-primary w-fit mx-auto mb-[32px] sm:mb-[44px] 2xl:mb-[60px] -tracking-[0.06em]">メンテナンス事例</h1>
    <?php
    $maintenance_cases = array(
      array(
        'title' => '事例見出しが入ります事例見出しが入ります',
        'text' => 'メンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストです',
        'before_image' => $maintenance_example,
        'after_image' => $maintenance_example,
      ),
      array(
        'title' => '事例見出しが入ります事例見出しが入ります',
        'text' => 'メンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストです',
        'before_image' => $maintenance_example,
        'after_image' => $maintenance_example,
      ),
      array(
        'title' => '事例見出しが入ります事例見出しが入ります',
        'text' => 'メンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストです',
        'before_image' => $maintenance_example,
        'after_image' => $maintenance_example,
      ),
      array(
        'title' => '事例見出しが入ります事例見出しが入ります',
        'text' => 'メンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストです',
        'before_image' => $maintenance_example,
        'after_image' => $maintenance_example,
      ),
      array(
        'title' => '事例見出しが入ります事例見出しが入ります',
        'text' => 'メンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストですメンテナンス内容等の文言が⼊りますダミーテキストです',
        'before_image' => $maintenance_example,
        'after_image' => $maintenance_example,
      ),
    );
    ?>

    <?php foreach ($maintenance_cases as $index => $case): ?>
      <div class="w-full py-[28px] sm:py-[40px] 2xl:py-[58px] border-b border-[#707070] flex flex-col md:flex-row gap-6 md:gap-[32px] 2xl:gap-[46px]<?php echo $index === 0 ? ' border-t' : ''; ?>">
        <div class="w-full min-w-0">
          <h2 class="text-[18px] sm:text-[22px] md:text-[25px] 2xl:text-[28px] text-secondary w-fit -tracking-[0.06em] mt-0 2xl:mt-[20px]"><?php echo esc_html($case['title']); ?></h2>
          <p class="text-[13px] sm:text-[14px] 2xl:text-[16px] text-primary w-full -tracking-[0.08em] mt-[16px] sm:mt-[24px] 2xl:mt-[35px]">
            <?php echo esc_html($case['text']); ?>
          </p>
        </div>
        <div class="w-full md:w-fit flex flex-row md:flex-col gap-2 md:gap-3 2xl:gap-0 flex-shrink-0">
          <div class="flex-1 min-w-0 md:flex-none md:w-[200px] lg:w-[220px] 2xl:w-[250px] aspect-[250/163] relative overflow-hidden">
            <div class="absolute top-0 left-0 bg-white text-primary px-4 sm:px-6 2xl:px-9 text-[11px] sm:text-[12px] 2xl:text-[13px] z-10">
              before
            </div>
            <img src="<?php echo esc_url($case['before_image']); ?>" class="w-full h-full object-cover absolute inset-0" alt="<?php echo esc_attr(get_the_title()); ?>" />
          </div>
          <div class="flex-1 min-w-0 md:flex-none md:w-[200px] lg:w-[220px] 2xl:w-[250px] aspect-[250/163] relative overflow-hidden">
            <div class="absolute top-0 left-0 bg-white text-primary px-4 sm:px-6 2xl:px-9 text-[11px] sm:text-[12px] 2xl:text-[13px] z-10">
              after
            </div>
            <img src="<?php echo esc_url($case['after_image']); ?>" class="w-full h-full object-cover absolute inset-0" alt="<?php echo esc_attr(get_the_title()); ?>" />
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    <button class="flex flex-col items-center justify-center gap-[10px] sm:gap-[14px] mx-auto mt-[24px] sm:mt-[28px] 2xl:mt-[34px] cursor-pointer">
      <svg xmlns="http://www.w3.org/2000/svg" width="18.876" height="18.876" viewBox="0 0 18.876 18.876">
        <path id="Path_5516" data-name="Path 5516" d="M-10181-4998.266h18.876" transform="translate(10181 5007.703)" fill="none" stroke="#464646" stroke-width="2" />
        <path id="Path_5517" data-name="Path 5517" d="M-10181-4998.266h18.876" transform="translate(-4988.828 10181) rotate(90)" fill="none" stroke="#464646" stroke-width="2" />
      </svg>
      <div class="text-[14px] sm:text-[15px] 2xl:text-[16px] text-primary">もっと見る</div>
    </button>

  </div>
</section>

<!-- Footer section start -->
<?php get_template_part('template-parts/section-foot-cards'); ?>
<!-- Footer section end -->

<?php
get_footer();
