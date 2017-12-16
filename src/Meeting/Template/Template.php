<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 15/12/2017
 * Time: 12:34
 */

namespace Meeting\Template;


class Template
{
    private $vars = array(); // liste des variables

    public function getVars()
    {
        return $this->vars;
    }


    public function set($var, $val)
    {
        $this->vars[$var] = $val;
    }

    public function get($var)
    {
        return $this->vars[$var];
    }

    public function render(string $template)
    {
        ob_start();
            extract($this->vars);
                include $template.'';
            $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function getTest()
    {
        return ' je suis sur la classe template';
    }
}