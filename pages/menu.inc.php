<head>
  <title>1LLL algs</title>
  <script src="javascript/algs.js"></script>
</head>

<body>
  <?php
    $sql1 = "SELECT * FROM `oll_view`";
    $qry1 = mysqli_query($db_conn,$sql1);

    while ($row1 = mysqli_fetch_array($qry1)) {
      echo "<a href=\"index.php?p=menu&oll=" . $row1[0] . "\"><img src=visualcube/visualcube.php?fmt=svg&stage=oll&size=100&bg=t&view=plan&case=" . $row1[1] . "\">";
    }
  ?>
  <a href="index.php?p=menu&oll=1"><img src=""></a>
</body>
<script src="javascript/img.js"></script>
