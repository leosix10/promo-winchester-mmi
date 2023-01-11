<?php

if(isset($_POST['envoyerMessage'])) {
    $nom = $_POST['nomCont'];
    $prenom = $_POST['prenomCont'];
    $tel = $_POST['telCont'];
    $email = $_POST['emailCont'];
    $message = $_POST['messageCont'];

    if (!empty($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            require_once "conf.php";

            $header="MIME-Version: 1.0 \e\n";
                $header.='FROM:"Winchester, le jeu"<contact@winchester.com>'."\n";
                $header.='Content-Type:text/html; charset="utf-8"'."\n";
                $header.='Content-Transfer-Encoding: 8bit';

                $message='<html><head><meta name="viewport" content="width=device-width, initial-scale=1.0"></head>
                            <body style="background-color: #ffdca7; margin: 0; padding: 0;">
                            <div style="text-align: center; padding: 20px">
                                <img src="https://mmi20c04.mmi-troyes.fr/promo/img/logo.png" alt="" width="140px" style="margin: 0 auto 20px auto;">
                                <h1 style="font-family: sans-serif; color: #a05d38;">Nouveau message</h1><br>
                                <p style="font-family: sans-serif;">De la part de :'.$prenom.' '.$nom.'</p>
                                <p style="font-family: sans-serif;">Adresse e-mail :'.$email.'</p>
                                <p style="font-family: sans-serif;">Numéro de téléphone :'.$tel.'</p>
                                <p style="font-family: sans-serif;">Message :'.$message.'</p>
                            </div>
                        </body></html>';

            mail("votre.email@gmail.com", "Formulaire de contact (Winchester)", $message, $header);

            $sucessCont = "<span class='succesCont'><i class='fas fa-check-circle'></i> Inscription réussie :)</span><br>";

            unset($email);
            

        } else {
            $erreurCont = "<span class='erreurCont'><i class='fas fa-exclamation-circle'></i>Veuillez saisir un email valide :(</span><br>";
        }
    } else {
        $erreurCont = "<span class='erreurCont'><i class='fas fa-exclamation-circle'></i>Veuillez saisir un email valide :(</span><br>";
    }
}
?>