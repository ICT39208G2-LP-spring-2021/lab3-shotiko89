<?php
    $conn = new mysqli('localhost', 'root', '','gtu123');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>