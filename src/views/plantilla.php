<?php
	
	include('src/views/components/header.php');

	$page = isset($_GET['page']) ? $_GET['page'] : 'inicio';

	// Construir la ruta al archivo de la página solicitada
	$pagePath = 'src/views/pages/' . $page . '.php';

	if (file_exists($pagePath)) {
    // Incluir la página solicitada
    	include($pagePath);
	} else {
	    // Página no encontrada
	    echo 'Página no encontrada';
	}

	include('src/views/components/footer.php');
?>