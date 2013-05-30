<?php

class User {
	
	protected static $instance = NULL;
	
	public function getInstance()
	{
		if( !isset( static::$instance) )
		{
			static::$instance = new static;
		}
		return static::$instance;
	}
	
	public function __clone(){}
	
	
}

class foo extends User{};

$foo = foo::getInstance();