<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ezelle
 */

?>

<header id="masthead" class="relative">

	<div class="hidden xl:block relative mx-auto px-6 pt-14 container">
		<div class="top-0 right-6 z-2 absolute bg-secondary shadow-lg px-6 xl:px-8 py-3 xl:py-6 border-2 border-white border-t-0 rounded-bl-xl rounded-br-xl w-70 xl:w-80 font-display text-primary-dark">
			<p class="mb-3">Learn how our tailored IT services can help support and protect your business.</p>
			<?php if( get_field('phone','option') ): ?>
				<div class="flex items-center text-primary lg:text-3xl xl:text-4xl"><span class="me-2 icon-[mdi--phone]"></span> <?php echo get_field('phone','option') ?></div>
			<?php endif; ?>
		</div>
	</div>

	<?php get_template_part( 'template-parts/layout/simple-nav-alt/nav'); ?>
</header><!-- #masthead -->
