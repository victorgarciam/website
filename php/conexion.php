<?php
 $conexion=mysqli_connect("localhost", "root", "", "imtec");
 if(!$conexcion){
     echo 'Error al conectar a la base de datos';
 }
 else{
     echo 'Conectado a la base de datos';
 }
