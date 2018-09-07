<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baixada Hoteis</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/search.css">
</head>

<body>	
	<div class="container-fluid">
		
		<header class="row"> 				
			<div id="header" class="col-md-2 col-xs-3">
				<h1><a href="index.php">
					<img src="img/Nine Sun logo.png" class="img-responsive" alt="Logo da NineSun">
				</a></h1>
			</div><!-- Logo -->
			<div id="div_input"	>
  				<div  class="col-md-6 col-xs-7">
          			<form action="/search.php" autocomplete="off" method="GET" class="form-horizontal">
            			<div class="form-group">
            	  			<input type="search" class="form-control" id="input" placeholder="Encontre seu hotel ideal">
            			</div>    
          			</form>
        		</div>
          		<button class="btn btn-warning" type="submit" id="btn_search">
            	   	<span class="glyphicon glyphicon-search"></span>
          		</button> 			
			</div>
		</header>
		
		<article class="">
            <div class="row" id="coluna_filter">			
				<div class="menu"> <!-- Bloco Menu -->
        			<div class="row"> <!-- BTN Fecha Menu -->
						<div class="icon-close"><div class="col-md-offset-10 ">
							<button id="btn_fechar"><span class="glyphicon glyphicon-cog"></span></button>	
						</div></div>
        			</div>
        			<ul id="menu"> <!-- Menu de opções -->
            			<li>
                			 <button type="button" class="btn btn-link colo_btn" id="btn_cidade">Cidades</button>
            			</li>
            			<li id="li_cidades"></li><!-- sub-menu -->
            			<li>
                			 <button type="button" class="btn btn-link colo_btn" id="btn_classificacao">Classificação</button>
            			</li>
            			<li id="li_classificacao"></li><!-- sub-menu -->
            			<li>
                			 <button type="button" class="btn btn-link colo_btn" id="btn_acomodidade">Acomidades</button>
           				</li>
           				<li id="li_acomidades"></li><!-- sub-menu -->
        			</ul>
    			</div> <!-- Bloco Menu -->
    			<div class="col-md-1"> <!-- BTN Abre Menu -->
                    <div id="btn_filter" class="icon-menu">
                        <button id="btn_menu"><span class="glyphicon glyphicon-cog"></span></button>
                    </div>    
                </div><!-- BTN Abre Menu -->
    			<div id="barra_btn_filter" class="col-md-offset-2 col-md-6"">       
                </div><!-- Barra de BTNS -->
			</div><!-- COLUNA DE FILTROS --> 
            
            <div class="" id="coluna_grid" >
                    <!--  
                    
                <div class="col-md-offset-2 col-md-8" id="grid">            
                    <div class="col-md-5" id="img">
                    <img src="img/no_img.png" >
                </div>
                <div class="col-md-6" id="informacoes" >
                    <div class="row" id="title" ><h3><i>$data[0]</i></h3></div>
                    <div class="row uma_info"><b>Endereço:</b> $data[1]</div>
                    <div class="row uma_info"> <b>Telefone:</b> $data[2] </div>
                    <div class="row uma_info"><b>Site: </b><a>$data[3]</a></div>
                    <div class="row uma_info" id="last_row"><b>Classficação: $estrelas</b> 5 estrelas</div>
                </div>
            </div>
            --> 
                </div>   
            			
			
			

		</article>

	<footer class="row">         
            <div class="col-md-2 col-xs-6">
              <button type="button" class="btn btn-link colo_btn" id="btn_fale_conosco">Fale Conosco</button>
              <button type="button" class="btn btn-link" id="btn_duvidas">Duvidas</button>  
            </div>  
            <div class="col-md-2 col-xs-5" id="footer_right">
              <button type="button" class="btn btn-link" id="btn_contato">Contato</button>
              <button type="button" class="btn btn-link" id="btn_sobre">Sobre</button>  
            </div>
    </footer>
	
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/buscador.js"></script>
    <script src="js/search.js"></script>
</body>
</html>