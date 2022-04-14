<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{

   public function up()
   {      #METODO CRIADO QUE VAI SER CHAMADO PARA (CRIAR) A MIGRATION,
      #TODA A PARTE DE CRIACAO DA NOSSA ESTRURTURA FO BD VAMOS COLCOAR AQUI DA TABELA PRODUTOS POR EX

      $this->forge->addField([            # CRIANDO AS TABELAS #

         'id_produto'        => [
            'type'           => "INT",
            'contraint'      => 9,   # CONTRAINT -> TAMANHO DO NUMERO
            'usigned'        => true,   # USADO PARA INCREMENTAR
            'auto_increment' => true,
         ],

         'nome'          => [
            'type'       => 'VARCHAR',
            'constraint' => 128     # Caractere maximos = no curso de banco de dados 
         ],

         'descricao'  => [
            'type'    => 'TEXT'    # NAO PRECISA DE CONSTRAINT POIS NAO HA LIMITE DE CARACTERE AQUI
         ],

         'valor_de_compra' => [
            'type'         => 'DOUBLE'  # DOUBLEPQ VAI SER UM VALOR
         ],

         'valor_de_venda' => [
            'type'        => 'DOUBLE'
         ],

         'quantidade' => [
            'type'    => "INT"
         ],

         'validade'   => [   #CASO ESSE PRODUTO TENHA UMA VALIDADE 
            'type'    => 'DATE'
         ]


      ]);
   }

   public function down()
   {   # QUANDO QUISER APAGAR ESSA TABELA AUTOMATICAMENTE EU VOU COLCOAR A ESTRUTURA AQUI DENTRO


      //
   }
}
