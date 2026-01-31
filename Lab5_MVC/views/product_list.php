<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2>Danh sách sản phẩm</h2>
<a href="index.php?page=product-add" class="btn btn-success mb-2">➕ Thêm</a>

<table class="table table-bordered">
<tr>
    <th>ID</th>
    <th>Tên</th>
    <th>Giá</th>
    <th>Ảnh</th>
    <th>Hành động</th>
</tr>

    <?php foreach ($products as $p): ?>
<tr>
    <td><?= $p['id'] ?></td>
    <td><?= $p['name'] ?></td>
    <td><?= number_format($p['price']) ?> VNĐ</td>
    <td>
        <img src="/Lab5_MVC/public/images/<?= $p['image'] ?>" width="80">
    </td>
    <td>
        <a class="btn btn-info btn-sm" href="?page=product-detail&id=<?= $p['id'] ?>">Chi tiết</a>
        <a class="btn btn-warning btn-sm" href="?page=product-edit&id=<?= $p['id'] ?>">Sửa</a>
        <a class="btn btn-danger btn-sm" onclick="return confirm('Xóa?')" href="?page=product-delete&id=<?= $p['id'] ?>">Xóa</a>
    </td>
</tr>
<?php endforeach; ?>


</table>
</body>
</html>
