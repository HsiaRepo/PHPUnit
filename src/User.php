<?php

/**
 * User
 *
 * A user of the system
 */
class User
{

    /**
     * First name
     * @var string
     */
    public $first_name;

    /**
     * Last name
     * @var string
     */
    public $surname;

    /**
     * Email
     * @var string
     */
    public $email;

    /**
     * Get the user's full name from their first name and surname
     *
     * @return string The user's full name
     */
    public function getFullName()
    {
        return trim("$this->first_name $this->surname");
    }

    /**
     * @param $message
     * @return boolean
     */
    public function notify($message){
        $mailer = new Mailer;

        return $mailer->sendMessage($this->email, $message);
    }
}