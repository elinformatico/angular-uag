<?php
	
	if(isset($_REQUEST['url']) && $_REQUEST['url'] != ''){

		$webUrl = $_REQUEST['url'];

		if(!strstr($webUrl, 'http://') && !strstr($webUrl, 'https://')){
			$webUrl = 'http://' . $_REQUEST['url'];
		}

		$html = file_get_contents( $webUrl );

		# Esta expresión regular maneja más formatos de direcciones de correo electrónico como a+b@google.com.sg, y el i hace que sea sensible a mayúsculas
		$patronCorreos = '/[a-z0-9_\-\+]+@[a-z0-9\-]+\.([a-z]{2,3})(?:\.[a-z]{2})?/i';

		// preg_match_all devuelve una matriz asociativa
		preg_match_all($patronCorreos, $html, $correos);

		# los datos que desea está en $correos[0], lo descarga con var_export() para verlo
		# var_export($correos[0]);

		if(isset($correos[0]) && count($correos[0]) > 0){

			echo json_encode(['status' => 'success', 'correos' => $correos[0], 'msg' => 'Correos obtenidos satisfactoriamente']);
		} else {
			echo json_encode(['status' => 'error', 'msg' => "No se encontraron correos en la dirección: {$webUrl}"]);
		}

	} else {
		echo json_encode(['status' => 'error', 'msg' => 'No se recibio el parametro de correo']);
	}
