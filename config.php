<?php 

spl_autoload_register(function($class_name){

	$filename = "class".DIRECTORY_SEPARATOR.$class_name.".php"; //aqui está o caminho p/ acessar a classe que está em outro diretório

	if (file_exists(($filename))){
		require_once($filename);
	}
});

 ?>