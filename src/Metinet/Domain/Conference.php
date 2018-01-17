<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:21
 */

namespace Metinet\Domain;


class Conference
{
    private $id;
    private $name;
    private $address;
    private $description;
    private $goal;
    private $allowedToExternalPeople;



    public function __construct(int $id,string $name, string $address, string $description,string $goal ,int $day, int $hour, bool $allowedToExternalPeople)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->description = $description;
        $this->goal = $goal;
        $this->allowedToExternalPeople = $allowedToExternalPeople;


    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getAddress(): string
    {
        return $this->address;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getGoal(): string
    {
        return $this->goal;
    }

    public function getAllowedToExternalPeople(): Boolean
    {
        return $this->allowedToExternalPeople;
    }





}