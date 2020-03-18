<?php

class Database
{
    private $login;
    private $pass;
    private $connec;
    private $dbname;

    public function __construct($dbname, $login ='root', $pass=''){
        $this->dbname = $dbname;
        $this->login = $login;
        $this->pass = $pass;
        $this->connexion();
    }

    private function connexion(){
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname='. $this->dbname, $this->login, $this->pass);
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
        $stmt->execute();
    }

    public function selectAll($tableName){
        $sql = "SELECT * FROM " . $tableName;
        $result = $this->connec->prepare($sql);
        $result->execute();

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectId($tableName, $id){
        $sql = "SELECT * FROM " . $tableName . " WHERE id = " . $id;
        $result = $this->connec->prepare($sql);
        $result->execute();

        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function update($tableName, $infos, $whereClause){
        $sql = "UPDATE ". $tableName ." SET ";
        foreach( $infos as $field => $value )
        {
            $updates[] = "`$field` = '$value'";
        }
        $sql .= implode(', ', $updates);

        //Add the $where clauses as needed
        if( !empty( $whereClause ) )
        {
            foreach( $whereClause as $field => $value )
            {
                $value = $value;

                $clause[] = "$field = '$value'";
            }
            $sql .= ' WHERE '. implode(' AND ', $clause);
        }

        $stmt = $this->connec->prepare($sql);
        $stmt->execute();
    }
}
?>