<?php

require 'bdd.php';
$bd = new bdd('nolarkuser', 'nolarkpwd');
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
    if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pwd']) && !empty($_POST['pwd']))) {
        $connexion = $bd->GetPdo();
        if (!$connexion) {
            echo 'LA CONNEXION AU SERVEUR A ECHOUER\n';
            exit;
        }
        $sql = 'SELECT pseudo,motDePasse FROM membre WHERE pseudo="' . $_POST['login'] . '"  
        AND motDePasse="' . $_POST['pwd'] . '"';
        $res = $connexion->query($sql);
        while ($id = $res->fetch(PDO::FETCH_OBJ)) {
            if ($id->pseudo==$_POST['login']&&$id->motDePasse==$_POST['pwd']) {
            session_start();
            $_SESSION['login'] = $_POST['login'];
            header('Location: espace-membre.php?identifier=' . $id->pseudo . '');
            exit();
        } elseif ($res[0] == 0) {
            $erreur = 'Login ou mot de passe non reconnu !';
            echo $erreur;
            echo"<br/><a href=\"index.php\">Accueil</a>";
            exit();
        } else {
            $erreur = 'plusieurs membres ont<br/>les memes login et mot de passe!';
            echo $erreur;
            echo"<br/><a href=\"index.php\">Acceuil</a>";
            exit();
        }
        }
        
    }
    else {
        $erreur = 'Erreur de saisie !<br/>Au moins un des champs est vide !';
        echo $erreur;
        echo"<br/><a href=\"connexion.php\">index</a>";
        exit();
    }
}

