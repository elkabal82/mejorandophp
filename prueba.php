<?php 
	//require llama a las paginas que ocupamos
	//tambien podemos usar include, la diferencia
	//es que include te muestra la vista con los
	//errores y require no te muestra la vista
	require 'config.php';
	require 'helpers.php';

	//declaramos algunas variables
	$confidencial="wow such ksdjfks";
	$language = "PHP";
	$titulo='Mejorando php'; 

	//llamamos a la funcion view usamos la opcion 
	//compact para no tener que esscribir esto:
	//view('view', ['language'=>$language, 'titulo'=>$titulo])
	view('view', compact('language','titulo'));