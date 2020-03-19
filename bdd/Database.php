<?php

/**
 * Class Database
 */
class Database
{
    /**
     * @var string $login
     * @var string $pass
     * @var PDO $connec
     * @var string $login
     */
    private $login;
    private $pass;
    private $connec;
    private $dbname;

    /**
     * Database constructor.
     * @param $dbname
     * @param string $login
     * @param string $pass
     */
    public function __construct($dbname, $login ='root', $pass='')
    {
        $this->dbname = $dbname;
        $this->login = $login;
        $this->pass = $pass;
        $this->connexion();
    }

    /**
     * Function to dispose obj
     */
    public function __destruct()
    {
        if($this->connec)
        {
            $this->disconnect();
        }
    }

    /**
     * Function to run to connect the bdd
     */
    private function connexion() : void
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost:3306;dbname='. $this->dbname, $this->login, $this->pass);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->connec = $bdd;
        }
        catch (PDOException $e)
        {
            $msg = 'ERREUR PDO dans ' . $e->getFile() . ' Ligne.' . $e->getLine() . ' : ' . $e->getMessage();
            die($msg);
        }
    }

    /**
     * Disconnect from db server
     * Called automatically from __destruct function
     */
    public function disconnect() : void
    {
        $this->connec = null;
    }

    /**
     * Function to create an Insert Request
     * @param string $tableName
     * @param array $info
     */
    public function insertInto($tableName, $info) : void
    {
        $sql = "INSERT INTO ". $tableName;
        $fields = array();
        $values = array();
        foreach ($info as $field => $value )
        {
            $fields[] = $field;
            $values[] = "'".$value."'";
        }
        $sql .= ' (' . implode(', ', $fields) . ') VALUES ('. implode(', ', $values) .')';
        $sql = rtrim($sql, ',');

        $stmt = $this->connec->prepare($sql);
        $stmt->execute();
    }

    /**
     * Function to create a SelectAll Request
     * @param string $tableName
     * @return array
     */
    public function selectAll($tableName) : array
    {
        $sql = "SELECT * FROM " . $tableName;
        $result = $this->connec->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Function to create a Specific Select Request
     * @param array $columns
     * @param string $tableName
     * @param array $whereClause
     * @return array
     */
    public function selectSpecific($columns, $tableName, $whereClause) : array
    {
        if (empty($tableName) || empty($columns) || empty($whereClause))
        {
            return null;
        }
        $columnsName = "";
        $updates = array();
        foreach ($columns as $value )
        {
            $updates[] = "$value";
        }
        $columnsName .= implode(', ', $updates);
        $check = array();

        foreach ($whereClause as $field => $value)
        {
            if (!empty($field) && !empty($value))
            {
                $check[] = "$field = '$value'";
            }
        }
        $check = implode(' AND ', $check);
        $sql = "SELECT ". $columnsName. " FROM ".$tableName." WHERE " . $check ." ";

        $result = $this->connec->prepare($sql);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Function to create an Update Request
     * @param string $tableName
     * @param array $infos
     * @param array $whereClause
     */
    public function update($tableName, $infos, $whereClause) : void
    {
        $sql = "UPDATE ". $tableName ." SET ";
        $updates = array();
        foreach( $infos as $field => $value )
        {
            $updates[] = "`$field` = '$value'";
        }
        $sql .= implode(', ', $updates);

        //Add the $where clauses as needed
        if (!empty($whereClause))
        {
            $clause = array();
            foreach ($whereClause as $field => $value)
            {
                $clause[] = "$field = '$value'";
            }
            $sql .= ' WHERE '. implode(' AND ', $clause);
        }
        $stmt = $this->connec->prepare($sql);
        $stmt->execute();
    }
}
?>
