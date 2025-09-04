<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EA_Academy
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info max-width flex flex-wrap space-between fade-in-up">
			<div class="col-40">
				<h2><?php echo get_field('footer_heading'); ?></h2>
				<h4>Contact Us</h4>
				<?php echo get_field('footer_contact_details'); ?>
			</div>
			<div class="col-40">
				<h4>Stay Up To Date</h4>
				<?php echo do_shortcode('[gravityform id="2" title="false" description="true" ajax="true"]'); ?>
			</div>
			<div class="col-20">
				<img src="/wp-content/uploads/2025/09/logo-icon.svg">
			</div>
		</div>
		<div class="bottom-footer">
			<div class="max-width flex space-between align-center">
				<div class="legal">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'legal-menu',
						)
					); ?>
				</div>
				<div class="coffee flexp">
					<a href="https://www.coffeecreativestudio.com/" target="_blank" rel="nofollow">2025 Brew by Coffee Creative</a>
					<img src="/wp-content/uploads/2025/09/coffee.svg">
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
