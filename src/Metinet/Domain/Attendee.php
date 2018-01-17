<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 14:50
 */

namespace Metinet\Domain;


class Attendee
{
    private $id;
    private $firstName;
    private $lastName;
    private $telephoneNumber;
    private $email;
    private $dateOfBirth;
    private $payed;


    public function __construct(int $id, string $firstName, string $lastName, int $telephoneNumber, Email $email, DateOfBirth $dateOfBirth, bool $payed)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->telephoneNumber = $telephoneNumber;
        $this->email = $email;
        $this->dateOfBirth = $dateOfBirth;
        $this->payed = $payed;

    }

    public function getId(): int
    {
        return $this-id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getTelephoneNumber(): int
    {
        return $this->telephoneNumber;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getDateOfBirth(): DateOfBirth
    {
        return $this->dateOfBirth;
    }


    public function Pay()
    {
        if (!$this->id && !$this->payed) {
            $this->payed = true;
        } else {
            throw new \LogicException('no need to pay');
        }


    }
}