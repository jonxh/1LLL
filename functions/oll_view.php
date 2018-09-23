<?php
function ollView()
{
    include "db.php";

    $sql = "SELECT * FROM `oll_view`";
    $qry = mysqli_query($db_conn,$sql) or die("Error: " . mysqli_error($db_conn));
    while ($row = mysqli_fetch_array($qry))
    {
      echo "<a href=\"index.php?p=menu&oll=" . $row[0] . "\"><img src=\"visualcube/visualcube.php?fmt=svg&stage=oll&size=100&bg=t&view=plan&case=" . $row[1] . "\"></a>";
    }
}
?>
