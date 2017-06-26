<?php

namespace Base\Models;

class Filters {
	
	public static function ip() {
		if(getenv('HTTP_CLIENT_IP')) { 
			$ip = getenv('HTTP_CLIENT_IP');
		} else if(getenv('HTTP_X_FORWARDED_FOR')) { 
			$ip = getenv('HTTP_X_FORWARDED_FOR');
		} else if(getenv('HTTP_X_FORWARDED')) { 
			$ip = getenv('HTTP_X_FORWARDED');
		} else if(getenv('HTTP_FORWARDED_FOR')) {
			$ip = getenv('HTTP_FORWARDED_FOR');
		} else if(getenv('HTTP_FORWARDED')) {
			$ip = getenv('HTTP_FORWARDED');
		} else { 
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		 
		return $ip;
	}
	
}