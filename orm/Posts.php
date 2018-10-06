<?php

   include "dbconnections.php";
    class post extends Model {

        public static $table = "posts";

        public static $primary_key = 'id';
    }