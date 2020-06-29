<?php
$user_name = "root";
$password = "";
$host = "localhost:3306";
$db_name = "dbFilmes";

$con = mysqli_connect($host,$user_name,$password,$db_name);

$sql = "select * from tbFilmes where nome like '%Velozes e Furiosos%';";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){

	$row = mysqli_fetch_assoc($result);

	echo json_encode(array("Nome"=>$row["nome"],"Genero"=>$row["genero"],"Sinopse"=>$row["sinopse"]));
}
?>