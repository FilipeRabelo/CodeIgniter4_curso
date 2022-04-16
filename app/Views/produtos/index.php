<!-- ESTA É A VIEW -->

<!-- VIEW -> É a parte estética, a interface. 
É a "tela" onde os dados e os links serão apresentados ao usuário.
De grosso modo, um arquivo somente com códigos HTML e CSS 
(e se tiver, o Javascript também).  -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: aquamarine;
        }

        .head_table {
            color: blue;
            font-weight: bold;
        }

        .head_table th:hover {
            color: red;
            font-weight: bold;
            cursor: pointer;
        }

        .sem-validade{
            color: red;
            font-weight: bold;
        }

    </style>

</head>

<body>

    <table border="1" width="100%">

        <!-- CABEÇALHO DA TABELA -->
        <thead class="head_table">
            <tr>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Valor de Compra</th>
                <th>Valor de Venda</th>
                <th>Quantidade</th>
                <th>Validade</th>
            </tr>
        </thead>

        <!-- CORPO DA TABELA -->
        <!-- NAO VAMOS ESCREVER, VAMOS UTILIZAR O FOR PARA MOSTRAR OS PRODUTOS 
                QUE NOS ESTAMOS RECUPERANDO DO NOSSO (CONTROLLER). -->
        <tbody>

                <!-- VARIAVEL RECUPERADA DO (CONTROLLER) -->
            <?php foreach ($produtos as $produto) : ?>
                <tr>

                    <td><?= $produto["nome"]            ?></td>
                    <td><?= $produto["descricao"]       ?></td>
                    <td><?= $produto["valor_de_compra"] ?></td>
                    <td><?= $produto["valor_de_venda"]  ?></td>
                    <td><?= $produto["quantidade"]      ?></td>
                    
                    <?php if($produto["validade"] == ""): ?>
                        <td class="sem-validade">Produto sem Validade!</td>
                    <?php else: ?>
                        <td><?= $produto["validade"]    ?></td>     
                    <?php endif;?>                

                </tr>
            <?php endforeach; ?>

        </tbody>

    </table>

</body>

</html>