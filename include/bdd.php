<?php
class bdd
{   
    private $_host = '127.0.0.1';
    private $_user = '';
    private $_pwd = '';
    private $_dbname = 'nolark';
    public $_cnx;   
    public function __construct($user,$pwd) {
        $this->_user=$user;
        $this->_pwd=$pwd;
        try{
            $this->_cnx = new PDO('mysql:host=' .$this->_host. ';dbname=' .$this->_dbname,$this->_user,$this->_pwd);
        }
        catch(PDOException $pdoex){
            die('<h1>Erreur lors de la connection</h1>');
        }
    }
    
    public function GetPdo() {
        return $this->_cnx;
    }
}

