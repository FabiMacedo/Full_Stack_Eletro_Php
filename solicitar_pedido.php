
<?php

include_once("conexao.php");

if (isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['descricao']) && isset($_POST['precofinal']) && isset($_POST['quantidade'])) {
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $descricao = $_POST['descricao'];
        $precofinal = $_POST['precofinal'];
        $quantidade= $_POST['quantidade'];

        $sql = "insert into pedidos (nome, endereco, telefone, descricao, precofinal, quantidade) values ('$nome', '$endereco', '$telefone', '$descricao', '$precofinal', '$quantidade')";

        $result = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <script src="JS/funcoes.js"></script>

    <!--CDN link css -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <main class="pedidos">
        <div class="menu_produtos">
            <?php
                include_once('menu.html');
            ?>
        </div>

        <div class="jumbotron">
        <h1>Parabéns!!!<br>Sua compra foi efetuada com sucesso!</h1>
        <a type="button" class="text-center" href="produtos.php">Para continuar comprando, clique aqui!</a>
        </div>
    </main>
    <br><br><br>
    <?php
        include("footer.html");
    ?>
    


<!-- CDN javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>