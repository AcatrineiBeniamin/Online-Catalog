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

echo "Conexiune reusita<br><br>";


$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Eroare query students: " . mysqli_error($conn));
}

$studenti = [];

while ($row = mysqli_fetch_assoc($result)) {

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
        $row['status']
    );

    //$student = new Student();
//    $student->setId($row["id"]);
//    $student->setFirstName($row['first_name']);
//    $student->setLastName($row['last_name']);
//    $student->setEmail($row['email']);
//    $student->setPhone($row['phone']);
//    $student->setDateOfBirth($row['date_of_birth']);
//    $student->setAddress($row['address']);
//    $student->setParentName($row['parent_name']);
//    $student->setParentPhone($row['parent_phone']);
//    $student->setEnrollmentDate($row['enrollment_date']);
//    $student->setStatus($row['status']);
    var_dump($student);

    $grades = Grades::getGrades($student->getId());
    var_dump($grades);
    echo Grades::STATUS_PUBLISHED;
    echo '</br>';

    $absences = Absences::getAbsences($student->getId());
    var_dump($absences);
    echo Absences::STATUS_EXCUSED;
    echo '</br>';


//    $student->setGrades($grades);
//    $student->setAbsences($absences);

//    foreach ($grades as $grade) {
//        echo "Nota: " . $grade['grade'] . " | Ziua: " . $grade['ziua'] . "<br>";
//    }
//
//    foreach ($absences as $abs) {
//        echo "Absente: " . $abs['course'] . " | Ziua: " . $abs['ziua'] . "<br>";
//    }

    $studenti[] = $student;
}