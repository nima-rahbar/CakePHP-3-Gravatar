<?php
/**
 * User: Nima Rahbar
 * Email: me@nimarahbar.com
 * Date: 9/10/2017
 * Time: 5:32 PM
 */

namespace App\View\Helper;

use Cake\View\Helper;

class GravatarHelper extends Helper {

	public function get_gravatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
		$url = 'https://www.gravatar.com/avatar/';
		$url .= md5( strtolower( trim( $email ) ) );
		$url .= "?s=$s&d=$d&r=$r";
		if ( $img ) {
			$url = '<img src="' . $url . '"';
			foreach ( $atts as $key => $val )
				$url .= ' ' . $key . '="' . $val . '"';
			$url .= ' />';
		}
		return $url;
	}
}