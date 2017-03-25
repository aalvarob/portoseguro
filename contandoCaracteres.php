<?php

$txt_conta = $_POST["txt_contar"];
$cont = 0;

echo "1. Usando a função (strlen): '$txt_conta' contém: ".strlen($txt_conta). " caracteres <br/><br/>";

$outraForma = count_chars($txt_conta,1);

foreach($outraForma as $letra => $frequencia)
	$cont+=$frequencia;
echo "2. Usando a função (count_chars):  '$txt_conta' contém: ".$cont. " caracteres <br/>";
?>