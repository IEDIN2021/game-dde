<?php require_once('person.class.php');

class Arme {
    public $ptFor = null;
    public $prix = null;

    function __construct($ptFor, $prix) {
        $this->ptFor = $ptFor;
        $this->prix = $prix;
    }
}