<?php

	require '/helpers.php';

	ini_set('display_errors', 1);
	ini_set('error_reporting', E_ALL);

	ob_start();

	require 'vendor/autoload.php';

	if ( !file_exists('.env') )
	{
		$env_file = fopen( $_SERVER['DOCUMENT_ROOT'] . '/.env', 'wb' );
		fwrite( $env_file, file_get_contents('.env.example') );
		fclose( $env_file );
	}