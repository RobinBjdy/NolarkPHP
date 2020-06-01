
<!DOCTYPE html>
<!-- 
     Page web créé dans le cadre du cours de web Dev le 03/04/2020
     Auteur : Alexis Vedrenne
     Email : alexisvedrenne482@gmail.com
-->
<html>
    <?php
    include('../include/head.inc.php');
    include('../include/header.inc.php');
    include ('../include/footer.inc.php');
    include ('../include/connect.inc.php');
    ?>
    <body>
        <section id="connex">
            <h1> Connexion : </h1>
            <form id="form_contact" name="form_connexion" action="connexion.php" method="POST">
                <div class="loginn-box">
                    <img class="logo" src="../images/images.png"   width="20%">
                    </br>
                    </br>
                    </br>
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="login" id="pseudo" size="35" required placeholder="Identifiant" value=""; ?>">
                    </br>
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" name="pwd" placeholder="Mot de passe" id="mdp" size="35" required >
                    <input type="submit" name="connexion" value="Connexion">
                    Pas de compte ? <a class="lien" href="inscription.php">S'inscrire</a>
                </div>
            </form>
        </section>
    </body>

</html>