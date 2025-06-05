<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ezelle
 */

?>

<footer id="colophon" class="bg-neutral py-10 xl:py-20">
	<div class="mx-auto px-6 container">
		<div class="flex justify-center">
			<div class="flex-none space-y-6 w-full md:w-10/12 2xl:w-7/12 xl:w-8/12 text-primary-dark text-center">
				<?php get_template_part( 'template-parts/layout/partials/logo', null, array('footer' => true)); ?>

				<?php if( get_field('phone','option') && get_field('email','option') ): ?>
					<div class="font-bold text-primary text-lg">
						<a href=""><?php echo get_field('phone','option') ?></a>
						|
						<a href=""><?php echo get_field('email','option') ?></a>
					</div>
				<?php endif; ?>

				<?php if( get_field('footer_lead','option') ): ?>
					<div>
						<?php echo get_field('footer_lead','option') ?>
					</div>
				<?php endif; ?>

				<div class="text-sm">
					&copy; <?php echo date("Y").' '.get_bloginfo().' All Rights Reserved'; ?> | <a href="<?php echo get_home_url().'/legal/'; ?>" class="text-primary">Terms & Conditions</a>
				</div>
			</div>
		</div>

	</div>
</footer><!-- #colophon -->
