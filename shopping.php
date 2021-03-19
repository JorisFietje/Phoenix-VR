<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    </head>
    <body>
      <img class="logo" src="image/Multiversum_logowit.png">
      <b><a class="logo-a">Multiversum</a></b>
      <div class="topnav" id="myTopnav">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
            <a href="shopping.php" class="active"><i class="fas fa-shopping-cart"></i></a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="product.php">Product</a>
            <a href="index.php">Home</a>
          </a>
      </div>

        <div class="container">
            <div class="row">
              <h1>Coming Soon........</h1>
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