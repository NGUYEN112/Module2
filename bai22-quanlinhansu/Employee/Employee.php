<?php
namespace Employee;
class Employee
{
    private $surName;
    private $name;
    private $dateOB;
    private $address;
    private $jobPosition;

    public function __construct($surName,$name,$dateOB,$address,$jobPosition)
    {
        $this->surName = $surName;
        $this->name = $name;
        $this->dateOB = $dateOB;
        $this->address = $address;
        $this->jobPosition = $jobPosition;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSurName($surName)
    {
        $this->surName = $surName;
    }

    public function getSurName()
    {
        return $this->surName;
    }

    public function setDateOB($dateOB)
    {
        $this->dateOB = $dateOB;
    }

    public function getDateOB()
    {
        return $this->dateOB;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }
    public function setJobPosition($jobPosition)
    {
        $this->jobPosition = $jobPosition;
    }

    public function getJobPosition()
    {
        return $this->jobPosition;
    }
}