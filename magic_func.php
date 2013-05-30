<?php

class magic {
	
	private $data = array();
	
	public function __set($name, $value)
	{
		$this->data[$name] = $value;
	}
	
	public function __get($name)
	{
		return $this->data[$name];
	}
	
}


class load{
	
	public function view($data)
	{
		echo $data;
	}
}

$obj = new magic;

$obj->load = new load();
$load = $obj->load;



class Index {
	
	
	function __construct($data)
	{
		$data->view('Hello There!');
	}
}

$con = new Index($load);

