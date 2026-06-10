<?php


use App\Absences;
use App\Database;
use App\Grades;
use App\Student;

spl_autoload_register(function (string $class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    require $path;
});

$conn = Database::getConnection();

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Eroare query students: " . mysqli_error($conn));
}

$studenti = [];

while ($row = mysqli_fetch_assoc($result)) {
    $grades = Grades::getGrades($row["id"]);
    $absences = Absences::getAbsences($row["id"]);

    $student = new Student(
        $row["id"],
        $row['first_name'],
        $row['last_name'],
        $row['email'],
        $row['phone'],
        $row['date_of_birth'],
        $row['address'],
        $row['parent_name'],
        $row['parent_phone'],
        $row['enrollment_date'],
        $row['status'],
        $grades,
        $absences
    );

    $studenti[] = $student;
}
echo json_encode($studenti);