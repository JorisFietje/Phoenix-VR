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
                <a href="shopping.php"><i class="fas fa-shopping-cart"></i></a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
                <a href="product.php" class="active">Product</a>
                <a href="index.php">Home</a>
            </a>
          </div>

          <h3>VR Brillen:<br></h3><p>
            Met een VR-bril duik je in de wondere wereld van Virtual Reality! Zet een VR-bril op je hoofd en geniet van de mooiste VR-applicaties en 360-graden video's. Kies voor een VR-bril die je op een PC aansluit voor extra power, of voor een standalone VR-bril om te genieten van extra vrijheid zonder kabels.
        </p>

        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                <div class="card product1">   
                    <img src="image/oculusgo.png" alt="Oculus Go" style="width:100%">
                    <h1>Oculus Go 32GB</h1>
                    <p class="price">€ 329,47</p>
                    <p>ExLibris: Voor het specifieke doel waarvoor ik de Oculus Go in wil zetten (eenvoudige VR-ervaring in een museum middels een 360 graden filmpje) 
                    voldoet de headset in veel opzichten uitstekend. De prijs/kwaliteitsverhouding is ook dik in orde. <a href="#productdetail.html">Lees verder »</a></p>
                    <p><button>In Winkelwagen</button></p>
                  </div>
                  
                  <div class="card product2">   
                    <img src="image/oculusgo.png" alt="Oculus Go" style="width:100%">
                    <h1>Oculus Go 32GB</h1>
                    <p class="price">€ 329,47</p>
                    <p>ExLibris: Voor het specifieke doel waarvoor ik de Oculus Go in wil zetten (eenvoudige VR-ervaring in een museum middels een 360 graden filmpje) 
                    voldoet de headset in veel opzichten uitstekend. De prijs/kwaliteitsverhouding is ook dik in orde. <a href="#productdetail.html">Lees verder »</a></p>
                    <p><button>In Winkelwagen</button></p>
                  </div>

                  <div class="card product3">   
                    <img src="image/oculusgo.png" alt="Oculus Go" style="width:100%">
                    <h1>Oculus Go 32GB</h1>
                    <p class="price">€ 329,47</p>
                    <p>ExLibris: Voor het specifieke doel waarvoor ik de Oculus Go in wil zetten (eenvoudige VR-ervaring in een museum middels een 360 graden filmpje) 
                    voldoet de headset in veel opzichten uitstekend. De prijs/kwaliteitsverhouding is ook dik in orde. <a href="#productdetail.html">Lees verder »</a></p>
                    <p><button>In Winkelwagen</button></p>
                  </div>
                </div>
                <div class="col-4"></div>
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
