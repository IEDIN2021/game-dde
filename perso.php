<?php

abstract class Perso {
    protected $ptVie = null;
    protected $ptEndurance = null;
    protected $sous = null;
    protected $ptForce = null;
    protected $armeEquipe = null;
    protected $armes = [];

   /* public function __construct($arme) {
        $this->arme = $arme;
    }*/
}

class Hero extends Perso {
    protected $ptExp = null;

    function __construct() {
        $this->ptVie = 40;
        $this->ptEndurance = 46;
        $this->sous = 46;
        $this->ptForce = 46;
        $this->armeEquipe = "épée";
      }

}

class Monstre extends Perso {

    function __construct() {
        $this->ptVie = 50;
        $this->ptEndurance = 35;
//        $this->sous = 46;
        $this->ptForce = 35;
        $this->armeEquipe = "épée";
      }

}

class Pnj {
    private $sous = null;
    private $armes = [];
}
class Arme {
    public $ptFor = null;
    public $prix = null;
}
// defined weapons
$épée = new Arme(9,15);
$couteau = new Arme(5,3);
$ak47 = new Arme(28,25);
$m16 = new Arme(25,30);
$m84 = new Arme(150,50);

$tableauArmes = [$épée, $couteau,$ak47, $m16, $m84];
$armeSelectionnee = rand(0, count($tableauArmes) - 1);











//$hero = new Hero ();
    
$hero = new hero();
$monstre = new monstre();


var_dump($monstre);
//$hero->Arme;

?>