<?php

define('DB_HOST', 'localhost:3307');
define('DB_USER', 'abf');
define('DB_PASS', '1234567');
define('DB_NAME', 'php_learn');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
  die("Connection Failed $conn->connect_error");
}
