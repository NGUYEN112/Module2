<?php
namespace EmployeeManager;
class EmployeeManager {
    private $employer;
    protected static $list_employee = [];


    //tao mang va them thong tin
    public function add($employer) {
        $this->employee[] = $employer;
    }

    public function getEmployee()
    {
        return $this->employer;
    }
}