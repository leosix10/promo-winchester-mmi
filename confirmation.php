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
    <title>Confirmation - Winchester, le jeu</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/language.js"></script>
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


<section class="partConf">
  <article class="confirmation">
    <div class="messConf">
      <h1><img src="img/check.png" alt="check">Confirmation</h1>
      <div>
          <img src="img/cowboy3d.png" alt="cowboy">
          <aside>
            <p>Un mail de confirmation vient de vous être envoyé !</p>
            <p>Vous retrouverez le récapitulatif de votre commande, ainsi que la facture en pièce-jointe.</p>
            <p>Nous vous remercions pour l'achat du jeu Winchester !</p>
          </aside>
      </div>
      
    </div>
    <div class="btnA-l-r">
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
          ><a href="index.php"><span>D'accord !</span></a>
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
