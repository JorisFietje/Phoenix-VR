<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    </head>
    <body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Multiversum</a>
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
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Over Ons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shopping.php">Winkelwagen</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="image/jessica-lewis-DeyfdybVQhA-unsplash.jpg" alt="First slide" />
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/lux-interaction-xL3xDwWx7_s-unsplash.jpg" alt="Second slide" />
                   
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/thisisengineering-raeng-jqD8bSQY6Ic-unsplash.jpg" alt="Third slide" />
                  </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container">
        <center><h1 style="margin: 40px;">Best Verkochte VR-Brillen</h1></center>
          <div class="row">
            
          <div class="card" style="width: 18rem; margin: 40px;">
        <img src="image/oculusgo.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Oculus Go 32GB</h5>
          <p class="card-text">Voor het specifieke doel waarvoor ik de Oculus Go in wil zetten (eenvoudige VR-ervaring in een museum middels een 360 graden filmpje)
            voldoet de headset in veel opzichten uitstekend. De prijs/kwaliteitsverhouding is ook dik in orde. </p>
            <span class="price">€ 329,47</span><br>
            <a href="shopping.php" class="btn btn-primary">In winkelwagen</a>
          </div>
        </div>
        <div class="card" style="width: 18rem; margin: 40px;">
        <img src="image/oculusrifts.png" class="card-img-top">
        <div class="card-body">
        <h5 class="card-title">Oculus Rift S</h5>
          <p class="card-text">Goedkoop (relatief), scherp zat en met een (powered) usb hub (of makkelijk omruilen via coolblue, zeker binnen 30 dagen) is de setup snel en makkelijk. Tracking is prima overigens, behalve bij langdurig achter de rug zwaaien met de controllers, al weet ik niet waarom je dat ooit zou doen.</p>
            <span class="price">€ 342,50,-</span><br>
            <a href="shopping.php" class="btn btn-primary">In winkelwagen</a>
          </div>
        </div>
        <div class="card" style="width: 18rem; margin: 40px;">
        <img src="image/oculusquest2.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Oculus Quest 2</h5>
          <p class="card-text">De Quest 2 is een standalone-VR-headset die optioneel ook met een pc kan worden gekoppeld, voor gebruik met VR-apps voor de pc. Ten opzichte van zijn voorganger biedt de Quest 2 een snellere processor, een beeldscherm met een twee keer hogere resolutie etc.</p>
            <span class="price">€ 349,-</span><br>
            <a href="shopping.php" class="btn btn-primary">In winkelwagen</a>
          </div>
        </div>
          </div>
        </div>
        <footer class="bg-dark" style="marin-top: 60px;">
          <p>Gemaakt door Joris Fietjé en Thabit Oulali</p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>