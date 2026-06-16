<?php

namespace App;
use App\Database;

class Cars
{
    public function __construct(
        public int $id,
        public string $brand,
        public string $model,
        public int $year,
        public int $cm2,
        public string $color,
        public int $power
    ){
        $this->id = $id;
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->cm2 = $cm2;
        $this->color = $color;
        $this->power = $power;
    }

    function getCars ($id)
    {
        $conn = Database::getConnection();

        $stmt = $conn->prepare("SELECT *FROM cars WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        return $result->fetch_all();
    }
}