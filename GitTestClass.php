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
	echo "add finish 3 in another place"
    }
    private function setUp(){
        echo "setUp";
    }
}
