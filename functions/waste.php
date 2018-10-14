<?php
  function epView() {
    function epT($epx) {
      for ($i=0; $i < $epx; $i++) {
        $get_oll = $_GET['oll'];
        $get_cp = $_GET['cp'];
        include "db.php";
// db for arrows in pictures
        $sql2 = "SELECT * FROM view WHERE view_id = $epx";
        $qry2 = mysqli_query($conn2,$sql2) or die("Error: " . mysqli_error($conn2));
        $row2 = mysqli_fetch_array($qry2);
// Inside function database stuff
        $epName = $row2['view_name'];
        $sql = "SELECT * FROM algs WHERE alg_oll = $get_oll AND alg_cp = '$get_cp' AND alg_ep = '$epName'";
        $qry = mysqli_query($conn,$sql) or die("Error: " . mysqli_error($conn));
        $row = mysqli_fetch_array($qry);
// If there is no alg, show empty pictures and stuff
        if (empty($row['alg'])) {
?>
          <table class="epTable"><tr>
            <td><?php if ($get_oll == 20 or $get_oll == 58) { echo $row['alg_info']; } else { echo $row2[3]; ?></td>
            <td><img src="visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=<?php echo $row2[3]; ?>"></td>
            <td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2['view_arw']; ?>"></td>
<?php
          }
?>
            <td><a href="index.php?p=menu&oll=<?php echo $get_oll; ?>&cp=<?php echo $get_cp; ?>&ep=<?php echo $epName; ?>">
              <img src="visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&stage=f2l"></a></td>
          </tr></table>
<?php
  // If there is an alg, show the alg

        } else if (!empty($row['alg'])){
?>
          <table class="epTable"><tr>
              <td><?php if ($get_oll == 20 or $get_oll == 58) { echo $row['alg_info']; } else { echo $row2['view_name']; ?></td>
              <td><img src="visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=<?php echo $row2[3]; ?>"></td>
              <td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2['view_arw']; ?>"></td>
<?php
        }
?>
              <td><a href="index.php?p=menu&oll=<?php echo $get_oll; ?>&cp=<?php echo $get_cp; ?>&ep=<?php echo $epName; ?>">
                <img src="visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=<?php echo $row['alg']; ?>"></a></td>
              <td style="color:<?php if ($row['alg_bad'] == 1) { echo 'red'; } elseif ($row['alg_bad'] == 0) { echo 'black'; } ?>"><?php echo $row['alg']; ?></td>
          </tr></table>
<?php
        }
      }
    }
    $get_oll = $_GET['oll'];
    $get_cp = $_GET['cp'];
// Shows all rows/tables
    if (($get_oll == 1 or $get_oll == 21 or $get_oll == 55 or $get_oll == 56 or $get_oll == 57) and ($get_cp == 'N' or $get_cp == 'D')) {
      echo epT(8);
    } elseif ($get_oll == 58) {
      if ($get_cp == 'D') {
        echo epT(5);
      } else if ($get_cp == 'N') {
        echo epT(4);
      } else if ($get_cp == 'R') {
        echo epT(12);
      }
    } elseif ($get_oll == 20) {
      if ($get_cp == 'D') {
        echo epT(5);
      } else if ($get_cp == 'N') {
        echo epT(5);
      } else if ($get_cp == 'R') {
        echo epT(12);
      }
    } else {
      echo epT(12);
    }
  }
?>
