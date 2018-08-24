<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baixada Hoteis</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="css/search.css" rel="stylesheet">
    <link href="css/style_grid.css" rel="stylesheet"> 
</head>
<!-- /input-group -->
<body>	
	
	<header class="row"> 
		<div class="col-md-2">
			<h1><a href="../index.php">
				<img src="img/Nine Sun logo.png" class="img-responsive" alt="Logo da NineSun">
			</a></h1>
		</div>
		
		<div class="col-md-7">			
  			<div class="input-group" id="input_search">
 				<input type="text" class="form-control" id="input_key" placeholder="" aria-describedby="sizing-addon1" > 
 				<span class="input-group-btn">
        			<button  class="btn btn-warning" type="button" id="btn_search">
        				<span class="glyphicon glyphicon-search"></span>
        			</button>
      			</span>			
			</div>
		</div>
	</header>

	<div class="col-md-offset-2 col-md-7">			
  		<div id="keywords"></div>
	</div>	

		
	<article class="row">
		<div class="col-md-3" id="coluna_filter">
			<?php include_once'/coluna_de_filtros.php'; ?>	
		</div>
		<div class="col-md-8 teste" id="coluna_grid">	
				
				<div class="col-md-7 item_Grid " >
					<div class="col-md-5 teste">
						<img src="img/no_img.png" class="img-responsive">		
					</div>
					<div class="col-md-6 teste">
						<h3><p class="label_NomeHotel">$data[0] </p></h3>
						<p class="labels_Grid">Endereço: $data[1]</p>
						<p class="labels_Grid">Telefone:$data[2]</p>
						<p class="labels_Grid">Website:$data[3]</p>						
					</div>	
				</div>;
		</div> 
	</article>

	<footer class="row"> 
		<div class="col-md-4 col-xs-4 col-sm-4">
			<button type="button" class="btn btn-link colo_btn" id="btn_fale_conosco">Fale Conosco</button>
			<button type="button" class="btn btn-link" id="btn_duvidas">Duvidas</button>	
		</div>	

		<div id="bug" class="col-md-offset-5 col-md-3 col-xs-offset-3 col-xs-3 col-sm-4 ">
			<button type="button" class="btn btn-link" id="btn_contato">Contato</button>
			<button type="button" class="btn btn-link" id="btn_sobre">Sobre</button>	
		</div>	
	</footer>

	<script src="js/jquery-3.3.1.min"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/cookie.js"></script>
	<script src="js/script_footer.js"></script>
	<script src="js/script_buscador.js"></script>
	<script src="js/script_search.js"></script>
</body>
</html>