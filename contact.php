<!DOCTYPE html>
<html>

  <?php include_once("incl/header.php"); ?>

    <body>
    <!-- navbar geinclude -->
    <?php include_once("incl/menu.php"); ?>

  <!-- contact gegevens en contact formullier -->
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
    <!-- contact formullier -->
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>