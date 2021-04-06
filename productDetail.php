<?php
$page = "productDetail";
$error = 0;
$error_message = "";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <?php include_once("config.php"); ?> 

<?php
if (isset($_GET["id"]) && !empty($_GET["id"])) {

    $query = "SELECT * FROM products WHERE id = ?";
    $productID = $_GET["id"];

    $pre_query = $conn->prepare($query);
    $pre_query->bind_param("i", $productID);
    $pre_query->execute();
    if ($pre_query->errno) {
        $error = 1;
        $error_message = "Kan product door onbekende fout selecteren uit database.";
        exit();
    }
    $result = $pre_query->get_result(); 
    if($result->num_rows >= 1){
        $row = $result->fetch_assoc();
        $id = $row["id"];
        $product_name = $row["product_name"];
        $product_desc = $row["product_desc"];
        $product_price = $row["product_price"];
        $product_pic = $row["product_pic"];
        
    }else{
        $error = 1;
        $error_message = "Kan product niet vinden.";
        
    }
    
}
?>
</head>

<body>
    <?php include_once("incl/menu.php"); ?>

    <div class="container container-form">
        <div class="row">
            <div class="card mb-3" style="max-width: 80%;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="<?php echo $product_pic; ?>" alt="Product foto">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product_name; ?></h5>
                            <p class="card-text"><?php echo $product_desc; ?></p>
                            <p class="card-text">
                            <span class="price">€ <?php echo $product_price; ?>,-</span></p>
                            <a href="#" class="btn btn-primary">Voeg toe aan winkelwagen <i class="fas fa-shopping-cart"></i></a>
                            
                        </div>
                    </div>
                </div>
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