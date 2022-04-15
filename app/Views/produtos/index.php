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
      body{
        background-color: aquamarine;
      }
    </style>

  </head>

  <body>

    <table>

      <!-- CABECALHO DA TABELA -->
        <thead>
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
      <!-- NAO VAMOS ESCREVER VAMOS UTILIZAR O FOR PARA MOSTRAR OS PRODUTOS 
           QUE NOS ESTAMOS RECUPERANDO DO NOSSO CONTROLLER. -->
        <tbody>

            <?php foreach($produtos as $produto):  ?>  <!-- VARIAVEL RECUPERADA DO CONTROLLER -->
                <tr>
                    <td><?= $produto["nome"] ?></td>
                </tr>
            <?php endforeach;  ?>

        </tbody>

    </table>
    
  </body>

</html>