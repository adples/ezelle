<?php $navigation = \Log1x\Navi\Navi::make()->build('primary-nav'); ?>

<!-- Primary Navigation -->
<nav class="hidden lg:block bg-neutral lg:py-2 xl:py-6 w-full" aria-label="navigation">

	<div x-data="{ open: false }" class="flex lg:flex-row flex-col mx-auto px-6 container">

		<div class="flex flex-row justify-between items-center">

			<?php get_template_part( 'template-parts/layout/partials/logo'); ?>

		  <button class="lg:hidden rounded-lg focus:shadow-outline focus:outline-none" @click="open = !open">
			<svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
			  <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
			  <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
			</svg>
		  </button>

		</div>

		<ul id="primary-menu" :class="{'flex': open, 'hidden': !open}" class="hidden lg:flex lg:flex-row flex-col xl:flex-grow items-center 2xl:space-x-16 xl:space-x-12 mb-0 lg:ml-auto 2xl:ml-26 xl:ml-20">
			<?php get_template_part( 'template-parts/layout/simple-nav-alt/nav-menu', null, array('navigation' => $navigation)); ?>
		</ul>
	</div>
</nav>
<!-- /Primary Navigation -->

<!-- Reveal Navigation -->
<nav x-cloak x-data="{ show: false }"
	class="top-0 lg:-top-150 z-10 fixed bg-white/75 backdrop-blur-sm py-2 lg:py-0 border-primary border-b-1 w-full transition-all duration-500 navbar-reveal"
	:class="{ 'top-0 affix': show, 'top-0 lg:-top-150': !show}"
	@scroll.window="show = (window.pageYOffset < 150) ? false : true"
	aria-label="navigation">

	<div x-data="{ open: false }" class="flex lg:flex-row flex-col lg:justify-between lg:items-center mx-auto px-6 container">

		<div class="flex flex-row justify-between items-center">

		  <?php get_template_part( 'template-parts/layout/partials/logo', null, array('reveal' => true)); ?>

		  <button class="lg:hidden rounded-lg focus:shadow-outline focus:outline-none text-primary" @click="open = !open">
			<svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
			  <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
			  <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
			</svg>
		  </button>

		</div>

		<ul id="primary-menu" :class="{'flex': open, 'hidden': !open}" class="hidden lg:flex lg:flex-row flex-col flex-grow lg:justify-end space-x-4 lg:space-x-12 mb-0 pb-4 lg:pb-0">
			<?php get_template_part( 'template-parts/layout/simple-nav-alt/nav-menu', null, array('navigation' => $navigation, 'reveal' => true)); ?>
		</ul>
	</div>
</nav>
<!-- /Reveal Navigation -->
