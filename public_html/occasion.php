        <!-- SCRIPT PHP NON PUBLIER -->

<!DOCTYPE html>
<html lang="fr"> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vehicules occasions à vendre</title>
        <meta name="description" content="Vente vehicules d'occasion. Réviser, entretenu et preparer afin de garantir la satistfaction client"/>
        <link rel="shortcut icon" type="image/png" href="upload/logo/png.png" alt="logo site web negoce auto"/>
        <link href="../styles/style.css" rel="stylesheet">
        <link href="../styles/responsive.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
        <script src="../JavaScript/script.js" defer></script>
        <style>

        /*CSS ajouter pour géré les effets de bord*/
        .sectionCommentaires {
            border: 2px solid rgb(52, 52, 52);
            margin: 2%;
        }

        .titre {
            text-align: center;
            padding-bottom:1%;
            border-bottom: 2px solid rgb(52, 52, 52);
        }

        .sectionCommentairesAvancer {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .divSectionCommentaireAvancer1 {
            grid-row: 1;
            grid-column:1;
            padding:1%;
        }

        .divSectionCommentaireAvancer2 {
            grid-row: 1;
            grid-column:2/3;
            padding:1%;
        }

        .alignReference {
            text-align: center;
        }

        .alignement {
            text-align: center;
            width: 70%;
        } 

        li {
            list-style: none;
            display: inline;
        }

        </style>
    </head>
<body>
    <header>
        <div id="top" class="top_page">
            <h1 class="police1">Negoce auto</h1>
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
    <section id="occasion_front" class="occasion_front">
        <div class="style_atelier">
            <p class="police1 style_police_atelier">Voiture occasion</p>
            <hr>
        </div>
    </section>

    <section id="best_offer" class="">
        <div class="">           
            <h3 class="police1">Meilleures offres</h3>
            <p class="police2">de nouvelles voitures à des prix incroyables</p>
            <hr><br>
        </div>

        <div class="image-gallery">
        <!-- SCRIPT PHP NON PUBLIER -->
        </div>
    </section>

    <section id="map" class="map">
        <p class="police1 color_title_map">Venez nous voir !</p>
        <p class="police2">Et repartez avec votre nouvelle voiture !</p>
        <aside>
            <section class="items_map police3">
            <div>
                <img src="" alt="">
                <p>https://negoce-auto-malaunay.com</p>
            </div>
            <div>
                <img src="" alt="">
                <p>47 rue des couronnes</p>
                <p>75020 Paris, France</p>
            </div>
            <div>
                <img src="" alt="">
                <p>Tél: 01 23 45 67 89</p>
                <p>Fax: 01 23 45 67 89</p>
            </div>
        </section>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2589.9772354057322!2d1.031925176414284!3d49.522705471429944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e0e7d9c2ba076b%3A0xcfaa37853d34e6fa!2sN%C3%A9goce%20Automobiles%20-%20Quibeuf!5e0!3m2!1sfr!2sfr!4v1686913779080!5m2!1sfr!2sfr" class="localisation" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            

        </aside>
    </section>   
<hr class="down_map">

    <footer class="map">
        <img alt="logo" src="../upload/logo/png.png" width="200px" class="radius"></a>
        <div>
                <table class="police3">
                    <tr>
                      <th colspan="2">Horaires d'ouverture
                      </th>
                    </tr>
                    <tr>
                      <th scope="row">lun:</th>
                          <td>08:45 - 12:00,</td>
                          <td>14:00 - 18:00</td>
                    </tr>
                    <tr>
                          <th scope="row">mar:</th>
                          <td>08:45 - 12:00,</td>
                          <td>14:00 - 18:00</td>
                    </tr>
                        <tr>
                          <th scope="row">mer:</th>
                          <td>08:45 - 12:00,</td>
                          <td>14:00 - 18:00</td>
                    </tr>
                        <tr>
                          <th scope="row">jeu:</th>
                          <td>08:45 - 12:00,</td>
                          <td>14:00 - 18:00</td>
                    </tr>
                        <tr>
                          <th scope="row">ven:</th>
                          <td>08:45 - 12:00,</td>
                          <td>14:00 - 18:00</td>
                    </tr>
                        <tr>
                          <th scope="row">sam:</th>
                          <td>08:45 - 12:00</td>
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
     
</body>
</html>