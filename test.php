<?php
error_reporting(E_ALL);
$value = 3;
$value *= 1;

//echo $value;

function head()
{
	return array(
	'height' => 200
	);
}

echo head()->height;