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
        include('../Include/footer.inc.php');
        include('../include/inscription.inc.php');
    ?>
 <section id="inscrit">
     <h1>Formulaire d'inscription :</h1></br>
        <p>Merci de bien remplir ces champs afin de continuer.</p></br>
        <form action="inscription.php" method="post" name="Inscription">
            <div id="inscritsbox">
                <h2>Identifiant</h2></br>
                <div id="inscritstext">
                    <div><label for="pseudo">Pseudo : (3 à 32 caractères)</label>   <input type="text" name="login" id="pseudo" size="30" /> </div></br></br>
                    <div><label for="mdp">Mot de passe : (4 à 50 caractères)</label>  <input type="password" name="pwd" id="mdp" size="30" /></div></br></br>
                    <div><label for="mdp_verif">Mot de passe (vérification) :</label>  <input type="password" name="pwd_verif" id="mdp_verif" size="30" /></div></br></br>
                    <div><label for="mail">E-mail :</label>  <input type="text" name="mail" id="mail" size="30" /></div></br></br>
                    <div><label for="mail_verif">E-mail (vérification) :</label> <input type="text" name="mail_verif" id="mail_verif" size="30" /></div></br></br>
                    <div><label for="date_naissance">Date de naissance : (JJ/MM/AAAA)</label>  <input type="text" name="date_naissance" id="date_naissance" size="30" /></div>
                </div>
                <div class="inscription"> <input type="submit" value="Inscription" name="inscription"/> </div>
                <a class="lien" href="connexion.php">Retour</a></br></br>
            </div>
            
        </form>
    </section>
</html>