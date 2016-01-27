<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;

/**
 * Description of ResumeServiceFactory
 *
 * @author hb
 */
class ResumeServiceFactory implements FactoryInterface {

    public function createService(ServiceLocatorInterface $serviceLocator) {
        $cv = new Cv;
        $service = new Service\ResumeService();
        $retour = [$service, $cv];

        return $retour;
    }

}
