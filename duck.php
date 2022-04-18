<?php

abstract class Duck {
	protected $quackBehavior;
	protected $flyBehavior;

	public function swim () {
		echo 'Буль-буль<br>';
	}

	abstract public function display();

    public function performQuack() {
    	$this->quackBehavior->quack();
    } 

    public function performfly() {
    	$this->flyBehavior->fly();
    }
} 

?>