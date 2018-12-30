<?php
    require_once('class/Grid.php');
    $grid = new Grid();

    $grid->cidade = $_GET['cidade'];
	$grid->classificacao = $_GET['classificacao'];
	$grid->acomodidade = $_GET['acomodidade'];
	$grid->keyword = $_GET['keyword'];

    $lista = $grid->buscarHoteis();

	if($lista != null)
	{

		for ($i=0; $i <count($lista) ; $i++) {
			$link = $lista[$i][3];
			$link = urlencode($link);
			$link = str_replace("+","",$link);
			$estrelas = $grid::getStar($lista[$i][4]);
	?>
			<div class="row p-t-10">
			<div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6" id="grid">
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" id="img">
					<img src="<?php echo $lista[$i][5]; ?>" id="img_img" class="img-responsive" >
				</div>
				<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7" id="informacoes" >
					<label><h4><i><?php echo $lista[$i][0]; ?></i></h4></label>
					<label><b>Endereço: </b> <?php echo $lista[$i][1]; ?></label>
					<label><b>Telefone: </b> <?php echo $lista[$i][2]; ?></label>
					<label><b>Site: </b><a target="_blanck" href="http://<?php echo $link; ?>"><?php echo $lista[$i][0]; ?></a></label>
					<label><b>E-mail: </b><?php echo $lista[$i][6] ?></label>
					<label><b>Classificação:<?php echo $estrelas; ?> </b></label>
					<button type="button" class="btn btn-link colo_btn btn_plus_info" id="btn_plus_info">Mais informações</button>
				</div>
			</div> <!-- GRID -->
			<div></div><!-- SUB MENU -->
			</div>
	<?php
        }
	}
	else{
	?>
		<div class="row">
			<div class="col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6" style="margin-top:15px;">
				<div class="alert alert-warning" role="alert">Nenhum hotel com essas caracteristicas foi encontrado :(</div>
			</div>
		</div>
	<?php

	}
    ?>
