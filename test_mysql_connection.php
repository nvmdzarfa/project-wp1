<?php
$conn = new mysqli('localhost', 'root', 'sh1nryujin');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
echo 'Connected successfully';
$conn->close();
?>
