<?php
  function ollView() {
    function ollT($ollx) {
      include "db.php";

        $sql = "SELECT * FROM viewoll WHERE view_id = $ollx+6";
        $qry = mysqli_query($conn,$sql) or die("Error: " . mysqli_error($conn));
        $row = mysqli_fetch_array($qry);
?>

      <table class="ollTable">
        <tr>
          <td class="ollTableTop"><?php echo $ollx; ?></td></tr><tr>
          <td class="ollTableBottom"><a href="index.php?p=1lll&oll=<?php echo $ollx; ?>">
          <img src="visualcube/visualcube.php?fmt=svg&stage=oll&size=100&view=plan&bg=t&alg=<?php echo $row['view_alg']; ?>"></a></td>
        </tr>
      </table>

<?php
    }
      $a=1;
    while ($a <= 58) {
      echo ollT($a);
      $a++;
    }
  }
?>
