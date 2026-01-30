<?php
namespace App\Models;

use PDO;
use PDOException;

class BaseModel {
    protected $db;

    public function __construct() {
        try {
            $this->db = new PDO(
                "mysql:host=localhost;dbname=lap5_mvc;charset=utf8",
                "root",
                ""
            );
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Lỗi kết nối DB: " . $e->getMessage());
        }
    }
}
