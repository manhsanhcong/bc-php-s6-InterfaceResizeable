<?php
/**
 * Created by PhpStorm.
 * User: hoanltm
 * Date: 02/11/2018
 * Time: 08:42
 */

Class Resize
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function show()
    {
        return "Hello . My name is $this->name <br>";
    }
}