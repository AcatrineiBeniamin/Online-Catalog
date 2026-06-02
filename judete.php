<?php

require "db.php";

$first_name=$_GET['first_name'] ?? "";
$last_name=$_GET['last_name'] ?? "";


echo <<<HTML
<form action="judete.php" method="get">
  <label for="search">First name:</label>
  <input name="first_name" value="{$first_name}"/>
  <label  for="search">Last name:</label>
  <input name="last_name" value="{$last_name}"/>

  <button type="submit">Search</button>
</form>
HTML;

function get_students($first_name, $last_name, $conn) {
  $sql= "SELECT id, first_name, last_name, address, phone, date_of_birth, address FROM students WHERE first_name LIKE '" . $first_name. "%' AND last_name LIKE '" . $last_name. "%' ORDER BY address";

// Execute the SQL query
$result = mysqli_query($conn, $sql);
$studenti =[];
// Process the result set
if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $studenti []=$row;

  }
  return $studenti;
  } 
}

$studenti=get_students($first_name, $last_name, $conn);
$row="";
foreach($studenti as $student)
{
  $row .= "<tr>
            <td>{$student['first_name']}</td>
            <td>{$student['last_name']}</td>
            <td>{$student['phone']}</td>
            <td>{$student['address']}</td>
            <td>{$student['date_of_birth']}</td>
          </tr>";
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

mysqli_close($conn);