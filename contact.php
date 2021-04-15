<!DOCTYPE html>
<html>

  <?php include_once("incl/header.php"); ?>

    <body>
    <?php include_once("incl/menu.php"); ?>

      <div class="container">
      <center><h1>Contact</h1></center>
    <div class="col-4">
      <h4>Contactgegevens:</h4><br><br>
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
          <input type="text" id="subject" name="onderwerp">

          <label for="message">Bericht</label>
          <textarea></textarea>
      
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