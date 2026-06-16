<?php

namespace App;
use App\Database;

class Homes
{
    public function __construct(
        public int    $id,
        public string $tip_proprietate,
        public int    $mp,
        public int    $an_constructie,
        public float  $pret,
        public int    $numar_camere,
        public string $etaj
    )
    {
        $this->id = $id;
        $this->tip_proprietate = $tip_proprietate;
        $this->mp = $mp;
        $this->an_constructie = $an_constructie;;
        $this->pret = $pret;
        $this->numar_camere = $numar_camere;
        $this->etaj = $etaj;
    }

    function getHomes($id)
    {

        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM 'homes' WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        return $result->fetch_all();
    }
}