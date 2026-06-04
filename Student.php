<?php


class Student
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $date_of_birth;
    public $address;
    public $parent_name;
    public $parent_phone;
    public $enrollment_date;
    public $status;

    function __construct($first_name, $last_name, $email, $phone, $date_of_birth, $address, $parent_name )
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->phone = $phone;
        $this->date_of_birth = $date_of_birth;
        $this->address = $address;
        $this->parent_name = $parent_name;
    }

}