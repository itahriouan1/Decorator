<?php

class MessageVue extends AbstractMessageVue{
    

    public function Afficher(){
        $html = $this->titre;
        $html .= '<br>';
        $html .= $this->contenu;
        echo $html;
    }


}