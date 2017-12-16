<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 15/12/2017
 * Time: 15:24
 */

namespace Meeting\Collection;


use ArrayIterator;
use Iterator;
use IteratorIterator;
use Meeting\Entity\Meeting;

final class CollectionMeeting extends IteratorIterator implements Iterator
{
    public function __construct(Meeting ...$meetings)
    {
        parent::__construct(new ArrayIterator($meetings));
    }

    public function current() : ?Meeting
    {
        return parent::current();
    }
}