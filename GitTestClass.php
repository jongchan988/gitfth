<?php
class GitTestClass{
    private  $test;
    public function __construct($array)
    {
        $this->test = $array;
        $this->setUp();
    }
    private function setUp(){
        echo "setUp";
    }
}