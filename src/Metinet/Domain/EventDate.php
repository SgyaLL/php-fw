<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:56
 */

namespace Metinet\Domain;


class EventDate
{
    private $id;
    private $day;
    private $hour;
    private $room;
    private $event;


    public function __construct(int $id, int $day,string $hour, Room $room, Event $event)
    {
        $this->id = $id;
        $this->day = $day;
        $this->hour = $hour;
        $this->room = $room;
        $this->event = $event;

    }


    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getGoal(): string
    {
        return $this->goal;
    }
}