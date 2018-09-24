<?php
  function epView() {
    function epT($epx) {
      $get_oll = $_GET['oll'];
      $get_cp = $_GET['cp'];
        include "db.php";
      $sql = "SELECT * FROM algs WHERE alg_oll = $get_oll AND alg_cp = $get_cp AND alg_ep = $epx";
      $qry = mysqli_query($conn,$sql) or die("Error: " . mysqli_error($conn));
      $row = mysqli_fetch_array($qry);

      $sql2 = "SELECT * FROM arw_view WHERE arw_id = 1";
      $qry2 = mysqli_query($conn2,$sql2) or die("Error: " . mysqli_error($conn2));
      $row2 = mysqli_fetch_array($qry2);

      if (empty($row['alg'])) {
?>
        <table class="epTable">
          <tr>
            <td><?php echo $epx; ?></td>
            <td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[$epx]; ?>"></td>
            <td><a href="index.php?p=menu&oll=<?php echo $get_oll; ?>&cp=<?php echo $get_cp; ?>&ep=<?php echo $epx; ?>"><img src="visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&stage=f2l"></a></td>
          </tr>
        </table>
<?php
      } else if (!empty($row['alg'])){
?>
        <table class="epTable">
          <tr>
            <td><?php echo $epx; ?></td>
            <td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[$epx]; ?>"></td>
            <td><a href="index.php?p=menu&oll=<?php echo $get_oll; ?>&cp=<?php echo $get_cp; ?>&ep=<?php echo $epx; ?>"><img src="visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=<?php echo $row['alg']; ?>"></a></td>
            <td><?php echo $row['alg']; ?></td>
          </tr>
        </table>
<?php
      }
    }
    return epT(1).epT(2).epT(3).epT(4).epT(5).epT(6).epT(7).epT(8).epT(9).epT(10).epT(11).epT(12);
  }
?>
