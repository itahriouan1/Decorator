<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 14/12/2016
 * Time: 16:10
 */
class MessageEnItalique extends DecorateurDeMessage {

    public function affiche() {
        echo '<em>';
        $this->messageDecore->affiche();
        echo '</em>';
    }
}

