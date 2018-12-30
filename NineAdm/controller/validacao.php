<?php require_once('exibe-mensagem.php')?>
<?php
	
	function valida_funcionalidade(){
		if(!isset($_SESSION['acesso'])):
        	write_msg('Não possui acesso a essa funcionalidade.','danger');
        	header("Location: index.php");
    	endif; 
	}

	function valida_login($nome){
		if(!$nome){
			write_msg('Usuario ou Senha invalido.','danger');
		}
		else{
			session_start();
		    $_SESSION['acesso'] = 'true';
		    $_SESSION['user'] = $name;
		}
		header("Location: ../view/index.php"); 
	}

?>