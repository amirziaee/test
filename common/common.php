<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

function myPrint($data,$printType = null,$style = 'info'){
    switch ($style){
        case 'warning':
            $bgColor = '#f1e2a8';
            break;
        case 'error':
            $bgColor = '#e9b1b1';
            break;
        case 'success':
            $bgColor = '#c6efcb';
            break;
        default:
            $bgColor = '#eee';
    }

    if(is_array($data)){
        printArr($data);
    }else{
        if($printType == 'inline'){
            echo "<div style='background-color: $bgColor;padding: 5px;border-radius: 5px;margin: 5px ;display: inline-block;'>$data</div>";
        }else{
            echo "<div style='background-color: $bgColor; padding: 5px ; border-radius: 5px; margin: 5px;'>$data</div>";
        }
    }
}

$arr1 = [1,2,3,4,5];
$arr1 = [1,[11,344,566],3,[1,2,3,4,[1,2,3,5,[1,["salam","Halet","Khoobe?"]]]],[1,2,43,65]];
// print order : 1,11,344,566,3,1,2,3

function printArr($arr)
{
    foreach ($arr as $k=>$v){
        echo "<div style='background-color: #eee;padding: 5px;border-radius: 5px;margin: 5px ;display: inline-block;'>$k:$v</div>";
    }
}

function getDatabaseConfig(){
    return include "../05/data.php";
}

