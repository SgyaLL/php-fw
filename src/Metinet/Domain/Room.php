<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:41
 */

namespace Metinet\Domain;


class Room
{

    private $id;
    private $name;
    private $capacity;
    private $type;
    private $area;


    public function __construct(int $id, string $name,string $capacity,string $type ,int $area)
    {
        $this->id = $id;
        $this->name = $name;
        $this->capacity = $capacity;
        $this->type = $type;
        $this->area = $area;

    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCapacity(): string
    {
        return $this->capacity;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getArea(): int
    {
        return $this->area;
    }

}