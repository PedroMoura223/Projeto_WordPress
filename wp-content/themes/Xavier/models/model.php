<?php 

include_once("../controle/controle.php");

function gravar($nome,$email,$comentario){

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "xavier";

$conn = mysqli_connect($host,$usuario,$senha,$banco);

	$inserir = "INSERT INTO dados	 (nome,email,comentario) VALUES ('$nome','$email','$comentario')";
$conectando = mysqli_query($conn,$inserir);

if(mysqli_insert_id($conn)){
	echo "Deu Certo";
}else{
	
   
}
}

 ?>