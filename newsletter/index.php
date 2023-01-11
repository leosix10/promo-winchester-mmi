<?php include "inc/script_newsletter.php"?>

<span class="erreurs"><?php if(isset ($erreur)){echo $erreur;}?></span>
<span class="erreurs"><?php if(isset($sucess)){echo $sucess;}?></span>
<span class="line"></span>
<section class="form">
    <form action="" method="post">
            <label> Adresse E-mail:</label>
            <input class="input" type="email" name="mailing" placeholder="Votre adresse email" >
            <br>
            En s'inscrivant à notre newsletter, vous acceptez de recevoir chaque semaine nos derniers articles de blog par courrier electronique<br> et vous prennez connaissance de nos <a href="#">politiques de confidentialités.</a></input>
            <br>
            <input type="submit" name="envoyer" value="S'inscrire">

        </form>