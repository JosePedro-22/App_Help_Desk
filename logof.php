<?php

    session_start();
/*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    // remover indices do array de sessao 
    //unset()
    unset($_SESSION['x']);

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    */
    session_destroy();
    header('location: index.php');
    
    //destruir a variavel de sessao
    //sesseion_destroy()
?>