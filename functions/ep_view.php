<?php
function epView() {
  include "db.php";
    $get_oll = $_GET['oll'];
    $get_cp = $_GET['cp'];

    $sql = "SELECT * FROM cases WHERE case_oll = $get_oll AND case_cp = $get_cp";
    $qry = mysqli_query($db_conn,$sql) or die("Error: " . mysqli_error($db_conn));
    $row = mysqli_fetch_array($qry);

      // 1st case
    if ($row[3] ==! NULL)
    {
      echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=1\"><img src=\"visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=" . $row[3] . "\"></a><br>";
      echo $row[3] . "<br>";
    }
    else if ($row[3] == NULL)
    {

      ?>
        <form action="index.php?p=insert" method="post">
          <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
          <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
          <select name="insert_ep"><option value="1">1</option></select>
          <input type="text" placeholder="Algorithm" name="insert_alg">
          <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
        </form>
      <?php
    }

      // 2nd Case
    if ($row[4] ==! NULL)
    {
      echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=2\"><img src=\"visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=" . $row[4] . "\"></a><br>";
      echo $row[4] . "<br>";
    }
    else if ($row[4] == NULL)
    {

      ?>
        <form action="index.php?p=insert" method="post">
          <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
          <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
          <select name="insert_ep"><option value="2">2</option></select>
          <input type="text" placeholder="Algorithm" name="insert_alg">
          <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
        </form>
      <?php
    }

      // 3rd Case
    if ($row[5] ==! NULL)
    {
      echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=3\"><img src=\"visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=" . $row[5] . "\"></a><br>";
      echo $row[5] . "<br>";
    }
    else if ($row[5] == NULL)
    {

      ?>
        <form action="index.php?p=insert" method="post">
          <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
          <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
          <select name="insert_ep"><option value="3">3</option></select>
          <input type="text" placeholder="Algorithm" name="insert_alg">
          <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
        </form>
      <?php
    }

      // 4th Case
    if ($row[6] ==! NULL)
    {
      echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=4\"><img src=\"visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=" . $row[6] . "\"></a><br>";
      echo $row[6] . "<br>";
    }
    else if ($row[6] == NULL)
    {

      ?>
        <form action="index.php?p=insert" method="post">
          <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
          <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
          <select name="insert_ep"><option value="4">4</option></select>
          <input type="text" placeholder="Algorithm" name="insert_alg">
          <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
        </form>
      <?php
    }

      // 5th Case
    if ($row[7] ==! NULL)
    {
      echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=5\"><img src=\"visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=" . $row[7] . "\"></a><br>";
      echo $row[7] . "<br>";
    }
    else if ($row[7] == NULL)
    {

      ?>
        <form action="index.php?p=insert" method="post">
          <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
          <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
          <select name="insert_ep"><option value="5">5</option></select>
          <input type="text" placeholder="Algorithm" name="insert_alg">
          <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
        </form>
      <?php
    }

      // 6th Case
    if ($row[8] ==! NULL)
    {
      echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=6\"><img src=\"visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=" . $row[8] . "\"></a><br>";
      echo $row[8] . "<br>";
    }
    else if ($row[8] == NULL)
    {

      ?>
        <form action="index.php?p=insert" method="post">
          <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
          <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
          <select name="insert_ep"><option value="6">6</option></select>
          <input type="text" placeholder="Algorithm" name="insert_alg">
          <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
        </form>
      <?php
    }

      // 7th Case
    if ($row[9] ==! NULL)
    {
      echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=7\"><img src=\"visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=" . $row[9] . "\"></a><br>";
      echo $row[9] . "<br>";
    }
    else if ($row[9] == NULL)
    {

      ?>
        <form action="index.php?p=insert" method="post">
          <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
          <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
          <select name="insert_ep"><option value="7">7</option></select>
          <input type="text" placeholder="Algorithm" name="insert_alg">
          <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
        </form>
      <?php
    }

      // 8th Case
    if ($row[10] ==! NULL)
    {
      echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=8\"><img src=\"visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=" . $row[10] . "\"></a><br>";
      echo $row[10] . "<br>";
    }
    else if ($row[10] == NULL)
    {

      ?>
        <form action="index.php?p=insert" method="post">
          <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
          <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
          <select name="insert_ep"><option value="8">8</option></select>
          <input type="text" placeholder="Algorithm" name="insert_alg">
          <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
        </form>
      <?php
    }

      // 9th Case
    if ($row[11] ==! NULL)
    {
      echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=9\"><img src=\"visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=" . $row[11] . "\"></a><br>";
      echo $row[11] . "<br>";
    }
    else if ($row[11] == NULL)
    {

      ?>
        <form action="index.php?p=insert" method="post">
          <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
          <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
          <select name="insert_ep"><option value="9">9</option></select>
          <input type="text" placeholder="Algorithm" name="insert_alg">
          <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
        </form>
      <?php
    }

      // 10th Case
    if ($row[12] ==! NULL)
    {
      echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=10\"><img src=\"visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=" . $row[12] . "\"></a><br>";
      echo $row[12] . "<br>";
    }
    else if ($row[12] == NULL)
    {

      ?>
        <form action="index.php?p=insert" method="post">
          <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
          <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
          <select name="insert_ep"><option value="10">10</option></select>
          <input type="text" placeholder="Algorithm" name="insert_alg">
          <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
        </form>
      <?php
    }

      // 11th Case
    if ($row[13] ==! NULL)
    {
      echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=11\"><img src=\"visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=" . $row[13] . "\"></a><br>";
      echo $row[13] . "<br>";
    }
    else if ($row[13] == NULL)
    {

      ?>
        <form action="index.php?p=insert" method="post">
          <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
          <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
          <select name="insert_ep"><option value="11">11</option></select>
          <input type="text" placeholder="Algorithm" name="insert_alg">
          <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
        </form>
      <?php
    }

      // 12th Case
    if ($row[14] ==! NULL)
    {
      echo "<a href=\"index.php?p=menu&oll=" . $get_oll . "&cp=" . $get_cp . "&ep=12\"><img src=\"visualcube/visualcube.php?fmt=svg&size=100&bg=t&view=plan&case=" . $row[14] . "\"></a><br>";
      echo $row[14] . "<br>";
    }
    else if ($row[14] == NULL)
    {

      ?>
        <form action="index.php?p=insert" method="post">
          <select name="insert_oll"><option value="<?php echo $_GET['oll']; ?>"><?php echo $_GET['oll']; ?></option></select>
          <select name="insert_cp"><option value="<?php echo $_GET['cp']; ?>"><?php echo $_GET['cp']; ?></option></select>
          <select name="insert_ep"><option value="12">12</option></select>
          <input type="text" placeholder="Algorithm" name="insert_alg">
          <input type="submit" value="Insert" onclick="return confirm('Are you sure you want to insert this algorithm?');">
        </form>
      <?php
    }
  }

?>
