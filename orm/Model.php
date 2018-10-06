<?php

   include "dbconnections.php";
    class Model{

        public static $table = "users";

        public static $primary_key = 'id';

        protected  $conn ;

        public function __construct()
        {
            $this->conn = DBConnection::getInstance();

        }

        public  function all(){

           return  $this->conn->query("SELECT * FROM " . self::$table);


        }
        public   function remove($id){

          return $this->conn->query("DELETE FROM " . self::$table . " WHERE " .  self::$primary_key. "=$id");


        }
    }


$model = new Model();
$model->all();
