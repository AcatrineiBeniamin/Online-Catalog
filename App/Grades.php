<?php

namespace App;

use App\Database;

class Grades
{
    public $grade;
    public $ziua;

    public const STATUS_DRAFT = 'draft';
    public const STATUS_PUBLISHED = 'published';
    public const STATUS_UPDATED = 'updated';
    public const STATUS_DELETED = 'deleted';

    public function setGrade(float $grade): void
    {
        $this->grade = $grade;
    }

    public function setDate(string $ziua): void
    {
        $this->ziua = $ziua;
    }

    static function getGrades($studentId)
    {
        $conn = Database::getConnection();

        $stmt = $conn->prepare("SELECT * FROM grades WHERE student_id = ?");
        $stmt->bind_param("i", $studentId);
        $stmt->execute();

        $result = $stmt->get_result();

        $grades = [];

        while ($row = $result->fetch_assoc()) {
            $grades[] = $row;
        }

        return $grades;
    }
}