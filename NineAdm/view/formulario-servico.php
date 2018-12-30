<?php require_once('header.php');?>
<?php
    msg();
    valida_funcionalidade(); 
    $form = new Formulario("adiciona","Cadastrar","success");
    $form->validar_tipo_form();
?>
<div class="col-md-offset-4 col-md-4" id="login">

<h3><b> <?php echo $form->name_btn;?> Servico</b> </h3><br><br>
<form action="../controller/<?php echo $form->url_arquivo?>-servico.php"  method="post">
    <table class="table ">
 
       <input name="id" value="<?php echo $form->acomodidade->id?>" type="hidden" class="form-control" id="exampleInputEmail1" placeholder="id" >
        
        <tr>
            <td><label for="exampleInputEmail1">Nome</label></td>
            <td><input name="nome" value="<?php echo $form->acomodidade->tipo?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome"></td>
        </tr>
        <tr>
            <td><label for="exampleInputEmail1">Imagem</label></td>
            <td><input name="imagem" value="<?php echo $form->acomodidade->imagem?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Insera o diretorio da imagem."></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-<?php echo $form->tipo_btn ?>"> <?php echo $form->name_btn ?> </button></td>
        </tr>
    </table>
</form>
</div>
<?php require_once('footer.php'); ?>