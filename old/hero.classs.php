<?php require_once('person.class.php'); 

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

}