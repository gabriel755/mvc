<?php

    namespace Controller;

    class CadastroController{
        public function __construct(){
            $this->view =  new \View\MainView('cadastro');
        }

        public function executar(){
            $this->view->render(array('titulo' => 'Cadastro'));
        }
    }

?>