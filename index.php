<?php

	/*
	*el frontend controler se encarga de configurar
	*nuestra aplicacion
	*/
	require 'config.php';
	require 'helpers.php';

	/*
	*LLamar a los controladore individuales
	*print_r() funciona igual como var_dump()
	*val_dump($_GET);
	*/

	

	controller($_GET['url']);