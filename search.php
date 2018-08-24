<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baixada Hoteis</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/search_style.css" rel="stylesheet">
    <link href="css/style_grid.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/geral.css">
</head>
<!-- /input-group -->
<body>
	<div class="container-fluid" id="container-fluido">
		
		<div class="row" id="cabeca"> <!-- row_header -->
			<!-- <div class="row" id="cabeca"> -->
				<div class="col-md-2 col-xs-4 col-sm-2">
					<a href="index.php">
					<img src="img/Nine Sun logo.png" class="img-responsive" alt="img logo">
					</a>
				</div>
			<!-- </div> -->

			<div class="col-md-7" id="div_search">			
  				<div class="input-group" id="input_search">
 					<input type="text" class="form-control" id="input_key" placeholder="Encontre o melhor hotel para você, meu consagrado" aria-describedby="sizing-addon1" > 
 					<span class="input-group-btn">
        				<button  class="btn btn-warning" type="button" id="btn_search">
        					<span class="glyphicon glyphicon-search"></span>
        				</button>
      				</span>			
				</div>	
			</div>
		</div>

		<div class="row" >	
			<div class="col-md-offset-3 col-md-6">			
  				<div id="keywords"></div>
			</div>
		</div>
		

		<div class="row" id="row_content">
			
			<div class="col-md-3" id="coluna_filter">
				<?php
				include_once'/php_paginas/column_filter.php';
				?>	
			</div>

			<!--Grid-->
			<div class="col-md-10" id="coluna_grid">	
				
				
			</div> 
		</div>

		<div class="row">
			<div id="rodape"> 
			<div class="col-md-4 col-xs-4 col-sm-4">
				<button type="button" class="btn btn-link colo_btn" id="btn_fale_conosco">Fale Conosco</button>
				<button type="button" class="btn btn-link" id="btn_duvidas">Duvidas</button>	
			</div>	

			<div class="col-md-offset-5 col-md-3 col-xs-offset-3 col-xs-3 col-sm-4">
				<button type="button" class="btn btn-link" id="btn_contato">Contato</button>
				<button type="button" class="btn btn-link" id="btn_sobre">Sobre</button>	
			</div>	
			</div>	
		</div>

	</div>
	

<script src="js/jquery-3.3.1.min"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/cookie.js"></script>
<script src="js/index_script.js"></script>
<script type="text/javascript" src="js/search_script.js"></script>
</body>
</html>