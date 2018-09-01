<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Duvidas</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" type="text/css" href="css/duvidas.css">

    <!-- provisorio até o funcionamento do wmp server -->
    <link rel="stylesheet" type="text/css" href="css/geral.css">
    <!--  -->

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
</head>
<body>
	<?php include_once("php/header.php"); ?>

	<div class="row">
		<div class="col-md-offset-2 col-md-10" id="duvidas">
			<h3>Duvidas Frequentes</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-md-offset-2 col-md-8 col-xs-offset-1 col-xs-10" id="back-duvidas">

			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingOne">
			      <h4 class="panel-title">
			        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			        	Como o Site Funciona ?
			        </a>
			      </h4>
			    </div>
			    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			      <div class="panel-body">
			        Através de um acordo com o sindicato dos Hotéis da Baixada Santista, o Baixa Hotéis, disponibiliza uma forma para nossos usuarios conhecerem os hotéis disponiveis e cadastrados no sindicato dos Hotéis da Baixada Santista, além de alguns de seus serviços.
			      </div>
			    </div>
			  </div>
			 </div>

			<div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingTwo">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			        	Quem Somos ?
			        </a>
			      </h4>
			    </div>
			    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			      <div class="panel-body">
			        Nós da Baixa-Hotéis, somos estudantes do curso de Analise e desenvolvimento de Sistemas, no Instituto Federeal de Educação Ciencia e Tecnologia de São Paulo (Campus Cubatão)...
			      </div>
			    </div>
			</div>

			<div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingThree">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
			        	Somos um site de reservas ?
			        </a>
			      </h4>
			    </div>
			    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			      <div class="panel-body">
			        Não, não somos um site de reservas, nossa base de dados, contem informações dos hotéis conveniados com o Sindicato dos Hotéis da Baixada Santista e seus serviços.
			      </div>
			    </div>
			</div>

		</div>
	 </div>

	<?php include_once("php/footer.php"); ?>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/index_script.js"></script>
</body>
</html>