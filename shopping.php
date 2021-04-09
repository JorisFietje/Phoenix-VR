<?php
$page = "shoppingCart";
$error = 0;
$error_message = "";

$totalPrice = 1000;
$tax = 21;
$subtotal = 0;

$cookie_name = "shoppingCart";
$cookie_value = "1";

if(isset($_COOKIE["shoppingCart"])){
  echo "<span>";
  echo var_dump(json_decode($_COOKIE["shoppingCart"]));
  echo "</span>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <?php include_once("incl/header.php"); ?>
</head>

<body>
  <?php include_once("incl/menu.php"); ?>

  <div class="container">
    <h1>Winkelwagen</h1>
    <?php


    ?>
    <div class="col-12">
      <div class="container-cart">
        <table class="table">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">#</th>
              <th scope="col">Product naam</th>
              <th scope="col">Product prijs</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><img width="50" style="border-radius:5px;" src="./image/celexon.png"></td>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td><a href="#" class="btn btn-primary">Bekijk</a></td>
            </tr>

          </tbody>
        </table>
        <br><br><br>
        <?php
        $totalTax = $totalPrice/100 * $tax;
        $subTotal = $totalPrice+$totalTax;
        ?>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Totaal</th>
              <th scope="col">Totaal btw(21%)</th>
              <th scope="col">Subtotaal</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>&euro;<?php echo $totalPrice;?>,-</td>
              <td>&euro;<?php echo $totalTax;?>,-</td>
              <th>&euro;<?php echo $subTotal;?>,-</th>
            </tr>
          </tbody>
        </table>
        <a href="#" class="btn btn-success">Betaal <i class="fab fa-paypal"></i></a>
                                    
      </div>
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
