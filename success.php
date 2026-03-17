<?php
// success.php
session_start();

// Example: you can store order info in session
$order_id = isset($_GET['order_id']) ? $_GET['order_id'] : "N/A";
?>

<!DOCTYPE html>
<html>
<head>
<title>Payment Successful</title>
<style>
body{
font-family: Arial;
text-align: center;
background-color: #f0fff0;
}
.box{
margin-top: 100px;
}
h1{
color: green;
}
a{
text-decoration: none;
padding: 10px 20px;
background: green;
color: white;
border-radius: 5px;
}
</style>
</head>

<body>

<div class="box">
<h1>Payment Successful ✅</h1>
<p>Thank you for your purchase!</p>
<p>Order ID: <?php echo htmlspecialchars($order_id); ?></p>

<br>

<a href="index.php">Back to Home</a>
</div>

</body>
</html>