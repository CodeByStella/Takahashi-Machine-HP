<?php
/**
 * Footer template.
 *
 * @package mytheme
 */
?>

</main>

<footer class="site-footer">
	<div class="container site-footer__inner">
		<div>
			<p style="margin:0 0 6px; font-weight:800; letter-spacing:.02em;"><?php bloginfo( 'name' ); ?></p>
			<p class="site-footer__muted" style="margin:0 0 12px;"><?php bloginfo( 'description' ); ?></p>
			<p class="site-footer__muted" style="margin:0;">
				<?php esc_html_e( 'This is a custom theme scaffold. Replace placeholder text/images with your real content.', 'mytheme' ); ?>
			</p>
		</div>

		<nav class="footer-nav" aria-label="<?php esc_attr_e( 'Footer menu', 'mytheme' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'container'      => false,
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</nav>
	</div>

	<div class="container footer-bottom">
		<div>
			&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

