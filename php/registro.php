<?php
  //conectamos el servidor
  $conexion="@mysql_connect('localhost', 'root', 'imtec')";
  //verificamos la coneccion
  if(!$conexion){
                 echo"No se pudo conectar el servidor";
                } else{
                        $base=mysqli_select_db($link, $imtec);
                        if(!$base){
                                    echo"No se encontro la base de datos";
                                  }
                      }  
  //recuperamos variables

  $Nombre=$_POST['N_alumno'];  $Apaterno=$_POST['APaterno'];  $Amaterno=$_POST['AMaterno'];
  $Curp=$_POST['Curp']; $Seccion=$_POST['Seccion'];  $Grado=$_POST['Grado']; $Ciclo=$_POST['Ciclo'];
  $Lnacimiento=$_POST['Lnacimiento']; $Fnacimiento=$_POST['Fnacimiento'];  $Nacionalidad=$_POST['Nacionalidad'];
  $Colegio=$_POST['Colegio']; $Papa=$_POST['Papa'];  $Cel=$_POST['Cel']; $Profesion=$_POST['Profesion'];
  $Correo=$_POST['Correo'];
  $Mama=$_POST['Mama']; $Profesion1=$_POST['Profesion1']; $Cel1=$_POST['Cel1'];   
  $Correo1=$_POST['Correo1']; $Direccion=$_POST['Direccion'];  $Colonia=$_POST['Colonia'];  $Localidad=$_POST['Localidad'];
  $Estado=$_POST['Estado'];  $Codigo=$_POST['Codigo']; $Tel_casa=$_POST['Tel_casa']; $Fregistro=$_POST['Fregistro']; 
  

//sentencia sql

$sql="INSERT INTO general VALUES(`$id_general`, `$Nombre`, `$Apaterno`, `$Amaterno`, `$Curp`, `$Seccion`,
                              `$Grado`, `$Ciclo`, `$Lnacimiento`, `$Fnacimiento`, `$Nacionalidad`, `$Colegio`,
                              `$Papa`, `$Cel`, `$Profesion`,  `$Correo`, `$Mama`, `$Profesion1`,
                              `$Cel1`, `$Correo1`, `$Direccion`, `$Colonia`, `$Localidad`, 
                              `$Estado`, `$Codigo`, `$Tel_casa`, `$Fregistro`)" ;


 //ejecutamos la sentencia sql
 $ejecutar=mysql_query($sql);
 //verificamos la ejecucion
 if(!ejecutar){
   echo"Hubo algun error";
 }else{
   echo"Datos guardados correctamente"; 
 }
?>
