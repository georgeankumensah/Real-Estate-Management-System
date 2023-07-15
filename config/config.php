<?php

// host
define('DB_HOST', 'localhost');

// Database name
define('DB_NAME', 'homeland');

// Database user
define('DB_USER', 'root');

// Database password
define('DB_PASSWORD', '');

$conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";", DB_USER, DB_PASSWORD);

if ($conn = true) {
    echo "db Connected";
} else {
    echo "ERROR: db not Connected";
}