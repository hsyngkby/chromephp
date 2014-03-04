<?php

if ( ! function_exists('clog'))
{
	function clog($message = '')
	{
		return Clog::Log($message);
	}
}
