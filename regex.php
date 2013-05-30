<?php

$str = "<title>Hello</title>";

preg_match('/<title>(.*)<\/title>/i', $str, $match);

//print_r( $match );
//echo $match[1];