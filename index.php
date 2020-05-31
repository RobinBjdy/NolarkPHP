<!DOCTYPE html>
<!-- 
     Page web créé dans le cadre du cours de web Dev le 01/09/2018
     Auteur : Alexis Vedrenne
     Email : alexisvedrenne482@gmail.com
-->

<html lang="fr-FR">
    <?php
        include('./Include/head.inc.php');
    ?>
    <body>
        <?php
            include('./Include/header.inc.php');
        ?>
        <section id="principal">
            <article>
                <img src="images/post-it.png" alt="Post-It : Penser à rentrer en vie">
                <p>
                    Au-delà de l'obligation légale, le port d'un casque est le garant de votre
                    sécurité. Le choix de votre casque doit se faire en fonction de vos besoins 
                    (route, cross, piste...).
                </p>
                <p>
                    Spécialiste reconnu dans l'univers de la sécurité du deux-roues, Nolark vous 
                    propose des milliers de modèles de casques disponibles au travers de plus de 
                    50 marques. Vous trouverez ici tous les types de casques moto : jet, intégral, 
                    modulable, transformable, piste, cross ou encore un large choix de casques 
                    moto enfant (taille et poids spécialement adaptés).
                </p>
                <p>
                    Nolark c'est également la disponibilité de toutes les couleurs et matières et 
                    ce, pour toutes les bourses.
                </p>
                <p>
                    Une question ? Un conseil ? Nos conseillers sont là pour vous aiguiller afin 
                    de trouver le modèle qui correspond à vos besoins.
                </p>
                <p>
                    Nolark n'est pas seulement un magasin de casques, c'est avant tout une équipe 
                    de passionnés qui sélectionnent pour vous les meilleurs casques moto afin de 
                    répondre au mieux à vos attentes.
                </p>
            </article>
            <aside>
                <img src="images/conseilcasque01.jpg" alt="Conseil du mois : Casque Cross">
                <p>Pour le style: Furious replica</p>
                <img src="images/conseilcasque02.jpg" alt="Conseil du mois : Intgéral Piste">
                <p>Pour le confort: Stars racing</p>
            </aside>

        </section>
        <section id="thematique">
            <h1>Catégories les plus populaires</h1>
            <article id="gauche"><a href="pages/route.php">Route</a></article>
            <article id="milieu"><a href="pages/cross.php">Cross</a></article>
            <article id="droite"><a href="pages/piste.php">Piste</a></article>
        </section>
       <?php 
       include('./Include/footer.inc.php');
       ?>      
    </body>
</html>