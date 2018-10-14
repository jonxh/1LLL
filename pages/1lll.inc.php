<head>
  <title>1LLL</title>
</head>

<body>
  <?php

  // View all OLL cases
  if (empty($_GET['oll']) and empty($_GET['case']) and empty($_GET['id'])) {
    include "functions/oll_view.php";
    ollView();
  }
  // View all algs for each OLL
  elseif (!empty($_GET['oll']) and empty($_GET['case']) and empty($_GET['id'])) {
    if ($_GET['oll'] == 20 or $_GET['oll'] == 58) {
        include "functions/algs_view3.php";
      algsView3();
    } elseif ($_GET['oll'] == 1 or $_GET['oll'] == 21 or $_GET['oll'] == 55 or $_GET['oll'] == 56 or $_GET['oll'] == 57) {
        include "functions/algs_view2.php";
      algsView2();
    } else {
        include "functions/algs_view.php";
      algsView();
    }
  }
  // View individual 1LLL cases
  elseif (!empty($_GET['oll']) and !empty($_GET['case']) and empty($_GET['id'])) {
    include "functions/case_view.php";
    caseView();
  }
  // View individual 1LLL algs
  elseif (!empty($_GET['oll']) and !empty($_GET['case']) and !empty($_GET['id'])) {
    include "functions/alg_view.php";
    algView();
  }

  ?>
</body>
