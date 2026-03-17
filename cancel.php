<?php
// cancel.php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Payment Cancelled</title>
<style>
body{
font-family: Arial;
text-align: center;
background-color: #fff5f5;
}
.box{
margin-top: 100px;
}
h1{
color: red;
}
a{
text-decoration: none;
padding: 10px 20px;
background: red;
color: white;
border-radius: 5px;
}
</style>
</head>

<body>

<div class="box">
<h1>Payment Cancelled ❌</h1>
<p>Your payment was cancelled.</p>
<p>You can try again anytime.</p>

<br>

<a href="checkout.php">Try Again</a>
</div>

</body>
</html>