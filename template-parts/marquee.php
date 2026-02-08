<?php

/**
 * Template part: Marquee text
 *
 * Args:
 * - text (string) : Marquee text
 */

$text = isset($args['text']) ? $args['text'] : '';
if ($text === '') {
	return;
}
?>

<div class="absolute left-0 top-0 w-[200%] marquee pointer-events-none font-semibold tracking-[0.12em] text-[#B58522] text-[150px]">
	<span><?php echo esc_html($text); ?></span>
	<span><?php echo esc_html($text); ?></span>
</div>