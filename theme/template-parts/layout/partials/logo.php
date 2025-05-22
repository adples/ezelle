<?php
/**
 * Template part for displaying the logo
 */

$add_class = isset($args['class']) ? $args['class'] : '';
$color_mode = isset($args['color_mode']) ? $args['color_mode'] : '';
$logo_size_classes = isset($args['reveal']) ? 'w-[225px]' : 'w-[250px] lg:w-[200px] xl:w-[300px]  2xl:w-[350px]';
$footer = isset($args['footer']) ? true : false;

if( $color_mode === 'light' ){
	$color_mode = 'brightness-0 invert-100 drop-shadow-lg';
}
?>

<?php if ( get_theme_mod( 'site_logo' ) ): ?>
	<?php if($footer): ?>
		<img class="mx-auto max-w-[350px]" src="<?php echo esc_attr(get_theme_mod( 'site_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
	<?php else: ?>

		<a href="<?php echo esc_url( home_url( '/' )); ?>" class="text-2xl font-bold text-black <?php echo $add_class.' '.$color_mode ?>">
			<img class="<?php echo $logo_size_classes ?>" src="<?php echo esc_attr(get_theme_mod( 'site_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
		</a>

	<?php endif; ?>
<?php else : ?>
  <a class="font-bold text-black text-2xl" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
<?php endif; ?>
