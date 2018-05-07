<?php


session_start();

function message()
{
	if(isset($_SESSION['errorMessage'])){

		 $output = "<div class='alert alert-danger'>";

		 $output.= htmlentities($_SESSION['errorMessage']);

		 $output.= "</div>";

		 $_SESSION['errorMessage'] = null;

	return $output;
	}
}

function successmessage()
{
	if(isset($_SESSION['serrorMessage'])){

		$output = "<div class='alert alert-success'>"; 

 $output.= htmlentities($_SESSION['serrorMessage']);

$output.= "</div>";

 $_SESSION['serrorMessage'] = null;
 
	return $output;
	}
}


