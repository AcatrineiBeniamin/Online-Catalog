<?php

class Absences
{
    public $course;
    public $date;

    public function setCourse(string $course): void
    {
        $this->course = $course;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }
}
