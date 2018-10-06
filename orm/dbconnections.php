<?php
error_reporting(E_ALL);
ini_set('display_errors',1);


    class DBConnection
    {
        private $conn;
        private  static $instance = null;
        private function __construct()
        {

            $config = (object)$this->getConfig();


            $this-> conn = new mysqli($config->host,$config->user,$config->password,$config->name);
        }

        public function hasError(){
            if($this-> conn ->errno){
                return $this-> conn ->error;
            }
            else{
                return false;

            }
        }    public function hasConnError(){
            if($this-> conn ->connect_errno){
                return $this-> conn ->connect_errno;
            }
            else{
                return false;

            }
        }



           public function query(String $sql):stdClass  {
                if($result = $this-> conn ->query($sql)){

                     if(is_bool($result)){
                         return (object)$result;
                     }
              $records=$result->fetch_all(MYSQLI_ASSOC);
                    foreach ($records as $key=>$val){
                        $records[$key]=(object)$val;
                    }
                    return (object)$records;
                }
                return new stdClass();

            }

        private function getConfig() : array {
            $config= include "conf.php";
            return $config;
        }


        public static function getInstance(){
            if(is_null(self::$instance)){
                $instance = self::$instance = new  DBConnection();
            }
            else{
                $instance = self::$instance;
            }
            return $instance;

        }
        
    }

    $db = DBConnection::getInstance();

    $users = $db->query("select * from users");

/*if(!$db->hasError()){
    foreach ($users as $user){

        echo $user-> fullname . "<br/>";
    }
}else{

    echo "has a error";
}

*/