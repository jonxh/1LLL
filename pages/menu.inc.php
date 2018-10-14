<head>
  <title>1LLL</title>
</head>

<body>
  <?php

    // View all OLL cases
    if (empty($_GET['oll']) and empty($_GET['cpep'])) {
      include "functions/oll_view.php";
      ollView();
    }
    // View all CP and EP algs
    elseif (!empty($_GET['oll']) and empty($_GET['cpep'])) {
      include "functions/cp_view.php";
      cpView();
    }
    // View individual 1LLL algs
    elseif (!empty($_GET['oll']) and !empty($_GET['cpep'])) {
      include "functions/alg_view.php";
      algView();
    }

  ?>
</body>
