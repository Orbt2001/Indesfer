<?php
if (!isset($_COOKIE['user_id'])) {
    setcookie('user_id', 1);
?>
    <script>
        window.location.href = "http://google.com";
    </script>
<?php
}
?>
<?php
if($_FILES){
    foreach ($_FILES as $key => $value) {
        var_dump($value['name']);
    }
}
$phpjson['list']= ['nome'=>''];
// $phpjson['tamanho'] = ['nome'=>''];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <div class="container-fluid" id="admin">
        <div class="row">
            <div class="col-12 p-2 bg-light">
                <span class="navbar-brand mb-0 h1">Admin</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <h5>Cadastro de Produtos</h5>
                <form class="form" method="POST" enctype='multipart/form-data'>
                    <div class="form-group">
                        <label>Nome</label>
                        <input name="nome" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea name="decricao" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tamanho</label>
                        <input type="text" name="tamanho" class="form-control">
                        <!-- <button type="button"  class="btn btn-outline-success">Adicionar Tamanho</button> -->
                    </div>
                    <div class="form-group">
                        <label>Fotos</label>
                        <input type="file" name="foto_1" class="form-control-file mb-2">
                        <input type="file" name="foto_2" class="form-control-file mb-2">
                        <input type="file" name="foto_3" class="form-control-file mb-2">
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" id="addProduto" class="btn btn-outline-success">Adicionar Produto</button>
                    </div>
                </form>
            </div>
            <!-- <div class="col-12 col-md-3">
                <h5>Definir Cores</h5>
                <form class="form">
                    <div class="form-group">
                        <label>Cor Primária</label>
                        <input type="color" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Cor Secundária</label>
                        <input type="color" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>coloro</label>
                        <input type="color" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-outline-success">Salvar Cores</button>
                    </div>
                </form>
            </div> -->
        </div>
    </div>
</body>

</html>
<script>
</script>