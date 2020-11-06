<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style1.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="content">
             <h1><span class="detroit1">DETROIT</span><br><br></h1>
             <div class="contente">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:logout.php");
                   }
                }

                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "<h1>Bonjour $user,</h1>";
                }
            ?>
        <br>
        Découvrez le jeu  <span id="motsforts">DETROIT : Become Human.</span>
        <br><br><br>
        <a href='principal.php?deconnexion=true'><span>Déconnexion</span></a>
        <br><br>

        <p class="descriptiondujeu"><span id="synopsis">Synopsis</span></p><hr><br>
        <a href='https://www.quanticdream.com/fr/detroit-become-human' id="siteofficiel"><span>Site officiel</span></a>
    <button class="np" id="np1" value="Nouveau jeu" onclick="Javascript:window.open('https://twitter.com/detroit_game?lang=fr');"><img src="images/twitter.png" alt="twitter" class="twitter"></button>

        <p class="descriptiondujeu">
            <span id="devenez">Devenez humain</span><br><br>
Nous sommes en 2038, et voici l'histoire de Kara. <br><br>
LE MONDE DEVIENT CE QUE VOUS EN FAITES... <br><br>
Modelez le futur... <br><br>
Entrez dans une version futuriste de Détroit où la pression est palpable entre les humains et les androïdes qui tentent de coexister tant bien que mal. Les décisions que vous prenez forgent l'histoire autour de vous.
<br><br>
Découvrez les diverses destinées de chacun des personnages et guidez-les à travers un fil narratif à branches qui les confrontera à des dilemmes personnels et complexes. Ils remettront même en cause la nature de leur existence.
Chacune de vos décisions fait évoluer l'histoire et a des conséquences à la fois mineures et dramatiques. Une situation mal évaluée pourrait bien coûter la vie de quelqu'un et personne n'aura droit à une seconde chance. Réfléchissez bien avant d'agir et faites preuve de vigilance pour tenter de rester en vie car l'instinct de survie est bel et bien ce qui nous rend humains.</p> <br><br>

<br><br>
        </div>
        </div>
    </body>
</html>