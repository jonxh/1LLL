<?php
  function algView() {
    include "db.php";
    $id = $_GET['id'];

    $sql_alg = "SELECT * FROM algs WHERE alg_id = $id";
    $qry_alg = mysqli_query($conn,$sql_alg);
    $row_alg = mysqli_fetch_array($qry_alg);
?>
    <div id="algEditor">
      <table>
        <tr>
          <td colspan="3">
            <form action="index.php?p=update" method="post" id="update_case">
              <select name="update_id" style="display:none;"><option value="<?php echo $row_alg['alg_id']; ?>"><?php echo $row_alg['alg_id']; ?></option></select>
              <input type="text" name="update_alg" value="<?php echo $row_alg['alg']; ?>" class="addText">
          </td>
        </tr>
        <tr>
          <td colspan="3">
            <button class="editButton" type="submit" form="update_case" onclick="return confirm('Are you sure you want to update this algorithm');"><i class="material-icons">done</i></button>
            </form>
            <form action="index.php?p=delete" method="post" id="delete_alg">
              <select name="delete_id" style="display:none;"><option value="<?php echo $row_alg['alg_id']; ?>"><?php echo $row_alg['alg_id']; ?></option></select>
              <select name="delete_oll" style="display:none;"><option value="<?php echo $row_alg['alg_oll']; ?>"><?php echo $row_alg['alg_oll']; ?></option></select>
              <button class="deleteButton" style="float:right;" type="submit" form="delete_alg" onclick="return confirm('Are you sure you want to delete this algorithm?');"><i class="material-icons">delete</i></button>
            </form>
          </td>
        </tr>
      </table>
    </div>
<?php
  }
?>
