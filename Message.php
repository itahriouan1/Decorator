<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 14/12/2016
 * Time: 16:02
 */
require 'Affichable.php';


class Message implements Affichable {

    protected $message = '';

    public function __construct($message) {
        $this->message = $message;
    }

    public function affiche() {
        echo $this->message;
    }
}
