<?php

require_once "Database.php";
require_once "Grades.php";
require_once "Absences.php";

class Student
{
    public int $id;
    public string $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $date_of_birth;
    public $address;
    public $parent_name;
    public $parent_phone;
    public $enrollment_date;
    public $status;

    /** @var array<Grades> */
    public array $grades = [];
    public array $absences = [];

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function setFirstName(string $first_name) : void
    {
        $this->first_name = $first_name;
    }

    public function setLastName(string $last_name):void
    {
        $this->last_name = $last_name;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function setDateOfBirth(string $date_of_birth): void
    {
        $this->date_of_birth = $date_of_birth;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function setParentName(string $parent_name): void
    {
        $this->parent_name = $parent_name;
    }

    public function setParentPhone(string $parent_phone): void
    {
        $this->parent_phone = $parent_phone;
    }

    public function setEnrollmentDate(string $enrollment_date): void
    {
        $this->enrollment_date = $enrollment_date;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @param array<Grades> $grades
     * @return void
     */
    public function setGrades(array $grades): void
    {
        $this->grades = $grades;
    }
    public function setAbsences(array $absences): void
    {
        $this->absences = $absences ??[];
    }
//    public function addGrade(Grades $grade): void
//    {
//        $this->grades[] = $grade;
//    }

//    public function addAbsence(Absences $absence): void
//    {
//        $this->absences[] = $absence;
//    }
}