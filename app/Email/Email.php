<?php

namespace App\Email;

class Email 
{
    function validate_email($email) {
        return (preg_match("/@gmail.com/",$email) ? "$email adalah email yang valid" : "$email adalah email yang tidak valid");
    }
}