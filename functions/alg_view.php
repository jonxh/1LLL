<?php

  function algView() {
    function algT() {
        include "db.php";
        $get_oll = $_GET['oll'];
        $get_cp = $_GET['cp'];
        $get_ep = $_GET['ep'];

        $sql = "SELECT * FROM algs WHERE alg_oll = $get_oll AND alg_cp = $get_cp AND alg_ep = $get_ep";
        $qry = mysqli_query($conn,$sql) or die("Error: " . mysqli_error($conn));
// Shows all algs
      while ($row = mysqli_fetch_array($qry)) {
?>
          <tr class="topBox">
            <td class="leftBox"><img src="visualcube/visualcube.php?fmt=svg&size=40&bg=t&case=<?php echo $row['alg']; ?>"></td>
            <td class="midBox"><?php echo $row['alg']; ?></td>
            <td class="rightBox">
              <form action="index.php?p=delete" method="post" style="text-align:center; ">
                <select name="delete_oll" style="display:none;"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
                <select name="delete_cp" style="display:none;"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
                <select name="delete_ep" style="display:none;"><option value="<?php echo $_GET['ep']; ?>"><?php echo $_GET['ep']; ?></option></select>
                <select name="delete_alg" style="display:none;"><option value="<?php echo $row['alg_id']; ?>"><?php echo $row['alg_id']; ?></option></select>
                <input style="background-color:rgba(254,204,204,0.7);" value="" type="submit" onclick="return confirm('Are you sure you want to delete this algorithm?');">
              </form>
            </td>
          </tr>
<?php
      }
// Insert alg
?>
      <tr class="bottomBox">
        <td class="leftBox"></td>
        <td class="midBox">
          <form action="index.php?p=insert" method="post">
            <select name="insert_oll" style="display:none;"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
            <select name="insert_cp" style="display:none;"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
            <select name="insert_ep" style="display:none;"><option value="<?php echo $_GET['ep']; ?>"><?php echo $_GET['ep']; ?></option></select>
            <input type="text" name="insert_alg">
        </td>
        <td class="rightBox">
            <input style="background-color: rgba(187, 254, 170, 0.7);" type="submit" value="" onclick="return confirm('Are you sure you want to insert this algorithm?');">
          </form>
        </td>
      </tr>
<?php
    }
      include "db.php";
      $get_oll = $_GET['oll'];
      $get_cp = $_GET['cp'];
      $get_ep = $_GET['ep'];

      $sql = "SELECT * FROM algs WHERE alg_oll = $get_oll AND alg_cp = $get_cp AND alg_ep = $get_ep";
      $qry = mysqli_query($conn,$sql) or die("Error: " . mysqli_error($conn));
      $row = mysqli_fetch_array($qry)
// Images, basically the while page:
?>
      <div id="algViewContent">
        <img src="visualcube/visualcube.php?fmt=svg&size=200&bg=t&view=plan&case=<?php echo $row['alg']; ?>"><br>
        <table class="boxBox">
          <?php return algT();?>
        </table>
      </div>
<?php
}
?>
