<?php

function calculateGap($input){
	if($input !== 0 || $input !== NULL ){
		$gap = $input*2;
	} else{
		$gap = 0;
	}
	return $gap;
}

function list_icon($icon, $color='text-primary') {
	$icon_color = $color;
	$string = '<span class="icon-wrapper '.$icon_color.'"><span class="'.$icon.'"></span></span>';

	return $string;
}

function btn_icon($icon, $size) {
   $string = '<span class="top-1/2 left-1 absolute -translate-y-1/2 '.$icon.' '.$size.'"></span>';

   return $string;
}

// function form_submit_button( $button, $form ) {
// 	if(is_front_page( )){
// 		$icon = '<span class="icon-[mdi--arrow-top-right]"></span>';
// 		return '<button id="gform_submit_button_{'.$form['id'].'}">Send'.$icon.'</button>';
// 	}
// 	return;
// }

function form_submit_button( $button, $form ) {

		$icon = '<span class="wp-block-button__link-icon fill-white" aria-hidden="true"><svg viewBox="0 0 13 12" xmlns="http://www.w3.org/2000/svg"><path d="M1.2,0 L2.22044605e-14,1 L4.5,6 L2.22044605e-14,11 L1.1,12 L6.6,6 L1.2,0 Z M7.2,0 L6.1,1 L10.6,6 L6.1,11 L7.2,12 L12.7,6 L7.2,0 L7.2,0 Z"></path></svg></span>';
		return "<div class='wp-block-button flex justify-end w-full has-icon__next'><button class='inline-flex items-center bg-primary px-6 py-3 rounded-full font-semibold text-white uppercase has-default-gradient-gradient-background' id='gform_submit_button_{$form['id']}'><span>Send&nbsp;&nbsp;</span>$icon</button></div>";

}
add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );

?>
