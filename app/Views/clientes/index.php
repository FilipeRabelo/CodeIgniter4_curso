<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View de CLientes</title>

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
        <h1>Meus Clientes</h1>

        <table border="1" width="100%">
            <thead class="head_table">
                <tr>
                    <th>Código             </th> 
                    <th>Nome               </th>
                    <th>CPf                </th>
                    <th>Data de Nascimento </th>
                    <th>Telefone           </th>
                    <th>Enderesço          </th>
                    <th>Limite de crédito  </th>
                    <th>Dia de Pagamento   </th>
                </tr>
            </thead>

            <!--UTILIZAR O FOREACH PARA MOSTRAR OS DADOS NA VIEW -->
            <tbody>
                <?php foreach ($clientes as $cliente): ?><!--foreach para percorrer todo o array -->

                    <tr>
                        <td><?= $cliente["id_cliente"]         ?></td>
                        <td><?= $cliente["nome"]               ?></td>
                        <td><?= $cliente["CPF"]                ?></td>
                        <td><?= $cliente["data_de_nascimento"] ?></td>
                        <td><?= $cliente["telefone"]           ?></td>
                        <td><?= $cliente["enderesco"]          ?></td>
                        <td><?= $cliente["limite_de_credito"]  ?></td>
                        <td><?= $cliente["dia_de_pagamento"]   ?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

    </body>

</html>