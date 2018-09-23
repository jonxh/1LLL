<?php
  $db_sn = "localhost";
  $db_un = "root";
  $db_pw = "";
  $db_tn = "1lll";

  $db_conn = new mysqli($db_sn, $db_un, $db_pw, $db_tn);

  if ($db_conn->connect_error) {
      die("Connection failed: " . $db_conn->connect_error);
  }

  $db_conn2 = new mysqli($db_sn, $db_un, $db_pw, $db_tn);

  if ($db_conn2->connect_error) {
      die("Connection failed: " . $db_conn2->connect_error);
  }
?>
