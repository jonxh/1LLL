<head>
  <title>Info</title>
</head>

<body>

  <div id="randomLink"></div>

  <script type="text/javascript">

    window.onload = function randomLink() {
      var ollArray = [];
      for (var i = 1; i <= 58; i++) {
        ollArray.push(i);
      }
      var cpArray = ['N','D','R','L','B','F'];
      var epArray = ['N','H','Z','Z2','UF1','UL1','UB1','UR1','UF2','UL2','UB2','UR2'];

      var ollValue = ollArray[Math.floor(Math.random() * ollArray.length)];

      var cpValue = cpArray[Math.floor(Math.random() * cpArray.length)];
      var epValue = epArray[Math.floor(Math.random() * epArray.length)];
      var randomLinkString = '<a href=\"index.php?p=menu&oll=' + ollValue + '&cp=' + cpValue + '&ep=' + epValue + '\">Random Case</a>';
      document.getElementById('randomLink').innerHTML=randomLinkString;
    }

  </script>

</body>
