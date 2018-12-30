<?php require_once('header.php'); ?>

<?php msg(); ?>
<div class="col-md-offset-4 col-md-4" id="login">

<?php if(isset($_SESSION['acesso'])): ?>
    <div class="panel panel-info">
        <div class="panel-heading">Bem vindo <?php echo $_SESSION['user']; ?></div>
            <div class="panel-body">...</div>
    </div>
    
<?php else: ?>
    <form action="../controller/login.php" id="form-login"  method="post">
            <table class="table">
                <tr class="centro">
                    <td>Usuario</td>
                    <td><input name="name" class="form-control" type="text" >  </td>
                </tr>
                <tr class="centro">
                    <td>Senha</td>
                    <td><input name="password" type="password" class="form-control" >  </td>
                </tr>
                <tr class="direita"><td></td><td><button id="btn-acess" class="btn btn-success">Acessar</button></td><tr>
            </table>
    </form>
<?php endif; ?>
</div>

<?php require_once('footer.php'); ?>