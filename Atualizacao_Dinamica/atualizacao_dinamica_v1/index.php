<?php

    echo "<form method='GET'>";
    echo "<button type='submit' name='botao' value='pagina1'>Botao1</button>";
    echo "<button type='submit' name='botao' value='pagina2'>Botao2</button>";
    echo "<button type='submit' name='botao' value='pagina3'>Botao3</button>";
    echo "</form>";

    include @$_GET['botao'].".php";

?>