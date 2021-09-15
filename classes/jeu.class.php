<?php

require "./classes/perso.class.php";
require "./classes/hero.class.php";
require "./classes/monstre.class.php";

// Class fille: Jeu.
class Jeu {

    protected $hero;
    protected $monstres= [];
    protected $monstreA ;

    function __construct() {

        // Listes des armes.
        $epee = new Arme(10, 5);
        $ak47 = new Arme(5, 2);
        $couteau = new Arme(5, 2);
        $m16 = new Arme(5, 2);
        $m84 = new Arme(5, 2);

        // Les propriétés definie aux trois monstres.
        $this->monstres[] = new Monstre(30, 35, 12, 22, $epee);
        $this->monstres[] = new Monstre(35, 30, 34, 41, $ak47);
        $this->monstres[] = new Monstre(45, 25, 42, 34, $m84);

        // Choix d'arme aléatoire
        $deci = rand(0,2);

        // Affiche un des trois monstre de la liste.
        $this->monstreA = $this->monstres[$deci];

        //création de l'objet héro
        $this->hero = new Hero(45, 25, 42, 34, $ak47);
                
        }
        // Retroune le héro.
        public function getHero(){
            return $this->hero;
        }

        // Retrourne le monstre.
        public function getMonstre(){
            return $this->monstreA;
        }

        // Méthode.
        public function attaque(){

        // Héro attaque le monstre et si le monstre à < ou 0 points de vie cela affiche le message
        $this->hero ->attaque($this->monstreA);
        if ($this->monstreA->getPtvie() <= 0){
        echo "Le Héro a gagné";            
        }

        // Monstre attaque le héro et si le héro à < ou 0 points de vie cela affiche le message
        $this->monstreA ->attaque($this->hero);
        if ($this->hero->getPtvie() <= 0){
            echo "Le Héro a perdu";
        }
    }  
} 