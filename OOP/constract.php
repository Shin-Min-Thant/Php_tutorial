<?php 
class Db{
    public const DB_HOST = "localhost";
    public const DB_NAME = "member";
    public const DB_USER = "root";
    public const DB_PASS = "";


    public function __construct(){
        // echo self::DB_NAME;
        
    }
}

$ind = new Db();


?>