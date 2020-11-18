<?php
    include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <script src="js/funcoes.js"></script>
    <!--CDN link css  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
</head>
<body>
    <!--Menu-->
    <?php
        include("menu.html");
    ?>

    <header class="container">
        <br>
        <h1>Produtos</h1>
    </header>
    <hr>
    
    <main>
        <div class="container" style="display: flex;">
        <section class="categorias">
            <h3>Categorias</h3>
            <ul>
                <li onclick="exibirTodas()" >Todas (12)</li>
                <li onclick="exibirCategoria('geladeira')">Geladeiras (3)</li>
                <li onclick="exibirCategoria('fogao')">Fogões (2)</li>
                <li onclick="exibirCategoria('microondas')">Microondas (3)</li>
                <li onclick="exibirCategoria('lavaRoupa')">Lavadoras de roupa(2)</li>
                <li onclick="exibirCategoria('lavaLouca')">Lava-louças (2)</li>
            </ul><br><br> 
        </section>

        <section  class="produtos">
            <?php
                //Consultar os dados
                $sql = "select * from produtos";

                //Resultado da consulta
                $result = $conn->query($sql);

                //Resultado do numero de linhas no Banco
                if($result->num_rows > 0){
                //Exibir os dados
                while($rows = $result->fetch_assoc()){
                
            ?>
                <div class="box_produto" style="display: inline-block;" id="categoria" <?php echo $rows['categoria'];?>>
                    <img src="<?php echo $rows['imagem'];?>" width="120px" onclick="destaque(this)">
                    <br>
                    <p class="descricao"><?php echo $rows['descricao'];?></p>
                    <hr>
                    <p class="text-danger preco_ant"><strike>R$<?php echo $rows["preco"];?></strike></p><br>
                    <p class="preco">R$<?php echo $rows["precofinal"];?></p>
                </div> 
                <?php    
                }

                }else{
                    echo "Nenhum produto cadastrado!";
                }
            ?>
        </section>
        </div>
    </main>
    <br><br>  

    <!-- Footer -->
    <?php
        include("footer.html");
    ?>


<!-- CDN javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>