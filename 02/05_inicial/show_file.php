<?php

use function PHPSTORM_META\type;

define('__IMG', 1);
define('__PDF', 2);

$type = isset($_GET['type']) ? $_GET['type'] : '';
$download = isset($_GET['download']) ? true : false;

switch ($type) {
	case __IMG:
		header('content-type:image/jpeg');
		$file = 'valencia.jpg';
		if ($download) 
		{
			header('Content-type: application/octet-stream');
			header('Content-Disposition: inline; filename=imagen.jpg');
		}
		break;
	case __PDF:
		header('content-type:application/pdf');
		$file = 'generic.pdf';
		if ($download) 
		{
			header('Content-type: application/octet-stream');
			header('Content-Disposition: inline; filename=pdf_generico.pdf');
		}
		break;
	
}
$cont = file_get_contents($file);
echo $cont;