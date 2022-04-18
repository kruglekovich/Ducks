<?php
require_once 'duck.php';
require_once 'mutequack.php';
require_once 'flynoway.php';

class DecoyDuck extends Duck {
	public function __construct(){
		$this->quackBehavior = new mutequack();
		$this->flyBehavior = new flynowawy();
	}

	public function display (){
		echo 'я уточка приманка<br>';
	}
}

?>