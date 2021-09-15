<?php

require "./classes/perso.class.php";
require "./classes/hero.class.php";
require "./classes/monstre.class.php";


class Jeu {

    protected $hero;
    protected $monstres= [];
    protected $monstreA ;

    function __construct() {
        /*
        $this->hero = new Hero();
        $this->monstres = new monstres();
        $this->monstreA = new monstreA();
        */
        $epee = new Arme(10, 5);
        $ak47 = new Arme(5, 2);
        $couteau = new Arme(5, 2);
        $m16 = new Arme(5, 2);
        $m84 = new Arme(5, 2);


        $this->monstres[] = new Monstre(30, 35, 12, 22, $epee);
        $this->monstres[] = new Monstre(35, 30, 34, 41, $ak47);
        $this->monstres[] = new Monstre(45, 25, 42, 34, $m84);

        $deci = rand(0,2);

        $this->monstreA = $this->monstres[$deci];

        //création de l'objet héro
        $this->hero = new Hero(45, 25, 42, 34, $ak47);
                
    }
    
    public function getHero(){
        return $this->hero;
    }
    public function getMonstre(){
        return $this->monstreA;
    }
    public function attaque(){
        $this->hero ->attaque($this->monstreA);
        if ($this->monstreA->getPtvie() <= 0){
        echo "Le Héro a gagné";            }

        $this->monstreA ->attaque($this->hero);
        if ($this->hero->getPtvie() <= 0){
            echo "Le Héro a perdu";
        }

    }



        
        
    
        
}