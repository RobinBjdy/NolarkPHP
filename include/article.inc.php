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
echo '<section id="casques">';
while ($ligne = $rest->fetch(PDO::FETCH_OBJ)) {
    echo '<article>';
    echo '<img id="casquee" src="../images/casques/', $ligne->libelle, '/', $ligne->image,
    '" alt="', $ligne->modele, '"></a>';
    echo '<p class="stockok"><abbr data-tip="Plus que 6 casques en stock...">', $ligne->stock, '</abbr></p>';
    echo '<p class="prix">', $ligne->prix, '€', '</p>';
    echo '<p class="marque">', $ligne->nom, '</p>';
    echo '<p class="modele">', $ligne->modele, '</p>';
    echo '</article>';
}


echo '</section>';
