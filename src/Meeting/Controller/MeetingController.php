<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 15/12/2017
 * Time: 11:53
 */

namespace Meeting\Controller;

use Meeting\Repository\MeetingRepository;
use Twig_Environment;

class MeetingController
{
    private $em;
    private $template;

    /**
     * MeetingController constructor.
     * @param MeetingRepository $em
     * @param Twig_Environment $template
     */
    public function __construct(MeetingRepository $em, Twig_Environment $template)
    {
        $this->em = $em;
        $this->template = $template;
    }

    public function indexAction()
    {
        $Meetings = $this->em->getAll();
        return $this->template->render('meeting.twig', array('meetings' => $Meetings));
    }
}