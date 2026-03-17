<!DOCTYPE html>
<html>
<head>
<title>Store</title>
</head>
<body>

<h1>Products</h1>

<?php foreach ($products['data'] as $product): ?>
<div>
<h3><?php echo $product['name']; ?></h3>
<p><?php echo $product['description'] ?? 'No description'; ?></p>

<form action="checkout.php" method="POST">
<input type="hidden" name="product_name" value="<?php echo $product['name']; ?>">
<button type="submit">Buy</button>
</form>
</div>
<?php endforeach; ?>

</body>
</html>