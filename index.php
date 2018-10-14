<?php
  include "db.php";
  include "functions/functions.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <?php echo titleFunction(); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  </head>
  <body>
    <div id="header">
      <a href="index.php">1LLL</a>
      <div id="menubar">
        <a href="index.php"><i class="material-icons"style="font-size: 30px;position: relative; top: 5px; left: 0px;">grid_on</i></a>
        <a href="index.php?p=info"><i class="material-icons"style="font-size: 30px;;position: relative; top: 5px; left: 0px;">info</i></a>
      </div>
    </div>
    <div id="content">
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
  				include ($pages_dir .'/1lll.inc.php');
  			}
  		?>
    <div>
  </body>
</html>
