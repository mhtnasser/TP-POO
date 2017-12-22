<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 18/12/2017
 * Time: 15:35
 */

namespace Meeting\Entity;


final class Organizer extends User
{
    private $badge;

    /**
     * Organizer constructor.
     * @param int $id
     * @param string $first_name
     * @param string $last_name
     * @param string $badge
     */
    public function __construct(int $id, string $first_name, string $last_name, string $badge)
    {
        parent::__construct($id, $first_name, $last_name);
        $this->badge = $badge;
    }

    /**
     * @return string
     */
    public function getBadge(): string
    {
        return $this->badge;
    }

    /**
     * @param string $badge
     */
    public function setBadge(string $badge)
    {
        $this->badge = $badge;
    }

}