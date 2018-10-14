<?php

  function caseView() {
    function caseT() {
// Database stuff, inside function
        include "db.php";
        $oll = $_GET['oll'];
        $case = $_GET['case'];

        $sql_algs = "SELECT * FROM algs WHERE alg_oll = $oll AND alg_case = $case";
        $qry_algs = mysqli_query($conn,$sql_algs) or die("Error: " . mysqli_error($conn));
// Shows all algs
      while ($row_algs = mysqli_fetch_array($qry_algs)) {
?>
        <table class="boxBox">
          <tr class="topBox">
            <td class="leftBox"><img src="visualcube/visualcube.php?fmt=svg&size=40&bg=t&case=<?php echo $row_algs['alg']; ?>"></td>
            <td class="midBox" style="color:<?php if ($row_algs['alg_bad'] == 1) { echo 'red'; } elseif ($row_algs['alg_bad'] == 0) { echo 'black'; } ?>"><?php echo $row_algs['alg']; ?></td>
            <td class="rightBox"><button class="editButton"><a href="index.php?p=1lll&oll=<?php echo $oll; ?>&case=<?php echo $case; ?>&id=<?php echo $row_algs['alg_id']; ?>"><i class="material-icons">edit</i></a></button></td>
          </tr>
        </table><br>
<?php
      }
?>

<?php
    }
// Database stuff, outside of function
      include "db.php";
      $oll = $_GET['oll'];
      $case = $_GET['case'];

      $sql_algs = "SELECT * FROM algs WHERE alg_oll = $oll AND alg_case = '$case'";
      $qry_algs = mysqli_query($conn,$sql_algs) or die("Error: " . mysqli_error($conn));
      $row_algs = mysqli_fetch_array($qry_algs);

      $sql_oll = "SELECT * FROM viewoll WHERE view_id = $oll + 6";
      $qry_oll = mysqli_query($conn,$sql_oll) or die("Error: " . mysqli_error($conn));
      $row_oll = mysqli_fetch_array($qry_oll);

      $sql_pll = "SELECT * FROM viewpll WHERE view_id = '$case'";
      $qry_pll = mysqli_query($conn,$sql_pll) or die("Error: " . mysqli_error($conn));
      $row_pll = mysqli_fetch_array($qry_pll);

// Images, basically the whole page:
?>
    <div id="algViewContent">
      <img src="visualcube/visualcube.php?fmt=svg&size=200&bg=t&view=plan&alg=<?php echo $row_pll['view_alg'] . $row_oll['view_alg']; ?>">
<?php
      echo caseT();
?>
      <br><br>
      <form action="index.php?p=insert" method="post" id="insertAlg">
        <select name="insert_oll" style="display:none;"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
        <select name="insert_case" style="display:none;"><option value="<?php echo $_GET['case']; ?>"><?php echo $_GET['case']; ?></option></select>
        <input type="text" name="insert_alg" class="addText">
        <button class="addButton" type="submit" form="insertAlg" onclick="return confirm('Are you sure you want to insert this algorithm?');"><i class="material-icons">add_box</i></button>
      </form>
    </div>
<?php
  }
?>
