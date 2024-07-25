<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "c89700d5371dde2e356a1b0489b617d4";
$scopes = "read_orders,write_products";
$redirect_uri = "http://b500-185-137-217-61.ngrok-free.app/Stockout/token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();