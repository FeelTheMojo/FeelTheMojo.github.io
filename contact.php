<!--bannière-->
<?php
    include("template/banniere contact.html");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/contact.css">
    <title>Formulaire de Contact</title>
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
                <label for=""></label>
                <input type="text" placeholder="Prénom">
              </div>
              <div>
                <label for=""></label>
                <input type="email" placeholder="email">
                <label for=""></label>
                <input type="textarea" placeholder="Tapez votre message ici">
                <input type="submit" name="" id="" value="S'inscrire">
              </div>
            </div>
          </div>
        </form>
    </body>
</html>
