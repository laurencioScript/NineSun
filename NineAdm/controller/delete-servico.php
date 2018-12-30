<?php 
	require_once('class/Acomodidade.php');
	require_once('class/ServicoDoHotel.php');
	require_once('exibe-mensagem.php');

	$servicos = new ServicoDoHotel();
	$lista_servicos = $servicos->listar();

	foreach ($lista_servicos as $row) {
		$indices = array_keys($row);$cont = 2;

		for ($i=1; $i <15 ; $i++) { 
			if($row[$i] == $_POST['id']){
				$servicos->atualizar_campo($indices[$cont],'0',$row[0]);

			}
			$cont +=2;
		}
		
		
	}

	
	$acomodidade = new Acomodidade($_POST['id'],"","");
	$acomodidade->deletar();



	write_msg('Serviço apagado com sucesso','success');
    header('Location:../view/formulario-servico-lista.php');
    die();
    
?>