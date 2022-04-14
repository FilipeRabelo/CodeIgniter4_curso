<?php

  namespace App\Controllers;

  use CodeIgniter\Controller;

    class Produtos extends Controller {

      public function index() {

        $titulo = "Meus produtos";  // Vai para a view



        $data["titulo"] = $titulo; // para mandar para o view// é preciso setar 

        echo View("produtos/index", $data);  // ATRAVES DESSA LINHA DE COMANDO VAMOS ESTAR SETANDO A vIEW CRIADA EM PRODUTOS/INDEX

      }

      public function novo() {

        return "Novo Produto";
      }
    }

?>
