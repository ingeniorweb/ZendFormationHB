<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Entity\Humain;

/**
 * Description of Femme
 *
 * @author hb
 */
class Femme {

    protected $ovule;
    protected $escarpins;
    protected $sexe = 'f';

    public function __construct() {
//        $this->setSexe('f');
    }

    public function getOvule() {
        return $this->ovule;
    }

    public function getEscarpins() {
        return $this->escarpins;
    }

    public function setOvule($ovule) {
        $this->ovule = $ovule;
        return $this;
    }

    public function setEscarpins($escarpins) {
        $this->escarpins = $escarpins;
        return $this;
    }

}
