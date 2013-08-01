<?php
$host="127.0.0.1";
$user="postgres";
$dbname="radio";

$conn=pg_connect("host=".$host." user=".$user." dbname=".$dbname." ");

if(!$conn){
	echo "error de conexion";
}
?>
