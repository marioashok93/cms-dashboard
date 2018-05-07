<?php


$username = 'root';

$password = '';

$localhost = 'localhost';

$dbName = 'cms';

$con = mysqli_connect($localhost,$username,$password,$dbName);


if(mysqli_connect_errno($con))
{
	echo "Error".mysqli_connect_errno();
}