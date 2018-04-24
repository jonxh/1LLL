<head>
  <title>1LLL <?php //echo $_GET['oll'] . "-" . $_GET['cp'] . "-" . $_GET['ep'] ?></title>
</head>

<body>
  <?php

    if (empty($_GET['oll']) and empty($_GET['cp'])and empty($_GET['ep']))
    {
      include "functions/oll_view.php";
      ollView();
    }
    else if (!empty($_GET['oll']) and empty($_GET['cp'])and empty($_GET['ep']))
    {
      $oll_get = $_GET['oll'];
      if ($oll_get == 1 or $oll_get == 21 or $oll_get == 55 or $oll_get == 56 or $oll_get == 57)
      {
        include "functions/cp_view.php";
        cpView2();
      } elseif ($oll_get == 20 or $oll_get == 58) {
        include "functions/cp_view.php";
        cpView3();
      } elseif ($oll_get != 1 or $oll_get != 21 or $oll_get != 55 or $oll_get != 56 or $oll_get != 56 or $oll_get != 57 or $oll_get != 20 or $oll_get != 58) {
        include "functions/cp_view.php";
        cpView1();
      }
    }
    else if (!empty($_GET['oll']) and !empty($_GET['cp']) and empty($_GET['ep']))
    {
      include "functions/ep_view.php";
      epView();
    }
    elseif (!empty($_GET['oll']) and !empty($_GET['cp']) and !empty($_GET['ep']))
    {
      include "functions/alg_view.php";
      algView();
    }

  ?>
</body>
