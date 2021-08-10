<?php

namespace Employee;

class Information
{
    private $Fristname;
    private $Lastname;
    private $Date;
    private $Address;
    private $Job;


   public function __construct()
    {
        $this->Firstname = $Fristname;
        $this->Lastname = $Lastname;
        $this->Bird = $Date;
        $this->Adress = $Address;
        $this->job = $Job;
    }

    public function setFristname($Fristname)
    {
        $this->Firstname = $Fristname;
    }
    public function getFirstname()
    {
        return $this->Firstname;
    }


    public function setLastname($Lastname)
    {
        $this->Lastname = $Lastname;
    }
    public function getLastname()
    {
        return $$this->Lastname;
    }


    public function setDate($Date)
    {
        $this->Date = $Date;
    }
    public function getDate()
    {
        return $$this->Date;
    }


    public function setAddress($Address)
    {
        $this->Address = $Address;
    }
    public function getAddress()
    {
        return $this->Address;
    }


    public function setJob($Job)
    {
        $this->Job = $Job;
    }
    public function getJob()
    {
        return $this->Job;
    }
}
