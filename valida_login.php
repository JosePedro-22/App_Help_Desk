<?php
    
    session_start();
    
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '12345'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcde'),
    );

    foreach ($usuarios_app as $user){
    
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuarios_autenticado = true;
        }
        
    }
   
    if($usuarios_autenticado){
        echo 'Usuario autenticado';
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

    
?>