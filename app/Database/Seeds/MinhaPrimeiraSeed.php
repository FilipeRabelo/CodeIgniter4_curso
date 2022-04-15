<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

#AQUI FICARA TODAS AS FUNÇÕES NATIVAS RESPONSAVEIS PELAS INSERÇÕES (insert) NO BD   
class MinhaPrimeiraSeed extends Seeder{

  public function run(){

    $this->db->table('produtos')->insert([   ## $THIS PARA CHAMAR O METODO

      'nome'            => 'Notebook',
      'descricao'       => 'Descrição do produto para nossa primeira Seed',
      'valor_de_compra' => 1299.90,
      'valor_de_venda'  => 1599.99,
      'quantidade'      => 9,
      'validade'        => '2025-05-12',

    ]);

  }

}

// SEEDER -> Um seeder é uma classe especial utilizada para gerar e inserir dados de amostra (seeds) em um banco de dados
// Insercao automatica de resgitro no banco de dados apos rodar um comando na linha de comando CDM
// representação de todos os registros que eu quero que já estejam no sistema no ato da instalação dele.
// E eu só preciso digitar um comando e automaticamente esses registros vão ser inseridos.
// CRIA UM SEED NA TABELA CRIADA NO BD

// cmd -> php spark make:seeder		   // para criar a seeder
// class name: Ex: minha_primeira_seeder  // para criar um nome para a seeder
// php spark db:seed MinhaPrimeiraSeed    // para rodar a seed
