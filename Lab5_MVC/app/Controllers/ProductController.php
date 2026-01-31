<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {

    public function index() {
        $products = (new Product())->all();
        include 'views/product_list.php';
    }

    public function detail() {
        $id = $_GET['id'] ?? null;
        $product = (new Product())->find($id);
        include 'views/product_detail.php';
    }

    public function create() {
        include 'views/product_add.php';
    }

    public function store() {
        if (empty($_POST['name']) || empty($_POST['price'])) {
            die("Không được để trống!");
        }

        (new Product())->insert($_POST);
        header("Location: index.php?page=product-list");
    }

    public function edit() {
        $id = $_GET['id'];
        $product = (new Product())->find($id);
        include 'views/product_edit.php';
    }

    public function update() {
        $id = $_POST['id'];
        (new Product())->update($id, $_POST);
        header("Location: index.php?page=product-list");
    }

    public function delete() {
        $id = $_GET['id'];
        (new Product())->delete($id);
        header("Location: index.php?page=product-list");
    }
}
