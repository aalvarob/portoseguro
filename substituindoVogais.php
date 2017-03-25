<?php

$txt_digitado = $_POST["txt_digitado"];

echo "Palavra digitada: $txt_digitado <br/>";

$troca = array("a"=>"*", "á"=>"*", "ã"=>"*", "à"=>"*",
			   			"e"=>"*", "é"=>"*", "ê"=>"*",
			   			"i"=>"*", "í"=>"*",
			   			"o"=>"*", "ó"=>"*", "ô"=>"*",
			   			"ú"=>"*", "u"=>"*");

echo "Palavra modificada: " .strtr(strtolower($txt_digitado),$troca);
?>