<!--bannière-->
<?php
    include("template/banniere selection-covoiturages.html");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRide-Covoiturage</title>
    <link rel="stylesheet" href="CSS/selection-covoiturages.css">
    <script src="https://kit.fontawesome.com/ea2d3f5f5d.js" crossorigin="anonymous"></script>
</head>
<body>


<div class="filter">
            <legend>Filtre de recherche:</legend>
            <hr>
            <div>
               <h3>Ecoride :</h3>
                <label for="green-drive">Green Drive</label>
                <input type="checkbox" id="green-drive" name="green-drive" checked />
            </div>


            <h3>Horaire de départ :</h3>
            <div>
                <label for="eclectric-car">Matin</label>
                <input type="checkbox" id="electric-car" name="eclectric-car" />
            </div>
            <div>
                <label for="eclectric-car">Après midi</label>
                <input type="checkbox" id="electric-car" name="eclectric-car" />
            </div>
            <div>
                <label for="eclectric-car">Trajet de nuit</label>
                <input type="checkbox" id="electric-car" name="eclectric-car" />
            </div>
            <hr>

            <h3>Prix du trajet :</h3>

        <div>
            <form method="post" action="#" oninput="result.value=Range.value">
                <input type="range" step="10" name="Range" value="" min="0" max="100" >
                <br/>
                Prix Minimum du trajet=
                <output for="out" name="result"></output>
            </form>

            <form method="post" action="#" oninput="result.value=Range.value">
                    <input type="range" step="10" name="Range" value="" min="10" max="100" >
                    <br/>
                    Prix Maximum du trajet=
                    <output for="out" name="result"></output>
                </form>
                <hr>
                <h3>Note du Chauffeur</h3>
                <div>
                    <input type="checkbox" id="note-1" name="note-1" />
                    <label for="note-1">1</label>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div>
                    <input type="checkbox" id="note-2" name="note-2" />
                    <label for="note-2">2</label>
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div>
                    <input type="checkbox" id="note-3" name="note-3" />
                        <label for="note-3">3</label>
                             <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div>
                     <input type="checkbox" id="note-4" name="note-4" />
                        <label for="note-4">4</label>
                             <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div>
                    <input type="checkbox" id="note-5" name="note-5" />
                         <label for="note-5">5</label>
                            <i class="fa-solid fa-star"> </i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>

        </div>
</div>
        <section>
            <div class="card">
                    <div class="route"> 
                        <p>LYON : 12:00</p>
                        <hr>
                        <p>MARSEILLE: 15:00</p>
                    </div>
                <div class="passengers">
                    <div class="driver">
                        <img src="https://img.freepik.com/photos-gratuite/sm
                        iley-homme-detente-exterieur_23-2148739334.jpg?t=st=1737556991~exp
                        =1737560591~hmac=dfa8cddaa9956ef4fe1cdafdd4d4908b66034e12be2e59f1e589376ab0d75115&w=740" alt="">
                        <div class="star">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                         <div class="car">
                             <i class="fa-solid fa-car"></i>
                             <i class="fa-solid fa-bolt"></i>
                         </div>
                            <i class="fa-solid fa-user-large"></i>
                            <i class="fa-solid fa-user-large"></i>
                    <div class="price">
                        <i class="fa-solid fa-coins"></i>
                        <p>10</p>
                    </div>
                </div>
                <a href="/resume"><button>Selectionner ce trajet</button></a>
            </div>

            <div class="card-2">
                <div class="route">
                    <p>LYON : 09:00</p>
                    <hr>
                    <p>MARSEILLE: 12:00</p>
                </div>
            <div class="passengers">
                <div class="driver">
                    <img src="https://img.freepik.com/photos-gratuite/sm
                    iley-homme-detente-exterieur_23-2148739334.jpg?t=st=1737556991~exp
                    =1737560591~hmac=dfa8cddaa9956ef4fe1cdafdd4d4908b66034e12be2e59f1e589376ab0d75115&w=740" alt="">
                    <div class="star">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                </div>
                     <div class="car">
                         <i class="fa-solid fa-car"></i>
                         <i class="fa-solid fa-bolt"></i>
                     </div>
                        <i class="fa-solid fa-user-large"></i>
                <div class="price">
                    <i class="fa-solid fa-coins"></i>
                    <p>15</p>
                </div>
            </div>
                <a href="/resume"><button>Selectionner ce trajet</button></a>
        </div>

        <div class="card-3">
            <div class="route">
                <p>LYON : 14:00</p>
                <hr>
                <p>MARSEILLE: 17:00</p>
            </div>
        <div class="passengers">
            <div class="driver">
                <img src="https://img.freepik.com/photos-gratuite/sm
                iley-homme-detente-exterieur_23-2148739334.jpg?t=st=1737556991~exp
                =1737560591~hmac=dfa8cddaa9956ef4fe1cdafdd4d4908b66034e12be2e59f1e589376ab0d75115&w=740" alt="">
                <div class="star">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
            </div>
                 <div class="car">
                     <i class="fa-solid fa-car"></i>
                     <i class="fa-solid fa-bolt"></i>
                 </div>
                 <p>Complet</p>

            <div class="price">
                <i class="fa-solid fa-coins"></i>
                <p>10</p>
            </div>
        </div>
            <a href="/resume"><button>Selectionner ce trajet</button></a>
    </div> 
</section>


</body>
