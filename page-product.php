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
$hero_image = mytheme_img_asset('product/hero');
$hero_mesh = mytheme_img_asset('about/hero-mesh');
?>
<section class="product-hero relative ">
  <div class="aspect-[1600/577] relative w-full">
    <img src="<?php echo esc_url($hero_mesh); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="-z-10 absolute h-auto w-[94%] object-cover mx-auto left-1/2 -translate-x-1/2" />
    <div class=" w-full py-[46px]">
      <div class="flex justify-end items-center w-full">
        <div class="mr-[44px]">
          <h1 class="text-[110px] leading-[1.1] text-[#6EBA38]">Product</h1>
          <p class="text-[36px] font-bold">中古品一覧</p>
        </div>
        <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="h-auto w-[64%] object-cover" />
      </div>
      <p class="text-[14px] opacity-70 mt-[20px] w-full text-right pr-30">TOP > 髙橋について</p>
    </div>
    <div class="grid grid-cols-2 gap-[30px] mx-auto w-fit mt-[50px]">
      <div class="bg-secondary active:bg-primary text-white w-80 aspect-[395/120] relative rounded-[12px] flex flex-col justify-center items-center gap-2 w-[395px]">
        <p class="text-[16px] opacity-50">Product</p>
        <p class="text-[24px] leading-[1]">既製品・セミオーダー</p>
        <svg class="absolute top-1/2 -translate-y-1/2 right-5" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
          <path id="Color_Overlay" data-name="Color Overlay" d="M575,812a15,15,0,1,1-15,15A15,15,0,0,1,575,812Z" transform="translate(-560 -812)" fill="#f6f6f6" opacity="0.3" />
          <path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M579.539,825.265l-4.406,4.406-4.406-4.406" transform="translate(-560 -812)" fill="none" stroke="#fff" stroke-width="2" />
        </svg>
      </div>
      <div class="bg-secondary active:bg-primary text-white w-80 aspect-[395/120] relative rounded-[12px] flex flex-col justify-center items-center gap-2 w-[395px]">
        <p class="text-[16px] opacity-50">Pre-owned</p>
        <p class="text-[24px] leading-[1]">中古品</p>
        <svg class="absolute top-1/2 -translate-y-1/2 right-5" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
          <path id="Color_Overlay" data-name="Color Overlay" d="M575,812a15,15,0,1,1-15,15A15,15,0,0,1,575,812Z" transform="translate(-560 -812)" fill="#f6f6f6" opacity="0.3" />
          <path id="長方形_3_のコピー" data-name="長方形 3 のコピー" d="M579.539,825.265l-4.406,4.406-4.406-4.406" transform="translate(-560 -812)" fill="none" stroke="#fff" stroke-width="2" />
        </svg>
      </div>
    </div>
</section>
<!-- Hero section end -->

<!-- Product section start -->
<?php
$product_image = mytheme_img_asset('product/product');

$product_cards = array(
  array(
    'main_image' => $product_image,
    'thumbnails' => array($product_image, $product_image, $product_image, $product_image, $product_image, $product_image, $product_image),
    'category' => 'ダンボールスリッター機',
    'title' => 'オートスリッター',
    'table' => array(
      array(
        'label' => 'メーカー名',
        'value' => '自社製品',
      ),
      array(
        'label' => '型式・仕様',
        'value' => "ARS-7（2100型）SDXタイプ\n刃物３丁取（４組）自動総紙装置付 群線８組",
      ),
      array(
        'label' => '項目名',
        'value' => 'キッカースリッター',
      ),
      array(
        'label' => '項目名',
        'value' => 'キッカースリッター',
      ),
      array(
        'label' => '項目名',
        'value' => 'キッカースリッター',
      ),
      array(
        'label' => '項目名',
        'value' => 'キッカースリッター',
      ),
      array(
        'label' => '項目名',
        'value' => 'キッカースリッター',
      ),
      array(
        'label' => '項目名',
        'value' => 'キッカースリッター',
      ),
    ),
  ),
  array(
    'main_image' => $product_image,
    'thumbnails' => array($product_image, $product_image, $product_image, $product_image, $product_image, $product_image, $product_image),
    'category' => 'ダンボールスリッター機',
    'title' => 'オートスリッター',
    'table' => array(
      array(
        'label' => 'メーカー名',
        'value' => '自社製品',
      ),
      array(
        'label' => '型式・仕様',
        'value' => "ARS-7（2100型）SDXタイプ\n刃物３丁取（４組）自動総紙装置付 群線８組",
      ),
    ),
  ),
  array(
    'main_image' => $product_image,
    'thumbnails' => array($product_image, $product_image, $product_image, $product_image, $product_image, $product_image, $product_image),
    'category' => 'ダンボールスリッター機',
    'title' => 'オートスリッター',
    'table' => array(
      array(
        'label' => 'メーカー名',
        'value' => '自社製品',
      ),
      array(
        'label' => '型式・仕様',
        'value' => "ARS-7（2100型）SDXタイプ\n刃物３丁取（４組）自動総紙装置付 群線８組",
      ),
    ),
  ),
  array(
    'main_image' => $product_image,
    'thumbnails' => array($product_image, $product_image, $product_image, $product_image, $product_image, $product_image, $product_image),
    'category' => 'ダンボールスリッター機',
    'title' => 'オートスリッター',
    'table' => array(
      array(
        'label' => 'メーカー名',
        'value' => '自社製品',
      ),
      array(
        'label' => '型式・仕様',
        'value' => "ARS-7（2100型）SDXタイプ\n刃物３丁取（４組）自動総紙装置付 群線８組",
      ),
    ),
  ),
  array(
    'main_image' => $product_image,
    'thumbnails' => array($product_image, $product_image, $product_image, $product_image, $product_image, $product_image, $product_image),
    'category' => 'ダンボールスリッター機',
    'title' => 'オートスリッター',
    'table' => array(
      array(
        'label' => 'メーカー名',
        'value' => '自社製品',
      ),
      array(
        'label' => '型式・仕様',
        'value' => "ARS-7（2100型）SDXタイプ\n刃物３丁取（４組）自動総紙装置付 群線８組",
      ),
    ),
  ),
  array(
    'main_image' => $product_image,
    'thumbnails' => array($product_image, $product_image, $product_image, $product_image, $product_image, $product_image, $product_image),
    'category' => 'ダンボールスリッター機',
    'title' => 'オートスリッター',
    'table' => array(
      array(
        'label' => 'メーカー名',
        'value' => '自社製品',
      ),
      array(
        'label' => '型式・仕様',
        'value' => "ARS-7（2100型）SDXタイプ\n刃物３丁取（４組）自動総紙装置付 群線８組",
      ),
    ),
  ),
);
?>
<section class="product-section mt-[55px] w-full mx-auto">
  <div class="w-full bg-secondary text-[18px] text-white py-6 leading-[1] flex gap-4 justify-center">
    <span>絞り込み項目</span>/
    <span>絞り込み項目</span>/
    <span>絞り込み項目</span>/
    <span>絞り込み項目</span>/
    <span>絞り込み項目</span>/
    <span>絞り込み項目</span>/
    <span>絞り込み項目</span>/
    <span>絞り込み項目</span>
  </div>
  <div class="w-full pt-[60px] pb-[146px] max-w-[75%] flex flex-col gap-[40px] mx-auto">
    <?php foreach ($product_cards as $card): ?>
      <div class="pt-[50px] pb-[60px] px-[70px] flex justify-between gap-[50px] bg-white drop-shadow-[0_5px_20px_rgba(0,0,0,0.1)]">
        <div class="max-w-[380px] w-full">
          <img src="<?php echo esc_url($card['main_image']); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-auto object-cover" />
          <div class="grid grid-cols-4 gap-x-[7px] gap-y-[5px] mt-[5px]">
            <?php foreach ($card['thumbnails'] as $thumb): ?>
              <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-auto object-cover" />
            <?php endforeach; ?>
          </div>
        </div>
        <div class="w-full">
          <div class="text-[12px] text-white bg-secondary px-4 w-fit">
            <?php echo esc_html($card['category']); ?>
          </div>
          <div class="text-primary text-[24px] mt-4">
            <?php echo esc_html($card['title']); ?>
          </div>

          <table class="w-full mt-5 text-[16px] border border-[#8F8D8C]">
            <tbody>
              <?php foreach ($card['table'] as $row): ?>
                <tr>
                  <td class="border bg-[#E4F2DA] border-[#8F8D8C] px-4 py-2 w-[140px]"><?php echo esc_html($row['label']); ?></td>
                  <td class="border border-[#8F8D8C] px-4 py-2">
                    <?php echo nl2br(esc_html($row['value'])); ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<!-- Product section end -->

<!-- Movie section start -->
<?php
$movie_mesh = mytheme_img_asset('product/movie-mesh');
$decoration_icon = mytheme_img_asset('top/product-icon');
?>
<section class="movie-section pt-[80px] pb-[146px] px-[200px] relative">
  <img src="<?php echo esc_url($movie_mesh); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-0 left-1/2 -translate-x-1/2 w-[94%] h-auto object-cover " />
  <p class="text-[20px] w-fit gap-[14px] flex  text-secondary">
    <img src="<?php echo esc_url($decoration_icon); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[30px] h-[30px]" />
    Movie
  </p>
  <h1 class="text-[44px] text-primary w-fit mt-5">当社製品の稼働中動画</h1>
  <div class="grid grid-cols-3 gap-y-[40px] mt-[60px] gap-x-[75px]">
    <?php
    $movie_items = array(
      array(
        'thumbnail' => $product_image,
        'title' => 'ウルトラ　スパースロッター',
        'url' => '#',
      ),
      array(
        'thumbnail' => $product_image,
        'title' => 'スパースロッター',
        'url' => '#',
      ),
      array(
        'thumbnail' => $product_image,
        'title' => 'キッカスリッターダウンスタッカ',
        'url' => '#',
      ),
      array(
        'thumbnail' => $product_image,
        'title' => 'ウルトラ　スパースロッター',
        'url' => '#',
      ),
      array(
        'thumbnail' => $product_image,
        'title' => 'スパースロッター',
        'url' => '#',
      ),
      array(
        'thumbnail' => $product_image,
        'title' => 'キッカスリッターダウンスタッカ',
        'url' => '#',
      ),
      array(
        'thumbnail' => $product_image,
        'title' => 'ウルトラ　スパースロッター',
        'url' => '#',
      ),
      array(
        'thumbnail' => $product_image,
        'title' => 'スパースロッター',
        'url' => '#',
      ),
      array(
        'thumbnail' => $product_image,
        'title' => 'キッカスリッターダウンスタッカ',
        'url' => '#',
      ),
    );
    ?>

    <?php foreach ($movie_items as $movie): ?>
      <a href="<?php echo esc_url($movie['url']); ?>" class="block">
        <div class="relative w-full aspect-[360/210] overflow-hidden bg-white drop-shadow-[0_5px_20px_rgba(0,0,0,0.1)]">
          <img src="<?php echo esc_url($movie['thumbnail']); ?>" alt="<?php echo esc_attr($movie['title']); ?>" class="absolute inset-0 h-full w-full object-cover" />
          <span class="absolute inset-0 flex items-center justify-center">
            <span class="w-[60px] aspect-square rounded-full bg-[#6EBA38] grid place-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="18.244" height="20.454" class="ml-[3px]" viewBox="0 0 18.244 20.454">
                <g id="三角形_1" data-name="三角形 1" transform="translate(-367.675 -5368.523)" fill="#fff" stroke-linejoin="round" opacity="0.902">
                  <path d="M 369.6780700683594 5387.9765625 C 369.1957397460938 5387.9765625 368.6751098632812 5387.59326171875 368.6751098632812 5386.9736328125 L 368.6751098632812 5370.5263671875 C 368.6751098632812 5369.90673828125 369.1959228515625 5369.52294921875 369.678466796875 5369.52294921875 C 369.8507690429688 5369.52294921875 370.0178833007812 5369.5693359375 370.1752319335938 5369.66015625 L 384.4190673828125 5377.88427734375 C 384.870361328125 5378.14453125 384.9190979003906 5378.576171875 384.9190979003906 5378.75 C 384.9190979003906 5378.923828125 384.870361328125 5379.35546875 384.4192199707031 5379.61572265625 L 370.1751098632812 5387.83935546875 C 370.0176086425781 5387.9306640625 369.8504028320312 5387.9765625 369.6780700683594 5387.9765625 Z" stroke="none" />
                  <path d="M 369.6753540039062 5370.5263671875 L 369.6753845214844 5370.5263671875 C 369.67529296875 5370.5263671875 369.6752014160156 5370.5263671875 369.6751098632812 5370.5263671875 C 369.6751098632812 5370.5263671875 369.6751098632812 5370.5263671875 369.6751098632812 5370.5263671875 L 369.6751098632812 5386.9736328125 C 369.6751098632812 5386.9736328125 369.6751098632812 5386.9736328125 369.6751098632812 5386.9736328125 L 383.9190673828125 5378.75 L 369.6753540039062 5370.5263671875 M 369.678466796875 5368.52294921875 C 370.0113525390625 5368.52294921875 370.3529357910156 5368.60791015625 370.6751098632812 5368.7939453125 L 384.9190979003906 5377.01806640625 C 386.2524108886719 5377.78759765625 386.2524108886719 5379.71240234375 384.9190979003906 5380.48193359375 L 370.6751098632812 5388.70556640625 C 369.3417053222656 5389.474609375 367.6750793457031 5388.51318359375 367.6751098632812 5386.9736328125 L 367.6751098632812 5370.5263671875 C 367.6751098632812 5369.35888671875 368.6336975097656 5368.52294921875 369.678466796875 5368.52294921875 Z" stroke="none" fill="#fff" />
                </g>
              </svg>

            </span>
          </span>
        </div>
        <p class="mt-[18px] text-[18px] text-primary -tracking-[0.06em]"><?php echo esc_html($movie['title']); ?></p>
      </a>
    <?php endforeach; ?>
  </div>
</section>
<!-- Movie section end -->

<!-- Enquiry section start -->
<?php get_template_part('template-parts/section-enquiry'); ?>
<!-- Enquiry section end -->

<!-- Footer section start -->
<?php get_template_part('template-parts/section-foot-cards'); ?>
<!-- Footer section end -->

<?php
get_footer();
