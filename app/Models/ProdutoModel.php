<?php

namespace App\Controllers;

// CONFIGURAÇAO DO MODEL

use CodeIgniter\Model;

    // FUNÇÔES INTERNAS  (metodos)

    // protected para criar as PROPREIDADES DO METODO

    class ProdutoModel extends Model{

        protected $table         = "produtos";   // nome da tabela
        protected $primeryKey    = "id_produto";

        protected $allowedFields = [    // allowedFields -> Campos permitidos
        // ARRAY PARA COLOCAR TODAS AS COLUNAS DAS MIGRATES
            "id_produtos",
            "nome",
            "descricao",
            "valor_de_compra",
            "valor_de_venda",
            "quantidade",
            "validade"
        ];

        protected $useTimestamps = true;         // useTimestamps -> usar carimbos de tempos
        protected $createdField  = "created_at"; // campos permitidos = criado em
        protected $updateField   = "update_at" ; // atualizae em
        protected $deleteField   = "delete_at" ; // deletar em

    }
    
?>




<!-- 
// class ProdutoModel extends Model{

//   // METODO PARA SER UTILIZADO FUTURAMENTE NO PROGRAMA

//   public function cadastraRegistro() { 

//     return "Modulo responsavel por cadastrar todos os registros do produto ";

//   }

// } -->


<!--//* MODEL -> Seria a parte da modelagem de dados e regras de negócio.
    // É nela que vão constar as classes
    // as consultas ao banco de dados e as regras de negócio do sistema.
    // TERA MAIS METODOS AQUI NESTE MODEL
    // VAMOS MOSTRAR O BANCO DE DADOS
    // ESTE MODULO VAI INSERIR OS REGISTROS E TERA PERMISAO NO NOSSO BANCO DE DADOS
  -->