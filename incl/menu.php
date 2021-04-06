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
