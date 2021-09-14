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

class Monstre extends Perso {

    function __construct($ptVie, $ptEndurance, $sous, $ptForce, $armeEquipe) {
        $this->ptVie = $ptVie;
        $this->ptEndurance = $ptEndurance;
        $this->sous = $sous;
        $this->ptForce = $ptForce;
        $this->armeEquipe = $armeEquipe;
      }

}

class Pnj {
    public $armes = [];
    function __construct($armes) {
        $this->armes = $armes;
    }
}
class Arme {
    public $ptFor = null;
    public $prix = null;

    function __construct($ptFor, $prix) {
        $this->ptFor = $ptFor;
        $this->prix = $prix;
    }
}


//création des objets monstre
$monstre1 = new Monstre(30, 35, 12, 22, $epee);
$monstre2 = new Monstre(35, 30, 34, 41, $ak47);
$monstre3 = new Monstre(45, 25, 42, 34, $m84);

//création de l'objet héro
$hero = new hero(45, 25, 42, 34, $m84);
 
//création de l'objet pnj
$pnj = new pnj($tableauArmes);


print('<pre> <hr>');
var_dump($hero);
print('<hr>');
var_dump($pnj);
print('<hr>');
var_dump($monstre1);
var_dump($monstre2);
var_dump($monstre3);

print('</pre>');













//$hero = new Hero ();
    
// $hero = new hero();
// $monstre = new monstre();


// var_dump($monstre);
//$hero->Arme;

?>