<?php
require 'bdd.php';
$bd= new bdd('nolarkuser','nolarkpwd');
$cnx=$bd->GetPdo();
$pageCasque= substr($pageActuelle,0,-4);
$req = 'SELECT casque.id, nom, modele, libelle, prix, classement, image, stock';
$req .= ' FROM casque INNER JOIN type ON casque.type=type.id';
$req .= ' INNER JOIN marque ON casque.marque=marque.id';
$req .=' WHERE type.libelle="' . $pageCasque . '"';
$res=$cnx->query($req);
echo '<section id="casques">';
while ($ligne = $res->fetch(PDO::FETCH_OBJ)) {
 echo '<article>';
 echo '<img id="casquee" src="../images/casques/', $ligne->libelle, '/', $ligne->image,
 '" alt="', $ligne->modele, '" onclick="article()">';
 echo '<p class="stockok"><abbr data-tip="Plus que 6 casques en stock...">',$ligne->stock,'</abbr></p>';
 echo '<p class="prix">',$ligne->prix,'€','</p>';
 echo '<p class="marque">',$ligne->nom,'</p>';
 echo '<p class="modele">',$ligne->modele,'</p>';
 echo '</article>';
}
echo '</section>';
