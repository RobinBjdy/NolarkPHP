<!DOCTYPE html>
<!-- 
     Page web créé dans le cadre du cours de web Dev le 03/04/2020
     Auteur : Alexis Vedrenne
     Email : alexisvedrenne482@gmail.com
-->
<html>
    <?php
    include('../Include/head.inc.php');
    include('../Include/header.inc.php');
    ?>
    <body>
        <section id="connex">
            <h1> Connexion : </h1>
            <form id="form_contact" name="form_connexion" action="connexion.php" method="POST">
                <div class="login-box">
                    <img class="logo" src="../images/imagess.jpg"   width="20%">
                    </br>
                    </br>
                    </br>
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="pseudo" id="pseudo" size="35" required placeholder="Identifiant" value="<?php if (isset($pseudo)) echo htmlentities(trim($pseudo)); ?>">
                    </br>
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" name="mdp" placeholder="Mot de passe" id="mdp" size="35" required >
                    <input type="submit" name="connexion" value="Connexion">
                    Pas de compte ? <a class="lien" href="inscription.php">S'inscrire</a>
                </div>
            </form>
        </section>
    </body>
    <?php 
    include '../include/footer.inc.php';
    ?>
<section id="connex">
            <h1> Connexion : </h1>
            <form id="form_contact" name="form_connexion" action="connexion.php" method="POST">
                <div class="login-box">
                    <img class="logo" src="../images/images.png"   width="20%">
                        </br>
                        </br>
                        </br>
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="pseudo" id="pseudo" size="35" required placeholder="Identifiant" value="<?php if (isset($pseudo)) echo htmlentities(trim($pseudo)); ?>">
                        </br>
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" name="mdp" placeholder="Mot de passe" id="mdp" size="35" required >
                    <input type="submit" name="connexion" value="Connexion">
                    Pas de compte ? <a class="lien" href="inscription.php">S'inscrire</a>
                </div>
                </form>
                </section>
</html>