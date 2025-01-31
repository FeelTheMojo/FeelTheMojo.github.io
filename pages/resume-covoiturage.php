<!--bannière-->
<?php
    include("template/banniere resume-covoiturage.html");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRide - Récapitulatif du covoiturage</title>
    <link rel="stylesheet" href="CSS/resume-covoiturage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/ea2d3f5f5d.js" crossorigin="anonymous"></script>
</head>
    
<body>

    <div class="resume-travel">
        <h2>Résumé du trajet :</h2>
            <div class="info-date">
                <h3>Mardi 14 janvier 2024</h3>
                <button class="travel-btn"><a href="https://www.google.fr/maps/place/86+Quai+Perrache,+69002+Lyon/@45.73247,4.8150746,16.81z/
                    data=!4m6!3m5!1s0x47f4ebd1a60da7d1:0x71603fb46c55d5d1!8m2!3d45.7325396!4d4.8181662!16
                    s%2Fg%2F11c0zv8w_f?entry=ttu&g_ep=EgoyMDI1MDEwOC4wIKXMDSoASAFQAw%3D%3D" target="_blank">Départ : 12h00 Lyon - 86 Quai Perrache </a></button>
                <hr>
                <button class="travel-btn"> <a href="https://www.google.fr/maps/place/Marseille-St-Charles/@43.3029601,5.367718
                    ,15.2z/data=!4m10!1m2!2m1!1sMarseille+gare!3m6!1s0x12c9c099884c9381:0xe0f22ea29d5631e8!8m2!3d43.3029941!4d5.3810431!15sCg5NYXJzZWlsbGUgZ2FyZVoQIg5tYXJzZWlsbGUg
                    Z2FyZZIBD3RyYW5zaXRfc3RhdGlvbuABAA!16s%2Fg%2F1v9gttrb?entry=ttu&g_ep=EgoyMDI1MDEwOC4wIKXMDSoASAFQAw%3D%3D" target="_blank">Arrivée : 15h00 Marseille - Sq. Narvik, 13232 Marseille</a></button>
            </div>

            <div class="map-integration">
            <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1456704.8067138705!2d3.8454100092324714!3d44.51256071209156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!
1s0x12c9c099884c9381%3A0xe0f22ea29d5631e8!2sMarseille-St-Charles%2C%20Sq.%20Narvik%2C%2013232%
20Marseille!3m2!1d43.3029941!2d5.381043099999999!4m5!1s0x47f4ebd1a60da7d1%3A0x71603fb46c55d5d1!2s86
%20Quai%20Perrache%2C%2069002%20Lyon!3m2!1d45.732539599999996!2d4.818166199999999!5e0!3m2!1sfr!2sfr!4v1736880781769!5m2!1sfr!2sfr" 
width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>



            <!--Profile of the driver-->
        <div class="profile-driver">
            <h3>Conducteur :</h3>
            <h4>Marcus</h4>
            <a href="#"><img src="https://pbs.twimg.com/profile_images/991623831763734529/Hi4CgRd6_400x400.jpg" alt=""></a>

            <div class="profile-driver-info">
                <p><strong>Véhicule :</strong> : Clio 2</p>
                <p><strong>Préférence :</strong> Pas d'animaux </p>
                <p><strong>Avis Conducteur :</strong>  <img src="https://img.icons8.com/?size=100&id=44053&format=png&color=000000" alt="">
                                                      <img src="https://img.icons8.com/?size=100&id=44053&format=png&color=000000" alt="">
                                                      <img src="https://img.icons8.com/?size=100&id=44053&format=png&color=000000" alt=""> 
                                                      <img src="https://img.icons8.com/?size=100&id=44053&format=png&color=000000" alt=""> 
                </p>
            </div>

        </div>


            <!--Profile of the passengers-->
        <div class="profiles-passengers">
            <h3>Passagers :</h3>
            <div>
                <h4>Fabien</h4>
               <a href=""><img src="https://img.freepik.com/photos-gratuite/portrait-homme-barbu-dans-studio-art_23-2149705899.jpg?t=st=1736865957~exp=1736869557
                ~hmac=e9b60bdc38da9883e6b676835f1375e8e71fc2f4d7e46cd75803e455ab164b08&w=740" alt="Fabien"></a>
            </div>
            <div>
                <h4>Emma</h4>
                <a href=""><img src="https://img.freepik.com/photos-gratuite/tir-isole-jeune-femme-recherche-agreable-porte-col-
                roule-blanc-chignon-regarde-expressions-faciales-calmes-pose-fond-rose_273609-32162.jpg?t=st=1736866016~exp=1736869616~hmac=6ccb8d5f
                b589824f1b8c2a84cdd309f1fcd1e1ee2e2caa8668b69bfce170d8ba&w=740" alt="Emma"></a>
            </div>
            <div>
                <h4>Bianca</h4>
               <a href=""><img src="https://img.freepik.com/photos-gratuite/superbe-belle-femme-sourire-agreable-visage-peau-saine-coupe-cheveux-afro-porte-pull-col-roule-blanc
               -decontracte_273609-30508.jpg?t=st=1736866182~exp=1736869782~hmac=f6f90b553f04b52512a8b78ba78fe50f0471adce9ebe258ba9130c43994f30e7&w=740" alt="Bianca"></a>
            </div>
        </div>

        <div class="btn-validation">
            <button class="travel-btn"><a href="#">Valider et réservez le trajet</a></button>
                <button class="travel-btn"><a href="#">Modifier le trajet </a></button>
        </div>
    </div>
</body>