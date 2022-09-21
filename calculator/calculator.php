<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$action = $_GET['action'];
$result = 0;
if($action == '+'){
    $result = $num1 + $num2;
} else if($action == '-'){
    $result = $num1 - $num2;
} else {
    echo('no action selected');
}
echo("<div><h1>$result</h1></div>");

?>