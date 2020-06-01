<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'bdd.php';
$bdd = new bdd('nolarkuser', 'nolarkpwd');
$cnxt = $bdd->GetPdo();
$req='select pseudo,motDePasse from membre where pseudo="' . $login . '" and motDePasse="' . $pwd . '"';
$rest = $cnxt->query($req);
while($pseudo=$rest->fetch(PDO::FETCH_OBJ)){
    if($pseudo->pseudo==$login && $pseudo->motDePasse==$pwd){
        session_start();
        $_SESSION['login']=$login;
        $_SESSION['pwd']=$pwd;
        $_SESSION['logged']=true;
        header('Location: http://aled2/pages/inscription.php');
    }    
}