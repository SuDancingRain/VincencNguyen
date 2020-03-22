<?php
/**
 * Basic of Obejctive Programming
 */
require 'class/ivozidlo.php';
require 'class/vozidla.php';
require 'class/vozidlo.php';

$f = new vozidlo();

var_dump($f);

/**
 * static property in class
 */
vozidlo::$auto = "skoda";
/**
 * edit inside the class
 */

$f->auta = 100;

var_dump(vozidlo::$auto);
var_dump($f->auta);