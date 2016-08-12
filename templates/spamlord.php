<?php
	$html = file_get_contents('https://english.stanford.edu/people/faculty');

	// this regex handles more email address formats like a+b@google.com.sg, and the i makes it case insensitive
	$pattern = '/[a-z0-9_\-\+]+@[a-z0-9\-]+\.([a-z]{2,3})(?:\.[a-z]{2})?/i';

	// preg_match_all returns an associative array
	preg_match_all($pattern, $html, $matches);

	// the data you want is in $matches[0], dump it with var_export() to see it
	var_export($matches[0]);