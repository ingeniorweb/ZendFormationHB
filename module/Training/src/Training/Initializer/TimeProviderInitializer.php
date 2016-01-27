<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Initializer;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\InitializerInterface;
use Training\Entity\Cv;
use Training\Utils\TimeProvider;

/**
 * Description of TimeProviderInitializer
 *
 * @author hb
 */
class TimeProviderInitializer implements InitializerInterface {

    public function initialize($instance, ServiceLocatorInterface $serviceLocator) {
        if ($instance instanceof \Training\Service\ResumeService) {
            $instance->setInit('donnee de initializer');
            $instance->SetTimeProvider(new TimeProvider);
        }
    }

}
