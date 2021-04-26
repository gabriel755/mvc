<?php

    namespace Controllers;

    class ContatoController extends Controller
    {
        
        public function executar(){
            if(isset($_POST['acao'])){
                \Models\ContatoModel::enviarForm();
               echo '<script>location.href="'.'contato/sucesso"</script>';
               die();
            }
            
            \Router::rota('contato/sucesso', function(){
                $this->view = new \Views\MainView('contato-sucesso');
                $this->view->render(array('titulo' => 'Página Contato'));
            });
            \Router::rota('contato', function(){
                $this->view = new \Views\MainView('contato');
                $this->view->render(array('titulo' => 'Página Contato'));
            });
            
        }
    }

?>