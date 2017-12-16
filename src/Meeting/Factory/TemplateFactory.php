<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 15/12/2017
 * Time: 12:36
 */

namespace Meeting\Factory;


use Meeting\Template\Template;

class TemplateFactory
{
    public function __invoke()
    {
        return new Template();
    }
}