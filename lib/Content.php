<?php

class Content{
    // Init DB VAR
    private $db;

    /*
    * Constructor
    */

    public function __construct(){
        $this->db = new Database;
    }

    /*
     * GET CONTENT BY ID
     */

    public function getContent($id){
        $this->db->query("SELECT * FROM maincontent WHERE id = :content_id");
        $this->db->bind(':content_id', $id);

        //Assign Row
        $row = $this->db->single();

        return $row;
    }

        /*
    * GET ALL CONTENT
    */
    public function getAllContent(){
        $this->db->query("SELECT *
                        FROM maincontent
                        ORDER BY id ASC");
        
        // Assign resultset
        $results = $this->db->resultset();

        return $results;
    }

}