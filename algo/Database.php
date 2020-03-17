<?php

class Database
{
    private $login;
    private $pass;
    private $connec;

    public function __construct($login ='root', $pass=''){
        $this->login = $login;
        $this->pass = $pass;
        $this->connexion();
    }

    private function connexion(){
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=php_week', $this->login, $this->pass);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->connec = $bdd;
        }
        catch (PDOException $e)
        {
            $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
            die($msg);
        }
    }

    public function insertInto($tableName , $info){

        var_dump($info);

        $sql = "INSERT INTO ". $tableName;
        $fields = array();
        $values = array();
        foreach( $info as $field => $value )
        {
            $fields[] = $field;
            $values[] = "'".$value."'";
        }
        $fields = ' (' . implode(', ', $fields) . ')';
        $values = '('. implode(', ', $values) .')';

        $sql .= $fields .' VALUES '. $values;
        $sql = rtrim($sql, ',');

        $stmt = $this->connec->prepare($sql);
        $stmt->execute($sql);
    }
}
?>