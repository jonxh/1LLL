<?php

// Shows the OLLs
  function oll_view()
  {
      include "db.php";

      $sql = "SELECT * FROM `oll_view`";
      $qry = mysqli_query($db_conn,$sql) or die("Error: " . mysqli_error($db_conn));
      while ($row = mysqli_fetch_array($qry))
      {
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "\"><img src=visualcube/visualcube.php?fmt=svg&stage=oll&size=100&bg=t&view=plan&case=" . $row[1] . "\"></a>" . $row[0];
      }
  }

// Shows all OLLs with six CP cases
  function cp_view1()
  {
      include "db.php";
        $get_oll = $_GET['oll'];

      $sql = "SELECT * FROM `oll_view` WHERE oll_id=$get_oll";
      $qry = mysqli_query($db_conn,$sql) or die("Error: " . mysqli_error($db_conn));
      $row = mysqli_fetch_array($qry);
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=1\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "\"></a>";
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=2\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "FRU3R3U3RUR3F3RUR3U3R3FRF3\"></a>";
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=3\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "RUR3U3R3FR2U3R3U3RUR3F3\"></a>";
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=4\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "U2RUR3U3R3FR2U3R3U3RUR3F3\"></a>";
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=5\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "URUR3U3R3FR2U3R3U3RUR3F3\"></a>";
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=6\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "U3RUR3U3R3FR2U3R3U3RUR3F3\"></a>";
  }

// Shows all OLLs with 4 CP cases
  function cp_view2()
  {
      include "db.php";
        $get_oll = $_GET['oll'];

      $sql = "SELECT * FROM `oll_view` WHERE oll_id=$get_oll";
      $qry = mysqli_query($db_conn,$sql) or die("Error: " . mysqli_error($db_conn));
      $row = mysqli_fetch_array($qry);
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=1\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "\"></a>";
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=2\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "FRU3R3U3RUR3F3RUR3U3R3FRF3\"></a>";
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=3\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "U2RUR3U3R3FR2U3R3U3RUR3F3\"></a>";
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=4\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "URUR3U3R3FR2U3R3U3RUR3F3\"></a>";
  }

// Shows all OLLs with three CP cases
  function cp_view3()
  {
      include "db.php";
        $get_oll = $_GET['oll'];

      $sql = "SELECT * FROM `oll_view` WHERE oll_id=$get_oll";
      $qry = mysqli_query($db_conn,$sql);
      $row = mysqli_fetch_array($qry);
        echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=1\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "\"></a>";
        echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=2\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "FRU3R3U3RUR3F3RUR3U3R3FRF3\"></a>";
        echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=3\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "RUR3U3R3FR2U3R3U3RUR3F3\"></a>";
  }

// Shows the final cases themselves
  function ep_view()
  {
      include "db.php";
        $get_oll = $_GET['oll'];
        $get_cp = $_GET['cp'];

        $sql = "SELECT * FROM cases WHERE case_oll = $get_oll AND case_cp = $get_cp";
        $qry = mysqli_query($db_conn,$sql) or die("Error: " . mysqli_error($db_conn));
        $row = mysqli_fetch_array($qry);

          // 1st case
        if ($row[3] ==! NULL)
        {
          echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=1\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[3] . "\"></a><br>";
          echo $row[3] . "<br>";
        }
        else if ($row[3] == NULL)
        {

          ?>
            <form action="index.php?p=insert" method="post">
              <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
              <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
              <select name="insert_ep"><option value="1">1</option></select>
              <input type="text" placeholder="Algorithm" name="insert_alg">
              <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
            </form>
          <?php
        }

          // 2nd Case
        if ($row[4] ==! NULL)
        {
          echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=2\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[4] . "\"></a><br>";
          echo $row[4] . "<br>";
        }
        else if ($row[4] == NULL)
        {

          ?>
            <form action="index.php?p=insert" method="post">
              <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
              <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
              <select name="insert_ep"><option value="2">2</option></select>
              <input type="text" placeholder="Algorithm" name="insert_alg">
              <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
            </form>
          <?php
        }

          // 3rd Case
        if ($row[5] ==! NULL)
        {
          echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=3\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[5] . "\"></a><br>";
          echo $row[5] . "<br>";
        }
        else if ($row[5] == NULL)
        {

          ?>
            <form action="index.php?p=insert" method="post">
              <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
              <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
              <select name="insert_ep"><option value="3">3</option></select>
              <input type="text" placeholder="Algorithm" name="insert_alg">
              <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
            </form>
          <?php
        }

          // 4th Case
        if ($row[6] ==! NULL)
        {
          echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=4\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[6] . "\"></a><br>";
          echo $row[6] . "<br>";
        }
        else if ($row[6] == NULL)
        {

          ?>
            <form action="index.php?p=insert" method="post">
              <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
              <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
              <select name="insert_ep"><option value="4">4</option></select>
              <input type="text" placeholder="Algorithm" name="insert_alg">
              <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
            </form>
          <?php
        }

          // 5th Case
        if ($row[7] ==! NULL)
        {
          echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=5\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[7] . "\"></a><br>";
          echo $row[7] . "<br>";
        }
        else if ($row[7] == NULL)
        {

          ?>
            <form action="index.php?p=insert" method="post">
              <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
              <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
              <select name="insert_ep"><option value="5">5</option></select>
              <input type="text" placeholder="Algorithm" name="insert_alg">
              <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
            </form>
          <?php
        }

          // 6th Case
        if ($row[8] ==! NULL)
        {
          echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=6\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[8] . "\"></a><br>";
          echo $row[8] . "<br>";
        }
        else if ($row[8] == NULL)
        {

          ?>
            <form action="index.php?p=insert" method="post">
              <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
              <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
              <select name="insert_ep"><option value="6">6</option></select>
              <input type="text" placeholder="Algorithm" name="insert_alg">
              <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
            </form>
          <?php
        }

          // 7th Case
        if ($row[9] ==! NULL)
        {
          echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=7\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[9] . "\"></a><br>";
          echo $row[9] . "<br>";
        }
        else if ($row[9] == NULL)
        {

          ?>
            <form action="index.php?p=insert" method="post">
              <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
              <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
              <select name="insert_ep"><option value="7">7</option></select>
              <input type="text" placeholder="Algorithm" name="insert_alg">
              <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
            </form>
          <?php
        }

          // 8th Case
        if ($row[10] ==! NULL)
        {
          echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=8\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[10] . "\"></a><br>";
          echo $row[10] . "<br>";
        }
        else if ($row[10] == NULL)
        {

          ?>
            <form action="index.php?p=insert" method="post">
              <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
              <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
              <select name="insert_ep"><option value="8">8</option></select>
              <input type="text" placeholder="Algorithm" name="insert_alg">
              <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
            </form>
          <?php
        }

          // 9th Case
        if ($row[11] ==! NULL)
        {
          echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=9\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[11] . "\"></a><br>";
          echo $row[11] . "<br>";
        }
        else if ($row[11] == NULL)
        {

          ?>
            <form action="index.php?p=insert" method="post">
              <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
              <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
              <select name="insert_ep"><option value="9">9</option></select>
              <input type="text" placeholder="Algorithm" name="insert_alg">
              <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
            </form>
          <?php
        }

          // 10th Case
        if ($row[12] ==! NULL)
        {
          echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=10\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[12] . "\"></a><br>";
          echo $row[12] . "<br>";
        }
        else if ($row[12] == NULL)
        {

          ?>
            <form action="index.php?p=insert" method="post">
              <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
              <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
              <select name="insert_ep"><option value="10">10</option></select>
              <input type="text" placeholder="Algorithm" name="insert_alg">
              <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
            </form>
          <?php
        }

          // 11th Case
        if ($row[13] ==! NULL)
        {
          echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=11\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[13] . "\"></a><br>";
          echo $row[13] . "<br>";
        }
        else if ($row[13] == NULL)
        {

          ?>
            <form action="index.php?p=insert" method="post">
              <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
              <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
              <select name="insert_ep"><option value="11">11</option></select>
              <input type="text" placeholder="Algorithm" name="insert_alg">
              <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
            </form>
          <?php
        }

          // 12th Case
        if ($row[14] ==! NULL)
        {
          echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=12\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[14] . "\"></a><br>";
          echo $row[14] . "<br>";
        }
        else if ($row[14] == NULL)
        {

          ?>
            <form action="index.php?p=insert" method="post">
              <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
              <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
              <select name="insert_ep"><option value="12">12</option></select>
              <input type="text" placeholder="Algorithm" name="insert_alg">
              <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
            </form>
          <?php
        }
  }

// In depth alg view
  function alg_view()
  {
      include "db.php";
        $get_oll = $_GET['oll'];
        $get_cp = $_GET['cp'];
        $get_ep = $_GET['ep'];

      $sql = "SELECT * FROM cases WHERE case_oll = $get_oll AND case_cp = $get_cp AND case_ep = $get_ep";
      $qry = mysqli_query($db_conn,$sql) or die("Error: " . mysqli_error($db_conn));
      $row = mysqli_fetch_array($qry);
        echo "<img src=\"visualcube/visualcube.php?fmt=svg&size=200&bg=t&view=plan&case=" . $row[4] . "\"><br>";
        echo $row[4] . "<br>";

      $sql_alt = "SELECT * FROM alt_algs WHERE alt_oll = $get_oll AND alt_cp = $get_cp AND alt_ep = $get_ep";
      $qry_alt = mysqli_query($db_conn,$sql_alt) or die("Error: " . mysqli_error($db_conn));
      $row_alt = mysqli_fetch_array($qry_alt);

        if ($row_alt[4] ==! NULL)
        {
          echo $row_alt[4] . "<br>";
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

        echo "<img src=\"visualcube/visualcube.php?fmt=svg&size=75&bg=t&case=" . $row[4] . "\"><br>";
  }

?>
