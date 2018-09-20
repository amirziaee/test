<?php
/*$age = rand(1,99);
echo "$age <br>";
switch ($age){
    case ($age<18):
        echo "under 18";
        break;
    case ($age>18 && $age<50):
        echo "+18";
        break;
    case ($age>50):
        echo "above 50";
        break;
        default:
}
*/
echo "-------------------------------------------------------------------------------------------------------<br />";

$a = 1;
echo "$a <br />";
function value(&$data){
    $data++;
}
value($a);
echo $a;
echo "-------------------------------------------------------------------------------------------------------<br />";
function foo() {
    echo "In foo()<br />\n";
}

function bar($arg = '')
{
    echo "In bar(); argument was '$arg'.<br />\n";
}

// This is a wrapper function around echo
function echoit($string)
{
    echo $string;
}

$func = 'foo';
$func();        // This calls foo()

$func = 'bar';
$func('test');  // This calls bar()

$func = 'echoit';
$func('test');  // This calls echoit()


