//Français
$(function() {
    $(".fr").click(function() {
        //header
        $(".nav_links li:nth-child(1) a").text("Le jeu");
        $(".nav_links li:nth-child(2) a").text("Actus");
        $(".nav_links li:nth-child(3) a").text("Jouer en ligne");
        $(".nav_links li:nth-child(4) a").text("Contact");
        //footer
        $(".rgpd h5").text("Winchester 2022 - Tous droits reserves.");
        $(".rgpd ul li:nth-child(1) a").text("Clickgames");
        $(".rgpd ul li:nth-child(2) a").text("Politique de confidentialité et cookies");
        $(".rgpd ul li:nth-child(3) a").text("Conditions générales");
        $(".medias h5").text("Suivez-nous");
        //newsletter
        $(".textNews h3").text("S'abonner a la Newsletter");
        $(".textNews p").text("Inscrivez-vous à notre newsletter pour avoir accès à des informations exclusives.");
        $(".remplirNews button span").text("S'inscrire");
        $(".remplirNews p").text("En s'inscrivant à notre newsletter, vous acceptez de recevoir chaque semaine nos derniers articles de blog par courrier électronique et vous prennez connaissance de notre politique de confidentialité.");
        //synopsis
        $(".terreSynop p").text("Vous rêvez d’être le cowboy le plus recherché du Far West. Cependant, un autre rival veut s’arracher ce même titre. Pour y parvenir, braquez et échangez vos ressources aux marchands du village et récupérez toutes les étoiles de shérif. Si vous réussissez à faire une vente en or, vous recevrez une prime de plus. À l’aide des chevaux à votre disposition, commercez plusieurs ressources aux marchands. À la fin de chaque manche, le cowboy avec le plus de butin sur lui remporte une étoile de shérif. Le premier à posséder deux étoiles gagne le duel.");
        //infos jeu
        $(".infoVideo p").text("Vous souhaitez acheter notre jeu pour partager des moments de convivialité en famille ou avec vos amis ? N'attendez pas ! Disponible depuis le 7 avril au prix de 18€, la boîte du jeu Winchester contient 55 cartes et 60 jetons sur le thème du western.");
        $(".niveau li:nth-child(1) span").text("7 à 77 ans");
        $(".niveau li:nth-child(2) span").text("2 joueurs");
        $(".niveau li:nth-child(3) span").text("30 minutes");
        $(".infoVideo button span").text("Acheter le jeu");
        //plateau jeu
        $(".partPlateau h2").text("Notre plateau");
        $(".partPlateau p").text("Sur notre plateau, nous avons des jetons de ressource disposés à gauche. Pour les obtenir, il faut vendre les 6 types de ressources. Leur nombre dépend de leur rareté. Ensuite, il y a les cartes chevaux. Elles offrent la possibilité d'échanger plusieurs ressources. Enfin, il y a les jetons bonus. Ils peuvent complètement retourner le cours de la partie et peut récompenser le joueur.");
        $(".partPlateau span").text("Jouer en ligne");
        //regles jeu
        $(".reglesJeu h2").text("Les regles du jeu");
        $(".reglesJeu p").text("C'est un jeu 1 contre 1 au tour par tour en 3 manches maximum. Dans Winchester, tu peux faire deux choses : marchander ou vendre des ressources. Pour gagner la partie, tu devras échanger tes ressources et remporter les deux manches en obtenant un jeton shérif à chaque manche gagnée.");
        $(".reglesJeu button span").text("Voir la video");
        //flyers
        $(".partFlyer p").text("");
        //contact
        $(".partContact h2").text("Nous contacter");
        $(".nomC label").text("Nom");
        $(".prenomC label").text("Prenom");
        $(".telC label").text("Numero de telephone");
        $(".emailC label").text("Adresse e-mail");
        $(".messageC label").text("Votre message");
        $(".envoyerC span").text("Envoyer");
        //RGPD
        $(".pageRgpd h2:nth-child(2)").text("POLITIQUE DE CONFIDENTIALITÉ");
        $(".pageRgpd p:nth-child(3)").text("Les données présentes sur le présent formulaire sont sauvegardées dans un fichier informatisé par l’agence Clickgames pour gérer notre clientèle.");
        $(".pageRgpd p:nth-child(4)").text("Les renseignements rassemblés seront communiqués aux seuls destinataires suivants : l’agence Clickgames. Ces données feront l’objet de traitement dans notre département commercial et seront transmises à certains de nos prestataires.");
        $(".pageRgpd p:nth-child(5)").text("Vos informations seront conservées pour un délai de deux mois. La condition de conservation de vos données se feront dans un délai déterminé par les critères suivants : lors de l’inscription à la newsletter, lors d’un achat et également lorsque vous envoyer un message via le formulaire de contact.");
        $(".pageRgpd p:nth-child(6)").text("Vous garderez un droit de regard sur vos informations. Vous pourriez y accéder, les rectifier, demander leur modification et suppression et exercer votre droit à la limitation du traitement. Vous pourrez exercer ces droits à tout moment. Pour cela, vous pourriez contacter notre Service juridique :");
        $(".pageRgpd p:nth-child(7)").text("• Par mail au : winchester.clickgames@gmail.com ;");
        $(".pageRgpd p:nth-child(8)").text("• Par courrier postal à l’adresse : 9 Rue Québec, 10430 Rosières-près-Troyes.");
        $(".pageRgpd p:nth-child(9)").text("Aussi, vous pouvez retirer votre consentement au traitement de vos données à tout moment ou vous opposer au traitement de vos données. Vous pouvez également exercer un droit à la portabilité sur vos données personnelles.");
        $(".pageRgpd p:nth-child(10)").text("Si après avoir contacté notre service juridique, vous constatez que vos droits « Informatiques et Libertés » ne sont pas respectés, vous pourrez adresser une réclamation à la Commission nationale de l’Informatique et des Libertés ou CNIL, 3 Places de Fontenoy, 75007 Paris.");
        $(".pageRgpd p:nth-child(11)").text("Note: Les informations marquées d’astérisques sont obligatoires et doivent impérativement être fournies. Il s’agit de renseignements nécessaires à la fourniture des services ou la conclusion du contrat.");
        $(".pageRgpd h2:nth-child(12)").text("POLITIQUE DE COOKIES");
        $(".pageRgpd p:nth-child(13)").text("En continuant votre navigation sur ce site, vous acceptez l’utilisation de cookies afin de conserver vos informations personnelles lors de vos futurs achats. Si vous souhaitez ne pas conserver les cookies, vous pouvez les supprimer à tout moment.");
        //panier
        //ETAPE 1
        $(".partAchat .tab button:nth-child(1)").text("1 - Mon panier");
        $(".partAchat .tab button:nth-child(2)").text("2 - Mes adresses");
        $(".partAchat .tab button:nth-child(3)").text("3 - Mode de livraison");
        $(".partAchat .tab button:nth-child(4)").text("4 - Paiement securise");
        $(".partAchat .global-article #description h1").text("Winchester, le jeu");
        $(".partAchat .global-article #description p").text("Le jeu de carte, inspiré du jeu Jaïpur, sur le thème western. Contient 55 cartes et 60 jetons. Dimensions (LxHxP): 13 x 18 x 4 cm.");
        $(".partAchat .global-article #description span").text("Quantitée :");
        $(".partAchat .global-article #description .stock").text("En stock");
        $(".partAchat #cadeau p").text("Je souhaite emballer dans un papier cadeau (+2€)");
        $(".partAchat #promo button span").text("Ajouter");
        $(".partAchat #frais p").text("Frais de livraison indicatifs: Gratuit");
        $(".partAchat #total p").text("Total panier: ");
        $(".partAchat .btn-panier #btn-left span").text("Retour");
        $(".partAchat .btn-panier #btn-right span").text("COMMANDER");
        $(".partAchat .aide h3").text("Besoin d'aide ?");
        $(".partAchat .aide p:nth-child(2)").text("Notre service client est à votre écoute du lundi au vendredi de 9h à 19h.");
        $(".partAchat .aide h4:nth-child(5)").text("Paiement securise");
        $(".partAchat .aide h4:nth-child(8)").text("Livraison gratuite");
        $(".partAchat .aide p:nth-child(9)").text("Dès 15€ d'achat");
        $(".partAchat #infoLivr p").text("Vous pouvez choisir votre mode de livraison à l'étape suivante.");
        //CONFIRMATION
        $(".confirmation .messConf div aside p:nth-child(1)").text("Un mail de confirmation vient de vous être envoyé !");
        $(".confirmation .messConf div aside p:nth-child(2)").text("Vous retrouverez le récapitulatif de votre commande, ainsi que la facture en pièce-jointe.");
        $(".confirmation .messConf div aside p:nth-child(3)").text("Nous vous remercions pour l'achat du jeu Winchester !");
        $(".confirmation .btnA-l-r .btnA-r span").text("D'accord !");
        //ETAPE2
        $(".partAchat #mes_adresses .prenomA label").text("Prenom");
        $(".partAchat #mes_adresses .nomA label").text("Nom");
        $(".partAchat #mes_adresses .adresseA label").text("Adresse postale");
        document.getElementById('adresseA').placeholder = 'N°, nom de rue';
        $(".partAchat #mes_adresses .adresseB label").text("Complement d'adresse (optionel)");
        document.getElementById('adresseB').placeholder = 'Appartement, Batiment,...';
        $(".partAchat #mes_adresses .codeA label").text("Code postal");
        $(".partAchat #mes_adresses .villeA label").text("Ville");
        $(".partAchat #mes_adresses .paysA label").text("Pays");
        $(".partAchat #mes_adresses .telA label").text("Numero de telephone");
        $(".partAchat #mes_adresses .emailA label").text("Adresse e-mail");
        $(".partAchat #mes_adresses .btnA-l span").text("Retour");
        $(".partAchat #mes_adresses .btnA-r span").text("SUIVANT");
        //ETAPE3
        $(".partAchat #mode_livraison h2").text("Choisissez votre mode de livraison");
        $(".partAchat #mode_livraison .point-relais .titreModLivr p:nth-child(1)").text("Livraison en Point Relais");
        $(".partAchat #mode_livraison .point-relais .titreModLivr p:nth-child(2)").text("2 à 3 jours ouvrés");
        $(".partAchat #mode_livraison .point-relais span").text("Gratuit");
        $(".partAchat #mode_livraison .domicile .titreModLivr p:nth-child(1)").text("Livraison à Domicile");
        $(".partAchat #mode_livraison .domicile .titreModLivr p:nth-child(2)").text("1 à 2 jours ouvrés");
        $(".partAchat #mode_livraison .domicile span").text("Gratuit");
        $(".partAchat #mode_livraison .domicileexpress .titreModLivr p:nth-child(1)").text("Livraison à Domicile Express");
        $(".partAchat #mode_livraison .domicileexpress .titreModLivr p:nth-child(2)").text("Livré en 24h");
        $(".partAchat #mode_livraison .btnA-l span").text("Retour");
        $(".partAchat #mode_livraison .btnA-r span").text("SUIVANT");
        //ETAPE4
        $(".partAchat #paiement h2").text("Finalisation de la commande");
        $(".partAchat #paiement .cowboyInfo p").text("Une derniere etape pour finaliser la commande !");
        $(".partAchat #paiement #payNom").text("Nom");
        $(".partAchat #paiement #payNumCarte").text("Numéro de carte");
        $(".partAchat #paiement #payExpDate").text("Date d'expiration");
        $(".partAchat #paiement #payCodeSecu").text("Code de sécutiré");
        $(".partAchat #paiement .btnA-l span").text("Retour");
        $(".partAchat #paiement .btnA-r span").text("PAYER");
    })
});



//English
$(function() {
    $(".en").click(function() {
        //header
        $(".nav_links li:nth-child(1) a").text("The game");
        $(".nav_links li:nth-child(2) a").text("News");
        $(".nav_links li:nth-child(3) a").text("Play online");
        $(".nav_links li:nth-child(4) a").text("Contact");
        //footer
        $(".rgpd h5").text("Winchester 2022 - All rights reserved");
        $(".rgpd ul li:nth-child(2) a").text("Privacy Policy and Cookies");
        $(".rgpd ul li:nth-child(3) a").text("General terms and conditions");
        $(".medias h5").text("Follows us");
        //newsletter
        $(".textNews h3").text("Subscribe to the Newsletter");
        $(".textNews p").text("Subscribe to our newsletter to get access to exclusive information in your inbox.");
        $(".remplirNews button span").text("Subscribe");
        $(".remplirNews p").text("By subscribing to our newsletter, you agree to receive our latest blog posts by email each week and you acknowledge our privacy policy.");
        //synopsis
        $(".terreSynop p").text("You dream of being the most wanted cowboy in the far west. However, another rival wants the same title. To achieve this, rob and trade your resources to the merchants in the village and collect all the sheriff's stars. If you manage to make a gold sale, you'll receive an extra bonus. Using the horses at your disposal, trade several resources to the merchants. At the end of each round, the cowboy with the most loot on him wins a sheriff's star. The first to have two stars wins the duel.");
        //infos jeu
        $(".infoVideo p").text("You want to buy our game to share moments of conviviality with your family or friends? Don't wait! Available since April 7th for 18€, the Winchester game box contains 55 cards and 60 tokens with a western theme.");
        $(".niveau li:nth-child(1) span").text("7 to 77 years old");
        $(".niveau li:nth-child(2) span").text("2 players");
        $(".niveau li:nth-child(3) span").text("30 minutes");
        $(".infoVideo button span").text("Buy the game");
        //plateau jeu
        $(".partPlateau h2").text("Our set");
        $(".partPlateau p").text("On our board, we have resource tokens on the left. To get them, you have to sell the 6 types of resources. Their number depends on their rarity. Then there are the horse cards. They offer the possibility to exchange several resources. Finally, there are the bonus tokens. They can completely change the course of the game and can reward the player.");
        $(".partPlateau span").text("Play online");
        //regles jeu
        $(".reglesJeu h2").text("Rules of the game");
        $(".reglesJeu p").text("It's a 1 vs 1 turn-based game with a maximum of 3 rounds. In Winchester, you can do two things: trade or sell resources. To win the game, you will have to trade your resources and win both rounds by getting a sheriff token for each round you win.");
        $(".reglesJeu button span").text("Watch the video");
        //flyers
        $(".partFlyer p").text("");
        //contact
        $(".partContact h2").text("Contact us");
        $(".nomC label").text("Name");
        $(".prenomC label").text("First name");
        $(".telC label").text("Phone number");
        $(".emailC label").text("Email address");
        $(".messageC label").text("Your message");
        $(".envoyerC span").text("Send");
        //RGPD
        $(".pageRgpd h2:nth-child(2)").text("PRIVACY POLICY");
        $(".pageRgpd p:nth-child(3)").text("The data on this form are saved in a computerized file by the Clickgames agency to manage our customers.");
        $(".pageRgpd p:nth-child(4)").text("The information collected will be communicated only to the following recipients: the Clickgames agency. This data will be processed in our commercial department and will be transmitted to some of our service providers.");
        $(".pageRgpd p:nth-child(5)").text("Your information will be kept for a period of two months. The condition of conservation of your data will be done within a period determined by the following criteria: when you subscribe to the newsletter, when you make a purchase and also when you send a message via the contact form.");
        $(".pageRgpd p:nth-child(6)").text("You will keep a right of review of your information. You may access it, rectify it, request its modification and deletion and exercise your right to limit the processing. You can exercise these rights at any time. To do so, you may contact our Legal Department:");
        $(".pageRgpd p:nth-child(7)").text("• By e-mail : winchester.clickgames@gmail.com ;");
        $(".pageRgpd p:nth-child(8)").text("• By mail to the address : 9 Rue Québec, 10430 Rosières-près-Troyes.");
        $(".pageRgpd p:nth-child(9)").text("Also, you can withdraw your consent to the processing of your data at any time or object to the processing of your data. You can also exercise a right to portability on your personal data.");
        $(".pageRgpd p:nth-child(10)").text("If, after having contacted our legal department, you find that your rights « Informatiques et Libertés » are not respected, you can send a complaint to the Commission nationale de l'Informatique et des Libertés or CNIL, 3 Places de Fontenoy, 75007 Paris, France.");
        $(".pageRgpd p:nth-child(11)").text("Note: The information marked with an asterisk is mandatory and must be provided. This information is necessary for the provision of services or the conclusion of the contract.");
        $(".pageRgpd h2:nth-child(12)").text("COOKIE POLICY");
        $(".pageRgpd p:nth-child(13)").text("By continuing to browse this site, you agree to the use of cookies to store your personal information for future purchases. If you do not wish to retain cookies, you may delete them at any time.");
        //panier
        //ETAPE 1
        $(".partAchat .tab button:nth-child(1)").text("1 - My cart");
        $(".partAchat .tab button:nth-child(2)").text("2 - Mailing address");
        $(".partAchat .tab button:nth-child(3)").text("3 - Shipping method");
        $(".partAchat .tab button:nth-child(4)").text("4 - Secured payment");
        $(".partAchat .global-article #description h1").text("Winchester, the game");
        $(".partAchat .global-article #description p").text("The card game, inspired by the Jaipur game, with a western theme. Contains 55 cards and 60 tokens. Dimensions (WxHxD): 13 x 18 x 4 cm.");
        $(".partAchat .global-article #description span").text("Quantity:");
        $(".partAchat .global-article #description .stock").text("In stock");
        $(".partAchat #cadeau p").text("I wish to wrap in gift paper (+2€)");
        $(".partAchat #promo button span").text("Add");
        $(".partAchat #frais p").text("Indicative shipping costs: Free");
        $(".partAchat #total p").text("Total cart: ");
        $(".partAchat .btn-panier #btn-left span").text("Back");
        $(".partAchat .btn-panier #btn-right span").text("ORDER");
        $(".partAchat .aide h3").text("Need help?");
        $(".partAchat .aide p:nth-child(2)").text("Our customer service is at your disposal from Monday to Friday from 9am to 7pm.");
        $(".partAchat .aide h4:nth-child(5)").text("Secured payment");
        $(".partAchat .aide h4:nth-child(8)").text("Free shipping");
        $(".partAchat .aide p:nth-child(9)").text("From 15€ of purchase");
        $(".partAchat #infoLivr p").text("You can choose your delivery method in the next step.");
        //CONFIRMATION
        $(".confirmation .messConf div aside p:nth-child(1)").text("A confirmation email has just been sent to you!");
        $(".confirmation .messConf div aside p:nth-child(2)").text("You will find the summary of your order and the invoice attached.");
        $(".confirmation .messConf div aside p:nth-child(3)").text("Thank you for purchasing the Winchester game!");
        $(".confirmation .btnA-l-r .btnA-r span").text("OK!");
        //ETAPE2
        $(".partAchat #mes_adresses .prenomA label").text("First name");
        $(".partAchat #mes_adresses .nomA label").text("Family name");
        $(".partAchat #mes_adresses .adresseA label").text("Mailing address");
        document.getElementById('adresseA').placeholder = 'Number, street name';
        $(".partAchat #mes_adresses .adresseB label").text("Address complement (optional)");
        document.getElementById('adresseB').placeholder = 'Apartment, Building,...';
        $(".partAchat #mes_adresses .codeA label").text("Zip code");
        $(".partAchat #mes_adresses .villeA label").text("City");
        $(".partAchat #mes_adresses .paysA label").text("Country/State");
        $(".partAchat #mes_adresses .telA label").text("Phone number");
        $(".partAchat #mes_adresses .emailA label").text("email address");
        $(".partAchat #mes_adresses .btnA-l span").text("Back");
        $(".partAchat #mes_adresses .btnA-r span").text("NEXT");
        //ETAPE3
        $(".partAchat #mode_livraison h2").text("Choose your shipping method");
        $(".partAchat #mode_livraison .point-relais .titreModLivr p:nth-child(1)").text("Delivery in Relay Point");
        $(".partAchat #mode_livraison .point-relais .titreModLivr p:nth-child(2)").text("2 to 3 working days");
        $(".partAchat #mode_livraison .point-relais span").text("Free");
        $(".partAchat #mode_livraison .domicile .titreModLivr p:nth-child(1)").text("Home Delivery");
        $(".partAchat #mode_livraison .domicile .titreModLivr p:nth-child(2)").text("1 to 2 working days");
        $(".partAchat #mode_livraison .domicile span").text("Free");
        $(".partAchat #mode_livraison .domicileexpress .titreModLivr p:nth-child(1)").text("Express Home Delivery");
        $(".partAchat #mode_livraison .domicileexpress .titreModLivr p:nth-child(2)").text("Delivered in 24 hours");
        $(".partAchat #mode_livraison .btnA-l span").text("Back");
        $(".partAchat #mode_livraison .btnA-r span").text("NEXT");
        //ETAPE4
        $(".partAchat #paiement h2").text("Finalizing the order");
        $(".partAchat #paiement .cowboyInfo p").text("One last step to finalize the order!");
        $(".partAchat #paiement #payNom").text("Name");
        $(".partAchat #paiement #payNumCarte").text("Card number");
        $(".partAchat #paiement #payExpDate").text("Expiry date");
        $(".partAchat #paiement #payCodeSecu").text("Security code");
        $(".partAchat #paiement .btnA-l span").text("Retour");
        $(".partAchat #paiement .btnA-r span").text("PAYER");
    })
});