
<?php
/*
<img class="logo" src="image/Multiversum_logowit.png">
<b><a href="index.php" class="logo-a">Multiversum</a></b>
<div class="topnav" id="myTopnav">
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
        <a href="shopping.php"><i class="fas fa-shopping-cart"></i></a>
        <a href="contact.php"<?php if($page == "contact"){echo "class=\"active\"";} ?>>Contact</a>
        <a href="about.php"<?php if($page == "about"){echo "class=\"active\"";} ?>>About</a>
        <a href="product.php"<?php if($page == "product"){echo "class=\"active\"";} ?>>Product</a>
        <a href="index.php" <?php if($page == "home"){echo "class=\"active\"";} ?>>Home</a>
    </a>
</div>
*/
?>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php"><img class="logo" src="image/Multiversum_logowit.png">Multiversum</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Producten</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Over Ons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shopping.php">Winkelwagen</a>
                    </li>
                </ul>
            </div>
        </nav> 
