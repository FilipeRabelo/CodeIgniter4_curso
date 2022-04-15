<?php

  namespace App\Controllers;

  use CodeIgniter\Controller;

    class Produtos extends Controller {

      public function index() {

        $titulo = "Meus produtos";  // Vai para a view // 

        $produtos = [               // ARRAY COM OS PRODUTOS // 
          
          [
            "nome"            => "Notebook",
            "descricao"       => "Produto usado",
            "valor_de_compra" => 899.99,
            "valor_de_venda"  => 1399.90,
            "quantidade"      => 11,
            "validade"        => ""
          ],

          [
            "nome"            => "Computador I5",
            "descricao"       => "Produto novo",
            "valor_de_compra" => 1899.99,
            "valor_de_venda"  => 2899.90,
            "quantidade"      => 1,
            "validade"        => ""
          ],

        ];

        $data["titulo"]   = $titulo;   // PROCESSO P ENVIAR O ARRAY P A VIEW // é preciso setar 
        $data["produtos"] = $produtos; // PARA ENVIAR PARA A VIEW

        echo View("produtos/index", $data);  // ATRAVES DESSA LINHA DE COMANDO VAMOS ESTAR SETANDO A vIEW CRIADA EM PRODUTOS/INDEX
        
      }

      public function novo() {

        return "Novo Produto";

      }

    }

?>
