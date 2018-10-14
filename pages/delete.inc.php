<body>
  <?php
    include "db.php";
    $d_oll = $_POST['delete_oll'];
    $d_id = $_POST['delete_id'];
    $sql = "SELECT * FROM algs WHERE alg_id = '$d_id'";
    $qry = mysqli_query($conn,$sql) or die("Error: " . mysqli_error($conn));
    $row = mysqli_fetch_array($qry);

      $alg_oll = mysqli_real_escape_string($conn, $row['alg_oll']);
      $alg_case = mysqli_real_escape_string($conn, $row['alg_case']);
      $alg = mysqli_real_escape_string($conn, $row['alg']);

      $sqlmove = "INSERT INTO algs_delete (alg_oll, alg_case, alg)
                  VALUES ('$alg_oll', '$alg_case', '$alg')";

    if (mysqli_query($conn, $sqlmove)) {
      $sqldelete = "DELETE FROM algs WHERE alg_id = $d_id";
      mysqli_query($conn, $sqldelete);
      echo "<a style=\"color:green;\">Successful</a>, you Deleted: <br>". $alg;
    } else {
      echo "<a style=\"color:red;\">Unnsuccesful.</a><br>";
      die("Failed to delete - " . $alg . "<br><br> Error: " . $sql . "<br>" . $conn->error);
    }
  ?>
</body>
