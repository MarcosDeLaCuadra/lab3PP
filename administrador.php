<?php

$queHago = $_POST['queHago'];
//var_dump( $_POST['dato']);


    switch ($queHago) {
        case 'logear':
           
            echo  $_POST['password'] . $_POST['usuario'];
            # code...
            break;
        
        case 'mostrarJson':
            {
                $obj= json_decode(json_encode($_POST['dato']));
              //  var_dump($obj);
            echo "usuario: ". $obj->usser . "-- Pass: " . $obj->pass;
            # code...
            break;

            }
           
    }

?>