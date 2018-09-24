<?php
  function titleFunction() {
    if (empty($_GET['oll']) and empty($_GET['cp'])and empty($_GET['ep'])) {
      echo "<title>1LLL</title>";
    } else if (!empty($_GET['oll']) and empty($_GET['cp'])and empty($_GET['ep'])) {
      echo "<title>1LLL " . $_GET['oll'] . "</title>";
    } else if (!empty($_GET['oll']) and !empty($_GET['cp'])and empty($_GET['ep'])) {
      echo "<title>1LLL " . $_GET['oll'] . "-" . $_GET['cp'] ."</title>";
    } else if (!empty($_GET['oll']) and !empty($_GET['cp'])and !empty($_GET['ep'])) {
      echo "<title>1LLL " . $_GET['oll'] . "-" . $_GET['cp'] . "-" . $_GET['ep'] ."</title>";
    }
  }
  
?>
