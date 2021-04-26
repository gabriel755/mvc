<?php

namespace Models;

class ContatoModel 
{

    public static function enviarForm(){
        $mail = new \Email('smtp.gmail.com', 'gabrielfiamete@gmail.com', '1996160717', 'Gabriel');
        $mail->addAdress($_POST['mail'], $_POST['nome']);
        $mail->formatarEmail(array('assunto' => 'Mensagem do Site', 'corpo' => $_POST['mensagem']));
        $mail->enviarEmail();
    }
}

?> 