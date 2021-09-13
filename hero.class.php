Class Hero {
    $ptVie = 10;
    $ptEndurance = 1;
    $sous = 20;
    $ptForce = 1;
    $armeEquipe = null;
    $armes = [];

    public function __construct($arme) {
        this.arme = $arme;
    }
}


$epe = new Arme(10, 5);
$ak47 = new Arme(5, 2);
$couteau = new Arme(5, 2);
$m16 = new Arme(5, 2);
$m84 = new Arme(5, 2);

$hero = new Hero($epe);


$hero->arme

