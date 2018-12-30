
<?php
$hotel = $_POST['key'];
$comando = $_POST['comando'];

if($comando == 1){
  listarAcomodidades($hotel);
}
if($comando == 2){
  carrosel($hotel);
}  


// 1 - Aba de acomodidades do sub-grid

function listarAcomodidades($hotel){
    require_once 'class/Acomodidade.php';

    $lista = Acomodidade::listar();
?>
    <table id="acomodidade_table">
            <tbody>
            <?php foreach ($lista as $row) { ?>
                <tr>
                    <td class="push"><img src="<?php echo $row[2]; ?>" class="ico-lucas" alt="<?php echo $row[1]; ?>"> </td>
                    <td> <?php verifique($hotel,$row[0]) ?></td>
                </tr>
            <?php 
                };  
            ?> 
            </tbody>
        </table>

<?php
   
};// listarAcomodidades()

function verifique($hotel,$value){
    require_once 'class/Conexao.php';

    $query = "SELECT nome,endereco,telefone,website,classificacao FROM hoteis join cidades ON id_cidade = cidades.id 
			join servicos ON hoteis.id = servicos.id  WHERE nome = '{$hotel}' AND
           (servico_A = {$value} or servico_B = {$value} or servico_C = {$value}
		 or servico_D = {$value} or servico_E = {$value} or servico_F = {$value} 
		 or servico_G = {$value} or servico_H = {$value} or servico_I = {$value}
		 or servico_J = {$value} or servico_K = {$value} or servico_L = {$value} 
		 or servico_M = {$value} or servico_N = {$value} or servico_O = {$value})";

    $conexao = Conexao::pegaConexao();
    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();
    if(count($lista) == 1):
?>
         <span class="glyphicon glyphicon-ok verde"></span>
<?php
    else:
    
?>        
        <span class="glyphicon glyphicon-remove vermelho"></span>
<?php
    endif;

}// verifique()



// 2 - Aba de imagens do sub-grid

function carrosel($hotel){
  require_once 'class/Conexao.php';

  $query = "SELECT img_A,img_B,img_C,img_D,img_E FROM hoteis join cidades ON id_cidade = cidades.id 
    join servicos ON hoteis.id = servicos.id  WHERE nome = '{$hotel}' ";

  $conexao = Conexao::pegaConexao();
  $resultado = $conexao->query($query);
  $lista = $resultado->fetchAll();
  foreach ($lista as $img):
?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active tamanho">
      <img  src="<?php echo $img[0]; ?>" alt="...">
    </div>
    <div class="item tamanho">
      <img  src="<?php echo $img[1]; ?>" alt="...">
    </div>
    <div class="item tamanho">
      <img  src="<?php echo $img[2]; ?>" alt="...">
    </div>
    <div class="item tamanho">
      <img src="<?php echo $img[3]; ?>" alt="...">
    </div>
    <div class="item tamanho">
      <img  src="<?php echo $img[4]; ?>" alt="...">
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
</div>
	</div>
<?php 
  endforeach;
}// carrosel()




?>