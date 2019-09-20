<?php
/*
	$arquivo = "contador.txt";
	$contador = 0;
	$fp = fopen($arquivo,"r");
	$linha = 0;
	$ultimoip = "";

	while (!feof($fp)) {
		++$linha;
		// Pega o contador gravado na linha 1
		if ($linha == 1) {
			$contador = fgets($fp). '<br />';
		}
		// Pega o Ip gravado na linha 2 Linha 2
		if ($linha == 2) {
			$ultimoip = fgets($fp). '<br />';
		}
	}
	// Fecha o arquivo
	fclose($fp);

	// Pega o IP atual vo visitante
	$ip = $_SERVER["REMOTE_ADDR"];

	if ($ip <> $ultimoip) {
		// Incrementa o contador
		++$contador;
		echo $contador;
		$fp = fopen($arquivo,"r+");

		while (!feof($fp)) {
			++$linha;

			// Pega o contador gravado na linha 1
			if ($linha == 1) {
				fwrite($fp, $contador);
			}
			// Pega o Ip gravado na linha 2 Linha 2
			if ($linha == 2) {
				fwrite($fp, $ip);
			}
		}
		fclose($fp);
	}


	echo "\n Esta página foi visitada $contador vezes";

	//$ip = getenv("REMOTE_ADDR"); //linha que captura o ip do usuario.
	echo "\n\n\n seu ip é:---> ".inet_pton ($ip);
*/
function ini_put_contents($inifile, $content)
{
	$linhas = '';
	foreach ($content as $key => $content)
	{
		$linhas .= "{$key}={$content}".chr(13);
	}
	file_put_contents($inifile, $linhas);
}
// Pega as informações do ultimo acesso
$ini_array = parse_ini_file("contador.ini");
$ultimoip = $ini_array["ip"];
$contador = $ini_array["visitas"];

//$ip = session_id();

// Pega o IP atual do visitante
$ip = $_SERVER["REMOTE_ADDR"];

if ($ip <> $ultimoip) {
	// Incrementa o contador
	++$contador;
	$ini_array["visitas"] = $contador;
	$ini_array["ip"] = $ip;

	ini_put_contents('contador.ini', $ini_array);
}

//echo "Esta página foi visitada $contador vezes."."<br />";
?>