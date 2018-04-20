<?php
  // Du kan fikse denne fila <333

  // localhost
  $db_servername = "localhost";
  $db_username = "root";
  $db_password = "";
  $db_name = "ollcpep";

  $db_conn = mysqli_connect($db_servername,$db_username,$db_password);
  $db = mysqli_select_db($db_conn,$db_name);
?>
