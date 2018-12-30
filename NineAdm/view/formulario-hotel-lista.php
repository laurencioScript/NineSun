<?php require_once('header.php');?>
<?php msg(); ?>
<?php valida_funcionalidade();?>

<?php
  $servico = new Acomodidade("","","");
	$hotel = new Hotel("","","","","","","","","","","","","");
	$lista = $hotel->listar();
?>
<div class="col-md-offset-1 col-md-10" id="lista">
<table class="table table-bordered table-striped">
      <tr>
      	<td>Nome</td>
      	<td>Endereço</td>
      	<td>Telefone</td>
      	<td>WebSite</td>
      	<td>Email</td>
      	<td>Class</td>
      	<td>Cidade</td>
        <td>Serviços</td>
      </tr>
<?php foreach ($lista as $item): ?>
      <tr>
      	<td><?php echo $item['nome']; ?></td>
      	<td><?php echo $item['endereco']; ?></td>
      	<td><?php echo $item['telefone']; ?></td>
      	<td><?php echo $item['website']; ?></td>
      	<td><?php echo $item['email']; ?></td>
      	<td><?php echo $item['classificacao']; ?></td>
      	<td><?php echo $item['cidade']; ?></td>
      	<td>
            <?php $servicos = ServicoDoHotel::buscaServico(ServicoDoHotel::get_one_row($item['id_hotel'])); ?>
            <div class="dropdown col-md-offset-2; ?>">
              <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Acomodidades
                  <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <?php foreach ($servicos as $acomodidade): ?>
                      <li><a href="#">
                              <label><?php echo $acomodidade; ?></label>
                          </a>
                      </li>
                  <?php endforeach; ?>
              </ul>
          </div>


                  </td>
            <td>
                  <form action="formulario-hotel.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $item['id_hotel']; ?>">
                        <button class="btn btn-warning">Alterar</button>
                  </form>
            </td>
		<td>
			<form action="../controller/delete-hotel.php" method="post">
				<input type="hidden" name="id" value="<?php echo $item['id_hotel']; ?>">
				<button class="btn btn-danger">Remover</button>
			</form>
		</td>
      </tr>
<?php endforeach; ?>
</table>
</div>
<?php require_once('footer.php'); ?>
