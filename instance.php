<?php
class a {
    public static $instance;
    public function __construct() {
        self::$instance = $this;
    }
}

echo a::$instance;