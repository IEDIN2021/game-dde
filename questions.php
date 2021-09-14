<?php
//création des objets monstre
$question = [];
// oui - combat ou fuite game over
$question[] = ("Ta envie de combattre ?");
//si oui -> PNJ  / non game over
$question[] = ("Ta besoin d'une nouvelle arme? ");
//si oui -> PNJ  / si non combat
$question[] = ("Prends une nouvelle arme du PNJ? ");
//si oui -> combat  / si non PNJ
$question[] = ("Attaque avec ton arme actuelle !");
//si oui -> Game over  / si non combat
$question[] = ("Je refuse de combattre !");

$randomquestions = rand(0,4);

$displayquestions = $question[$randomquestions];

//var_dump($displayquestions);

//var_dump($question[$randomquestions]);