<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 16:29
 */

namespace Metinet\Domain;


class User
{
    private const PASSWORD_BCRYPT = "...";

    private $firstName;
    private $lastName;
    private $email;
    private $password;


    public function User($firstName, $lastName, $email, $password)
        {
            $this->set_FirstName($firstName);
            $this->set_LastName($lastName);
            $this->set_email($email);
            $this->set_password($password);
        }


    public function get_FirstName()
        {
            return $this->firstName;
        }

    public function set_FirstName($value)
        {
             $this->firstName = $value;
        }

    public function get_LastName()
    {
        return $this->lastName;
    }

    public function set_LastName($value)
    {
        $this->lastName = $value;
    }

    public function get_email()
        {
            return $this->email;
        }

    public function set_email($value)
        {
            $this->email = $value;
        }

    public function get_password()
        {
             return $this->password;
        }

    public function set_password($value)
        {
            $this->password = password_hash($value, User::PASSWORD_BCRYPT);
        }

}