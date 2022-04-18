<?php
require_once 'duck.php';
require_once 'squeak.php'; 
require_once 'flynoway.php';

class RubberDuck extends Duck {
	public function __construct(){
		$this->quackBehavior = new Squeakk();
		$this->flyBehavior = new flynowawy();
	}

	public function display (){
		echo 'я резиновая уточка<br>';
	}
}

?>