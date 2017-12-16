<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 15/12/2017
 * Time: 15:29
 */

namespace Meeting\Entity;


use DateTime;

final class Meeting
{
    private $id;

    private $titre;

    private $desc;

    private $startDate;

    private $endDate;

    private $communaute;

    public function __construct(int $id,string $titre,string $desc,DateTime $startDate,DateTime $endDate, Communaute $communaute)
    {

        $this->id = $id;
        $this->titre = $titre;
        $this->desc = $desc;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->communaute = $communaute;
    }

    /**
     * @return Communaute
     */
    public function getCommunaute(): Communaute
    {
        return $this->communaute;
    }

    /**
     * @param Communaute $communaute
     */
    public function setCommunaute(Communaute $communaute)
    {
        $this->communaute = $communaute;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre(string $titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getDesc(): string
    {
        return $this->desc;
    }

    /**
     * @param string $desc
     */
    public function setDesc(string $desc)
    {
        $this->desc = $desc;
    }

    /**
     * @return DateTime
     */
    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    /**
     * @param DateTime $startDate
     */
    public function setStartDate(DateTime $startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return DateTime
     */
    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }

    /**
     * @param DateTime $endDate
     */
    public function setEndDate(DateTime $endDate)
    {
        $this->endDate = $endDate;
    }

}