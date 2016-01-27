<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Entity\Humain;

/**
 * Description of Humain
 *
 * @author hb
 */
abstract class Humain implements EtreVivant {

    protected $taille;
    protected $poids;
    protected $qi;
    protected $sexe;

    public function getSexe() {
        return $this->sexe;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
        return $this;
    }

    public function getTaille() {
        return $this->taille;
    }

    public function getPoids() {
        return $this->poids;
    }

    public function getQi() {
        return $this->qi;
    }

    public function setTaille($taille) {
        $this->taille = $taille;
        return $this;
    }

    public function setPoids($poids) {
        $this->poids = $poids;
        return $this;
    }

    public function setQi($qi) {
        $this->qi = $qi;
        return $this;
    }

    public function respirer() {
        return;
    }

}
