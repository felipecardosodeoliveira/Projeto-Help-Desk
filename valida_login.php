<?php

// USUÁRIOS DO SISTEMA
$usuarios_app = array(
    array('login' => 'admin@teste.com.br', 'senha' => '1234'),
    array('login' => 'admin@teste.com.br', 'senha' => '1234')
);

// VERIFICA SE O USUÁRIO FOI AUTENTICADO
$usuario_autenticado = false;

foreach($usuarios_app as $user) {

    if ($user['login'] == $_POST['login'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }

}

if ($usuario_autenticado) {

    session_start();
    $_SESSION['login']  =  $_POST['login'];
    $_SESSION['senha']  =  $_POST['senha'];

    header('Location: home.php');
    die;
    
} else {

    header('Location: index.php?login=erro');

}



