<?php
class GitTestClass{
    private  $test;
    public function __construct($array)
    {
        $default = [];
        $array = array_push($default, $array);
        $this->test = $array;
        $this->setUp();
        echo "fnish";
        echo "add finish 2";
        echo "add finish 3";
        echo "add finish 4";
    }
    private function setUp(){
        echo "setUp";
    }
    private function setDown(){
        echo "setDown";
    }
}