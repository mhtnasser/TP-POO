<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 18/12/2017
 * Time: 13:12
 */

namespace Meeting\Factory;


use Meeting\Twig_Extension\TextExtension;
use Twig_Environment;
use Twig_Extension_Debug;
use Twig_Loader_Filesystem;

class TwigEnvironmentFactory
{
    public function __invoke(): Twig_Environment
    {
        $loader = new Twig_Loader_Filesystem(__DIR__."/../../../views");
        $twig = new Twig_Environment($loader, array(
            'debug' => true,
            "cache" => false //__DIR__."/../../../tmp"
    ));
        $twig->addExtension(new TextExtension());
        $twig->addExtension(new twig_Extension_Debug());
        return $twig;
    }
}