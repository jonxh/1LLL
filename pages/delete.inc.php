<head>
  <title>Delete alg</title>
</head>

<body>
  <?php

      $delete_oll = $_POST['delete_oll'];
      $delete_cp = $_POST['delete_cp'];
      $delete_ep = $_POST['delete_ep'];
      $delete_alg = mysqli_real_escape_string($db_conn, $_POST['delete_alg']);
      $column_name = "case_alg" . $delete_ep;

      $sqlupdate = "UPDATE cases SET $column_name = NULL WHERE case_oll = $delete_oll AND case_cp = $delete_cp";

      if (mysqli_query($db_conn, $sqlupdate))
      {
          echo "<a style=\"color:green;\">Successful</a>, you Deleted: <br>". $insert_alg . " (" . $insert_oll . "-" . $insert_cp . "-" . $insert_ep . ")";
      }
        else
      {
        echo "<a style=\"color:red;\">Unnsuccesful</a>.<br>";
        die("Failed to delete - " . $insert_alg . " (" . $insert_oll . "-" . $insert_cp . "-" . $insert_ep . ")<br><br> Error: " . mysqli_error($db_conn));
      }

  ?>
</body>
