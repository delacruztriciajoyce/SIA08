<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$config = require 'config.php';

$client = new Client();

$productName = $_POST['product_name'];

$response = $client->post('https://api.stripe.com/v1/checkout/sessions', [
'headers' => [
'Authorization' => 'Bearer ' . $config['secret_key']
],
'form_params' => [
'payment_method_types[]' => 'card',
'line_items[0][price_data][currency]' => 'usd',
'line_items[0][price_data][product_data][name]' => $productName,
'line_items[0][price_data][unit_amount]' => 1000,
'line_items[0][quantity]' => 1,
'mode' => 'payment',
'success_url' => 'http://localhost:8000/success.php',
'cancel_url' => 'http://localhost:8000/cancel.php'
]
]);

$session = json_decode($response->getBody(), true);

header("Location: " . $session['url']);
exit;