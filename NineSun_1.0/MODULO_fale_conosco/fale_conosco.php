<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fale Conosco</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/geral.css">
    <link rel="stylesheet" type="text/css" href="../css/header_footer.css">
    <link rel="stylesheet" type="text/css" href="css/fale_conosco.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" href="../../css/search.css">
    <link rel="stylesheet" type="text/css" href="../../css/index.css">

</head>
<body>
<!-- Resolveu nao funcionar -->
<!-- 	<?php include_once("../php/header.php"); ?> -->

	<header class="row"> 				
		<div id="header" class="col-md-2 col-xs-3">
			<h1><a href="index.php">
				<img src="../../img/NovaLogo.png" class="img-responsive" alt="Logo da NineSun">
			</a></h1>
		</div>
	</header>
 
	<div class="row">
		<div class="col-md-offset-3 col-md-6">

			<div id="back-fale">
				<h2>Fale Conosco</h2>
			</div>

			<div class="hidden-sm hidden-xs" id="texto">
				<p class="apresentacao">Envie seu feedback, sugestões e criticas.</p>
				<p class="apresentacao"> Teremos prazer em ouvi-lo.</p>
			</div>	
		</div>

	</div>

	<div class="row">
		<div class="col-md-offset-3 col-md-6">

			<div class="form-group">
				<div class="row">
					<div class="col-md-12">
						<label class="label_campos">Nome</label>
				    	<input type="Nome" class="form-control" placeholder="Digite Seu Nome ...">
				    </div>
		    	</div>

		    	<div class="row">
					<div class="col-md-2">
				    	<label class="label_campos">Idade</label>
				    	<input type="Idade" class="form-control" placeholder="Idade">
				    </div>

				    <div class="col-md-10">
				    	<label class="label_campos">E-Mail</label>
				    	<input type="E-Mail" class="form-control" placeholder="Digite Seu E-Mail ...">
				    </div>
				</div>

		    	<label class="label_campos">Telefone</label>
		    	<input type="Telefone" class="form-control" placeholder="Digite Seu Telefone ...">

		    	<label class="label_campos">Assunto</label>
		    	<input type="Assunto" class="form-control" placeholder="Digite o Assunto ...">

		    	<label class="label_campos">Mensagem:</label>
		    	<textarea class="form-control" rows="15" placeholder="Sua Mensagem Aqui."></textarea>

		    	<div id="botao">
		    		<button class="btn btn-warning">Enviar</button>
		    	</div>
			</div>
		</div>
	</div>
<!-- Resolveu Não funcionar -->
	<!-- <?php include_once("../php/footer.php"); ?> -->
	<footer class="row">
        <div class="col-md-12" id="footer1">
            <div class="col-md-2 col-xs-6">
              <button type="button" class="btn btn-link colo_btn" id="btn_fale_conosco">Fale Conosco</button>
              <button type="button" class="btn btn-link" id="btn_duvidas">Duvidas</button>  
            </div>  
            <div class="col-md-2 col-xs-5" id="footer_right">
              <button type="button" class="btn btn-link" id="btn_contato">Contato</button>
              <button type="button" class="btn btn-link" id="btn_sobre">Sobre</button>  
            </div>
        </div>          
    </footer>
	
	<script src="../js/bootstrap.min.js"></script>
	
</body>
</html>