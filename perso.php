<?php

abstract class Perso {
    protected $ptVie = null;
    protected $ptEndurance = null;
    protected $sous = null;
    protected $ptForce = null;
    protected $armeEquipe = null;
    protected $armes = [];

    public function __construct($arme) {
        $this->arme = $arme;
    }
}

class Hero extends Perso {
    protected $ptExp = null;

}

class Monstre extends Perso {

}

class Pnj {
    private $sous = null;
    private $armes = [];
}
class Arme {
    private $nomArme = null;
    private $ptFor = null;
    private $prix = null;
    //protected $armes = [];
}
// defined weapons
$epe = new Arme("Epe",9,15);
$couteau = new Arme("Couteau",5,3);
$ak47 = new Arme("AK47",28,25);
$m16 = new Arme("M16",25,30);
$m84 = new Arme("M84",150,50);

$tableauArmes = [$epe, $couteau,$ak47, $m16, $m84];
$armeSelectionnee = rand(0, count($tableauArmes) - 1);











$hero = new Hero($epe);

var_dump($hero);
$hero->Arme;