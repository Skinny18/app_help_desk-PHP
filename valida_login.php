<?php

    //variavel que verifica se a autenticacao foi realizada
    $usuario_autenticado = false;

    //usuários do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
    );
    /*
    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';
    */

    foreach($usuarios_app as $user){
        echo 'Usuário App:' . $user['email'] . '/' . $user['senha'];
        echo '<br/>';
        echo 'Usuário form: ' . $_POST['email'] . '/' . $_POST['senha'];

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        };

        if($usuario_autenticado){
            echo 'Usuário autenticado';
        }else{
            echo 'Erro na autenticacao do usuário';
        }

        $user['email'];
        $user['senha'];
        echo '<hr>';

    }

?>