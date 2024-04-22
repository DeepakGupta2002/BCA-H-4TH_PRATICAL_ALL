<?php

// Get the protocol
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";

// Get the host
$host = $_SERVER['HTTP_HOST'];

// Get the requested URI
$uri = $_SERVER['REQUEST_URI'];

// Combine the parts to form the full URL
$fullUrl = $protocol . "://" . $host . $uri;

// Display the full URL
echo "Full URL: " . $fullUrl;

?>
