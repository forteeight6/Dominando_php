<?php

    echo "<form method='GET'>";
    echo "<input type='number' name='numero1'>";
    echo "<input type='number' name='numero2'>";
    echo "<button name='ok' value=1 type='submit'>Enviar</button>";
    echo "</form>";

    //O @ Serve para suprimir erros;
    
    if(@$_GET['ok'] != 0)
    {
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        header("Location: index.php?A={$numero1}&B={$numero2}"); 
        
    }

    echo "<br>{$_GET['RESULTADO']}<br>"
?>