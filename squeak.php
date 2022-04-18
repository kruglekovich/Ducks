<?php
require_once 'quackbehavior.php';

class Squeakk implements QuackBehavior {
	public function quack(){
		echo 'уточка пищит<br>';
	}
}

?>