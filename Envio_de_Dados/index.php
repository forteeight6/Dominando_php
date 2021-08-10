<?php
    $_GET['SOMA']= $_GET['A'] + $_GET['B'];
    header("Location: envio_de_dados_v1.php?RESULTADO={$_GET['SOMA']}"); 
?>