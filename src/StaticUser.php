<?php

/**
 * User
 *
 * An example user class
 */
class StaticUser
{

    /**
     * Email address
     * @var string
     */
    public $email;

    /**
     * Mailer object
     * @var StaticMailer
     */
    protected $mailer;

    /**
     * Constructor
     *
     * @param string $email The user's email
     *
     * @return void
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * Mailer setter
     *
     * @param StaticMailer $mailer A Mailer object
     *
     * @return void
     */
    public function setMailer(StaticMailer $mailer) {
        $this->mailer = $mailer;
    }

    /**
     * Send the user a message
     *
     * @param string $message The message
     *
     * @return boolean
     */
    public function notify(string $message)
    {
        return $this->mailer::send($this->email, $message);
    }
}
