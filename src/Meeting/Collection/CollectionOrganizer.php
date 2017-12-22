<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 21/12/2017
 * Time: 15:54
 */

namespace Meeting\Collection;


use ArrayIterator;
use Iterator;
use IteratorIterator;
use Meeting\Entity\Organizer;

class CollectionOrganizer extends IteratorIterator implements Iterator
{
    public function __construct(Organizer ...$organizers)
    {
        parent::__construct(new ArrayIterator($organizers));
    }

    public function current() : ?Organizer
    {
        return parent::current();
    }
}