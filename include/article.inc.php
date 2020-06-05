<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'bdd.php';
$bdd = new bdd('nolarkuser', 'nolarkpwd');
$cnxt = $bdd->GetPdo();
$reqt = 'SELECT casque.id, nom, modele, libelle, prix, classement, image, stock';
$reqt .= ' FROM casque INNER JOIN type ON casque.type=type.id';
$reqt .= ' INNER JOIN marque ON casque.marque=marque.id';
$reqt .= ' WHERE stock="' . $_GET['stock'] . '" and nom="' . $_GET['nom'] . '" and image="' . $_GET['image'] . '"';
$rest = $cnxt->query($reqt);
echo '<section id="articles">';
while ($ligne = $rest->fetch(PDO::FETCH_OBJ)) {
    echo '<article>';
    echo'<h2>Casque ',$ligne->libelle,'</h2>';
    echo '<img src="../images/casques/', $ligne->libelle, '/', $ligne->image,
    '" alt="', $ligne->modele, '">';
    echo '<p>','<span>',$ligne->nom,' ',$ligne->modele,'</span>','</br>','<span3 class="rating"><!--
            --><a id="dire" href="#1" title="Donner 5 étoile">★</a><!--
            --><a href="#2" title="Donner 4 étoiles">★</a><!--
            --><a href="#3" title="Donner 3 étoiles">★</a><!--
            --><a href="#4" title="Donner 2 étoiles">★</a><!--
            --><a href="#5" title="Donner 1 étoile">★</a></span3>',
            '</br></br>','Prix : ',
            '<span1>',$ligne->prix,'€','</span1>','</br></br>','Quantité : ','<span2>', $ligne->stock,'</span2>', 
            '</br></br>','<i class="fa fa-shopping-cart"></i>','<input class="add" type="submit" value="Ajouter au panier" />','</br></br>',' ',
            '<i class="fa fa-credit-card"></i>','<input class="buy" type="submit" value="Acheter cet article" />','</p>';
    echo '<div class="commentaires">', '</br></br></br>','Commentaires client :','</div>';
    echo '</br>', '<textarea></textarea>';
    echo '</article>';
}