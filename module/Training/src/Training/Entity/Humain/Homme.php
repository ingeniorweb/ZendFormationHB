<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Entity\Humain;

/**
 * Description of Homme
 *
 * @author hb
 */
class Homme extends Humain {

    protected $spermatozoide;
    protected $barbe;

    public function __construct() {
        $this->setSexe('h');
    }

    public function getSpermatozoide() {
        return $this->spermatozoide;
    }

    public function getBarbe() {
        return $this->barbe;
    }

    public function setSpermatozoide($spermatozoide) {
        $this->spermatozoide = $spermatozoide;
        return $this;
    }

    public function setBarbe($barbe) {
        $this->barbe = $barbe;
        return $this;
    }

}
