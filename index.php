<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRide-Covoiturage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   


        <header>
            <nav class="navbar">
                <div class="navdiv"></div>
                <img class="img_logo" src="Images EcoRide/EcoRide Logo.png" alt="logo">
                <div class="logo"><a href=""></a></div>
                  <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Accès aux covoiturages</a></li>
                    <li><a href="#">Contact</a></li>
                    <button><a href="#">Se connecter</a></button>
                    <button><a href="#">S'inscrire</a></button>
                  </ul>
                </div>
            </nav>
        </header>


        <div class="banner">
            <div class="banner-title">
                <h2>EcoRide, Moins d'émissions, plus de partage.</h2></div>
        </div>

   
        <h2 class="title-search">Rechercher un covoiturage</h2>
        <div class="form-container">
            <form>
                <!--Champs départ-->
            <div class="form-group">
                <label class="departure" for="departure"></label>
                <input type="text" id="departure" name="departure" placeholder="Entrez le point de départ">
            </div>


                <!--Champs d'arrivée-->
            <div class="form-group">    
                <label class="arrival" for="arrival"></label>
                <input type="text" name="arrival" id="arrival" placeholder="Entrez le point d'arrivée">
            </div>


                <!--Champs date-->
            <div class="form-group">
                <label class="date" for="date"> </label>
                <input type="date" name="date" d="date">
            </div>

                <!--Bouton Recherche-->
                <button class="search-button" type="submit">Rechercher</button>

            </form>
        </div>

        <div class="info-group">

          <div class="group">
            <img class="info-img" src="https://img.freepik.com/vecteurs-libre/illustration-concept-partage-voiture_114360-15011.jpg?t=st=1736513342~exp=1736516942~hmac=1e1aea233c298f9ed8c5bb02bf7d7efb7267c05c95a9ccf63114dcf37143f0ed&w=1380" alt="">
            <h3>Un trajet en toute simplicité </h3>
            <p>Réserve en quelques clics ton trajet avec les membres de la communauté</p>
          </div>
          
          <div class="group">
            <img class="info-img" src="https://img.freepik.com/vecteurs-libre/illustration-concept-covoiturage_114360-9238.jpg?t=st=1736513980~exp=1736517580~hmac=72647c0dff4b75c4fc208d17f68ae7cc0efd07e3b84d0865f136bae309e72323&w=1380" alt="">
            <h3>Un trajet en toute simplicité </h3>
            <p>Réserve en quelques clics ton trajet avec les membres de la communauté</p>
          </div>

          <div class="group">
            <img class="info-img" src="https://img.freepik.com/vecteurs-libre/illustration-concept-objectifs-equipe_114360-5175.jpg?t=st=1736518085~exp=1736521685~hmac=40a76d24083b7f60fef025712d1b8605ba56504ca7057faa2c631f10ed21450c&w=826" alt="">
            <h3>Un trajet en toute simplicité </h3>
            <p>Réserve en quelques clics ton trajet avec les membres de la communauté</p>
          </div>

        </div>

        <div class="presentation-text">
            <h2>Présentation EcoRide</h2>
            <p>EcoRide est une startup française innovante spécialisée dans le covoiturage écologique. Notre mission est de révolutionner les déplacements
                en proposant une solution qui allie économie et respect de l'environnement.
                Notre plateforme se concentre exclusivement sur les déplacements en voiture,
                avec l'ambition de devenir la référence du covoiturage pour les voyageurs
                écoresponsables. Nous nous adressons tant aux personnes soucieuses de leur 
                impact environnemental qu'à celles recherchant 
                une alternative économique pour leurs trajets.</p>
                <img src="https://img.freepik.com/vecteurs-libre/groupe-personnes-voiture-electrique_53876-64654.jpg?t=st=1736594427~exp=1736598027~hmac=61de44bb4690a44ebd6cfdd8ccfc69e45428762da269403925a3a4624c2ba440&w=1380" alt="ecologic-car">
               
        </div>

          


    <footer>
        <p> copyright – tous droits réservés</p>
        <p>ecoride@contact.com</p>
        <a href="#">Mentions Légales</a>
    </footer>
   
</body>
</html>
