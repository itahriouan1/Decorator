<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 14/12/2016
 * Time: 16:04
 */
abstract class DecorateurDeMessage implements Affichable {

    protected $messageDecore = null;

    public function __construct(Affichable $messageDecore) {
        $this->messageDecore = $messageDecore;
    }
}

