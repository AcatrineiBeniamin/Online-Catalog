<?php

namespace App;

use App\Database;

class Absences
{
    public $course;
    public $date;

    public const STATUS_EXCUSED= 'excused';
    public const STATUS_UNEXCUSED = 'unexcused';
    public const STATUS_PENDING = 'pending';

    public function setCourse(string $course): void
    {
        $this->course = $course;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    static function getAbsences($studentId)
    {
        $conn = Database::getConnection();

        $stmt = $conn->prepare("SELECT * FROM absences WHERE student_id = ?");
        $stmt->bind_param("i", $studentId);
        $stmt->execute();

        $result = $stmt->get_result();

        $absences = [];

        while ($row = $result->fetch_assoc()) {
            $absences[] = $row;
        }

        return $absences;
    }
}
