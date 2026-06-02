<?php

require "db.php";

$fisier = fopen('studenti_noi.csv', 'r');
$header=false;

while (($linie = fgets($fisier)) !== false) {
    if($header==false)
    {
        $header = true;
        continue;
    }
    $date = explode(",", trim($linie));
 
    $first_name = $date[0];
    $last_name = $date[1];
    $email = $date[2];
    $phone = $date[3];
    $date_of_birth = $date[4];
    $address = $date[5].",".$date[6];
    $parent_name = $date[7];
    $parent_phone = $date[8];
    $status = $date[9];
    $sql = "INSERT INTO students (first_name, last_name, email, phone, date_of_birth, address, parent_name, parent_phone, status) VALUES 
    ('$first_name', '$last_name', '$email', '$phone', '$date_of_birth', '$address', '$parent_name', '$parent_phone', '$status')";
    // echo $sql;
    // exit;
    $result = mysqli_query($conn, $sql);
}

fclose($fisier);
$conn ->close();
echo "Datele au fost adaugate cu succes";