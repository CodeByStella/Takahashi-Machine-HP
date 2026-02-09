<?php
$foot_1 = mytheme_img_asset('about/foot-1');
$foot_2 = mytheme_img_asset('about/foot-2');
$foot_3 = mytheme_img_asset('about/foot-3');

$foot_cards = array(
  array(
    'image' => $foot_1,
    'eyebrow' => 'Custom Made',
    'title' => '製作実績',
  ),
  array(
    'image' => $foot_2,
    'eyebrow' => 'Used Product',
    'title' => '中古製品',
  ),
  array(
    'image' => $foot_3,
    'eyebrow' => 'Support',
    'title' => 'サポートについて',
  ),
);
?>

<section class="section">
  <div class="grid grid-cols-3">
    <?php foreach ($foot_cards as $foot_card): ?>
      <div class="group relative aspect-[533/400] overflow-hidden">
        <img src="<?php echo esc_url($foot_card['image']); ?>" alt="" class="opacity-80 absolute inset-0 h-full w-full object-cover" />
        <div class="absolute inset-0 bg-black/75 transition-colors duration-300 group-hover:bg-black/25"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
          <p class="text-[16px] opacity-50"><?php echo esc_html($foot_card['eyebrow']); ?></p>
          <h3 class="mt-[20px] text-[30px]"><?php echo esc_html($foot_card['title']); ?></h3>
        </div>
        <span class="absolute left-[52px] group-hover:left-[31px] top-[52px] group-hover:top-[31px] h-[20px] w-[20px] border-l-[4px] border-t-[4px] border-secondary transition-all duration-300"></span>
        <span class="absolute right-[52px] group-hover:right-[31px] top-[52px] group-hover:top-[31px] h-[20px] w-[20px] border-r-[4px] border-t-[4px] border-secondary transition-all duration-300"></span>
        <span class="absolute left-[52px] group-hover:left-[31px] bottom-[52px] group-hover:bottom-[31px] h-[20px] w-[20px] border-b-[4px] border-l-[4px] border-secondary transition-all duration-300"></span>
        <span class="absolute right-[52px] group-hover:right-[31px] bottom-[52px] group-hover:bottom-[31px] h-[20px] w-[20px] border-b-[4px] border-r-[4px] border-secondary transition-all duration-300"></span>
      </div>
    <?php endforeach; ?>
  </div>
</section>
