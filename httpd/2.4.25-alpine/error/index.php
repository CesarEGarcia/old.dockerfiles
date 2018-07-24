<?php

#	$aLineas = array ();

#	$path = explode ('/', $_SERVER ['DOCUMENT_ROOT']);
#	array_pop ($path);
#	array_push ($path, 'logs');
#	array_push ($path, 'php.log');

#	$path = implode ('/', $path);
#	exec ("tail -n 150 $path ", $aLineas);


	$plain = false;
	$n     = 0;
	$clear = false;
	if (isset ($_GET) && isset ($_GET ['plain'])) $plain = true;
	if (isset ($_GET) && isset ($_GET ['n'])) $n = (int) $_GET ['n'];
	if (isset ($_GET) && isset ($_GET ['clear'])) $clear = true;
	$n = $n ?: 150;

	if ($clear) {
		exec ("echo > /var/log/servidor/php.log");
		header ('location: http://error');
		exit ();
	}

	exec ("tail -n $n /var/log/servidor/php.log", $aLineas);

	if ($plain) header ('Content-type: text/plain');

	$l = count ($aLineas);
	for ($i = 0; $i < $l; $i++) {
		echo $aLineas [$i];
		if ($plain) echo "\n";
		else echo '<br>';
	}
	echo '<script>window.scrollTo(0,document.body.scrollHeight);</script>';
?>
