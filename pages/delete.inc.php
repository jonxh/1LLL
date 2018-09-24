<head>
  <title>Delete alg</title>
</head>

<body>
  <?php
    include "db.php";
    $d_oll = $_POST['delete_oll'];
    $d_cp = $_POST['delete_cp'];
    $d_ep = $_POST['delete_ep'];
    $d_alg = $_POST['delete_alg'];

    $sqldelete = "DELETE FROM algs WHERE alg_id = $d_alg";

    if (mysqli_query($conn, $sqldelete)) {
        echo "<a style=\"color:green;\">Successful</a>, you Deleted: <br>". $d_alg . " (" . $d_oll . "-" . $d_cp . "-" . $d_ep . ")";
    } else {
      echo "<a style=\"color:red;\">Unnsuccesful</a>.<br>";
      die("Failed to delete - " . $d_alg . " (" . $d_oll . "-" . $d_cp . "-" . $d_ep . ")<br><br> Error: " . mysqli_error($conn));
    }
    sleep(1);
    header("location:javascript://history.go(-1)");
  ?>
</body>
