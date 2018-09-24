<head>
  <title>1LLL</title>
</head>

<body>
  <?php

    // View all OLL cases
    if (empty($_GET['oll']) and empty($_GET['cp'])and empty($_GET['ep'])) {
      include "functions/oll_view.php";
      ollView();
    }
    // View all CP cases
    else if (!empty($_GET['oll']) and empty($_GET['cp'])and empty($_GET['ep'])) {
      include "functions/cp_view.php";
      $get_oll = $_GET['oll'];
      cpView();
    }
    // View all EP cases
    else if (!empty($_GET['oll']) and !empty($_GET['cp']) and empty($_GET['ep'])) {
      include "functions/ep_view.php";
      epView();
    }
    // View individual EP cases
    elseif (!empty($_GET['oll']) and !empty($_GET['cp']) and !empty($_GET['ep'])) {
      include "functions/alg_view.php";
      algView();
    }

  ?>
</body>
