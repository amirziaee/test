<?php




abstract class Exp{
    protected $data;
    protected static $extension;
    protected $table = null;
    public function __construct($tableName)
    {
        $this->import($tableName);
    }


    public  function import($tableName) {
        $ClassName = ucfirst(substr($tableName,0,strlen($tableName) - 1));
        //import file User
         $classpath = "../orm/$ClassName.php";

         if(file_exists($classpath) and is_readable($classpath)){

             include $classpath;

             $model = new $ClassName;

             $this->data = $model->all();

             echo 'import file ' . $ClassName . '</br>' ;

             $this->table = $tableName;

         }
         else{

              echo  'invalid file !';

         }



    }
    public abstract function export($filePath = null);


}

class TEXT_Exporter extends Exp{

protected static $extension = 'txt';

    public function export($filePath = null)
    {
        $str = "";
        foreach ($this->data as $rec){

            $str .=implode(',',(array)$rec) . PHP_EOL;
        }
//        echo $str;

        if(is_null($filePath)){

            //static bindgig

            $filePath = "$this->table-".rand(10,40).".". static::$extension;
        }

        file_put_contents($filePath,$str);


        echo 'exported to ' . static::$extension ;
    }
}

    class CSV_Exporter extends Exp{

        protected static $extension = 'csv';

        public function export($filePath = null)
        {
            $str = "";
            foreach ($this->data as $rec){

                $str .=implode(',',(array)$rec) . PHP_EOL;
            }
//        echo $str;

            if(is_null($filePath)){

                //static bindgig

                $filePath = "$this->table-".rand(10,40).".". static::$extension;
            }

            file_put_contents($filePath,$str);


            echo 'exported to ' . static::$extension ;
        }

    }


