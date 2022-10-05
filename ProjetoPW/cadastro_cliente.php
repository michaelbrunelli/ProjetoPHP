<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="mascaras.js"></script>
        <link rel="stylesheet" href="teupai.css">
        <title>Tela Cadastro de Cliente</title>
        <form action="dbCad_Cliente.php" method="POST">
    </head>
    <body>
        
    <div align="center">
        <table width="50%">
        <form action="">
            <div>
                <h1>CADASTRO CLIENTE</h1>
                <label class="visually-hidden" for="inlineFormSelectPref">Nome/Razão Social</label>
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
                </div><br>
                <label for="formGroupExampleInput" class="form-label">CPF/CNPJ:</label>
                <input type="text" name="cpf" placeholder="___.___.___-__">
                </div><br>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Endereço:</label>
                <input type="text" name="endereco" placeholder="Digite seu Endereço">
                </div><br>
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Número:</label>
                <input type="text" name="numero" placeholder="Digite seu Número">
                </div><br>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Bairro:</label>
                <input type="text" name="bairro" placeholder="Digite seu Bairro">
                </div><br>
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Cidade:</label>
                <input type="text" name="cidade" placeholder="Digite sua Cidade">
                </div><br>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">CEP:</label>
                <input type="text" name="cep" placeholder="Digite seu CEP">
                </div><br>
                <div class="mb-3">
                <label for="nome"><b>Celular:</b></label>
                <input type="text" name="celular" id="celular" placeholder="(xx) xxxx-xxxx" maxlength="15"/>
                </div><br>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">E-mail:</label>
                <input type="text" name="email" placeholder="Digite seu E-mail">
                </div><br>
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Observações:</label>
                <input type="text" name="obs" placeholder="Escreva sua observação">
                <br><br>
                <button type="submit">Ok</button></form>
            </div>
        </form>
        </table>
</div>
    </body>
    </html>
