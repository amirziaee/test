<?php

require "Exporter.php";


if(!isset($_POST['export_table'])){

    echo "form not submited";
    die();

}
    $whitelist = ['users'];

if(in_array($_POST['export_table'],$whitelist))
{
$className = "{$_POST['export_type']}_Exporter";

$exporter = new $className($_POST['export_table']);

$exporter->export();
}else{

    echo "cannot export from {$_POST['export_table']}";

}

    /*
    $Ex = new exPorted();
    $Ex->import("{$_POST['export_table']}");
    $Ex->export();
    */