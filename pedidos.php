<?php
    include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    <!--CDN link css -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
   
</head>
<body>
    <!--Menu-->
    <?php
        include("menu.html");
    ?>

    <header class="container">
        <br>
        <h1>Solicitação de pedido</h1>
    </header>
    <hr>

    <main>

    <div class="container form">
        <form action="solicitar_pedido.php" method="post">
            <label for="nome">Nome</label>
            <input class="form-control border border-danger" type="text" name="nome" placeholder="Digite o seu nome completo">

            <label for="endereco">Endereço</label>
            <input class="form-control border border-danger" type="text" name="endereco" placeholder="Digite o seu endereço">

            <label for="tel">Telefone</label>
            <input class="form-control border border-danger" type="text" name="tel" placeholder="Digite seu telefone para contato">

            <label for="descricao">Descrição</label>
            <input class="form-control border border-danger" type="text" name="descricao" placeholder="Digite a descricação do item selecionado">

            <label for="precofinal">Preco final</label>
            <input class="form-control border border-danger" type="text" name="precofinal" placeholder="Digite o preço de venda">

            <label for="quantidade">Quantidade</label>
            <input class="form-control border border-danger" type="text" name="quantidade" placeholder="Digite a quantidade desejada do item selecionado">
            <br>
            <button class="btn btn-success btn-block" type="submit"><b>Concluir seu pedido</b></button>
            <br>
            <a class="text-center" href="produtos.php">Para continuar comprando, clique aqui!</a>
        </form>
    </main>
    <?php
        include("footer.html");
    ?>



<!-- CDN javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>