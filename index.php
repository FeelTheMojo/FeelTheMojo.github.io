</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRide-Covoiturage</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

  
<body>


    <!--header-->
    <?php
    include("template/header.html");
    ?>
        

    <!--main-->
    
    <?php
    
    $uri = $_SERVER["REQUEST_URI"];

    if ($uri == "/"){
    include("/accueil.php");
    }
    else if ($uri == "/inscription"){
    include("/inscription.php");
    }
    else if ($uri == "/connexion"){
    include("/connexion.php");
    }
    else if ($uri == "/contact"){
    include("/contact.php");
    }
    else if ($uri == "/covoiturages"){
    include("/selection-covoiturages.php");
    }
    else if ($uri == "/resume"){
    include("/resume-covoiturage.php");
    }
    ?>
        

        
    <!--footer-->
    <?php
    include("template/footer.html");
    ?>

</body>
</html>