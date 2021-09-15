<?php

abstract class Perso {
    protected $ptVie = null;
    protected $ptEndurance = null;
    protected $sous = null;
    protected $ptForce = null;
    protected $armeEquipe = null;

   /* public function __construct($arme) {
        $this->arme = $arme;
    }*/
    
    //hero attaque l'ennemi
    public function attaque($ennemi){
        //var_dump($this->armeEquipe);
        $pointForceArme = $this->armeEquipe->getPtfor();
        $pointVieEnnemi = $ennemi->getPtvie();
        $pointdeVieRestant = $pointVieEnnemi - $pointForceArme;
        $ennemi->setPtvie($pointdeVieRestant);     
    }





}





