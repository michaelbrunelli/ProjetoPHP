<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <title>Tela Cadastro de Cliente</title>
        <form action="gravarBanco.php" method="POST">
    </head>
    <body>
        
    <div align="center">
        <table width="50%">
        <form action="">
            <div>
                <h1>CADASTRO CLIENTE</h1>
                <label class="visually-hidden" for="inlineFormSelectPref">Nome/Razão Social</label>
                <br>
                <select name="pessoafj">
                <option value="1">Pessoa Física</option>
                <option value="2">Pessoa Jurídica</option>
                </select>
                <input type="text" placeholder="Razão Social" aria-label="Razão Social">
            </div>
            <br>
            <div class="mb-3"  class="text-md-left">
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nome:</label>
                <input type="text" name="nome" placeholder="Digite seu Nome">
                </div>
                <label for="formGroupExampleInput" class="form-label">CPF/CNPJ:</label>
                <input type="text" name="cpf" placeholder="___.___.___-__">
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Endereço:</label>
                <input type="text" name="endereco" placeholder="Digite seu Endereço">
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Número:</label>
                <input type="text" name="numero" placeholder="Digite seu Número">
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Bairro:</label>
                <input type="text" name="bairro" placeholder="Digite seu Bairro">
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Cidade:</label>
                <input type="text" name="cidade" placeholder="Digite sua Cidade">
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">CEP:</label>
                <input type="text" name="cep" placeholder="Digite seu CEP">
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Celular:</label>
                <input type="number" name="celular" placeholder="(xx) xxxxx-xxxx">
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">E-mail:</label>
                <input type="text" name="email" placeholder="Digite seu E-mail">
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Observações:</label>
                <input type="text" name="obs" placeholder="Escreva sua observação">
                <br>
                <button type="submit">Ok</button></form>
            </div>
        </form>
        </table>
</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
    </html>
