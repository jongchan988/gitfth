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
    }
    private function setUp(){
        echo "setUp";
    }
}