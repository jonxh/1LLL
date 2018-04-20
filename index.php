<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="header.js"></script>
  </head>
  <body>
    <div class="header">
      <div onclick="openclose()" class="hamburger"><div></div><div></div><div></div>
      </div><br>
      <div id="headerLinks">
        <ul>
          <li><a href="index.php?p=home"><i class="gicon">home</i></a></li>
          <li><a href="index.php?p=1lll"><i class="gicon">apps</i></a></li>
          <li><a href="index.php?p=settings"><i class="gicon">settings</i></a></li>
        </ul>
      </div>
    </div>
    <div>
        <?php
  				if (!empty($_GET['p'])) {
  					$pages_dir= 'p';
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
  					include ($pages_dir .'/home.inc.php');
  				}
        //Ullerik var her
  			?>
    <div>
  </body>
</html>
