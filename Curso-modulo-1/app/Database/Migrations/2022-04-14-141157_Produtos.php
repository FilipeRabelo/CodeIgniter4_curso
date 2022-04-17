<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

  class Produtos extends Migration {  // TABELA PRODUTOS //

    public function up() {  

      #METODO CRIADO QUE VAI SER CHAMADO PARA (CRIAR) A MIGRATION,
      #TODA A PARTE DE CRIACAO DA NOSSA ESTRURTURA DO BD VAMOS COLOCAR AQUI DA TABELA PRODUTOS POR EX


      // INICIO ESTRUTURA DA TABELA COM COLUNAS

      // PARA CRIAR AS TABELAS addField() -> php spark migrates
      $this->forge->addField([

        'id_produto'       => [
          'type'           => "INT",
          'constraint'      => 9,      # CONSTRAINT -> TAMANHO DO NUMERO
          'usigned'        => true,   # USADO PARA INCREMENTAR
          'auto_increment' => true,
        ],

        'nome'             => [
          'type'           => 'VARCHAR',
          'constraint'     => 128         # Caractere maximos = no curso de banco de dados 
        ],

        'descricao'        => [
          'type'           => 'TEXT'         # NAO PRECISA DE CONSTRAINT POIS NAO HA LIMITE DE CARACTERE AQUI
        ],

        'valor_de_compra'  => [
          'type'           => 'INT'  # DOUBLE PQ VAI SER UM VALOR
        ],

        'valor_de_venda'   => [
          'type'           => 'INT'
        ],

        'quantidade'       => [
          'type'           => "INT"
        ],

        'validade'         => [
          'type'           => 'DATE'         #CASO ESSE PRODUTO TENHA UMA VALIDADE 
        ],

        'created_at'       => [
          'type'           => "DATETIME"
        ],

        'updated_at'       => [
          'type'           => "DATETIME"       # ----> SERVE PARA REGISTAR TODA VEZ Q ALTERAR OU EXCLUIR OU CRIAR ALGO NO BANCO DE DADOS
        ],                            # DATA HORA DIA ETC...

        'delete_at'        => [
          'type'           => "DATETIME"
        ],

      ]);

      $this->forge->addKey('id_produto', true);  #INDICANDO QUAL VAI SER A CHAVE DA MINHA TABELA e TRUE PARA FALAR Q ESTA ATIVO
      $this->forge->createTable('produtos');     # CODIGO PARA CRIAR REALMENTE A TABELA

      #TODAS VEZ Q EU RPDAR ESSA MIGRATE AUTOMATICAMENTRE ELE VAI VIR E CRIAR A ESTRUTURA DESSA MINAH TABELA

    }  // FIM DA CRIACAO DA TABELA


    //  PARA APAGAR (remover) A TABELA up(); php spark migrates:rollback

    public function down() {   # QUANDO QUISER APAGAR ESSA TABELA AUTOMATICAMENTE EU VOU COLOCOAR A ESTRUTURA AQUI DENTRO

      $this->forge->dropTable('produtos');

    }

  }

?>