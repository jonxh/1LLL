<head>
  <title>Insert alternate alg</title>
</head>

<body>
  <?php

      $insert_oll = $_POST['insert_oll_alt'];
      $insert_cp = $_POST['insert_cp_alt'];
      $insert_ep = $_POST['insert_ep_alt'];
      $insert_alg = mysqli_real_escape_string($db_conn, $_POST['insert_alg_alt']);

      $sqlinsert = "INSERT INTO alts (`alt_id`, `alt_oll`, `alt_cp`, `alt_ep`, `alt_alg`)
                    VALUES (NULL, '$insert_oll', '$insert_cp', '$insert_ep', '$insert_alg')";

      if (mysqli_query($db_conn, $sqlinsert))
      {
          echo "<a style=\"color:green;\">Successful</a>, you added: <br>". $insert_alg . " (" . $insert_oll . "-" . $insert_cp . "-" . $insert_ep . ")";
      }
        else
      {
        echo "<a style=\"color:red;\">Unnsuccesful</a>.<br>";
        die("Failed to insert - " . $insert_alg . " (" . $insert_oll . "-" . $insert_cp . "-" . $insert_ep . ")<br><br> Error: " . mysqli_error($db_conn));
      }

  ?>
</body>
