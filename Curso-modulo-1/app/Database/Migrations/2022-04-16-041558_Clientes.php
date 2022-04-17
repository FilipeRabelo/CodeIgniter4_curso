<?php

    namespace App\Database\Migrations;

    use CodeIgniter\Database\Migration;

    //TABELA CLIENTES COM SUAS COLUNAS //
    
    class Clientes extends Migration{

        public function up() {

            $this->forge->addField ([

                'id_cliente'         => [
                    'type'           => "INT",
                    'constraint'     => 9,        # CONTRAINT -> TAMANHO DO NUMERO
                    'usigned'        => true,      # USADO PARA INCREMENTAR
                    'auto_increment' => true,
                ],

                'nome'               => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 128         # Caractere maximos = no curso de banco de dados 
                ],

                'data_de_nascimento' => [
                    'type'           => "DATE",
                ],

                'CPF'                => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 11          # PARA LIMITAR O NUMERO DO CPF EM 11
                ],

                'telefone'           => [
                    'type'           => "VARCHAR",
                    'constraint'     => 11          # PARA GUARDAR O SOEMENTE OS NUMEROS
                ],

                'enderesco'          => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 128
                ],

                'limite_de_credito'  => [
                    'type'           => 'DOUBLE'    # UM VALOR FLUTUANTE, REAL
                ],

                'dia_de_pagamento'   => [
                    'type'           => 'INT'
                ],

                'created_at'         => [
                    'type'           => "DATETIME"
                ],

                'updated_at'         => [
                    'type'           => "DATETIME"       # ----> SERVE PARA REGISTAR TODA VEZ Q ALTERAR OU EXCLUIR OU CRIAR ALGO NO BANCO DE DADOS
                ],                                       # DATA HORA DIA ETC...

                'delete_at'          => [
                    'type'           => "DATETIME"
                ],

            ]);

            //PRECISA ALTERAR AQUI PARA CLIENTES
            $this->forge->addKey('id_cliente', true);  #INDICANDO QUAL VAI SER A CHAVE DA MINHA TABELA e TRUE PARA FALAR Q ESTA ATIVO
            $this->forge->createTable('clientes');
        
        }

        public function down()  {
            
            $this->forge->dropTable("clientes");

        }
    }

?>
