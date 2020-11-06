
<!DOCTYPE html>
<html lang="fr">
    <head>
       <meta charset="utf-8" name="viewport">
       <title>Detroit</title>
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style1.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1><span class="detroit">DETROIT</span><br><span class="becomehuman">BECOME HUMAN</span></h1>
                <br><br>
                <label for="username"><b>Nom d'utilisateur</b></label>
                <input type="text" id="username" placeholder="Nom d'utilisateur" name="username" required>
                <label for="password"><b>Mot de passe</b></label>
                <input type="password" id="password" placeholder="Mot de passe" name="password" required>
                <div class="checkbox"><label><input type="checkbox"> Remember me</label></div>
                <input type="submit" id='submit' value='Connexion' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
}
                ?>
            </form>
        </div>
    </body>
</html>