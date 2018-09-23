<?php
function epView() {
  function epViewCases($epCount) {
    include "db.php";
      $get_oll = $_GET['oll'];
      $get_cp = $_GET['cp'];
        // setting up database algs
      $sql = "SELECT * FROM cases WHERE case_oll = $get_oll AND case_cp = $get_cp";
      $qry = mysqli_query($db_conn,$sql) or die("Error: " . mysqli_error($db_conn));
      $row = mysqli_fetch_array($qry);
        // setting up database arrows
      $sql2 = "SELECT * FROM arw_view WHERE arw_id = 1";
      $qry2 = mysqli_query($db_conn2,$sql2) or die("Error: " . mysqli_error($db_conn2));
      $row2 = mysqli_fetch_array($qry2);
      // if there are algs in db
    if ($row[2+$epCount] ==! NULL) { ?>
        <table class="epTable"><tr>
          <td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[$epCount]; ?>"></td>
          <td><a href="index.php?p=menu&oll=<?php echo $get_oll; ?>&cp=<?php echo $get_cp; ?>&ep=<?php echo $epCount ?>">
          <img src="visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=<?php echo $row[2+$epCount]; ?>"></a></td>
          <td class="epAlg"><?php echo $row[2+$epCount]; ?></td></tr></table><?php
    }
      // if there are no algs in db
    else if ($row[2+$epCount] == NULL) { ?>
        <table class="epTable"><tr>
          <td><img src="visualcube/visualcube.php?fmt=svg&size=75&bg=t&stage=f2l&view=plan&arw=<?php echo $row2[$epCount]; ?>"></td>
          <td><a href="index.php?p=menu&oll=<?php echo $get_oll; ?>&cp=<?php echo $get_cp; ?>&ep=<?php echo $epCount; ?>">
          <img src="visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&stage=f2l"></a></td>
          <td><form action="index.php?p=insert" method="post">
            <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
            <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
            <select name="insert_ep"><option value="<?php $epCount ?>"><?php $epCount ?></option></select><input type="text" placeholder="Algorithm.." name="insert_alg">
            <input type="submit" value="+" onclick="return confirm('Are you sure you want to insert this algorithm?');">
          </form></td></tr></table>
      <?php
    }
  }
      // return all ep cases
    return epViewCases(1) . epViewCases(2) . epViewCases(3) . epViewCases(4) . epViewCases(5) . epViewCases(6) . epViewCases(7) . epViewCases(8) . epViewCases(9) . epViewCases(10) . epViewCases(11) . epViewCases(12);
  }

?>
