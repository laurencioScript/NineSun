<?php require_once('header.php');?>

<?php
    msg();    
    valida_funcionalidade();  
    $form = new Formulario("adiciona","Cadastrar","success");
    $listaDeAcomodidades = $form->acomodidade->listar();
    $form->validar_tipo_form(); 
?>
<div class="col-md-offset-5"><h2><b><?php echo $form->name_btn ?> Hotel</b></h2></div>
<form action="../controller/<?php echo $form->url_arquivo ?>-hotel.php"  method="post">
   <div class="col-md-12"> 
    <div class="col-md-offset-1 col-md-3 login">
        <table class="table table-bordered table-striped">
            <input name="id" value="<?php echo $form->hotel->id?>" type="hidden" class="form-control" id="exampleInputEmail1" placeholder="id" >
            <tr>
                <td><label for="exampleInputEmail1">Nome</label></td>
                <td><input name="nome" value="<?php echo $form->hotel->nome; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome"></td>
            </tr>
            <tr>
                <td><label for="exampleInputEmail1">Endereço</label></td>
                <td><input name="endereco" value="<?php echo $form->hotel->endereco; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Endereço"></td>
            </tr>
            <tr>
                <td><label for="exampleInputEmail1">Telefone</label></td>
                <td><input name="telefone" value="<?php echo $form->hotel->telefone; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefone"></td>
            </tr>
            <tr>
                <td><label for="exampleInputEmail1">Site</label></td>
                <td><input name="site" value="<?php echo $form->hotel->website; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Site"></td>
            </tr>
            <tr>
                <td><label for="exampleInputEmail1">Email</label></td>
                <td><input name="email" value="<?php echo $form->hotel->email; ?>" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"></td>
            </tr>
            <tr>
                <td><label for="exampleInputEmail1">Classificação</label></td>
                <td><input name="class" value="<?php echo $form->hotel->classificacao; ?>" type="number" class="form-control" id="exampleInputEmail1" placeholder="Classificação"></td>
            </tr>
            <tr>
                <td><label for="exampleInputEmail1">Cidade</label></td>
                <td>
                    <select name="cidade"  class="form-control">  
                      <option value="<?php echo $form->hotel->cidadeSelecionada(1)?>">Bertioga</option>
                      <option value="<?php echo $form->hotel->cidadeSelecionada(2)?>">Cubatão</option>
                      <option value="<?php echo $form->hotel->cidadeSelecionada(3)?>">Guarujá</option>
                      <option value="<?php echo $form->hotel->cidadeSelecionada(4)?>" >Itanhaém</option>
                      <option value="<?php echo $form->hotel->cidadeSelecionada(5)?>">Mongaguá</option>
                      <option value="<?php echo $form->hotel->cidadeSelecionada(6)?>">Peruíbe</option>
                      <option value="<?php echo $form->hotel->cidadeSelecionada(7)?>">Praia Grande</option>
                      <option value="<?php echo $form->hotel->cidadeSelecionada(8)?>">Santos</option>
                      <option value="<?php echo $form->hotel->cidadeSelecionada(9)?>">São Vicente</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-3 login" >
        <table class="table table-bordered table-striped"> 
            <tr>
                <td><label for="exampleInputEmail1">Imagem A</label></td>
                <td><input name="img_A" value="<?php echo $form->hotel->img_A; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o diretorio da imagem"></td>
            </tr>
            <tr>
                <td><label for="exampleInputEmail1">Imagem B</label></td>
                <td><input name="img_B" value="<?php echo $form->hotel->img_B; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o diretorio da imagem"></td>
            </tr>
            <tr>
                <td><label for="exampleInputEmail1">Imagem C</label></td>
                <td><input name="img_C" value="<?php echo $form->hotel->img_C;?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o diretorio da imagem"></td>
            </tr>
            <tr>
                <td><label for="exampleInputEmail1">Imagem D</label></td>
                <td><input name="img_D" value="<?php echo $form->hotel->img_D; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o diretorio da imagem"></td>
            </tr>
            <tr>
                <td><label for="exampleInputEmail1">Imagem E</label></td>
                <td><input name="img_E" value="<?php echo $form->hotel->img_E; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o diretorio da imagem"></td>
            </tr>
        </table>
    </div>
    <div class="col-md-2 login" >
        <table class="table table-bordered table-striped">
            <td>
                <div class="dropdown col-md-offset-2; ?>">
                      <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Acomodidades
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <?php foreach ($listaDeAcomodidades as $item): ?>                        
                            <li><a href="#">
                                    <label class="checkbox-servico">
                                    <input name="<?php echo $item['tipo'] ?>" 
                                           value="<?php echo $item['id'] ?>"  
                                           type="checkbox" 
                                           <?php ServicoDoHotel::valida_servico($item['tipo'])?> > 
                                        <?php echo $item['tipo'] ?>
                                    </label>
                                </a>
                            </li>
                        <?php endforeach; ?>                                          
                      </ul>
                    </div>   
            </td>     
        </table>
    </div>
   </div>
    <div class="col-md-offset-5"><button class="btn btn-<?php echo $form->tipo_btn ?>"> <?php echo $form->name_btn ?> </button></div>
</form>
<?php require_once('footer.php'); ?>