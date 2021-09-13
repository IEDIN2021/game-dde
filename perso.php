<?php
Class Perso {
    $ptVie = null;
    $ptEnd = null;
    $sous = null;
    $ptFor = null;
    $ptExp = null;
    $armeEquipe = null;
    $armes = [];

    public function __construct($arme) {
        this.arme = $arme;
    }
}

class Hero extends Perso {
    $ptVie = null;
    $ptEnd = null;
    $sous = null;
    $ptFor = null;
    $ptExp = null;
    $armeEquipe = null;
    $armes = [];
}
class Monstre extends Perso {
    $ptVie = null;
    $ptEnd = null;
    $sous = null;
    $ptFor = null;
    $armeEquipe = null;
    $armes = [];
}
class Pnj extends Perso {
    $sous = null;
    $armes = [];
}












$epe = new Arme(10, 5);
$ak47 = new Arme(5, 2);
$couteau = new Arme(5, 2);
$m16 = new Arme(5, 2);
$m84 = new Arme(5, 2);

$hero = new Hero($epe);


$hero->arme

class Fille extends Mere