<?php

/**
 * Page template for Product (slug: product).
 *
 * @package mytheme
 */

get_header();
?>

<!-- Hero section start -->
<?php
$hero_image = mytheme_img_asset('product/hero');
$hero_mesh = mytheme_img_asset('about/hero-mesh');

$product_base_url = get_permalink(get_queried_object());
if (!$product_base_url) {
  $product_base_url = home_url('/product/');
}
$product_id = isset($_GET['id']) ? sanitize_text_field(wp_unslash($_GET['id'])) : 'existing';
$url_existing = add_query_arg('id', 'existing', $product_base_url);
$url_used     = add_query_arg('id', 'used', $product_base_url);
$allowed_ids = array('existing', 'order', 'used');
if (!in_array($product_id, $allowed_ids, true)) {
  $product_id = 'existing';
}

$hero_subtitles = array(
  'existing' => '既製品・セミオーダー一覧',
  'order'    => 'オーダー一覧',
  'used'     => '中古品一覧',
);
$hero_subtitle = isset($hero_subtitles[$product_id]) ? $hero_subtitles[$product_id] : '既製品・セミオーダー一覧';
?>
<section class="product-hero relative px-0">
  <div class="aspect-[375/600] sm:aspect-[768/600] md:aspect-[1024/500] lg:aspect-[1440/550] 2xl:aspect-[1600/577] relative w-full">
    <img src="<?php echo esc_url($hero_mesh); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="-z-10 absolute h-auto w-[94%] object-cover mx-auto left-1/2 -translate-x-1/2" />
    <div class="w-full py-[24px] sm:py-[30px] md:py-[36px] lg:py-[42px] 2xl:py-[46px]">
      <div class="flex flex-col md:flex-row justify-center md:justify-end items-center w-full gap-4 md:gap-0">
        <div class="text-center md:text-left md:mr-[54px] xl:mr-[86px] order-2 md:order-1">
          <h1 class="text-[48px] sm:text-[60px] md:text-[75px] lg:text-[90px] 2xl:text-[110px] leading-[1.1] text-[#6EBA38] font-medium">Product</h1>
          <p class="text-[18px] sm:text-[22px] md:text-[28px] lg:text-[32px] 2xl:text-[36px] font-bold"><?php echo esc_html($hero_subtitle); ?></p>
        </div>
        <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="h-auto w-full max-w-[340px] md:w-[58%] md:max-w-none lg:w-[62%] 2xl:w-[64%] object-cover order-1 md:order-2 rounded-[20px] sm:rounded-none" />
      </div>
      <p class="text-[11px] sm:text-[12px] md:text-[13px] 2xl:text-[14px] opacity-70 mt-[12px] sm:mt-[16px] md:mt-[20px] w-full text-center md:text-right pr-0 md:pr-15 lg:pr-20 2xl:pr-30 font-regular"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a> &gt; <a href="<?php echo esc_url($product_base_url); ?>">製品一覧</a> &gt; <?php echo esc_html($hero_subtitle); ?></p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5 md:gap-[20px] lg:gap-[25px] 2xl:gap-[30px] mx-auto max-w-[320px] sm:max-w-none w-full sm:w-fit px-4 sm:px-0 mt-[30px] sm:mt-[40px] lg:mt-[45px] 2xl:mt-[50px] pb-6 sm:pb-8 md:pb-0">
      <a href="<?php echo esc_url($url_existing); ?>" class="bg-secondary hover:bg-primary text-white w-full sm:w-[240px] md:w-[280px] lg:w-[340px] 2xl:w-[395px] aspect-[320/120] sm:aspect-[395/120] relative rounded-[12px] flex flex-col justify-center items-center gap-2 cursor-pointer transition-colors outline-none focus:outline-none active:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2<?php echo $product_id === 'existing' ? ' ring-2 ring-white ring-offset-2' : ''; ?>">
        <p class="text-[13px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] opacity-50 font-regular">Product</p>
        <p class="text-[18px] sm:text-[20px] md:text-[22px] 2xl:text-[24px] leading-[1] font-bold">既製品・セミオーダー</p>
        <svg class="absolute top-1/2 -translate-y-1/2 right-5" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
          <path d="M575,812a15,15,0,1,1-15,15A15,15,0,0,1,575,812Z" transform="translate(-560 -812)" fill="#f6f6f6" opacity="0.3" />
          <path d="M579.539,825.265l-4.406,4.406-4.406-4.406" transform="translate(-560 -812)" fill="none" stroke="#fff" stroke-width="2" />
        </svg>
      </a>
      <a href="<?php echo esc_url($url_used); ?>" class="bg-secondary hover:bg-primary text-white w-full sm:w-[240px] md:w-[280px] lg:w-[340px] 2xl:w-[395px] aspect-[320/120] sm:aspect-[395/120] relative rounded-[12px] flex flex-col justify-center items-center gap-2 cursor-pointer transition-colors outline-none focus:outline-none active:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2<?php echo $product_id === 'used' ? ' ring-2 ring-white ring-offset-2' : ''; ?>">
        <p class="text-[13px] sm:text-[14px] md:text-[15px] 2xl:text-[16px] opacity-50 font-regular">Pre-owned</p>
        <p class="text-[18px] sm:text-[20px] md:text-[22px] 2xl:text-[24px] leading-[1] font-bold">中古品</p>
        <svg class="absolute top-1/2 -translate-y-1/2 right-5" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
          <path d="M575,812a15,15,0,1,1-15,15A15,15,0,0,1,575,812Z" transform="translate(-560 -812)" fill="#f6f6f6" opacity="0.3" />
          <path d="M579.539,825.265l-4.406,4.406-4.406-4.406" transform="translate(-560 -812)" fill="none" stroke="#fff" stroke-width="2" />
        </svg>
      </a>
    </div>
  </div>
</section>
<!-- Hero section end -->

<!-- Product section start -->
<?php
$product_placeholder = mytheme_img_asset('product/product');

$product_query = new WP_Query(array(
  'post_type'      => 'site_product',
  'post_status'    => 'publish',
  'posts_per_page' => -1,
  'orderby'        => 'menu_order date',
  'order'          => 'ASC',
  'tax_query'      => array(
    array(
      'taxonomy' => 'product_list_type',
      'field'    => 'slug',
      'terms'    => $product_id,
    ),
  ),
));

$product_categories_for_filter = array();
?>
<section class="product-section mt-[32px] sm:mt-[42px] 2xl:mt-[55px] w-full mx-auto">
  <?php if ($product_query->have_posts()) : ?>
    <?php
    while ($product_query->have_posts()) {
      $product_query->the_post();
      $cat = get_post_meta(get_the_ID(), '_product_category', true);
      if ($cat && !in_array($cat, $product_categories_for_filter, true)) {
        $product_categories_for_filter[] = $cat;
      }
    }
    $product_query->rewind_posts();
    ?>
    <?php if (!empty($product_categories_for_filter)) : ?>
      <div class="w-full bg-secondary text-[12px] sm:text-[14px] md:text-[16px] 2xl:text-[18px] text-white py-4 sm:py-5 2xl:py-6 leading-[1] flex flex-wrap gap-2 sm:gap-3 2xl:gap-4 justify-center px-4 font-medium">
        <?php foreach ($product_categories_for_filter as $i => $fc) : ?>
          <span><?php echo esc_html($fc); ?></span><?php echo $i < count($product_categories_for_filter) - 1 ? '/' : ''; ?>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
    <div class="w-full pt-[32px] sm:pt-[44px] 2xl:pt-[60px] pb-[60px] sm:pb-[100px] 2xl:pb-[146px] px-4 sm:px-6 md:px-8 max-w-[100%] sm:max-w-[90%] md:max-w-[85%] lg:max-w-[90%] 2xl:max-w-[75%] flex flex-col gap-6 sm:gap-8 2xl:gap-[40px] mx-auto">
      <?php while ($product_query->have_posts()) : ?>
        <?php
        $product_query->the_post();
        $main_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
        if (!$main_url) {
          $main_url = $product_placeholder;
        }
        $gallery_ids = get_post_meta(get_the_ID(), '_product_gallery', true);
        $thumb_ids = array_filter(array_map('absint', explode(',', $gallery_ids)));
        $thumbnails = array();
        foreach ($thumb_ids as $tid) {
          $u = wp_get_attachment_image_url($tid, 'full');
          if ($u) {
            $thumbnails[] = $u;
          }
        }
        if (empty($thumbnails)) {
          $thumbnails = array_fill(0, 4, $main_url);
        }
        $card_category = get_post_meta(get_the_ID(), '_product_category', true);
        $card_title = get_the_title();
        $specs_json = get_post_meta(get_the_ID(), '_product_specs', true);
        $table_rows = is_string($specs_json) ? json_decode($specs_json, true) : array();
        if (!is_array($table_rows)) {
          $table_rows = array();
        }
        ?>
        <div class="pt-[24px] sm:pt-[36px] 2xl:pt-[50px] pb-[28px] sm:pb-[44px] 2xl:pb-[60px] px-4 sm:px-6 md:px-10 lg:px-14 2xl:px-[70px] flex flex-col lg:flex-row justify-between gap-6 lg:gap-8 2xl:gap-[50px] bg-white drop-shadow-[0_5px_20px_rgba(0,0,0,0.1)]">
          <div class="product-card-gallery w-full lg:max-w-[340px] 2xl:max-w-[380px] flex-shrink-0" data-selected-url="<?php echo esc_url($main_url); ?>">
            <img src="<?php echo esc_url($main_url); ?>" alt="<?php echo esc_attr($card_title); ?>" class="product-card-main w-full h-auto object-cover" />
            <div class="grid grid-cols-4 gap-x-[5px] sm:gap-x-[6px] 2xl:gap-x-[7px] gap-y-[4px] 2xl:gap-y-[5px] mt-[4px] 2xl:mt-[5px]">
              <?php foreach ($thumbnails as $i => $thumb_url) : ?>
                <button type="button" class="product-card-thumb-btn relative p-0 block w-full border-0 cursor-pointer rounded overflow-hidden aspect-[90/62] bg-gray-100" aria-label="<?php echo esc_attr(sprintf(__('画像 %d を表示', 'mytheme'), $i + 1)); ?>">
                  <img src="<?php echo esc_url($thumb_url); ?>" alt="" class="absolute inset-0 w-full h-full object-cover pointer-events-none" />
                </button>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="w-full min-w-0">
            <?php if ($card_category) : ?>
              <div class="text-[11px] sm:text-[12px] text-white bg-secondary px-3 sm:px-4 w-fit">
                <?php echo esc_html($card_category); ?>
              </div>
            <?php endif; ?>
            <div class="text-primary text-[18px] sm:text-[20px] md:text-[22px] 2xl:text-[24px] mt-3 2xl:mt-4">
              <?php echo esc_html($card_title); ?>
            </div>

            <?php if (!empty($table_rows)) : ?>
              <div class="overflow-x-auto sm:mx-0 ">
                <table class="w-full mt-4 2xl:mt-5 text-[13px] sm:text-[14px] 2xl:text-[16px] border border-[#8F8D8C] min-w-[280px]">
                  <tbody>
                    <?php foreach ($table_rows as $row) : ?>
                      <?php
                      $rlabel = isset($row['label']) ? $row['label'] : '';
                      $rvalue = isset($row['value']) ? $row['value'] : '';
                      ?>
                      <tr>
                        <td class="border bg-[#E4F2DA] border-[#8F8D8C] px-3 sm:px-4 py-2 w-[90px] sm:w-[110px] 2xl:w-[140px] whitespace-nowrap"><?php echo esc_html($rlabel); ?></td>
                        <td class="border border-[#8F8D8C] px-3 sm:px-4 py-2">
                          <?php echo nl2br(esc_html($rvalue)); ?>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  <?php else : ?>
    <div class="w-full pt-[32px] sm:pt-[44px] 2xl:pt-[60px] pb-[60px] sm:pb-[100px] 2xl:pb-[146px] px-4 sm:px-6 md:px-8 text-center">
      <p class="text-primary"><?php esc_html_e('該当する製品がありません。', 'mytheme'); ?></p>
    </div>
  <?php endif; ?>
</section>
<!-- Product section end -->

<!-- Movie section start -->
<?php
$movie_mesh = mytheme_img_asset('product/movie-mesh');
$decoration_icon = mytheme_img_asset('top/product-icon');
$movie_placeholder = mytheme_img_asset('product/product');
$movie_query = new WP_Query(array(
  'post_type'      => 'product_movie',
  'post_status'    => 'publish',
  'posts_per_page' => 9,
  'orderby'        => 'menu_order date',
  'order'          => 'ASC',
  'meta_query'     => array(
    array(
      'key'     => MYTHEME_PRODUCT_MOVIE_VIDEO_URL_META,
      'value'   => '',
      'compare' => '!=',
    ),
  ),
));
?>
<section id="product-movie-section" class="movie-section pt-[40px] sm:pt-[55px] md:pt-[65px] 2xl:pt-[80px] pb-[60px] sm:pb-[100px] 2xl:pb-[146px] px-4 sm:px-6 md:px-10 lg:px-16 xl:px-[120px] 2xl:px-[200px] relative overflow-hidden">
  <img src="<?php echo esc_url($movie_mesh); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute top-0 left-1/2 -translate-x-1/2 w-[94%] h-auto object-cover -z-10" />
  <p class="text-[14px] sm:text-[16px] md:text-[18px] 2xl:text-[20px] w-fit gap-[10px] sm:gap-[12px] 2xl:gap-[14px] flex items-center text-secondary">
    <img src="<?php echo esc_url($decoration_icon); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-[22px] h-[22px] sm:w-[26px] sm:h-[26px] 2xl:w-[30px] 2xl:h-[30px]" />
    Movie
  </p>
  <h1 class="text-[24px] sm:text-[30px] md:text-[36px] lg:text-[40px] 2xl:text-[44px] text-primary w-fit mt-3 sm:mt-4 2xl:mt-5">当社製品の稼働中動画</h1>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-6 sm:gap-y-8 md:gap-y-10 2xl:gap-y-[40px] gap-x-4 sm:gap-x-6 md:gap-x-10 lg:gap-x-12 2xl:gap-x-[75px] mt-[32px] sm:mt-[44px] 2xl:mt-[60px]">
    <?php
    if ($movie_query->have_posts()) :
      while ($movie_query->have_posts()) :
        $movie_query->the_post();
        $video_url = get_post_meta(get_the_ID(), MYTHEME_PRODUCT_MOVIE_VIDEO_URL_META, true);
        $embed_url = function_exists('mytheme_youtube_embed_url') ? mytheme_youtube_embed_url($video_url) : '';
        $thumb_id = (int) get_post_meta(get_the_ID(), MYTHEME_PRODUCT_MOVIE_THUMBNAIL_META, true);
        if ($thumb_id) {
          $thumb_url = wp_get_attachment_image_url($thumb_id, 'large');
        }
        if (empty($thumb_url)) {
          $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
        }
        if (empty($thumb_url)) {
          $thumb_url = $movie_placeholder;
        }
    ?>
        <a href="#" class="product-movie-card block cursor-pointer" data-embed-url="<?php echo esc_attr($embed_url); ?>" aria-label="<?php echo esc_attr(get_the_title()); ?>">
          <div class="relative w-full aspect-[360/210] overflow-hidden bg-white drop-shadow-[0_5px_20px_rgba(0,0,0,0.1)]">
            <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="absolute inset-0 h-full w-full object-cover" loading="lazy" />
            <span class="absolute inset-0 flex items-center justify-center">
              <span class="w-[44px] sm:w-[52px] 2xl:w-[60px] aspect-square rounded-full bg-[#6EBA38] grid place-items-center flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="18.244" height="20.454" class="ml-[3px] w-[14px] h-auto sm:w-[16px] 2xl:w-[18px]" viewBox="0 0 18.244 20.454">
                  <g id="三角形_1" data-name="三角形 1" transform="translate(-367.675 -5368.523)" fill="#fff" stroke-linejoin="round" opacity="0.902">
                    <path d="M 369.6780700683594 5387.9765625 C 369.1957397460938 5387.9765625 368.6751098632812 5387.59326171875 368.6751098632812 5386.9736328125 L 368.6751098632812 5370.5263671875 C 368.6751098632812 5369.90673828125 369.1959228515625 5369.52294921875 369.678466796875 5369.52294921875 C 369.8507690429688 5369.52294921875 370.0178833007812 5369.5693359375 370.1752319335938 5369.66015625 L 384.4190673828125 5377.88427734375 C 384.870361328125 5378.14453125 384.9190979003906 5378.576171875 384.9190979003906 5378.75 C 384.9190979003906 5378.923828125 384.870361328125 5379.35546875 384.4192199707031 5379.61572265625 L 370.1751098632812 5387.83935546875 C 370.0176086425781 5387.9306640625 369.8504028320312 5387.9765625 369.6780700683594 5387.9765625 Z" stroke="none" />
                    <path d="M 369.6753540039062 5370.5263671875 L 369.6753845214844 5370.5263671875 C 369.67529296875 5370.5263671875 369.6752014160156 5370.5263671875 369.6751098632812 5370.5263671875 C 369.6751098632812 5370.5263671875 369.6751098632812 5370.5263671875 369.6751098632812 5370.5263671875 L 369.6751098632812 5386.9736328125 C 369.6751098632812 5386.9736328125 369.6751098632812 5386.9736328125 369.6751098632812 5386.9736328125 L 383.9190673828125 5378.75 L 369.6753540039062 5370.5263671875 M 369.678466796875 5368.52294921875 C 370.0113525390625 5368.52294921875 370.3529357910156 5368.60791015625 370.6751098632812 5368.7939453125 L 384.9190979003906 5377.01806640625 C 386.2524108886719 5377.78759765625 386.2524108886719 5379.71240234375 384.9190979003906 5380.48193359375 L 370.6751098632812 5388.70556640625 C 369.3417053222656 5389.474609375 367.6750793457031 5388.51318359375 367.6751098632812 5386.9736328125 L 367.6751098632812 5370.5263671875 C 367.6751098632812 5369.35888671875 368.6336975097656 5368.52294921875 369.678466796875 5368.52294921875 Z" stroke="none" fill="#fff" />
                  </g>
                </svg>
              </span>
            </span>
          </div>
          <p class="mt-[12px] sm:mt-[14px] 2xl:mt-[18px] text-[14px] sm:text-[16px] 2xl:text-[18px] text-primary -tracking-[0.06em]"><?php the_title(); ?></p>
        </a>
    <?php
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
  </div>
</section>
<!-- Movie section end -->

<!-- Video modal (flex + hidden so toggling hidden shows modal with correct layout) -->
<div id="product-movie-modal" class="fixed inset-0 z-[9999] flex hidden items-center justify-center bg-black/80 p-4" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="product-movie-modal-title">
  <div class="relative w-full max-w-[900px] aspect-video bg-black rounded overflow-hidden" onclick="event.stopPropagation()">
    <button type="button" class="absolute top-2 right-2 z-10 w-10 h-10 rounded-full bg-white/90 text-[#1f1c1a] flex items-center justify-center hover:bg-white" id="product-movie-modal-close" aria-label="<?php esc_attr_e('閉じる', 'mytheme'); ?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <line x1="18" y1="6" x2="6" y2="18" />
        <line x1="6" y1="6" x2="18" y2="18" />
      </svg>
    </button>
    <div id="product-movie-modal-no-video" class="absolute inset-0 hidden items-center justify-center bg-black text-white p-6 text-center text-[14px] sm:text-[16px]" aria-hidden="true"></div>
    <iframe id="product-movie-modal-iframe" class="w-full h-full" src="" title="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>

<!-- Enquiry section start -->
<?php get_template_part('template-parts/section-enquiry'); ?>
<!-- Enquiry section end -->

<!-- Footer section start -->
<?php get_template_part('template-parts/section-foot-cards'); ?>
<!-- Footer section end -->

<script>
  (function() {
    document.querySelectorAll('.product-card-gallery').forEach(function(gallery) {
      var main = gallery.querySelector('.product-card-main');
      var thumbs = gallery.querySelectorAll('.product-card-thumb-btn');
      if (!main || !thumbs.length) return;

      function getSelectedUrl() {
        return gallery.getAttribute('data-selected-url') || main.src;
      }

      function setSelectedUrl(url) {
        gallery.setAttribute('data-selected-url', url);
      }

      function setMainSrc(url) {
        main.src = url;
      }
      thumbs.forEach(function(btn) {
        var img = btn.querySelector('img');
        if (!img) return;
        btn.addEventListener('click', function() {
          setMainSrc(img.src);
          setSelectedUrl(img.src);
        });
        btn.addEventListener('mouseenter', function() {
          setMainSrc(img.src);
        });
        btn.addEventListener('mouseleave', function() {
          setMainSrc(getSelectedUrl());
        });
      });
    });

    var modal = document.getElementById('product-movie-modal');
    var iframe = document.getElementById('product-movie-modal-iframe');
    var noVideoEl = document.getElementById('product-movie-modal-no-video');
    var closeBtn = document.getElementById('product-movie-modal-close');
    if (modal && iframe) {
      function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        modal.style.display = '';
        modal.setAttribute('aria-hidden', 'true');
        iframe.src = '';
        if (noVideoEl) {
          noVideoEl.classList.add('hidden');
          noVideoEl.classList.remove('flex');
          noVideoEl.setAttribute('aria-hidden', 'true');
        }
      }

      function openModal(embedUrl, title) {
        iframe.setAttribute('title', title || '');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        modal.style.display = 'flex';
        modal.setAttribute('aria-hidden', 'false');
        if (embedUrl) {
          if (noVideoEl) {
            noVideoEl.classList.add('hidden');
            noVideoEl.classList.remove('flex');
            noVideoEl.setAttribute('aria-hidden', 'true');
          }
          iframe.classList.remove('hidden');
          iframe.src = embedUrl;
        } else {
          iframe.src = '';
          iframe.classList.add('hidden');
          if (noVideoEl) {
            noVideoEl.textContent = '<?php echo esc_js(__('動画のURLが設定されていません。', 'mytheme')); ?>';
            noVideoEl.classList.remove('hidden');
            noVideoEl.classList.add('flex');
            noVideoEl.setAttribute('aria-hidden', 'false');
          }
        }
        closeBtn && closeBtn.focus();
      }
      document.body.addEventListener('click', function(e) {
        var card = e.target && e.target.closest && e.target.closest('.product-movie-card');
        if (!card) return;
        e.preventDefault();
        e.stopPropagation();
        var url = (card.getAttribute('data-embed-url') || '').trim();
        var title = card.getAttribute('aria-label') || '';
        openModal(url, title);
      });
      if (closeBtn) closeBtn.addEventListener('click', closeModal);
      modal.addEventListener('click', function(e) {
        if (e.target === modal) closeModal();
      });
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeModal();
      });
    }
  })();
</script>

<?php
get_footer();
