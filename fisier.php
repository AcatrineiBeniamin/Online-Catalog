<?php

// if(! file_exists('students.csv')) {
//     echo 'File not found';
// }

// else echo 'File found';
// return;


$file = fopen('students.csv', 'r');

$studenti =[];

$header = fgetcsv($file);

while (($line = fgetcsv($file)) !== false) {
        $student = array_combine($header, $line);
        $studenti [] = $student;
}

fclose($file);


$row = "";

foreach ($studenti as $student) {

    $row .= "
    <tr>
        <td>{$student['first_name']}</td>
        <td>{$student['last_name']}</td>
        <td>{$student['phone']}</td>
        <td>{$student['address']}</td>
        <td>{$student['date_of_birth']}</td>
    </tr>
    ";
}

echo <<<HTML
<table border=1>
  <tr>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Phone</td>
    <td>Address</td>
    <td>Date of birth</td>
    </td>
  </tr>
  <tr>$row</tr>
</table>
HTML;