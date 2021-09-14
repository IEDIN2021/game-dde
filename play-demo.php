<?php 

require "./classes/perso.class.php";
require "./classes/hero.class.php";
require "./classes/monstre.class.php";
require "./classes/pnj.class.php";

//création des objets monstre
$monstres = [];
$monstres[] = new Monstre(30, 35, 12, 22, $epee);
$monstres[] = new Monstre(35, 30, 34, 41, $ak47);
$monstres[] = new Monstre(45, 25, 42, 34, $m84);

$deci = rand(0,2);

$notre_monstre_rand = $monstres[$deci];

//création de l'objet héro
$hero = new Hero(45, 25, 42, 34, $ak47);

$hero ->attaque($notre_monstre_rand);
if ($notre_monstre_rand->getPtvie() <= 0){
    echo "Le Héro a gagné";
}

$notre_monstre_rand ->attaque($hero);
if ($hero->getPtvie() <= 0){
    echo "Le Héro a perdu";
}

print('<pre> <hr>');
 var_dump($hero);

 print('</pre>');

//création de l'objet pnj
$pnj = new Pnj($tableauArmes);

/*

print('<pre> <hr>');
//var_dump($notre_monstre);
var_dump($hero);
print('<hr>');
var_dump($pnj);
print('<hr>');
var_dump($notre_monstre_rand);

print('</pre>');


*/