<?php

class Database{
    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $db_name = DB_NAME;

    private $dbh; //Handler
    private $error; //errors
    private $stmt; //statement

    public function __construct(){
        //Set DSN
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->db_name;
        
        // Options
        $options = array(
            PDO::ATTR_PERSISTENT => true,  
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        // New PDO Instance
        try{
            $this->dbh = new PDO ($dsn, $this->user, $this->pass, $options);
        } //Catch Errs
        catch (PDOException $e) {
            $this->error=$e->getMessage();
        }
    }

    /*
     * Prepare
     */

    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }

    /*
    * BIND
    */
    public function bind($param, $value, $type = null){
        if(is_null($type)){
            switch (true) {
                case is_int ($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool ($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue ($param, $value, $type);
    }
    
    /* 
     * Execute
     */

    public function execute(){
        return $this->stmt->execute();
    }

    /* 
     * Results
     */

    public function resultset(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    
    public function rowCount(){
        return $this->stmt->rowCount();
    }
}