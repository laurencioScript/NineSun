<?php
	require_once('class/Acomodidade.php');
	require_once('exibe-mensagem.php');
	
	$acomodidade = new Acomodidade($_POST['id'],$_POST['nome'],$_POST['imagem']);
	$acomodidade->atualizar();
	
	write_msg('Serviço alterado com sucesso','success');
    header('Location:../view/formulario-servico-lista.php');
    die();
?>