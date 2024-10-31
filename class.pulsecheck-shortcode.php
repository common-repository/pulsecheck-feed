<?php

class Pulsecheck_Shortcode{

	function enqueue_javascripts(){
		wp_enqueue_script('pulsecheck-plugin','https://pulsecheck.co.za/newHome/js/iframeResizer.min.js',array('jquery'),'1.0',false);
	}

	function generate_iframe( $atts, $content){

		$atts = shortcode_atts(array(
			'width' => "100%",
			'quality' => 'full',
			'number_images' => 1,
			'feed_id' => 0), $atts);

		if($atts['quality']=='full'){
			$atts['quality'] = 0;
		}
		else if($atts['quality']=='icon'){
			$atts['quality'] = 1;
		}
		$api_key = get_option('api-key');

		$srcFeed = "https://www.pulsecheck.co.za/api/feed/";
		$srcFeed .= $api_key . '/'. $atts['feed_id']. '?' . 'quality=' . $atts['quality'] . '&numimages=' . $atts['number_images'];

		return '<iframe id="iFrameResizer0" style="border: none;" class="Pulsecheck_Shortcode" src="'. $srcFeed .'" width ="' . $atts['width'] . '" ></iframe>
				<script> iFrameResize({log:true, checkOrigin: false})</script>';
	}
}