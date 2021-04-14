<?php
$page = "addProduct";
$error = 0;
$error_message = "";
?>
<!DOCTYPE html>
<html>



<?php include_once("incl/header.php"); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $productName = $_POST["product_name"];
    $productDesc = $_POST["product_desc"];
    $productPic = $_POST["product_pic"];
    $productPrice = intval($_POST["product_price"]);
    
    if (!isset($productName) || empty($productName)) {
        $error = 1;
        $error_message .= "Product naam is niet ingevuld<br>";
    }

    if (!isset($productDesc) || empty($productDesc)) {
        $error = 1;
        $error_message .= "Product beschrijving is niet ingevuld<br>";
    }

    if (!isset($productPic) || empty($productPic)) {
        $error = 1;
        $error_message .= "Product foto URL is niet ingevuld<br>";
    }

    if ($productPrice == 0) {
        $error = 1; 
        $error_message .= "Product prijs is niet ingevuld<br>";
    }


    if ($error == 0) { // Als er geen errors zijn
        $query = "INSERT INTO products (product_name, product_desc, product_pic, product_price)";
        $query .= "VALUES(?,?,?,?)";

        $pre_query = $conn->prepare($query);
        $pre_query->bind_param("sssi", $productName, $productDesc, $productPic, $productPrice);
        $pre_query->execute();
        if ($pre_query->errno) {
            $error = 1;
            $error_message = "Kan product door onbekende fout niet toevoegen aan database.";
            exit();
        } else {
            $success = 1;
            $success_message = "Product is sucessvol toegevoegd";
        }
    }
}
?>
</head>

<body>
    <?php include_once("incl/menu.php"); ?>

    <div class="container container-form">
        <div class="row">
            <?php
            if ($error == 1) {
                echo "<div class=\"alert alert-danger\" role=\"alert\">" . $error_message . "</div>";
            }
            if (isset($success)) {
                echo "<div class=\"alert alert-success\" role=\"alert\">" . $success_message . "</div>";
            }
            ?>

            
            <form action="addProduct.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Product naam</label>
                    <input name="product_name" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Product beschrijving</label>
                    <textarea name="product_desc" class="form-control" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Product afbeelding URL</label>
                    <input name="product_pic" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Product prijs</label>
                    <input name="product_price" type="number" class="form-control">
                </div>
                <button class="btn btn-primary" type="submit">Voeg product toe</button>
            </form>

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
