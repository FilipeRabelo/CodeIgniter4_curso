<?php

// CONFIGURAÇAO DO MODEL

namespace App\Models;

use CodeIgniter\Model;

    // FUNÇÔES INTERNAS  (metodos)

    // protected para criar as PROPRIEDADES DO METODO

    class ClienteModel extends Model{

        protected $table         = "clientes";   // nome da tabela
        protected $primeryKey    = "id_clientes";
        protected $allowedFields = [             // allowedFields -> Campos permitidos
        // ARRAY PARA COLOCAR TODAS AS COLUNAS DAS MIGRATES
            "id_clientes",
            "nome",
            "data_de_nascimento",
            "CPF",
            "telefone",
            "endereco",
            "limite_de_credito",
            "dia_de_pagamento"
        ];

        //TimesTamps toda ves q for feito alguma alteracao vai ficar gravado no banco
        protected $useTimestamps = true;         // useTimestamps -> usar carimbos de tempos
        protected $createdField  = "created_at"; // campos permitidos = criado em
        protected $updatedField  = "updated_at"; // atualizae em
        protected $deleteField   = "delete_at" ; // deletar em
                                   
    }
