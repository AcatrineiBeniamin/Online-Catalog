<?php

require "db.php";

function process_file_csv($file_name) {
    global $conn;
    $fisier = fopen($file_name, 'r');
    $header=false;

    while (($linie = fgets($fisier)) !== false){

        if($header==false)
        {
            $header = true;
            continue;
        }

        insert_student_csv($linie);
    }
    fclose($fisier);
    $conn->close();
}

function insert_student_csv($student) {
    global $conn;
    $date = explode(",", trim($student));
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

function process_file_json($file_name) {
    global $conn;

    $json = file_get_contents($file_name);
    // echo "<pre>";
    // echo $json;
    // echo "</pre>";
    // exit;
    $studenti = json_decode($json, true);
    

    foreach ($studenti as $student) {
        insert_student_json($student);
    }
   
    $conn->close();
}

function insert_student_json($student) {

    global $conn;

    $first_name = $student['first_name'];
    $last_name = $student['last_name'];
    $email = $student['email'];
    $phone = $student['phone'];
    $date_of_birth = $student['date_of_birth'];
    $address = $student['address'];
    $parent_name = $student['parent_name'];
    $parent_phone = $student['parent_phone'];
    $status = $student['status'];

    $sql = "INSERT INTO students (first_name, last_name, email, phone, date_of_birth, address, parent_name, parent_phone, status) 
    VALUES 
    (
    '$first_name', 
    '$last_name', 
    '$email', 
    '$phone', 
    '$date_of_birth', 
    '$address', 
    '$parent_name', 
    '$parent_phone', 
    '$status'
    )";
    // echo $sql;
    // exit;
    $result = mysqli_query($conn, $sql);
}