<?php 
	require_once('class/Acomodidade.php');
    require_once('exibe-mensagem.php');

    $acomodidade = new Acomodidade("",$_POST['nome'],$_POST['imagem']);
    $acomodidade->inserir();
    write_msg('Servico cadastrado com sucesso','success');
    header('Location:../view/formulario-servico.php');
    die();
?>