<?php

require_once "db.php";
class Grades
{
    public $grade;
    public $ziua;

    public function setGrade(float $grade): void
    {
        $this->grade = $grade;
    }

    public function setDate(string $ziua): void
    {
        $this->ziua = $ziua;
    }

}