<?php

class Support{
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
    public function getAllOptions(){
        $this->db->query("SELECT *
                        FROM support
                        ORDER BY id ASC");
        
        // Assign resultset
        $results = $this->db->resultset();

        return $results;
    }
    /*
     * GET LINK BY ID
     */

    public function getLink($id){
        $this->db->query("SELECT * FROM support WHERE id = :id");
        $this->db->bind(':id', $id);

        //Assign Row
        $row = $this->db->single();

        return $row;
    }


}