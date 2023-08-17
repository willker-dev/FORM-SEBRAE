<?php
    
    if(isset($_POST['submit']))
    {

        include_once('config.php');

        $patrocinadora = $_POST['patrocinadora'];
        $nome = $_POST['nome'];
        $data_nasc = $_POST['data_nasc'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $txtCep = $_POST['txtCep'];
        $txtRua = $_POST['txtRua'];
        $txtBairro = $_POST['txtBairro'];
        $txtCidade = $_POST['txtCidade'];
        $residencial = $_POST['residencial'];
        $comercial = $_POST['comercial'];
        $celular = $_POST['celular'];
        $outros = $_POST['outros'];
        $solicito = $_POST['solicito'];
        $banco = $_POST['banco'];
        $agencia = $_POST['agencia'];
        $codigo_agencia = $_POST['codigo_agencia'];
        $conta_corrente = $_POST['conta_corrente'];
        $codigo_conta = $_POST['codigo_conta'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(patrocinadora,nome,data_nasc,cpf,email,txtCep,txtRua,txtBairro,txtCidade,residencial,comercial,celular,outros,solicito,banco,agencia,codigo_agencia,conta_corrente,codigo_conta) 
        VALUES ('$patrocinadora','$nome','$data_nasc','$cpf','$email','$txtCep','$txtRua','$txtBairro','$txtCidade','$residencial','$comercial','$celular','$outros','$solicito','$banco','$agencia','$codigo_agencia','$conta_corrente','$codigo_conta')");

        if ($result) {
            // Inserção bem-sucedida, então redireciona para outra página
            header("Location: fim.html");
            exit;
        } else {
            // Alguma ação em caso de erro na inserção
            echo "Erro ao processar o formulário.";
        }
    }

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO SEBRAE</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="shortcut icon" href="assets/css/img/images.png" type="jpg">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <form action="formulario-sebrae.php" name="form1" method="POST" onsubmit="return validaForm();">
        <header class="container-cabecalho">
            <img src="assets/css/img/logotopo.png" alt="logo so sebrae">
        </header>
        <div class="container-log">
            <h3>AUTOPATROCINADO - FORMA DE RECOLHIMENTO</h3>
        </div>
        <br>
        <div class="container-group">
            <div class="container-box1">
                <label for="patrocinadora">Empresa Patrocinadora:</label>
                <select name="patrocinadora" id="patrocinadora">
                    <option value="" selected="selected">--</option>
                    <option value="Abase">Abase</option>
                    <option value="Sebrae nacional">Sebrae/NA</option>
                    <option value="SEBRAEPREV">SB SEBRAEPREV</option>
                    <option value="SEBRAE Amapá">AP</option>
                    <option value="SEBRAE Acre">AC</option>
                    <option value="SEBRAE Amazonas">AM</option>
                    <option value="SEBRAE Alagoas">AL</option>
                    <option value="SEBRAE Bahia">BA</option>
                    <option value="SEBRAE Ceára">CE</option>
                    <option value="SEBRAE Distrito-Federal">DF</option>
                    <option value="SEBRAE Espirito-Santo">ES</option>
                    <option value="SEBRAE Goiás">GO</option>
                    <option value="SEBRAE Maranhão">MA</option>
                    <option value="SEBRAE Minas-Gerais">MG</option>
                    <option value="SEBRAE Mato-Grosso">MT</option>
                    <option value="SEBRAE Mato-Grosso-do-Sul">MS</option>
                    <option value="SEBRAE Piauí">PI</option>
                    <option value="SEBRAE Pernambuco">PE</option>
                    <option value="SEBRAE Paraiba">PB</option>
                    <option value="SEBRAE Paraná">PR</option>
                    <option value="SEBRAE Rio-Grande-do-Norte">RN</option>
                    <option value="SEBRAE Rio-Grande-do-Sul">RS</option>
                    <option value="SEBRAE Rondônia">RO</option>
                    <option value="SEBRAE Roraima">RR</option>
                    <option value="SEBRAE Rio-de-Janeiro">RJ</option>
                    <option value="SEBRAE São-Paulo">SP</option>
                    <option value="SEBRAE Santa-Catarina">SC</option>
                    <option value="SEBRAE Sergipe">SE</option>
                    <option value="SEBRAE Tocantins">TO</option>
                </select>
            </div><br>
            <div class="container-box">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome">
            </div>
            <br>
            <div class="container-box1">
                <label for="data_nasc">Data de Nascimento:</label>
                <input type="date" id="data_nasc" name="data_nasc">
            </div>
            <br>
            <div class="container-box1">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf">
            </div>
            <br>
            <div class="container-box">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="container-box">
                <div class="cep">
                    <label for="txtCep">Cep:</label>
                    <input type="text" name="txtCep" autocomplete="off" id="txtCep">
                </div>
                <div class="container-box">
                    <div class="cep">
                        <label for="txtRua">Rua:</label>
                        <input type="text" name="txtRua" id="txtRua">
                    </div>
                    <div class="container-box">
                        <div class="cep">
                            <label for="txtBairro">Bairro:</label>
                            <input type="text" name="txtBairro" id="txtBairro">
                        </div>
                        <div class="container-box">
                            <div class="cep">
                                <label for="txtCidade">Cidade:</label>
                                <input type="text" name="txtCidade" id="txtCidade">
                            </div>
                            <div class="boxtelefone">
                                <h3>Telefones: (com DDD)</h3>
                            </div>
                            <div class="boxtel">
                                <label for="residencial">Residencial:</label>
                                <input type="text" name="residencial" id="residencial">
                            </div>
                            <div class="boxtel">
                                <label for="celular">Celular:</label>
                                <input type="text" name="celular" id="celular">
                            </div>
                            <div class="boxtel">
                                <label for="comercial">Comercial:</label>
                                <input type="text" name="comercial" id="comercial">
                            </div>
                            <div class="boxtel">
                                <label for="outros">Outros:</label>
                                <input type="text" name="outros" id="outros">
                            </div>
                            <br>
                            <p>
                            <div class="radio-container">
                                <div id="divContribuicaoRegulamento">
                                    <input type="radio" name="solicito" id="radio" value="boleto_bancario" onclick="suspender('true');"/>
                                    <strong>Solicitação de Boleto Bancário:</strong><br />
                                    <span>Solicito os procedimentos necessários para o recolhimento das contribuições
                                        mensais, através de boleto bancário.</span><br /><br />
                                    <input type="radio" name="solicito" id="radio2" value="debito_conta" onclick="suspender('false');" />
                                    <strong>Solicitação de Débito em Conta:</strong> <span class="aviso">(Apenas Banco
                                        do Brasil e Itaú)</span><br />
                                    <span>Solicito os procedimentos necessários para o recolhimento das contribuições
                                        mensais, através de débito direto da minha conta corrente. Tenho ciência que os
                                        débitos serão efetuados no 5&ordm; dia útil de cada mês.</span><br /><br />
                                    <table id="dados_conta" cellspacing="2" cellpadding="2">
                                        <tr>
                                            <td><strong>Banco</strong></td>
                                            <td><input type="text" name="banco" id="banco" /></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Agência</strong></td>
                                            <td>Número:&nbsp;</td>
                                            <td><input type="text" name="agencia" id="agencia" maxlength="5" /></td>
                                            <td>Código DV:&nbsp;</td>
                                            <td><input type="text" name="codigo_agencia" id="codigo_agencia"
                                                    maxlength="5" /></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Conta Corrente</strong>&nbsp;&nbsp;</td>
                                            <td>Número:&nbsp;</td>
                                            <td><input type="text" name="conta_corrente" id="conta_corrente"
                                                    maxlength="10" /></td>
                                            <td>Código DV:&nbsp;</td>
                                            <td><input type="text" name="codigo_conta" id="codigo_conta"
                                                    maxlength="5" /></td>
                                        </tr>
                                    </table>
                            </div>
                        </div>
                        </p>
                        <br>
                        <div class="input-button">
                            <input type="submit" id="submit" name="submit">
                        </div>
                    </div>
                    <br>
                    <footer class="rodape">
                        &nbsp;Após a validação dos dados, iremos entrar em contato com você! &copy; 2023 | &reg; Todos os
                        direitos reservados.
                    </footer>
                    <script src="assets/js/cep.js"></script>
                    <script src="assets/js/code.jquery.com_jquery-3.7.0.min.js"></script>
                    <script src="assets/js/jquery.mask.js"></script>
                    <script src="assets/js/validaForm.js"></script>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#cpf').mask('000.000.000-00')
                            $('#residencial').mask('(00)00000-0000')
                            $('#celular').mask('(00)00000-0000')
                            $('#comercial').mask('(00)00000-0000')
                            $('#outros').mask('(00)00000-0000')
                            $('#txtCep').mask('00000-000')
                        });
                    </script>
                    <script type="text/javascript">
                        $('#dados_conta').hide();

                            // Adiciona um evento de clique aos rádios
                            $('input[name="solicito"]').click(function () {
                                if ($(this).val() === 'debito_conta') {
                                    $('#dados_conta').show();
                                } else {
                                    $('#dados_conta').hide();
                                    // Limpa os campos de dados bancários quando o rádio "boleto_bancario" for clicado
                                    $('#banco, #agencia, #codigo_agencia, #conta_corrente, #codigo_conta').val('');
                                }
                            });

                            // Restringe a entrada de números nos campos de dados bancários
                            $("#agencia, #codigo_agencia, #conta_corrente, #codigo_conta").keyup(function () {
                                var valor = $(this).val().replace(/[^0-9]+/g, '');
                                $(this).val(valor);
                            });

                    </script>
                    <script>
                        function redirecionar() {
                            // Faz o processamento do formulário, se necessário
                
                            // Redireciona para outra página
                            window.location.href = 'fim.php';
                        }
                    </script>
    </form>
</body>

</html>