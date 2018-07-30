<div class="btn-group" >	
  	<button type="button" class="btn btn-default dropdown-toggle" id="btn_city" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Cidades 
  		<span class="caret"></span>
  	</button>

	<ul class="dropdown-menu">
	    <li><div class="col-md-offset-1">
				<input class="form-check-input" type="checkbox" name="exampleRadios" id="ipt_bertioga" value="option1">
				<label class="form-check-label" id="lbl_bertioga">Bertioga</label>			
		</div></li>
		<li><div class="col-md-offset-1">
				<input class="form-check-input" type="checkbox" name="exampleRadios" id="ipt_cubatao" value="option1">
				<label class="form-check-label" id="lbl_cubatao">Cubatão</label>			
		</div></li>
		<li><div class="col-md-offset-1">
				<input class="form-check-input" type="checkbox" name="exampleRadios" id="ipt_guaruja" value="option1">
				<label class="form-check-label" id="lbl_guaruja">Guarujá</label>	
		</div></li>
		<li><div class="col-md-offset-1">
				<input class="form-check-input" type="checkbox" name="exampleRadios" id="ipt_itanhaem" value="option1">
				<label class="form-check-label" id="lbl_itanhaem">Itanhaém</label>	
		</div></li>
		<li><div class="col-md-offset-1">
				<input class="form-check-input" type="checkbox" name="exampleRadios" id="ipt_mongagua" value="option1">
				<label class="form-check-label" id="lbl_mongagua">Mongaguá</label>	
		</div></li>
		<li><div class="col-md-offset-1">
				<input class="form-check-input" type="checkbox" name="exampleRadios" id="ipt_peruibe" value="option1">
				<label class="form-check-label" id="lbl_peruibe">Peruíbe</label>	
		</div></li>
		<li><div class="col-md-offset-1">
				<input class="form-check-input" type="checkbox" name="exampleRadios" id="ipt_praia" value="option1">
				<label class="form-check-label" id="lbl_praia">Praia Grande</label>	
		</div></li>
		<li><div class="col-md-offset-1">
				<input class="form-check-input" type="checkbox" name="exampleRadios" id="ipt_santos" value="option1">
				<label class="form-check-label" id="lbl_santos">Santos</label>	
		</div></li>
		<li><div class="col-md-offset-1">
				<input class="form-check-input" type="checkbox" name="exampleRadios" id="ipt_sao" value="option1">
				<label class="form-check-label" id="lbl_sao">São Vicente</label>	
		</div></li>				
		<li><div class="col-md-offset-8">
				<button type="button" id="okClass" class="btn btn-primary btn-sm">OK</button>
		</div></li>
	</ul>
</div>

<div class="btn-group" >
  	<button type="button" class="btn btn-default dropdown-toggle" id="btn_classificacao"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Classificação 
  		<span class="caret"></span>
  	</button>
	<ul class="dropdown-menu">
	   	<li>
	    	<div class="col-md-offset-1">
				<input class="form-check-input" type="checkbox" id="cinco_estrelas"  value="5" >
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>	
			</div>					
		</li>
	    <li>
	    	<div class="col-md-offset-1">
				<input class="form-check-input" type="checkbox" name="exampleRadios" id="quatro_estrelas" value="4" >
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>	
			</div>					
		</li>
		<li>
	    	<div class="col-md-offset-1">
				<input class="form-check-input" type="checkbox" name="exampleRadios" id="tres_estrelas" value="3" >
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
			</div>					
		</li>
		<li>
	    	<div class="col-md-offset-1">
				<input class="form-check-input" type="checkbox" name="exampleRadios" id="duas_estrelas" value="2">
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
			</div>					
		</li>
		<li>
	    	<div class="col-md-offset-1">
				<input class="form-check-input" type="checkbox" name="exampleRadios" id="uma_estrela" value="1">
				<span class="glyphicon glyphicon-star"></span>
			</div>					
		</li>
		<li>
			<div class="col-md-offset-8">
				<button type="button" id="btn_ok_classificacao " class="btn btn-primary btn-sm" onclick="filter_class()">OK</button>
			</div>
		</li>
	</ul>
</div>		
				
<div class="btn-group">
  	<button type="button" class="btn btn-default dropdown-toggle" id="btn_acomodidades" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acomodidades 
  		<span class="caret"></span>
  	</button>
	<ul class="dropdown-menu">
	    <li><div class="col-md-offset-1">
			<input class="form-check-input" type="checkbox" name="exampleRadios" id="estrela-1" value="option1">
			<label class="form-check-label" for="exampleRadios1">Wifi nos Quartos</label>	
		</div></li>
		<li><div class="col-md-offset-1">
			<input class="form-check-input" type="checkbox" name="exampleRadios" id="estrela-1" value="option1">
			<label class="form-check-label" for="exampleRadios1">Wifi no Lobby</label>	
		</div></li>
		<li><div class="col-md-offset-1">
			<input class="form-check-input" type="checkbox" name="exampleRadios" id="estrela-1" value="option1">
			<label class="form-check-label" for="exampleRadios1">Piscina</label>	
		</div></li>
		<li><div class="col-md-offset-1">
			<input class="form-check-input" type="checkbox" name="exampleRadios" id="estrela-1" value="option1">
			<label class="form-check-label" for="exampleRadios1">Estacionamento</label>	
		</div></li>
		<li><div class="col-md-offset-1">
			<input class="form-check-input" type="checkbox" name="exampleRadios" id="estrela-1" value="option1">
			<label class="form-check-label" for="exampleRadios1">Academia</label>	
		</div></li>
		<li><div class="col-md-offset-1">
			<input class="form-check-input" type="checkbox" name="exampleRadios" id="estrela-1" value="option1">
			<label class="form-check-label" for="exampleRadios1">Spa</label>	
		</div></li>
		<li><div class="col-md-offset-1">
			<input class="form-check-input" type="checkbox" name="exampleRadios" id="estrela-1" value="option1">
			<label class="form-check-label" for="exampleRadios1">Bar no Hotel</label>	
		</div></li>
		<li><div class="col-md-offset-1">
			<input class="form-check-input" type="checkbox" name="exampleRadios" id="estrela-1" value="option1">
			<label class="form-check-label" for="exampleRadios1">Restaurante</label>	
		</div></li>
		<li><div class="col-md-offset-1">
			<input class="form-check-input" type="checkbox" name="exampleRadios" id="estrela-1" value="option1">
			<label class="form-check-label" for="exampleRadios1">Pet Permitido</label>	
		</div></li>				
		<li><div class="col-md-offset-8">
			<button type="button" id="okClass" class="btn btn-primary btn-sm">OK</button>
		</div></li>
	</ul>
</div>	
			
<div id="div_keys">
	<div id="keyword">
		
	</div>
	<div id="keys_city">
		
	</div>
	<div id="keys_class">
		
	</div>
	<div id="keys_acomodidades">
		
	</div>
</div>