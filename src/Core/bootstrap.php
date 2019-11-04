<?php

	require '/helpers.php';
	require 'vendor/autoload.php';

	ini_set('display_errors', 1);
	ini_set('error_reporting', E_ALL);

	ob_start();

	if ( !file_exists('.env') )
	{
		$env_file = fopen( $_SERVER['DOCUMENT_ROOT'] . '/.env', 'wb' );
		fwrite( $env_file, file_get_contents('.env.example') );
		fclose( $env_file );
	}

	use DebugBar\StandardDebugBar;

	if ( env('APP_DEBUG') )
	{
		$debugbar 		   = new StandardDebugBar();
		$debugbar_Renderer = $debugbar->getJavascriptRenderer();
		$debugbar["messages"]->addMessage("hello world!");
	}


	// $autoload_array = array();