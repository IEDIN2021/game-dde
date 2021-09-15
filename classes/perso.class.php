<?php
// Class mère : Perso.
abstract class Perso {
    protected $ptVie = null;
    protected $ptEndurance = null;
    protected $sous = null;
    protected $ptForce = null;
    protected $armeEquipe = null;
    
    // Hero ou monstre attaque l'ennemi.
    public function attaque($ennemi){
        $pointForceArme = $this->armeEquipe->getPtfor();
        $pointVieEnnemi = $ennemi->getPtvie();
        $pointdeVieRestant = $pointVieEnnemi - $pointForceArme;
        $ennemi->setPtvie($pointdeVieRestant);     
    }





}





