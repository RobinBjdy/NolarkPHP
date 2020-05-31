<!DOCTYPE html>
<!-- 
     Page web créé dans le cadre du cours de web Dev le 03/04/2020
     Auteur : Alexis Vedrenne
     Email : alexisvedrenne482@gmail.com
-->
<html>
    <?php 
        require '../include/bdd.php';
        $bd= new bdd('nolarkuser','nolarkpwd');
        $cnx=$bd->GetPdo();
        $pageCasque= substr($pageActuelle,0,-4);
        include('../include/head.inc.php');
        include('../include/header.inc.php');        
    ?>  
    <?php 
        include('../include/footer.inc.php');
    ?>   
</html>

