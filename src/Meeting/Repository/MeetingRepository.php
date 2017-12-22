<?php
/**
 * Created by PhpStorm.
 * User: nasri
 * Date: 15/12/2017
 * Time: 12:13
 */

namespace Meeting\Repository;


use DateTime;
use Meeting\Collection\CollectionAttendee;
use Meeting\Collection\CollectionMeeting;
use Meeting\Collection\CollectionOrganizer;
use Meeting\Entity\Attendee;
use Meeting\Entity\Communaute;
use Meeting\Entity\Meeting;
use Meeting\Entity\Organizer;
use Meeting\Exception\MeetingNotFoundException;
use PDO;

class MeetingRepository
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @return CollectionMeeting
     */
    public function getAll(): CollectionMeeting
    {
        $result = $this->pdo->query('SELECT m.id as id, m.titre as titre, m.description as description, m.start_date as start_date, m.end_date as end_date, c.name as name FROM meeting as m INNER JOIN communaute as c ON m.id_communaute = c.id LIMIT 10');
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
    }


    public function GetOrganizers($id_meeting) : CollectionOrganizer
    {
        $statement = $this->pdo->prepare('SELECT u.id, u.first_name, u.last_name, o.badge FROM utilisateur as u INNER JOIN organisateur as o ON o.id_utilisateur = u.id WHERE o.id_meeting = :id_meeting');
        $statement->execute([':id_meeting' => $id_meeting]);
        $result = $statement->fetchAll();
        if (!$result)
        {
            throw new MeetingNotFoundException();
        }
        $organizers = [];
        foreach ($result as $data)
        {
            $org = new Organizer((int)$data['id'], $data['first_name'], $data['last_name'], $data['badge']);
            $organizers[] = $org;
        }

        return new CollectionOrganizer(...$organizers);
    }

    public function getMeeting($meeting) : Meeting
    {
        $statement = $this->pdo->prepare('SELECT m.id, m.titre, m.description, m.start_date, m.end_date FROM meeting as m WHERE m.id = :meeting');
        $statement->execute([':meeting' => $meeting]);
        $data = $statement->fetch();

        if (!$data)
        {
            throw new MeetingNotFoundException();
        }

        $start_date = new DateTime($data['start_date']);
        $end_date = new DateTime($data['end_date']);
        return new Meeting($data['id'],$data['titre'], $data['description'], $start_date, $end_date);
    }

    public function getAttendee($id_meeting) : CollectionAttendee
    {
        $statement = $this->pdo->prepare('SELECT u.id, u.first_name, u.last_name, p.invitation FROM utilisateur as u INNER JOIN Participe as p ON p.id_utilisateur = u.id WHERE p.id_meeting = :id_meeting');
        $statement->execute([':id_meeting' => $id_meeting]);
        $result = $statement->fetchAll();
        if (!$result)
        {
            throw new MeetingNotFoundException();
        }
        $attendees = [];
        foreach ($result as $data)
        {
            $attendees[] = new Attendee((int)$data['id'],$data['first_name'], $data['last_name'], $data['invitation']);
        }

        return new CollectionAttendee(...$attendees);
    }
}