<?php

// Shows all OLLs with 6 CP cases
function cpView1()
{
    include "db.php";
      $get_oll = $_GET['oll'];

    $sql = "SELECT * FROM `oll_view` WHERE oll_id=$get_oll";
    $qry = mysqli_query($db_conn,$sql) or die("Error: " . mysqli_error($db_conn));
    $row = mysqli_fetch_array($qry);
      echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=1\"><img src=\"visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "\"></a>";
      echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=2\"><img src=\"visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&arw=U0U8,U8U0,U1U3,U3U1&case=" . $row[1] . "FRU3R3U3RUR3F3RUR3U3R3FRF3\"></a>";
      echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=3\"><img src=\"visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&arw=U2U9,U9U2,U1U3,U3U1&case=" . $row[1] . "RUR3U3R3FR2U3R3U3RUR3F3\"></a>";
      echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=4\"><img src=\"visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&arw=U6U0,U0U6,U1U3,U3U1&case=" . $row[1] . "U2RUR3U3R3FR2U3R3U3RUR3F3\"></a>";
      echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=5\"><img src=\"visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&arw=U2U0,U0U2,U1U3,U3U1&case=" . $row[1] . "URUR3U3R3FR2U3R3U3RUR3F3\"></a>";
      echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=6\"><img src=\"visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&arw=U8U6,U6U8,U1U3,U3U1&case=" . $row[1] . "U3RUR3U3R3FR2U3R3U3RUR3F3\"></a>";
}

// Shows all OLLs with 4 CP cases
function cpView2()
{
    include "db.php";
      $get_oll = $_GET['oll'];

    $sql = "SELECT * FROM `oll_view` WHERE oll_id=$get_oll";
    $qry = mysqli_query($db_conn,$sql) or die("Error: " . mysqli_error($db_conn));
    $row = mysqli_fetch_array($qry);
      echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=1\"><img src=\"visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "\"></a>";
      echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=2\"><img src=\"visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&arw=U0U8,U8U0,U1U3,U3U1&case=" . $row[1] . "FRU3R3U3RUR3F3RUR3U3R3FRF3\"></a>";
      echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=3\"><img src=\"visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&arw=U6U0,U0U6,U1U3,U3U1&case=" . $row[1] . "RUR3U3R3FR2U3R3U3RUR3F3\"></a>";
      echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "&cp=4\"><img src=\"visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&arw=U8U6,U6U8,U1U3,U3U1&case=" . $row[1] . "URUR3U3R3FR2U3R3U3RUR3F3\"></a>";
}

// Shows all OLLs with three CP cases
function cpView3()
{
    include "db.php";
      $get_oll = $_GET['oll'];

    $sql = "SELECT * FROM `oll_view` WHERE oll_id=$get_oll";
    $qry = mysqli_query($db_conn,$sql);
    $row = mysqli_fetch_array($qry);
      echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=1\"><img src=\"visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=" . $row[1] . "\"></a>";
      echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=2\"><img src=\"visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&arw=U0U8,U8U0,U1U3,U3U1&case=" . $row[1] . "FRU3R3U3RUR3F3RUR3U3R3FRF3\"></a>";
      echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=3\"><img src=\"visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&arw=U2U9,U9U2,U1U3,U3U1&case=" . $row[1] . "RUR3U3R3FR2U3R3U3RUR3F3\"></a>";
}
?>
