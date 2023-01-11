<?php
include "inc/script_newsletter.php";
include "inc/script_contact.php";
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
    <meta property="og:url" content="http://mmi20c04.mmi-troyes.fr/promo/" />
    <meta property="og:image" content="http://mmi20c04.mmi-troyes.fr/promo/img/cartes_header.png" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="scss/style.css">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/logo.png"/>
    <link rel="apple-touch-icon" href="img/logo.png"/>
    <title>Site promo de Winchester, le jeu</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/language.js"></script>
    <script src="js/progress_bar.js"></script>
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

        $(document).ready(function(){
            $("#refus").click(function() {
                $(".flex-cookie").fadeOut();
            });
            $("#accept").click(function() {
                $(".flex-cookie").fadeOut();
            });
        });

        $(document).ready(function() {
            var $owl = $('.owl-carousel');

            $owl.children().each( function( index ) {
                $(this).attr( 'data-position', index ); // NB: .attr() instead of .data()
            });

            $owl.owlCarousel({
                center: true,
                loop: true,
                items: 5,
            });

            $(document).on('click', '.owl-item>div', function() {
                // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.html#to-owl-carousel
                var $speed = 300;  // in ms
                $owl.trigger('to.owl.carousel', [$(this).data( 'position' ), $speed] );
            });
        });
    </script>
    
</head>
<body>
<div class="flex-cookie">
    <div class="box-cookie">
        
        <div class="content">
        <img src="img/cookie.png" alt="cookie">
          <h3>Nous utilisons les cookies</h3>
          <p>Ce site Internet utilise des cookies. Ce sont de petits fichiers qui nous aident à comprendre comment vous utilisez nos services afin que nous puissions améliorer votre expérience. Vous pouvez en savoir plus sur ces cookies et contrôler la façon dont ils sont utilisés en cliquant sur " Préférences ". Vous pouvez également consulter notre politique de cookies.</p>
          <div class="buttons">
            <button class="cookie_item" id="accept">J'accepte</button>
            <button class="cookie_item"><a href="rgpd.html">Préférences</a></button>
            <button class="cookie_item" id="refus">Refuser</button>
          </div>
        </div>
    </div>
</div>

<script>
    const cookieBox = document.querySelector(".box-cookie"),
    acceptBtn = cookieBox.querySelector("button.cookie_item");

    acceptBtn.onclick = ()=>{
    //setting cookie for 1 month, after one month it'll be expired automatically
    document.cookie = "Winchester=Cookie; max-age="+60*60*24*30;
    if(document.cookie){ //if cookie is set
        cookieBox.classList.add("hide"); //hide cookie box
    }else{ //if cookie not set then alert an error
        alert("Le cookie ne peut pas être défini ! Veuillez débloquer ce site de la configuration des cookies de votre navigateur.");
    }
    }
    let checkCookie = document.cookie.indexOf("CookieBy=Winchester"); //checking our cookie
    //if cookie is set then hide the cookie box else show it
    checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");

</script>
<!--DEBUT MENU DE NAVIGATION-->
<header>
    <div class="nav_logo">
        <div class="rotate"><a class="logonav" href="index.php"><img src="img/logo.png" alt="logo winchester"></a></div>
    </div>
    <nav>
        <ul class="nav_links">
            <li><a href="#le_jeu">Le jeu</a></li>
            <li><a href="#actus">Actus</a></li>
            <li><a href="#jouer_en_ligne">Jouer en ligne</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
    <div class="nav_other">
        <a class="nav_panier" href="panier.php"><img src="img/panier.png" alt="icone panier"></a>
        <div class="globe"></div>
        <ul class="list_lang">
            <li><a href="#en" class="en"><img src="img/lang_en.png" alt="">ENGLISH</a></li>
            <li><a href="#fr" class="fr"><img src="img/lang_fr.png" alt="">FRANCAIS</a></li>
        </ul>
    </div>
</header>
 <!--FIN MENU DE NAVIGATION-->
 <div class="progress-container"><!--Barre progressive avec balle-->
     <div class="progress-bar" id="myBar"></div>
 </div>
 <div id="object"></div><!--Ancienne balle de gun-->
 <!--PREMIERE SECTION--> 
<section class="grosTitre" id="accueil">
    <img class="bigImage" src="img/cartes_header.png" alt="titre avec cartes">
    <img class="nuage1" src="img/nuage1.png" alt="nuage">
    <img class="nuage2" src="img/nuage2.png" alt="nuage">
    <img class="nuage3" src="img/nuage3.png" alt="nuage">
</section>

<!--SYNOPSIS-->
<section class="terreSynop" id="le_jeu">
    <img class="cailloux" src="img/cailloux.png" alt="cailloux">
    <article>
        <h2>Synopsis</h2>
        <p>Vous rêvez d’être le cowboy le plus recherché du Far West. Cependant, un autre rival veut s’arracher ce même titre. Pour y parvenir, braquez et échangez vos ressources aux marchands du village et récupérez toutes les étoiles de shérif. Si vous réussissez à faire une vente en or, vous recevrez une prime de plus. À l’aide des chevaux à votre disposition, commercez plusieurs ressources aux marchands. À la fin de chaque manche, le cowboy avec le plus de butin sur lui remporte une étoile de shérif. Le premier à posséder deux étoiles gagne le duel.</p>
    </article>
    <div class="cactus">
        <img src="img/cactus_xl_butte.png" alt="grand cactus">
    </div>
</section>

<!--INFORMATIONS SUR LE JEU-->
<section class="infoVideo" id="actus">
    <div class="wrapper">
        <div class="one">
            <img src="img/mockup.png" alt="Packaging">
        </div>
        <div class="two">
            <video controls poster="video/thumbnail.jpg">
                <source src="video/teaser.mp4" type="video/mp4">
            </video>
            <p>Vous souhaitez acheter notre jeu pour partager des moments de convivialité en famille ou avec vos amis ? N'attendez pas ! Disponible depuis le 7 avril au prix de 18€, la boîte du jeu Winchester contient 55 cartes et 60 jetons sur le thème du western.</p>
            <ul class="niveau">
                <li>
                    <span class="age" style="min-width: 50%; left: 0;">7 à 77 ans</span>
                </li>
                <li>
                    <span class="gamer" style="min-width: 50%; left: 25%;">2 joueurs</span>
                </li>
                <li>
                    <span class="time" style="min-width: 50%; left: 50%;">30 minutes</span>
                </li>
            </ul>
            <div>
                <button class="bg-button"><svg class="bg-button" width="313" height="84" viewBox="0 0 313 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M51.4671 12.2146C73.558 20.4086 181.049 36.5725 273.491 12.2146C273.491 12.2146 310.397 2.49096 312.04 8.5512C312.93 11.8541 300.99 15.9268 298.164 28.7195C296.902 34.4192 298.34 40.538 301.244 52.561C305.459 69.972 308.001 71.3457 307.415 74.561C304.637 89.7603 244.213 80.6992 162.489 81.8976C162.489 81.8976 78.6627 83.1252 37.6004 74.561C31.6938 73.3333 26.9998 69.9427 17.788 69.933C16.3211 69.933 15.1672 70.0207 14.4728 69.0561C11.2262 64.5743 27.4888 50.018 25.269 36.0464C23.2349 23.2634 7.10922 19.8143 8.31205 14.0463C9.53443 8.17123 26.9216 8.49279 29.8945 8.5415C42.1965 8.77534 51.2422 12.1367 51.4671 12.2146Z" fill="#A05D38" stroke="none" stroke-miterlimit="10"/>
                    <path d="M44.7 6.65214C66.7909 14.8461 174.282 31.01 266.724 6.65214C266.724 6.65214 303.63 -3.07154 305.273 2.9887C306.163 6.29163 294.223 10.3643 291.397 23.157C290.135 28.8568 291.573 34.9755 294.477 46.9985C298.692 64.4095 301.234 65.7833 300.648 68.9986C297.87 84.1979 237.445 75.1367 155.722 76.3352C155.722 76.3352 71.8956 77.5628 30.8333 68.9986C24.9267 67.7709 20.2328 64.3803 11.0209 64.3706C9.55402 64.3706 8.40007 64.4583 7.70576 63.4937C4.45911 59.0118 20.7217 44.4555 18.5018 30.4839C16.4678 17.7008 0.34213 14.2518 1.54496 8.48385C2.76734 2.60873 20.1545 2.93023 23.1274 2.97895C35.4197 3.21278 44.4751 6.56445 44.7 6.65214Z" stroke="black" stroke-miterlimit="10"/>
                </svg><a href="panier.php"><span>Acheter le jeu</span></a></button>
            </div>
        </div>
    </div>
</section>

<!--PLATEAU DU JEU-->
<section class="partPlateau" id="jouer_en_ligne">
    <h2>Notre plateau</h2>
    <p>Sur notre plateau, nous avons des jetons de ressource disposés à gauche. Pour les obtenir, il faut vendre les 6 types de ressources. Leur nombre dépend de leur rareté. Ensuite, il y a les cartes chevaux. Elles offrent la possibilité d'échanger plusieurs ressources. Enfin, il y a les jetons bonus. Ils peuvent complètement retourner le cours de la partie et peut récompenser le joueur.</p>
    <div class="plateau">
        <div class="zone1">
            <img src="img/plateau/carte_dos.png" alt="carte dos" />
            <img src="img/plateau/carte_dos.png" alt="carte dos" />
            <img src="img/plateau/carte_dos.png" alt="carte dos" />
            <img src="img/plateau/carte_dos.png" alt="carte dos" />
        </div>
        <div class="zone2">
            <div class="ligne1">
                <img src="img/plateau/jeton_6.png" alt="jeton6" />
                <img src="img/plateau/jeton_6.png" alt="jeton6" />
                <img src="img/plateau/jeton_6.png" alt="jeton6" />
                <img src="img/plateau/jeton_6.png" alt="jeton6" />
                <img src="img/plateau/jeton_6.png" alt="jeton6" />
            </div>
            <div class="ligne2">
                <img src="img/plateau/jeton_5.png" alt="jeton5" />
                <img src="img/plateau/jeton_5.png" alt="jeton5" />
                <img src="img/plateau/jeton_5.png" alt="jeton5" />
                <img src="img/plateau/jeton_5.png" alt="jeton5" />
                <img src="img/plateau/jeton_5.png" alt="jeton5" />
            </div>
            <div class="ligne3">
                <img src="img/plateau/jeton_excel.png" alt="jeton excellence" />
                <img src="img/plateau/jeton_excel.png" alt="jeton excellence" />
            </div>
            <div class="ligne4">
                <img src="img/plateau/jeton_3.png" alt="jeton3" />
                <img src="img/plateau/jeton_3.png" alt="jeton3" />
                <img src="img/plateau/jeton_3.png" alt="jeton3" />
            </div>
        </div>
        <div class="zone3">
            <img src="img/plateau/carte_or.png" alt="carte or" />
            <img src="img/plateau/carte_holster.png" alt="carte holster" />
            <img src="img/plateau/carte_chapeau.png" alt="carte chapeau" />
            <img src="img/plateau/carte_or.png" alt="carte or" />
            <img src="img/plateau/carte_dynamite.png" alt="carte dynamite" />
            <img src="img/plateau/carte_armes.png" alt="carte armes" />
        </div>
        <div class="zone4">
            <img src="img/plateau/carte_cowboy.png" alt="carte cowboy" />
            <img src="img/plateau/carte_or.png" alt="carte or" />
            <img src="img/plateau/carte_holster.png" alt="carte holster" />
            <img src="img/plateau/carte_bottes.png" alt="carte bottes" />
            <img src="img/plateau/carte_dynamite.png" alt="carte dynamite" />
        </div>
    </div>
    <div class="boutPlat">
        <button class="bg-button"><svg class="bg-button" width="313" height="84" viewBox="0 0 313 84" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M51.4671 12.2146C73.558 20.4086 181.049 36.5725 273.491 12.2146C273.491 12.2146 310.397 2.49096 312.04 8.5512C312.93 11.8541 300.99 15.9268 298.164 28.7195C296.902 34.4192 298.34 40.538 301.244 52.561C305.459 69.972 308.001 71.3457 307.415 74.561C304.637 89.7603 244.213 80.6992 162.489 81.8976C162.489 81.8976 78.6627 83.1252 37.6004 74.561C31.6938 73.3333 26.9998 69.9427 17.788 69.933C16.3211 69.933 15.1672 70.0207 14.4728 69.0561C11.2262 64.5743 27.4888 50.018 25.269 36.0464C23.2349 23.2634 7.10922 19.8143 8.31205 14.0463C9.53443 8.17123 26.9216 8.49279 29.8945 8.5415C42.1965 8.77534 51.2422 12.1367 51.4671 12.2146Z" fill="#DFAA35" stroke="none" stroke-miterlimit="10"/>
            <path d="M44.7 6.65214C66.7909 14.8461 174.282 31.01 266.724 6.65214C266.724 6.65214 303.63 -3.07154 305.273 2.9887C306.163 6.29163 294.223 10.3643 291.397 23.157C290.135 28.8568 291.573 34.9755 294.477 46.9985C298.692 64.4095 301.234 65.7833 300.648 68.9986C297.87 84.1979 237.445 75.1367 155.722 76.3352C155.722 76.3352 71.8956 77.5628 30.8333 68.9986C24.9267 67.7709 20.2328 64.3803 11.0209 64.3706C9.55402 64.3706 8.40007 64.4583 7.70576 63.4937C4.45911 59.0118 20.7217 44.4555 18.5018 30.4839C16.4678 17.7008 0.34213 14.2518 1.54496 8.48385C2.76734 2.60873 20.1545 2.93023 23.1274 2.97895C35.4197 3.21278 44.4751 6.56445 44.7 6.65214Z" stroke="black" stroke-miterlimit="10"/>
        </svg><a href="http://mmi20g18.mmi-troyes.fr/jeu/"><span>Jouer en ligne</span></a></button>
    </div>
</section>

<!--REGLES DU JEU-->
<section class="reglesJeu">
    <h2>Les regles du jeu</h2>
    <div class="global-regles">
        <div class="parchemin">
          <div class="parchemin-content">
            <p>C'est un jeu 1 contre 1 au tour par tour en 3 manches maximum. Dans Winchester, tu peux faire deux choses : marchander ou vendre des ressources. Pour gagner la partie, tu devras échanger tes ressources et remporter les deux manches en obtenant un jeton shérif à chaque manche gagnée.</p>
            <button class="bg-button"><svg class="bg-button" width="230" height="70" viewBox="0 0 313 84" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M51.4671 12.2146C73.558 20.4086 181.049 36.5725 273.491 12.2146C273.491 12.2146 310.397 2.49096 312.04 8.5512C312.93 11.8541 300.99 15.9268 298.164 28.7195C296.902 34.4192 298.34 40.538 301.244 52.561C305.459 69.972 308.001 71.3457 307.415 74.561C304.637 89.7603 244.213 80.6992 162.489 81.8976C162.489 81.8976 78.6627 83.1252 37.6004 74.561C31.6938 73.3333 26.9998 69.9427 17.788 69.933C16.3211 69.933 15.1672 70.0207 14.4728 69.0561C11.2262 64.5743 27.4888 50.018 25.269 36.0464C23.2349 23.2634 7.10922 19.8143 8.31205 14.0463C9.53443 8.17123 26.9216 8.49279 29.8945 8.5415C42.1965 8.77534 51.2422 12.1367 51.4671 12.2146Z" fill="#DFAA35" stroke="none" stroke-miterlimit="10"/>
            <path d="M44.7 6.65214C66.7909 14.8461 174.282 31.01 266.724 6.65214C266.724 6.65214 303.63 -3.07154 305.273 2.9887C306.163 6.29163 294.223 10.3643 291.397 23.157C290.135 28.8568 291.573 34.9755 294.477 46.9985C298.692 64.4095 301.234 65.7833 300.648 68.9986C297.87 84.1979 237.445 75.1367 155.722 76.3352C155.722 76.3352 71.8956 77.5628 30.8333 68.9986C24.9267 67.7709 20.2328 64.3803 11.0209 64.3706C9.55402 64.3706 8.40007 64.4583 7.70576 63.4937C4.45911 59.0118 20.7217 44.4555 18.5018 30.4839C16.4678 17.7008 0.34213 14.2518 1.54496 8.48385C2.76734 2.60873 20.1545 2.93023 23.1274 2.97895C35.4197 3.21278 44.4751 6.56445 44.7 6.65214Z" stroke="black" stroke-miterlimit="10"/>
        </svg><a href="http://mmi20g18.mmi-troyes.fr/jeu/#comment_jouer" target="_blank"><span>Voir la video</span></a></button>
          </div>
        </div>
        <div class="carrousel">
          <div class="card" id="c0"></div>
          <div class="card" id="c1"></div>
          <div class="card" id="c2"></div>
          <div class="card" id="c3"></div>
          <div class="card" id="c4"></div>
          <div class="card" id="c5"></div>
          <div class="card" id="c6"></div>
          <div class="card" id="c7"></div>
        </div>
        <div class="carousel-jeton">
            <div class="owl-carousel">
                <div><img src="img/plateau/jeton_1.png" alt="jeton_1"></div>
                <div><img src="img/plateau/jeton_2.png" alt="jeton_2"></div>
                <div><img src="img/plateau/jeton_3.png" alt="jeton_3"></div>
                <div><img src="img/plateau/jeton_4.png" alt="jeton_4"></div>
                <div><img src="img/plateau/jeton_5.png" alt="jeton_5"></div>
                <div><img src="img/plateau/jeton_6.png" alt="jeton_6"></div>
                <div><img src="img/plateau/jeton_bonus.png" alt="jeton_bonus"></div>
                <div><img src="img/plateau/jeton_chameau.png" alt="jeton_chameau"></div>
                <div><img src="img/plateau/jeton_excel.png" alt="jeton_excel"></div>
            </div>
        </div>
      </div>
</section>

<!--FLYERS-->
<section class="partFlyer">
    <h2>Flyers</h2>
    <button class="bg-button"><svg class="bg-button" width="313" height="84" viewBox="0 0 313 84" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M51.4671 12.2146C73.558 20.4086 181.049 36.5725 273.491 12.2146C273.491 12.2146 310.397 2.49096 312.04 8.5512C312.93 11.8541 300.99 15.9268 298.164 28.7195C296.902 34.4192 298.34 40.538 301.244 52.561C305.459 69.972 308.001 71.3457 307.415 74.561C304.637 89.7603 244.213 80.6992 162.489 81.8976C162.489 81.8976 78.6627 83.1252 37.6004 74.561C31.6938 73.3333 26.9998 69.9427 17.788 69.933C16.3211 69.933 15.1672 70.0207 14.4728 69.0561C11.2262 64.5743 27.4888 50.018 25.269 36.0464C23.2349 23.2634 7.10922 19.8143 8.31205 14.0463C9.53443 8.17123 26.9216 8.49279 29.8945 8.5415C42.1965 8.77534 51.2422 12.1367 51.4671 12.2146Z" fill="#DFAA35" stroke="none" stroke-miterlimit="10"/>
            <path d="M44.7 6.65214C66.7909 14.8461 174.282 31.01 266.724 6.65214C266.724 6.65214 303.63 -3.07154 305.273 2.9887C306.163 6.29163 294.223 10.3643 291.397 23.157C290.135 28.8568 291.573 34.9755 294.477 46.9985C298.692 64.4095 301.234 65.7833 300.648 68.9986C297.87 84.1979 237.445 75.1367 155.722 76.3352C155.722 76.3352 71.8956 77.5628 30.8333 68.9986C24.9267 67.7709 20.2328 64.3803 11.0209 64.3706C9.55402 64.3706 8.40007 64.4583 7.70576 63.4937C4.45911 59.0118 20.7217 44.4555 18.5018 30.4839C16.4678 17.7008 0.34213 14.2518 1.54496 8.48385C2.76734 2.60873 20.1545 2.93023 23.1274 2.97895C35.4197 3.21278 44.4751 6.56445 44.7 6.65214Z" stroke="black" stroke-miterlimit="10"/>
        </svg><a href="flyer.pdf" target="_blank"><span>Voir le flyer</span></a></button>
</section>

<!--FORMULAIRE DE CONTACT-->
<section class="partContact" id="contact">
    <div class="titreC"><h2>Nous contacter</h2></div>
    <div id="after_submit"></div>
    <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
        <div class="row nomC">
            <label class="required" for="nomCont">Nom</label><br />
            <input id="nomCont" class="input" name="nomCont" type="text" value="" size="30" placeholder="Doe"/><br />
            <span id="nom_validation" class="error_message"></span>
        </div>
        <div class="row prenomC">
            <label class="required" for="prenomCont">Prenom</label><br />
            <input id="prenomCont" class="input" name="prenomCont" type="text" value="" size="30" placeholder="John"/><br />
            <span id="prenom_validation" class="error_message"></span>
        </div>
        <div class="row telC">
            <label class="required" for="telCont">Numero de telephone</label><br />
            <input id="telCont" class="input" name="telCont" type="tel" value="" size="30" placeholder="+33 1 23 45 67 89"/><br />
            <span id="telephone_validation" class="error_message"></span>
        </div>
        <div class="row emailC">
            <label class="required" for="emailCont">Adresse e-Mail</label><br />
            <input id="emailCont" class="input" name="emailCont" type="email" value="" size="30" placeholder="johndoe@example.com"/><br />
            <span id="email_validation" class="error_message"></span>
        </div>
        <div class="row messageC">
            <label class="required" for="messageCont">Votre message</label><br />
            <textarea id="messageCont" class="input" name="messageCont" rows="7" cols="30" placeholder="Insert text here"></textarea><br />
            <span id="message_validation" class="error_message"></span>
        </div>
        <div class="envoyerC">
            <button id="submit_button" type="submit" value="envoyerMessage"><svg class="bg-button" width="313" height="84" viewBox="0 0 313 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M51.4671 12.2146C73.558 20.4086 181.049 36.5725 273.491 12.2146C273.491 12.2146 310.397 2.49096 312.04 8.5512C312.93 11.8541 300.99 15.9268 298.164 28.7195C296.902 34.4192 298.34 40.538 301.244 52.561C305.459 69.972 308.001 71.3457 307.415 74.561C304.637 89.7603 244.213 80.6992 162.489 81.8976C162.489 81.8976 78.6627 83.1252 37.6004 74.561C31.6938 73.3333 26.9998 69.9427 17.788 69.933C16.3211 69.933 15.1672 70.0207 14.4728 69.0561C11.2262 64.5743 27.4888 50.018 25.269 36.0464C23.2349 23.2634 7.10922 19.8143 8.31205 14.0463C9.53443 8.17123 26.9216 8.49279 29.8945 8.5415C42.1965 8.77534 51.2422 12.1367 51.4671 12.2146Z" fill="#DFAA35" stroke="none" stroke-miterlimit="10"/>
                <path d="M44.7 6.65214C66.7909 14.8461 174.282 31.01 266.724 6.65214C266.724 6.65214 303.63 -3.07154 305.273 2.9887C306.163 6.29163 294.223 10.3643 291.397 23.157C290.135 28.8568 291.573 34.9755 294.477 46.9985C298.692 64.4095 301.234 65.7833 300.648 68.9986C297.87 84.1979 237.445 75.1367 155.722 76.3352C155.722 76.3352 71.8956 77.5628 30.8333 68.9986C24.9267 67.7709 20.2328 64.3803 11.0209 64.3706C9.55402 64.3706 8.40007 64.4583 7.70576 63.4937C4.45911 59.0118 20.7217 44.4555 18.5018 30.4839C16.4678 17.7008 0.34213 14.2518 1.54496 8.48385C2.76734 2.60873 20.1545 2.93023 23.1274 2.97895C35.4197 3.21278 44.4751 6.56445 44.7 6.65214Z" stroke="black" stroke-miterlimit="10"/>
            </svg><span>Envoyer</span></button>
        </div>
    </form>
    <span class="erreursCont"><?php if(isset ($erreurCont)){echo $erreurCont;} if(isset($sucessCont)){echo $sucessCont;}?></span>
    <div class="gmaps"></div>
</section>

<!--NEWSLETTER-->
<section class="partNews">
    <img class="gun" src="img/gun.png" alt="gun">
    <div class="textNews">
        <h3>S'abonner a la Newsletter</h3>
        <p>Inscrivez-vous à notre newsletter pour avoir accès à des informations exclusives.</p>
    </div>

    <div class="remplirNews">
        <form action="#" method="post">
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

<!--BACK TO TOP-->
<div id="backtotop">
    <a href="#accueil"><img src="img/arrow.png" alt=""></a>
</div>

<!--DEBUT BAS DE PAGE-->
<footer>
    <div class="basLogo">
        <img src="img/logo.png" alt="icone winchester" loading="lazy">
    </div>
    <div class="rgpd">
        <h5>Winchester 2022 - Tous droits reserves.</h5>
        <ul>
            <li>Design : <a href="http://mmi20c04.mmi-troyes.fr/clickgames/"> ClickGames</a></li>
            <li><a href="rgpd.html">Politique de confidentialité et cookies</a></li>
            <li><a href="">Conditions générales</a></li>
        </ul>
    </div>
    <div class="medias">
        <h5>Suivez nous</h5>
        <div>
            <a href=""><img src="img/yt.png" alt="icone youtube"></a>
            <a href="https://www.instagram.com/winchester_le_jeu/" target="_blank"><img src="img/ig.png" alt="icone instagram"></a>
            <a href=""><img src="img/fb.png" alt="icone facebook"></a>
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