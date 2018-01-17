<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:56
 */

namespace Metinet\Domain;


class ConferenceDate
{
    private $id;
    private $start;
    private $end;
    private $hour;
    private $room;
    private $event;


    public function __construct(int $id, int $start, int $end, string $hour, Room $room, Conference $event)
    {
        $this->id = $id;
        $this->start = $start;
        $this->end = $end;
        $this->hour = $hour;
        $this->room = $room;
        $this->event = $event;

    }


    public function getStartDay(): int
    {
        return $this->start;

    }
    public function getEndDay(): int
    {
        return $this->end;

    }
    public function getHour(): int
    {
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