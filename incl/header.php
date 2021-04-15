<head>
  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/contact.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <?php include_once("config.php"); ?>
  
  <?php
  if (!isset($_COOKIE["shoppingCart"]) && !isset($_GET["addCart"])) {
    $cookie_name = "shoppingCart";
    $emptyArray = array("empty");
    setcookie($cookie_name, json_encode($emptyArray), time() + (86400 * 30), "/");
  } else {
    if (isset($_GET["addCart"]) && !empty($_GET["addCart"])) {
      $addCart = $_GET["addCart"];
      if (is_numeric($addCart)) { 
 
        $cart = json_decode($_COOKIE["shoppingCart"]);
        if($cart[0] == "empty"){
          $cookie_name = "shoppingCart";
          $cookieArray = array($addCart);
          setcookie($cookie_name, json_encode($cookieArray), time() + (86400 * 30), "/");
          header("Location: http://localhost/Phoenix-VR-master/product.php?added");
          
        }else{
          $cookie_name = "shoppingCart";
          $cookieArray = array($addCart);
          for ($i = 0; $i <= count($cart)-1; $i++) {
            array_push($cookieArray, $cart[$i]);
          }
          setcookie($cookie_name, json_encode($cookieArray), time() + (86400 * 30), "/");
          header("Location: http://localhost/Phoenix-VR-master/product.php?added");
        }
        
      }else{
        header("Location: http://localhost/Phoenix-VR-master/product.php?failedAdd=ID");

      }
    } 
  }



  ?>
