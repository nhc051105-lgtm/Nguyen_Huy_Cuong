<?php
namespace App\Models;

use PDO;

class Product extends BaseModel {

    public function getAllProducts() {
        $sql = "SELECT * FROM products";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
