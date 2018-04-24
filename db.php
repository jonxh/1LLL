<?php
  $db_sn = "localhost";
  $db_un = "root";
  $db_pw = "";
  $db_n = "1lll";

  $db_conn = mysqli_connect($db_sn,$db_un,$db_pw);
  $db = mysqli_select_db($db_conn,$db_n);
?>
