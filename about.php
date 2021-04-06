<?php
$page = "about";
?>
<!DOCTYPE html>
<html>

<?php include_once("incl/header.php"); ?>
</head>

<body>
  <?php include_once("incl/menu.php"); ?>

  <div class="container">
    <div class="row">
      <h1>Multiversum VR Webshop</h1>
    </div>
  </div>

  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      } 
    }
  </script>

</body>

</html>
