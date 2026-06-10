<?php

namespace App;
use App\Database;

class Student
{

    public function __construct(
       public int $id,
       public string $first_name,
       public string $last_name,
       public string $email,
       public string $phone,
       public string $date_of_birth,
       public string $address,
       public string $parent_name,
       public string $parent_phone,
       public string $enrollment_date,
       public string $status,
       public array $grades = [],
    public array $absences = []
    ){
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->phone = $phone;
        $this->date_of_birth = $date_of_birth;
        $this->address = $address;
        $this->parent_name = $parent_name;
        $this->parent_phone = $parent_phone;
        $this->enrollment_date = $enrollment_date;
        $this->status = $status;
        $this->grades = [];
        $this->absences = [];
    }

//    public function setId(int $id): void
//    {
//        $this->id = $id;
//    }

    public function getId(): int
    {
        return $this->id;
    }
//    public function setFirstName(string $first_name) : void
//    {
//        $this->first_name = $first_name;
//    }
//
//    public function setLastName(string $last_name):void
//    {
//        $this->last_name = $last_name;
//    }
//
//    public function setEmail(string $email): void
//    {
//        $this->email = $email;
//    }
//
//    public function setPhone(string $phone): void
//    {
//        $this->phone = $phone;
//    }
//
//    public function setDateOfBirth(string $date_of_birth): void
//    {
//        $this->date_of_birth = $date_of_birth;
//    }
//
//    public function setAddress(string $address): void
//    {
//        $this->address = $address;
//    }
//
//    public function setParentName(string $parent_name): void
//    {
//        $this->parent_name = $parent_name;
//    }
//
//    public function setParentPhone(string $parent_phone): void
//    {
//        $this->parent_phone = $parent_phone;
//    }
//
//    public function setEnrollmentDate(string $enrollment_date): void
//    {
//        $this->enrollment_date = $enrollment_date;
//    }
//
//    public function setStatus(string $status): void
//    {
//        $this->status = $status;
//    }

    function getStudent($id)
    {
        $conn = Database::getConnection();

        $stmt = $conn->prepare("SELECT * FROM students WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}