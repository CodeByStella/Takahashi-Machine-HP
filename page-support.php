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
$hero_image = mytheme_img_asset('support/hero');
$hero_mesh = mytheme_img_asset('about/hero-mesh');
?>
<section class="about-hero relative ">
  <div class="aspect-[1600/577] relative w-full">
    <img src="<?php echo esc_url($hero_mesh); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="-z-10 absolute h-auto w-[94%] object-cover mx-auto left-1/2 -translate-x-1/2" />
    <div class=" w-full py-[46px]">
      <div class="flex justify-end items-center w-full">
        <div class="mr-[90px]">
          <h1 class="text-[110px] leading-[1.1] text-[#6EBA38]">Support</h1>
          <p class="text-[36px] font-bold">サポートについて</p>
        </div>
        <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="h-auto w-[64%] object-cover" />
      </div>
      <p class="text-[14px] opacity-70 mt-[20px] w-full text-right pr-30">TOP > サポートについて</p>
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
<section class="ancillary-section pt-[90px] pb-[180px] pl-[200px] pr-[100px] relative">
  <img src="<?php echo esc_url($ancill_decoration) ?>" class="w-[960px] -z-10 aspect-[960/600] top-[19px] right-0 absolute" alt="<?php echo esc_attr(get_the_title()) ?>" />
  <div class="absolute left-0 top-[258px] flex flex-col">
    <img src="<?php echo esc_url($ancill_1) ?>" class="w-[640px] -z-10 aspect-[640/368]" alt="<?php echo esc_attr(get_the_title()) ?>" />
    <img src="<?php echo esc_url($ancill_2) ?>" class="w-[640px] -z-10 aspect-[640/368]" alt="<?php echo esc_attr(get_the_title()) ?>" />
  </div>

  <p class="text-[20px] w-fit gap-[14px] flex text-secondary">
    <img src="<?php echo esc_url($decoration_icon); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[30px] h-[30px]" />
    Ancillary construction
  </p>
  <h2 class="mt-5 text-[44px] text-primary w-fit tracking-[-0.06em]">付帯工事、メンテナンス</h2>
  <div class="mt-[140px] right-0 w-fit ml-auto flex flex-col items-center">
    <p class="text-[36px] text-primary text-center w-fit -tracking-[0.06em]">その他<span class="bg-secondary text-white px-2">ダンボール工場設備</span>に関する<br />付帯工事・メンテナンス</p>
    <div class="mt-[43px] flex gap-[12px]">
      <div class="bg-secondary pt-[38px] flex flex-col items-center gap-[28px] w-120 h-[409px]">
        <img src="<?php echo esc_url($icon_1) ?>" class="w-[105px] aspect-square" alt="<?php echo esc_attr(get_the_title()) ?>" />
        <div class="text-center flex flex-col items-center gap-[7px] -tracking-[0.06em]">
          <div class="text-primary text-[14px] px-4 rounded-full bg-white w-fit">シート運搬等のローラコンベア設置</div>
          <div class="flex gap-[7px]">
            <div class="text-primary text-[14px] px-4 rounded-full bg-white w-fit">テーブルリフター設置</div>
            <div class="text-primary text-[14px] px-4 rounded-full bg-white w-fit">安全柵（フェンス）</div>
          </div>
          <div class="flex gap-[7px]">
            <div class="text-primary text-[14px] px-4 rounded-full bg-white w-fit">手摺設備工事</div>
            <div class="text-primary text-[14px] px-4 rounded-full bg-white w-fit">ステップ台</div>
          </div>
          <div class="text-primary text-[14px] px-4 rounded-full bg-white w-fit">階段等製作設置工事</div>
          <div class="flex gap-[7px]">
            <div class="text-primary text-[14px] px-4 rounded-full bg-white w-fit">コンプレッサー設置</div>
            <div class="text-primary text-[14px] px-4 rounded-full bg-white w-fit">エア配管</div>
          </div>
        </div>
      </div>
      <div class="bg-secondary pt-[38px] flex flex-col items-center gap-[28px] w-120  h-[409px]">
        <img src="<?php echo esc_url($icon_2) ?>" class="w-[105px] aspect-square" alt="<?php echo esc_attr(get_the_title()) ?>" />
        <div class="text-center flex flex-col items-center gap-[7px] -tracking-[0.06em]">
          <div class="flex gap-[7px]">
            <div class="text-primary text-[14px] px-4 rounded-full bg-white w-fit">ダンボール製品</div>
            <div class="text-primary text-[14px] px-4 rounded-full bg-white w-fit">検品台</div>
          </div>
          <div class="flex gap-[7px]">
            <div class="text-primary text-[14px] px-4 rounded-full bg-white w-fit">機械等安全カバー</div>
            <div class="text-primary text-[14px] px-4 rounded-full bg-white w-fit">トムソン木型棚</div>
          </div>
          <div class="text-primary text-[14px] px-4 rounded-full bg-white w-fit">トムソン面板棚製作</div>
          <div class="text-primary text-[14px] px-4 rounded-full bg-white w-fit">送風機設置工事</div>
          <div class="text-primary text-[14px] px-4 rounded-full bg-white w-fit">紙粉・紙片除去装置ブロアー</div>
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
  <div class="w-full pt-[68px] pb-[61px] bg-[#E4F2D9]">
    <h2 class="text-[47px] text-primary text-center w-fit mx-auto -tracking-[0.06em]">メンテナンスBefore Afterの工事内容について</h2>
    <div class="flex gap-[22px] justify-center w-fit mx-auto mt-[68px]">
      <div class="w-[411px]">
        <img src="<?php echo esc_url($maintenance_1) ?>" class="w-full aspect-[411/317]" alt="<?php echo esc_attr(get_the_title()) ?>" />
        <p class="text-[20px] mt-[8px] text-primary w-fit -tracking-[0.06em]">Before</p>
        <p class="text-[18px] mt-[10px] text-primary w-fit -tracking-[0.06em] leading-[1.2]">コルゲートのペーパーガイドロールの軸が摩耗している状態</p>
      </div>
      <div class="w-[411px]">
        <img src="<?php echo esc_url($maintenance_2) ?>" class="w-full aspect-[411/317]" alt="<?php echo esc_attr(get_the_title()) ?>" />
        <p class="text-[20px] mt-[8px] text-primary w-fit -tracking-[0.06em]">途中経過</p>
        <p class="text-[18px] mt-[10px] text-primary w-fit -tracking-[0.06em] leading-[1.2]">肉盛りした状態</p>
      </div>
      <div class="w-[411px]">
        <img src="<?php echo esc_url($maintenance_3) ?>" class="w-full aspect-[411/317]" alt="<?php echo esc_attr(get_the_title()) ?>" />
        <p class="text-[20px] mt-[8px] text-primary w-fit -tracking-[0.06em]">After</p>
        <p class="text-[18px] mt-[10px] text-primary w-fit -tracking-[0.06em] leading-[1.2]">肉盛り後旋盤加工し完成</p>
      </div>
    </div>
  </div>
  <div class="pt-[132px] pb-[75px] px-[163px]">
    <h1 class="text-[44px] text-primary w-fit mx-auto mb-[60px] -tracking-[0.06em]">メンテナンス事例</h1>
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
      <div class="w-full py-[58px] border-b border-[#707070] flex gap-[46px]<?php echo $index === 0 ? ' border-t' : ''; ?>">
        <div class="w-full">
          <h2 class="text-[28px] text-secondary w-fit -tracking-[0.06em] mt-[20px]"><?php echo esc_html($case['title']); ?></h2>
          <p class="text-[16px] text-primary w-full -tracking-[0.08em] mt-[35px]">
            <?php echo esc_html($case['text']); ?>
          </p>
        </div>
        <div class="w-fit flex flex-col">
          <div class="w-[250px] aspect-[250/163] relative">
            <div class="absolute top-0 left-0 bg-white text-primary px-9 text-[13px]">
              before
            </div>
            <img src="<?php echo esc_url($case['before_image']); ?>" class="w-full h-full object-cover" alt="<?php echo esc_attr(get_the_title()); ?>" />
          </div>
          <div class="w-[250px] aspect-[250/163] relative">
            <div class="absolute top-0 left-0 bg-white text-primary px-9 text-[13px]">
              after
            </div>
            <img src="<?php echo esc_url($case['after_image']); ?>" class="w-full h-full object-cover" alt="<?php echo esc_attr(get_the_title()); ?>" />
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    <button class="flex flex-col items-center justify-center gap-[14px] mx-auto mt-[34px] cursor-pointer">
      <svg xmlns="http://www.w3.org/2000/svg" width="18.876" height="18.876" viewBox="0 0 18.876 18.876">
        <path id="Path_5516" data-name="Path 5516" d="M-10181-4998.266h18.876" transform="translate(10181 5007.703)" fill="none" stroke="#464646" stroke-width="2" />
        <path id="Path_5517" data-name="Path 5517" d="M-10181-4998.266h18.876" transform="translate(-4988.828 10181) rotate(90)" fill="none" stroke="#464646" stroke-width="2" />
      </svg>
      <div class="text-[16px] text-primary">もっと見る</div>
    </button>

  </div>
</section>

<!-- Footer section start -->
<?php get_template_part('template-parts/section-foot-cards'); ?>
<!-- Footer section end -->

<?php
get_footer();
