<?php
$foot_1 = mytheme_img_asset('about/foot-1');
$foot_2 = mytheme_img_asset('about/foot-2');
$foot_3 = mytheme_img_asset('about/foot-3');

$foot_cards = array(
  array(
    'image'   => $foot_1,
    'eyebrow' => 'Custom Made',
    'title'   => '製作実績',
    'url'     => home_url('/about/'),
  ),
  array(
    'image'   => $foot_2,
    'eyebrow' => 'Used Product',
    'title'   => '中古製品',
    'url'     => home_url('/product/?id=used'),
  ),
  array(
    'image'   => $foot_3,
    'eyebrow' => 'Support',
    'title'   => 'サポートについて',
    'url'     => home_url('/support/'),
  ),
);
?>

<section class="section px-0">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-0">
    <?php foreach ($foot_cards as $foot_card): ?>
      <a href="<?php echo esc_url($foot_card['url']); ?>" class="group relative block aspect-[533/400] overflow-hidden cursor-pointer">
        <img src="<?php echo esc_url($foot_card['image']); ?>" alt="" class="opacity-80 absolute inset-0 h-full w-full object-cover" />
        <!-- Mobile: lighter overlay by default, Desktop: darker with hover effect -->
        <div class="absolute inset-0 bg-black/45 transition-colors duration-300 md:bg-black/75 md:group-hover:bg-black/25 active:bg-black/30"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white px-4">
          <p class="text-[12px] sm:text-[13px] md:text-[14px] lg:text-[15px] 2xl:text-[16px] opacity-50 font-medium"><?php echo esc_html($foot_card['eyebrow']); ?></p>
          <h3 class="mt-[12px] sm:mt-[14px] md:mt-[16px] lg:mt-[18px] 2xl:mt-[20px] text-[22px] sm:text-[24px] md:text-[26px] lg:text-[28px] 2xl:text-[30px] text-center font-bold"><?php echo esc_html($foot_card['title']); ?></h3>
        </div>
        <!-- Top-left corner: inward on mobile, animates on desktop hover -->
        <span class="absolute left-[24px] sm:left-[28px] md:left-[35px] lg:left-[42px] 2xl:left-[52px] md:group-hover:!left-[25px] lg:md:group-hover:!left-[28px] 2xl:md:group-hover:!left-[31px] top-[24px] sm:top-[28px] md:top-[35px] lg:top-[42px] 2xl:top-[52px] md:group-hover:!top-[25px] lg:md:group-hover:!top-[28px] 2xl:md:group-hover:!top-[31px] h-[15px] sm:h-[16px] md:h-[17px] lg:h-[18px] 2xl:h-[20px] w-[15px] sm:w-[16px] md:w-[17px] lg:w-[18px] 2xl:w-[20px] border-l-[3px] md:border-l-4 border-t-[3px] md:border-t-4 border-secondary transition-all duration-300"></span>
        <!-- Top-right corner -->
        <span class="absolute right-[24px] sm:right-[28px] md:right-[35px] lg:right-[42px] 2xl:right-[52px] md:group-hover:!right-[25px] lg:md:group-hover:!right-[28px] 2xl:md:group-hover:!right-[31px] top-[24px] sm:top-[28px] md:top-[35px] lg:top-[42px] 2xl:top-[52px] md:group-hover:!top-[25px] lg:md:group-hover:!top-[28px] 2xl:md:group-hover:!top-[31px] h-[15px] sm:h-[16px] md:h-[17px] lg:h-[18px] 2xl:h-[20px] w-[15px] sm:w-[16px] md:w-[17px] lg:w-[18px] 2xl:w-[20px] border-r-[3px] md:border-r-4 border-t-[3px] md:border-t-4 border-secondary transition-all duration-300"></span>
        <!-- Bottom-left corner -->
        <span class="absolute left-[24px] sm:left-[28px] md:left-[35px] lg:left-[42px] 2xl:left-[52px] md:group-hover:!left-[25px] lg:md:group-hover:!left-[28px] 2xl:md:group-hover:!left-[31px] bottom-[24px] sm:bottom-[28px] md:bottom-[35px] lg:bottom-[42px] 2xl:bottom-[52px] md:group-hover:!bottom-[25px] lg:md:group-hover:!bottom-[28px] 2xl:md:group-hover:!bottom-[31px] h-[15px] sm:h-[16px] md:h-[17px] lg:h-[18px] 2xl:h-[20px] w-[15px] sm:w-[16px] md:w-[17px] lg:w-[18px] 2xl:w-[20px] border-b-[3px] md:border-b-4 border-l-[3px] md:border-l-4 border-secondary transition-all duration-300"></span>
        <!-- Bottom-right corner -->
        <span class="absolute right-[24px] sm:right-[28px] md:right-[35px] lg:right-[42px] 2xl:right-[52px] md:group-hover:!right-[25px] lg:md:group-hover:!right-[28px] 2xl:md:group-hover:!right-[31px] bottom-[24px] sm:bottom-[28px] md:bottom-[35px] lg:bottom-[42px] 2xl:bottom-[52px] md:group-hover:!bottom-[25px] lg:md:group-hover:!bottom-[28px] 2xl:md:group-hover:!bottom-[31px] h-[15px] sm:h-[16px] md:h-[17px] lg:h-[18px] 2xl:h-[20px] w-[15px] sm:w-[16px] md:w-[17px] lg:w-[18px] 2xl:w-[20px] border-b-[3px] md:border-b-4 border-r-[3px] md:border-r-4 border-secondary transition-all duration-300"></span>
      </a>
    <?php endforeach; ?>
  </div>
</section>