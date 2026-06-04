<?php
require "Student.php";

$json = file_get_contents('D:/laragon/www/uploads/studenti_cu_note_si_absente.json');
$studenti = json_decode($json, true);

foreach ($studenti as $student) {
    $std = new Student($student["first_name"],$student["last_name"], $student['email'], $student['phone'], $student['date_of_birth'], $student['address'], $student['parent_name']);
    var_dump($student);
    var_dump($std);
    exit;
    $first_name = $student['first_name'];
    $last_name = $student['last_name'];
    echo $first_name . " " . $last_name. " " . "<br>";

    echo ("<pre>");
    foreach ($student['grades'] as $nota) {
        echo $nota . " ";
    }
    echo ("</pre>");

    $total_absente = 0;
    echo ("<pre>");
    foreach ($student['absences'] as $absent) {
        echo "Zilele in care a fost absent sunt: " . $absent . '<br>';
        $total_absente ++;
    }
    if ($total_absente >= 5)
        echo "Scazut un punct la purtare " . '<br>';
    echo ("</pre>");
}
