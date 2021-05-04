<?php
//Conexion
$DBusername = 'root';
$DBpassword = '';
$DBdatabase = "botonemergencia";
$DBhost = "localhost";
$DirPython = '/home';


$Connection = mysqli_connect("$DBhost", "$DBusername", "$DBpassword", "$DBdatabase") or die ("error connect DB-->".mysqli_error());
?>