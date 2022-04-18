<?php
require_once 'quackbehavior.php';

class MuteQuack implements QuackBehavior {
	public function quack() {
		echo 'уточка не издает звуков<br>';
	}
}

?>