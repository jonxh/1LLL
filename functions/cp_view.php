<?php

  function cpView() {

    include "db.php";
      $get_oll = $_GET['oll'];
      $vcString = "<img src=\"visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&arw=";

    $sql = "SELECT * FROM `oll_view` WHERE oll_id=$get_oll";
    $qry = mysqli_query($conn,$sql) or die("Error: " . mysqli_error($conn));
    $row = mysqli_fetch_array($qry);

    $sql2 = "SELECT * FROM arw_view WHERE arw_id = 2";
    $qry2 = mysqli_query($conn2,$sql2) or die("Error: " . mysqli_error($conn2));
    $row2 = mysqli_fetch_array($qry2);

    if ($get_oll == 1 or $get_oll == 21 or $get_oll == 55 or $get_oll == 56 or $get_oll == 57) {?>

      <table class="ollcpTable">
        <tr><td>N</td></tr>
        <tr><td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[1]; ?>"></td></tr>
        <tr><td class="ollcpTabletd"><a href="index.php?p=menu&oll=<?php echo $row[0]; ?>&cp=1"><img src="visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=<?php echo $row[1] ?>"></a></td></tr>
      </table>

      <table class="ollcpTable">
        <tr><td>D</td></tr>
        <tr><td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[2]; ?>"></td></tr>
        <tr><td class="ollcpTabletd"><a href="index.php?p=menu&oll=<?php echo $row[0]; ?>&cp=2"><img src="visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=<?php echo $row[1] ?>FRU3R3U3RUR3F3RUR3U3R3FRF3"></a></td></tr>
      </table>

      <table class="ollcpTable">
        <tr><td>R</td></tr>
        <tr><td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[3]; ?>"></td></tr>
        <tr><td class="ollcpTabletd"><a href="index.php?p=menu&oll=<?php echo $row[0]; ?>&cp=3"><img src="visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=<?php echo $row[1] ?>U2RUR3U3R3FR2U3R3U3RUR3F3"></a></td></tr>
      </table>

      <table class="ollcpTable">
        <tr><td>B</td></tr>
        <tr><td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[5]; ?>"></td></tr>
        <tr><td class="ollcpTabletd"><a href="index.php?p=menu&oll=<?php echo $row[0]; ?>&cp=4"><img src="visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=<?php echo $row[1] ?>U3RUR3U3R3FR2U3R3U3RUR3F3"></a></td></tr>
      </table><?php

    } elseif ($get_oll == 20 or $get_oll == 58) {?>

      <table class="ollcpTable">
        <tr><td>N</td></tr>
        <tr><td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[1]; ?>"></td></tr>
        <tr><td class="ollcpTabletd"><a href="index.php?p=menu&oll=<?php echo $row[0]; ?>&cp=1"><img src="visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=<?php echo $row[1] ?>"></a></td></tr>
      </table>

      <table class="ollcpTable">
        <tr><td>D</td></tr>
        <tr><td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[2]; ?>"></td></tr>
        <tr><td class="ollcpTabletd"><a href="index.php?p=menu&oll=<?php echo $row[0]; ?>&cp=2"><img src="visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=<?php echo $row[1] ?>FRU3R3U3RUR3F3RUR3U3R3FRF3"></a></td></tr>
      </table>

      <table class="ollcpTable">
        <tr><td>R</td></tr>
        <tr><td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[3]; ?>"></td></tr>
        <tr><td class="ollcpTabletd"><a href="index.php?p=menu&oll=<?php echo $row[0]; ?>&cp=3"><img src="visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=<?php echo $row[1] ?>RUR3U3R3FR2U3R3U3RUR3F3"></a></td></tr>
      </table><?php

    } elseif ($get_oll != 1 or $get_oll != 21 or $get_oll != 55 or $get_oll != 56 or $get_oll != 56 or $get_oll != 57 or $get_oll != 20 or $get_oll != 58) {?>

      <table class="ollcpTable">
        <tr><td>N</td></tr>
        <tr><td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[1]; ?>"></td></tr>
        <tr><td class="ollcpTabletd"><a href="index.php?p=menu&oll=<?php echo $row[0]; ?>&cp=1"><img src="visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=<?php echo $row[1] ?>"></a></td></tr>
      </table>

      <table class="ollcpTable">
        <tr><td>D</td></tr>
        <tr><td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[2]; ?>"></td></tr>
        <tr><td class="ollcpTabletd"><a href="index.php?p=menu&oll=<?php echo $row[0]; ?>&cp=2"><img src="visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=<?php echo $row[1] ?>FRU3R3U3RUR3F3RUR3U3R3FRF3"></a></td></tr>
      </table>

      <table class="ollcpTable">
        <tr><td>R</td></tr>
        <tr><td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[3]; ?>"></td></tr>
        <tr><td class="ollcpTabletd"><a href="index.php?p=menu&oll=<?php echo $row[0]; ?>&cp=3"><img src="visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=<?php echo $row[1] ?>RUR3U3R3FR2U3R3U3RUR3F3"></a></td></tr>
      </table>

      <table class="ollcpTable">
        <tr><td>L</td></tr>
        <tr><td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[4]; ?>"></td></tr>
        <tr><td class="ollcpTabletd"><a href="index.php?p=menu&oll=<?php echo $row[0]; ?>&cp=4"><img src="visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=<?php echo $row[1] ?>U2RUR3U3R3FR2U3R3U3RUR3F3"></a></td></tr>
      </table>

      <table class="ollcpTable">
        <tr><td>B</td></tr>
        <tr><td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[5]; ?>"></td></tr>
        <tr><td class="ollcpTabletd"><a href="index.php?p=menu&oll=<?php echo $row[0]; ?>&cp=5"><img src="visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=<?php echo $row[1] ?>URUR3U3R3FR2U3R3U3RUR3F3"></a></td></tr>
      </table>

      <table class="ollcpTable">
        <tr><td>F</td></tr>
        <tr><td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[6]; ?>"></td></tr>
        <tr><td class="ollcpTabletd"><a href="index.php?p=menu&oll=<?php echo $row[0]; ?>&cp=6"><img src="visualcube/visualcube.php?fmt=svg&stage=coll&size=100&bg=t&view=plan&case=<?php echo $row[1] ?>U3RUR3U3R3FR2U3R3U3RUR3F3"></a></td></tr>
      </table><?php

    }
  }

?>
