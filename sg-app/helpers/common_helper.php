<?php

if (!function_exists('asset_url'))
{
	function asset_url()
	{
		return base_url('/') . 'sg-assets/';
	}
}

if (!function_exists('get_friendly_name'))
{
	function get_friendly_name($text = '')
	{
		return ucwords(preg_replace('/[-_]/i', ' ', $text));
	}	
}

if (!function_exists('pre'))
{
	function pre($data = [])
	{
		echo '<pre>'; print_r($data); die;
	}
}