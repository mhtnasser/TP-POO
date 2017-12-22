<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 18/12/2017
 * Time: 15:59
 */

namespace Meeting\Entity;


final class Attendee extends User
{
    private $invitation;

    /**
     * Attendee constructor.
     * @param int $id
     * @param string $first_name
     * @param string $last_name
     * @param string $invitation
     */
    public function __construct(int $id, string $first_name, string $last_name, string $invitation)
    {
        parent::__construct($id, $first_name, $last_name);
        $this->invitation = $invitation;
    }

    /**
     * @return string
     */
    public function getInvitation(): string
    {
        return $this->invitation;
    }

    /**
     * @param string $invitation
     */
    public function setInvitation(string $invitation)
    {
        $this->invitation = $invitation;
    }

}