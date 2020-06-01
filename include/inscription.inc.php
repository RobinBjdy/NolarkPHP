<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
    if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pwd']) && !empty($_POST['pwd'])) && (isset($_POST['pwd_verif']) && !empty($_POST['pwd_verif'])) && (isset($_POST['mail']) && !empty($_POST['mail_verif'])) && (isset($_POST['date_naissance']) && !empty($_POST['date_naissance']))) {
        $connect = new PDO('mysql:host=127.0.0.1;dbname=nolark', 'nolarkuser', 'nolarkpwd');     
        $req = 'INSERT INTO membre(pseudo, motDePasse, mail,naissance) values("' . $_POST['login'] . '","' . $_POST['pwd'] . '","' . $_POST['mail'] . '","' . $_POST['date_naissance'] . '")';
        $existe=false;
        $sql = 'SELECT pseudo,motDePasse FROM membre WHERE pseudo="' . $_POST['login'] . '"  
        AND motDePasse="' . $_POST['pwd'] . '"';
        $res = $connexion->query($sql);
        while ($id = $res->fetch(PDO::FETCH_OBJ)) {
            
        }
        try{
        $res = $connect->prepare($req);
        $res->execute();      
        }
        catch(PDOException $ex){
            header('Location: inscription.php?erreur=');
            exit();
        }
        finally {
            header('Location: connexion.php?erreur=');
            exit(); 
        }
      
    }
    
}
        