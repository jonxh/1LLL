<head>
  <title>Info</title>
</head>

<body>
  <?php
  function epT($epCount) {
    include "db.php";
      $get_oll = $_GET['oll'];
      $get_cp = $_GET['cp'];
// setting up database algs
      $sql = "SELECT * FROM algs WHERE alg_oll = $get_oll AND alg_cp = $get_cp";
      $qry = mysqli_query($db_conn,$sql) or die("Error: " . mysqli_error($db_conn));
      $row = mysqli_fetch_array($qry);
// setting up database arrows
      $sql2 = "SELECT * FROM arw_view WHERE arw_id = 1";
      $qry2 = mysqli_query($db_conn2,$sql2) or die("Error: " . mysqli_error($db_conn2));
      $row2 = mysqli_fetch_array($qry2);
// if there are algs in db, spit out pics and algs
    if ($row[2+$epCount] ==! NULL) { ?>
        <table class="epTable"><tr>
          <td class="epTabletd"><?php echo $epCount; ?></td>
          <td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[$epCount]; ?>"></td>
          <td><a href="index.php?p=menu&oll=<?php echo $get_oll; ?>&cp=<?php echo $get_cp; ?>&ep=<?php echo $epCount ?>">
          <img src="visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=<?php echo $row[2+$epCount]; ?>"></a></td>
          <td class="epAlg"><?php echo $row[2+$epCount]; ?></td></tr></table><?php
    }
// if there are no algs in db, spit out empty pics and an alg insertion form
    else if ($row[2+$epCount] == NULL) { ?>
        <table class="epTable"><tr>
          <td><?php echo $epCount; ?></td>
          <td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[$epCount]; ?>"></td>
          <td><a href="index.php?p=menu&oll=<?php echo $get_oll; ?>&cp=<?php echo $get_cp; ?>&ep=<?php echo $epCount; ?>">
          <img src="visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&stage=f2l"></a></td></tr></table>
      <?php
    }
  }
// return all ep cases
    return epT(1).epT(2).epT(3).epT(4).epT(5).epT(6).epT(7).epT(8).epT(9).epT(10).epT(11).epT(12);
  ?>
</body>
