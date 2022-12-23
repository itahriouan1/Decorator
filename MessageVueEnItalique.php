<?php

class MessageVueEnItalique extends MessageVueDecorator {

    public function __construct($AbstractMessageVue)
    {
        $this->AbstractMessageVue = $AbstractMessageVue;
        $this->titre = '<I>'.$this->AbstractMessageVue->getTitre().'</I>';
        $this->contenu = '<I>'.$this->AbstractMessageVue->getContenu().'</I>';
    }

    public function Afficher(){
        $html = $this->titre;
        $html .= '<br>';
        $html .= $this->contenu;
        echo $html;
    }

}