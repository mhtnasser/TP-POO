<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 16/12/2017
 * Time: 12:38
 */

namespace Meeting\Entity;


final class Communaute
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

}