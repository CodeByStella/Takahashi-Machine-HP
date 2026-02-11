<?php
/**
 * Template part: View More button
 *
 * Args:
 * - url (string)   : Link URL
 * - label (string) : Button label
 * - class (string) : Extra classes (optional)
 */

$url = isset($args['url']) ? $args['url'] : '';
$label = isset($args['label']) ? $args['label'] : '';
$extra_class = isset($args['class']) ? $args['class'] : '';

if (empty($url) || empty($label)) {
  return;
}

$class = trim('relative inline-flex items-center justify-between rounded-full border border-white/15 bg-[#d2b07b] bg-cover bg-center bg-no-repeat h-[44px] w-full max-w-[200px] px-[14px] text-[12px] font-semibold tracking-[0.08em] text-white transition-all duration-300 hover:scale-105 sm:h-[48px] sm:max-w-[220px] sm:px-[16px] sm:text-[13px] md:h-[56px] md:max-w-[266px] md:px-[18px] md:text-[14px] ' . $extra_class);
?>

<a
  class="<?php echo esc_attr($class); ?>"
  href="<?php echo esc_url($url); ?>"
  style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/header/button_pattern.png'); ?>');"
>
  <span class="w-full text-center"><?php echo esc_html($label); ?></span>
  <svg class="absolute right-[16px] top-1/2 -translate-y-1/2 h-[8px] w-[6px] sm:right-[20px] sm:h-[9px] sm:w-[6.5px] md:right-[29px] md:h-[10.934px] md:w-[7.588px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.588 10.934">
    <path d="M431.405,1336.6l4.406,4.407-4.406,4.406" transform="translate(-430.345 -1335.541)" fill="none" stroke="#fff" stroke-width="3" />
  </svg>
</a>
