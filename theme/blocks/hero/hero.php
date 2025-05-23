<?php
/**
 * Process step template.
 *
 * @param array $block The block settings and attributes.
 */

$block_name = 'hero';

$namespace = 'acf';

$block_name = 'wp-block-' . $namespace . '-' . $block_name;

// Block #id
$anchor = ( empty( $block['anchor'] ) ) ? null : 'id=' . $block['anchor'];

// Additional editor classes including $block['style'] defined in block.json
$additional_classes = $block['className'] ?? '';

// Default classes
$hero_default_classes = 'relative hero-home wp-block-acf-wrapper overflow-hidden pb-12 lg:pb-0';

//Background Video
$show_video = get_field('show_video') && get_field('video') ? true : false;

// Create array $all_classes and implode
$all_classes = array(
	$block_name,
	$additional_classes,
	$hero_default_classes,
);

$classes = implode( ' ', $all_classes );
?>

<div <?php echo esc_attr( $anchor ); ?> class="<?php echo $classes ?>">

	<div class="mx-auto px-6 container">
		<div class="flex lg:flex-row flex-col gap-6">
			<div class="relative lg:order-1 pt-10 lg:pt-0 w-full lg:basis-8/15 2xl:basis-9/15">
				<div class="block lg:top-0 lg:bottom-0 left-6 z-1 lg:absolute bg-cover bg-no-repeat bg-center img-extend-r">

					<?php if( $show_video ): ?>
					<div class="rounded-xl lg:rounded-none video-wrapper">
					<?php
					$x='https://player.vimeo.com/video/';
					$y='&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;autoplay=1&amp;loop=1&amp;background=1';
					$vimeo = get_field('video');
					$vimeo_url = $x.$vimeo.$y;
					?>

					<iframe id="vimeo" src="<?php echo esc_url($vimeo_url) ?>" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				<?php endif ?>

				</div>
			</div>
			<div class="lg:mb-[8rem] 2xl:mb-[6.5rem] lg:pt-10 xl:pt-20 pb-10 w-full lg:basis-7/15 2xl:basis-6/15">
				<InnerBlocks class="space-y-4" />
			</div>
		</div>
	</div>
	<?php if( have_rows('icon_row') ): ?>
		<div class="lg:-top-[8rem] 2xl:-top-[6.5rem] relative mx-auto px-6 container icon-row extend-l">
			<div class="shadow-xl rounded-xl lg:rounded-tl-none rounded-tr-xl lg:rounded-bl-none rounded-br-xl overflow-hidden">
			<div class="z-3 relative bg-secondary py-6 border-2 border-white lg:border-l-0 rounded-xl lg:rounded-tl-none rounded-tr-xl lg:rounded-bl-none rounded-br-xl">
				<div class="gap-y-4 lg:gap-0 space-y-4 lg:space-y-0 grid grid-cols-10">
					<?php while( have_rows('icon_row') ): the_row(); ?>
						<div class="col-span-10 sm:col-span-5 lg:col-span-2 pb-6 lg:pb-0 border-white/50 lg:border-0 last:border-0 border-b">
							<div class="space-y-2 px-2 lg:px-0 text-center">
								<?php if(get_sub_field('icon')): ?>
									<img class="block mx-auto !max-w-20" src="<?php echo esc_url(get_sub_field('icon')['url']) ?>" alt="<?php echo esc_attr(get_sub_field('icon')['alt']) ?>" />
								<?php endif; ?>
								<?php if(get_sub_field('title')): ?>
									<h3 class="font-display text-primary-dark text-lg 2xl:text-xl"><?php echo get_sub_field('title'); ?></h3>
								<?php endif; ?>
								<?php if(get_sub_field('text')): ?>
									<div class="[&>p]:mb-0 px-2 xl:px-6 lg:[&>p]:text-sm xl:[&>p]:text-base">
										<?php echo get_sub_field('text'); ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
			</div>
		</div>
	<?php endif; ?>
</div>

