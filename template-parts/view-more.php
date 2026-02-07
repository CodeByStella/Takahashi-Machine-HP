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

$class = trim('used-product-cta md:w-[266px] md:h-[56px] relative ' . $extra_class);
?>

<a class="<?php echo esc_attr($class); ?>" href="<?php echo esc_url($url); ?>">
  <span class="text-center w-full"><?php echo esc_html($label); ?></span>
  <svg class="absolute used-product-1/2 -translate-y-1/2 right-[29px]" xmlns="http://www.w3.org/2000/svg" width="7.588" height="10.934" viewBox="0 0 7.588 10.934">
    <path d="M431.405,1336.6l4.406,4.407-4.406,4.406" transform="translate(-430.345 -1335.541)" fill="none" stroke="#fff" stroke-width="3" />
  </svg>
</a>
