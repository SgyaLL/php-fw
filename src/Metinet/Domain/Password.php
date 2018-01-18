<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 11:19
 */

namespace Metinet\Domain;


class Password
{
    private $password;

    public function __construct(string $password)
    {
        $this->password = $password;
    }

    public function getPassword() : string
    {
        return $this->password;
    }

    public function hashPassword(string $password){
        //string $passwordHash;
        return password_hash ($password, PASSWORD_BCRYPT);
    }

    public function checkPassword(string $password, string $passwordHash){
        password_verify ($password ,$passwordHash );
    }
}