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
}

//weapons
$epee = new Arme(9,15);
$couteau = new Arme(5,3);
$ak47 = new Arme(28,25);
$m16 = new Arme(25,30);
$m84 = new Arme(150,50);

$tableauArmes = [$epee, $couteau, $ak47, $m16, $m84];
$armeSelectionnee = rand(0, count($tableauArmes) - 1);