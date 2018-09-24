<?php
// Connection 1
  $conn = mysqli_connect('localhost', 'root', '', '1lll');

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
// Connection 2
  $conn2 = mysqli_connect('localhost', 'root', '', '1lll');

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
?>
