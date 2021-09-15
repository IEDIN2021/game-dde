<?php
//Class fille : Arme.
class Arme {
    private $ptFor = null;
    private $prix = null;

    function __construct($ptFor, $prix) {
        $this->ptFor = $ptFor;
        $this->prix = $prix;
    }

    // Retourne les points de force de l'arme.
    public function getPtfor(){
        return $this->ptFor;
    }
}