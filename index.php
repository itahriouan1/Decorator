<?php

require 'AbstractMessageVue.php';
require 'MessageVue.php';
require 'MessageVueDecorator.php';
require 'MessageVueEnGras.php';
require 'MessageVueEnItalique.php';



$MessageVue = new MessageVue();
$MessageVue->setTitre("apprendre java");
$MessageVue->setContenu("Vous avez appris java! félicitations");
$MessageVue->Afficher();
echo '<br>';
$msgEngr = new MessageVueEnGras($MessageVue);
$msgEngr->Afficher();
echo '<br>';
$msgEnItl = new MessageVueEnItalique($msgEngr);
$msgEnItl->Afficher();

$MessageVue2 = new MessageVue();
$MessageVue2->setTitre("titre 1");
$MessageVue2->setContenu("titre 2");
$MessageVue2->Afficher();

$msgGraIt = new MessageVueEnItalique(new MessageVueEnGras($MessageVue2));
$msgGraIt->Afficher();