<?php

class User{
    // Init DB VAR
    private $db;
    public $username;
    public $password;
    /*
    * Constructor
    */

    public function __construct(){
        $this->db = new Database;
    }

    /*
     * GET EVERYTHING
     */
    public function getAllUserData(){
        $this->db->query("SELECT users.*, roles.role
                        FROM users INNER JOIN roles ON users.role = roles.id");
        
        // Assign resultset
        $results = $this->db->resultSet();

        return $results;
    }
    /*
     * GET EVERYTHING by ID
     */
    public function getUser($id){
        $this->db->query("SELECT * FROM users WHERE id = :id");
        $this->db->bind(':id', $id);

        //Assign Row
        $row = $this->db->single();

        return $row;
    }
    /*
     * GET TOTAL # of USERS
     */
    public function getTotalUsers(){
        $this->db->query('SELECT * FROM users');
        $rows = $this->db->resultset();
        return $this->db->rowCount();
    }
    /*
     * GET ONLY ROLES
     */
    public function getAvailableRoles(){
        $this->db->query("SELECT * FROM roles;"); 
        
        // Assign resultset
        $results = $this->db->resultset();
        return $results;
    }
    /*
     * GET ROLE BY ID
     */
    public function getRole($id){
        $this->db->query("SELECT * FROM roles WHERE id = :id");
        $this->db->bind(':id', $id);

        //Assign Row
        $row = $this->db->single();

        return $row;
    }
    /*
     * GET PASSWORD FOR CURRENT USER
     */
    public function getPassword(){
        $this->db->query("SELECT password
                        FROM users
                        WHERE id = '".$_SESSION["user_id"]."'");
        
        // Assign resultset
        $results = $this->db->resultset();
        return $results;
    }
}