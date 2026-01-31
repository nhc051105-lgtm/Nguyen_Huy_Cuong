<?php
namespace App\Models;

use PDO;

class Product extends BaseModel {

    public function __construct() {
        parent::__construct(); // ⭐ QUAN TRỌNG
    }

    public function all() {
        $stmt = $this->pdo->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($data) {
        $stmt = $this->pdo->prepare(
            "INSERT INTO products (name, price, image, description)
             VALUES (?, ?, ?, ?)"
        );
        return $stmt->execute([
            $data['name'],
            $data['price'],
            $data['image'],
            $data['description']
        ]);
    }

    public function update($id, $data) {
        $stmt = $this->pdo->prepare(
            "UPDATE products SET name=?, price=?, image=?, description=? WHERE id=?"
        );
        return $stmt->execute([
            $data['name'],
            $data['price'],
            $data['image'],
            $data['description'],
            $id
        ]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM products WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
