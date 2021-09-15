<?php

require_once "arme.class.php";
//class fille
class Monstre extends Perso {

function __construct($ptVie, $ptEndurance, $sous, $ptForce, $armeEquipe) {
    $this->ptVie = $ptVie;
    $this->ptEndurance = $ptEndurance;
    $this->sous = $sous;
    $this->ptForce = $ptForce;
    $this->armeEquipe = $armeEquipe;
  }

  // Retourne les points de vie du monstre
  public function getPtvie(){
    return $this->ptVie;

  }
  // Applique les points de vie du monstre
  public function setPtvie($ptVie){
     $this->ptVie = $ptVie;
  }

}