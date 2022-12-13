<?php
  include_once('config.php');

  $consulta = "SELECT * FROM produto";
  $con > $mysqli > query($consulta) or die ($mysqli-> error);
?>
<html> 
    <head>
        <meta charset="utf8">
    </head>
    <body>
        <table>
            <tr>
                <td>Nome</td>
                <td>Id</td>
                <td>Descrição</td>
                <td>Preço</td>
                <td>Estoque</td>
            </tr>
            <?php while($dado = $con-> fatch_array()) {?>
            <tr>
                <td><?php echo $dado["nomeprod"];?></td>
                <td><?php echo $dado["idprod"];?></td>
                <td><?php echo $dado["descricaoprod"];?></td>
                <td><?php echo $dado["preco"];?></td>
                <td><?php echo $dado["estoque"];?></td>
            </tr>
            <?php } ?>
        </table>
</body>
</html>