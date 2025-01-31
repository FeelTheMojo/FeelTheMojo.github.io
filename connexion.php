<!--bannière-->
<?php
    include("template/banniere connexion.html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRide - S'inscrire</title>
    <link rel="stylesheet" href="CSS/inscription.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="form-place">
      <form action="POST">
        <div class="name-field">
          <div>
            <label for=""></label>
            <input type="email" placeholder="email">
            <label for=""></label>
            <input type="password" placeholder="Mot de passe">
             <input type="submit" name="" id="" value="Se connecter">
            <p>Vous n'avez pas encore de compte ? <a href="/inscription">S'inscrire</a></p>
          </div>
        </div>
      </div>
    </form>
    </div>
</body>
</html>

<?php

