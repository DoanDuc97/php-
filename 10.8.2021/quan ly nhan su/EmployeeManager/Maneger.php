<?php

namespace EmployeeManager;


class Maneger 
{
    private $Information;

    public function __construct()
    {
        $this->Information = [];
    }

    public function add($Information)
    {
        $this->Information = $Information;
    }

    public function getInformation()
    {
        return $this->Information;
    }

    
}