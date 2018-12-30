<?php 
	require_once('class/Acomodidade.php');
	require_once('class/Hotel.php');
	require_once('class/ServicoDoHotel.php');
	require_once('exibe-mensagem.php');

	$hotel = new Hotel($_POST['id'],"","","","","","","","","","","","");
	$servico = new ServicoDoHotel;
	$servico->id = $_POST['id'];

	$hotel->deletar();
	$servico->deletar();
	
	write_msg('Hotel apagado com sucesso','success');
    header('Location:../view/formulario-hotel-lista.php');
    die();
?>