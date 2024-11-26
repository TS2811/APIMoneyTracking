<?php
class user
{
    private $connDB;

    public $message;

    public $userId;
    public $userFullname;
    public $userBirthDate;
    public $userName;
    public $userPassword;
    public $userImage;

    public function __construct($connectDB)
    {
        $this->connDB = $connectDB;
    }

    
}
