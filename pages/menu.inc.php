<head>
  <title>1LLL algs</title>
</head>

<body>
  <?php

    if (!empty($_GET['p']) and empty($_GET['oll']) and empty($_GET['cp'])) {

      $sql1 = "SELECT * FROM `oll_view`";
      $qry1 = mysqli_query($db_conn,$sql1);
      while ($row1 = mysqli_fetch_array($qry1)) {
        echo "<a href=\"index.php?p=menu&oll=" . $row1[0] . "\"><img src=visualcube/visualcube.php?fmt=svg&stage=oll&size=100&bg=t&view=plan&case=" . $row1[1] . "\">";
      }

    } else if (!empty($_GET['p']) and !empty($_GET['oll']) and empty($_GET['cp'])) {

      $get_oll = $_GET['oll'];

      $sql2 = "SELECT * FROM `oll_view` WHERE oll_id=$get_oll";
      $qry2 = mysqli_query($db_conn,$sql2);
      $row2 = mysqli_fetch_array($qry2);
        echo "<a href=\"index.php?p=menu&oll=" . $row2[0] . "&cp=1\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row2[1] . "\">";
        echo "<a href=\"index.php?p=menu&oll=" . $row2[0] . "&cp=2\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row2[1] . "FRU3R3U3RUR3F3RUR3U3R3FRF3\">";
        echo "<a href=\"index.php?p=menu&oll=" . $row2[0] . "&cp=3\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row2[1] . "RUR3U3R3FR2U3R3U3RUR3F3\">";
        echo "<a href=\"index.php?p=menu&oll=" . $row2[0] . "&cp=4\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row2[1] . "U2RUR3U3R3FR2U3R3U3RUR3F3\">";
        echo "<a href=\"index.php?p=menu&oll=" . $row2[0] . "&cp=5\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row2[1] . "URUR3U3R3FR2U3R3U3RUR3F3\">";
        echo "<a href=\"index.php?p=menu&oll=" . $row2[0] . "&cp=6\"><img src=visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row2[1] . "U3RUR3U3R3FR2U3R3U3RUR3F3\">";
    } else {

      $get_oll = $_GET['oll'];
      $get_cp = $_GET['cp'];

      $sql3 = "SELECT * FROM algs JOIN `cases` ON case_id2 = alg_id";
      $qry3 = mysqli_query($db_conn,$sql3) or die("Error: " . mysqli_error($db_conn));
      while ($row3 = mysqli_fetch_array($qry3)) {
          // echo "<img src=visualcube/visualcube.php?fmt=svg&stage=oll&size=100&bg=t&view=plan&case=" . $row3[2] . "\">";
        echo "<b>" . $row3[0] . "</b>: " . $row3[2] . "<br>";
      }
    }
  ?>
</body>
