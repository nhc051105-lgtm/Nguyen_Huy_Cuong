<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2><?= $product['name'] ?></h2>
<p><strong>Giá:</strong> <?= number_format($product['price']) ?> VNĐ</p>

<img src="/Lab5_MVC/public/images/<?= $product['image'] ?>" width="300" class="mb-3">

<p><?= $product['description'] ?></p>

<a href="index.php?page=product-list">⬅ Quay lại</a>

</body>
</html>
