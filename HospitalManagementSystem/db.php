<?php
$conn = new mysqli('localhost', 'root', '', 'group16_database');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>