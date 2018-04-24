<?php

function algView()
{
    include "db.php";
      $get_oll = $_GET['oll'];
      $get_cp = $_GET['cp'];
      $get_ep = $_GET['ep'];

    $column_name = "case_alg" . $get_ep;
    $sql = "SELECT $column_name FROM cases WHERE case_oll = $get_oll AND case_cp = $get_cp ";
    $qry = mysqli_query($db_conn,$sql) or die("Error: " . mysqli_error($db_conn));
    $row = mysqli_fetch_array($qry);
      echo "<img src=\"visualcube/visualcube.php?fmt=svg&size=200&bg=t&view=plan&case=" . $row[0] . "\"><br>";
      echo $row[0] . "<br>";

    $sql_alt = "SELECT * FROM alts WHERE alt_oll = $get_oll AND alt_cp = $get_cp AND alt_ep = $get_ep";
    $qry_alt = mysqli_query($db_conn,$sql_alt) or die("Error: " . mysqli_error($db_conn));
    $row_alt = mysqli_fetch_array($qry_alt);

      if ($row_alt[0] ==! NULL)
      {
        echo $row_alt[0] . "<br>";
      }
      else
      {
        ?>
          <form action="index.php?p=insert" method="post">
            <input type="text" name="insert_alg_alt1" placeholder="Algorithm">
            <input type="submit" value="Insert Algorithm">
          </form>
        <?php
      }

      if ($row_alt[5] ==! NULL)
      {
        echo $row_alt[5] . "<br>";
      }
      else
      {
        ?>
          <form action="index.php?p=insert" method="post">
            <input type="text" name="insert_alg_alt2" placeholder="Algorithm">
            <input type="submit" value="Insert Algorithm">
          </form>
        <?php
      }

      if ($row_alt[6] ==! NULL)
      {
        echo $row_alt[6] . "<br>";
      }
      else
      {
        ?>
          <form action="index.php?p=insert" method="post">
            <input type="text" name="insert_alg_alt3" placeholder="Algorithm">
            <input type="submit" value="Insert Algorithm">
          </form>
        <?php
      }

      if ($row_alt[7] ==! NULL)
      {
        echo $row_alt[7] . "<br>";
      }
      else
      {
        ?>
          <form action="index.php?p=insert" method="post">
            <input type="text" name="insert_alg_alt4" placeholder="Algorithm">
            <input type="submit" value="Insert Algorithm">
          </form>
        <?php
      }

      echo "<img src=\"visualcube/visualcube.php?fmt=svg&size=75&bg=t&case=" . $row[0] . "\"><br>";
}

?>
