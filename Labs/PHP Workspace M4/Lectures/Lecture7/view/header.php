<?php
	spl_autoload_register(function ($class_name) {
		$filename = $class_name . '.class.php';
	    require_once $filename;
	});

	session_start();
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Lecture 7</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

		<!-- Boootstrap -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<style type="text/css">
			body {background-color:#eee;}
			.container{background-color:white;}
			#title{font-family: 'Lobster', cursive;}
		</style>
	</head>
	<body>
		<div class="container my-5 p-5">