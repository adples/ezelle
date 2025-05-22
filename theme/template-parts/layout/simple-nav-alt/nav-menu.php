<?php
/**
 * Template part for displaying the nav menu
 *
 * icon-[mdi--home] icon-[mdi--drivers-license-outline] icon-[mdi--home-roof] icon-[mdi--information-outline] icon-[mdi--phone] icon-[mdi--image-filter-hdr]
 */
?>

<?php
$navigation = isset($args['navigation']) ? $args['navigation'] : '';
$reveal = isset($args['reveal']) ? $args['reveal'] : '';

$link_classes = 'flex items-center mt-2 md:mt-0 py-2 md:py-4 focus:shadow-outline focus:outline-none font-display text-primary uppercase';

$add_link_classes = isset($args['reveal']) ? 'text-sm lg:text-base' : ' text-sm lg:text-base xl:text-xl';
$dropdown_classes = isset($args['reveal']) ? ' border-t-1 border-primary lg:bg-white/75 lg:backdrop-blur-sm rounded-b-xl text-primary text-sm' : 'bg-neutral rounded-b-xl text-primary';
?>

<?php foreach ( $navigation->all() as $item ) : ?>
	<li class="<?php echo $item->classes; ?> <?php echo $item->active ? 'current-item' : ''; ?>">
		<?php if ( $item->children ) : ?>
			<div @click.away="open = false" class="relative" x-data="{ open: false }">
				<button @click="open = !open" class="<?php echo $link_classes.' '.$add_link_classes ?>">
				<?php
				if (str_contains($item->classes, 'mdi--') && !$reveal):
					echo '<span class="block mr-2 size-4 lg:size-6 icon-['.$item->classes.']"></span>';
				endif;
				echo $item->label;
				?>

				  <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline mt-1 md:-mt-1 ml-1 w-4 h-4 transition-transform duration-200 transform"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>

				</button>

				<div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="<?php echo $dropdown_classes ?> left-0 z-5 md:absolute w-full md:w-48 overflow-hidden origin-top-right">
				  <ul class="space-y-2 px-2 xl:px-4 py-2">
					  <?php foreach ( $item->children as $child ) : ?>
						  <li class="<?php echo $child->classes; ?> <?php echo $child->active ? 'current-item' : ''; ?>">
							  <a href="<?php echo $child->url; ?>" class="block bg-transparent">
								  <?php echo $child->label; ?>
							  </a>
						  </li>
					  <?php endforeach; ?>
				  </ul>
				</div>

			</div>

		<?php else: ?>

			<a href="<?php echo $item->url; ?>" class="<?php echo $link_classes.' '.$add_link_classes ?>">

				<?php
				if (str_contains($item->classes, 'mdi--') && !$reveal):
					echo '<span class="block mr-2 size-4 lg:size-6 icon-['.$item->classes.']"></span>';
				endif;
				echo $item->label;
				?>
			</a>

		<?php endif ?>
	</li>
<?php endforeach; ?>
