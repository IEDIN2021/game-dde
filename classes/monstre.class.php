<?php

require_once "arme.class.php";

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
  
  public function setPtvie($ptVie){
     $this->ptVie = $ptVie;
  }

}

//weapons
$epee = new Arme(9,15);
$couteau = new Arme(5,3);
$ak47 = new Arme(28,25);
$m16 = new Arme(25,30);
$m84 = new Arme(150,50);

$tableauArmes = [$epee, $couteau, $ak47, $m16, $m84];
$armeSelectionnee = rand(0, count($tableauArmes) - 1);
