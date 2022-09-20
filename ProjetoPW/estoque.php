<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <title>Tela Estoque</title>
        <form action="dbEstoque.php" method="POST">
    </head>
    <body>

    <div align="center">
        <table width="50%">
        <form action="">
            <div>
                <h1>Inclusão</h1>
                
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Produto:</label>
                <?php
                    include "mysqlconecta.php";
                    $query = "SELECT pro_cod, pro_nome FROM cad_produtos ORDER BY pro_cod, pro_nome ASC";
                    $query = mysqli_query($conexao,$query);
                ?>
                <select name="produto">
                    <?php
                        while($dados = mysqli_fetch_array($query))
                        {
                    ?>
                        <option value="<?php echo $dados['pro_cod'];?>">
                        <?php echo $dados['pro_nome'];?>
                        </option>
                    <?php
                        }
                    ?>
                </select><br>
                </div>
                <br>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Quantidade:</label>
                <input type="text" name="qtd">
                </div>
                <br>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Unidade de Medida:</label>
                <input type="text" name="um">
                </div>
                <br>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Valor:</label>
                <input type="text" name="valor">
                </div>
                <br>
                <button type="submit">Ok</button>
        </form>
        </table>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    </body>
</html>
