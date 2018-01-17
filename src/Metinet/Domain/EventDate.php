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
    private $start;
    private $end;
    private $hour;
    private $room;
    private $event;


    public function __construct(int $id, int $start, int $end,string $hour, Room $room, Event $event)
    {
        $this->id = $id;
        $this->start = $start;
        $this->end = $end;
        $this->hour = $hour;
        $this->room = $room;
        $this->event = $event;

    }


    public function getDay(): string
    {
        return $this->start;
        return $this->end;
        return $this->hour;
    }



    public function getRoom(): string
    {
        return $this->room;
    }
    public function getEvent(): string
    {
        return $this->event;
    }
}