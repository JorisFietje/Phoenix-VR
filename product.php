<?php
$page = "product";
?>
<!DOCTYPE html>
<html>

<?php include_once("incl/header.php"); ?>
</head>

<body>
  <?php include_once("incl/menu.php"); ?>

  <br>

  <div class="container">
    <div class="row">
    <br>
      <h2>VR Brillen:<br></h2>
      <p>
      <p>Met een VR-bril duik je in de wondere wereld van Virtual Reality! </p>
      <p>Zet een VR-bril op je hoofd en geniet van de mooiste VR-applicaties en 360-graden video's.
        Kies voor een VR-bril die je op een PC aansluit voor extra power, of voor een standalone VR-bril om te genieten
        van extra vrijheid zonder kabels.
      </p>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <?php
      $query = "SELECT * FROM products ORDER BY ID DESC";
      $result = $conn->query($query);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          if ($row["active"] == "yes") {
            echo "
                <div class=\"card\" style=\"width: 18rem;\">
                  <img src=\"" . $row["product_pic"] . "\" class=\"card-img-top\">
                <div class=\"card-body\">
                  <h5 class=\"card-title\">" . $row["product_name"] . "</h5>
                  
                <span class=\"price\">€" . $row["product_price"] . ",-</span>
                <a href=\"productDetail.php?id=" . $row["id"] . "\" class=\"btn btn-primary\">Bekijk product</a>
              </div>
            </div>";
          }
        }
      } else {
        //echo "No results.";
      }
      ?>
      <br><br>
      <hr>
      <br><br>





  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
  </script>


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


</div>

</html>
