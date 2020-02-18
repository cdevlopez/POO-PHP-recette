<?php

class Ustensile {
    private $name;
    private $utility;
    private $materiaux;

/* **************** CONSTRUCT ********************/
public function __construct($name, $utility, $materiaux) {
    $this->setName($name);
    $this->setUtility($utility);
    $this->setMateriaux($materiaux);
}
/* **************** GETTERS ********************/
/*
* return $name
* type : string
*/
public function getName() {
    return $this->name;
}
/*
* return $utility
* type : string
*/
public function getUtility() {
    return $this->utility;
}
/*
* return $materiaux
* type : string
*/
public function getMateriaux() {
    return $this->materiaux;
}
/* **************** SETTERS ********************/
/*
* set value $name
* type : string
*/
public function setName($name) {
    $this->name = $name;
}
/*
* set value $utility
* type : string
*/
public function setUtility($utility) {
    $this->utility = $utility;
}
/*
* set value $materiaux
* type : string
*/
public function setMateriaux($materiaux) {
    $this->materiaux = $materiaux;
}
}

/* Phase de test pouvant être effacé par la suite */
//$test = new Ustensile("spatule", "touiller", "bois");
//echo $test->getName() . '<br>';
//echo $test->getUtility() . '<br>';
//echo $test->getMateriaux();