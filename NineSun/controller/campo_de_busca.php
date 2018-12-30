<?php  require_once '../controller/class/conexao.php'; ?>
<?php

$keyword = $_POST['keyword'];

$view_search = "SELECT nome FROM hoteis WHERE nome LIKE '$keyword%' UNION SELECT cidade FROM hoteis join cidades ON id_cidade =cidades.id  WHERE cidade Like '$keyword%' LIMIT 5 ;";

$conexao = Conexao::pegaConexao();
$resultado = $conexao->query($view_search);
$lista = $resultado->fetchAll();

foreach ($lista as $item) {

    $keyword_especial = str_replace(" ","",$item[0]);

    echo $item[0] . ";";     
}
  

?> 
	 

