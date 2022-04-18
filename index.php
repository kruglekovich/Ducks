<?php
require_once 'mallardduck.php';
require_once 'redheadduck.php';
require_once 'rubberduck.php';
require_once 'decoyduck.php';

$duck1 = new MallardDuck();
$duck1->display();
$duck1->performQuack();
$duck1->swim();
$duck1->performfly();
echo '<hr><br>';

$duck2 = new RedHeadDuck();
$duck2->display();
$duck2->performQuack();
$duck2->swim();
$duck2->performfly();
echo '<hr><br>';

$duck3 = new RubberDuck();
$duck3->display();
$duck3->performQuack();
$duck3->swim();
$duck3->performfly();
echo '<hr><br>';

$duck4 = new DecoyDuck();
$duck4->display();
$duck4->performQuack();
$duck4->swim();
$duck4->performfly();
echo '<hr><br>';

?> 