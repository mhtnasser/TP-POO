<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 15/12/2017
 * Time: 12:13
 */

namespace Meeting\Repository;


use DateTime;
use Meeting\Collection\CollectionMeeting;
use Meeting\Entity\Communaute;
use Meeting\Entity\Meeting;
use PDO;

class MeetingRepository
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $result = $this->pdo->query('SELECT m.id as id, m.titre as titre, m.description as description, m.start_date as start_date, m.end_date as end_date, c.name as name FROM meeting as m INNER JOIN communaute as c ON m.id_communaute = c.id LIMIT 50');
        $donnees = $result->fetchAll();
        $meettings = [];
        foreach ($donnees as $donnee)
        {
            $start_date = new DateTime($donnee['start_date']);
            $end_date = new DateTime($donnee['end_date']);
            $com = new Communaute($donnee['name']);
            $meettings[] = new Meeting((int)$donnee['id'], $donnee['titre'], $donnee['description'], $start_date, $end_date, $com);
        }

        return new CollectionMeeting(...$meettings);
       //return $meettings;
    }
}