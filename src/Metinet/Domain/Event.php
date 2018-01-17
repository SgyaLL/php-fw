<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:21
 */

namespace Metinet\Domain;


class Event
{
    private $id;
    private $name;
    private $description;
    private $goal;
    private $day;
    private $hour;

    public function __construct(int $id, string $name,string $description,string $goal ,int $day, int $hour)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->goal = $goal;
        $this->day = $day;
        $this->hour = $hour;
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

    public function getDateOfBirth(): DateOfBirth
    {
        return $this->dateOfBirth;
    }

}