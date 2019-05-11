<?php

    $usuario = array('Matheus', 31);

    //print $usuario[0];
    // print_r($usuario);
    // var_dump($usuario);

    // short syntax
    $usuarios_info = array( "usuario1" => "Pedro" ,  "usuario2" => "Lucas", "usuario3" => "Marcos");
    foreach ($usuarios_info as $elemento => $nome) {
        print 'O nome do '. $elemento . ' é ' . $nome .'<br>';
    }

    //Associative Array

    // $usuario2 = array(
    //     'nome' => 'Matheus',
    //     'idade' =>  21
    
    // );

    // print $usuario2['nome'] . ' tem ' . $usuario2['idade'] . ' anos ' ;



    