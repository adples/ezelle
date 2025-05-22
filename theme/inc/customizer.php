<?php
	function site_customizer( $wp_customize ){
		$wp_customize->add_setting( 'site_logo' );

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'site_logo',
				array(
					'label'      => 'Upload a logo',
					'section'    => 'title_tagline',
					'settings'   => 'site_logo'
				)
			)
		);

		$wp_customize->add_setting( 'site_branded_vehicle' );

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'site_branded_vehicle',
				array(
					'label'      => 'Upload branded vehicle emblem',
					'section'    => 'title_tagline',
					'settings'   => 'site_branded_vehicle'
				)
			)
		);
	}
	add_action('customize_register', 'site_customizer');
?>
