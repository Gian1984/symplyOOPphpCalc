<?php

   
    include "autoloader.inc.php";

    $oper = $_POST['operator'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $calc = new Calc($oper, (int)$num1, (int)$num2);

    try {
        echo $calc->calculator($oper, (int)$num1, (int)$num2);
    } catch (TypeError $e ) {
        echo"Error! :".$e->getMEssage();
    }

?>



