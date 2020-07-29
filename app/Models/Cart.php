<?php

class Cart{
    private $_db;
    public function __construct()
    {
        $this->_db = Database::getInstance();
    }
    public function index(){
        // akses index database.php dan nama tabel yang di database
        return $this->_db->index('tbl_product');
    }
}