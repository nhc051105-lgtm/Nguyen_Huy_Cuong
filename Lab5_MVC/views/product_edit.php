<form method="post" action="index.php?page=product-update">
<input type="hidden" name="id" value="<?= $product['id'] ?>">
Tên: <input name="name" value="<?= $product['name'] ?>"><br>
Giá: <input name="price" value="<?= $product['price'] ?>"><br>
Ảnh: <input name="image" value="<?= $product['image'] ?>"><br>
Mô tả: <textarea name="description"><?= $product['description'] ?></textarea><br>
<button>Cập nhật</button>
</form>
