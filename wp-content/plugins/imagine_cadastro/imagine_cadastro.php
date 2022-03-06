<?php 
/*
Plugin name: Imagine Cadastro



*/


function imagine_cadastro (){

add_menu_page('Formulario', 'Formulario','manage_options','imagine_cadastro','imagine_cadastro_main','dashicons-database', 1);
}

add_action('admin_menu','imagine_cadastro');




function imagine_cadastro_main(){

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "xavier";

$conn = mysqli_connect($host,$usuario,$senha,$banco);

  $inserir = "SELECT * FROM dados";
$conectando = mysqli_query($conn,$inserir);

if(mysqli_insert_id($conn)){
  echo "Deu Certo";
}else{
  
   
}



echo "



<div class=''><div style=' 
		left:50%;
		top:50%;
		 margin-top:50px;
		 border-radius: 10px;
		 border-style: solid;
		 border-width: medium;
		margin-left: 11%;
		margin-right: 11%;
  height:80px;
  right: 100px; 
  border: groove;
  border-color: gray;
  background: #BFA41E;
  border: 1.4px solid #e0e0e0; '>
<table class='table table-dark'>

  <thead>

    <tr>
      <th scope='col'>Nome</th>
      <th scope='col'>Email</th>
      <th scope='col'>Comentario</th>
      <th scope='col'>ID</th>
    </tr>
  </thead>
<tbody>
    <tr>
  ";





while ($row = mysqli_fetch_assoc($conectando)) { 


  # code...

  

echo "<td>";



echo  $row["nome"];






echo "</td>";


echo "<td>";

    echo  $row["email"];

echo "</td>";



echo "<td>";

    echo  $row["comentario"];

echo "</td>";



echo "<td>";

    echo  $row["id"];

echo "</td></tr>";





  }




echo "
  
    </tbody>
    </table>
</div></div>";



  
   }

/*
  <tbody>
    <tr>
      <th scope='row'>1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope='row'>2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope='row'>3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div></div>	;

*/




 ?>

 <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl' crossorigin='anonymous'>
  <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js' integrity='sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi' crossorigin='anonymous'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js' integrity='sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG' crossorigin='anonymous'></script>