        <!-- SCRIPT PHP NON PUBLIER -->


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage automobile à malaunay Négoce auto</title>
    <meta name="description" content="Le garage Négoce auto vous propose des prestations d'entretien automobile, carrosserie et vente de véhicules."/>
    <link rel="shortcut icon" type="image/png" href="upload/logo/png.png" alt="logo site web negoce auto"/>
    <link href="styles/style.css" rel="stylesheet">
    <link href="styles/responsive.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <script src="../JavaScript/fusion.js"defer ></script>
    <style>
        /*CSS ajouter pour géré les effets de bord*/
        .stopMargin {
            margin: 0%;
        }

        .buttons-container {
            text-align: center;
            margin-top: 50px;
        }

        .btn {
            margin: 10px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #0056b3;
        }

        .background_effect {
            height: 80%;
            display: grid;
            grid-template-rows: repeat(3, 0.5fr);
            color: #f9fafa;
            
            /*-----background_effect------*/
            width: 100%; height: 80vmin;
            min-height: 15em;
            background: linear-gradient(#000, transparent, #000), 
                var(--img) 50%/ cover;
            background-attachment: fixed;
            background-blend-mode: multiply;
            
            &:nth-of-type(1) {
                --img: url(upload/background/parking.jpg);
            }
        }

        .atelier_front {
            height: 80%;
            display: grid;
            grid-template-rows: repeat(3, 0.5fr);
            color: #f9fafa;
            
            /*-----background_effect------*/
            width: 100%; height: 55vmin;
            min-height: 15em;
            background: linear-gradient(#000, transparent, #000), 
                var(--img) 50%/ cover;
            background-attachment: fixed;
            background-blend-mode: multiply;
            
            &:nth-of-type(1) {
                --img: url(upload/background/interieur1.jpg);
            }}

        
        .contenant {
            margin-left: auto;
            margin-right: auto;
            width: auto;
            height: auto;
        }

        .texte {
            text-align: center;            
            margin-left: auto;
            margin-right: auto;
            width: 80%;
            height: 2em;
        }

        hgroup {
            display: none;
        }

        article:hover + hgroup {
            display: block;
        }

    </style>
</head>
<body>
    <header>
        <div id="top" class="top_page">
            <h1 class="police1"><a href ="login.php"> Negoce auto</a></h1>
            <h2 class="police2"> Tél : 02 35 37 39 09</h2>
        </div>
        <nav class="police2">
            <ul class="liste_items_nav">
                <li class="items_nav"><a href="index.php">accueil</a></li>
                <hr class="design_hr_nav">
                <li class="items_nav"><a href="atelier.php">atelier</a></li>
                <hr class="design_hr_nav">
                <li class="items_nav"><a href="occasion.php">occasion</a></li>
                <hr class="design_hr_nav">
                <li class="items_nav"><a href="avis.php">témoignage</a></li>
            </ul>
        </nav>
    </header> 
<main>
    
    <section id="slogan" class="slogan">
        <div class="style_slogan">
            <p class="police1 style_police_slogan">Negoce auto</p>
            <p class="police2">Vente & reprise voiture. Mécanique/carrosserie</p>
            <hr class="hr_slow">
        </div>
    </section>

    <section id="car_brand" class="car_brand">
        <a href="https://occasion.largus.fr/auto/negoce-automobiles-quibeuf_159375/"><img src="upload/logo/argus.jpg" class="image_brand"></a>
    </section>

    <section id="service" class="service">
        <div class="service_occasion">
            <h3 class="police1">voiture neuve & occasion</h3>
        </div>
        <div class="service_entretien">
            <h3 class="police1">réparation entretien mécanique</h3>
        </div>
    </section>

    <section id="best_offer" class="position_inside_grid">
        <div>           
            <h3 class="police1">Meilleures offres</h3>
            <p class="police2">de nouvelles voitures à des prix incroyables</p>
            <hr>
        </div>

        <aside class="item_top">
        <!-- SCRIPT PHP NON PUBLIER -->
        </aside>
        <a href="occasion.php" class="bouttonOffres"><button class="style_1">voir toutes les offres</button></a>
    </section>  

    <section id="argument" class="argument">
    <h3 class="police1 stopMargin">Choisir négoce auto</h3>
    <div class="container">
            <div class="contenant"><img alt="logo" src="../upload/icons/icon_2.png" class="pixel"></div>
            <div class="contenant"><img alt="logo" src="../upload/icons/icon_3.png" class="pixel"></div>
            <div class="contenant"><img alt="logo" src="../upload/icons/icon_5.png" class="pixel"></div>
            <div class="contenant"><img alt="logo" src="../upload/icons/icon_6.png" class="pixel"></a></div>
            <div class="texte">Professionnalisme</div>
            <div class="texte">Confiance</div>
            <div class="texte">Propreté</div>
            <div class="texte">Rapidité</div>
    </div>
    </section>  

    <div class="background_effect"></div>

    <section id="map" class="map">
        <p class="police1 color_title_map">Venez nous voir !</p>
        <p class="police2">Et repartez avec votre nouvelle voiture !</p>
        <aside>
            <section class="items_map police3">
            <div>
                <p>https://negoce-auto-malaunay.com</p>
            </div>
            <div>
                <p>62 Rue Georges Pellerin</p>
                <p>76770 Malaunay, France</p>
            </div>
            <div>
                <p>Tél: 02 35 37 39 09</p>
                <p>Fax: 02 35 37 39 09</p>
            </div>
        </section>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2589.9772354057322!2d1.031925176414284!3d49.522705471429944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e0e7d9c2ba076b%3A0xcfaa37853d34e6fa!2sN%C3%A9goce%20Automobiles%20-%20Quibeuf!5e0!3m2!1sfr!2sfr!4v1686913779080!5m2!1sfr!2sfr" class="localisation" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            

        </aside>
    </section>   

    <hr class="down_map">

    <footer class="map">
        <img alt="logo" src="upload/logo/png.png" class="radius"></a>
        <div>
            <table class="police3">
                <tr>
                  <th colspan="2">Horaires d'ouverture
                  </th>
                </tr>
                <tr>
                  <th scope="row">lun:</th>
                      <td>Fermé</td>
                </tr>
                <tr>
                      <th scope="row">mar:</th>
                      <td>08:00 - 12:15,</td>
                      <td>14:00 - 18:30</td>
                </tr>
                    <tr>
                      <th scope="row">mer:</th>
                      <td>08:00 - 12:15,</td>
                      <td>14:00 - 18:30</td>
                </tr>
                    <tr>
                      <th scope="row">jeu:</th>
                      <td>08:00 - 12:15,</td>
                      <td>14:00 - 18:30</td>
                </tr>
                    <tr>
                      <th scope="row">ven:</th>
                      <td>08:00 - 12:15,</td>
                      <td>14:00 - 18:30</td>
                </tr>
                    <tr>
                      <th scope="row">sam:</th>
                      <td>Fermé</td>
                    </tr>
                    <tr>
                      <th scope="row">dim:</th>
                      <td>Fermé</td>
            </tr>
              
              </table>
              <br>
              <span class="police3">© <script>document.write(new Date().getFullYear());</script> copyright</span>
        </div>
        <a href="#top" class="police3 ">haut de page</a>
    </footer> 
</main>
</body>
</html>