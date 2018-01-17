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

    private $firstName;
    private $lastName;
    private $telephoneNumber;
    private $email;
    private $dateOfBirth;


    public function __construct(string $firstName, string $lastName, int $telephoneNumber,Email $email, DateOfBirth $dateOfBirth)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->telephoneNumber = $telephoneNumber;
        $this->email = $email;
        $this->dateOfBirth = $dateOfBirth;

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







}