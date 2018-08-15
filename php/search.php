<?php

include 'db_connection.php';

$keyword = $_POST['keyword'];

$view_search = "SELECT hoteis.id,nome,tipo,endereco,telefone,website,email,classificao,cidade FROM hoteis JOIN tipos ON id_tipo = tipos.id JOIN cidades ON id_cidade = cidades.id WHERE cidade = '$keyword' OR nome = '$keyword' OR tipo='$keyword';";

$data_reader = mysqli_query($connection,$view_search); // executando a query e retornando os regristos

if(mysqli_num_rows($data_reader) > 0): // checkando se tem algum registro
	$data = mysqli_fetch_array($data_reader);
	echo "<table class='table table-bordered'>
                    <tr>
                      <td>ID</td><td>Nome</td><td>Tipo</td>
                      <td>Cidade</td><td>Endereço</td><td>Telefone</td>
                      <td>Website</td><td>Email</td><td>Classificação</td>                      
                    </tr>
                    <tr>
                      <td>".$data['id']."</td><td>".$data['nome']."</td><td>".$data['tipo']."</td>
                      <td>".$data['cidade']."</td><td>".$data['endereco']."</td><td>".$data['telefone']."</td>
                      <td>".$data['website']."</td><td>".$data['email']."</td><td>".$data['classificao']."</td>
                    </tr>                  
                  </table>";		  
else:
	echo "Nada encontrado.";
endif;		

?> 
	 

