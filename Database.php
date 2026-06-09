<?php
class Database
{
    private static ?mysqli $conn = null;

    public static function getConnection(): mysqli
    {
        if (self::$conn === null) {
            self::$conn = new mysqli(
                'localhost',
                'root',
                '',
                'school_app'
            );
        }

        if (self::$conn -> connect_error) {
            die("Conexiune esuata: " . self::$conn->connect_error);
        }

        return self::$conn;
    }
}

function getUser($id)
{
    $conn = Database::getConnection();

    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

function getGrades($studentId)
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

function getAbsences($studentId)
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