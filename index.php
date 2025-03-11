<?php
/* Este programa imprime a variável $text, do tipo string, que contém uma concatenação das variáveis 
$cidade (em negrito), $dia, $mes e $ano.*/
$cidade = "Bauru"; 
$dia = 6;
$mes = "Abril";
$ano = 2025;
$text = "<b>$cidade</b>, $dia de $mes de $ano";
echo "$text";
?>