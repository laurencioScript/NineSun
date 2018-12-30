<?php
	require_once('class/Acomodidade.php');
	require_once('class/Hotel.php');
	require_once('class/ServicoDoHotel.php');
	require_once('exibe-mensagem.php');
	
	$registros = Acomodidade::listar();

	$acomo = array(); $indice="";

	for ($i=0; $i < 15 ; $i++) { 
		if($i<count($registros)):
			$indice = $registros[$i]['tipo'];
			$indice = str_replace(' ', '_', $indice);
			if(isset($_POST[$indice]))
				array_push($acomo, $_POST[$indice]);
			else
				array_push($acomo,"0");
		
		else:
			array_push($acomo,"0");
		endif;
	}

	$servicos = new ServicoDoHotel();
	$servicos->inicializa($acomo);
	$servicos->id = $_POST['id'];
	$servicos->atualizar();

	$hotel = new Hotel($_POST['id'],$_POST['nome'],$_POST['endereco'],$_POST['telefone'],$_POST['site'],$_POST['email'],$_POST['class'],$_POST['cidade'],$_POST['img_A'],$_POST['img_B'],$_POST['img_C'],$_POST['img_D'],$_POST['img_E']);


	$hotel->atualizar();


	write_msg('Hotel alterado com sucesso','success');
    header('Location:../view/formulario-hotel-lista.php');
    die();
?>