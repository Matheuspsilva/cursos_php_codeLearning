<?php

//Estrutura de controle condicional

$nome = 'Formação php1';

// if($nome == 'Formação php' ){
//     print 'Curso ' . $nome;
// }else if($nome == 'Formação php1'){
//     print 'Formação php1 ';
// }else{
//     print 'Curso não é formação php';
// }

switch ($nome) {
    case 'Formação php':
        print 'Curso ' . $nome;
        break;
    case 'Formação php1':
        print 'Formação php1 ';
        break;
    
    default:
        print 'Curso não é formação php';
        break;
}