<?php

class Service{
    // Init DB VAR
    private $db;

    /*
    * Constructor
    */

    public function __construct(){
        $this->db = new Database;
    }

    /*
    * GET ALL TOPICS
    */
    public function getAllServices(){
        $this->db->query("SELECT *
                        FROM services
                        ORDER BY id ASC");
        
        // Assign resultset
        $results = $this->db->resultset();

        return $results;
    }
    /*
     * GET SERVICE BY ID
     */

    public function getService($id){
        $this->db->query("SELECT * FROM services WHERE id = :service_id");
        $this->db->bind(':service_id', $id);

        //Assign Row
        $row = $this->db->single();

        return $row;
    }

}