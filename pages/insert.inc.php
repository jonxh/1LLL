<head>
  <title>Insert alg</title>
</head>
<?php

  $insert_oll = $_POST['insert_oll'];
  $insert_cp = $_POST['insert_cp'];
  $insert_ep = $_POST['insert_ep'];
  $insert_alg = $_POST['insert_alg'];

  $sqlinsert = "INSERT INTO cases (case_oll, case_cp, case_ep, case_alg) VALUES (`$insert_oll`, `$insert_cp`, `$insert_ep`,`$insert_alg`)";
  if (mysqli_query($db_conn, $sqlinsert))
  {
      echo "You <a style=\"color:green;\">successfully added</a> " . $insert_alg . " (" . $insert_oll . "-" . $insert_cp . "-" . $insert_ep . ")";
  }
    else
  {
    echo "<a style=\"color:red;\">Unnsuccesful</a>, sorry.<br>";
    die("Failed to insert - " . $insert_alg . " (" . $insert_oll . "-" . $insert_cp . "-" . $insert_ep . ")<br><br> Error: " . mysqli_error($db_conn));
  }

?>
