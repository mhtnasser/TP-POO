<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 21/12/2017
 * Time: 16:55
 */

namespace Meeting\Collection;


use ArrayIterator;
use Iterator;
use IteratorIterator;
use Meeting\Entity\Attendee;

class CollectionAttendee extends IteratorIterator implements Iterator
{
    public function __construct(Attendee ...$attendees)
    {
        parent::__construct(new ArrayIterator($attendees));
    }

    public function current() : ?Attendee
    {
        return parent::current();
    }
}