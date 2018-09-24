<?php
  function ollView() {
    function ollT($ollCount) {
      include "db.php";

        $sql = "SELECT * FROM oll_view WHERE oll_id = $ollCount";
        $qry = mysqli_query($conn,$sql) or die("Error: " . mysqli_error($conn));
        $row = mysqli_fetch_array($qry);?>

      <table class="ollcpTable"><tr>
        <td><?php echo $ollCount; ?></td></tr><tr>
        <td class="ollcpTabletd"><a href="index.php?p=menu&oll=<?php echo $row[0]; ?>">
        <img src="visualcube/visualcube.php?fmt=svg&stage=oll&size=100&bg=t&view=plan&case=<?php echo $row[1]; ?>"></a></td></tr>
      </table><?php
    }
      $a=1;
    while ($a <= 58) {
      echo ollT($a);
      $a++;
    }
  }
?>
