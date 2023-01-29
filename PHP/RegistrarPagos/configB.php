<?php
$Chost = "localhost";
$Cuser = "root";
$Cpass = "";
$Cdb = "gym";

$con = new mysqli($Chost,$Cuser,$Cpass,$Cdb );

if($con->connect_errno){
    die("Ha ocurrido un error");
}
?>