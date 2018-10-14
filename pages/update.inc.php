<body>
  <?php
    include "db.php";
    $u_id = mysqli_real_escape_string($conn, $_POST['update_id']);
    $u_alg = mysqli_real_escape_string($conn, $_POST['update_alg']);

    $sqlupdate = "UPDATE algs SET alg = '$u_alg' WHERE alg_id = '$u_id'";

    if (mysqli_query($conn, $sqlupdate)) {
      echo "<a style=\"color:green;\">Successful</a>, you Updated: <br>". $u_alg;
      header("refresh:1; location:javascript://history.go(-2)");
      exit();
    } else {
      echo "<a style=\"color:red;\">Unnsuccesful</a>.<br>";
      die("Failed to update - " . $u_alg . "<br><br> Error: " . mysqli_error($conn));
    }
  ?>
</body>
