<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 16/12/2017
 * Time: 14:16
 */

namespace Meeting\Controller;

use Application\Controller\ErrorController;
use Meeting\Exception\MeetingNotFoundException;
use Meeting\Repository\MeetingRepository;
use Twig_Environment;

class ShowMeetingController
{
    private $em;

    private $template;

    /**
     * ShowMeetingController constructor.
     * @param MeetingRepository $em
     * @param Twig_Environment $template
     */
    public function __construct(MeetingRepository $em,Twig_Environment $template)
    {
        $this->em = $em;
        $this->template = $template;
    }

    public function indexAction()
    {
        try {
        $organizers = $this->em->GetOrganizers($_GET['meeting']);
        $meeting = $this->em->getMeeting($_GET['meeting']);
        $attendees =$this->em->getAttendee($_GET['meeting']);

        return $this->template->render('showMeeting.twig',
            array(
            'organizers' => $organizers,
            'meeting' => $meeting,
            'attendees' => $attendees )
        );

        } catch (MeetingNotFoundException $exception)
        {
            return (new ErrorController($exception))->error404Action();
        }
    }
}