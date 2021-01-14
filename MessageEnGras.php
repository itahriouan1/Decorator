<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 14/12/2016
 * Time: 16:05
 */
class MessageEnGras extends DecorateurDeMessage {

    public function affiche() {
        echo '<strong>';
        $this->messageDecore->affiche();
        echo '</strong>';
    }
}

