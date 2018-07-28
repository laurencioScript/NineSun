<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baixada Hoteis</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/home_style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet" >
</head>
<body>
	<div class="row"><!--ROW Carousel-->
		<div class="col-md-offset-1 col-md-10">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  	<!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			<!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active" id="limiteImg">
			      <img src="img/fundo_subida_da_serra.jpg">
			      <div class="carousel-caption">
			      </div>
			    </div>
			    <div class="item" id="limiteImg">
			      <img src="img/fundo_caminho_do_mar.jpg">
			      <div class="carousel-caption">
			      </div>
			    </div>
			    <div class="item" id="limiteImg">
			      <img src="img/fundo_sao_vicente.jpg">
			      <div class="carousel-caption">
			      </div>
			    </div>
			  </div>

			<!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div><!--Carousel-->
		</div><!--Coluna Carousel-->
	</div><!--Row Carousel-->

	<div class="row"><!--ROW area de pesquisa-->
		<div class="col-md-offset-2 col-md-8">
			<div class="row" style="margin:30px 0px 15px 0px;"><!--Barra de Pesquisa-->
				<div class="input-group input-group-lg">
				  <input type="text" class="form-control" placeholder="Pesquise Seu Hotel Favorito ou Sua Cidade Favorita" aria-describedby="sizing-addon1" size="100px">
				  <span class="input-group-addon glyphicon glyphicon-search" id="sizing-addon1"></span>
				</div>
			</div><!--Row Bara de pequisa-->
			<div class="row" style="margin:15px 0px 15px 0px;"><!--ROW botões filtro-->
				<div class="col-md-4" id="txt-info"><!--Botão popover Classificação-->
					<center>
						<a href="#" class="btn btn-default" id="popover-class">Classificação</a><!--Começo do botão-->
						<div id="divContentHTML" style="display:none">
							<div class="row">
								<div class="col-md-12">
							        <form method="post" id="form_popover">
							          	<div class="form-group form-inline kc"><!--Rounded checkBox 5 estrelas-->
								          	<div class="form-check">
											  <input class="form-check-input" type="radio" name="exampleRadios" id="estrela-5" value="false" checked>
											  <label class="form-check-label" for="exampleRadios1">
											    5 Estrelas
											    	<span class="glyphicon glyphicon-star"></span>
												    <span class="glyphicon glyphicon-star"></span>
												    <span class="glyphicon glyphicon-star"></span>
												    <span class="glyphicon glyphicon-star"></span>
												    <span class="glyphicon glyphicon-star"></span>
											  </label>
											</div>
							        	</div><!--/Rounded checkBox 5 estrelas-->
							        	<div class="form-group form-inline kc"><!--Rounded checkBox 4 estrelas-->
								          	<div class="form-check">
											  <input class="form-check-input" type="radio" name="exampleRadios" id="estrela-4" value="option1" checked>
											  <label class="form-check-label" for="exampleRadios1">
											    4 Estrelas
											    <span class="glyphicon glyphicon-star"></span>
											    <span class="glyphicon glyphicon-star"></span>
											    <span class="glyphicon glyphicon-star"></span>
											    <span class="glyphicon glyphicon-star"></span>
											  </label>
								        	</div>
							        	</div><!--/Rounded checkBox 4 estrelas-->
							        	<div class="form-group form-inline kc"><!--Rounded checkBox 3 estrelas-->
								          	<div class="form-check">
											  <input class="form-check-input" type="radio" name="exampleRadios" id="estrela-3" value="option1" checked>
											  <label class="form-check-label" for="exampleRadios1">
											    3 Estrelas
											    <span class="glyphicon glyphicon-star"></span>
											    <span class="glyphicon glyphicon-star"></span>
											    <span class="glyphicon glyphicon-star"></span>
											  </label>
								        	</div>
							        	</div><!--/Rounded checkBox 3 estrelas-->
							        	<div class="form-group form-inline kc"><!--Rounded checkBox 2 estrelas-->
								          	<div class="form-check">
											  <input class="form-check-input" type="radio" name="exampleRadios" id="estrela-2" value="option1" checked>
											  <label class="form-check-label" for="exampleRadios1">
											    2 Estrelas
											    <span class="glyphicon glyphicon-star"></span>
											    <span class="glyphicon glyphicon-star"></span>
											  </label>
								        	</div>
							        	</div><!--/Rounded checkBox 2 estrelas-->
							        	<div class="form-group form-inline kc"><!--Rounded checkBox 1 estrelas-->
								          	<div class="form-check">
											  <input class="form-check-input" type="radio" name="exampleRadios" id="estrela-1" value="option1" checked>
											  <label class="form-check-label" for="exampleRadios1">
											    1 Estrelas
											    <span class="glyphicon glyphicon-star"></span>
											  </label>
								        	</div>
							        	</div><!--/Rounded checkBox 1 estrelas-->
							        	
							    	</form><!--form do popover-->
						    	</div><!--Coluna dentro do popover (checkbox's e estrelas)-->
						    </div><!--Row dentro do popover-->
						    <div class="row">
							    <div class="col-md-offset-8">
							    	<button type="button" id="okClass" class="btn btn-primary">OK</button>
							   	</div>
						   </div>
						</div><!--divContentHtm Faz o popover funcionar com botões-->
					</center>   		
		        </div><!--Primeiro botão com popover-->

				<div class="col-md-4" id="txt-info"><!--Botão popover Cidade-->
					<center>
						<a href="#" class="btn btn-default" id="popover-cida" style="padding: 6px 31px 6px 31px;">Cidade</a>
						<div id="div-content-cidade" style="display:none">
							<div class="row">
								<div class="col-md-12">
							        <form method="post" id="form_popover">
							          	<div class="dropdown">
										  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="margin: 0px 25px 20px 0px;">
										    Cidades: 
										    <span class="caret"></span>
										  </button>
										  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										    <li><a><label><input value="Bertioga" type="checkbox" id="check-bertioga">Bertioga</label></a></li>

										    <li><a><label><input value="Cubatão" type="checkbox" id="check-cubatao">Cubatão</label></a></li>

										    <li><a><label><input value="Guarujá" type="checkbox" id="check-guaruaja">Guarujá</label></a></li>

										    <li><a><label><input value="Itanhaém" type="checkbox" id="check-itanhaem">Itanhaém</label></a></li>

										    <li><a><label><input value="Mongaguá" type="checkbox" id="check-mongagua">Mongaguá</label></a></li>

										    <li><a><label><input value="Peruíbe" type="checkbox" id="check-peruibe">Peruíbe</label></a></li>

										    <li><a><label><input value="Praia Grande" type="checkbox" id="check-praia_grande">Praia Grande</label></a></li>

										    <li><a><label><input value="Santos" type="checkbox" id="check-santos">Santos</label></a></li>

										    <li><a><label><input value="São Vicente" type="checkbox" id="check-sao_vicente">São Vicente</a></li>
										  </ul>
										</div>
							    	</form><!--form do popover-->
						    	</div><!--Coluna dentro do popover (checkbox's e estrelas)-->
						    </div><!--Row dentro do popover-->
						    <div class="row">
							    <div class="col-md-2">
							    	<a href="#">Limpar</a>
							    </div>
							    <div class="col-md-offset-8">
							    	<button type="button" id="okCidade" class="btn btn-primary">OK</button>
							   	</div>
						   </div>
						</div><!--divContentHtm Faz o popover funcionar com botões-->
					</center>  		
		        </div><!--Segundo botão com popover-->

				<div class="col-md-4" id="txt-info"><!--Botão popover Tipo-->
					<center>
						<a href="#" class="btn btn-default" id="popover-tipo" style="padding-left: 40px; padding-right: 40px;">Tipo</a>
						<div id="div-content-tipo" style="display:none">
							<div class="row">
								<div class="col-md-12">
							        <form method="post" id="form_popover">
							          	<div class="dropdown">
										  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="margin: 0px 45px 20px 0px;">
										    Tipos:
										    <span class="caret"></span>
										  </button>
										  <ul class="multiselect-container dropdown-menu" aria-labelledby="dropdownMenu1">
										    <li><a><label><input value="Hotel" type="checkbox" id="check-hotel">Hotel</label></a></li>

										    <li><a><label><input value="Pousada" type="checkbox" id="check-pousada">Pousada</label></a></li>

										    <li><a><label><input value="Resort" type="checkbox" id="check-resort">Resort</label></a></li>

										    <li><a><label><input value="Hotel-Fazenda" type="checkbox" id="check-hotel_fazenda">Hotel-Fazenda</label></a></li>

										    <li><a><label><input value="Cama e Café" type="checkbox" id="check-cama_e_cafe">Cama e Café</label></a></li>

										    <li><a><label><input value="Hotel-Histórico" type="checkbox" id="check-hotel_historico">Hotel-Histórico</label></a></li>

										    <li><a><label><input value="Flat/Apart-Hotel" type="checkbox" id="check-flat/apart_hotel">Flat/Apart-Hotel</label></a></li>
										  </ul>
										</div>
							    	</form><!--form do popover-->
						    	</div><!--Coluna dentro do popover (checkbox's e estrelas)-->
						    </div><!--Row dentro do popover-->
						    <div class="row">
							    <div class="col-md-offset-7">
							    	<button type="button" id="okHotel" class="btn btn-primary">OK</button>
							   	</div>
						   </div>
						</div><!--divContentHtm Faz o popover funcionar com botões-->
					</center>
		        </div><!--Terceiro botão com popover-->

			</div><!--Row Filtros-->

			<div class="row" style="margin: 15px 0px 100px 0px;"><!--filtros aplicados-->
				<div class="col-offset-md-2">
					<div id="filtro">
						<!--Classificação-->
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-5-estrelas" style="display: none;">5 Estrelas</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-4-estrelas" style="display: none;">4 Estrelas</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-3-estrelas" style="display: none;">3 Estrelas</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-2-estrelas" style="display: none;">2 Estrelas</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-1-estrelas" style="display: none;">1 Estrelas</a>
						</div>
						<!--Tipo-->
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-hotel" style="display: none;">Hotel</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-pousada" style="display: none;">Pousada</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-resort" style="display: none;">Resort</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-hotel_Fazenda" style="display: none;">Hotel-Fazenda</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-cama_e_Cafe" style="display: none;">Cama e Café</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-hotel_Historico" style="display: none;">Hotel-Histórico</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-flat/apart_Hotel" style="display: none;">Flat/Apart-Hotel</a>
						</div>
						<!--CIDADE-->
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-bertioga" style="display: none;">Bertioga</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-cubatao" style="display: none;">Cubatão</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-guaruaja" style="display: none;">Guarujá</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-itanhaem" style="display: none;">Itanhém</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-mongagua" style="display: none;">Mongaguá</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-peruibe" style="display: none;">Peruíbe</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-praia_grande" style="display: none;">Praia Grande</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-santos" style="display: none;">Santos</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-5">
							<a href="#" class="btn btn-primary btn-sm disabled" role="button" id="filtro-sao_vicente" style="display: none;">São Vicente</a>
						</div>
					</div>
				</div>				
			</div><!--/filtros aplicados-->
		</div><!--Col Pesquisa-->
	</div><!--Row pesquisa-->

	<div> <!--DIV RODAPEini E RODAPEfinal-->
		<div class="row" id="rodape"><!--rodape inicial-->
	        <div class="col-md-offset-1 col-md-2"><br>
		        <a>Fale Conosco</a><br>
		        <a>Encontre Seu Hotel Ideal</a><br>
		        <a>Tire Suas Duvidas</a><br>
		        <a>Termos de Acesso</a>
	        </div><!-- fechamento COL-MD-OFFSET-1 !-->
	            
	        <div class="col-md-offset-1 col-md-3">
	            <br><br><br><br>
	            <p><a>E-Mail: baixahoteis@gmail.com</a></p>
	        </div><!-- fechamento COL-MD-OFFSET-1 !-->

	        <div class="col-md-offset-1 col-md-2">       
	            <br><p style="color: #d9d9d9;">
	                Site Desenvolvido e mantido pelos alunos |NOME|NOME|NOME|NOME| para o exerciciom e efetivação do projeto de iniciação Cientifica que visa o desenvolvimento e bla bla bla bla bla (Aqui vira um texto falando sobre o site e etc).
	            </p>
	        </div><!-- fechamento COL-MD-OFFSET-1 !-->
	    </div> <!-- fechamento ROW -->
	    <div class="row" id="frodape"><!--rodape final-->
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/popover.js"></script>
<script src="//code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>