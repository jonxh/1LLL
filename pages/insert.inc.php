<head>
  <title>Insert alg</title>
</head>

<body>
  <?php
    include "db.php";
    $i_oll = mysqli_real_escape_string($conn, $_POST['insert_oll']);
    $i_cp = mysqli_real_escape_string($conn, $_POST['insert_cp']);
    $i_ep = mysqli_real_escape_string($conn, $_POST['insert_ep']);
    $i_alg = mysqli_real_escape_string($conn, $_POST['insert_alg']);

    $sqlinsert = "INSERT INTO algs (alg_oll, alg_cp, alg_ep, alg) VALUES ('$i_oll', '$i_cp', '$i_ep', '$i_alg')";

    if (mysqli_query($conn, $sqlinsert)) {
        echo "<a style=\"color:green;\">Successful</a>, you added: <br>". $i_alg . " (" . $i_oll . "-" . $i_cp . "-" . $i_ep . ")";
    } else {
      echo "<a style=\"color:red;\">Unnsuccesful</a>.<br>";
      die("Failed to insert - " . $i_alg . " (" . $i_oll . "-" . $i_cp . "-" . $i_ep . ")<br><br> Error: " . mysqli_error($conn));
    }

    sleep(1);
    header("location:javascript://history.go(-1)");
  ?>
</body>
