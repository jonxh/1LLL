<head>
  <title>1LLLs</title>
</head>

<body>
  <table class="algTable">
    <tr>
      <td>48</td>
      <td><img src="v/visualcube.php?fmt=svg&size=100&bg=eeeeee&stage=oll&view=plan&case=F3rU3r3F3R3F3RU3RU3R3"></td>
      <td>F R U R' U' R U R' U' F'</td>
    </tr>
  </table>
    <?php
      $sql = "SELECT * FROM 1lll ORDER BY id";
      $qry = mysqli_query($db_conn,$sql);
      echo "<table>";
      while ($row = mysqli_fetch_array($qry)) {
        echo  "<tr><td>" . $row[0] .
              "</td><td>" . $row[1] .
              "</td><td>" . $row[2] . "</td></tr>";
      }
    ?>
  </table>
</body>
