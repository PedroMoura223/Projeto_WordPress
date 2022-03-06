<?php 

include_once("../models/model.php");


 class dados{
 	public $nome;

 	public $email;

 	public $comentario;

 	public function __construct($nome,$email,$comentario){
 		$this->nome = $nome;
 
 		$this->email = $email;
 	
 		$this->comentario = $comentario;
 	}
   public function getNome(){
   	return $this->nome;
   }

     public function getEmail(){
   	return $this->email;
   }
 
       public function getComentario(){
   	return $this->comentario;
   }


}

 	 $nome = $_POST['nome'];
 
$email = $_POST['email'];

$comentario = $_POST['comentario'];

echo $nome . $email . $comentario;

$pessoa = new dados($nome,$email,$comentario);

gravar($pessoa->getNome(),$pessoa->getEmail(),$pessoa->getComentario());

//  $aux++;


header("Location: http://localhost/xavier/index.php?validado=1");


//ReceberDados();
//ravar($pessoa->nome,);




 ?>