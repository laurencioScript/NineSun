<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <title>Nine Sun</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/index_style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/header_footer.css">
    <link rel="stylesheet" type="text/css" href="css/geral.css">
</head>

<body>

	<div class="container-fluid">
		
		<!-- LOLO NINE SUN -->
		<div class="row" id="row_header">
			<div class="col-md-offset-4 col-md-4" id="div_logo">
				<img src="img/logo_04.png" class="img-responsive" alt="img logo">	
			</div>
		</div>
		
		<!-- Row Conteudo -->
		<div class="row">
			<div class="row">	
				<div class="col-md-offset-4 col-md-4">	
					<div class="input-group">
 						<input type="text" class="form-control" id="input_key" placeholder="Encontre o melhor hotel para você" aria-describedby="sizing-addon1" > 			
 						<span class="input-group-btn">
        				<button class="btn btn-warning" type="button" id="btn_search">
        				<span class="glyphicon glyphicon-search"></span>
        				</button>
        				</span>			
					</div>
				</div>
			</div><!-- Row Input -->
			
			<div class="row" >	
				<div class="col-md-offset-4 col-md-4">			
  					<div id="keywords"></div>
				</div>
			</div><!-- Row Barra de Sugestão -->
		</div> 
	</div><!-- Container -->
			
	<?php include_once("php/footer.php"); ?>
	      
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/cookie.js"></script>
	<script src="js/barra_de_pesquisa.js"></script>
	<script src="js/index.js"></script>
</body>
</html>