<?php

if (!function_exists('formatar_data_mysql')) {

	function formatar_data_mysql($date) {
		if (isset($date) && !empty($date)) {
			$date = implode("-",array_reverse(explode("/",$date))); 
		}
		return $date;
	}
}