<?php
	require_once __DIR__."/../vendor/autoload.php";
	$app = new Silex\Application();

	$app->get("/hello", function() {
		return "Hello friend!";
	});

	$app->get("/goodbye", function() {
		return "Goodbye friend!";
	});

	$app->get("/", function() {
        return
        "<!DOCTYPE html>
        <html>
	        <head>
	            <title>Hello Friend!</title>
	            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
	        </head>
	        <body>
	            <div class='container'>
		            <p>Stuff!</p>
		            <a href='/goodbye'>Goodbye!</a>
	            </div>
	        </body>
        </html>"
        ;
    });

	return $app;
?>