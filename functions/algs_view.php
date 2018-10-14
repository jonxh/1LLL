<?php

  function algsView() {
    function algsT($x) {
      include "db.php";
      $oll = $_GET['oll'];

      $sql_algs = "SELECT * FROM algs where alg_oll = $oll AND alg_case = $x"; // Algs
      $qry_algs = mysqli_query($conn,$sql_algs);
      $row_algs = mysqli_fetch_array($qry_algs);

      $sql_oll = "SELECT * FROM viewoll WHERE view_id = $oll + 6"; // OLLs
      $qry_oll = mysqli_query($conn,$sql_oll);
      $row_oll = mysqli_fetch_array($qry_oll);

        $cpCount;
            if ($x <= 12) { $cpCount = 1; }
        elseif ($x <= 24) { $cpCount = 2; }
        elseif ($x <= 36) { $cpCount = 3; }
        elseif ($x <= 48) { $cpCount = 4; }
        elseif ($x <= 60) { $cpCount = 5; }
        elseif ($x <= 72) { $cpCount = 6; }

      $sql_cp = "SELECT * FROM viewoll WHERE view_id = $cpCount"; // CP alg and arrows
      $qry_cp = mysqli_query($conn,$sql_cp);
      $row_cp = mysqli_fetch_array($qry_cp);

      $sql_pll = "SELECT * FROM viewpll WHERE view_id = $x"; // PLLs
      $qry_pll = mysqli_query($conn,$sql_pll);
      $row_pll = mysqli_fetch_array($qry_pll);

        $y = $x;
      if ($y == 1 or $y == 13 or $y == 25 or $y == 37 or $y == 49 or $y == 61) {
?>
        <br>
      </table>
          <div id="cp<?php echo $y; ?>" style="text-align:center;">
            <table>
              <tr>
                <td class="algsTableLeft"></td>
                <td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row_cp['view_arw']; ?>"></td>
                <td><img src="visualcube/visualcube.php?fmt=svg&size=150&bg=t&view=plan&stage=coll&alg=
                  <?php echo $row_pll['view_alg'] . $row_oll['view_alg']; ?>"></td>
              </tr>
            </table>
          </div>
          <table class="algsTable">
        <br>
<?php
      }

      if (empty($row_algs['alg'])) {
?>

        <tr>
          <td class="algsTableLeft"><?php echo $x; ?></td>
          <td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row_pll['view_arw'] . "," .  $row_cp['view_arw']; ?>"></td>
          <td><a href="index.php?p=1lll&oll=<?php echo $oll; ?>&case=<?php echo $x; ?>">
            <img src="visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&alg=<?php echo $row_pll['view_alg'] . $row_oll['view_alg'] ?>"></a></td>
          <td class="algsTableRight"></td>
        </tr>

<?php
      } elseif (!empty($row_algs['alg'])) {
?>
        <tr>
          <td class="algsTableLeft"><?php echo $x; ?></td>
          <td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row_pll['view_arw'] . "," .  $row_cp['view_arw']; ?>"></td>
          <td><a href="index.php?p=1lll&oll=<?php echo $oll; ?>&case=<?php echo $x; ?>">
            <img src="visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=<?php echo $row_algs['alg']; ?>"></a></td>
          <td class="algsTableRight"><?php echo $row_algs['alg']; ?></td>
        </tr>

<?php
      }
    }
    include "db.php";
    $oll = $_GET['oll'];
    $sql_oll = "SELECT * FROM viewoll WHERE view_id = $oll + 6"; // OLLs
    $qry_oll = mysqli_query($conn,$sql_oll);
    $row_oll = mysqli_fetch_array($qry_oll);
?>
    <div style="text-align:center;">
        <img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&view=plan&stage=oll&alg=
          <?php echo $row_oll['view_alg']; ?>"><br>
      <a href="#cp1"><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&view=plan&stage=coll&alg=
        <?php echo "" . $row_oll['view_alg']; ?>&arw=?>"></a>
      <a href="#cp13"><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&view=plan&stage=coll&alg=
        <?php echo "FRU3R3U3RUR3F3RUR3U3R3FRF3" . $row_oll['view_alg']; ?>&arw=U0U8,U8U0?>"></a>
      <a href="#cp25"><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&view=plan&stage=coll&alg=
        <?php echo "RU2R3U3RU2L3UR3U3L" . $row_oll['view_alg']; ?>&arw=U2U8,U8U2?>"></a>
      <a href="#cp37"><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&view=plan&stage=coll&alg=
        <?php echo "U2RU2R3U3RU2L3UR3U3LU2" . $row_oll['view_alg']; ?>&arw=U0U6,U6U0?>"></a>
      <a href="#cp49"><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&view=plan&stage=coll&alg=
        <?php echo "URU2R3U3RU2L3UR3U3LU3" . $row_oll['view_alg']; ?>&arw=U0U2,U2U0?>"></a>
      <a href="#cp61"><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&view=plan&stage=coll&alg=
        <?php echo "U3RU2R3U3RU2L3UR3U3LU" . $row_oll['view_alg']; ?>&arw=U6U8,U8U6?>"></a>
    </div>
<?php

    $a=1;
    while ($a <= 72) {
?>
      <table class="algsTable">
<?php
        echo algsT($a);
?>
      </table>
<?php
      $a++;
    }
  }
?>
