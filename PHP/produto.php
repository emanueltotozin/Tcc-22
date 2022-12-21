<?php
include_once('config.php');
if (isset($_POST['submit'])) {
    //print_r('Nome: ' . $_POST['nome']);
    //print_r('<br>');
    //print_r('Email: ' . $_POST['email']);
    //print_r('<br>');
    //print_r('Telefone: ' . $_POST['telefone']);
    //print_r('<br>');
    //print_r('Sexo: ' . $_POST['genero']);
    //print_r('<br>');
    //print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
    //print_r('<br>');
    //print_r('Cidade: ' . $_POST['cidade']);
    //print_r('<br>');
    //print_r('Estado: ' . $_POST['estado']);
    //print_r('<br>');
    //print_r('Endereço: ' . $_POST['endereco']);



    $nomeprod = $_POST['nomeprod'];
    $idprod = $_POST['idprod'];
    $descricaoprod = $_POST['descricaoprod'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $result = mysqli_query($conexao, "INSERT INTO produto(nomeprod,idprod,descricaoprod,preco,estoque) 
        VALUES ('$nomeprod','$idprod','$descricaoprod','$preco','$estoque')");

    if ($result === TRUE) {
        echo "<script>alert('Registro inserido com sucesso.');</script>";
        //echo "<script>window.location = 'select.php';</script>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
        echo "<script>window.history.back();</script>";
    }
    $conexao->close();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>

            
       
    input[type=text], select, textarea{
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        resize: vertical;
    }


    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }


    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}


.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}


.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

    </style>
</head>

<body>
    <!--<a href="home.php">Voltar</a>-->
    <div class="box">
        <form action="produto.php" method="POST">
                <h2>Cadastro de Produtos</h2>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-25">
                <label for="nomeprod" class="labelInput">Nome</label>
                        </div>
                    <div class="col-75">
                <input type="text" name="nomeprod" id="nomeprod" class="inputUser" required placeholder="Nome do Produto">
                    </div>
                </div>
                

                    <div class="row">
                        <div class="col-25">
                <label for="idprod" class="labelInput">Código</label>
                        </div>
                        <div class="col-75">
                <input type="text" name="idprod" id="idprod" class="inputUser" required placeholder="Codigo do Produto">
                        </div>
                    </div>
                

                    <div class="row">
                        <div class="col-25">
                <label for="descricaoprod" class="labelInput">Descrição do Produto</label>
                        </div>
                        <div class="col-75">
                <textarea type="text" name="descricaoprod" id="descricaoprod" class="inputUser"  placeholder="Mais informações do produto" required style="height:200px"></textarea>
                        </div>
                    </div>
                

                    <div class="row">
                        <div class="col-25">
                <label for="preco" class="labelInput">Preço</label>
                        </div>
                        <div class="col-75">
                <input type="text" name="preco" id="preco" class="inputUser" required placeholder="Coloque ''R$''">
                        </div>
                    </div>
            

                    <div class="row">
                        <div class="col-25">
                <label for="estoque" class="labelInput">Estoque Disponível</label>
                        </div>
                        <div class="col-75">
                <input type="text" name="estoque" id="estoque" class="inputUser" required placeholder="Estoque do Produto">
                    </div>
                        </div>
                        <br>
                <div class="row">
                <input type="submit" name="submit" id="submit">
                </div>
        </form>
    </div>
</body>

</html>