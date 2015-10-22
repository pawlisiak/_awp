<?php

// Shortcode 'amp-ad' inserts AMP HTML component <amp-ad> - container to display an ad
// You can customize it setting attributes: type, src, data-foo-bar, width, height
// For more informations check the specification: https://github.com/ampproject/amphtml/blob/master/builtins/amp-ad.md
// Now shortcode supports only AdSense
function amp_cta_shortcode($atts) {
	if (isset($atts['type']) && $atts['type'] == 'adsense'){
		if (isset($atts['data-ad-client']) && isset($atts['data-ad-slot'])) {
			if (isset($atts['width']) && isset($atts['height']))
				$output = '<amp-ad width=' . $atts['width'] . ' height=' . $atts['height'];
			else
				$output = '<amp-ad width=300 height=200';

			$output .= ' type="adsense" data-ad-client="' . $atts['data-ad-client'] . '" data-ad-slot="' . $atts['data-ad-slot'] . '"></amp-ad>';
			return $output;
		}
	}
}
add_shortcode('amp-ad', 'amp_cta_shortcode');
