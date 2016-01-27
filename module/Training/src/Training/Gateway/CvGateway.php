<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Gateway;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Training\Entity\Candidate;

/**
 * Description of CvGateway
 *
 * @author hb
 */
class CvGateway {

    public function fetch($id) {
        $entity = new Candidate();
        $result = $entity->setAddress('rue truc');
    }

}
