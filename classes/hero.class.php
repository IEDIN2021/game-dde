<?php

require_once "arme.class.php";


class Hero extends Perso {
    protected $ptExp = null;
    protected $armes = [];

    function __construct($ptVie, $ptEndurance, $sous, $ptForce, $armeEquipe) {
      $this->ptVie = $ptVie;
      $this->ptEndurance = $ptEndurance;
      $this->sous = $sous;
      $this->ptForce = $ptForce;
      $this->armeEquipe = $armeEquipe;
    }

      // Retourne les points de vie du hero
      public function getPtvie(){
        return $this->ptVie;
      }
      // applique les points de vie du hero
      public function setPtvie($ptVie){
        $this->ptVie = $ptVie;
      }
/*
    public function attaque($monstre){
      $pointForceArme = $this->armeEquipe->getPtfor();
      $pointVieMonstre = $monstre->getPtvie();
      $pointdeVieRestant = $pointVieMonstre - $pointForceArme;
      $monstre->setPtvie($pointdeVieRestant);


    }
  */  
  
  }
