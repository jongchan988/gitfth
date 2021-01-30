<?php
class GitTestClass{
    private  $test;
    public function __construct($array)
    {
        $defaul = [];
        $array = array_push($defaul, $array);
        $this->test = $array;
        $this->setUp();
    }
    private function setUp(){
        echo "setUp";
    }
}