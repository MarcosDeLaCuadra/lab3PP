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

        //	$datos=file_get_contents("usuario.json");
			//$encodato=json_encode(json_decode($datos));
		//	echo $encodato;

                $obj= json_decode(json_encode($_POST['dato']));
              //  var_dump($obj);
            echo "usuario: ". $obj->usser . "-- Pass: " . $obj->pass;
            # code...
            break;

            }
           
    }

?>