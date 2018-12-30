<?php require_once('header.php') ?>
<?php
	$value = "";
	if(isset($_GET['palavra-chave'])){
		$value = $_GET['palavra-chave'];
	}
?>

		<header class="row">
			<div id="header" class="col-xs-offset-2 col-xs-7 col-sm-offset-2 col-sm-7 col-md-offset-0 col-md-2 col-lg-offset-0 col-lg-2">
				<h1><a href="index.php">
					<img src="img/NovaLogo.png" class="img-responsive" alt="Logo da NineSun">
				</a></h1>
			</div>
			<div id="div_input" class="col-xs-offset-1 col-xs-11 col-sm-offset-1 col-sm-11 col-md-offset-1 col-md-7 col-lg-offset-1 col-lg-7">
				<form autocomplete="off" action="search.php" method="GET" class="form-horizontal">
					<div class="form-group">
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" style="padding:0px;">
							<input type="search" name="palavra-chave" value="<?php echo $value?>" class="form-control" id="input" placeholder="Encontre seu hotel ideal">
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="padding:0px;">
							<button class="btn btn-warning" type="submit" id="btn_search"><span class="glyphicon glyphicon-search"></span></button>
						</div>
					</div>
				</form>
			</div>
		</header>


		<article>

            <div class="row" id="coluna_filter">
				<div class="menu"> <!-- Bloco Menu -->
        			<div class="row"> <!-- BTN Fecha Menu -->
						<div class="icon-close"><div class="col-md-offset-10">
							<button id="btn_close_menu"><span class="glyphicon glyphicon-cog"></span></button>
						</div></div>
        			</div>
        			<ul id="menu"> <!-- Menu de opções -->
            			<li>
                			 <button type="button" class="btn btn-link colo_btn" id="btn_cidade"><i class="fas fa-globe-americas"></i> Cidades</button>
            			</li>
            			<li id="li_cidades"></li><!-- sub-menu -->
            			<li>
                			 <button type="button" class="btn btn-link colo_btn" id="btn_classificacao"><i class="fas fa-star-half-alt"></i> Classificação</button>
            			</li>
            			<li id="li_classificacao"></li><!-- sub-menu -->
            			<li>
                			 <button type="button" class="btn btn-link colo_btn" id="btn_acomodidade"><i class="fas fa-bed"></i> Acomidades</button>
           				</li>
           				<li id="li_acomidades"></li><!-- sub-menu -->
        			</ul>
    			</div> <!-- Bloco Menu -->
    			<div class="col-md-1"> <!-- BTN Abre Menu -->
                    <div id="btn_filter" class="icon-menu">
                        <button id="btn_open_menu"><span class="glyphicon glyphicon-cog"></span></button>
                    </div>
                </div><!-- BTN Abre Menu -->
    			<div id="barra_btn_filter" class="col-md-offset-2 col-md-6">
                </div><!-- Barra de BTNS -->
            </div>

            <div class="" id="coluna_grid" >

            </div><!-- COLUNA GRID -->
        </article>

<?php require_once('footer.php') ?>
