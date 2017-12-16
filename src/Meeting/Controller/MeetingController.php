<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 15/12/2017
 * Time: 11:53
 */

namespace Meeting\Controller;


use Meeting\Repository\MeetingRepository;
use Meeting\Template\Template;

class MeetingController
{
    private $em;
    private $template;
    public function __construct(MeetingRepository $em, Template $template)
    {
        $this->em = $em;
        $this->template = $template;
    }

    public function indexAction()
    {
        $Meetings = $this->em->getAll();
        $this->template->set('Meetings', $Meetings);
        return $this->template->render(__DIR__.'/../../../views/meeting.phtml');
    }
}