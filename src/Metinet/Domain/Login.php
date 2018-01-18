<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 11:12
 */

namespace Metinet\Domain;


 class login
 {
     private $login;
     private $password;


     public function __construct(string $login, Password $password)
     {
         $this->login = $login;
         $this->password = $password;
     }

     public function getLogin(): string
     {
         return $this->login;
     }

     public function getPassword(): Password
     {
         return $this->password;
     }


     public function connect()
     {

     }

     public function registration()
     { //inscription

     }

 }
