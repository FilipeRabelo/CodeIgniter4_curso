<?php

    namespace App\Controllers;

    use CodeIgniter\Controller;

    class Produtos extends Controller {

        public function index(){

            $titulo = "Meus produtos";

            echo View("produtos/index");  // ATRAVES DESSA LINHA DE COMANDO VAMOS ESTAR SETANDO A vIEW CRIADA EM PRODUTOS/INDEX

        }

        public function novo() {

            return "Novo Produto";
        }
    }



?>
