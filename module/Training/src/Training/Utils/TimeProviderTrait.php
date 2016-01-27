<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Utils;

/**
 * Description of TimeProviderTrait
 *
 * @author hb
 */
trait TimeProviderTrait {

    protected $timeprovider;

    public function getTimeprovider() {
        return $this->timeprovider;
    }

    public function setTimeprovider(TimeProvider $timeprovider) {
        $this->timeprovider = $timeprovider;
        return $this;
    }

}
