<?php

namespace Training\Utils;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TimeProvider
 *
 * @author hb
 */
class TimeProvider {

    public function now() {
        return new \DateTime;
    }

}
