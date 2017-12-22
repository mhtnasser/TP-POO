<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 16/12/2017
 * Time: 14:21
 */

namespace Meeting\Factory;


use Interop\Container\ContainerInterface;
use Meeting\Controller\ShowMeetingController;
use Meeting\Repository\MeetingRepository;
use Twig_Environment;

class ShowMeetingControllerFactory
{
    public function __invoke(ContainerInterface $container): ShowMeetingController
    {
        return new ShowMeetingController($container->get(MeetingRepository::class), $container->get(Twig_Environment::class));
    }
}