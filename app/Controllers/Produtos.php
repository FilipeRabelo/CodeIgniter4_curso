<?php

    // IMPORTES //

    namespace App\Controllers;
    
    use App\Models\ProdutoModel;   // é preciso importar para utlizar os metodos do controller

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

                [
                    "nome"            => "Teclado",
                    "descricao"       => "Produto novo",
                    "valor_de_compra" => 99.90,
                    "valor_de_venda"  => 299.90,
                    "quantidade"      => 121,
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


        //METODOS DO CONRTOLLER
        public function model() {
            // $produto_model = new ProdutoModel() É OBRIGATORIO TER ESSA INSTACIA //
            // é preciso importar o use\app\model //

        ////////////////////////////////////////////////

            # findAll( ) -> Exemplo PARA BUSCAR TODOS OS REGISTRO #

            // $produto_model = new ProdutoModel();              

            // $produtos = $produto_model->findAll(); //PARA TARZER TODOS OS PRODUTOS
            // dd($produtos); 

        /////////////////////////////////////////////////

            # first( ) -> Exemplo PARA BUSCAR UM REGISTRO PELO id  #

            // $produto_model = new ProdutoModel()

            // $produto = $produto_model->where("id_produto", 1)->first();
            // dd($produto);

        /////////////////////////////////////////////////

            # insert( ) -> Exemplo PARA INSERIR UM REGISTRO #

            // $produto_model = new ProdutoModel();
           
            // $produto_model->insert([     // NESSE ARRAY VAI TER AS INFORMAÇÕES REFERENTES AO PRODUTO Q QUEREMOS CADASTRAR               
            //     "nome"            => "Iphone x",
            //     "descricao"       => "Produto Novo",
            //     "valor_de_compra" => 1999.20,
            //     "valor_de_venda"  => 3900.66,
            //     "quantidade"      => 106,
            //     "validade"        => ""
            // ]);

            // dd();

        /////////////////////////////////////////////////

            # upDate( ) -> Exemplo PARA ALTERAR UM REGISTRO #

            // $produto_model = new ProdutoModel();

            // $dados = [
            //     "nome"            => "Sansug 15",
            //     "descricao"       => "Produto Usado",
            //     "valor_de_compra" => 1999.20,
            //     "valor_de_venda"  => 2040.66,
            //     "quantidade"      => 140,
            //     "validad"         => ""
            // ];

            // $produto_model
            //     ->where("id_produto", 7)
            //     ->set($dados)
            //     ->update();

            // dd();

        /////////////////////////////////////////////////

            # delete( ) -> EXEMPLO PARA DELETAR UM REGISTRO #
                
            // $produto_model = new ProdutoModel();

            // $produto_model
            //     ->where("id_produto", 6)
            //     ->delete();

            // dd();


            // dd() FUNÇÃO INTERNA DO CI4 ONDE FACILITA A VISUALIZAÇÃO DE 
            //      DETERMINADA PARTE OU VARIAVEL PARECIDA COM( VAR_DUMP )           

        }

    }

?>


<!-- funções ->  METODOS INTERNOS MAIS USADOS

findAll( ) -> SERVE PARA BUSCAR TODOS OS REGISTROS DO BANCO DE DADOS

first( )   -> TRAZ APENAS UM REGISRO (PRODUTO) ESPEFCIFICO

insert( )  -> INSERIR UM NOVO RESGISTRO

upDate( )  -> ATUALIZAR UM REGISTRO

delete( )  -> DELETAR UM REGISTRO 

-->