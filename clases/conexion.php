<?php
	include('config/config.php');

	switch (ENVIRONMENT) {
		case 'development':
			$_SESSION['link'] = mysql_connect('127.0.0.1','root','');
			if(!$_SESSION['link']){
				if(ERROR == 'True')	header('location: '.BASE_URL.'error/not_connection_db/');
			}else{
				$db = mysql_select_db('altiviaot_web', $_SESSION['link']);
				if (!$db) header('location: '.BASE_URL.'error/not_found_db/');
			}
			break;

		case 'production':
			$_SESSION['link'] = mysql_connect('probandoando.com','probando_web','3014442072');
			if(!$_SESSION['link']){
				if(ERROR == 'True')	header('location: '.BASE_URL.'error/not_connection_db/');
			}else{
				$db = mysql_select_db('probando_home', $_SESSION['link']);
				if (!$db) header('location: '.BASE_URL.'error/not_found_db/');
			}
			break;

		default:
			echo 'No ha sido definido un entorno de trabajo.';
			exit();
			break;
	}
?>