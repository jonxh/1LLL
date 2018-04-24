<head>
  <title>Insert alg</title>
</head>

<body>
  <?php

      $insert_oll = $_POST['insert_oll'];
      $insert_cp = $_POST['insert_cp'];
      $insert_ep = $_POST['insert_ep'];
      $insert_alg = mysqli_real_escape_string($db_conn, $_POST['insert_alg']);

      $column_name = "case_alg" . $insert_ep;

      $sqlinsert = "UPDATE cases SET $column_name = '$insert_alg' WHERE case_oll = $insert_oll AND case_cp = $insert_cp";

      if (mysqli_query($db_conn, $sqlinsert))
      {
          echo "<a style=\"color:green;\">Successful</a><br>" . $insert_alg . " (" . $insert_oll . "-" . $insert_cp . "-" . $insert_ep . ")";
      }
        else
      {
        echo "<a style=\"color:red;\">Unnsuccesful</a><br>";
        die("Failed to insert - " . $insert_alg . " (" . $insert_oll . "-" . $insert_cp . "-" . $insert_ep . ")<br><br> Error: " . mysqli_error($db_conn));
      }

  ?>
</body>
