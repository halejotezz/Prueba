<?php
require_once('database_credentials.php');
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$result = '';

if( $mysqli->connect_errno )
{
	echo 'Error en la conexión';
	exit;
}

function get_user_data_by_email( $email )
{
	global $mysqli;
	$sql = "";
	$result = $mysqli->query($sql);
	return $result->fetch_assoc();

}