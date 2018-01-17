<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 15:27
 */

namespace Metinet\Domain;


class InvalidEmailAddressException extends \Exception
{

    public static function BadEmail(): self
    {
        return new self('Bad Email');
    }

}