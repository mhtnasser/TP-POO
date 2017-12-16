<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 15/12/2017
 * Time: 12:16
 */

namespace Meeting\Factory;


use Meeting\Repository\MeetingRepository;
use PDO;
use Psr\Container\ContainerInterface;

class MeetingRepositoryFactory
{
    public function __invoke(ContainerInterface $container) : MeetingRepository
    {
        return new MeetingRepository($container->get(PDO::class));
    }
}