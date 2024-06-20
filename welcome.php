<?php

//segunda Practica
$nombre= $_POST['name'];
$edad=$_POST['edad'];
//Se recupera los datos del input mediante el metodo POST
if($edad>=18)
    echo "Puedes votar";
else
    echo"No puedes votar";

?>