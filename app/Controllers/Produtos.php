<?php

    // IMPORTES //

    namespace App\Controllers;
    
    use App\Models\ProdutoModel;
    use CodeIgniter\Controller;

    class Produtos extends Controller {

        public function index() {

            $titulo = "Meus produtos do CodeIgniter";  // Vai para a view // 

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
                    "nome"            => "Computador i5",
                    "descricao"       => "Produto novo",
                    "valor_de_compra" => 1899.99,
                    "valor_de_venda"  => 2899.90,
                    "quantidade"      => 1,
                    "validade"        => "2025-05-12"
                ],

            ];

            $data["titulo"]   = $titulo;   // PROCESSO P ENVIAR O ARRAY P A VIEW // é preciso setar 
            $data["produtos"] = $produtos; // PARA ENVIAR PARA A VIEW

            echo View("produtos/index", $data);  // ATRAVES DESSA LINHA DE COMANDO VAMOS ESTAR SETANDO A vIEW CRIADA EM PRODUTOS/INDEX

        }

        public function novo() {

            return "Novo Produto";

        }

        public function model() {

            $produto_model = new ProdutoModel();  // é preciso importar o use\app\model

            $produto = $produto_model->findAll();

            //dd() FUNÇÃO INTERNA DO CI4 ONDE FACILITA A VISUALIZAÇÃO DE DETERMINADA PARTE OU VARIAVEL PARECIDA COM VAR_DUMP
            dd($produto);   

        }

    }

?>


<!-- funções mais usadas

findAll( ) -> SERVE PARA BUSCAR TODOS OS REGISTROS DO BANCO DE DADOS

first( )   -> TRAZ APENAS UM REGISRO (PRODUTO) ESPEFCIFICO

insert( )  -> INSERIR UM NOVO RESGISTRO

upDate( )  -> ATUALIZAR UM REGISTRO

delete( )  -> DELETAR UM REGISTRO 

-->