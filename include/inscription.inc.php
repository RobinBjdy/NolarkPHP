<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'bdd.php';
$bd = new bdd('nolarkuser', 'nolarkpwd');
if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
    if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pwd']) && !empty($_POST['pwd'])) && (isset($_POST['pwd_verif']) && !empty($_POST['pwd_verif'])) && (isset($_POST['mail']) && !empty($_POST['mail_verif'])) && (isset($_POST['date_naissance']) && !empty($_POST['date_naissance']))) {
        $connexion = $bd->GetPdo();
        if (!$connexion) {
            echo 'LA CONNEXION AU SERVEUR A ECHOUER\n';
            exit;
        }
        $sql = 'insert into membre(pseudo, motDePasse, mail, naissance)
        values(' . $_POST['login'] . ',' . $_POST['pwd'] . ',' . $_POST['mail'] . ',' . $_POST['date_naissance'] . '';
        $res = $connexion->exec($sql);
        header('Location: connexion.php');
        exit();
    }
}
        