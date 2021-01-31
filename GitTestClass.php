<?php
class GitTestClass{
    private  $test;
	private $test2;
    public function __construct($array)
    {
        $default = [];
        $array = array_push($default, $array);
        $this->test = $array;
        $this->setUp();
        echo "fnish";
        echo "add finish 2";

	echo "add finish 3 in another place"
        echo "add finish 3";

    }
    private function setUp(){
        echo "setUp";
    }
	private function setDown(){
		echo "setDown";
	}
}
