<?php
class user
{
    private $connDB;

    public $message;

    public $moneyId;
    public $moneyDetail;
    public $moneyDateTime;
    public $moneyInOut;
    public $moneyType;
    public $userId;

    public function __construct($connectDB)
    {
        $this->connDB = $connectDB;
    }

    
}
