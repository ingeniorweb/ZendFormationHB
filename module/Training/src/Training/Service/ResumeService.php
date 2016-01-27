<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Service;

use Training\Entity\Candidate;
use Training\Entity\Cv;
use Training\Utils\TimeProviderTrait;

/**
 * Description of CvService
 *
 * @author hb
 */
class ResumeService implements \Training\Utils\TimeProviderAwareInterface {

    protected $init;

    use TimeProviderTrait;

    public function getInit() {
        return $this->init;
    }

    public function setInit($init) {
        $this->init = $init;
        return $this;
    }

    public function exportData($cv) {

        ////init export data
        $data = ['candidate' => []];

        //compute candidate age
        $candidate = new Cv;
        $candidate = $cv->getCandidate();
        $data['candidate']['age'] = $this->computerCandidateAge($candidate);

        /// add candidate properties

        $data['candidate']['firstname'] = $candidate->getFirstName();
        $data['candidate']['last_name'] = $candidate->getLast_name();
//        $data['candidate']['age'] = $candidate->getAge();
        $data['candidate']['address'] = $candidate->getAddress();

        return $data;
    }

    public function computerCandidateAge(Candidate $candidate) {
        return $candidate->getBirthDate()->diff(new \DateTime())->y;
    }

    public function getSampleCv($cv) {
//        $cv = new Cv;
        $cv->setCandidate('toto');
        return $cv;
    }

    public function tesst() {
        $tst = ['toto', 'tutu', 'titi'];
        return $tst;
    }

}
