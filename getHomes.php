<?php

use App\Database;
use App\Homes;

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    require $path;
});

$conn = Database::getConnection();
$sql = "SELECT * FROM homes";

$result = mysqli_query($conn, $sql);

if(!$result){
    die ("Eroare la conectare");
}

$homes = [];

while($row = mysqli_fetch_assoc($result)){
    $home = new Homes(
        $row['id'],
        $row['tip_proprietate'],
        $row['mp'],
        $row['an_constructie'],
        $row['pret'],
        $row['numar_camere'],
        $row['etaj']
    );

    $homes[] = $home;
}
echo json_encode($homes);
