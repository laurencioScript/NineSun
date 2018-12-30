<?php require_once('header.php') ?>
	<header class="row">
		<div id="header" class="col-xs-4 col-sm-4 col-md-2">
			<h1><a href="index.php">
				<img src="img/NovaLogo.png" class="img-responsive" alt="Logo da NineSun">
			</a></h1>
		</div>
	</header>
		<div class="clearfix"></div>
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8" id="titulo">
				<div id="back-fale">
					<h2 class="text-center">Fale Conosco</h2>
				</div>
				<div class="clearfix"></div>
				<div class="hidden-sm hidden-xs" id="texto">
					<p class="apresentacao">Envie seu feedback, sugestões e criticas.</p>
					<p class="apresentacao"> Teremos prazer em ouvi-lo.</p>
				</div>
			</div>
		</div>

	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8" id="formulario">
			<div class="form-group">
				<div class="col-xs-8 col-sm-8 col-md-10">
					<label class="label_campos">Nome</label>
		    	<input type="Nome" class="form-control" placeholder="Nome">
		    </div>

				<div class="col-xs-4 col-sm-4 col-md-2">
		    	<label class="label_campos">Idade</label>
		    	<input type="Idade" class="form-control" placeholder="Idade">
		    </div>

		    <div class="col-xs-7 col-sm-7 col-md-8">
		    	<label class="label_campos">E-Mail</label>
		    	<input type="E-Mail" class="form-control" placeholder="exemplo@exemplo.com">
		    </div>
				<div class="col-xs-5 col-sm-5 col-md-4">
		    	<label class="label_campos">Telefone</label>
		    	<input type="Telefone" class="form-control" placeholder="(  )_____-____">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		    	<label class="label_campos">Assunto</label>
		    	<input type="Assunto" class="form-control" placeholder="Ex. Sujetões ou Critica">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		    	<label class="label_campos">Mensagem</label>
		    	<textarea class="form-control" rows="10" placeholder="Sua Mensagem Aqui..."></textarea>
				</div>
    		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="botao">
    			<button class="btn btn-warning btn-block">Enviar</button>
    		</div>
			</div>
		</div>
	</div>

<?php require_once('footer.php') ?>
