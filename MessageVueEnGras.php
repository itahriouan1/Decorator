<?php

class MessageVueEnGras extends MessageVueDecorator {

    public function __construct($AbstractMessageVue)
    {
        $this->AbstractMessageVue = $AbstractMessageVue;
        $this->titre = '<B>'.$this->AbstractMessageVue->getTitre().'</B>';
        $this->contenu = '<B>'.$this->AbstractMessageVue->getContenu().'</B>';
    }


    public function Afficher(){
        
        $html = $this->titre;
        $html .= '<br>';
        $html .= $this->contenu;
        echo $html;
    }

}