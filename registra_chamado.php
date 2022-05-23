<?php

    echo '<prev>';
    print_r($_POST);
    echo '</prev>';
    
    //estamos trabalhando na montagem do texto
    $titulo = str_replace('#','-', $_POST['titulo']);
    $categoria = str_replace('#','-', $_POST['categoria']);
    $descricao = str_replace('#','-', $_POST['descricao']);

    $texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    $arquivo = fopen('arquivo.hd', 'a');

    fwrite($arquivo, $texto);


    fclose($arquivo);

    //echo $texto;

?>

