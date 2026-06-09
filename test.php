<?php

require "Student.php";
require_once "Database.php";

$conn = Database::getConnection();

echo "Conexiune reusita<br><br>";


$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Eroare query students: " . mysqli_error($conn));
}

$studenti = [];

while ($row = mysqli_fetch_assoc($result)) {

    $student = new Student();

    $student->setId($row["id"]);
    $student->setFirstName($row['first_name']);
    $student->setLastName($row['last_name']);
    $student->setEmail($row['email']);
    $student->setPhone($row['phone']);
    $student->setDateOfBirth($row['date_of_birth']);
    $student->setAddress($row['address']);
    $student->setParentName($row['parent_name']);
    $student->setParentPhone($row['parent_phone']);
    $student->setEnrollmentDate($row['enrollment_date']);
    $student->setStatus($row['status']);

    $grades = getGrades($student->getId());
    $absences = getAbsences($student->getId());

    $student->setGrades($grades);
    $student->setAbsences($absences);

    var_dump($student);
    foreach ($grades as $grade) {
        echo "Nota: " . $grade['grade'] . " | Ziua: " . $grade['ziua'] . "<br>";
    }

    foreach ($absences as $abs) {
        echo "Absente: " . $abs['course'] . " | Ziua: " . $abs['ziua'] . "<br>";
    }

    $studenti[] = $student;
}