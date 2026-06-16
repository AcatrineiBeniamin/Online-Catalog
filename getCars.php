<?php

use App\Database;
use App\Cars;

spl_autoload_register(function (string $class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    require $path;
});

$conn = Database::getConnection();

$sql = "SELECT * FROM cars";
$result = mysqli_query($conn, $sql);

if(!$result){
    die ("Eroare la conectare");
}

$cars = [];

while ($row = mysqli_fetch_assoc($result)) {
    $car = new Cars(
        $row['id'],
        $row['brand'],
        $row['model'],
        $row['year'],
        $row['cm2'],
        $row['color'],
        $row['power'],
    );

    $cars[] = $car;
}
echo json_encode($cars);


