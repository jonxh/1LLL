<?php

  function oll_view()
  {
      include "db.php";

      $sql = "SELECT * FROM `oll_view`";
      $qry = mysqli_query($db_conn,$sql) or die("Error: " . mysqli_error($db_conn));
      while ($row = mysqli_fetch_array($qry))
      {
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "\"><img src=visualcube/visualcube.php?fmt=svg&stage=oll&size=100&bg=t&view=plan&case=" . $row[1] . "\">";
      }
  }

  function cp_view1()
  {
      include "db.php";
        $get_oll = $_GET['oll'];

      $sql = "SELECT * FROM `oll_view` WHERE oll_id=$get_oll";
      $qry = mysqli_query($db_conn,$sql) or die("Error: " . mysqli_error($db_conn));
      $row = mysqli_fetch_array($qry);
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=1\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "\">";
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=2\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "FRU3R3U3RUR3F3RUR3U3R3FRF3\">";
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=3\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "RUR3U3R3FR2U3R3U3RUR3F3\">";
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=4\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "U2RUR3U3R3FR2U3R3U3RUR3F3\">";
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=5\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "URUR3U3R3FR2U3R3U3RUR3F3\">";
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=6\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "U3RUR3U3R3FR2U3R3U3RUR3F3\">";
  }

  function cp_view2()
  {
      include "db.php";
        $get_oll = $_GET['oll'];

      $sql = "SELECT * FROM `oll_view` WHERE oll_id=$get_oll";
      $qry = mysqli_query($db_conn,$sql) or die("Error: " . mysqli_error($db_conn));
      $row = mysqli_fetch_array($qry);
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=1\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "\">";
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=2\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "FRU3R3U3RUR3F3RUR3U3R3FRF3\">";
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=3\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "U2RUR3U3R3FR2U3R3U3RUR3F3\">";
        echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=4\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "URUR3U3R3FR2U3R3U3RUR3F3\">";
  }

  function cp_view3()
  {
      include "db.php";
        $get_oll = $_GET['oll'];

      $sql = "SELECT * FROM `oll_view` WHERE oll_id=$get_oll";
      $qry = mysqli_query($db_conn,$sql);
      $row = mysqli_fetch_array($qry);
        echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=1\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "\">";
        echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=2\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "FRU3R3U3RUR3F3RUR3U3R3FRF3\">";
        echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=3\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "RUR3U3R3FR2U3R3U3RUR3F3\">";
  }

  function ep_view()
  {
      include "db.php";
        $get_oll = $_GET['oll'];
        $get_cp = $_GET['cp'];

      $sql = "SELECT * FROM cases WHERE case_oll = $get_oll AND case_cp = $get_cp ORDER BY case_ep";
      $qry = mysqli_query($db_conn,$sql) or die("Error: " . mysqli_error($db_conn));
        while ($row = mysqli_fetch_array($qry))
        {
          echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=" . $row[3] . "\"><img src=\"visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=" . $row[4] . "\"></a><br>";
          echo $get_oll . "-" . $get_cp . "-" . $row[3] . "<br>";
          echo $row[4] . "<br><br>";
        }


        ?>
          <div>
            <form method="post" action="index.php?p=insert">
              OLL: <input type="text" name="insert_oll" value="<?php echo $_GET['oll']; ?>"><br>
              CP: <input type="text" name="insert_cp" value="<?php echo $_GET['cp']; ?>"><br>
              EP:
              <select name="insert_ep">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </select><br>
              <input type="text" placeholder="Algorithm" name="insert_alg"><br>
              <input type="submit" value="Insert algorithm" onclick="return confirm('Are you sure you want to insert this algorithm?');">
            </form>
          </div>
        <?php
  }

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
        echo $row_alt[4] . "<br>";
        echo "<img src=\"visualcube/visualcube.php?fmt=svg&size=75&bg=t&case=" . $row[4] . "\"><br>";
  }

?>
