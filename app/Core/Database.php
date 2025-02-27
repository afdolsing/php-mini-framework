<?php

class Database{
    private static $_instance = null;
    private $mysqli;
    public function __construct()
    {
        // buat database dengan nama cart
        $this->mysqli = new mysqli('localhost','root','','cart') or die('error koneksi');
    }
    public static function getInstance(){
        if(!isset(self::$_instance)){
            self::$_instance = new Database();
        }
        return self::$_instance;
    }

    public function index($table){
        $reply = [];
        $query = "SELECT * FROM $table";
        $result = $this->mysqli->query($query);
        
        while($row = $result->fetch_assoc()){
            $reply[] = $row;
        }

        return $reply;
    }

    // next buat fungsi2 CRUD 
}