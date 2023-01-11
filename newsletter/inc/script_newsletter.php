<?php

if(isset($_POST['envoyer'])) {
    $email = $_POST['mailing'];

    if (!empty($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            require_once "conf.php";

            $rows = $pdo->prepare("SELECT * FROM newsletter WHERE email=?");
            $rows->execute(array($email));

            $count = $rows->rowCount();

            if($count == true){
                $erreur = "<span class='erreur'><i class='fas fa-exclamation-circle'></i>E-mail déjà existant !</span><br>";
            }else{
                $time = time();

                $req = $pdo->prepare("INSERT INTO newsletter(email, date_time) VALUES(?, ?)");
                $req->execute(array($email, $time));

                $header="MIME-Version: 1.0 \e\n";
                    $header.='FROM:"Winchester, le jeu"<contact@winchester.com>'."\n";
                    $header.='Content-Type:text/html; charset="utf-8"'."\n";
                    $header.='Content-Transfer-Encoding: 8bit';

                    $message='<html><head><meta name="viewport" content="width=device-width, initial-scale=1.0"></head>
                                <body style="background-color: #ffdca7; margin: 0; padding: 0;">
                                <div style="text-align: center; padding: 20px">
                                    <img src="https://mmi20c04.mmi-troyes.fr/promo/img/logo.png" alt="" width="140px" style="margin: 0 auto 20px auto;">
                                    <h1 style="font-family: sans-serif; color: #a05d38;">Bienvenue à notre newsletter !</h1><br>
                                    <p style="font-family: sans-serif;">Chaque semaine, tu recevras toutes les actualités concernant le jeu Winchester à cette adresse(';
                    $message.=$email;
                    $message.=').</p>
                                </div>
                            </body></html>';

                mail("contact.leosix@gmail.com", "Inscription à la newsletter (Winchester)", $message, $header);

                $sucess = "<span class='succes'><i class='fas fa-check-circle'></i> Inscription réussie </span><br>";

                unset($email);
            }

        } else {
            $erreur = "<span class='erreur'><i class='fas fa-exclamation-circle'></i>Veuillez saisir un email valide</span><br>";
        }
    } else {
        $erreur = "<span class='erreur'><i class='fas fa-exclamation-circle'></i>Veuillez saisir un email valide</span><br>";
    }
}
?>