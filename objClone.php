<?php

class Test 
{
	public $a;
	
	public $b;
	
	
	public function __construct($a, $b)
	{
		$this->a = $a;
		$this->b = $b;
	}
}

$obj1 = new Test("atul", "php");

$obj2 = $obj1;

//echo $obj1->a = "no ";

print_r($obj1);

print_r($obj2);