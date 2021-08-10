<?php
    #https://www.php.net/manual/pt_BR/language.variables.variable.php
    
    include "nome_completo.php";

    echo "{$nome} {$Joao}. <br>";
    echo "{$nome} {$$nome} {$$$nome}. <br>";
    echo "${nome} ${$nome} ${$$nome}. <br>";
    echo "<br>";

    //Resolução de Ambiguidade para Arrays
    echo "<pre>";
    
    #----------------

    //${$array[0]} = 'c';
    print_r($a);

    #----------------

    echo "</pre>";

    echo "<pre>";

    //${$array}[0] = 'd';
    print_r($$array);

    echo "</pre>";
?>