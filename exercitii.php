<?php

$utilizatori = [
    ["nume" => "Andrei", "varsta" => 16],
    ["nume" => "Elena", "varsta" => 21],
    ["nume" => "Mihai", "varsta" => 15],
    ["nume" => "Ana", "varsta" => 30]
];

foreach ($utilizatori as $key => $value) {
    if($value["nume"] >= 18) {
        echo "Numele utilizatorului major este " . $value["nume"] . "<br>";
    }
}