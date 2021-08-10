<?php
    //https://pt.stackoverflow.com/questions/15286/o-que-usar-require-include-require-once-include-once#:~:text=A%20diferen%C3%A7a%20entre%20include%20e,ele%20j%C3%A1%20foi%20inclu%C3%ADdo%20antes.

    $nome = "Joao";
    $$nome = "Pedro";
    $$$nome = "Silva";
    
    $array = ['a', 'b'];
    
    #-------------------------------
    //Transforma 'a' na variavel $a
    ${$array[0]} = 'c';
    #-------------------------------

    //Ainda não entendi essa estrutura ;/
    ${$array}[0] = 'd';
    
    
?>