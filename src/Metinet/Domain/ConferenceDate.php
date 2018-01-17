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
    private $conference;
    private $maxCapacity;
    private $participants = [];

    public function __construct(int $id, int $start, int $end, string $hour, Room $room, Conference $conference,int $maxCapacity)
    {
        $this->id = $id;
        $this->start = $start;
        $this->end = $end;
        $this->hour = $hour;
        $this->room = $room;
        $this->conference = $conference;
        $this->maxCapacity = $maxCapacity;

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
    public function getConference(): string
    {
        return $this->conference;
    }

    public function getMaxCapacity(): int
    {
        return $this->maxCapacity;
    }

    public function inscriptionToEvent(Attendee $attendee,Conference $conference, Room $room)
    { if($this->eventComplete($room)) {
        //if events private
        if ($conference->getAllowedToExternalPeople()) {
            if($attendee->getId()){
                $this->participants[] = $attendee->getId();
            }
            else{
                throw new \LogicException('Must be student');
            }
        } //not private
        else {
            $this->participants[] = $attendee->getId();
        }
    }

    else{

        throw new \LogicException('Sorry this event is complete');
    }
    }
    public function eventComplete(Room $room){
        if($room->getCapacity() >= $this->maxCapacity) {
            return false;
        }

        return true;
    }


}