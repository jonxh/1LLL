<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  </head>
  <body>
    <div id="header">
      <a href="index.php" style="font-size:30px;">1LLL Algorithms</a><br>
    </div>
    <hr>
    <div>
      <?php
  			if (!empty($_GET['p'])) {
  				$pages_dir= 'pages';
  				$pages = scandir($pages_dir, 0);
  				unset($pages[0], $pages[1]);

  				$p = $_GET['p'];
  				if (in_array($p .'.inc.php', $pages)) {
  					include ($pages_dir .'/'. $p .'.inc.php');
  				} else {
  					echo ("Sorry, this site does not exist.");
  				}
  			} else {
  				$pages_dir= 'pages';
  				include ($pages_dir .'/menu.inc.php');
  			}
  		?>
    <div>
  </body>
</html>
