<?php

     // IMPORTES //

    namespace App\Controllers;

    use App\Models\ClienteModel;  // IMPORT DO MODEL // 

    use CodeIgniter\Controller;

    class Clientes extends Controller{

        public function index(){

            $cliente_model = new ClienteModel();   // instaciando, trazendo o modolo aqui pra dentro

            $clientes = $cliente_model->findALl(); // estou pegando e retornando todos os regsitro da minha tabela clientes

            $data["clientes"] = $clientes;

            echo View("clientes/index", $data);     

        }

    }

?>