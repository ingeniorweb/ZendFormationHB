<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\EventManager\EventManagerAwareInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of CvController
 *
 * @author hb
 */
class CvController extends AbstractActionController {

    protected $resumeService;

    public function getResumeService() {
        return $this->resumeService;
    }

    public function setResumeService($resumeService) {
        $this->resumeService = $resumeService;
        return $this;
    }

    public function showAction() {

        // appel d'un service
        $resumeService = $this->getServiceLocator()->get('service.resume');
//        $rep = $resumeService->tesst();
//        var_dump($rep);
//        $resumeService = $this->getResumeService();
//        $rep = $resumeService->tesst();


        var_dump($resumeService);

//        var_dump($tst);
//
//        var_dump($cv);


        return false;
    }

}
