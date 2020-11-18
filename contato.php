<?php
    include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <!--CDN link css -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <!--Menu -->
    <?php
        include("menu.html");
    ?>

    <header class="container">
        <br>
        <h1>Contatos</h1>  
    </header>
    <hr>
    <main>
    <div class="container">
            <table class="table table-borderless">
                <tr>
                <td>
                    <img src="./Imagens/email.png" width="60px">
                    contato@fullstackeletro.com
                </td>
                <td>
                    <img src="./Imagens/wzap.png" width="80px">
                    (11) 99999-9999
                </td>
                </tr>
            </table>
        </div><hr><br>

        <section class="container">
            <h5>Em caso de dúvidas, reclamações, elogios ou sugestões, envie-nos sua mensagem!</h5 ></div>
            <form class="form-group"action="#" method="POST">
                <label type="text" name="nome">Nome:</label>
                <input type="text" name="nome" class="form-control border border-success">
                <label type="text" name="msg">Mensagem:</label>
                <input type="text" name="msg" class="border border-success form-control"><br>
                <button class="btn btn-success btn-block mb-2 mr-sm-2" type="submit" name="submit" value="Enviar">Enviar</button>
            </form>
        </section>
        <br><hr>
        <div class="container">
            <h2>Mensagens de usuários</h2>
            <hr>
            <?php

            //Verificar se está setado, configurado, isset
                if(isset($_POST['nome']) && isset($_POST['msg'])){
                    $nome = $_POST['nome'];
                    $msg = $_POST['msg'];
                
                    $sql = "insert into comentarios(nome, msg) values ('$nome','$msg')";
                    $result = $conn->query($sql);   
                }

                $sql = "select * from comentarios";
                $result = $conn->query($sql);
                //Resultado do numero de linhas no Banco
                if($result->num_rows > 0){
                    //Exibir os dados
                    while($rows = $result->fetch_assoc()){
                    echo "Data: ".$rows['data']."<br/>";
                    echo "Nome: ".$rows['nome']."<br/>";
                    echo "Mensagem: ".$rows['msg']."<br/>";
                    echo "<hr/>";
                    }

                    }else{
                        echo "Nenhum comentário ainda!";
                    }
                ?>
        </div>
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