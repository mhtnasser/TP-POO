<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 15/12/2017
 * Time: 11:56
 */

namespace Meeting\Factory;


use Meeting\Controller\MeetingController;
use Meeting\Repository\MeetingRepository;
use Psr\Container\ContainerInterface;
use Twig_Environment;

class MeetingControllerFactory
{
    public function __invoke(ContainerInterface $container) : MeetingController
    {
        return new MeetingController($container->get(MeetingRepository::class), $container->get(Twig_Environment::class));
    }
}