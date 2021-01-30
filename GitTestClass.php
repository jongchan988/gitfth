<?php
class GitTestClass{
    private  $test;
    public function __construct($array)
    {
        $defaults = [];
        $array = array_push($defaults, $array);
        $this->test = $array;
        $this->setUp();
    }
    private function setUp(){
        echo "setUp";
    }
}