<?php
include "inc/script_newsletter.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache">

    <!--Début Référencement-->
    <meta name="author" content="ClickGames">
    <meta name="description" content="Bienvenu sur le site promotionnel du jeu Winchester.">
    <meta name="keywords" content="Winchester, Jaipur, western, jeu de société, clickgames, mmi, troyes">

    <!--Open Graph (le truc pour les réseaux sociaux)-->
    <meta property="og:title" content="Winchester - site promotionnel du jeu" />
    <meta property="og:type" content="siteweb" />
    <meta property="og:url" content="http://leosix.fr/promo/" />
    <meta property="og:image" content="http://leosix.fr/promo/img/cartes_header.png" />

    <link rel="stylesheet" href="scss/style.css">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/logo.png"/>
    <link rel="apple-touch-icon" href="img/logo.png"/>
    <title>Panier - Winchester, le jeu</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/language.js"></script>
    <script src="js/panier.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $(".burger").click(function() {
                $(".nav_links").toggle("quick");
            });
            $(".globe").click(function() {
                $(".list_lang").toggle("quick");
            });
        });

        $(document).ready(function () {
            var window_width = $(window).width() - $("#object").width();
            var document_height = $(document).height() - $(window).height();
            $(function () {
                $(window).scroll(function () {
                var scroll_position = $(window).scrollTop();
                var object_position_left = window_width * (scroll_position / document_height);
                    $("#object").css({
                        left: object_position_left,
                    });
                });
            });
        });
    </script>
</head>
<body>

<!--DEBUT MENU DE NAVIGATION-->
<header>
    <div class="nav_logo">
        <div class="rotate"><a class="logonav" href="index.php"><img src="img/logo.png" alt="logo winchester"></a></div>
    </div>
    <nav>
        <ul class="nav_links">
            <li><a href="index.php#le_jeu">Le jeu</a></li>
            <li><a href="index.php#actus">Actus</a></li>
            <li><a href="index.php#jouer_en_ligne">Jouer en ligne</a></li>
            <li><a href="index.php#contact">Contact</a></li>
        </ul>
    </nav>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
    <div class="nav_other">
        <a class="nav_panier" href="panier.php"><img src="img/panier.png" alt="icone panier" width="38px" height="38px"></a>
        <div class="globe"></div>
        <ul class="list_lang">
            <li><a href="#en" class="en"><img src="img/lang_en.png" alt="">ENGLISH</a></li>
            <li><a href="#fr" class="fr"><img src="img/lang_fr.png" alt="">FRANCAIS</a></li>
        </ul>
    </div>
</header>
 <!--FIN MENU DE NAVIGATION-->

<section class="partAchat">
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'mon_panier')">
            1 - Mon panier
        </button>
        <button class="tablinks" onclick="openCity(event, 'mes_adresses')">
            2 - Mes adresses
        </button>
        <button class="tablinks" onclick="openCity(event, 'mode_livraison')">
            3 - Mode de livraison
        </button>
        <button class="tablinks" onclick="openCity(event, 'paiement')">
            4 - Paiement securise
        </button>
    </div>




    <article id="mon_panier" class="tabcontent">
        <div class="panier">
            <div class="global-article">
                <div id="carte">
                    <img src="img/mockup.png" alt="packaging"/>
                </div>
                <div id="description">
                    <h1>Winchester, le jeu</h1>
                    <p>
                        Le jeu de carte, inspiré du jeu Jaïpur, sur le thème western. Contient 55 cartes et 60 jetons. Dimensions (LxHxP): 13 x 18 x 4 cm.
                    </p>
                    <span>Quantitée :</span>
                    <input
                            type="number"
                            value="1"
                            min="1"
                            max="9"
                            name="quantitee"
                            id="quantitee"
                    />
                    <br />
                    <span class="stock">En stock</span>
                    <br>
                </div>
            </div>
            <div class="l-r">
                <div id="left">
                    <div id="cadeau">
                        <input type="checkbox" name="check" id="" />
                        <p>Je souhaite emballer dans un papier cadeau (+2€)</p>
                    </div>
                    <div id="promo">
                        <input type="text" placeholder="Code promo" />
                        <button class="bg-button">
                            <svg
                                    class="bg-button"
                                    width="140"
                                    height="84"
                                    viewBox="0 0 313 84"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                        d="M51.4671 12.2146C73.558 20.4086 181.049 36.5725 273.491 12.2146C273.491 12.2146 310.397 2.49096 312.04 8.5512C312.93 11.8541 300.99 15.9268 298.164 28.7195C296.902 34.4192 298.34 40.538 301.244 52.561C305.459 69.972 308.001 71.3457 307.415 74.561C304.637 89.7603 244.213 80.6992 162.489 81.8976C162.489 81.8976 78.6627 83.1252 37.6004 74.561C31.6938 73.3333 26.9998 69.9427 17.788 69.933C16.3211 69.933 15.1672 70.0207 14.4728 69.0561C11.2262 64.5743 27.4888 50.018 25.269 36.0464C23.2349 23.2634 7.10922 19.8143 8.31205 14.0463C9.53443 8.17123 26.9216 8.49279 29.8945 8.5415C42.1965 8.77534 51.2422 12.1367 51.4671 12.2146Z"
                                        fill="none"
                                        stroke="#DFAA35"
                                        stroke-miterlimit="10"
                                />
                                <path
                                        d="M44.7 6.65214C66.7909 14.8461 174.282 31.01 266.724 6.65214C266.724 6.65214 303.63 -3.07154 305.273 2.9887C306.163 6.29163 294.223 10.3643 291.397 23.157C290.135 28.8568 291.573 34.9755 294.477 46.9985C298.692 64.4095 301.234 65.7833 300.648 68.9986C297.87 84.1979 237.445 75.1367 155.722 76.3352C155.722 76.3352 71.8956 77.5628 30.8333 68.9986C24.9267 67.7709 20.2328 64.3803 11.0209 64.3706C9.55402 64.3706 8.40007 64.4583 7.70576 63.4937C4.45911 59.0118 20.7217 44.4555 18.5018 30.4839C16.4678 17.7008 0.34213 14.2518 1.54496 8.48385C2.76734 2.60873 20.1545 2.93023 23.1274 2.97895C35.4197 3.21278 44.4751 6.56445 44.7 6.65214Z"
                                        stroke="black"
                                        stroke-miterlimit="10"
                                /></svg
                            ><span>Ajouter</span>
                        </button>
                    </div>
                </div>
                <div id="right">
                    <div id="frais">
                        <p>Frais de livraison indicatifs: <b>Gratuit</b></p>
                    </div>
                    <div id="total">
                        <p>Total panier:</p><b>18€</b>
                    </div>
                </div>
            </div>
            <div class="btn-panier">
                <div id="btn-left">
                    <button class="bg-button">
                        <svg
                                class="bg-button"
                                width="230"
                                height="84"
                                viewBox="0 0 313 84"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                    d="M51.4671 12.2146C73.558 20.4086 181.049 36.5725 273.491 12.2146C273.491 12.2146 310.397 2.49096 312.04 8.5512C312.93 11.8541 300.99 15.9268 298.164 28.7195C296.902 34.4192 298.34 40.538 301.244 52.561C305.459 69.972 308.001 71.3457 307.415 74.561C304.637 89.7603 244.213 80.6992 162.489 81.8976C162.489 81.8976 78.6627 83.1252 37.6004 74.561C31.6938 73.3333 26.9998 69.9427 17.788 69.933C16.3211 69.933 15.1672 70.0207 14.4728 69.0561C11.2262 64.5743 27.4888 50.018 25.269 36.0464C23.2349 23.2634 7.10922 19.8143 8.31205 14.0463C9.53443 8.17123 26.9216 8.49279 29.8945 8.5415C42.1965 8.77534 51.2422 12.1367 51.4671 12.2146Z"
                                    fill="none"
                                    stroke="#DFAA35"
                                    stroke-miterlimit="10"
                            />
                            <path
                                    d="M44.7 6.65214C66.7909 14.8461 174.282 31.01 266.724 6.65214C266.724 6.65214 303.63 -3.07154 305.273 2.9887C306.163 6.29163 294.223 10.3643 291.397 23.157C290.135 28.8568 291.573 34.9755 294.477 46.9985C298.692 64.4095 301.234 65.7833 300.648 68.9986C297.87 84.1979 237.445 75.1367 155.722 76.3352C155.722 76.3352 71.8956 77.5628 30.8333 68.9986C24.9267 67.7709 20.2328 64.3803 11.0209 64.3706C9.55402 64.3706 8.40007 64.4583 7.70576 63.4937C4.45911 59.0118 20.7217 44.4555 18.5018 30.4839C16.4678 17.7008 0.34213 14.2518 1.54496 8.48385C2.76734 2.60873 20.1545 2.93023 23.1274 2.97895C35.4197 3.21278 44.4751 6.56445 44.7 6.65214Z"
                                    stroke="black"
                                    stroke-miterlimit="10"
                            /></svg
                        ><a href="index.php"><span>Retour</span></a>
                    </button>
                </div>
                <div id="btn-right">
                    <button class="bg-button" onclick="openCity(event, 'mes_adresses')">
                        <svg
                                class="bg-button"
                                width="230"
                                height="84"
                                viewBox="0 0 313 84"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                    d="M51.4671 12.2146C73.558 20.4086 181.049 36.5725 273.491 12.2146C273.491 12.2146 310.397 2.49096 312.04 8.5512C312.93 11.8541 300.99 15.9268 298.164 28.7195C296.902 34.4192 298.34 40.538 301.244 52.561C305.459 69.972 308.001 71.3457 307.415 74.561C304.637 89.7603 244.213 80.6992 162.489 81.8976C162.489 81.8976 78.6627 83.1252 37.6004 74.561C31.6938 73.3333 26.9998 69.9427 17.788 69.933C16.3211 69.933 15.1672 70.0207 14.4728 69.0561C11.2262 64.5743 27.4888 50.018 25.269 36.0464C23.2349 23.2634 7.10922 19.8143 8.31205 14.0463C9.53443 8.17123 26.9216 8.49279 29.8945 8.5415C42.1965 8.77534 51.2422 12.1367 51.4671 12.2146Z"
                                    fill="#DFAA35"
                                    stroke="none"
                                    stroke-miterlimit="10"
                            />
                            <path
                                    d="M44.7 6.65214C66.7909 14.8461 174.282 31.01 266.724 6.65214C266.724 6.65214 303.63 -3.07154 305.273 2.9887C306.163 6.29163 294.223 10.3643 291.397 23.157C290.135 28.8568 291.573 34.9755 294.477 46.9985C298.692 64.4095 301.234 65.7833 300.648 68.9986C297.87 84.1979 237.445 75.1367 155.722 76.3352C155.722 76.3352 71.8956 77.5628 30.8333 68.9986C24.9267 67.7709 20.2328 64.3803 11.0209 64.3706C9.55402 64.3706 8.40007 64.4583 7.70576 63.4937C4.45911 59.0118 20.7217 44.4555 18.5018 30.4839C16.4678 17.7008 0.34213 14.2518 1.54496 8.48385C2.76734 2.60873 20.1545 2.93023 23.1274 2.97895C35.4197 3.21278 44.4751 6.56445 44.7 6.65214Z"
                                    stroke="black"
                                    stroke-miterlimit="10"
                            /></svg
                        ><span>COMMANDER</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="aide">
            <h3>Besoin d'aide ?</h3>
            <p>
                Notre service client est à votre écoute du lundi au vendredi de 9h à
                19h.
            </p>
            <p>01 86 64 78 96</p>
            <p>contact@winchesterlejeu.com</p>
            <h4>Paiement securise</h4>
            <img src="img/visa.jpg" alt="visa" width="40px" />
            <img src="img/mastercard.jpg" alt="mastercard" width="40px" />
            <h4>Livraison gratuite</h4>
            <p>Dès 15€ d'achat</p>
        </div>
        <div id="infoLivr">
          <p>Vous pouvez choisir votre mode de livraison à l'étape suivante.</p>
        </div>
    </article>




    <article id="mes_adresses" class="tabcontent">
        <div class="champsA" id="champsA">
          <div class="prenomA">
            <label for="prenomA">Prenom</label><br />
            <input id="prenomA" type="text" name="prenomA" placeholder="John" />
          </div>
          <div class="nomA">
            <label for="nomA">Nom</label><br />
            <input id="nomA" type="text" name="nomA" placeholder="Doe" />
          </div>
          <div class="adresseA">
            <label for="adresseA">Adresse postale</label><br />
            <input id="adresseA" type="text" name="adresseA" placeholder="N°, nom de rue" />
          </div>
          <div class="adresseB">
            <label for="adresseB">Complement d'adresse (optionel)</label><br />
            <input id="adresseB" type="text" name="adresseB" placeholder="Appartement, bâtiment,..." />
          </div>
          <div class="codeA">
            <label for="codeA">Code postal</label><br />
            <input id="codeA" type="text" name="codeA" placeholder="ex. 75000" />
          </div>
          <div class="villeA">
            <label for="villeA">Ville</label><br />
            <input id="villeA" type="text" name="villeA" placeholder="ex. Paris" />
          </div>
          <div class="paysA">
            <label for="paysA">Pays</label><br />
            <input id="paysA" type="text" name="paysA" placeholder="France" />
          </div>
          <div class="telA">
            <label for="telA">Numero de telephone</label><br />
            <input id="telA" type="tel" name="telA" placeholder="+33 1 23 45 67 89" />
          </div>
          <div class="emailA">
            <label for="emailA">Adresse E-mail</label><br />
            <input id="emailA" type="email" name="emailA" placeholder="example@xyz.com" />
          </div>
          <div class="btnA-l-r">
            <div class="btnA-l">
              <button class="bg-button" onclick="openCity(event, 'mon_panier')">
                <svg
                  class="bg-button"
                  width="230"
                  height="84"
                  viewBox="0 0 313 84"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M51.4671 12.2146C73.558 20.4086 181.049 36.5725 273.491 12.2146C273.491 12.2146 310.397 2.49096 312.04 8.5512C312.93 11.8541 300.99 15.9268 298.164 28.7195C296.902 34.4192 298.34 40.538 301.244 52.561C305.459 69.972 308.001 71.3457 307.415 74.561C304.637 89.7603 244.213 80.6992 162.489 81.8976C162.489 81.8976 78.6627 83.1252 37.6004 74.561C31.6938 73.3333 26.9998 69.9427 17.788 69.933C16.3211 69.933 15.1672 70.0207 14.4728 69.0561C11.2262 64.5743 27.4888 50.018 25.269 36.0464C23.2349 23.2634 7.10922 19.8143 8.31205 14.0463C9.53443 8.17123 26.9216 8.49279 29.8945 8.5415C42.1965 8.77534 51.2422 12.1367 51.4671 12.2146Z"
                    fill="none"
                    stroke="#DFAA35"
                    stroke-miterlimit="10"
                  />
                  <path
                    d="M44.7 6.65214C66.7909 14.8461 174.282 31.01 266.724 6.65214C266.724 6.65214 303.63 -3.07154 305.273 2.9887C306.163 6.29163 294.223 10.3643 291.397 23.157C290.135 28.8568 291.573 34.9755 294.477 46.9985C298.692 64.4095 301.234 65.7833 300.648 68.9986C297.87 84.1979 237.445 75.1367 155.722 76.3352C155.722 76.3352 71.8956 77.5628 30.8333 68.9986C24.9267 67.7709 20.2328 64.3803 11.0209 64.3706C9.55402 64.3706 8.40007 64.4583 7.70576 63.4937C4.45911 59.0118 20.7217 44.4555 18.5018 30.4839C16.4678 17.7008 0.34213 14.2518 1.54496 8.48385C2.76734 2.60873 20.1545 2.93023 23.1274 2.97895C35.4197 3.21278 44.4751 6.56445 44.7 6.65214Z"
                    stroke="black"
                    stroke-miterlimit="10"
                  /></svg
                ><span>Retour</span>
              </button>
            </div>
            <div class="btnA-r">
              <button class="bg-button" onclick="openCity(event, 'mode_livraison')">
                <svg
                  class="bg-button"
                  width="230"
                  height="84"
                  viewBox="0 0 313 84"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M51.4671 12.2146C73.558 20.4086 181.049 36.5725 273.491 12.2146C273.491 12.2146 310.397 2.49096 312.04 8.5512C312.93 11.8541 300.99 15.9268 298.164 28.7195C296.902 34.4192 298.34 40.538 301.244 52.561C305.459 69.972 308.001 71.3457 307.415 74.561C304.637 89.7603 244.213 80.6992 162.489 81.8976C162.489 81.8976 78.6627 83.1252 37.6004 74.561C31.6938 73.3333 26.9998 69.9427 17.788 69.933C16.3211 69.933 15.1672 70.0207 14.4728 69.0561C11.2262 64.5743 27.4888 50.018 25.269 36.0464C23.2349 23.2634 7.10922 19.8143 8.31205 14.0463C9.53443 8.17123 26.9216 8.49279 29.8945 8.5415C42.1965 8.77534 51.2422 12.1367 51.4671 12.2146Z"
                    fill="#DFAA35"
                    stroke="none"
                    stroke-miterlimit="10"
                  />
                  <path
                    d="M44.7 6.65214C66.7909 14.8461 174.282 31.01 266.724 6.65214C266.724 6.65214 303.63 -3.07154 305.273 2.9887C306.163 6.29163 294.223 10.3643 291.397 23.157C290.135 28.8568 291.573 34.9755 294.477 46.9985C298.692 64.4095 301.234 65.7833 300.648 68.9986C297.87 84.1979 237.445 75.1367 155.722 76.3352C155.722 76.3352 71.8956 77.5628 30.8333 68.9986C24.9267 67.7709 20.2328 64.3803 11.0209 64.3706C9.55402 64.3706 8.40007 64.4583 7.70576 63.4937C4.45911 59.0118 20.7217 44.4555 18.5018 30.4839C16.4678 17.7008 0.34213 14.2518 1.54496 8.48385C2.76734 2.60873 20.1545 2.93023 23.1274 2.97895C35.4197 3.21278 44.4751 6.56445 44.7 6.65214Z"
                    stroke="black"
                    stroke-miterlimit="10"
                  /></svg
                ><span>SUIVANT</span>
              </button>
            </div>
          </div>
      </div>

      <div class="aide">
        <h3>Besoin d'aide ?</h3>
        <p>
            Notre service client est à votre écoute du lundi au vendredi de 9h à
            19h.
        </p>
        <p>01 86 00 00 00</p>
        <p>adressemail@mail.com</p>
        <h4>Paiement securise</h4>
        <img src="img/visa.jpg" alt="visa" width="40px" />
        <img src="img/mastercard.jpg" alt="mastercard" width="40px" />
        <h4>Livraison gratuite</h4>
        <p>Dès 30€ d'achat</p>
      </div>
    </article>





    <article id="mode_livraison" class="tabcontent">
    <div class="modeB">
          <div class="titreB">
            <h2>Choisissez votre mode de livraison</h2>
            <hr />
          </div>
          <div class="livraisonB">
            <div class="point-relais">
              <input type="radio" name="valid" id="" />
              <img src="img/packaging.png" alt="colis" />
              <div class="titreModLivr">
                <p>Livraison en Point Relais</p>
                <p>2 à 3 jours ouvrés</p>
              </div>
              <span class="stock">Gratuit</span>
            </div>
            <hr />
            <div class="domicile">
              <input type="radio" name="valid" id="" />
              <img src="img/home.png" alt="maison" />
              <div class="titreModLivr">
                <p>Livraison à Domicile</p>
                <p>1 à 2 jours ouvrés</p>
              </div>
              <span class="stock">Gratuit</span>
            </div>
            <hr />
            <div class="domicileexpress">
              <input type="radio" name="valid" id="" />
              <img src="img/supply.png" alt="maison" />
              <div class="titreModLivr">
                <p>Livraison à Domicile Express</p>
                <p>Livré en 24h</p>
              </div>
              <span class="stock">7,99€</span>
            </div>
            <hr />
            <div class="btnA-l-r">
              <div class="btnA-l">
                <button
                  class="bg-button"
                  onclick="openCity(event, 'mes_adresses')"
                >
                  <svg
                    class="bg-button"
                    width="230"
                    height="84"
                    viewBox="0 0 313 84"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M51.4671 12.2146C73.558 20.4086 181.049 36.5725 273.491 12.2146C273.491 12.2146 310.397 2.49096 312.04 8.5512C312.93 11.8541 300.99 15.9268 298.164 28.7195C296.902 34.4192 298.34 40.538 301.244 52.561C305.459 69.972 308.001 71.3457 307.415 74.561C304.637 89.7603 244.213 80.6992 162.489 81.8976C162.489 81.8976 78.6627 83.1252 37.6004 74.561C31.6938 73.3333 26.9998 69.9427 17.788 69.933C16.3211 69.933 15.1672 70.0207 14.4728 69.0561C11.2262 64.5743 27.4888 50.018 25.269 36.0464C23.2349 23.2634 7.10922 19.8143 8.31205 14.0463C9.53443 8.17123 26.9216 8.49279 29.8945 8.5415C42.1965 8.77534 51.2422 12.1367 51.4671 12.2146Z"
                      fill="none"
                      stroke="#DFAA35"
                      stroke-miterlimit="10"
                    />
                    <path
                      d="M44.7 6.65214C66.7909 14.8461 174.282 31.01 266.724 6.65214C266.724 6.65214 303.63 -3.07154 305.273 2.9887C306.163 6.29163 294.223 10.3643 291.397 23.157C290.135 28.8568 291.573 34.9755 294.477 46.9985C298.692 64.4095 301.234 65.7833 300.648 68.9986C297.87 84.1979 237.445 75.1367 155.722 76.3352C155.722 76.3352 71.8956 77.5628 30.8333 68.9986C24.9267 67.7709 20.2328 64.3803 11.0209 64.3706C9.55402 64.3706 8.40007 64.4583 7.70576 63.4937C4.45911 59.0118 20.7217 44.4555 18.5018 30.4839C16.4678 17.7008 0.34213 14.2518 1.54496 8.48385C2.76734 2.60873 20.1545 2.93023 23.1274 2.97895C35.4197 3.21278 44.4751 6.56445 44.7 6.65214Z"
                      stroke="black"
                      stroke-miterlimit="10"
                    /></svg
                  ><span>Retour</span>
                </button>
              </div>
              <div class="btnA-r">
                <button class="bg-button" onclick="openCity(event, 'paiement')">
                  <svg
                    class="bg-button"
                    width="230"
                    height="84"
                    viewBox="0 0 313 84"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M51.4671 12.2146C73.558 20.4086 181.049 36.5725 273.491 12.2146C273.491 12.2146 310.397 2.49096 312.04 8.5512C312.93 11.8541 300.99 15.9268 298.164 28.7195C296.902 34.4192 298.34 40.538 301.244 52.561C305.459 69.972 308.001 71.3457 307.415 74.561C304.637 89.7603 244.213 80.6992 162.489 81.8976C162.489 81.8976 78.6627 83.1252 37.6004 74.561C31.6938 73.3333 26.9998 69.9427 17.788 69.933C16.3211 69.933 15.1672 70.0207 14.4728 69.0561C11.2262 64.5743 27.4888 50.018 25.269 36.0464C23.2349 23.2634 7.10922 19.8143 8.31205 14.0463C9.53443 8.17123 26.9216 8.49279 29.8945 8.5415C42.1965 8.77534 51.2422 12.1367 51.4671 12.2146Z"
                      fill="#DFAA35"
                      stroke="none"
                      stroke-miterlimit="10"
                    />
                    <path
                      d="M44.7 6.65214C66.7909 14.8461 174.282 31.01 266.724 6.65214C266.724 6.65214 303.63 -3.07154 305.273 2.9887C306.163 6.29163 294.223 10.3643 291.397 23.157C290.135 28.8568 291.573 34.9755 294.477 46.9985C298.692 64.4095 301.234 65.7833 300.648 68.9986C297.87 84.1979 237.445 75.1367 155.722 76.3352C155.722 76.3352 71.8956 77.5628 30.8333 68.9986C24.9267 67.7709 20.2328 64.3803 11.0209 64.3706C9.55402 64.3706 8.40007 64.4583 7.70576 63.4937C4.45911 59.0118 20.7217 44.4555 18.5018 30.4839C16.4678 17.7008 0.34213 14.2518 1.54496 8.48385C2.76734 2.60873 20.1545 2.93023 23.1274 2.97895C35.4197 3.21278 44.4751 6.56445 44.7 6.65214Z"
                      stroke="black"
                      stroke-miterlimit="10"
                    /></svg
                  ><span>SUIVANT</span>
                </button>
              </div>
            </div>
          </div>
        </div>
    </article>




    <article id="paiement" class="tabcontent">
        <div class="payment-title">
          <h2>Finalisation de la commande</h2>
        </div>
        <div class="global-payment">


          <!-- <div class="container preload">
            <div class="creditcard">
              <div class="front">
                <div id="ccsingle"></div>
                <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 750 471" style="enable-background: new 0 0 750 471;" xml:space="preserve" >
                  <g id="Front">
                    <g id="CardBackground">
                      <g id="Page-1_1_">
                        <g id="amex_1_">
                          <path
                            id="Rectangle-1_1_"
                            class="lightcolor grey"
                            d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                                  C0,17.9,17.9,0,40,0z"
                          />
                        </g>
                      </g>
                      <path
                        class="darkcolor greydark"
                        d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z"
                      />
                    </g>
                    <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber" class="st2 st3 st4" >
                      0123 4567 8910 1112
                    </text>
                    <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6" >
                      JOHN DOE
                    </text>
                    <text transform="matrix(1 0 0 1 54.1074 389.8793)" class="st7 st5 st8" >
                      nom
                    </text>
                    <text transform="matrix(1 0 0 1 479.7754 388.8793)" class="st7 st5 st8" >
                      expiration
                    </text>
                    <text transform="matrix(1 0 0 1 65.1054 241.5)" class="st7 st5 st8" >
                      Numéros de carte
                    </text>
                    <g>
                      <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire" class="st2 st5 st9" >
                        01/23
                      </text>
                      <text transform="matrix(1 0 0 1 479.3848 417.0097)" class="st2 st10 st11" >
                        VALIDE
                      </text>
                      <text transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11" >
                        JUSQU'A
                      </text>
                      <polygon
                        class="st2"
                        points="554.5,421 540.4,414.2 540.4,427.9 		"
                      />
                    </g>
                    <g id="cchip">
                      <g>
                        <path
                          class="st2"
                          d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                              c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z"
                        />
                      </g>
                      <g>
                        <g>
                          <rect x="82" y="70" class="st12" width="1.5" height="60" />
                        </g>
                        <g>
                          <rect x="167.4" y="70" class="st12" width="1.5" height="60" />
                        </g>
                        <g>
                          <path
                            class="st12"
                            d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                                  c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                                  C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                                  c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                                  c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z"
                          />
                        </g>
                        <g>
                          <rect x="82.8" y="82.1" class="st12" width="25.8" height="1.5" />
                        </g>
                        <g>
                          <rect x="82.8" y="117.9" class="st12" width="26.1" height="1.5" />
                        </g>
                        <g>
                          <rect x="142.4" y="82.1" class="st12" width="25.8" height="1.5" />
                        </g>
                        <g>
                          <rect x="142" y="117.9" class="st12" width="26.2" height="1.5" />
                        </g>
                      </g>
                    </g>
                  </g>
                  <g id="Back"></g>
                </svg>
              </div>
              <div class="back">
                <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 750 471" style="enable-background: new 0 0 750 471;" xml:space="preserve" >
                  <g id="Front">
                    <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                  </g>
                  <g id="Back">
                    <g id="Page-1_2_">
                      <g id="amex_2_">
                        <path id="Rectangle-1_2_" class="darkcolor greydark"
                          d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                              C0,17.9,17.9,0,40,0z"
                        />
                      </g>
                    </g>
                    <rect y="61.6" class="st2" width="750" height="78" />
                    <g>
                      <path class="st3"
                        d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5
                          C707.1,246.4,704.4,249.1,701.1,249.1z"
                      />
                      <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />
                      <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />
                      <path class="st5"
                        d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z"
                      />
                    </g>
                    <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7" >
                      985
                    </text>
                    <g class="st8">
                      <text transform="matrix(1 0 0 1 518.083 280.0879)" class="st9 st6 st10" >
                        CVV
                      </text>
                    </g>
                    <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />
                    <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />
                    <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13" >
                      John Doe
                    </text>
                  </g>
                </svg>
              </div>
            </div>
          </div> -->


          <div class="cowboyInfo">
            <img src="img/cowboy3d.png" alt="cowboy">
            <p>Une derniere etape pour finaliser la commande !</p>
          </div>

          <div class="form-container">
            <div class="field-container">
              <label id="payNom" for="name">Nom</label>
              <input id="name" maxlength="20" type="text" placeholder="MR JOHN DOE"/>
            </div>
            <div class="field-container">
              <label id="payNumCarte" for="cardnumber">Numéro de carte</label
              ><span id="generatecard">format</span>
              <input
                id="cardnumber"
                type="text"
                pattern="[0-9]*"
                inputmode="numeric"
                placeholder="1234 5678 9012 3456"
              />
              <svg
                id="ccicon"
                class="ccicon"
                width="750"
                height="471"
                viewBox="0 0 750 471"
                version="1.1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              ></svg>
            </div>
            <div class="field-container">
              <label id="payExpDate" for="expirationdate">Date d'expiration</label>
              <input
                id="expirationdate"
                type="text"
                pattern="[0-9]*"
                inputmode="numeric"
                placeholder="MM/AA"
              />
            </div>
            <div class="field-container">
              <label id="payCodeSecu" for="securitycode">Code de sécutiré</label>
              <input
                id="securitycode"
                type="text"
                pattern="[0-9]*"
                inputmode="numeric"
                placeholder="123"
              />
            </div>
          </div>
        </div>
        
        <div class="btnA-l-r">
          <div class="btnA-l">
            <button class="bg-button" onclick="openCity(event, 'mode_livraison')">
              <svg
                class="bg-button"
                width="230"
                height="84"
                viewBox="0 0 313 84"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M51.4671 12.2146C73.558 20.4086 181.049 36.5725 273.491 12.2146C273.491 12.2146 310.397 2.49096 312.04 8.5512C312.93 11.8541 300.99 15.9268 298.164 28.7195C296.902 34.4192 298.34 40.538 301.244 52.561C305.459 69.972 308.001 71.3457 307.415 74.561C304.637 89.7603 244.213 80.6992 162.489 81.8976C162.489 81.8976 78.6627 83.1252 37.6004 74.561C31.6938 73.3333 26.9998 69.9427 17.788 69.933C16.3211 69.933 15.1672 70.0207 14.4728 69.0561C11.2262 64.5743 27.4888 50.018 25.269 36.0464C23.2349 23.2634 7.10922 19.8143 8.31205 14.0463C9.53443 8.17123 26.9216 8.49279 29.8945 8.5415C42.1965 8.77534 51.2422 12.1367 51.4671 12.2146Z"
                  fill="none"
                  stroke="#DFAA35"
                  stroke-miterlimit="10"
                />
                <path
                  d="M44.7 6.65214C66.7909 14.8461 174.282 31.01 266.724 6.65214C266.724 6.65214 303.63 -3.07154 305.273 2.9887C306.163 6.29163 294.223 10.3643 291.397 23.157C290.135 28.8568 291.573 34.9755 294.477 46.9985C298.692 64.4095 301.234 65.7833 300.648 68.9986C297.87 84.1979 237.445 75.1367 155.722 76.3352C155.722 76.3352 71.8956 77.5628 30.8333 68.9986C24.9267 67.7709 20.2328 64.3803 11.0209 64.3706C9.55402 64.3706 8.40007 64.4583 7.70576 63.4937C4.45911 59.0118 20.7217 44.4555 18.5018 30.4839C16.4678 17.7008 0.34213 14.2518 1.54496 8.48385C2.76734 2.60873 20.1545 2.93023 23.1274 2.97895C35.4197 3.21278 44.4751 6.56445 44.7 6.65214Z"
                  stroke="black"
                  stroke-miterlimit="10"
                /></svg
              ><span>Retour</span>
            </button>
          </div>
          <div class="btnA-r">
            <button class="bg-button">
              <svg
                class="bg-button"
                width="230"
                height="84"
                viewBox="0 0 313 84"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M51.4671 12.2146C73.558 20.4086 181.049 36.5725 273.491 12.2146C273.491 12.2146 310.397 2.49096 312.04 8.5512C312.93 11.8541 300.99 15.9268 298.164 28.7195C296.902 34.4192 298.34 40.538 301.244 52.561C305.459 69.972 308.001 71.3457 307.415 74.561C304.637 89.7603 244.213 80.6992 162.489 81.8976C162.489 81.8976 78.6627 83.1252 37.6004 74.561C31.6938 73.3333 26.9998 69.9427 17.788 69.933C16.3211 69.933 15.1672 70.0207 14.4728 69.0561C11.2262 64.5743 27.4888 50.018 25.269 36.0464C23.2349 23.2634 7.10922 19.8143 8.31205 14.0463C9.53443 8.17123 26.9216 8.49279 29.8945 8.5415C42.1965 8.77534 51.2422 12.1367 51.4671 12.2146Z"
                  fill="#DFAA35"
                  stroke="none"
                  stroke-miterlimit="10"
                />
                <path
                  d="M44.7 6.65214C66.7909 14.8461 174.282 31.01 266.724 6.65214C266.724 6.65214 303.63 -3.07154 305.273 2.9887C306.163 6.29163 294.223 10.3643 291.397 23.157C290.135 28.8568 291.573 34.9755 294.477 46.9985C298.692 64.4095 301.234 65.7833 300.648 68.9986C297.87 84.1979 237.445 75.1367 155.722 76.3352C155.722 76.3352 71.8956 77.5628 30.8333 68.9986C24.9267 67.7709 20.2328 64.3803 11.0209 64.3706C9.55402 64.3706 8.40007 64.4583 7.70576 63.4937C4.45911 59.0118 20.7217 44.4555 18.5018 30.4839C16.4678 17.7008 0.34213 14.2518 1.54496 8.48385C2.76734 2.60873 20.1545 2.93023 23.1274 2.97895C35.4197 3.21278 44.4751 6.56445 44.7 6.65214Z"
                  stroke="black"
                  stroke-miterlimit="10"
                /></svg
              ><a href="confirmation.php"><span>PAYER</span></a>
            </button>
          </div>
        </div>
    </article>
</section>


<!--NEWSLETTER-->
<section class="partNews">
    <img class="gun" src="img/gun.png" alt="">
    <div class="textNews">
        <h3>S'abonner a la Newsletter</h3>
        <p>Inscrivez-vous à notre newsletter pour avoir accès à des informations exclusives.</p>
    </div>

    <div class="remplirNews">
        <form action="" method="post">
            <input type="email" name="mailing" placeholder="e-mail">
            <button class="bg-button" type="submit" name="envoyer"><svg class="bg-button" width="313" height="84" viewBox="0 0 313 84" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M51.4671 12.2146C73.558 20.4086 181.049 36.5725 273.491 12.2146C273.491 12.2146 310.397 2.49096 312.04 8.5512C312.93 11.8541 300.99 15.9268 298.164 28.7195C296.902 34.4192 298.34 40.538 301.244 52.561C305.459 69.972 308.001 71.3457 307.415 74.561C304.637 89.7603 244.213 80.6992 162.489 81.8976C162.489 81.8976 78.6627 83.1252 37.6004 74.561C31.6938 73.3333 26.9998 69.9427 17.788 69.933C16.3211 69.933 15.1672 70.0207 14.4728 69.0561C11.2262 64.5743 27.4888 50.018 25.269 36.0464C23.2349 23.2634 7.10922 19.8143 8.31205 14.0463C9.53443 8.17123 26.9216 8.49279 29.8945 8.5415C42.1965 8.77534 51.2422 12.1367 51.4671 12.2146Z" fill="#70C5CA" stroke="none" stroke-miterlimit="10"/>
            <path d="M44.7 6.65214C66.7909 14.8461 174.282 31.01 266.724 6.65214C266.724 6.65214 303.63 -3.07154 305.273 2.9887C306.163 6.29163 294.223 10.3643 291.397 23.157C290.135 28.8568 291.573 34.9755 294.477 46.9985C298.692 64.4095 301.234 65.7833 300.648 68.9986C297.87 84.1979 237.445 75.1367 155.722 76.3352C155.722 76.3352 71.8956 77.5628 30.8333 68.9986C24.9267 67.7709 20.2328 64.3803 11.0209 64.3706C9.55402 64.3706 8.40007 64.4583 7.70576 63.4937C4.45911 59.0118 20.7217 44.4555 18.5018 30.4839C16.4678 17.7008 0.34213 14.2518 1.54496 8.48385C2.76734 2.60873 20.1545 2.93023 23.1274 2.97895C35.4197 3.21278 44.4751 6.56445 44.7 6.65214Z" stroke="black" stroke-miterlimit="10"/>
            </svg><span>S'inscrire</span></button>
        </form>
        <span class="erreurs"><?php if(isset ($erreur)){echo $erreur;} if(isset($sucess)){echo $sucess;}?></span>
        <p>En s'inscrivant à notre newsletter, vous acceptez de recevoir chaque semaine nos derniers articles de blog par courrier électronique et vous prennez connaissance de notre politique de confidentialité.</p>
    </div>
</section>

<!--DEBUT BAS DE PAGE-->
<footer>
    <div class="basLogo">
        <img src="img/logo.png" alt="icone winchester" loading="lazy" width="140px">
    </div>
    <div class="rgpd">
        <h5>Winchester 2022 - Tous droits reserves.</h5>
        <ul>
            <li>Design : <a href="http://leosix.fr/clickgames/"> ClickGames</a></li>
            <li><a href="rgpd.html">Politique de confidentialité et cookies</a></li>
            <li><a href="">Conditions générales</a></li>
        </ul>
    </div>
    <div class="medias">
        <h5>Suivez nous</h5>
        <div>
            <a href=""><img src="img/yt.png" loading="lazy" alt="icone youtube"></a>
            <a href="https://www.instagram.com/winchester_le_jeu/" target="_blank"><img src="img/ig.png" loading="lazy" alt="icone instagram"></a>
            <a href=""><img src="img/fb.png" loading="lazy" alt="icone facebook"></a>
        </div>
    </div>
    <div class="langues">
        <ul class="">
            <li><a href="#en" class="en"><img src="img/lang_en.png" alt="">ENGLISH</a></li>
            <li><a href="#fr" class="fr"><img src="img/lang_fr.png" alt="">FRANCAIS</a></li>
        </ul>
    </div>

</footer>
<!--FIN BAS DE PAGE-->
</body>
</html>
