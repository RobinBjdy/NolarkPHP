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
 echo '<a href="../pages/article.php"><img src="../images/casques/', $ligne->libelle, '/', $ligne->image,
 '" alt="', $ligne->modele, '"></a>';
 echo '</article>';
}
echo '</section>';
