<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baixada Hoteis</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/search_style.css" rel="stylesheet">
</head>
<!-- /input-group -->
<body>
	<div class="container-fluid">
		
		<div class="row" id="row_header">
			<div class="col-md-3" id="div_img">
				<img src="img/logo.png" alt="..." class="img-responsive" id="img_logo" class="">		
			</div>

			<div class="col-md-7" id="div_search">			
  				<div class="input-group" id="input_search">
 					<input type="text" class="form-control" id="input_key" placeholder="Encontre o melhor hotel para você, meu consagrado" aria-describedby="sizing-addon1" > 
 					<span class="input-group-btn">
        				<button  class="btn btn-default" type="button" id="btn_search">
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

		<div class="row" id="rodape">
	        <div class="col-md-3">
		         <ul id="contato" style="list-style-type:none">
  					<li>Contato</li>
  					<li>Email: baixahoteis@gmail.com</li>
  					<li>Telefone: (xx) xxxx-xxxx</li>
				</ul> 		        
	        </div><!-- fechamento COL-MD-OFFSET-1 !-->
	            
	        <div class="col-md-offset-2 col-md-3">
	            <ul id="contato" style="list-style-type:none">
  					<li><a href="">Fale Conosco</a></li>
  					<li><a href="">Tire Duvidas</a></li>
				</ul>
	        </div><!-- fechamento COL-MD-OFFSET-1 !-->

	        <div class="col-md-offset-1 col-md-2">       
	            <p style="color: #d9d9d9;">
	                Site Desenvolvido por Lucas Marques, Luis Carlos, Rodrigo Santos e Gabriel Laurencio, para o exercicio e efetivação do projeto de iniciação Cientifica.
	            </p>
	        </div><!-- fechamento COL-MD-OFFSET-1 !-->
	    </div>
	    
	    <div class="row" id="frodape">
	    	<div class="col-md-offset-4 col-md-4">
	    		<br>
	    		<br>
	    		<center>
		    		<strong>
		    			<p>Logo Pequeno</p>
		    		</strong>
		    		<small>
		    			<p>Direitos autorais 2018 (marca) | Todos os direitos reservados. </p>
		    		</small>
	    		</center>
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