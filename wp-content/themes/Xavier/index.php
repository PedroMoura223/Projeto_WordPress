<?php get_header();

error_reporting(1);
$aux = $_GET['validado'];

if (isset($aux)) {
  
  echo "
  <div class='center-block' style='  position: fixed;
  right: 0;
  top: 93%;
  width: 30%;
  height: 70%;
  margin-top: -2.5em; 
 justify-content: center; ' ><div class='alert alert-success' style='width:95%;' role='alert'>
 Cadastrado com sucesso!
 </div>
 </div>";
}

 ?>

 <style type="text/css">
   
   #box2{
      left:50%;
    top:50%;
     border-width: medium;
    margin-left: 11%;
    margin-right: 11%;
  height:80px;
  right: 100px; 
  border: groove;
  border-color: gray;
  background: #BFA41E;
  border: 1.4px solid #e0e0e0;
   }
   #contato{
    color: white;  margin-left: 3%;
     font-family: Arial; font-size: 34px;
   }

   #box3{
     left:50%;
    top:50%;
     border-width: medium;
    margin-left: 11%;
    margin-right: 11%;
  height:690px;
  right: 100px; 
  border: groove;
  border-color: gray;
  background: white;
  border: 1.4px solid #e0e0e0;
   }
   #p2{
    margin-left: 3%; font-size: 15px;
 margin-left: 3%;  font-size: 15px;
 margin-left: 3%; font-size: 15px;
   }
   #h6{

      margin-left: 2%
   }
   #input{
     border-width: medium; border: 1.4px solid #e0e0e0;  margin-left: 2%; width: 60%; background: #F8F8F8; border-radius: 4px;
   }
   #botao{
     margin-left: 2%; border-color:#BFA41E;
background:linear-gradient(to bottom, #BFA41E 5%, #BFA41E 100%);

color:white;
   }

 </style>

  <div id="box2">

  <br>

  <h1 id="contato"  >Contato</h1>

  </div>

  <div id="box3" >
    <br><br>
  <p id="p2"> <strong>• Endereço:</strong> Av. Dom Luís, 609 / salas 1005 a 1007 -   Meireles - CEP: 60.160-230 - Fortaleza-CE </p>
  <p id="p2"><strong> • Fone:</strong> (85) 3273-2369 </p>
  <p id="p2"><strong> • Email:</strong> contato@xaviertorres.com.br </p><br>

 
 <form method='post' action='http://localhost/xavier/wp-content/themes/Xavier/controle/controle.php' style="margin-left: 1%; " >

<h6  id="h6" >Nome e Sobrenome (obrigatório)</h6>

  <input id="input" type="text" name="nome"  ><br><br>

<h6 id="h6" >Email (obrigatório)</h6>

  <input id="input" type="text" name="email" ><br><br>

<h6  id="h6">Mensagem (obrigatório)</h6>
  

  <textarea id="input" id="msg" name="comentario" style="height: 140px" ></textarea>  
    <br><br>
 


 <input id="botao" type="submit" action="controle/controle.php" name=""  >
   
</form>

  </div>



<?php get_footer(); ?>