<?php

class Product{
    // Init DB VAR
    private $db;

    /*
    * Constructor
    */

    public function __construct(){
        $this->db = new Database;
    }

    /*
    * GET ALL PRODUCTS
    */
    public function getAllProducts(){
        $this->db->query("SELECT *
                        FROM products
                        ORDER BY id ASC");
        
        // Assign resultset
        $results = $this->db->resultset();

        return $results;
    }

        /*
     * GET PRODUCT BY ID
     */

    public function getProduct($id){
        $this->db->query("SELECT * FROM products WHERE id = :product_id");
        $this->db->bind(':product_id', $id);

        //Assign Row
        $row = $this->db->single();

        return $row;
    }

}