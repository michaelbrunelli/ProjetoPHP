<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"><!--pontuação-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css"> <!--LINK PARA O CSS-->
    <title>TELA DE LOGIN</title>
    
</head>

<body>

    <div class="container">

        <h2>CADASTRO</h2>

        <form>

            <div class="F/J">
                <label for="select">Pessoa Física/Jurídica:</label>
                <br>
                <select id="select" name="select">
                    <option value="física">Física</option>
                    <option value="jurídica">Jurídica</option>
                </select>
                   
                </select>
            </div>

            <div class="nome">
                <label for="nome">Nome/Razão Social:</label>
                <br/>
                <input type="text" name="nome" id="nome" class="inputNome" required placeholder="Seu nome ou razão social:">
            </div><!--estado-->
            
            <div class="cpf/cnpj">
                <label for="InputCpf">CPF/CNPJ:</label>
                <br/>
                <input type="cpf" class="type-cpf" id="cpf/cnpj"  required placeholder="Digite seu cpf/cnpj">
            </div><!--div email-->
            
            <div class="celular">
                <label for="inputCelular">Endereço:</label>
                <br/>
                <input type="text" id="endereço" class="input-padrao" required placeholder="Digite seu endereço"><!--para numeros de celular-->
            </div><!--celular-->
            
            <div class="país">
                <label for="país">Número:</label>
                <br/>
                <input type="number" name="numero" id="numero" class="inputNumero" required placeholder="Número da sua casa:">
            </div><!--pais-->

            <div class="estado">
                <label for="estado">Bairro:</label>
                <br/>
                <input type="text" name="bairro" id="bairro" class="inputBairro" required placeholder="Seu bairro:">
            </div><!--estado-->

            <div class="estado">
                <label for="estado">Cidade</label>
                <br/>
                <input type="text" name="cidade" id="cidade" class="inputCidade" required placeholder="Sua cidade">
            </div><!--cidade-->

            <div class="endereço">
                <label for="endereço">CEP:</label>
                <br/>
                <input type="text" name="endereço" id="endereço" class="inputEndereço" required placeholder="Ex: 12345-678">
            </div><!--endereço-->
        
            <div class="endereço">
                <label for="endereço">Celular:</label>
                <br/>
                <input type="tel" name="celular" id="celular" class="inputCelular" required placeholder="(xx)xxxxx-xxxx">
            </div><!--endereço-->
            
            <div class="endereço">
                <label for="endereço">Email:</label>
                <br/>
                <input type="email" name="email" id="email" class="inputEmail" required placeholder="(xx)xxxxx-xxxx">
            </div><!--endereço-->
            <div class="endereço">
                <label for="endereço">Observações:</label>
                <br/>
                <input type="observações" name="observações" id="observações" class="inputObservações" required placeholder="(xx)xxxxx-xxxx">
            </div><!--endereço-->
            <br>
            <button>OK</button>
         </form>
         
        
    </div>


    

    

<script src="login.js"></script> <!--link para js externo--> <!--colocar o JavaScript sempre na parte de baixo-->   
</body>

</html>
