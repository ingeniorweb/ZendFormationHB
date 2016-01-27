<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Utils;

use Training\Utils\TimeProvider;

/**
 * Description of TimeProviderAwareInterface
 *
 * @author hb
 */
interface TimeProviderAwareInterface {

    public function SetTimeProvider(TimeProvider $timeprovider);
}
