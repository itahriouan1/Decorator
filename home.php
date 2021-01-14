<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 14/12/2016
 * Time: 16:11
 */
require 'Message.php';
require 'DecorateurDeMessage.php';
require 'MessageEnGras.php';
require 'MessageEnItalique.php';
$message = new Message('le message');
// On met le message en gras et en italique
$messageDecore = new MessageEnItalique( new MessageEnGras( $message ) );
// On affiche le message décoré
$messageDecore->affiche();

