<?php require_once('header.php');?>
<?php msg(); ?>
<?php valida_funcionalidade();?>

<?php 	
	$servico = new Acomodidade(0,"","");
	$lista = $servico->listar();
?>
<div class="col-md-offset-3 col-md-6" id="lista">
<table class="table table-bordered table-striped">
      <tr>
            <td>ID</td>
      	<td>Nome</td> 	
      </tr>
<?php foreach ($lista as $item): ?>
      <tr>
      	<td><?php echo $item['id']; ?></td>
      	<td><?php echo $item['tipo']; ?></td>
      	<td>
      		<form action="formulario-servico.php" method="post">
				<input type="hidden" name="id" value="<?php echo $item['id']; ?>">
				<button class="btn btn-warning">Alterar</button>
			</form>
		<td>
			<form action="../controller/delete-servico.php" method="post">
				<input type="hidden" name="id" value="<?php echo $item['id']; ?>">
				<button class="btn btn-danger">Remover</button>
			</form>
		</td>
      </tr>      
<?php endforeach; ?>      
</table>
</div>
<?php require_once('footer.php'); ?>