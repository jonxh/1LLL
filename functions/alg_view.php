<?php

  function algView() {
    ?>
      <style>
        body {
          text-align: center;
        }
      </style>
    <?php
    include "db.php";
      $get_oll = $_GET['oll'];
      $get_cp = $_GET['cp'];
      $get_ep = $_GET['ep'];

    $column_name = "case_alg" . $get_ep;
    $sql = "SELECT $column_name FROM cases WHERE case_oll = $get_oll AND case_cp = $get_cp ";
    $qry = mysqli_query($db_conn,$sql) or die("Error: " . mysqli_error($db_conn));
    $row = mysqli_fetch_array($qry);

      echo "<img src=\"visualcube/visualcube.php?fmt=svg&size=200&bg=t&view=plan&case=" . $row[0] . "\"><br>";
      ?>
        <form action="index.php?p=delete" method="post">
          <select name="delete_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
          <select name="delete_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
          <select name="delete_ep"><option value="<?php echo $_GET['ep']; ?>"><?php echo $_GET['ep']; ?></option></select>
          <?php echo $row[0]; ?>
          <input type="submit" value="-" onclick="return confirm('Are you sure you want to delete this algorithm?');">
        </form>
      <?php
      echo "<img src=\"visualcube/visualcube.php?fmt=svg&size=75&bg=t&case=" . $row[0] . "\"><br>";
  }
  
?>
