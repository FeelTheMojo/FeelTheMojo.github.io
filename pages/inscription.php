

<!--bannière-->
<?php
    include("template/banniere inscription.html");
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
            <label></label>
            <input type="text" placeholder="Nom">
          </div>
          <div>
            <label for="prenom"> </label>
            <input type="text" placeholder="Prénom" name="prenom">
            <label for="pseudo"></label>
            <input type="text" placeholder="pseudo" name="pseudo">
          </div>
          <div>
            <label for="email"></label>
            <input type="email" placeholder="email" name="email">
            <label for="phone"></label>         
            <input type="tel" placeholder="numéro de téléphone" name="phone">
            <label for="adress"></label>         
            <input type="text" placeholder="adresse" name="adress">
            <label for="date-of-birth"></label>
            <input type="date" placeholder="date de naissance" name="date-of-birth">
            <label for="password"></label>
            <input type="password" placeholder="Mot de passe"name="password">
            <input type="submit" name="" id="" value="S'inscrire">
            <p>Vous avez deja un compte ? <a href="/connexion">Se connecter</a></p>
          </div>
        </div>
      </div>
    </form>
    </div>
</body>
</html>
