<?php

use Application\Controller\IndexController;
use Application\Controller\LecturerController;
use Application\Factory\DateTimeImmutableFactory;
use Application\Factory\DbConfigProviderFactory;
use Application\Factory\IndexControllerFactory;
use Application\Factory\LecturerControllerFactory;
use Application\Factory\LecturerRepositoryFactory;
use Application\Factory\ParseUriHelperFactory;
use Application\Factory\PdoConnectionFactory;
use Application\Factory\RouterFactory;
use Application\Provider\DbConfigProvider;
use Application\Repository\LecturerRepository;
use Application\Router\ParseUriHelper;
use Application\Router\Router;
use Cinema\Controller\FilmController;
use Cinema\Controller\ShowFilmController;
use Cinema\Factory\FilmControllerFactory;
use Cinema\Factory\FilmRepositoryFactory;
use Cinema\Factory\ShowFilmControllerFactory;
use Cinema\Repository\FilmRepository;
use Meeting\Controller\MeetingController;
use Meeting\Controller\ShowMeetingController;
use Meeting\Factory\MeetingControllerFactory;
use Meeting\Factory\MeetingRepositoryFactory;
use Meeting\Factory\ShowMeetingControllerFactory;
use Meeting\Factory\TemplateFactory;
use Meeting\Factory\TwigEnvironmentFactory;
use Meeting\Repository\MeetingRepository;
use Meeting\Template\Template;

return [
    'factories' => [
        // Configuration du "framework applicatif"
        ParseUriHelper::class => ParseUriHelperFactory::class,
        Router::class => RouterFactory::class,
        PDO::class => PdoConnectionFactory::class,
        DbConfigProvider::class => DbConfigProviderFactory::class,

        // Configurations liées aux lecturers
        DateTimeInterface::class => DateTimeImmutableFactory::class,
        LecturerController::class => LecturerControllerFactory::class,
        IndexController::class => IndexControllerFactory::class,
        LecturerRepository::class => LecturerRepositoryFactory::class,

        // Configurations liées aux films
        FilmController::class => FilmControllerFactory::class,
        ShowFilmController::class => ShowFilmControllerFactory::class,
        FilmRepository::class => FilmRepositoryFactory::class,

        // Configurations liées aux Meeting
        MeetingController::class => MeetingControllerFactory::class,
        MeetingRepository::class => MeetingRepositoryFactory::class,
        Template::class => TemplateFactory::class,
        Twig_Environment::class => TwigEnvironmentFactory::class,

        // Configuration liées aux ShowMeeting
        ShowMeetingController::class => ShowMeetingControllerFactory::class

    ],
];
