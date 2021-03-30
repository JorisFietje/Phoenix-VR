<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/contact.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Multiversum</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product.php">Producten</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact <span class="sr-only">(current)</span></a>
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
      <div class="container">
      <h1>Contact</h1>
    <div class="col-4">
      Contactgegevens:<br><br>
      Multiversum B.V. <br>
      Steenweg 21, 3511 JL, Utrecht<br>
      info@multiversum.nl<br>
      +31 6 123 456 78<br>
      KVK nummer: 87654321<br>
      BTW nummer: NL 123456789B01<br>
      </div>
    <div class="col-4">
      <div class="container-form">
        <form action="/action_page.php" methode="POST">
          <label for="vname">Voornaam</label>
          <input type="text" id="vname" name="firstname">
      
          <label for="aname">Achternaam</label>
          <input type="text" id="aname" name="lastname">
      
          <label for="email">Email</label>
          <input type="email" id="email" name="email" pattern="^[^\s,@]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
      
          <label for="subject">Onderwerp</label>
          <textarea id="subject" name="onderwerp" style="height:200px"></textarea>
      
          <input type="submit" value="Verstuur">
        </form>
      </div>
    </div>
    <div class="col-4"></div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>