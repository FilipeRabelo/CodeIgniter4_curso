<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

#AQUI FICARA TODAS AS FUNÇÕES NATIVAS RESPONSAVEIS PELAS INSERÇÕES NO BD   
class MinhaPrimeiraSeed extends Seeder
{
    public function run()
    {
        $this->db->table('produtos')->insert([   ## $THIS PARA CHAMAR O METODO

            'nome'            => 'Notebook',
            'descricao'       => 'Descrição do produto para nossa primeira Seed',
            'valor_de_compra' => 1299, 90,
            'valor_de_venda'  => 1599, 99,
            'quantidade'      => 9,
            'validade'        => '',

        ]);
    }
}
