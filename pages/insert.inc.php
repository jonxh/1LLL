<head>
  <title>Insert alg</title>
</head>

<body>
  <?php
    include "db.php";
    $i_oll = mysqli_real_escape_string($conn, $_POST['insert_oll']);
    $i_case = mysqli_real_escape_string($conn, $_POST['insert_case']);
    $i_alg = mysqli_real_escape_string($conn, $_POST['insert_alg']);
    //$i_date = NOW();

    $sqlinsert = "INSERT INTO algs (alg_oll, alg_case, alg) VALUES ('$i_oll', '$i_case', '$i_alg')";

    if (mysqli_query($conn, $sqlinsert)) {
      echo "<a style=\"color:green;\">Successful</a>, you added: <br>". $i_alg . " (" . $i_oll . "-" . $i_case . ")";
      header("refresh:1; location:javascript://history.go(-2)");
    } else {
      echo "<a style=\"color:red;\">Unnsuccesful</a>.<br>";
      die("Failed to insert - " . $i_alg . " (" . $i_oll . "-" . $i_case . ")<br><br> Error: " . mysqli_error($conn));
    }
  ?>
</body>
