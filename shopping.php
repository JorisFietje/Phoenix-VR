<?php
$page = "shoppingCart";
$error = 0;
$error_message = "";

$totalPrice = 0;
$tax = 21;
$subtotal = 0;

if(isset($_GET["emptyCart"])){
    $cookie_name = "shoppingCart";
    $emptyArray = array("empty");
    setcookie($cookie_name, json_encode($emptyArray), time() + (86400 * 30), "/");
    header("Location: http://localhost/Phoenix-VR-master/shopping.php");
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
            <?php
            if (isset($_COOKIE["shoppingCart"])) {
              $cart = json_decode($_COOKIE["shoppingCart"]);
              if ($cart[0] == "empty") {
                $error = 1;
                $error_message = "Winkelwagen is leeg";
              }
            }
            if (!$error) {

              for ($i = 0; $i <= count($cart) - 1; $i++) {

                $query = "SELECT * FROM products WHERE ID = ?";

                $pre_query = $conn->prepare($query);
                $pre_query->bind_param("i", $cart[$i]);
                $pre_query->execute();
                $result = $pre_query->get_result();
                if ($result->num_rows >= 1) {
                  $row = $result->fetch_assoc();
                  $totalPrice = $totalPrice + $row["product_price"];
                  echo "<tr>
                          <td><img width=\"50\" style=\"border-radius:5px;\" src=\"" . $row["product_pic"] . "\"></td>
                          <th scope=\"row\">" . $row["id"] . "</th>
                          <td>" . $row["product_name"] . "</td>
                          <td>€" . $row["product_price"] . ",-</td>
                          <td><a href=\"productDetail.php?id=" . $row["id"] . "\" class=\"btn btn-primary\">Bekijk</a></td>
                        </tr>";
                        
                } else {
                  echo "<tr>
                          <td><img width=\"50\" style=\"border-radius:5px;\" src=\"https://i.tyroni.com/yylyr4xe.png\"></td>
                          <th scope=\"row\">#</th>
                          <td>Product bestaat niet meer</td>
                          <td></td>
                          <td><a href=\"#\" style=\"cursor: not-allowed;\" class=\"btn btn-danger\" >Bekijk</a></td>
                        </tr>";
                }
              }
            }else{
              echo "<div class=\"alert alert-danger\" role=\"alert\">Winkelwagen is leeg</div>"; 
            }
            ?>

          </tbody>
        </table>
        <br><br>
        <?php
        if(!$error){
        echo "<a href=\"shopping.php?emptyCart\" class=\"btn btn-warning\">Maak winkelwagen leeg</a><br><br>";
        $totalTax = $totalPrice / 100 * $tax;
        $subTotal = $totalPrice + $totalTax;
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
              <td>&euro;<?php echo $totalPrice; ?>,-</td>
              <td>&euro;<?php echo $totalTax; ?>,-</td>
              <th>&euro;<?php echo $subTotal; ?>,-</th>
            </tr>
          </tbody>
        </table>
        <a href="#" class="btn btn-success">Betaal <i class="fab fa-paypal"></i></a>
         <?php } ?>
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
