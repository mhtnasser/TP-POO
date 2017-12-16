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
use Meeting\Template\Template;
use Psr\Container\ContainerInterface;

class MeetingControllerFactory
{
    public function __invoke(ContainerInterface $container) : MeetingController
    {
        return new MeetingController($container->get(MeetingRepository::class), $container->get(Template::class));
    }
}