<?php require('perso.class.php');

class Monstre extends Perso {

function __construct($ptVie, $ptEndurance, $sous, $ptForce, $armeEquipe) {
    $this->ptVie = $ptVie;
    $this->ptEndurance = $ptEndurance;
    $this->sous = $sous;
    $this->ptForce = $ptForce;
    $this->armeEquipe = $armeEquipe;
  }

}

