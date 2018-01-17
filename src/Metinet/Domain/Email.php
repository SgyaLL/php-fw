<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 15:23
 */

namespace Metinet\Domain;


class Email {
        private $email;
    public function __construct($email)
    {
        $this->validateEmailAddress($email);
        $this->email = $email;
    }

    private function validateEmailAddress($address)
    {
        $filterValidateResult = filter_var($address, FILTER_VALIDATE_EMAIL);
        if (empty($filterValidateResult) || false === $filterValidateResult) {
            throw new InvalidEmailAddressException();
        }
    }
}