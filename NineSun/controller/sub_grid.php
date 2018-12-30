<?php
    require_once 'componentes-sub_grid.php';
    $hotel = $_POST['key'];
?>
<div class="row" id="nav_bar">
    <ul class="nav nav-tabs" id="myTabs">
        <li role="presentation" id="acomodidades" class="active"><a href="#">Acomodidades</a></li>
        <li role="presentation" id="fotos"><a href="#">Fotos</a></li>
        <button type="button" class="btn btn-link colo_btn" id="btn-fechar"><span class="glyphicon glyphicon-remove"></span></button>
    </ul>
	<div class="subgrid">
        <?php listarAcomodidades($hotel); ?>
	</div>
</div>
