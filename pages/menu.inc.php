<head>
  <title>1LLL Algs</title>
</head>

<body>
  <?php

    include "functions/view.php";

    if (empty($_GET['oll']) and empty($_GET['cp'])and empty($_GET['ep']))
    {
      oll_view();
    }
    else if (!empty($_GET['oll']) and empty($_GET['cp'])and empty($_GET['ep']))
    {

      $oll_get = $_GET['oll'];
      if ($oll_get == 1 or $oll_get == 21 or $oll_get == 55 or $oll_get == 56 or $oll_get == 56 or $oll_get == 57)
      {
        cp_view2();
      } elseif ($oll_get == 20 or $oll_get == 58) {
        cp_view3();
      } elseif ($oll_get != 1 or $oll_get != 21 or $oll_get != 55 or $oll_get != 56 or $oll_get != 56 or $oll_get != 57 or $oll_get != 20 or $oll_get != 58) {
        cp_view1();
      }

    }
    else if (!empty($_GET['oll']) and !empty($_GET['cp']) and empty($_GET['ep']))
    {
      ep_view();
    }
    elseif (!empty($_GET['oll']) and !empty($_GET['cp']) and !empty($_GET['ep']))
    {
      alg_view();
    }

  ?>
</body>
